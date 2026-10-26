<style>
/* ===================== SIMPLE RESPONSIVE FOOTER ===================== */
.imp-footer {
   background: #0d0b24;
   color: #c9c9d6;
   font-family: Poppins, sans-serif;
   padding: 60px 0 0;
}
.imp-footer * { box-sizing: border-box; }
.imp-footer-inner {
   max-width: 1200px;
   margin: 0 auto;
   padding: 0 24px;
}
.imp-footer-top {
   display: grid;
   grid-template-columns: 1.6fr 1fr 1.2fr 1fr;
   gap: 40px;
   padding-bottom: 40px;
}
.imp-footer-logo {
   font-family: Poppins, sans-serif;
   font-size: 26px;
   font-weight: 700;
   color: #fff;
   margin: 0 0 18px;
}
.imp-footer-logo span { color: #2c409f; }
.imp-footer-about {
   font-size: 14px;
   line-height: 1.7;
   color: #a7a7b8;
   margin: 0 0 22px;
   max-width: 320px;
}
.imp-social {
   display: flex;
   gap: 10px;
}
.imp-social a {
   width: 38px;
   height: 38px;
   border-radius: 50%;
   background: #2c409f;
   color: #fff;
   display: flex;
   align-items: center;
   justify-content: center;
   font-size: 15px;
   text-decoration: none;
   transition: transform .25s ease, background .25s ease;
}
.imp-social a:hover { background: #3a52c4; transform: translateY(-3px); color: #fff; }
.imp-footer-col h4 {
   font-family: Poppins, sans-serif;
   font-size: 16px;
   font-weight: 700;
   color: #fff;
   margin: 0 0 18px;
}
.imp-footer-col ul {
   list-style: none;
   margin: 0;
   padding: 0;
}
.imp-footer-col ul li { margin-bottom: 12px; }
.imp-footer-col ul li a {
   color: #a7a7b8;
   font-size: 14px;
   text-decoration: none;
   transition: color .2s ease;
}
.imp-footer-col ul li a:hover { color: #fff; }
.imp-footer-col p {
   font-size: 14px;
   line-height: 1.7;
   color: #a7a7b8;
   margin: 0 0 16px;
}
.imp-store-btns { display: flex; flex-wrap: wrap; gap: 12px; }
.imp-store-btns a { display: inline-flex; }
.imp-store-btns img { height: 42px; width: auto; }
.imp-footer-divider {
   height: 1px;
   background: rgba(255,255,255,0.12);
   margin: 0;
}
.imp-footer-bottom {
   display: flex;
   align-items: center;
   justify-content: space-between;
   flex-wrap: wrap;
   gap: 12px;
   padding: 22px 0 28px;
   font-size: 13px;
   color: #8f8fa3;
}
.imp-footer-bottom a { color: #c9c9d6; text-decoration: none; }
.imp-footer-bottom a:hover { color: #fff; text-decoration: underline; }

/* ---------- Tablet ---------- */
@media (max-width: 992px) {
   .imp-footer-top { grid-template-columns: 1fr 1fr; gap: 32px; }
}
/* ---------- Phone ---------- */
@media (max-width: 600px) {
   .imp-footer { padding-top: 44px; }
   .imp-footer-inner { padding: 0 18px; }
   .imp-footer-top { grid-template-columns: 1fr; gap: 28px; padding-bottom: 30px; }
   .imp-footer-about { max-width: none; }
   .imp-footer-bottom { flex-direction: column; align-items: flex-start; text-align: left; }
}
</style>

<footer class="imp-footer" id="footer">
   <div class="imp-footer-inner">
      <div class="imp-footer-top">

         <!-- Brand -->
         <div class="imp-footer-brand">
            <div class="imp-footer-logo">imprint<span>.ai</span></div>
            <p class="imp-footer-about">IMPRINT AI LLC is a Delaware head-quartered SaaS product company run by IIT/IIM alumni, passionate about using technology to solve real problems of their customers in this ever-transforming world.</p>
            <div class="imp-social">
               <a href="https://twitter.com/imprint_ai" target="_blank" rel="noopener" title="Twitter"><i class="fa fa-twitter"></i></a>
               <a href="https://www.facebook.com/IMPRINTAILLC/" target="_blank" rel="noopener" title="Facebook"><i class="fa fa-facebook"></i></a>
               <a href="https://www.linkedin.com/company/imprint-ai-llc" target="_blank" rel="noopener" title="LinkedIn"><i class="fa fa-linkedin"></i></a>
               <a href="https://www.instagram.com/imprint.ai/" target="_blank" rel="noopener" title="Instagram"><i class="fa fa-instagram"></i></a>
               <a href="https://www.pinterest.com/imprintllc2021" target="_blank" rel="noopener" title="Pinterest"><i class="fa fa-pinterest-p"></i></a>
            </div>
         </div>

         <!-- Quick Access -->
         <div class="imp-footer-col">
            <h4>Quick Access</h4>
            <ul>
               <li><a href="<?php echo base_url(''); ?>">Home</a></li>
               <li><a href="<?php echo base_url('aboutus'); ?>">About Us</a></li>
               <li><a href="<?php echo base_url('casestudy'); ?>">Case Studies</a></li>
               <li><a href="<?php echo base_url('contactus'); ?>">Contact Us</a></li>
               <li><a href="<?php echo base_url('solution'); ?>">Other Solutions</a></li>
            </ul>
         </div>

         <!-- Downloads -->
         <div class="imp-footer-col">
            <h4>Downloads</h4>
            <p>Choose your native platform and download the app.</p>
            <div class="imp-store-btns">
               <a target="_blank" rel="noopener" href="https://apps.apple.com/us/app/imprint-asti/id1204732517">
                  <img src="<?php echo base_url('/assets/images/appstore.png'); ?>" alt="Download on the App Store" />
               </a>
               <a target="_blank" rel="noopener" href="https://play.google.com/store/apps/details?id=com.astiinfotech.Imprint&hl=en_IN&gl=US">
                  <img src="<?php echo base_url('/assets/images/playstore.png'); ?>" alt="Get it on Google Play" />
               </a>
            </div>
         </div>

         <!-- Explore -->
         <div class="imp-footer-col">
            <h4>Explore</h4>
            <ul>
               <li><a href="<?php echo base_url('field-force-management-software'); ?>">Field Force Management Software</a></li>
            </ul>
         </div>

      </div>

      <div class="imp-footer-divider"></div>

      <div class="imp-footer-bottom">
         <span><a href="<?php echo base_url('terms-and-condition'); ?>">Terms of use</a> | <a href="<?php echo base_url('privacy-policy'); ?>">Privacy Policy</a></span>
         <span>Copyright &copy; <?php echo date('Y'); ?> by <a href="https://www.imprintai.us">Imprint</a>. All Rights Reserved.</span>
      </div>
   </div>
</footer>

<section class="wgl-social-share_pages standard_style" style=" top:350px;">
   <div class="share_social-wpapper">
      <ul>
         <li>
            <a class="share_page share_twitter" target="_blank" rel="noopener" href="https://twitter.com/imprint_ai"><span
                  class="fa fa-twitter"></span></a>
         </li>
         <li>
            <a class="share_page share_facebook" target="_blank" rel="noopener" href="https://www.facebook.com/IMPRINTAILLC/"><span
                  class="fa fa-facebook"></span></a>
         </li>
         <li>
            <a class="share_page share_google share_gplus" target="_blank" rel="noopener"
               href="https://www.instagram.com/imprint.ai/"><span class="fa fa-instagram"></span></a>
         </li>
         <li>
            <a class="share_page share_linkedin" target="_blank" rel="noopener"
               href="https://www.linkedin.com/company/imprint-ai-llc"><span class="fa fa-linkedin"></span></a>
         </li>
         <li>
            <a class="share_page share_linkedin" target="_blank" rel="noopener" href="https://www.pinterest.com/imprintllc2021"><span
                  class="fa fa-pinterest"></span></a>
         </li>
      </ul>
   </div>
</section>
<a href='#' id='scroll_up'></a><span id="softlab-footer-inline-css" class="dynamic_styles-footer"
   style="display: none;">#softlab_button_6054cf77c1ab5 .wgl_button_link {
   color: rgba(102,75,196,1);
   }#softlab_button_6054cf77c1ab5 .wgl_button_link:hover {
   color: rgba(255,255,255,1);
   }#softlab_button_6054cf77c1ab5 .wgl_button_link {
   border-color: rgba(102,75,196,1);
   background-color: transparent;
   }#softlab_button_6054cf77c1ab5 .wgl_button_link:hover {
   border-color: rgba(102,75,196,1);
   background-color: rgba(102,75,196,1);
   }#softlab_button_6054cf77ce065 .wgl_button_link {
   color: rgba(102,75,196,1);
   }#softlab_button_6054cf77ce065 .wgl_button_link:hover {
   color: rgba(255,255,255,1);
   }#softlab_button_6054cf77ce065 .wgl_button_link {
   border-color: rgba(102,75,196,1);
   background-color: transparent;
   }#softlab_button_6054cf77ce065 .wgl_button_link:hover {
   border-color: rgba(102,75,196,1);
   background-color: rgba(102,75,196,1);
   }#softlab_services_6054cf7811392 .services_icon{
   color: #6a4bc4;
   -webkit-text-fill-color: transparent;
   -webkit-background-clip: text;
   background-image: -webkit-linear-gradient(0deg, #6a4bc4 0%, #d75dbc 100%);
   background-image: -moz-linear-gradient(0deg, #6a4bc4 0%, #d75dbc 100%);
   }#softlab_services_6054cf7811392 .services_icon_wrapper{
   color: #6a4bc4;
   border-color: #6a4bc4;
   }#softlab_services_6054cf78118a3 .services_icon{
   color: #54e0c4;
   -webkit-text-fill-color: transparent;
   -webkit-background-clip: text;
   background-image: -webkit-linear-gradient(0deg, #54e0c4 0%, #76e8ec 100%);
   background-image: -moz-linear-gradient(0deg, #54e0c4 0%, #76e8ec 100%);
   }#softlab_services_6054cf78118a3 .services_icon_wrapper{
   color: #54e0c4;
   border-color: #54e0c4;
   }#softlab_services_6054cf78118a3 .services_button.button-read-more{
   color: #54e0c4;
   }#softlab_services_6054cf78118a3 .services_button.button-read-more:hover{
   color: #664bc4;
   }@media only screen and (max-width: 1200px){
   #softlab_spacer_6054cf7811ca0 .spacing_size{
   display: none;
   }
   #softlab_spacer_6054cf7811ca0 .spacing_size-desktops{
   display: block;
   }
   }@media only screen and (max-width: 992px){
   #softlab_spacer_6054cf7811ca0 .spacing_size{
   display: none;
   }
   #softlab_spacer_6054cf7811ca0 .spacing_size-tablet{
   display: block;
   }
   }@media only screen and (max-width: 768px) {
   #extended_6054cf781264c{
   display: none;
   }
   }@media only screen and (max-width: 1199px){
   #softlab_spacer_6054cf7813456 .spacing_size{
   display: none;
   }
   #softlab_spacer_6054cf7813456 .spacing_size-desktops{
   display: block;
   }
   }#softlab_infobox_6054cf781680c .infobox_icon_container{ margin-top: 5px !important;margin-right: 28px !important;
   }#softlab_infobox_6054cf78170ad .infobox_icon_container{ margin-top: 5px !important;margin-right: 28px !important;
   }#softlab_infobox_6054cf78179c4 .infobox_icon_container{ margin-top: 5px !important;margin-right: 28px !important;
   }#softlab_infobox_6054cf78185f7 .infobox_icon_container{ margin-top: 5px !important;margin-right: 28px !important;
   }#softlab_infobox_6054cf7818fa5 .infobox_icon_container{ margin-top: 5px !important;margin-right: 28px !important;
   }#softlab_infobox_6054cf7819940 .infobox_icon_container{ margin-top: 5px !important;margin-right: 28px !important;
   }@media only screen and (max-width: 800px){
   #softlab_spacer_6054cf7828840 .spacing_size{
   display: none;
   }
   #softlab_spacer_6054cf7828840 .spacing_size-tablet{
   display: block;
   }
   }#softlab_counter_6054cf7829cbb .counter_title{
   color: #ffffff;
   }#softlab_counter_6054cf7829cbb .counter_value_wrapper,
   #softlab_counter_6054cf7829cbb.layout_top .counter_content_wrapper{
   color: #ffffff;
   }#softlab_counter_6054cf782a552 .counter_title{
   color: #ffffff;
   }#softlab_counter_6054cf782a552 .counter_value_wrapper,
   #softlab_counter_6054cf782a552.layout_top .counter_content_wrapper{
   color: #ffffff;
   }#softlab_counter_6054cf782abd7 .counter_title{
   color: #ffffff;
   }#softlab_counter_6054cf782abd7 .counter_value_wrapper,
   #softlab_counter_6054cf782abd7.layout_top .counter_content_wrapper{
   color: #ffffff;
   }#softlab_counter_6054cf782b2a1 .counter_title{
   color: #ffffff;
   }#softlab_counter_6054cf782b2a1 .counter_value_wrapper,
   #softlab_counter_6054cf782b2a1.layout_top .counter_content_wrapper{
   color: #ffffff;
   }@media only screen and (max-width: 992px){
   #softlab_spacer_6054cf782c600 .spacing_size{
   display: none;
   }
   #softlab_spacer_6054cf782c600 .spacing_size-tablet{
   display: block;
   }
   }#softlab_infobox_6054cf782ca0d .infobox_wrapper,#softlab_infobox_6054cf782ca0d .infobox_wrapper:after { padding-top:
   34px !important;padding-right: 20px !important;padding-bottom: 30px !important;padding-left: 27px
   !important;border-radius: 30px !important;}#softlab_infobox_6054cf782ca0d .infobox_icon_container{ margin-right: 22px
   !important; }#softlab_infobox_6054cf782ca0d .infobox_wrapper{box-shadow: none;}#softlab_infobox_6054cf782ca0d:hover
   .infobox_wrapper{box-shadow: inset 0px 14px 20px 0px rgba(0,0,0,0.08);border-color: transparent;
   }#softlab_infobox_6054cf782dc17 .infobox_wrapper,#softlab_infobox_6054cf782dc17 .infobox_wrapper:after { padding-top:
   34px !important;padding-right: 20px !important;padding-bottom: 30px !important;padding-left: 27px
   !important;border-radius: 30px !important;}#softlab_infobox_6054cf782dc17 .infobox_icon_container{ margin-right: 22px
   !important; }#softlab_infobox_6054cf782dc17 .infobox_wrapper{box-shadow: none;}#softlab_infobox_6054cf782dc17:hover
   .infobox_wrapper{box-shadow: inset 0px 14px 20px 0px rgba(0,0,0,0.08);border-color: transparent;
   }#softlab_infobox_6054cf782eaf4 .infobox_wrapper,#softlab_infobox_6054cf782eaf4 .infobox_wrapper:after { padding-top:
   34px !important;padding-right: 20px !important;padding-bottom: 30px !important;padding-left: 27px
   !important;border-radius: 30px !important;}#softlab_infobox_6054cf782eaf4 .infobox_icon_container{ margin-right: 22px
   !important; }#softlab_infobox_6054cf782eaf4 .infobox_wrapper{box-shadow: none;}#softlab_infobox_6054cf782eaf4:hover
   .infobox_wrapper{box-shadow: inset 0px 14px 20px 0px rgba(0,0,0,0.08);border-color: transparent;
   }@media only screen and (max-width: 992px){
   #softlab_spacer_6054cf7830960 .spacing_size{
   display: none;
   }
   #softlab_spacer_6054cf7830960 .spacing_size-tablet{
   display: block;
   }
   }#softlab_infobox_6054cf7830d5d .infobox_wrapper,#softlab_infobox_6054cf7830d5d .infobox_wrapper:after { padding-top:
   34px !important;padding-right: 20px !important;padding-bottom: 30px !important;padding-left: 27px
   !important;border-radius: 30px !important;}#softlab_infobox_6054cf7830d5d .infobox_icon_container{ margin-right: 22px
   !important; }#softlab_infobox_6054cf7830d5d .infobox_wrapper{box-shadow: none;}#softlab_infobox_6054cf7830d5d:hover
   .infobox_wrapper{box-shadow: inset 0px 14px 20px 0px rgba(0,0,0,0.08);border-color: transparent;
   }#softlab_infobox_6054cf7831663 .infobox_wrapper,#softlab_infobox_6054cf7831663 .infobox_wrapper:after { padding-top:
   34px !important;padding-right: 20px !important;padding-bottom: 30px !important;padding-left: 27px
   !important;border-radius: 30px !important;}#softlab_infobox_6054cf7831663 .infobox_icon_container{ margin-right: 22px
   !important; }#softlab_infobox_6054cf7831663 .infobox_wrapper{box-shadow: none;}#softlab_infobox_6054cf7831663:hover
   .infobox_wrapper{box-shadow: inset 0px 14px 20px 0px rgba(0,0,0,0.08);border-color: transparent;
   }#softlab_infobox_6054cf7831ff8 .infobox_wrapper,#softlab_infobox_6054cf7831ff8 .infobox_wrapper:after { padding-top:
   34px !important;padding-right: 20px !important;padding-bottom: 30px !important;padding-left: 27px
   !important;border-radius: 30px !important;}#softlab_infobox_6054cf7831ff8 .infobox_icon_container{ margin-right: 22px
   !important; }#softlab_infobox_6054cf7831ff8 .infobox_wrapper{box-shadow: none;}#softlab_infobox_6054cf7831ff8:hover
   .infobox_wrapper{box-shadow: inset 0px 14px 20px 0px rgba(0,0,0,0.08);border-color: transparent;
   }#softlab_testimonials_6054cf7835db7 .testimonials_position {
   color: #8b9baf;
   }#softlab_carousel_6054cf783640d .slick-arrow {
   border-color: transparent;
   background-color: transparent;
   box-shadow: 0px 9px 30px 0px rgba(0,0,0,0);
   }
   #softlab_carousel_6054cf783640d .slick-arrow:after {
   color: rgba(102,75,196,0.5);
   }#softlab_carousel_6054cf783640d .slick-arrow:hover {
   background-color: transparent;
   box-shadow: 0px 9px 30px 0px rgba(0,0,0,0);
   }
   #softlab_carousel_6054cf783640d .slick-arrow:hover:after {
   color: #664bc4;
   }
   #softlab_carousel_6054cf783640d .slick-arrow:hover:before {
   opacity: 0;
   }#softlab_infobox_6054cf7836d98 .infobox_icon{
   color: #ffffff;
   }#softlab_infobox_6054cf7836d98 .infobox_wrapper:hover .infobox_icon{
   color: #ffffff;
   }#softlab_infobox_6054cf7836d98 .infobox_icon_container{
   background: -webkit-radial-gradient(100% 110%, circle farthest-corner, #d75dbc 10%, #6a4bc4 50%);background:
   radial-gradient(circle farthest-corner at 100% 110%, #d75dbc 10%, #6a4bc4 50%);
   }#softlab_infobox_6054cf7836d98 .infobox_icon_container:after{
   content: '';
   background: #6a4bc4
   }#softlab_infobox_6054cf7836d98 .infobox_button{
   color: #8b9baf;
   }#softlab_infobox_6054cf7836d98 .infobox_button:hover{
   color: #6a4bc4;
   }#softlab_infobox_6054cf7836d98 .infobox_wrapper{
   background-color: #ffffff;
   }#softlab_infobox_6054cf7836d98:hover .infobox_wrapper{
   background-color: #ffffff;
   }#softlab_infobox_6054cf7836d98 .infobox_wrapper,#softlab_infobox_6054cf7836d98 .infobox_wrapper:after { padding-top:
   28px !important;padding-right: 35px !important;padding-bottom: 24px !important;padding-left: 35px
   !important;border-radius: 30px !important;}#softlab_infobox_6054cf7836d98 .infobox_icon_container{ margin-top: 8px
   !important;border-radius: 50% !important; }#softlab_infobox_6054cf7836d98 .infobox_button { margin-top: 8px
   !important;border-radius: 50% !important; }@media (max-width: 480px) {
   #softlab_infobox_6054cf7836d98 .infobox_wrapper {
   padding: 20px !important;
   }
   }#softlab_infobox_6054cf7836d98 .infobox_wrapper{box-shadow: 0px 15px 38px 0px
   rgba(0,0,0,0.1);}#softlab_infobox_6054cf7836d98 .infobox_icon_container{box-shadow: 0px 9px 30px 0px
   rgba(109,75,196,0.4);}#softlab_infobox_6054cf7837585 .infobox_icon{
   color: #ffffff;
   }#softlab_infobox_6054cf7837585 .infobox_wrapper:hover .infobox_icon{
   color: #ffffff;
   }#softlab_infobox_6054cf7837585 .infobox_icon_container{
   background: -webkit-radial-gradient(100% 110%, circle farthest-corner, #d75dbc 10%, #6a4bc4 50%);background:
   radial-gradient(circle farthest-corner at 100% 110%, #d75dbc 10%, #6a4bc4 50%);
   }#softlab_infobox_6054cf7837585 .infobox_icon_container:after{
   content: '';
   background: #6a4bc4
   }#softlab_infobox_6054cf7837585 .infobox_button{
   color: #8b9baf;
   }#softlab_infobox_6054cf7837585 .infobox_button:hover{
   color: #6a4bc4;
   }#softlab_infobox_6054cf7837585 .infobox_wrapper{
   background-color: #ffffff;
   }#softlab_infobox_6054cf7837585:hover .infobox_wrapper{
   background-color: #ffffff;
   }#softlab_infobox_6054cf7837585 .infobox_wrapper,#softlab_infobox_6054cf7837585 .infobox_wrapper:after { padding-top:
   28px !important;padding-right: 35px !important;padding-bottom: 24px !important;padding-left: 35px
   !important;border-radius: 30px !important;}#softlab_infobox_6054cf7837585 .infobox_icon_container{ margin-top: 8px
   !important;border-radius: 50% !important; }#softlab_infobox_6054cf7837585 .infobox_button { margin-top: 8px
   !important;border-radius: 50% !important; }@media (max-width: 480px) {
   #softlab_infobox_6054cf7837585 .infobox_wrapper {
   padding: 20px !important;
   }
   }#softlab_infobox_6054cf7837585 .infobox_wrapper{box-shadow: 0px 15px 38px 0px
   rgba(0,0,0,0.1);}#softlab_infobox_6054cf7837585 .infobox_icon_container{box-shadow: 0px 9px 30px 0px
   rgba(109,75,196,0.4);}#softlab_infobox_6054cf7837e39 .infobox_icon{
   color: #ffffff;
   }#softlab_infobox_6054cf7837e39 .infobox_wrapper:hover .infobox_icon{
   color: #ffffff;
   }#softlab_infobox_6054cf7837e39 .infobox_icon_container{
   background: -webkit-radial-gradient(100% 110%, circle farthest-corner, #d75dbc 10%, #6a4bc4 50%);background:
   radial-gradient(circle farthest-corner at 100% 110%, #d75dbc 10%, #6a4bc4 50%);
   }#softlab_infobox_6054cf7837e39 .infobox_icon_container:after{
   content: '';
   background: #6a4bc4
   }#softlab_infobox_6054cf7837e39 .infobox_button{
   color: #8b9baf;
   }#softlab_infobox_6054cf7837e39 .infobox_button:hover{
   color: #6a4bc4;
   }#softlab_infobox_6054cf7837e39 .infobox_wrapper{
   background-color: #ffffff;
   }#softlab_infobox_6054cf7837e39:hover .infobox_wrapper{
   background-color: #ffffff;
   }#softlab_infobox_6054cf7837e39 .infobox_wrapper,#softlab_infobox_6054cf7837e39 .infobox_wrapper:after { padding-top:
   28px !important;padding-right: 35px !important;padding-bottom: 24px !important;padding-left: 35px
   !important;border-radius: 30px !important;}#softlab_infobox_6054cf7837e39 .infobox_icon_container{ margin-top: 8px
   !important;border-radius: 50% !important; }#softlab_infobox_6054cf7837e39 .infobox_button { margin-top: 8px
   !important;border-radius: 50% !important; }@media (max-width: 480px) {
   #softlab_infobox_6054cf7837e39 .infobox_wrapper {
   padding: 20px !important;
   }
   }#softlab_infobox_6054cf7837e39 .infobox_wrapper{box-shadow: 0px 15px 38px 0px
   rgba(0,0,0,0.1);}#softlab_infobox_6054cf7837e39 .infobox_icon_container{box-shadow: 0px 9px 30px 0px
   rgba(109,75,196,0.4);}#softlab_button_6054cf7838e7a .wgl_button_link {
   color: #161616;
   }#softlab_button_6054cf7838e7a .wgl_button_link:hover {
   color: #ffffff;
   }#softlab_button_6054cf7838e7a .wgl_button_link:before { background-image: -webkit-radial-gradient(100% 150%, circle
   farthest-corner, #ffffff 10%, #ffffff 50%);background-image: radial-gradient(circle farthest-corner at 100% 150%,
   #ffffff 10%, #ffffff 50%); }#softlab_button_6054cf7838e7a .wgl_button_link:after { background-image:
   -webkit-radial-gradient(100% 150%, circle farthest-corner, #d75dbc 10%, #6a4bc4 50%);background-image:
   radial-gradient(circle farthest-corner at 100% 150%, #d75dbc 10%, #6a4bc4 50%); }#softlab_button_6054cf7838e7a
   .btn_border_gradient:before { background-image: -webkit-radial-gradient(100% 150%, circle farthest-corner, #6a4bc4
   10%, #6a4bc4 50%);background-image: radial-gradient(circle farthest-corner at 100% 150%, #6a4bc4 10%, #6a4bc4 50%);
   }#softlab_button_6054cf7838e7a .btn_border_gradient:after { background-image: -webkit-radial-gradient(100% 150%,
   circle farthest-corner, #d75dbc 10%, #6a4bc4 50%);background-image: radial-gradient(circle farthest-corner at 100%
   150%, #d75dbc 10%, #6a4bc4 50%); }#softlab_button_6054cf7838e7a a { box-shadow: none }#softlab_button_6054cf7838e7a
   a:hover { box-shadow: 0px 9px 30px 0 rgba(106,75,196,0.4) }#softlab_soc_icon_wrap_6054cf7839291 a{
   color: #54e0c4;
   }#softlab_soc_icon_wrap_6054cf7839291 a:hover{
   color: #54e0c4;
   }#softlab_soc_icon_wrap_6054cf7839291{
   display: inline-block;
   }#softlab_img_layer_6054cf7839952 .img_layer_image_wrapper:nth-child(1) .img_layer_image {transition: all 800ms;
   -webkit-transition-delay: 0ms; -moz-transition-delay: 0ms; -o-transition-delay: 0ms; transition-delay:
   0ms;}#softlab_img_layer_6054cf7839952 .img_layer_image_wrapper:nth-child(2) .img_layer_image {transition: all 800ms;
   -webkit-transition-delay: 200ms; -moz-transition-delay: 600ms; -o-transition-delay: 600ms; transition-delay:
   600ms;}#softlab_img_layer_6054cf7839952 .img_layer_image_wrapper:nth-child(3) .img_layer_image {transition: all
   800ms; -webkit-transition-delay: 400ms; -moz-transition-delay: 1200ms; -o-transition-delay: 1200ms; transition-delay:
   1200ms;}#softlab_img_layer_6054cf7839952 .img_layer_image_wrapper:nth-child(4) .img_layer_image {transition: all
   800ms; -webkit-transition-delay: 1800ms; -moz-transition-delay: 1800ms; -o-transition-delay: 1800ms;
   transition-delay: 1800ms;}@media only screen and (max-width: 768px) {
   #extended_6054cf783f802{
   display: none;
   }
   }#softlab_pricing_plan_6054cf7842fc6 .pricing_title{
   color: #737373;
   }#softlab_pricing_plan_6054cf7842fc6 .pricing_price_wrap{
   color: #161616;
   }#softlab_pricing_plan_6054cf7842fc6 .pricing_cur{
   color: #c4cdd7;
   }#softlab_pricing_plan_6054cf7842fc6 .pricing_desc{
   color: #ffffff;
   background-color: #54e0c4;
   }#softlab_button_6054cf78437fc .wgl_button_link {
   color: #161616;
   }#softlab_button_6054cf78437fc .wgl_button_link:hover {
   color: #ffffff;
   }#softlab_button_6054cf78437fc .wgl_button_link {
   border-color: #664bc4;
   background-color: #ffffff;
   }#softlab_button_6054cf78437fc .wgl_button_link:hover {
   border-color: #664bc4;
   background-color: #664bc4;
   }#softlab_button_6054cf78437fc a { box-shadow: none }#softlab_button_6054cf78437fc a:hover { box-shadow: 0px 9px 30px
   0 rgba(102,75,196,0.4) }#softlab_pricing_plan_6054cf7843f28 .pricing_title{
   color: #737373;
   }#softlab_pricing_plan_6054cf7843f28 .pricing_price_wrap{
   color: #161616;
   }#softlab_pricing_plan_6054cf7843f28 .pricing_cur{
   color: #c4cdd7;
   }#softlab_pricing_plan_6054cf7843f28 .pricing_desc{
   color: #ffffff;
   background-color: #aa55c0;
   }#softlab_button_6054cf7844692 .wgl_button_link {
   color: #161616;
   }#softlab_button_6054cf7844692 .wgl_button_link:hover {
   color: #ffffff;
   }#softlab_button_6054cf7844692 .wgl_button_link {
   border-color: #664bc4;
   background-color: #ffffff;
   }#softlab_button_6054cf7844692 .wgl_button_link:hover {
   border-color: #664bc4;
   background-color: #664bc4;
   }#softlab_button_6054cf7844692 a { box-shadow: none }#softlab_button_6054cf7844692 a:hover { box-shadow: 0px 9px 30px
   0 rgba(102,75,196,0.4) }#softlab_pricing_plan_6054cf7844e6c .pricing_title{
   color: #737373;
   }#softlab_pricing_plan_6054cf7844e6c .pricing_price_wrap{
   color: #161616;
   }#softlab_pricing_plan_6054cf7844e6c .pricing_cur{
   color: #c4cdd7;
   }#softlab_pricing_plan_6054cf7844e6c .pricing_desc{
   color: #ffffff;
   background-color: #664bc4;
   }#softlab_button_6054cf78455bb .wgl_button_link {
   color: #161616;
   }#softlab_button_6054cf78455bb .wgl_button_link:hover {
   color: #ffffff;
   }#softlab_button_6054cf78455bb .wgl_button_link {
   border-color: #664bc4;
   background-color: #ffffff;
   }#softlab_button_6054cf78455bb .wgl_button_link:hover {
   border-color: #664bc4;
   background-color: #664bc4;
   }#softlab_button_6054cf78455bb a { box-shadow: none }#softlab_button_6054cf78455bb a:hover { box-shadow: 0px 9px 30px
   0 rgba(102,75,196,0.4) }#softlab_pricing_plan_6054cf78461b3 .pricing_title{
   color: #737373;
   }#softlab_pricing_plan_6054cf78461b3 .pricing_price_wrap{
   color: #161616;
   }#softlab_pricing_plan_6054cf78461b3 .pricing_cur{
   color: #c4cdd7;
   }#softlab_pricing_plan_6054cf78461b3 .pricing_desc{
   color: #ffffff;
   background-color: #54e0c4;
   }#softlab_button_6054cf7846923 .wgl_button_link {
   color: #161616;
   }#softlab_button_6054cf7846923 .wgl_button_link:hover {
   color: #ffffff;
   }#softlab_button_6054cf7846923 .wgl_button_link {
   border-color: #664bc4;
   background-color: #ffffff;
   }#softlab_button_6054cf7846923 .wgl_button_link:hover {
   border-color: #664bc4;
   background-color: #664bc4;
   }#softlab_button_6054cf7846923 a { box-shadow: none }#softlab_button_6054cf7846923 a:hover { box-shadow: 0px 9px 30px
   0 rgba(102,75,196,0.4) }#softlab_pricing_plan_6054cf7846ff5 .pricing_title{
   color: #737373;
   }#softlab_pricing_plan_6054cf7846ff5 .pricing_price_wrap{
   color: #161616;
   }#softlab_pricing_plan_6054cf7846ff5 .pricing_cur{
   color: #c4cdd7;
   }#softlab_pricing_plan_6054cf7846ff5 .pricing_desc{
   color: #ffffff;
   background-color: #aa55c0;
   }#softlab_button_6054cf7847878 .wgl_button_link {
   color: #161616;
   }#softlab_button_6054cf7847878 .wgl_button_link:hover {
   color: #ffffff;
   }#softlab_button_6054cf7847878 .wgl_button_link {
   border-color: #664bc4;
   background-color: #ffffff;
   }#softlab_button_6054cf7847878 .wgl_button_link:hover {
   border-color: #664bc4;
   background-color: #664bc4;
   }#softlab_button_6054cf7847878 a { box-shadow: none }#softlab_button_6054cf7847878 a:hover { box-shadow: 0px 9px 30px
   0 rgba(102,75,196,0.4) }#softlab_pricing_plan_6054cf7847f3a .pricing_title{
   color: #737373;
   }#softlab_pricing_plan_6054cf7847f3a .pricing_price_wrap{
   color: #161616;
   }#softlab_pricing_plan_6054cf7847f3a .pricing_cur{
   color: #c4cdd7;
   }#softlab_pricing_plan_6054cf7847f3a .pricing_desc{
   color: #ffffff;
   background-color: #664bc4;
   }#softlab_button_6054cf7848694 .wgl_button_link {
   color: #161616;
   }#softlab_button_6054cf7848694 .wgl_button_link:hover {
   color: #ffffff;
   }#softlab_button_6054cf7848694 .wgl_button_link {
   border-color: #664bc4;
   background-color: #ffffff;
   }#softlab_button_6054cf7848694 .wgl_button_link:hover {
   border-color: #664bc4;
   background-color: #664bc4;
   }#softlab_button_6054cf7848694 a { box-shadow: none }#softlab_button_6054cf7848694 a:hover { box-shadow: 0px 9px 30px
   0 rgba(102,75,196,0.4) }@media only screen and (max-width: 768px) {
   #extended_6054cf7848a29{
   display: none;
   }
   }#softlab_button_6054cf784aef5 .wgl_button_link {
   color: #ffffff;
   }#softlab_button_6054cf784aef5 .wgl_button_link:hover {
   color: #161616;
   }#softlab_button_6054cf784aef5 .wgl_button_link:before { background-image: -webkit-radial-gradient(100% 150%, circle
   farthest-corner, #d75dbc 10%, #6a4bc4 50%);background-image: radial-gradient(circle farthest-corner at 100% 150%,
   #d75dbc 10%, #6a4bc4 50%); }#softlab_button_6054cf784aef5 .wgl_button_link:after { background-image:
   -webkit-radial-gradient(100% 150%, circle farthest-corner, #ffffff 10%, #ffffff 50%);background-image:
   radial-gradient(circle farthest-corner at 100% 150%, #ffffff 10%, #ffffff 50%); }#softlab_button_6054cf784aef5
   .btn_border_gradient:before { background-image: -webkit-radial-gradient(100% 150%, circle farthest-corner, #d75dbc
   10%, #6a4bc4 50%);background-image: radial-gradient(circle farthest-corner at 100% 150%, #d75dbc 10%, #6a4bc4 50%);
   }#softlab_button_6054cf784aef5 .btn_border_gradient:after { background-image: -webkit-radial-gradient(100% 150%,
   circle farthest-corner, #d75dbc 10%, #6a4bc4 50%);background-image: radial-gradient(circle farthest-corner at 100%
   150%, #d75dbc 10%, #6a4bc4 50%); }#softlab_button_6054cf784aef5 a { box-shadow: 0px 9px 30px 0 rgba(106,75,196,0.4)
   }#softlab_button_6054cf784aef5 a:hover { box-shadow: none }#softlab_button_6054cf784aef5 a .wgl_button-icon{
   color: #ffffff;
   }#softlab_button_6054cf784aef5 a:hover .wgl_button-icon{
   color: #664bc4;
   }#softlab_button_6054cf784b4e9 .wgl_button_link {
   color: #161616;
   }#softlab_button_6054cf784b4e9 .wgl_button_link:hover {
   color: #ffffff;
   }#softlab_button_6054cf784b4e9 .wgl_button_link:before { background-image: -webkit-radial-gradient(100% 150%, circle
   farthest-corner, #ffffff 10%, #ffffff 50%);background-image: radial-gradient(circle farthest-corner at 100% 150%,
   #ffffff 10%, #ffffff 50%); }#softlab_button_6054cf784b4e9 .wgl_button_link:after { background-image:
   -webkit-radial-gradient(100% 150%, circle farthest-corner, #d75dbc 10%, #6a4bc4 50%);background-image:
   radial-gradient(circle farthest-corner at 100% 150%, #d75dbc 10%, #6a4bc4 50%); }#softlab_button_6054cf784b4e9
   .btn_border_gradient:before { background-image: -webkit-radial-gradient(100% 150%, circle farthest-corner, #6a4bc4
   10%, #6a4bc4 50%);background-image: radial-gradient(circle farthest-corner at 100% 150%, #6a4bc4 10%, #6a4bc4 50%);
   }#softlab_button_6054cf784b4e9 .btn_border_gradient:after { background-image: -webkit-radial-gradient(100% 150%,
   circle farthest-corner, #d75dbc 10%, #6a4bc4 50%);background-image: radial-gradient(circle farthest-corner at 100%
   150%, #d75dbc 10%, #6a4bc4 50%); }#softlab_button_6054cf784b4e9 a { box-shadow: none }#softlab_button_6054cf784b4e9
   a:hover { box-shadow: 0px 9px 30px 0 rgba(106,75,196,0.4) }#softlab_button_6054cf784b4e9 a .wgl_button-icon{
   color: #664bc4;
   }#softlab_button_6054cf784b4e9 a:hover .wgl_button-icon{
   color: #ffffff;
   }@media only screen and (max-width: 768px){
   #softlab_spacer_6054cf784ed71 .spacing_size{
   display: none;
   }
   #softlab_spacer_6054cf784ed71 .spacing_size-tablet{
   display: block;
   }
   }#softlab_soc_icon_wrap_6054cf784f8dc a{
   background: #664bc4;
   border-color: #ffffff;
   }#softlab_soc_icon_wrap_6054cf784f8dc a:hover{
   background: #ffffff;
   border-color: #664bc4;
   }.softlab_module_social #soc_icon_6054cf784f94b1{
   color: #ffffff;
   }.softlab_module_social #soc_icon_6054cf784f94b1:hover{
   color: #ffffff;
   }.softlab_module_social #soc_icon_6054cf784f94b1{
   background: #664bc4;
   }.softlab_module_social #soc_icon_6054cf784f94b1:hover{
   background: #1da1f2;
   }.softlab_module_social #soc_icon_6054cf784f9832{
   color: #ffffff;
   }.softlab_module_social #soc_icon_6054cf784f9832:hover{
   color: #ffffff;
   }.softlab_module_social #soc_icon_6054cf784f9832{
   background: #664bc4;
   }.softlab_module_social #soc_icon_6054cf784f9832:hover{
   background: #3b5998;
   }.softlab_module_social #soc_icon_6054cf784f99a3{
   color: #ffffff;
   }.softlab_module_social #soc_icon_6054cf784f99a3:hover{
   color: #ffffff;
   }.softlab_module_social #soc_icon_6054cf784f99a3{
   background: #664bc4;
   }.softlab_module_social #soc_icon_6054cf784f99a3:hover{
   background: #007bb5;
   }.softlab_module_social #soc_icon_6054cf784f9ae4{
   color: #ffffff;
   }.softlab_module_social #soc_icon_6054cf784f9ae4:hover{
   color: #ffffff;
   }.softlab_module_social #soc_icon_6054cf784f9ae4{
   background: #664bc4;
   }.softlab_module_social #soc_icon_6054cf784f9ae4:hover{
   background: #c32aa3;
   }.softlab_module_social #soc_icon_6054cf784f9bf5{
   color: #ffffff;
   }.softlab_module_social #soc_icon_6054cf784f9bf5:hover{
   color: #ffffff;
   }.softlab_module_social #soc_icon_6054cf784f9bf5{
   background: #664bc4;
   }.softlab_module_social #soc_icon_6054cf784f9bf5:hover{
   background: #bd081c;
   }</span>
<section class="wgl-env-theme_toolbar">
   <div class="wgl-env-theme__overlay"></div>
   <div class="wgl-env-theme__wrapper" id="wgl-toolbar">
   </div>
</section>
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400%7CPoppins:700%2C600" rel="stylesheet"
   property="stylesheet" type="text/css" media="all">

<script type="text/javascript">
   if (typeof revslider_showDoubleJqueryError === "undefined") {
      function revslider_showDoubleJqueryError(sliderID) {
         var err = "<div class='rs_error_message_box'>";
         err += "<div class='rs_error_message_oops'>Oops...</div>";
         err += "<div class='rs_error_message_content'>";
         err += "You have some jquery.js library include that comes after the Slider Revolution files js inclusion.<br>";
         err += "To fix this, you can:<br>&nbsp;&nbsp;&nbsp; 1. Set 'Module General Options' ->  'jQuery & OutPut Filters' -> 'Put JS to Body' to on";
         err += "<br>&nbsp;&nbsp;&nbsp; 2. Find the double jQuery.js inclusion and remove it";
         err += "</div>";
         err += "</div>";
         jQuery(sliderID).show().html(err);
      }
   }		
</script>
<script type="text/javascript">
   document.querySelectorAll('img').forEach(function (img) {
      img.addEventListener('contextmenu', function (e) {
         e.preventDefault();
      });
   });

   document.addEventListener('keydown', function (e) {
      if (e.key === 'PrintScreen') {
         alert('Screenshots are not allowed.');
         e.preventDefault();
      }
   });

</script>
<script type='text/javascript' src="<?php echo base_url('/assets/js/underscore.min.js'); ?>"></script>
<script type='text/javascript' src="<?php echo base_url('/assets/js/backbone.min.js'); ?>"></script>

<script type='text/javascript' src="<?php echo base_url('/assets/js/contact-form-scripts.js'); ?>"></script>
<script type='text/javascript' src="<?php echo base_url('/assets/js/js.cookie.min.js'); ?>"></script>

<script type='text/javascript' src="<?php echo base_url('/assets/js/theme-addons.js'); ?>"></script>
<script type='text/javascript'>
   /* <![CDATA[ */
   var wgl_core = { "ajaxurl": "index.html", "slickSlider": "http:\/\/softlab.wgl-demo.net\/wp-content\/themes\/softlab\/js\/slick.min.js", "JarallaxPlugin": "http:\/\/softlab.wgl-demo.net\/wp-content\/themes\/softlab\/js\/jarallax-video.min.js", "JarallaxPluginVideo": "wp-content/themes/softlab/js/jarallax.min.js", "like": "Like", "unlike": "Unlike" };
   /* ]]> */
</script>
<script type='text/javascript' src="<?php echo base_url('/assets/js/contactus.js'); ?>"></script>
<script type='text/javascript' src="<?php echo base_url('/assets/js/theme.js'); ?>"></script>
<script type='text/javascript' src="<?php echo base_url('/assets/js/wp-embed.min.js'); ?>"></script>
<script type='text/javascript' src="<?php echo base_url('/assets/js/js_composer_front.min.js'); ?>"></script>
<script type='text/javascript' src="<?php echo base_url('/assets/js/slick.min.js'); ?>"></script>
<script type='text/javascript' src="<?php echo base_url('/assets/js/jquery.paroller.min.js'); ?>"></script>
<script type='text/javascript' src="<?php echo base_url('/assets/js/vc-accordion.min.js'); ?>"></script>
<script type='text/javascript' src="<?php echo base_url('/assets/js/vc-tta-autoplay.min.js'); ?>"></script>
<script type='text/javascript' src="<?php echo base_url('/assets/js/vc-tabs.min.js'); ?>"></script>
<script type='text/javascript' src="<?php echo base_url('/assets/js/jquery.appear.js'); ?>"></script>
<script type='text/javascript' src="<?php echo base_url('/assets/js/waypoints.min.js'); ?>"></script>
<script type="text/javascript" id="wgl_custom_footer_js"></script>
</body>
<script>
        $(document).ready(function () {
            if (typeof $.fn.fancybox === 'function') {
                $('[data-fancybox]').fancybox({
                    buttons: ["zoom", "close"],
                    loop: true,
                    animationEffect: "fade"
                });
            }
        });
    </script>
<style>
   @media only screen and (max-width: 765px) {
      .policy-text {
         text-align: center !important;
      }

      .cnsj27t {
         margin-left: 0 !important;
      }
      .vc_col-md-6, #softlab_soc_icon_wrap_6054cf784f8dc{
         text-align: center !important;
      }
   }
</style>

</html>
