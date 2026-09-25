<?php
$this->load->helper('url');
$this->load->view('header/header'); ?>
<style>
    .sticky_active a { color: #313131 !important; }
    .wpb_single_image * { border-radius: 40px; }
    .wpb_casestudy { width: 100%; margin-left: 20px; }
    .trans { text-align: center; margin: 0 !important; padding: 0 !important; transition: 0.3s; }
    .trans:hover { transform: scale(1.1); }
    .text-column { width: 40%; margin-bottom: 32px; }
    .image-column { width: 60%; display: flex; flex-direction: row; }
    @media only screen and (max-width: 765px) {
        .reverse_col { display: flex; flex-direction: column-reverse; }
        .flex-item { width: 100%; }
        .image-column { flex-direction: row; }
    }
    @media only screen and (min-width: 766px) and (max-width: 1001px) {
        .text-column { width: 50%; padding-right: 20px; padding-top: 60px; }
        .image-column { width: 50%; flex-direction: row; }
    }
</style>

<main id="main">
    <div class="post_featured_bg">
        <div class="blog-post blog_skrollr_init blog-post-single-item format-standard-image">
            <div class="single_meta post-198 post type-post status-publish format-standard has-post-thumbnail hentry">
                <div class="item_wrapper">
                    <div class="blog-post_content">
                        <div class="blog-post_bg_media"
                             style="background-image:url(assets/images/casestudy/security-guard-management1.png)"
                             data-center="background-position: 50% 0px;"
                             data-top-bottom="background-position: 50% -100px;"
                             data-anchor-target=".blog-post-single-item">
                            <div class="wgl-container">
                                <div class="row">
                                    <div class="content-container wgl_col-12" data-center="opacity: 1"
                                         data-200-top="opacity: 1" data-0-top="opacity: 0"
                                         data-anchor-target=".blog-post-single-item .blog-post_content">
                                        <div class="meta-wrapper">
                                            <span class="blog-post_meta-categories"><span style="color:#54e0c4;">April 05, 2025</span></span>
                                        </div>
                                        <h1 class="blog-post_title">Smarter Security Guard Tracking & Payroll Management with IMPRINT</h1>
                                        <p class="subheading">Keeping Security Tight, Operations Smooth, and Payroll Hassle‑Free</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="wgl-container">
        <div class="row sidebar_right single_type-3" style="margin-top:0;">
            <div id="main-content" class="wgl_col-12">
                <!-- Did You Know -->
                <div class="wpb_text_column wpb_content_element">
                    <div class="wpb_wrapper">
                        <p><strong>Did you know?</strong> The global security services market is expected to reach <strong>$350 billion by 2028</strong>, with an increasing focus on technology-driven workforce management.</p>
                    </div>
                </div>

                <div class="softlab_module_spacing"><div class="spacing_size spacing_size-initial" style="height:48px;"></div></div>

                <!-- Introduction -->
                <div class="wpb_text_column wpb_content_element">
                    <div class="wpb_wrapper">
                        <p>Managing a security workforce isn’t just about deploying guards—it’s about ensuring real-time visibility, accountability, and seamless payroll processing. Late check-ins, manual errors, and untracked absences can disrupt operations and create security gaps. IMPRINT AI solves this with intelligent Security Guard Tracking and Payroll Management.</p>
                    </div>
                </div>

                <div class="softlab_module_spacing"><div class="spacing_size spacing_size-initial" style="height:72px;"></div></div>

                <!-- Client -->
                <div class="wpb_text_column wpb_content_element">
                    <div class="wpb_wrapper">
                        <h4>Client:</h4>
                        <p>A Leading Security Services Provider managing 500+ guards across multiple locations.</p>
                    </div>
                </div>

                <div class="softlab_module_spacing"><div class="spacing_size spacing_size-initial" style="height:48px;"></div></div>

                <!-- Challenge -->
                <div class="wpb_text_column wpb_content_element">
                    <div class="wpb_wrapper">
                        <h4>Challenge: Manual Attendance & Payroll Errors</h4>
                        <p>Significant inefficiencies arose from manual attendance records, unverified check-ins, and payroll discrepancies, undermining accountability and morale.</p>
                        <ul>
                            <li>Discrepancies in manual attendance records</li>
                            <li>Payroll errors and delayed disbursements</li>
                            <li>Lack of real-time deployment visibility</li>
                            <li>Security gaps due to untracked absences</li>
                        </ul>
                    </div>
                </div>

                <div class="softlab_module_spacing"><div class="spacing_size spacing_size-initial" style="height:72px;"></div></div>

                <!-- Transformation -->
                <div class="wbp_flex">
                    <div class="wpb_casestudy flex-item text-column">
                        <h4>How IMPRINT Transformed Management</h4>
                        <ul>
                            <li><strong>AI-Powered Face Recognition Attendance:</strong> Guards upload selfies via the IMPRINT app with geo-tagged time and location stamps.</li>
                            <li><strong>Geo-Fencing for Secure Tracking:</strong> Attendance restricted to predefined zones ensures compliance.</li>
                            <li><strong>Real-Time Monitoring & Face-Matching:</strong> Automated identity verification with scheduled alerts.</li>
                            <li><strong>Instant Alerts for Unattended Zones:</strong> Supervisors notified immediately when guards exit designated areas.</li>
                        </ul>
                    </div>
                    <div class="image-column flex-item">
                        <div class="trans"><img style="width:75%;" src="assets/images/casestudy/security-guard-management2.png" alt="AI Face Recognition Attendance"></div>
                    </div>
                </div>

                <div class="softlab_module_spacing"><div class="spacing_size spacing_size-initial" style="height:72px;"></div></details>

                <!-- Results -->
                <div class="wbp_flex reverse_col">
                    <div class="image-column flex-item"><div class="trans"><img style="width:75%;" src="assets/images/casestudy/security-guard-management3.png" alt="Dashboard Payroll Automation"></div></div>
                    <div class="wpb_casestudy flex-item text-column">
                        <h4>Key Results Achieved</h4>
                        <ul>
                            <li><strong>24/7 Surveillance Coverage:</strong> No critical location unattended.</li>
                            <li><strong>Enhanced Workforce Visibility:</strong> Real-time dashboards optimized deployments.</li>
                            <li><strong>Automated Payroll:</strong> Reduced discrepancies by 90% and accelerated salary processing.</li>
                            <li><strong>Demand Forecasting:</strong> Overtime costs lowered by 20% through analytics.</li>
                        </ul>
                    </div>
                </div>

                <div class="softlab_module_spacing"><div class="spacing_size spacing_size-initial" style="height:72px;"></div></div>

                <!-- Why Trust -->
                <div class="wpb_text_column wpb_content_element">
                    <div class="wpb_wrapper">
                        <h4>Why Organizations Trust IMPRINT AI</h4>
                        <ul>
                            <li>✅ Seamless Integration with existing workflows</li>
                            <li>✅ Eliminates manual errors in attendance & payroll</li>
                            <li>✅ Geo-tagged, time-stamped records for accountability</li>
                            <li>✅ AI-driven insights for strategic decisions</li>
                        </ul>
                    </div>
                </div>

                <div class="softlab_module_spacing"><div class="spacing_size spacing_size-initial" style="height:72px;"></div></div>

                <!-- Conclusion -->
                <div class="wpb_text_column wpb_content_element">
                    <div class="wpb_wrapper">
                        <p>IMPRINT AI empowered our client to achieve precision attendance tracking, real-time monitoring, and flawless payroll management—transforming security operations.</p>
                        <p><a href="<?= base_url('contactus'); ?>" target="_blank">Contact us</a> to see how IMPRINT can streamline your workforce operations.</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</main>

<?php $this->load->view('footer/footer'); ?>
