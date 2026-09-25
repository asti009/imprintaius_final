<?php
declare(strict_types=1);

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json; charset=UTF-8');

function fail(string $msg): void {
    echo json_encode(['success' => false, 'message' => $msg]);
    exit;
}

function clean_header_value(string $value): string {
    // prevent header injection
    return str_replace(["\r", "\n"], '', trim($value));
}

function get_post(string $key): string {
    return isset($_POST[$key]) ? trim((string)$_POST[$key]) : '';
}

// Basic rate limit by IP (1 request / 10 seconds)
$ip = $_SERVER['REMOTE_ADDR'] ?? 'unknown';
$rateFile = sys_get_temp_dir() . DIRECTORY_SEPARATOR . 'contactus_' . md5($ip) . '.txt';
if (file_exists($rateFile)) {
    $last = (int) file_get_contents($rateFile);
    if (time() - $last < 10) {
        fail('Too many requests. Please wait and try again.');
    }
}
file_put_contents($rateFile, (string)time());

// Read input
$to          = clean_header_value(get_post('to'));
$name        = get_post('name');
$from        = clean_header_value(get_post('email'));
$subject     = get_post('subject');
$phone       = get_post('phone');
$query       = get_post('message');
$companyname = get_post('companyName');

// Validate
if ($to === '' || !filter_var($to, FILTER_VALIDATE_EMAIL)) {
    fail('Receiver email is invalid.');
}
if ($name === '' || mb_strlen($name) < 3 || mb_strlen($name) > 50) {
    fail('Name must be 3 to 50 characters.');
}
if ($from === '' || !filter_var($from, FILTER_VALIDATE_EMAIL)) {
    fail('Sender email is invalid.');
}
if ($subject === '' || mb_strlen($subject) < 3 || mb_strlen($subject) > 100) {
    fail('Subject must be 3 to 100 characters.');
}
if ($phone === '' || !preg_match('/^[0-9]{6,16}$/', $phone)) {
    fail('Phone must be 6 to 16 digits.');
}
if ($query === '' || mb_strlen($query) < 5 || mb_strlen($query) > 2000) {
    fail('Message must be 5 to 2000 characters.');
}
if ($companyname !== '' && (mb_strlen($companyname) < 2 || mb_strlen($companyname) > 100)) {
    fail('Company name must be 2 to 100 characters.');
}

// Log safely (outside web root if possible)
$logLine = implode('|', [
    date('Y-m-d H:i:s'),
    $ip,
    $to,
    $name,
    $from,
    $subject,
    $phone,
    $companyname,
    str_replace(["\r", "\n"], ' ', $query),
]) . PHP_EOL;
@file_put_contents(__DIR__ . '/astiinfotechquery.log', $logLine, FILE_APPEND);

// Build message
$message  = "Dear Team,\n\n";
$message .= "Mr/Ms. {$name} has below query.\n";
$message .= "======================================================================\n";
$message .= $query . "\n";
$message.='======================================================================'."\n";
$message .='You can reach to '.$name.' on '.$phone.' or email address '.$from."\n";
$message .='You are receiving this mail because you are configured as receiver for this mail. If you are not interested in mail,please contact development team immediately. '."\n";
$message .='This is a system generated e-mail and please do not reply.Add info@astiinfotech.in to your white list / safe sender list.Else, your mailbox filter or ISP (Internet Service Provider) may stop you from receiving e-mails.'."\n";
$message .=''."\n";
$message .='Regards,'."\n".
'Asti infotech PVT. LTD';

// Headers
$headers = [];
$headers[] = 'From: no-reply@astiinfotech.com';
$headers[] = 'Reply-To: ' . $from;
$headers[] = 'CC: kavitha.u@astiinfotech.com, sonal.malhotra@shikshainfotech.com,sunity.choudhary@shikshainfotech.com,abhishek.maitra@astiinfotech.com,';
$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-Type: text/plain; charset=UTF-8';

$ok = mail($to, $subject, $message, implode("\r\n", $headers));

if ($ok) {
    echo json_encode(['success' => true, 'message' => 'mail sent successfully']);
} else {
    echo json_encode(['success' => false, 'message' => 'Oops! something went wrong.']);
}
