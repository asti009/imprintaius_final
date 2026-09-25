<?php
 header('Access-Control-Allow-Origin: *');  
error_reporting(1);
//Name
//email
//subject
//message
  $to=$_POST['to'];
	$name=$_POST['name'];
	$from=$_POST['email'];
	$subject=$_POST['subject'];
  $phone=$_POST['phone'];
	$Query=$_POST['message'];
$companyname=$_POST['companyName'];
  //$subject="Auto Generated Mail : Astiinfotech contact us form";
$file = fopen("astiinfotechquery.log","a");
fwrite($file,$to."|".$name."|".$name."|".$from."|".$subject."|".$phone."|".$_SERVER['HTTP_REFERER']."|".date("Y-m-d H:i:s")."|".$Query."|".$_SERVER['REMOTE_ADDR']."|".$_SERVER['HTTP_X_FORWARDED_FOR']."|".PHP_EOL);
  $message='';
  $message .= 'Dear Team,'."\n"; 
  $message .=''."\n";
  $message .= 'Mr/Ms.'.$name.' has below query '.".\n"; 
  $message.='======================================================================'."\n";
  $message.=''.$Query."\n";
  // if($companyname!=null && $companyname!=""){
	// $message.='======================================================================'."\n";
	// $message.=''.$companyname."\n";
  // }
  $message.='======================================================================'."\n";
  $message .='You can reach to '.$name.' on '.$phone.' or email address '.$from."\n"; 
  $message .='You are receiving this mail because you are configured as receiver for this mail. If you are not interested in mail,please contact development team immediately. '."\n";
  $message .='This is a system generated e-mail and please do not reply.Add info@astiinfotech.in to your white list / safe sender list.Else, your mailbox filter or ISP (Internet Service Provider) may stop you from receiving e-mails.'."\n"; 
  $message .=''."\n";
  $message .='Regards,'."\n". 
             'Asti infotech PVT. LTD';
 
  $header = "From:".'no-reply@astiinfotech.com'." \r\n".
  "CC:sonal.malhotra@shikshainfotech.com,sunity.choudhary@shikshainfotech.com,abhishek.maitra@astiinfotech.com,";

  //$to ="venkat.sudhakar@shikshainfotech.com";

  $retval = mail ($to,$subject,$message,$header);
   header("access-control-allow-origin: *");
   if( $retval == true )
   {
      header('Content-Type: application/json');
      echo json_encode(array('success' => true,'message'=>'mail sent successfully'));
   }
   else
   {
      header('Content-Type: application/json');
      echo json_encode(array('success' => false,'message'=>'Oops! something went wrong.'));
   }
?>