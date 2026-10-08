<?php 
   defined('BASEPATH') OR exit('No direct script access allowed');
   $this->load->helper('url');
   $this->load->view('header/header'); ?>
<!-- Start Home Hero -->
<style>
#main { padding: 0 !important; }
</style>

<style>
.imprint-hero {
    padding: 80px 0 60px;
   position: relative;
   overflow: hidden;
}
.imprint-hero::before {
   content: '';
   position: absolute;
   top: -120px; right: -120px;
   width: 500px; height: 500px;
   background: radial-gradient(circle, rgba(44,64,159,0.10) 0%, transparent 70%);
   border-radius: 50%;
   pointer-events: none;
}
.imprint-hero::after {
   content: '';
   position: absolute;
   bottom: -80px; left: -80px;
   width: 350px; height: 350px;
   background: radial-gradient(circle, rgba(44,64,159,0.10) 0%, transparent 70%);
   border-radius: 50%;
   pointer-events: none;
}
.imprint-hero-inner {
   max-width: 1200px;
   margin: 0 auto;
   padding: 0 30px;
   display: flex;
   align-items: center;
   gap: 60px;
}
.imprint-hero-content {
   flex: 1;
   min-width: 0;
}
.imprint-hero-badge {
   display: inline-flex;
   align-items: center;
   gap: 10px;
   background: rgba(44,64,159,0.07);
   border: 1.5px solid rgba(44,64,159,0.18);
   border-radius: 50px;
   padding: 8px 16px 8px 10px;
   margin-bottom: 28px;
}
.imprint-hero-badge-icon {
   width: 28px;
   height: 28px;
   border-radius: 50%;
   background: #2c409f;
   display: flex;
   align-items: center;
   justify-content: center;
   flex-shrink: 0;
}
.imprint-hero-badge-icon i {
   color: #fff;
   font-size: 13px;
}
.imprint-hero-badge-dot {
   width: 7px;
   height: 7px;
   border-radius: 50%;
   background: #2c409f;
   flex-shrink: 0;
   animation: badgePulse 1.8s ease-in-out infinite;
}
@keyframes badgePulse {
   0%, 100% { opacity: 1; transform: scale(1); }
   50% { opacity: 0.4; transform: scale(0.7); }
}
.imprint-hero-badge span {
   font-family: Poppins, sans-serif;
   font-size: 12px;
   font-weight: 600;
   color: #2c409f;
   letter-spacing: 0.4px;
   text-transform: uppercase;
   white-space: nowrap;
}
.imprint-hero h1 {
   font-family: Poppins, sans-serif;
   font-size: 46px;
   font-weight: 700;
   color: #161616;
   line-height: 1.18;
   margin: 0 0 22px;
}
.imprint-hero h1 span {
   color: #2c409f;
}
.imprint-hero-sub {
   font-family: Poppins, sans-serif;
   font-size: 18px;
   font-weight: 400;
   color: #4f4e4e;
   line-height: 1.75;
   max-width: 540px;
   margin: 0 0 36px;
}
.imprint-hero-btns {
   display: flex;
   gap: 16px;
   flex-wrap: wrap;
   margin-bottom: 44px;
}
.imprint-hero-btn-primary {
   display: inline-block;
   padding: 15px 34px;
   background: #2c409f;
   color: #fff !important;
   border-radius: 50px;
   font-family: Poppins, sans-serif;
   font-weight: 600;
   font-size: 16px;
   text-decoration: none;
   box-shadow: 0 8px 24px rgba(44,64,159,0.35);
   transition: transform 0.2s, box-shadow 0.2s;
}
.imprint-hero-btn-primary:hover {
   transform: translateY(-2px);
   box-shadow: 0 12px 32px rgba(44,64,159,0.45);
   color: #fff !important;
}
.imprint-hero-btn-outline {
   display: inline-block;
   padding: 14px 34px;
   border: 2px solid #2c409f;
   color: #2c409f !important;
   border-radius: 50px;
   font-family: Poppins, sans-serif;
   font-weight: 600;
   font-size: 16px;
   text-decoration: none;
   background: transparent;
   transition: background 0.2s, color 0.2s;
}
.imprint-hero-btn-outline:hover {
   background: #2c409f;
   color: #fff !important;
}
.imprint-hero-stats {
   display: flex;
   gap: 36px;
   flex-wrap: wrap;
}
.imprint-hero-stat {
   display: flex;
   flex-direction: column;
}
.imprint-hero-stat strong {
   font-family: Poppins, sans-serif;
   font-size: 26px;
   font-weight: 700;
   color: #2c409f;
   line-height: 1;
}
.imprint-hero-stat span {
   font-family: Poppins, sans-serif;
   font-size: 13px;
   color: #4f4e4e;
   margin-top: 4px;
}
.imprint-hero-stat-divider {
   width: 1px;
   background: #c8cfe8;
   align-self: stretch;
}
.imprint-hero-visual {
   flex: 0 0 480px;
   position: relative;
}
.imprint-hero-visual img.hero-main-img {
   width: 100%;
   display: block;
   position: relative;
   z-index: 2;
}
.imprint-hero-float-card {
   position: absolute;
   background: #fff;
   border-radius: 14px;
   box-shadow: 0 8px 30px rgba(44,64,159,0.15);
   padding: 12px 18px;
   display: flex;
   align-items: center;
   gap: 10px;
   z-index: 3;
   animation: heroFloat 3s ease-in-out infinite;
}
.imprint-hero-float-card.card-top {
   top: 30px; left: -30px;
   animation-delay: 0s;
}
.imprint-hero-float-card.card-bottom {
   bottom: 60px; right: -20px;
   animation-delay: 1.5s;
}
.imprint-hero-float-card .card-icon {
   width: 38px; height: 38px;
   border-radius: 10px;
   background: #2c409f;
   display: flex; align-items: center; justify-content: center;
   flex-shrink: 0;
}
.imprint-hero-float-card .card-icon i {
   color: #fff;
   font-size: 16px;
}
.imprint-hero-float-card .card-text strong {
   display: block;
   font-family: Poppins, sans-serif;
   font-size: 13px;
   font-weight: 700;
   color: #161616;
}
.imprint-hero-float-card .card-text span {
   font-family: Poppins, sans-serif;
   font-size: 11px;
   color: #2c409f;
}
@keyframes heroFloat {
   0%, 100% { transform: translateY(0); }
   50% { transform: translateY(-8px); }
}
@media (max-width: 1024px) {
   .imprint-hero-inner { gap: 40px; }
   .imprint-hero-visual { flex: 0 0 380px; }
   .imprint-hero h1 { font-size: 38px; }
}
@media (max-width: 768px) {
   .imprint-hero { padding: 50px 0 40px; }
   .imprint-hero-inner { flex-direction: column; gap: 40px; padding: 0 20px; }
   .imprint-hero-visual { flex: none; width: 100%; max-width: 420px; margin: 0 auto; }
   .imprint-hero h1 { font-size: 30px; }
   .imprint-hero-sub { font-size: 16px; }
   .imprint-hero-float-card.card-top { left: -10px; }
   .imprint-hero-float-card.card-bottom { right: -10px; }
}
@media (max-width: 480px) {
   .imprint-hero { padding: 36px 0 30px; }
   .imprint-hero-inner { padding: 0 16px; gap: 28px; }
   .imprint-hero h1 { font-size: 24px; }
   .imprint-hero-sub { font-size: 14px; margin-bottom: 24px; }
   .imprint-hero-badge { padding: 6px 12px 6px 8px; gap: 8px; }
   .imprint-hero-badge-icon { width: 24px; height: 24px; }
   .imprint-hero-badge-icon i { font-size: 11px; }
   .imprint-hero-badge span { font-size: 10px; }
   .imprint-hero-btns { gap: 10px; margin-bottom: 28px; }
   .imprint-hero-btn-primary, .imprint-hero-btn-outline { padding: 12px 22px; font-size: 14px; }
   .imprint-hero-stats { gap: 16px; }
   .imprint-hero-stat strong { font-size: 20px; }
   .imprint-hero-stat-divider { display: none; }
   .imprint-hero-float-card { padding: 8px 12px; }
   .imprint-hero-float-card .card-icon { width: 30px; height: 30px; }
   .imprint-hero-float-card .card-text strong { font-size: 11px; }
   .imprint-hero-float-card .card-text span { font-size: 10px; }
}
</style>

<main id="main">

<section class="imprint-hero" aria-label="Homepage Hero">
   <div class="imprint-hero-inner">

      <!-- Left: Content -->
      <div class="imprint-hero-content">
         <div class="imprint-hero-badge">
            <div class="imprint-hero-badge-icon"><i class="fa fa-bolt"></i></div>
            <span>AI-Powered Workforce Management</span>
            <div class="imprint-hero-badge-dot"></div>
         </div>
         <h1>Real-time Workforce Visibility<br><span> Enhanced Productivity</span></h1>
         <p class="imprint-hero-sub">Simplify the Workforce Equation with IMPRINT &mdash; our End-to-end Field Force Management Solution trusted by 100+ customers across 3 continents.</p>
         <div class="imprint-hero-btns">
            <a href="<?php echo base_url('contactus#Demo');?>" class="imprint-hero-btn-primary">Request a Demo</a>
            <a href="https://imprint.astiinfotech.com/#/login" target="_blank" rel="noopener" class="imprint-hero-btn-outline">Free Sign-Up</a>
         </div>
         <div class="imprint-hero-stats">
            <div class="imprint-hero-stat">
               <strong>100+</strong>
               <span>Customers Worldwide</span>
            </div>
            <div class="imprint-hero-stat-divider"></div>
            <div class="imprint-hero-stat">
               <strong>1000+</strong>
               <span>Sales Managers</span>
            </div>
            <div class="imprint-hero-stat-divider"></div>
            <div class="imprint-hero-stat">
               <strong>3</strong>
               <span>Continents</span>
            </div>
         </div>
      </div>

      <!-- Right: Visual -->
      <div class="imprint-hero-visual">
         <div class="imprint-hero-float-card card-top">
            <div class="card-icon"><i class="fa fa-map-marker"></i></div>
            <div class="card-text">
               <strong>Live Tracking</strong>
               <span>Real-time field visibility</span>
            </div>
         </div>
         <img class="hero-main-img" src="<?php echo base_url('/assets/images/rev-w.png');?>" alt="Imprint AI Workforce Management Dashboard" />
         <div class="imprint-hero-float-card card-bottom">
            <div class="card-icon"><i class="fa fa-bar-chart"></i></div>
            <div class="card-text">
               <strong>+22% Efficiency</strong>
               <span>Proven productivity boost</span>
            </div>
         </div>
      </div>

   </div>
</section>

         <div class="wgl-container">
            <div class="row ">
               <div id='main-content' class="wgl_col-12">
                  <div  class="vc_row wpb_row vc_row-fluid vc_custom_1550152149551">
                     <div class="wpb_column vc_column_container vc_col-sm-12">
                        <div class="vc_column-inner ">
                           <div class="wpb_wrapper">
                              <div class="wpb_revslider_element wpb_content_element">
                                 <!-- Revolution Slider hidden: replaced by imprint-hero section above -->
                                 <p class="rs-p-wp-fix"></p>
                                  <div class="div-mob" style="display:none;">
                                    <div class="vc_row wpb_row vc_row-fluid" style="margin-left: 0;margin-right:0;">
                                     <div  class ="softlab_module_spacing">
                                 <div class="spacing_size spacing_size-initial" style="height:40px;"></div>
                              </div>
                                                   <div class="img-banner" style="background-color: rgba(102,75,196,1); border-radius: 20px; padding:20px;width: fit-content;">
                                                      <img src="<?php echo base_url('/assets/images/rev-image-2-2.png');?>" alt="location" width="40"/>
                                                   </div>
                                                    <div  class ="softlab_module_spacing">
                                 <div class="spacing_size spacing_size-initial" style="height:19px;"></div>
                              </div>
                              <div class="head-text">
                                 <h5 style="line-height: 1.333; font-weight: 700; font-size: 26px;">AI-powered Real-time Workforce Visibility = Enhanced Productivity</h5>
                              </div>
                               <div  class ="softlab_module_spacing">
                                 <div class="spacing_size spacing_size-initial" style="height:19px;"></div>
                              </div>
                               <div class="p-text">
                                 <h5 style="line-height: 1.875!important; font-size: 18px; font-weight: 100!important;">Simplify the Workforce Equation with IMPRINT, our End-to-end Workforce Management Solution</h5>
                              </div>
                                <div  class ="softlab_module_spacing">
                                 <div class="spacing_size spacing_size-initial" style="height:19px;"></div>
                              </div>
                              <div class="header_button">
                                 <div class="wrapper">
                                    <div id="softlab_button_6054cf77c1ab5" class="softlab_module_button wgl_button wgl_button-s aleft">
                                       <a class="wgl_button_link" style="box-shadow: none;margin-right:15px;" href="<?php echo base_url('contactus#Demo');?>">Request a demo<span class="btn_border_gradient"></span></a>
                                    <a class="wgl_button_link" style="box-shadow: none;" href="https://imprint.astiinfotech.com/#/login">Free Sign-Up<span class="btn_border_gradient"></span></a></div>
                                 </div>
                                  <div  class ="softlab_module_spacing">
                                 <div class="spacing_size spacing_size-initial" style="height:19px;"></div>
                              </div>
                                 
                              </div>
                               <div class="img-banner" >
                                                      <img src="<?php echo base_url('/assets/images/mob-bg.jpg');?>" alt="imprint-mobile" />
                                                   </div>
                                                </div>
                                                </div>


                                                 <div class="div-desk" style="display:none;">
                                 <rs-module-wrap id="rev_slider_1_1_wrapper" data-source="gallery" style="background:transparent;padding:0;margin:0px auto;margin-top:0;margin-bottom:0;">
                                    <rs-module id="rev_slider_1_1" style="display:none;" data-version="6.1.2">
                                       <rs-slides>
                                          <rs-slide data-key="rs-1" data-title="Slide" data-anim="ei:d;eo:d;s:-10;r:0;t:notransition;sl:d;">

                                             <!--
                                                -->
                                             <rs-layer
                                                id="slider-1-slide-1-layer-16" 
                                                data-type="text"
                                                data-rsp_ch="on"
                                                data-xy="xo:193px,229px,257px,25px;yo:30px,105px,90px,77px;"
                                                data-text="l:22;a:inherit;"
                                                data-dim="w:1450px,1075px,717px,544px;"
                                                data-frame_0="x:right;o:1;skX:-85px;tp:600;"
                                                data-frame_1="tp:600;st:60;sp:1110;sR:60;"
                                                data-frame_999="o:0;tp:600;st:w;sR:7830;"
                                                style="z-index:5;font-family:Open Sans;"
                                                >
                                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px"
                                                   y="0px" viewBox="0 0 180 180" style="fill: #f7f9fd; transform: rotate(60deg);">
                                                   <pattern id="img1" patternUnits="userSpaceOnUse" width="100%" height="100%">
                                                      <image href="" x="0" y="0" width="100%" height="100%"/>
                                                   </pattern>
                                                   <path d="">
                                                      <animate  repeatCount="indefinite" attributeName="d" dur="10s"
                                                         values="
                                                         M6.5,39.4C7.9,62.9,6,81.5,3.8,94.8c-2.9,17.7-7.2,30.9,0.4,41.9c5.9,8.5,15.7,11,17.6,11.5
                                                         c17.9,4.5,26.2-9.4,64-27c25.6-11.9,39.7-13.9,45.3-28c3.1-7.9,1.9-15.3,1.5-17.3c-2.7-12.7-14.2-21.9-28.5-30.4
                                                         c-20-12-39.7-48.3-72-45.2C29.1,0.5,21.6,1.3,15.3,7C3.2,17.7,6,36.7,6.5,39.4z;
                                                         M6.5,39.4C7.9,62.9,6,81.5,3.8,94.8c-4.1,24.8-5.6,33.6,0.4,41.9c10.6,14.8,41.6,17.2,56,4.3
                                                         c11.2-9.9,4.2-21.5,15.8-31c13.8-11.4,29.9,0.5,45-12.3c9-7.6,11.1-18.4,11.7-21.9c2.5-17.1-9-30.9-16.7-40.1
                                                         C92.4,7.4,57-3,32.2,0.2C25,1.1,19.7,3.1,15.3,7C3.2,17.7,6,36.7,6.5,39.4z;
                                                         M6.5,39.4C4.9,52.6,3.2,71.6,3.8,94.8c1,39.1,7.2,45.3,10.4,47.7c9.5,7.1,18.1-0.1,46-1.5
                                                         c38.4-1.9,56.7,10.1,63.5,0.8c6.6-9.2-9.5-22.7-2.8-44c3.6-11.4,9.7-11.7,11.7-21.9c3.5-17.9-11.9-34.9-16.7-40.1
                                                         C91.8,9,56.5,9.9,47.7,10.2c-11.3,0.3-25.1,0.9-34,11.3C8.4,27.6,7,34.8,6.5,39.4z;
                                                         M6.5,39.4C7.9,62.9,6,81.5,3.8,94.8c-2.9,17.7-7.2,30.9,0.4,41.9c5.9,8.5,15.7,11,17.6,11.5
                                                         c17.9,4.5,26.2-9.4,64-27c25.6-11.9,39.7-13.9,45.3-28c3.1-7.9,1.9-15.3,1.5-17.3c-2.7-12.7-14.2-21.9-28.5-30.4
                                                         c-20-12-39.7-48.3-72-45.2C29.1,0.5,21.6,1.3,15.3,7C3.2,17.7,6,36.7,6.5,39.4z  "/>
                                                   </path>
                                                </svg>
                                             </rs-layer>
                                             <!--
                                                -->
                                                <style>
                                                   @media only screen and (min-width: 601px){
                                                   .div-desk{
                                                      display: block;
                                                   }
                                                   .div-mob{
                                                      display: none;
                                                   }
                                                   .counter_2, .count_text{
                                                      padding: 0 80px;
                                                   }
                                                   }
                                                   @media only screen and (max-width: 600px){
                                                   .div-desk{
                                                      display: none;
                                                   }
                                                   .div-mob{
                                                      display: block;
                                                   }
                                                   .vc_custom_1550589599529{
                                                      margin-top: 0!important;
                                                   }
                                                   .counter_2, .count_text{
                                                      padding: 20px;
                                                   }
                                                   }
                                                </style>
                                              
                                               
                                             <rs-layer
                                                id="slider-1-slide-1-layer-18" 
                                                data-type="image"
                                                data-rsp_ch="on"
                                                data-xy="xo:610px,490px,364px,241px;yo:178px,199px,36px,37px;"
                                                data-text="l:22;a:inherit;"
                                                data-dim="w:1021px,715px,470px,390px;h:721px,506px,333px,276px;"
                                                data-frame_0="x:right;o:1;tp:600;"
                                                data-frame_1="tp:600;st:1200;sp:1100;sR:1200;"
                                                data-frame_999="o:0;tp:600;st:w;sR:6700;"
                                                style="z-index:6;"
                                                ><img src="<?php echo base_url('/assets/images/rev-w.png');?>" width="1021" height="721" data-no-retina alt="Imprint"> </rs-layer>
                                             <!--
                                                -->
                                             <rs-layer
                                                id="slider-1-slide-1-layer-19" 
                                                class="rs-pxl-1"
                                                data-type="image"
                                                data-rsp_ch="on"
                                                data-xy="xo:656px,555px,519px,800px;yo:146px,148px,71px,149px;"
                                                data-text="l:22;a:inherit;"
                                                data-dim="w:750px,557px,284px,284px;h:199px,147px,75px,75px;"
                                                data-vbility="t,t,t,f"
                                                data-frame_0="y:-100%;o:1;tp:600;"
                                                data-frame_0_mask="u:t;"
                                                data-frame_1="tp:600;st:1800;sp:1100;sR:1800;"
                                                data-frame_1_mask="u:t;"
                                                data-frame_999="o:0;tp:600;st:w;sR:6100;"
                                                style="z-index:7;"
                                                ><img src="<?php echo base_url('/assets/images/rev-image.png');?>" width="750" height="199" data-no-retina alt="Imprint"> </rs-layer>
                                             <!--
                                                -->
                                             <rs-layer
                                                id="slider-1-slide-1-layer-20" 
                                                data-type="image"
                                                data-rsp_ch="on"
                                                data-xy="xo:-8px,-8px,-8px,0;yo:151px,281px,70px,50px;"
                                                data-text="l:22;a:inherit;"
                                                data-dim="w:139px,139px,100px,70px;h:140px,140px,101px,71px;"
                                                data-frame_0="y:-100%;o:1;tp:600;"
                                                data-frame_0_mask="u:t;"
                                                data-frame_1="tp:600;st:3000;sp:1100;sR:3000;"
                                                data-frame_1_mask="u:t;"
                                                data-frame_999="o:0;tp:600;st:w;sR:4900;"
                                                style="z-index:8;"
                                                class="rev_image" 
                                                ><img class="bg" src="<?php echo base_url('/assets/images/rev-image-2.png');?>"  width="139" height="140" data-no-retina alt="Imprint"> </rs-layer>
                                             <!--
                                                -->
                                             <rs-layer
                                                id="slider-1-slide-1-layer-22" 
                                                data-type="image"
                                                data-rsp_ch="on"
                                                data-xy="xo:-8px,-8px,-8px,0;yo:150px,280px,70px,50px;"
                                                data-text="l:22;a:inherit;"
                                                data-dim="w:139px,139px,100px,70px;h:140px,140px,101px,71px;"
                                                data-frame_0="sX:2;sY:2;tp:600;"
                                                data-frame_0_mask="u:t;"
                                                data-frame_1="tp:600;e:Power2.easeOut;st:3800;sp:1110;sR:3800;"
                                                data-frame_1_mask="u:t;"
                                                data-frame_999="o:0;tp:600;st:w;sR:4090;"
                                                data-loop_0="sX:0.8;sY:0.8;"
                                                data-loop_999="sp:4000;e:Power1.easeInOut;yym:t;yys:t;yyf:t;"
                                                style="z-index:9;"
                                                class="rev_image" 
                                                ><img src="<?php echo base_url('/assets/images/rev-image-2-1.png');?>" width="139" height="140" data-no-retina alt="Imprint"> </rs-layer>
                                             <!--
                                                -->
                                             <rs-layer
                                                id="slider-1-slide-1-layer-27" 
                                                class="rs-pxl-1"
                                                data-type="image"
                                                data-rsp_ch="on"
                                                data-xy="xo:497px,450px,337px,270px;yo:275px,280px,94px,65px;"
                                                data-text="l:22;a:inherit;"
                                                data-dim="w:433px,312px,217px,140px;h:698px,502px,350px,227px;"
                                                data-frame_0="y:bottom;o:1;rX:-20deg;rY:-20deg;tp:600;"
                                                data-frame_1="tp:600;e:Power3.easeOut;st:4600;sp:1500;sR:4600;"
                                                data-frame_999="o:0;tp:600;st:w;sR:2900;"
                                                style="z-index:10;"
                                                ><img src="<?php echo base_url('/assets/images/rev-tel-1-1.png');?>" width="433" height="698" data-no-retina alt="Imprint"> </rs-layer>
                                             <!--
                                                -->
                                             <rs-layer
                                                id="slider-1-slide-1-layer-28" 
                                                class="rs-pxl-2"
                                                data-type="image"
                                                data-rsp_ch="on"
                                                data-xy="xo:497px,450px,337px,270px;yo:275px,280px,94px,65px;"
                                                data-text="l:22;a:inherit;"
                                                data-dim="w:433px,312px,217px,140px;h:698px,503px,350px,226;"
                                                data-frame_0="y:-100%;o:1;tp:600;"
                                                data-frame_0_mask="u:t;"
                                                data-frame_1="tp:600;st:5100;sp:1500;sR:5100;"
                                                data-frame_1_mask="u:t;"
                                                data-frame_999="o:0;tp:600;st:w;sR:2400;"
                                                style="z-index:11;"
                                                ><img src="<?php echo base_url('/assets/images/rev-tel-1-2.png');?>" width="433" height="698" data-no-retina alt="Imprint"> </rs-layer>
                                             <!--
                                                -->
                                             <rs-layer
                                                id="slider-1-slide-1-layer-29" 
                                                class="rs-pxl-2"
                                                data-type="image"
                                                data-rsp_ch="on"
                                                data-xy="xo:497px,450px,337px,270px;yo:275px,280px,94px,65px;"
                                                data-text="l:22;a:inherit;"
                                                data-dim="w:433px,312px,217px,140px;h:698px,503px,350px,226;"
                                                data-frame_0="y:bottom;sX:2;sY:2;o:1;rZ:90deg;tp:600;"
                                                data-frame_1="tp:600;st:5600;sp:1500;sR:5600;"
                                                data-frame_999="o:0;tp:600;st:w;sR:1900;"
                                                style="z-index:12;"
                                                ><img src="<?php echo base_url('/assets/images/rev-tel-1-3.png');?>" width="433" height="698" data-no-retina alt="Imprint"> </rs-layer>
                                             <!--
                                                -->
                                             <rs-layer
                                                id="slider-1-slide-1-layer-30" 
                                                class="rs-pxl-2"
                                                data-type="image"
                                                data-rsp_ch="on"
                                                data-xy="xo:497px,450px,337px,270px;yo:275px,280px,94px,65px;"
                                                data-text="l:22;a:inherit;"
                                                data-dim="w:433px,312px,217px,140px;h:698px,503px,350px,226;"
                                                data-frame_0="y:bottom;sX:2;sY:2;o:1;rZ:90deg;tp:600;"
                                                data-frame_1="tp:600;st:6100;sp:1500;sR:6100;"
                                                data-frame_999="o:0;tp:600;st:w;sR:1400;"
                                                style="z-index:13;"
                                                ><img src="<?php echo base_url('/assets/images/rev-tel-1-4.png');?>" width="433" height="698" data-no-retina alt="Imprint"> </rs-layer>
                                             <!--
                                                -->
                                             <rs-layer
                                                id="slider-1-slide-1-layer-31"  		
                                                class="rs-pxl-2"
                                                data-type="image"
                                                data-rsp_ch="on"
                                                data-xy="xo:495px,450px,337px,270px;yo:281px,280px,94px,65px;"
                                                data-text="l:22;a:inherit;"
                                                data-dim="w:433px,312px,217px,140px;h:698px,503,350px,226;"
                                                data-frame_0="y:bottom;sX:2;sY:2;o:1;rZ:90deg;tp:600;"
                                                data-frame_1="tp:600;st:6600;sp:1500;sR:6600;"
                                                data-frame_999="o:0;tp:600;st:w;sR:900;"
                                                style="z-index:14;"
                                                ><img src="<?php echo base_url('/assets/images/rev-tel-1-5.png');?>" width="433" height="698" data-no-retina alt="Imprint"> </rs-layer>
                                             <!--
                                                -->
                                             <rs-layer
                                                id="slider-1-slide-1-layer-14" class="rs-headline"
                                                data-type="text"
                                                data-color="#161616"
                                                data-rsp_ch="on"
                                                data-xy="xo:15px;yo:265px,350px,160px,115px;"
                                                data-text="w:normal;s:55,48,38,26;l:72,66,55,34;fw:700;"
                                                data-dim="w:445px,445px,327px,227px;"
                                                data-frame_0="o:1;tp:600;"
                                                data-frame_0_chars="x:105%;o:1;rX:45deg;rY:0deg;rZ:90deg;"
                                                data-frame_0_mask="u:t;"
                                                data-frame_1="tp:600;e:Power4.easeInOut;st:2400;sp:2510;sR:2400;"
                                                data-frame_1_mask="u:t;"
                                                data-frame_999="o:0;tp:600;st:w;sR:2440;"
                                                style="z-index:15;font-family:Poppins;font-size: 45px!important;"
                                                >AI-powered Real-time Workforce Visibility = Enhanced Productivity</rs-layer>
                                             <!--
                                                -->

                                                 <rs-layer
                                                id="slider-1-slide-1-layer-14" class="rs-headline"
                                                data-type="text"
                                                data-color="#161616"
                                                data-rsp_ch="on"
                                                data-xy="xo:15px;yo:450px,350px,160px,115px;"
                                                data-text="w:normal;s:55,48,38,26;l:72,66,55,34;fw:700;"
                                                data-dim="w:445px,445px,327px,227px;"
                                                 data-frame_0="tp:600;"
                                                data-frame_1="tp:600;st:4230;sp:1100;sR:4230;"
                                                data-frame_999="o:0;tp:600;st:w;sR:3670;"
                                                style="z-index:15;font-family:Poppins;"
                                                > <div class="infobox_content">Simplify the Workforce Equation with IMPRINT, our End-to-end Workforce Management Solution</div></rs-layer>
                                             <!--
                                                -->
                                                
                                               
                                           <!-- <style>
                                             .cust-rev-btn:hover{
                                                color:#fff!important;
                                             }
                                             #slider-1-slide-1-layer-23.rev-btn{
                                                padding:18px 0!important;
                                             }
                                             .rev-btn.cust-rev-btn{
                                                padding:18px 0!important;
                                             }
                                           </style> -->
                                             <rs-layer
                                                id="slider-1-slide-1-layer-23" 
                                                class="rev-btn"
                                                data-type="button"
                                                data-color="#161616"
                                                data-xy="xo:15px;yo:580px,644px,350px,240px;"
                                                data-text="s:18,18,18,16;l:18;fw:600;a:center;"
                                                data-rsp_bd="off"
                                                data-padding="t:18,18,18,12;r:30,30,30,24;b:18,18,18,12;l:30,30,30,24;"
                                                data-border="bos:solid;boc:#664bc4;bow:1,1,1,1;bor:30px,30px,30px,30px;"
                                                data-frame_0="tp:600;"
                                                data-frame_1="tp:600;st:4230;sp:1100;sR:4230;"
                                                data-frame_999="o:0;tp:600;st:w;sR:3670;"
                                                data-frame_hover="c:#fff;bgc:#664bc4;boc:#664bc4;bor:30px,30px,30px,30px;bos:solid;bow:1,1,1,1;oX:50;oY:50;sp:400;e:Power0.easeIn;"
                                                style="z-index:16;background-color:rgba(0,0,0,0);font-family:Poppins;cursor:pointer;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box; padding:18px 0!important;"><a href="<?php echo base_url('contactus#Demo')?>">Request a demo</a></rs-layer>
                                             <!--
                                                -->
                                             <rs-layer
                                                id="slider-1-slide-1-layer-23" 
                                                class="rev-btn cust-rev-btn"
                                                data-type="button"
                                                data-color="#161616"
                                                data-xy="xo:250px,217px,207px,-377px;yo:580px,660px,365px,363px;"
                                                 data-text="s:18,18,18,16;l:18;fw:600;a:center;"
                                                data-rsp_bd="off"
                                                data-padding="t:18,18,18,12;r:30,30,30,24;b:18,18,18,12;l:30,30,30,24;"
                                                data-border="bos:solid;boc:#664bc4;bow:1,1,1,1;bor:30px,30px,30px,30px;"
                                                data-frame_0="tp:600;"
                                                data-frame_1="tp:600;st:4230;sp:1100;sR:4230;"
                                                data-frame_999="o:0;tp:600;st:w;sR:3670;"
                                                data-frame_hover="c:#fff;bgc:#664bc4;boc:#664bc4;bor:30px,30px,30px,30px;bos:solid;bow:1,1,1,1;oX:50;oY:50;sp:400;e:Power0.easeIn;"
                                                style="z-index:16;background-color:rgba(0,0,0,0);font-family:Poppins;cursor:pointer;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;padding:0"
                                                ><a href="https://imprint.astiinfotech.com/#/login" target="_blank" rel="noopener">Free Sign-Up</a></rs-layer>
                                            
                                             <!--
                                                -->

                                             <!--
                                                -->						
                                          </rs-slide>
                                       </rs-slides>
                                       <rs-progress class="rs-bottom" style="visibility: hidden !important;"></rs-progress>

                                     <!--   <div class="container wpb_mobile">
                                             <div>AI-powered Real-time Workforce Visibility = Enhanced Productivity</div>
                                             <p>Simplify the Workforce Equation with IMPRINT, our End-to-end Workforce Management Solution</p>
                                          </div> -->

                                    </rs-module>

                                         

                                    <script type="text/javascript">
                                       setREVStartSize({c: 'rev_slider_1_1',rl:[1240,1024,778,480],el:[],gw:[1200,1024,778,480],gh:[1200,1024,778,700],layout:'fullwidth',mh:"0"});
                                       var	revapi1,
                                       tpj;
                                       jQuery(function() {
                                       tpj = jQuery;
                                       if(tpj("#rev_slider_1_1").revolution == undefined){
                                       revslider_showDoubleJqueryError("#rev_slider_1_1");
                                       }else{
                                       revapi1 = tpj("#rev_slider_1_1").show().revolution({
                                       jsFileLocation:"wp-content/plugins/revslider/public/assets/js/",
                                       sliderLayout:"fullwidth",
                                       visibilityLevels:"1240,1024,778,480",
                                       gridwidth:"1200,1024,778,480",
                                       gridheight:"1200,1024,778,700",
                                       minHeight:"",
                                       responsiveLevels:"1240,1024,778,480",
                                       disableProgressBar:"on",
                                       navigation: {
                                       onHoverStop:false
                                       },
                                       parallax: {
                                       levels:[1,2,3,4,5,6,7,8,9,10,47,48,49,50,51,55],
                                       type:"mouse",
                                       origo:"slidercenter",
                                       speedbg:200,
                                       speedls:200
                                       },
                                       fallbacks: {
                                       allowHTML5AutoPlayOnAndroid:true
                                       },
                                       });
                                       }
                                       });
                                    </script>
                                    <script>
                                       var htmlDivCss = unescape(".uranus.tparrows%3Abefore%7B%0A%09font-family%3A%20Flaticon%3B%0A%7D%0A.tparrows.tp-leftarrow%3Abefore%7B%0A%20%20%20%20content%3A%20%22%5Cf120%22%3B%0A%20%20%09font-size%3A%2023px%20%21important%3B%0A%7D%0A.tparrows.tp-rightarrow%3Abefore%7B%0A%09content%3A%20%22%5Cf11f%22%3B%0A%20%09font-size%3A%2023px%20%21important%3B%0A%7D%0A.uranus.tparrows%3Ahover%3Abefore%7B%0A%20%20%20%20color%3A%20%23f57e83%3B%0A%20%20%20%20opacity%3A%201%20%21important%3B%0A%7D");
                                       var htmlDiv = document.getElementById('rs-plugin-settings-inline-css');
                                       if(htmlDiv) {
                                       htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
                                       }else{
                                       var htmlDiv = document.createElement('div');
                                       htmlDiv.innerHTML = '<style>' + htmlDivCss + '</style>';
                                       document.getElementsByTagName('head')[0].appendChild(htmlDiv.childNodes[0]);
                                       }
                                    </script>
                                 </rs-module-wrap>
                                  </div>
                                 <!-- END REVOLUTION SLIDER -->
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- ===== WHY WORKFORCE AUTOMATION SECTION ===== -->
<style>
.wfa-section {
   padding: 90px 0 80px;
   background: #fff;
   position: relative;
   overflow: hidden;
}
.wfa-section::before {
   content: '';
   position: absolute;
   top: -100px; right: -100px;
   width: 420px; height: 420px;
   background: radial-gradient(circle, rgba(44,64,159,0.06) 0%, transparent 70%);
   border-radius: 50%;
   pointer-events: none;
}
.wfa-inner {
   max-width: 1200px;
   margin: 0 auto;
   padding: 0 30px;
}
.wfa-header {
   text-align: center;
   margin-bottom: 60px;
}
.wfa-header .wfa-label {
   display: inline-block;
   font-family: Poppins, sans-serif;
   font-size: 13px;
   font-weight: 600;
   color: #2c409f;
   text-transform: uppercase;
   letter-spacing: 1.5px;
   margin-bottom: 12px;
}
.wfa-header h2 {
   font-family: Poppins, sans-serif;
   font-size: 38px;
   font-weight: 700;
   color: #161616;
   line-height: 1.25;
   margin: 0 0 16px;
}
.wfa-header p {
   font-family: Poppins, sans-serif;
   font-size: 17px;
   color: #4f4e4e;
   max-width: 580px;
   margin: 0 auto;
   line-height: 1.7;
}
/* Tab switcher */
.wfa-tabs {
   display: flex;
   justify-content: center;
   gap: 12px;
   margin-bottom: 48px;
   flex-wrap: wrap;
}
button.wfa-tab-btn {
   padding: 11px 28px !important;
   border-radius: 50px !important;
   border: 2px solid #2c409f !important;
   background: transparent !important;
   font-family: Poppins, sans-serif !important;
   font-size: 15px !important;
   font-weight: 600 !important;
   color: #2c409f !important;
   cursor: pointer !important;
   transition: all 0.25s !important;
   outline: none !important;
}
button.wfa-tab-btn.active,
button.wfa-tab-btn:hover {
   background: #2c409f !important;
   border: 2px solid #2c409f !important;
   color: #fff !important;
   box-shadow: 0 6px 20px rgba(44,64,159,0.3) !important;
}
/* Pain point cards */
.wfa-panel { display: none; }
.wfa-panel.active { display: block; }
.wfa-cards-grid {
   display: grid;
   grid-template-columns: repeat(2, 1fr);
   gap: 20px;
   margin-bottom: 60px;
}
.wfa-pain-card {
   display: flex;
   align-items: flex-start;
   gap: 16px;
   background: #faf9ff;
   border: 1px solid #d0d5ee;
   border-radius: 16px;
   padding: 22px 24px;
   transition: box-shadow 0.2s, transform 0.2s;
}
.wfa-pain-card:hover {
   box-shadow: 0 8px 28px rgba(44,64,159,0.12);
   transform: translateY(-3px);
}
.wfa-pain-icon {
   width: 46px; height: 46px;
   border-radius: 12px;
   background: #2c409f;
   display: flex; align-items: center; justify-content: center;
   flex-shrink: 0;
}
.wfa-pain-icon i { color: #fff; font-size: 18px; }
.wfa-pain-text h4 {
   font-family: Poppins, sans-serif;
   font-size: 15px;
   font-weight: 600;
   color: #161616;
   margin: 0 0 5px;
}
.wfa-pain-text p {
   font-family: Poppins, sans-serif;
   font-size: 13px;
   color: #6b6b6b;
   margin: 0;
   line-height: 1.6;
}
/* Benefits strip */
.wfa-benefits {
   background: #2c409f;
   border-radius: 24px;
   padding: 48px 40px;
   display: grid;
   grid-template-columns: repeat(3, 1fr);
   gap: 0;
   position: relative;
   overflow: hidden;
}
.wfa-benefits::before {
   content: '';
   position: absolute;
   top: -60px; right: -60px;
   width: 220px; height: 220px;
   background: rgba(255,255,255,0.07);
   border-radius: 50%;
}
.wfa-benefit-item {
   text-align: center;
   padding: 20px 24px;
   position: relative;
}
.wfa-benefit-item + .wfa-benefit-item::before {
   content: '';
   position: absolute;
   left: 0; top: 20%; height: 60%;
   width: 1px;
   background: rgba(255,255,255,0.25);
}
.wfa-benefit-num {
   font-family: Poppins, sans-serif;
   font-size: 42px;
   font-weight: 700;
   color: #fff;
   line-height: 1;
   margin-bottom: 8px;
}
.wfa-benefit-num span {
   font-size: 24px;
}
.wfa-benefit-label {
   font-family: Poppins, sans-serif;
   font-size: 14px;
   color: rgba(255,255,255,0.85);
   line-height: 1.5;
}
@media (max-width: 768px) {
   .wfa-section { padding: 60px 0 50px; }
   .wfa-inner { padding: 0 20px; }
   .wfa-header { margin-bottom: 36px; }
   .wfa-header h2 { font-size: 26px; }
   .wfa-header p { font-size: 15px; }
   .wfa-cards-grid { grid-template-columns: 1fr; }
   .wfa-benefits { grid-template-columns: 1fr; padding: 32px 24px; }
   .wfa-benefit-item + .wfa-benefit-item::before { display: none; }
   .wfa-benefit-item { border-top: 1px solid rgba(255,255,255,0.2); }
   .wfa-benefit-item:first-child { border-top: none; }
}
@media (max-width: 480px) {
   .wfa-section { padding: 40px 0 36px; }
   .wfa-inner { padding: 0 16px; }
   .wfa-header h2 { font-size: 22px; }
   .wfa-header p { font-size: 14px; }
   button.wfa-tab-btn { padding: 9px 16px !important; font-size: 13px !important; }
   .wfa-tabs { gap: 8px; margin-bottom: 28px; }
   .wfa-pain-card { padding: 16px; gap: 12px; }
   .wfa-pain-icon { width: 38px; height: 38px; }
   .wfa-benefit-num { font-size: 34px; }
   .wfa-benefits { padding: 24px 16px; }
}
</style>

<section class="wfa-section">
   <div class="wfa-inner">

      <div class="wfa-header">
         <span class="wfa-label">Why Workforce Automation?</span>
         <h2>Problems We Solve for Your Team</h2>
         <p>Managing an on-the-move workforce is complex. IMPRINT eliminates the daily pain points for both managers and field agents.</p>
      </div>

      <!-- Tab Switcher -->
      <div class="wfa-tabs">
         <button class="wfa-tab-btn active" onclick="wfaSwitch(this,'wfa-managers')"><i class="fa fa-briefcase"></i> Sales Manager / Business Head</button>
         <button class="wfa-tab-btn" onclick="wfaSwitch(this,'wfa-agents')"><i class="fa fa-user"></i> Field Agents</button>
      </div>

      <!-- Panel: Managers -->
      <div class="wfa-panel active" id="wfa-managers">
         <div class="wfa-cards-grid">
            <div class="wfa-pain-card">
               <div class="wfa-pain-icon"><i class="fa fa-eye-slash"></i></div>
               <div class="wfa-pain-text">
                  <h4>Poor Field Visibility</h4>
                  <p>No real-time view of workforce activity, location, or policy compliance in the field.</p>
               </div>
            </div>
            <div class="wfa-pain-card">
               <div class="wfa-pain-icon"><i class="fa fa-money"></i></div>
               <div class="wfa-pain-text">
                  <h4>Uncontrolled Expenses</h4>
                  <p>Poor grip on field expenses and reimbursements leads to budget overruns.</p>
               </div>
            </div>
            <div class="wfa-pain-card">
               <div class="wfa-pain-icon"><i class="fa fa-file-text"></i></div>
               <div class="wfa-pain-text">
                  <h4>Cumbersome Paperwork</h4>
                  <p>Manual documentation is slow, error-prone, and impossible to track at scale.</p>
               </div>
            </div>
            <div class="wfa-pain-card">
               <div class="wfa-pain-icon"><i class="fa fa-bar-chart"></i></div>
               <div class="wfa-pain-text">
                  <h4>No Revenue Insights</h4>
                  <p>Absence of data-driven insights on expenses vs. revenue generation per region.</p>
               </div>
            </div>
         </div>
      </div>

      <!-- Panel: Field Agents -->
      <div class="wfa-panel" id="wfa-agents">
         <div class="wfa-cards-grid">
            <div class="wfa-pain-card">
               <div class="wfa-pain-icon"><i class="fa fa-users"></i></div>
               <div class="wfa-pain-text">
                  <h4>Lack of Transparency</h4>
                  <p>Field agents have no clear view of their own performance metrics or targets.</p>
               </div>
            </div>
            <div class="wfa-pain-card">
               <div class="wfa-pain-icon"><i class="fa fa-clock-o"></i></div>
               <div class="wfa-pain-text">
                  <h4>Time-Consuming Documentation</h4>
                  <p>Hours lost daily on manual reports, forms, and data entry instead of selling.</p>
               </div>
            </div>
            <div class="wfa-pain-card">
               <div class="wfa-pain-icon"><i class="fa fa-history"></i></div>
               <div class="wfa-pain-text">
                  <h4>No Client History</h4>
                  <p>Absence of client visit history, trends, and analytics before every meeting.</p>
               </div>
            </div>
            <div class="wfa-pain-card">
               <div class="wfa-pain-icon"><i class="fa fa-map-marker"></i></div>
               <div class="wfa-pain-text">
                  <h4>Inefficient Route Planning</h4>
                  <p>No smart beat planning means wasted travel time and missed client visits.</p>
               </div>
            </div>
         </div>
      </div>

      <!-- Benefits Strip -->
      <div class="wfa-benefits">
         <div class="wfa-benefit-item">
            <div class="wfa-benefit-num">20<span>-22%</span></div>
            <div class="wfa-benefit-label">Improvement in workforce<br>efficiency &amp; performance</div>
         </div>
         <div class="wfa-benefit-item">
            <div class="wfa-benefit-num">16<span>%</span></div>
            <div class="wfa-benefit-label">Time saved through<br>data management automation</div>
         </div>
         <div class="wfa-benefit-item">
            <div class="wfa-benefit-num">70<span>-80%</span></div>
            <div class="wfa-benefit-label">Revenue share driven by<br>field workforce in key sectors</div>
         </div>
      </div>

   </div>
</section>

<script>
function wfaSwitch(btn, panelId) {
   document.querySelectorAll('.wfa-tab-btn').forEach(function(b){ b.classList.remove('active'); });
   document.querySelectorAll('.wfa-panel').forEach(function(p){ p.classList.remove('active'); });
   btn.classList.add('active');
   document.getElementById(panelId).classList.add('active');
}
</script>
                  <!-- ===== END WHY WORKFORCE AUTOMATION SECTION ===== -->

                  <div  class="vc_row wpb_row vc_row-fluid" style="display:none;">
                  	<div class="wpb_column vc_column_container vc_col-sm-10 vc_col-md-offset-0 vc_col-md-6 vc_col-sm-offset-1">
                        <div class="vc_column-inner vc_custom_1550589599529">
                           <div class="wpb_wrapper">
                              <div id="softlab_spacer_6065e44a87a0a" class ="softlab_module_spacing responsive_active">
                                 <div class="spacing_size spacing_size-initial" style="height:0px;"></div>
                                 <div class="spacing_size spacing_size-desktops" style="height:45px;"></div>
                                 <div class="spacing_size spacing_size-tablet" style="height:90px;"></div>
                                 <div class="spacing_size spacing_size-mobile" style="height:0px;"></div>
                              </div>
                              <div id=softlab_img_layer_6065e44a87d12 class="softlab_module_img_layer responsive-image">
                                 <div class="img_layer_image_wrapper slide_right" style="z-index:1">
                                    <div class="img_layer_item" >
                                       <div class="img_layer_image"><img src="<?php echo base_url('/assets/images/h-3_img_layer_1-1-1.png');?>" alt="Imprint" /></div>
                                    </div>
                                 </div>
                                 <!-- <div class="img_layer_image_wrapper fade_in" style="z-index:2">
                                    <div class="img_layer_item" >
                                       <div class="img_layer_image"><img src="<?php echo base_url('/assets/images/h-3_img_layer_1-2.png');?>" alt="Imprint" /></div>
                                    </div>
                                 </div>
                                 <div class="img_layer_image_wrapper zoom_in" style="z-index:2">
                                    <div class="img_layer_item" >
                                       <div class="img_layer_image"><img src="<?php echo base_url('/assets/images/h-3_img_layer_1-3.png');?>" alt="" /></div>
                                    </div>
                                 </div>
                                 <div class="img_layer_image_wrapper zoom_in" style="z-index:2">
                                    <div class="img_layer_item" >
                                       <div class="img_layer_image"><img src="<?php echo base_url('/assets/images/h-3_img_layer_1-4.png');?>" alt="" /></div>
                                    </div>
                                 </div> -->
                              </div>
                              <div id="softlab_spacer_6065e44a8e4a2" class ="softlab_module_spacing responsive_active">
                                 <div class="spacing_size spacing_size-initial" style="height:0px;"></div>
                                 <div class="spacing_size spacing_size-tablet" style="height:70px;"></div>
                              </div>
                           </div>
                        </div>
                     </div>
                  	<div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-offset-1 vc_col-lg-5 vc_col-md-6">
                        <div class="vc_column-inner vc_custom_1550589599529">
                           <div class="wpb_wrapper">
                              <div id="softlab_spacer_6065e44a8ea1b" class ="softlab_module_spacing responsive_active">
                                 <div class="spacing_size spacing_size-initial" style="height:45px;"></div>
                                 <div class="spacing_size spacing_size-desktops" style="height:0px;"></div>
                              </div>
                              <div id=softlab_dbl_6065e44a8ec70 class="softlab_module_double_headings aleft ">
                                 <div class="heading_subtitle" style="font-size:18px; line-height:20px; font-weight:400; ">Why Workforce Automation?</div>
                                 <div class="heading_title" style="font-size:36px; line-height:1.333; font-weight:700; ">
                                    <div class="heading_title_tablet" style="font-size:32px;">
                                       <div class="heading_title_mobile" style="font-size:26px;">
                                       	Problems of Managing<br />an on-the-move Workforce                                          
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div  class ="softlab_module_spacing">
                                 <div class="spacing_size spacing_size-initial" style="height:29px;"></div>
                              </div>
                              <div class="vc_tta-container" data-vc-action="collapse">
                                 <div class="vc_general vc_tta vc_tta-tabs vc_tta-o-shape-group vc_tta-tabs-position-top vc_tta-controls-align-left">
                                    <div class="vc_tta-tabs-container">
                                       <ul class="vc_tta-tabs-list">
                                          <li class="vc_tta-tab vc_active" data-vc-tab><a href="#1920d83c-0419" data-vc-tabs data-vc-container=".vc_tta"><span class="vc_tta-title-text">Sales Manager/Business Head</span></a></li>
                                          <li class="vc_tta-tab" data-vc-tab><a href="#128e8ca9-9022" data-vc-tabs data-vc-container=".vc_tta"><span class="vc_tta-title-text">Field Agents</span></a></li>
                                       </ul>
                                    </div>
                                    <div class="vc_tta-panels-container">
                                       <div class="vc_tta-panels">
                                          <div class="vc_tta-panel vc_active" id="1920d83c-0419" data-vc-content=".vc_tta-panel-body">
                                             <div class="vc_tta-panel-heading">
                                                <h4 class="vc_tta-panel-title"><a href="#1920d83c-0419" data-vc-accordion data-vc-container=".vc_tta-container"><span class="vc_tta-title-text">Sales Manager/Business Head</span></a></h4>
                                             </div>
                                             <div class="vc_tta-panel-body">
                                                <div id=softlab_infobox_6065e44a9e027 class="softlab_module_infobox layout_left alignment_left">
                                                   <div class="infobox_wrapper">
                                                      <div class="infobox_icon_wrapper">
                                                         <div class="infobox_icon_container " style="width:36px; height:40px; "><i class="infobox_icon flaticon-rgb"  style="font-size:34px;"></i></div>
                                                      </div>
                                                      <div class="infobox_content_wrapper">
                                                         <div class="infobox_content" >Poor visibility of workforce field activity and policy enforcement</div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div  class ="softlab_module_spacing">
                                                   <div class="spacing_size spacing_size-initial" style="height:16px;"></div>
                                                </div>
                                                <div id=softlab_infobox_6065e44a9ebb4 class="softlab_module_infobox layout_left alignment_left">
                                                   <div class="infobox_wrapper">
                                                      <div class="infobox_icon_wrapper">
                                                         <div class="infobox_icon_container " style="width:36px; height:40px; "><i class="infobox_icon flaticon-3d"  style="font-size:34px;"></i></div>
                                                      </div>
                                                      <div class="infobox_content_wrapper">
                                                         <div class="infobox_content" >Poor grip on expenses & reimbursements</div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div  class ="softlab_module_spacing">
                                                   <div class="spacing_size spacing_size-initial" style="height:16px;"></div>
                                                </div>
                                                <div id=softlab_infobox_6065e44a9fb04 class="softlab_module_infobox layout_left alignment_left">
                                                   <div class="infobox_wrapper">
                                                      <div class="infobox_icon_wrapper">
                                                         <div class="infobox_icon_container " style="width:36px; height:40px; "><i class="infobox_icon flaticon-layer"  style="font-size:34px;"></i></div>
                                                      </div>
                                                      <div class="infobox_content_wrapper">
                                                         <div class="infobox_content" >Cumbersome paperwork; high chances of error</div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div  class ="softlab_module_spacing">
                                                   <div class="spacing_size spacing_size-initial" style="height:16px;"></div>
                                                </div>
                                                 <div id=softlab_infobox_6065e44a9e027 class="softlab_module_infobox layout_left alignment_left">
                                                   <div class="infobox_wrapper">
                                                      <div class="infobox_icon_wrapper">
                                                         <div class="infobox_icon_container " style="width:36px; height:40px; "><i class="infobox_icon flaticon-rgb"  style="font-size:34px;"></i></div>
                                                      </div>
                                                      <div class="infobox_content_wrapper">
                                                         <div class="infobox_content" >Absence of insights on overall expenses & revenue generation</div>
                                                      </div>
                                                   </div>
                                                </div>
                                                 <div  class ="softlab_module_spacing">
                                                   <div class="spacing_size spacing_size-initial" style="height:30px;"></div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="vc_tta-panel" id="128e8ca9-9022" data-vc-content=".vc_tta-panel-body">
                                             <div class="vc_tta-panel-heading">
                                                <h4 class="vc_tta-panel-title"><a href="#128e8ca9-9022" data-vc-accordion data-vc-container=".vc_tta-container"><span class="vc_tta-title-text">Field Agents</span></a></h4>
                                             </div>
                                             <div class="vc_tta-panel-body">
                                                <div id=softlab_infobox_6065e44aa15bc class="softlab_module_infobox layout_left alignment_left">
                                                   <div class="infobox_wrapper">
                                                      <div class="infobox_icon_wrapper">
                                                         <div class="infobox_icon_container " style="width:36px; height:40px; "><i class="infobox_icon flaticon-bitcoin-3"  style="font-size:34px;"></i></div>
                                                      </div>
                                                      <div class="infobox_content_wrapper">
                                                         <div class="infobox_content" >Lack of transparency & performance visibility</div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div  class ="softlab_module_spacing">
                                                   <div class="spacing_size spacing_size-initial" style="height:16px;"></div>
                                                </div>
                                                <div id=softlab_infobox_6065e44aa2020 class="softlab_module_infobox layout_left alignment_left">
                                                   <div class="infobox_wrapper">
                                                      <div class="infobox_icon_wrapper">
                                                         <div class="infobox_icon_container " style="width:36px; height:40px; "><i class="infobox_icon flaticon-3d-1"  style="font-size:34px;"></i></div>
                                                      </div>
                                                      <div class="infobox_content_wrapper">
                                                         <div class="infobox_content" >Time-consuming documentation</div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div  class ="softlab_module_spacing">
                                                   <div class="spacing_size spacing_size-initial" style="height:16px;"></div>
                                                </div>
                                                <div id=softlab_infobox_6065e44aa2a6c class="softlab_module_infobox layout_left alignment_left">
                                                   <div class="infobox_wrapper">
                                                      <div class="infobox_icon_wrapper">
                                                         <div class="infobox_icon_container " style="width:36px; height:40px; "><i class="infobox_icon flaticon-growth"  style="font-size:34px;"></i></div>
                                                      </div>
                                                      <div class="infobox_content_wrapper">
                                                         <div class="infobox_content" >Absence of client history, trends & analytics</div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div  class ="softlab_module_spacing">
                                                   <div class="spacing_size spacing_size-initial" style="height:30px;"></div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>                    
                  </div>
                  
                  <div  class="vc_row wpb_row vc_row-fluid" style="display:none;">
                     <div class="wpb_column vc_column_container vc_col-sm-12">
                        <div class="vc_column-inner ">
                           <div class="wpb_wrapper">
                              <div id="softlab_spacer_6054cf7813456" class ="softlab_module_spacing responsive_active">
                                 <div class="spacing_size spacing_size-initial" style="height:85px;"></div>
                                 <div class="spacing_size spacing_size-desktops" style="height:50px;"></div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                 
                 
                  <div style="z-index: 3; display:none;" class="vc_row wpb_row vc_row-fluid wgl-shadow vc_custom_1551272888085 vc_row-has-fill">
                     <div class="wpb_column vc_column_container vc_col-sm-12">
                        <div class="vc_column-inner vc_custom_1550225893795">
                           <div class="wpb_wrapper">
                              <div  class ="softlab_module_spacing">
                                 <div class="spacing_size spacing_size-initial" style="height:76px;"></div>
                              </div>
                              <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                 <div class="wpb_column vc_column_container vc_col-sm-12">
                                    <div class="vc_column-inner">
                                       <div class="wpb_wrapper">
                                          <div id=softlab_counter_6054cf7829cbb class="softlab_module_counter layout_top alignment_center">
                                             <div class="counter_content_wrapper">
                                                <div class="counter_value_placeholder">
                                                   <span class="value_placeholder">Did You Know ?</span>
                                                    <div class="counter_value_wrapper counter_2" style="text-align: left;font-size: 32px!important;">Did You Know ?</div>
                                                </div>
                                                <div class="counter_title count_text" style="text-align: left;">Field workforce management is crucial as it delivers almost 70-80% Revenue Share for Banks, NBFCs, Pharmaceutical & FMCG companies!</div>
                                             </div>
                                          </div>
                                          <div  class ="softlab_module_spacing">
                                             <div class="spacing_size spacing_size-initial" style="height:60px;"></div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                
                              </div>
                              <div  class ="softlab_module_spacing">
                                 <div class="spacing_size spacing_size-initial" style="height:20px;"></div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div  class="vc_row wpb_row vc_row-fluid wgl-row-animation" style="display:none;">
                     <div class="wpb_column vc_column_container vc_col-sm-12">
                        <div class="vc_column-inner ">
                           <div class="wpb_wrapper">
                              <div  class ="softlab_module_spacing">
                                 <div class="spacing_size spacing_size-initial" style="height:90px;"></div>
                              </div>
                              <div id=softlab_dbl_6054cf782bf35 class="softlab_module_double_headings acenter ">
                                 <div class="heading_subtitle" style="font-size:18px; line-height:20px; font-weight:400; ">Why Workforce Automation? </div>
                                 <div class="heading_title" style="font-size:36px; line-height:1.333; font-weight:700; ">
                                    <div class="heading_title_tablet" style="font-size:32px;">
                                       <div class="heading_title_mobile" style="font-size:26px;">360-degree Benefits 
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div  class ="softlab_module_spacing">
                                 <div class="spacing_size spacing_size-initial" style="height:30px;"></div>
                              </div>
                              <div class="vc_row wpb_row vc_inner vc_row-fluid vc_row-o-content-middle vc_row-flex">
                                 <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-md-4">
                                    <div class="vc_column-inner">
                                       <div class="wpb_wrapper">
                                          <div id="softlab_spacer_6054cf782c600" class ="softlab_module_spacing responsive_active">
                                             <div class="spacing_size spacing_size-initial" style="height:57px;"></div>
                                             <div class="spacing_size spacing_size-tablet" style="height:0px;"></div>
                                          </div>
                                          <div id=softlab_infobox_6054cf782ca0d class="softlab_module_infobox layout_left alignment_left wpb_animate_when_almost_visible wpb_left-to-right left-to-right">
                                             <div class="infobox_wrapper">
                                                <div class="infobox_icon_wrapper">
                                                   <div class="infobox_icon_container " style="width:36px; height:26px; ">
                                                      <div class="infobox_icon" ><img src="<?php echo base_url('/assets/images/number_1.png');?>" alt="Improve workforce efficiency & performance by 20-22%"  /></div>
                                                   </div>
                                                </div>
                                                <div class="infobox_content_wrapper">
                                                   <h3 class="infobox_title"  style="font-size:18px; ">Improve workforce efficiency & performance by 20-22%</h3>
                                                   <!-- <div class="infobox_content" >Provide your payout wallet address and callback URL to WallApp API.</div> -->
                                                </div>
                                             </div>
                                          </div>
                                          <div  class ="softlab_module_spacing">
                                             <div class="spacing_size spacing_size-initial" style="height:10px;"></div>
                                          </div>
                                          <div id=softlab_infobox_6054cf782dc17 class="softlab_module_infobox layout_left alignment_left wpb_animate_when_almost_visible wpb_left-to-right left-to-right">
                                             <div class="infobox_wrapper">
                                                <div class="infobox_icon_wrapper">
                                                   <div class="infobox_icon_container " style="width:36px; height:26px; ">
                                                      <div class="infobox_icon" ><img src="<?php echo base_url('/assets/images/number_2.png');?>" alt="Better control of expenses, Improved ROI"  /></div>
                                                   </div>
                                                </div>
                                                <div class="infobox_content_wrapper">
                                                   <h3 class="infobox_title"  style="font-size:18px; ">Better control of expenses, Improved ROI</h3>
                                                  <!--  <div class="infobox_content" >Show customer the wallet address as well as the payment amount.</div> -->
                                                </div>
                                             </div>
                                          </div>
                                          <div  class ="softlab_module_spacing">
                                             <div class="spacing_size spacing_size-initial" style="height:10px;"></div>
                                          </div>
                                          <div id=softlab_infobox_6054cf782eaf4 class="softlab_module_infobox layout_left alignment_left wpb_animate_when_almost_visible wpb_left-to-right left-to-right">
                                             <div class="infobox_wrapper">
                                                <div class="infobox_icon_wrapper">
                                                   <div class="infobox_icon_container " style="width:36px; height:26px; ">
                                                      <div class="infobox_icon" ><img src="<?php echo base_url('/assets/images/number_3.png');?>" alt="Data Management saves 16% time that can be used to improve sales"  /></div>
                                                   </div>
                                                </div>
                                                <div class="infobox_content_wrapper">
                                                   <h3 class="infobox_title"  style="font-size:18px; ">Data Management saves 16% time that can be used to improve sales</h3>
                                                   <!-- <div class="infobox_content" >Confirmation on blockchain may take a minute or two. Wait it.</div> -->
                                                </div>
                                             </div>
                                          </div>
                                          <div  class ="softlab_module_spacing">
                                             <div class="spacing_size spacing_size-initial" style="height:30px;"></div>
                                          </div>
                                        
                                         
                                       </div>
                                    </div>
                                 </div>
                                 <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-md-4">
                                    <div class="vc_column-inner">
                                       <div class="wpb_wrapper">
                                          <div  class="wpb_single_image wpb_content_element vc_align_center">
                                             <figure class="wpb_wrapper vc_figure">
                                                <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="370" height="674" src="<?php echo base_url('/assets/images/iphone-1.png');?>" class="vc_single_image-img attachment-full" alt="Imprint" sizes="(max-width: 370px) 100vw, 370px" /></div>
                                             </figure>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <style>
                                    @media only screen and (max-width: 600px){
                                       .order .order-left{
                                          order:1;
                                       }
                                       .order .infobox_title{
                                          text-align: left;
                                       }
                                       .softlab_module_infobox.layout_right .infobox_icon_wrapper .infobox_icon_container {
    margin-left: 0!important;
}
.softlab_module_counter{
   display: block!important;
}
                                    }
                                 </style>
                                 <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-md-4">
                                    <div class="vc_column-inner">
                                       <div class="wpb_wrapper">
                                          <div id="softlab_spacer_6054cf7830960" class ="softlab_module_spacing responsive_active">
                                             <div class="spacing_size spacing_size-initial" style="height:57px;"></div>
                                             <div class="spacing_size spacing_size-tablet" style="height:0px;"></div>
                                          </div>
                                          <div id=softlab_infobox_6054cf7830d5d class="softlab_module_infobox layout_right alignment_right wpb_animate_when_almost_visible wpb_right-to-left right-to-left">
                                             <div class="infobox_wrapper order">
                                                <div class="infobox_icon_wrapper order-left">
                                                   <div class="infobox_icon_container" style="width:36px; height:26px; ">
                                                      <div class="infobox_icon" ><img src="<?php echo base_url('/assets/images/number_4.png');?>" alt="Individual Performance Analysis"  /></div>
                                                   </div>
                                                </div>
                                                <div class="infobox_content_wrapper">
                                                   <h3 class="infobox_title"  style="font-size:18px; ">Individual Performance Analysis</h3>
                                                   <!-- <div class="infobox_content" >Callbacks are sent to the URL you specified. You can process order.</div> -->
                                                </div>
                                             </div>
                                          </div>
                                          <div  class ="softlab_module_spacing">
                                             <div class="spacing_size spacing_size-initial" style="height:10px;"></div>
                                          </div>
                                          <div id=softlab_infobox_6054cf7831663 class="softlab_module_infobox layout_right alignment_right wpb_animate_when_almost_visible wpb_right-to-left right-to-left">
                                             <div class="infobox_wrapper order">
                                                <div class="infobox_icon_wrapper order-left">
                                                   <div class="infobox_icon_container " style="width:36px; height:26px; ">
                                                      <div class="infobox_icon" ><img src="<?php echo base_url('/assets/images/number_5.png');?>" alt="Predictive Analysis & Insights"  /></div>
                                                   </div>
                                                </div>
                                                <div class="infobox_content_wrapper">
                                                   <h3 class="infobox_title"  style="font-size:18px; ">Predictive Analysis & Insights</h3>
                                                   <!-- <div class="infobox_content" >Payment is sent to the payout wallet immediately. Take money.</div> -->
                                                </div>
                                             </div>
                                          </div>
                                          <div  class ="softlab_module_spacing">
                                             <div class="spacing_size spacing_size-initial" style="height:10px;"></div>
                                          </div>
                                          <div id=softlab_infobox_6054cf7831ff8 class="softlab_module_infobox layout_right alignment_right wpb_animate_when_almost_visible wpb_right-to-left right-to-left">
                                             <div class="infobox_wrapper order">
                                                <div class="infobox_icon_wrapper order-left">
                                                   <div class="infobox_icon_container " style="width:36px; height:26px; ">
                                                      <div class="infobox_icon" ><img src="<?php echo base_url('/assets/images/number_6.png');?>" alt="Paperless, Hassle-free operations"  /></div>
                                                   </div>
                                                </div>
                                                <div class="infobox_content_wrapper">
                                                   <h3 class="infobox_title"  style="font-size:18px; ">Paperless, Hassle-free operations</h3>
                                                   <!-- <div class="infobox_content" >Confirmation on blockchain may take a minute or two. Wait for it.</div> -->
                                                </div>
                                             </div>
                                          </div>
                                          <div  class ="softlab_module_spacing">
                                             <div class="spacing_size spacing_size-initial" style="height:30px;"></div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div id="extended_6054cf7832662" class="morph-svg" style="top:5%; left:-35%; width:100%; height:100%; transform: rotate(160deg); ">
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" style="fill:#f7f9fd; " x="0px" y="0px" viewBox="0 0 180 180">
                           <path d="">
                              <animate  repeatCount="indefinite" attributeName="d" dur="10s" values="
                                 M161.5,95.7c-0.6-1.5-1.2-2.9-1.9-4.3c-4.1-8.1-4.7-17.5-2.1-26.6c3.8-13.2,1.3-20.5,0.1-25.1
                                 c-3.2-12.6-12.8-20.4-15.4-22.4C126.5,5,105.2,5.7,90.9,11.8c-0.2,0.1-0.1,0-0.5,0.2c-12.2,5.3-25,9.3-38,11.1
                                 c-6.4,0.9-12.8,2.9-18.9,6.3C10.4,41.9-0.2,68.5,8.9,90.6c6,14.4,18.7,23.8,33.4,26.8c11.1,2.3,20.3,9,24.8,18.7
                                 c0.1,0.3,0.3,0.6,0.4,0.9c11.6,24,42.7,32.7,68.6,19C158.9,144,169.9,117.9,161.5,95.7z;
                                 M163.7,95.5c0.2-2,0.3-4,0.3-4c0.5-7.2,1.2-15.6,0.3-24.7c-1.1-12-4.4-21.6-6.6-27.1c-2.4-5.8-4-9.7-7.1-13.8
                                 C138.2,9.3,113.4,3.8,95.3,8.2c-2.5,0.6-1.8,0.6-6.7,2c-16.3,4.5-23.5,3.9-32.3,6.3c0,0-12.6,3.5-23,12.9
                                 c-17.4,16-26.2,47.3-14.7,63.4c8.4,11.8,20.7,5.7,29,19.7c3.5,5.9,5.8,14.5,15.3,24.7c0,0,1.4,1.5,3,3c9.4,8.8,52.1,35.9,76.3,19.3 C158.7,148.2,161.3,120.5,163.7,95.5z;
                                 M161.5,95.7c-0.3-0.7-0.8-2.2-1.9-4.3c-4.1-8.1-4.7-17.5-2.1-26.6c3.8-13.2,1.3-20.5,0.1-25.1
                                 c-3.2-12.6-12.8-20.4-15.4-22.4c-15.7-12.3-37-11.6-51.3-5.5c-0.2,0.1-0.1,0-0.5,0.2c-12.2,5.3-25,9.3-38,11.1
                                 C46,24,39.6,26,33.5,29.4C14,40.3-1,72.5,8.9,90.6c11.4,21,51.5,14.4,57.8,36.1c1.1,3.9,0.8,7.3,0.4,9.4c0.1,0.3,0.3,0.6,0.4,0.9
                                 c12.2,24.8,41.2,35.8,65.5,26.3C166.2,150.1,167.2,107.6,161.5,95.7z;
                                 M161.5,95.7c-0.6-1.5-1.2-2.9-1.9-4.3c-4.1-8.1-4.7-17.5-2.1-26.6c3.8-13.2,1.3-20.5,0.1-25.1
                                 c-3.2-12.6-12.8-20.4-15.4-22.4C126.5,5,105.2,5.7,90.9,11.8c-0.2,0.1-0.1,0-0.5,0.2c-12.2,5.3-25,9.3-38,11.1
                                 c-6.4,0.9-12.8,2.9-18.9,6.3C10.4,41.9-0.2,68.5,8.9,90.6c6,14.4,18.7,23.8,33.4,26.8c11.1,2.3,20.3,9,24.8,18.7
                                 c0.1,0.3,0.3,0.6,0.4,0.9c11.6,24,42.7,32.7,68.6,19C158.9,144,169.9,117.9,161.5,95.7z"/>
                           </path>
                        </svg>
                     </div>
                  </div>

                 <!--  <div  class="vc_row wpb_row vc_row-fluid wgl-row-animation">
                     <div class="wpb_column vc_column_container vc_col-sm-12">
                        <div class="vc_column-inner ">
                           <div class="wpb_wrapper">
                              

                              

                             	
                              <div  class ="softlab_module_spacing">
                                 <div class="spacing_size spacing_size-initial" style="height:70px;"></div>
                              </div>
                              <div class="wpb_text_column wpb_content_element " >
                                 <div class="wpb_wrapper">
                                    <h6 style="text-align: center; text-transform: uppercase; letter-spacing: 2px; font-size: 14px;">our partners</h6>
                                 </div>
                              </div>
                              <div  class ="softlab_module_spacing">
                                 <div class="spacing_size spacing_size-initial" style="height:30px;"></div>
                              </div>
                              <div class="softlab_module_clients clearfix anim-ex_images">
                                 <div class="softlab_module_carousel-wrapper">
                                    <div id=softlab_carousel_6054cf783f563 class="softlab_module_carousel pag_align_center">
                                       <div class="softlab_carousel_slick" data-slick='{"slidesToShow":5,"slidesToScroll":1,"infinite":true,"variableWidth":false,"autoplay":true,"autoplaySpeed":"3000","speed":300,"arrows":false,"dots":false,"adaptiveHeight":false,"responsive":[{"breakpoint":1025,"settings":{"slidesToShow":4,"slidesToScroll":1}},{"breakpoint":800,"settings":{"slidesToShow":2,"slidesToScroll":1}},{"breakpoint":480,"settings":{"slidesToShow":1,"slidesToScroll":1}}]}'>
                                          <div class="clients_image"><a href="#" class="image_link"><img class="main_image" src="<?php echo base_url('/assets/images/client_1_maxpaper_filter.png');?>" alt="" /><img class="hover_image" src="<?php echo base_url('/assets/images/client_1_maxpaper.png');?>" alt="" /></a></div>
                                          <div class="clients_image"><a href="#" class="image_link"><img class="main_image" src="<?php echo base_url('/assets/images/client_2_laborator_filter.png');?>" alt="" /><img class="hover_image" src="<?php echo base_url('/assets/images/client_2_laborator.png');?>" alt="" /></a></div>
                                          <div class="clients_image"><a href="#" class="image_link"><img class="main_image" src="<?php echo base_url('/assets/images/client_3_honeyhosting_filter.png');?>" alt="" /><img class="hover_image" src="<?php echo base_url('/assets/images/client_3_honeyhosting.png');?>" alt="" /></a></div>
                                          <div class="clients_image"><a href="#" class="image_link"><img class="main_image" src="<?php echo base_url('/assets/images/client_4_cryptonite_filter.png');?>" alt="" /><img class="hover_image" src="<?php echo base_url('/assets/images/client_4_cryptonite.png');?>" alt="" /></a></div>
                                          <div class="clients_image"><a href="#" class="image_link"><img class="main_image" src="<?php echo base_url('/assets/images/client_5_dynamic_filter.png');?>" alt="" /><img class="hover_image" src="<?php echo base_url('/assets/images/client_5_dynamic.png');?>" alt="" /></a></div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div  class ="softlab_module_spacing">
                                 <div class="spacing_size spacing_size-initial" style="height:30px;"></div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div id="extended_6054cf783f7d7" class="morph-svg" style="top:-22%; left:60%; width:100%; height:100%; transform: rotate(215deg); ">
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" style="fill:#f7f9fd; " x="0px" y="0px" viewBox="0 0 180 180">
                           <path d="">
                              <animate  repeatCount="indefinite" attributeName="d" dur="10s" values="
                                 M78.8,23.2c-3.5,3-8.7,7.6-14.9,13.3c-8.9,8.3-13.5,12.4-17.5,16.6c-5,5.3-10.5,11-15.9,19c-4.9,7.2-11.9,17.7-14.5,32.8
                                 c-1.4,8.1-3.6,21.1,3.3,34.2c7.9,14.9,22.7,20.5,30.2,23.3c14.7,5.5,27.3,4.4,36,3.5c17.8-1.8,30.5-8.1,37-11.4
                                 c14.4-7.4,22.8-15.7,24.8-17.7c7-7.1,16.6-16.8,15.4-29c-0.3-3.1-1.2-5.6-2-7.3c-3.8-7.8-12-10.7-19.7-21.8c-9.7-13.9,9-32.9,3-47.9
                                 c-2.7-6.7-8.7-10.3-10.8-11.8c-9.6-6.7-19.7-6.7-24-6.7C95.2,12.3,84.5,18.3,78.8,23.2z;
                                 M78.8,23.2c-3.5,3-8.7,7.6-14.9,13.3c-8.9,8.3-13.5,12.4-17.5,16.6c-8.6,9-12.9,13.5-15.9,19c-7,12.9-6.5,25.7-6.2,32.6
                                 c0.3,7.5,0.7,18.7,8,30.7C40,148,50.8,153.8,55,156c6.4,3.3,23.5,12.3,35.7,5.3c9-5.2,5.4-13.5,14.3-20c13.1-9.5,26.7,4.6,42.3-4.7
                                 c9.8-5.8,16.7-18.6,15.4-29c-0.5-3.5-1.4-3.4-2-7.3c-1.8-12.1,7.2-17.3,9.3-28c3.1-16.1-11.2-35.8-25.9-41.7c-5-2-6.1-0.8-12.7-3.7
                                 c-13.5-5.8-13.6-12.6-22.1-14.8C98.4,9.4,86.4,16.7,78.8,23.2z;
                                 M82,8.3c-4.8,3-9.3,11.4-18.1,28.2c-5.2,9.9-5.8,12-10.2,19.5C47.4,66.7,44.3,72,40,76C27.5,87.6,16.6,81.5,8.7,89.7
                                 c-10.8,11.1-6.6,38.7,7,55c20,23.9,57.6,20,64,18.7c0.8-0.2,5.1-1.1,11-2c6.6-1,11.4-1.2,12.7-1.3c13.9-1.1,31.1-16,40.7-27.3
                                 c3.5-4.2,10.2-12.3,14.3-24.3c1.3-3.8,1-4.2,2.4-8c5.1-14.4,11.6-16.6,14-24c4.9-15.3-12.2-40-30.6-45.7c-5.1-1.5-7.5-0.8-12.7-3.7
                                 c-10.8-5.9-10-14.3-18.3-19.7C104.1,1.6,90.5,3,82,8.3z;
                                 M78.8,23.2c-3.5,3-8.7,7.6-14.9,13.3c-8.9,8.3-13.5,12.4-17.5,16.6c-5,5.3-10.5,11-15.9,19c-4.9,7.2-11.9,17.7-14.5,32.8
                                 c-1.4,8.1-3.6,21.1,3.3,34.2c7.9,14.9,22.7,20.5,30.2,23.3c14.7,5.5,27.3,4.4,36,3.5c17.8-1.8,30.5-8.1,37-11.4
                                 c14.4-7.4,22.8-15.7,24.8-17.7c7-7.1,16.6-16.8,15.4-29c-0.3-3.1-1.2-5.6-2-7.3c-3.8-7.8-12-10.7-19.7-21.8c-9.7-13.9,9-32.9,3-47.9
                                 c-2.7-6.7-8.7-10.3-10.8-11.8c-9.6-6.7-19.7-6.7-24-6.7C95.2,12.3,84.5,18.3,78.8,23.2z"/>
                           </path>
                        </svg>
                     </div>
                     <div id="extended_6054cf783f802" class="extended-parallax" data-paroller-type="foreground" style="top:-5%; left:80%; " data-paroller-direction="horizontal" data-paroller-factor="0.1" ><img src="<?php echo base_url('/assets/images/letter-q.png');?>" alt="" /></div>
                     <div id="extended_6054cf783fc8f" class="morph-svg" style="top:20%; left:-22%; width:110%; height:110%; transform: rotate(-84deg); ">
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" style="fill:#f7f9fd; " x="0px" y="0px" viewBox="0 0 180 180">
                           <path d="">
                              <animate  repeatCount="indefinite" attributeName="d" dur="10s" values="M6.5,39.4C7.9,62.9,6,81.5,3.8,94.8c-2.9,17.7-7.2,30.9,0.4,41.9c5.9,8.5,15.7,11,17.6,11.5
                                 c17.9,4.5,26.2-9.4,64-27c25.6-11.9,39.7-13.9,45.3-28c3.1-7.9,1.9-15.3,1.5-17.3c-2.7-12.7-14.2-21.9-28.5-30.4
                                 c-20-12-39.7-48.3-72-45.2C29.1,0.5,21.6,1.3,15.3,7C3.2,17.7,6,36.7,6.5,39.4z;
                                 M6.5,39.4C7.9,62.9,6,81.5,3.8,94.8c-4.1,24.8-5.6,33.6,0.4,41.9c10.6,14.8,41.6,17.2,56,4.3
                                 c11.2-9.9,4.2-21.5,15.8-31c13.8-11.4,29.9,0.5,45-12.3c9-7.6,11.1-18.4,11.7-21.9c2.5-17.1-9-30.9-16.7-40.1
                                 C92.4,7.4,57-3,32.2,0.2C25,1.1,19.7,3.1,15.3,7C3.2,17.7,6,36.7,6.5,39.4z;
                                 M6.5,39.4C4.9,52.6,3.2,71.6,3.8,94.8c1,39.1,7.2,45.3,10.4,47.7c9.5,7.1,18.1-0.1,46-1.5
                                 c38.4-1.9,56.7,10.1,63.5,0.8c6.6-9.2-9.5-22.7-2.8-44c3.6-11.4,9.7-11.7,11.7-21.9c3.5-17.9-11.9-34.9-16.7-40.1
                                 C91.8,9,56.5,9.9,47.7,10.2c-11.3,0.3-25.1,0.9-34,11.3C8.4,27.6,7,34.8,6.5,39.4z;
                                 M6.5,39.4C7.9,62.9,6,81.5,3.8,94.8c-2.9,17.7-7.2,30.9,0.4,41.9c5.9,8.5,15.7,11,17.6,11.5
                                 c17.9,4.5,26.2-9.4,64-27c25.6-11.9,39.7-13.9,45.3-28c3.1-7.9,1.9-15.3,1.5-17.3c-2.7-12.7-14.2-21.9-28.5-30.4
                                 c-20-12-39.7-48.3-72-45.2C29.1,0.5,21.6,1.3,15.3,7C3.2,17.7,6,36.7,6.5,39.4z"/>
                           </path>
                        </svg>
                     </div>
                  </div> -->
                  <!-- ===== USER INTERFACES SECTION ===== -->
<style>
.ui-section {
   padding: 90px 0 80px;
   background: #f8f7ff;
   position: relative;
   overflow: hidden;
}
.ui-section::before {
   content: '';
   position: absolute;
   bottom: -100px; left: -100px;
   width: 400px; height: 400px;
   background: radial-gradient(circle, rgba(44,64,159,0.08) 0%, transparent 70%);
   border-radius: 50%;
   pointer-events: none;
}
.ui-inner {
   max-width: 1200px;
   margin: 0 auto;
   padding: 0 30px;
}
.ui-header {
   text-align: center;
   margin-bottom: 50px;
}
.ui-header .ui-label {
   display: inline-block;
   font-family: Poppins, sans-serif;
   font-size: 13px;
   font-weight: 600;
   color: #2c409f;
   text-transform: uppercase;
   letter-spacing: 1.5px;
   margin-bottom: 12px;
}
.ui-header h2 {
   font-family: Poppins, sans-serif;
   font-size: 38px;
   font-weight: 700;
   color: #161616;
   line-height: 1.25;
   margin: 0 0 16px;
}
.ui-header h2 span {
   color: #2c409f;
}
.ui-header p {
   font-family: Poppins, sans-serif;
   font-size: 17px;
   color: #4f4e4e;
   max-width: 560px;
   margin: 0 auto;
   line-height: 1.7;
}
.ui-tabs {
   display: flex;
   justify-content: center;
   gap: 12px;
   margin-bottom: 50px;
   flex-wrap: wrap;
}
button.ui-tab-btn {
   padding: 11px 28px !important;
   border-radius: 50px !important;
   border: 2px solid #2c409f !important;
   background: transparent !important;
   font-family: Poppins, sans-serif !important;
   font-size: 15px !important;
   font-weight: 600 !important;
   color: #2c409f !important;
   cursor: pointer !important;
   transition: all 0.25s !important;
   outline: none !important;
}
button.ui-tab-btn.active,
button.ui-tab-btn:hover {
   background: #2c409f !important;
   border: 2px solid #2c409f !important;
   color: #fff !important;
   box-shadow: 0 6px 20px rgba(44,64,159,0.3) !important;
}
.ui-panel { display: none; }
.ui-panel.active { display: flex; align-items: center; gap: 60px; }
.ui-panel-img {
   flex: 0 0 55%;
   background: #fff;
   border-radius: 20px;
   box-shadow: 0 12px 40px rgba(44,64,159,0.12);
   overflow: hidden;
   padding: 24px;
   display: flex;
   align-items: center;
   justify-content: center;
   min-height: 340px;
}
.ui-panel-img img {
   width: 100%;
   height: 100%;
   max-height: 420px;
   display: block;
   border-radius: 12px;
   object-fit: contain;
   object-position: center;
}
.ui-panel-content {
   flex: 1;
   min-width: 0;
}
.ui-panel-content .ui-tag {
   display: inline-block;
   font-family: Poppins, sans-serif;
   font-size: 12px;
   font-weight: 600;
   color: #2c409f;
   text-transform: uppercase;
   letter-spacing: 1px;
   background: rgba(44,64,159,0.08);
   border-radius: 50px;
   padding: 5px 14px;
   margin-bottom: 16px;
}
.ui-panel-content h3 {
   font-family: Poppins, sans-serif;
   font-size: 30px;
   font-weight: 700;
   color: #161616;
   line-height: 1.3;
   margin: 0 0 16px;
}
.ui-panel-content p {
   font-family: Poppins, sans-serif;
   font-size: 16px;
   color: #4f4e4e;
   line-height: 1.75;
   margin: 0 0 28px;
}
.ui-feature-list {
   list-style: none;
   padding: 0;
   margin: 0;
   display: flex;
   flex-direction: column;
   gap: 12px;
}
.ui-feature-list li {
   display: flex;
   align-items: center;
   gap: 12px;
   font-family: Poppins, sans-serif;
   font-size: 14px;
   font-weight: 500;
   color: #161616;
}
.ui-feature-list li .ui-check {
   width: 22px; height: 22px;
   border-radius: 50%;
   background: #2c409f;
   display: flex; align-items: center; justify-content: center;
   flex-shrink: 0;
}
.ui-feature-list li .ui-check i {
   color: #fff;
   font-size: 11px;
}
@media (max-width: 900px) {
   .ui-panel.active { flex-direction: column; gap: 36px; }
   .ui-panel-img { flex: none; width: 100%; }
   .ui-header h2 { font-size: 28px; }
   .ui-panel-content h3 { font-size: 24px; }
}
@media (max-width: 768px) {
   .ui-section { padding: 60px 0 50px; }
   .ui-inner { padding: 0 20px; }
   .ui-header { margin-bottom: 32px; }
   .ui-header h2 { font-size: 24px; }
   .ui-header p { font-size: 15px; }
   .ui-tabs { gap: 8px; margin-bottom: 32px; }
   button.ui-tab-btn { padding: 9px 18px !important; font-size: 13px !important; }
   .ui-panel-content p { font-size: 14px; }
}
@media (max-width: 480px) {
   .ui-section { padding: 36px 0 30px; }
   .ui-inner { padding: 0 16px; }
   .ui-header h2 { font-size: 20px; }
   .ui-header p { font-size: 13px; }
   .ui-tabs { flex-direction: column; align-items: stretch; gap: 8px; }
   button.ui-tab-btn { padding: 10px 16px !important; font-size: 13px !important; text-align: center !important; }
   .ui-panel-content h3 { font-size: 20px; }
   .ui-panel-content p { font-size: 13px; margin-bottom: 18px; }
   .ui-panel-img { padding: 12px; min-height: 220px; }
   .ui-feature-list li { font-size: 13px; }
}
</style>

<section class="ui-section">
   <div class="ui-inner">
      <div class="ui-header">
         <span class="ui-label">Imprint</span>
         <h2>Powerful <span>User Interfaces</span></h2>
         <p>Three purpose-built interfaces designed for every role &mdash; from field agents on the ground to managers in the office.</p>
      </div>
      <div class="ui-tabs">
         <button class="ui-tab-btn" onclick="uiSwitch(this,'ui-field-agent')"><i class="fa fa-mobile"></i> Field Agent App</button>
         <button class="ui-tab-btn active" onclick="uiSwitch(this,'ui-dashboard')"><i class="fa fa-tachometer"></i> Dynamic Dashboard</button>
         <button class="ui-tab-btn" onclick="uiSwitch(this,'ui-sales-manager')"><i class="fa fa-line-chart"></i> Sales Manager App</button>
      </div>

      <!-- Panel: Field Agent App -->
      <div class="ui-panel" id="ui-field-agent">
         <div class="ui-panel-img">
            <img src="<?php echo base_url('/assets/images/iphone-5.png');?>" alt="Field Agent App" />
         </div>
         <div class="ui-panel-content">
            <span class="ui-tag"><i class="fa fa-mobile"></i> User Interfaces</span>
            <h3>Field Agent App</h3>
            <p>Simplifies Beat &amp; appointment scheduling, lead management and task planning. Provides paperless expense management along with options to digitally save client data &amp; relevant images with geo-tags.</p>
            <ul class="ui-feature-list">
               <li><span class="ui-check"><i class="fa fa-check"></i></span>Beat &amp; appointment scheduling</li>
               <li><span class="ui-check"><i class="fa fa-check"></i></span>Lead &amp; task management</li>
               <li><span class="ui-check"><i class="fa fa-check"></i></span>Paperless expense management</li>
               <li><span class="ui-check"><i class="fa fa-check"></i></span>Geo-tagged client data &amp; images</li>
            </ul>
         </div>
      </div>

      <!-- Panel: Dynamic Dashboard -->
      <div class="ui-panel active" id="ui-dashboard">
         <div class="ui-panel-img">
            <img src="<?php echo base_url('/assets/images/Dashboard-lg.png');?>" alt="Dynamic Dashboard" />
         </div>
         <div class="ui-panel-content">
            <span class="ui-tag"><i class="fa fa-tachometer"></i> User Interfaces</span>
            <h3>Dynamic Dashboard</h3>
            <p>Gives a bird's eye view of tasks, clients, schedules, expenses and leave plans of each field agent. Simplifies admin and Sales Manager tasks with digital documentation, detailed reports and region-wise analysis.</p>
            <ul class="ui-feature-list">
               <li><span class="ui-check"><i class="fa fa-check"></i></span>Real-time workforce overview</li>
               <li><span class="ui-check"><i class="fa fa-check"></i></span>Digital documentation &amp; reports</li>
               <li><span class="ui-check"><i class="fa fa-check"></i></span>Region-wise expense vs. revenue analysis</li>
               <li><span class="ui-check"><i class="fa fa-check"></i></span>Leave &amp; schedule management</li>
            </ul>
         </div>
      </div>

      <!-- Panel: Sales Manager App -->
      <div class="ui-panel" id="ui-sales-manager">
         <div class="ui-panel-img">
            <img src="<?php echo base_url('/assets/images/iphone-1.png');?>" alt="Sales Manager App" />
         </div>
         <div class="ui-panel-content">
            <span class="ui-tag"><i class="fa fa-line-chart"></i> User Interfaces</span>
            <h3>Sales Manager App</h3>
            <p>Allows Sales Managers to track real-time location, individual performance, expenses, trips and tasks of each field agent. Ensures quick approvals and enables live meetings with in-built functionalities.</p>
            <ul class="ui-feature-list">
               <li><span class="ui-check"><i class="fa fa-check"></i></span>Real-time agent location tracking</li>
               <li><span class="ui-check"><i class="fa fa-check"></i></span>Individual performance monitoring</li>
               <li><span class="ui-check"><i class="fa fa-check"></i></span>Quick approvals &amp; task assignment</li>
               <li><span class="ui-check"><i class="fa fa-check"></i></span>Live meetings &amp; in-built communication</li>
            </ul>
         </div>
      </div>

   </div>
</section>

<script>
function uiSwitch(btn, panelId) {
   document.querySelectorAll('.ui-tab-btn').forEach(function(b){ b.classList.remove('active'); });
   document.querySelectorAll('.ui-panel').forEach(function(p){ p.classList.remove('active'); });
   btn.classList.add('active');
   document.getElementById(panelId).classList.add('active');
}
</script>
                  <!-- ===== END USER INTERFACES SECTION ===== -->

                  <div  class="vc_row wpb_row vc_row-fluid wgl-row-animation" style="display:none !important;">
                     <div class="wpb_column vc_column_container vc_col-sm-12">
                        <div class="vc_column-inner ">
                           <div class="wpb_wrapper">
                              <div  class ="softlab_module_spacing">
                                 <div class="spacing_size spacing_size-initial" style="height:56px;"></div>
                              </div>
                              <div id=softlab_dbl_6054cf7840c14 class="softlab_module_double_headings acenter ">
                                 <div class="heading_subtitle" style="font-size:18px; line-height:20px; font-weight:400; ">Imprint</div>
                                 <div class="heading_title" style="font-size:36px; line-height:1.333; font-weight:700; ">
                                    <div class="heading_title_tablet" style="font-size:32px;">
                                       <div class="heading_title_mobile" style="font-size:26px;">User Interfaces
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div  class ="softlab_module_spacing">
                                 <div class="spacing_size spacing_size-initial" style="height:40px;"></div>
                              </div>
                              <div class="vc_tta-container" data-vc-action="collapse">
                                 <div class="vc_general vc_tta vc_tta-tabs vc_tta-o-shape-group vc_tta-tabs-position-top vc_tta-controls-align-center">
                                    <div class="vc_tta-tabs-container">
                                       <ul class="vc_tta-tabs-list">
                                          <li class="vc_tta-tab" data-vc-tab><a href="#Field-Agent-App" data-vc-tabs data-vc-container=".vc_tta"><span class="vc_tta-title-text">Field Agent App</span></a></li>
                                          <li class="vc_tta-tab vc_active" data-vc-tab><a href="#Dynamic-Dashboard" data-vc-tabs data-vc-container=".vc_tta"><span class="vc_tta-title-text">Dynamic Dashboard</span></a></li>
                                          <li class="vc_tta-tab" data-vc-tab><a href="#Sales-Manager-App" data-vc-tabs data-vc-container=".vc_tta"><span class="vc_tta-title-text">Sales Manager App</span></a></li>
                                       </ul>
                                    </div>
                                    <div class="vc_tta-panels-container">
                                       <div class="vc_tta-panels">
                                          <div class="vc_tta-panel" id="Field-Agent-App" data-vc-content=".vc_tta-panel-body">
                                             <div class="vc_tta-panel-heading">
                                                <h4 class="vc_tta-panel-title"><a href="#Field-Agent-App" data-vc-accordion data-vc-container=".vc_tta-container"><span class="vc_tta-title-text">Field Agent App</span></a></h4>
                                             </div>
                                             <div class="vc_tta-panel-body">
                                                <div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1551714935976">
                                                   
                                                  <div class="vc_row wpb_row vc_inner vc_row-fluid vc_row-o-content-middle vc_row-flex">
                                  <div class="wpb_column vc_column_container vc_col-sm-6 vc_col-lg-8">
                                    <div class="vc_column-inner">
                                       <div class="wpb_wrapper">
                                          <div id=softlab_img_layer_6054cf7839952 class="softlab_module_img_layer">
                                             <div class="img_layer_image_wrapper zoom_in" style="z-index:1">
                                                <div class="img_layer_item" >
                                                   <div class="img_layer_image"><img src="<?php echo base_url('/assets/images/images_layers_2.png');?>" alt="Imprint-layer1" /></div>
                                                </div>
                                             </div>
                                              <div class="img_layer_image_wrapper slide_big_left" style="z-index:1">
                                                <div class="img_layer_item" >
                                                   <div class="img_layer_image"><img src="<?php echo base_url('/assets/images/images_layers_2-01.png');?>" alt="Imprint-layer2" /></div>
                                                </div>
                                             </div>
                                             <div class="img_layer_image_wrapper slide_big_right" style="z-index:1">
                                                <div class="img_layer_item" >
                                                   <div class="img_layer_image"><img src="<?php echo base_url('/assets/images/images_layers_2-02.png');?>" alt="Imprint-layer3" /></div>
                                                </div>
                                             </div>
                                             <div class="img_layer_image_wrapper zoom_in" style="z-index:1">
                                                <div class="img_layer_item" >
                                                   <div class="img_layer_image"><img src="<?php echo base_url('/assets/images/images_layers_2-03.png');?>" alt="Imprint-layer4" /></div>
                                                </div>
                                             </div> 
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="wpb_column vc_column_container vc_col-sm-6 vc_col-lg-4">
                                    <div class="vc_column-inner">
                                       <div class="wpb_wrapper">
                                          <div id=softlab_dbl_6054cf78387ad class="softlab_module_double_headings aleft ">
                                             <div class="heading_subtitle" style="font-size:18px; line-height:20px; font-weight:400; ">User Interfaces</div>
                                             <div class="heading_title" style="font-size:36px; line-height:1.333; font-weight:700; ">
                                                <div class="heading_title_tablet" style="font-size:32px;">
                                                   <div class="heading_title_mobile" style="font-size:26px;">Field Agent App 
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div  class ="softlab_module_spacing">
                                             <div class="spacing_size spacing_size-initial" style="height:30px;"></div>
                                          </div>
                                          <div class="wpb_text_column wpb_content_element " >
                                             <div class="wpb_wrapper">
                                                <p>Simplifies Beat & appointment scheduling, lead management and task planning. Provides paperless expense management along with options to digitally save client data & relevant images with geo-tags.</p>
                                             </div>
                                          </div>
                                          <!-- <div  class ="softlab_module_spacing">
                                             <div class="spacing_size spacing_size-initial" style="height:30px;"></div>
                                          </div>
                                          <div id=softlab_button_6054cf7838e7a class="softlab_module_button wgl_button wgl_button-xl wgl_button-inline btn-gradient aleft"><a class="wgl_button_link" href="#" style=" margin-right:15px;">Get the App<span class="btn_border_gradient"></span></a></div>
                                          <div  id=softlab_soc_icon_wrap_6054cf7839291 class="softlab_module_social aleft" ><a href="https://www.apple.com/ios/app-store/" class="soc_icon fa fa-apple" style="font-size:16px; width:30px; height:30px; line-height:30px; margin-left:0px; margin-right:0px; margin-bottom:0px; " target='_blank'  title='Apple Store'></a><a href="https://play.google.com/store" class="soc_icon fa fa-android" style="font-size:16px; width:30px; height:30px; line-height:30px; margin-left:0px; margin-right:0px; margin-bottom:0px; " target='_blank'  title='Twitter'></a></div>
                                          <div  class ="softlab_module_spacing">
                                             <div class="spacing_size spacing_size-initial" style="height:30px;"></div>
                                          </div> -->
                                       </div>
                                    </div>
                                 </div>
                             </div>
                                                  
                                                </div>
                                             </div>
                                          </div>
                                          <div class="vc_tta-panel vc_active" id="Dynamic-Dashboard" data-vc-content=".vc_tta-panel-body">
                                             <div class="vc_tta-panel-heading">
                                                <h4 class="vc_tta-panel-title"><a href="#Dynamic-Dashboard" data-vc-accordion data-vc-container=".vc_tta-container"><span class="vc_tta-title-text">Dynamic Dashboard</span></a></h4>
                                             </div>
                                             <div class="vc_tta-panel-body">
                                                <div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1551714991562">
                                                   <div class="vc_row wpb_row vc_inner vc_row-fluid vc_row-o-content-middle vc_row-flex">
                                
                                 <div class="wpb_column vc_column_container vc_col-sm-6 vc_col-lg-8">
                                    <div class="vc_column-inner">
                                       <div class="wpb_wrapper">
                                          <div id=softlab_img_layer_6054cf7839952 class="softlab_module_img_layer">
                                             <div class="img_layer_image_wrapper zoom_in" style="z-index:1">
                                                <div class="img_layer_item" >
                                                   <div class="img_layer_image"><img src="<?php echo base_url('/assets/images/images_layers_0-01.png');?>" alt="Imprint-layer5" /></div>
                                                </div>
                                             </div>
                                              <div class="img_layer_image_wrapper slide_big_right" style="z-index:1">
                                                <div class="img_layer_item" >
                                                   <div class="img_layer_image"><img src="<?php echo base_url('/assets/images/images_layers_1-02.png');?>" alt="Imprint-layer6" /></div>
                                                </div>
                                             </div>
                                             <div class="img_layer_image_wrapper slide_big_left" style="z-index:1">
                                                <div class="img_layer_item" >
                                                   <div class="img_layer_image"><img src="<?php echo base_url('/assets/images/images_layers_1-03.png');?>" alt="Imprint-layer7" /></div>
                                                </div>
                                             </div>
                                            <!-- <div class="img_layer_image_wrapper zoom_in" style="z-index:1">
                                                <div class="img_layer_item" >
                                                   <div class="img_layer_image"><img src="<?php echo base_url('/assets/images/images_layers_1-04.png');?>" alt="" /></div>
                                                </div>
                                             </div> -->
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                  <div class="wpb_column vc_column_container vc_col-sm-6 vc_col-lg-4">
                                    <div class="vc_column-inner">
                                       <div class="wpb_wrapper">
                                          <div id=softlab_dbl_6054cf78387ad class="softlab_module_double_headings aleft ">
                                             <div class="heading_subtitle" style="font-size:18px; line-height:20px; font-weight:400; ">User Interfaces</div>
                                             <div class="heading_title" style="font-size:36px; line-height:1.333; font-weight:700; ">
                                                <div class="heading_title_tablet" style="font-size:32px;">
                                                   <div class="heading_title_mobile" style="font-size:26px;">Dynamic Dashboard 
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div  class ="softlab_module_spacing">
                                             <div class="spacing_size spacing_size-initial" style="height:30px;"></div>
                                          </div>
                                          <div class="wpb_text_column wpb_content_element " >
                                             <div class="wpb_wrapper">
                                                <p>Gives a bird’s eye view to of the tasks, clients, schedules, expenses and leave plans of each field agent. Simplifies the task of admins and Sales Managers with digital documentation along with detailed reports and analysis for region-wise prediction and planning of expenses vis-a-vis revenue</p>
                                             </div>
                                          </div>
                                          <!-- <div  class ="softlab_module_spacing">
                                             <div class="spacing_size spacing_size-initial" style="height:30px;"></div>
                                          </div>
                                          <div id=softlab_button_6054cf7838e7a class="softlab_module_button wgl_button wgl_button-xl wgl_button-inline btn-gradient aleft"><a class="wgl_button_link" href="#" style=" margin-right:15px;">Get the App<span class="btn_border_gradient"></span></a></div>
                                          <div  id=softlab_soc_icon_wrap_6054cf7839291 class="softlab_module_social aleft" ><a href="https://www.apple.com/ios/app-store/" class="soc_icon fa fa-apple" style="font-size:16px; width:30px; height:30px; line-height:30px; margin-left:0px; margin-right:0px; margin-bottom:0px; " target='_blank'  title='Apple Store'></a><a href="https://play.google.com/store" class="soc_icon fa fa-android" style="font-size:16px; width:30px; height:30px; line-height:30px; margin-left:0px; margin-right:0px; margin-bottom:0px; " target='_blank'  title='Twitter'></a></div>
                                          <div  class ="softlab_module_spacing">
                                             <div class="spacing_size spacing_size-initial" style="height:30px;"></div>
                                          </div> -->
                                       </div>
                                    </div>
                                 </div>
                              </div>
                                                  
                                                </div>
                                             </div>
                                          </div>
                                          <div class="vc_tta-panel" id="Sales-Manager-App" data-vc-content=".vc_tta-panel-body">
                                             <div class="vc_tta-panel-heading">
                                                <h4 class="vc_tta-panel-title"><a href="#Sales-Manager-App" data-vc-accordion data-vc-container=".vc_tta-container"><span class="vc_tta-title-text">Sales Manager App</span></a></h4>
                                             </div>
                                             <div class="vc_tta-panel-body">
                                                <div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1551714991562">
                                                   <div class="vc_row wpb_row vc_inner vc_row-fluid vc_row-o-content-middle vc_row-flex">
                                                      <div class="wpb_column vc_column_container vc_col-sm-6 vc_col-lg-8">
                                    <div class="vc_column-inner">
                                       <div class="wpb_wrapper">
                                          <div id=softlab_img_layer_6054cf7839952 class="softlab_module_img_layer">
                                             <div class="img_layer_image_wrapper zoom_in" style="z-index:1">
                                                <div class="img_layer_item" >
                                                   <div class="img_layer_image"><img src="<?php echo base_url('/assets/images/images_layers_3.png');?>" alt="Imprint-layer8" /></div>
                                                </div>
                                             </div>
                                             <div class="img_layer_image_wrapper slide_big_right" style="z-index:1">
                                                <div class="img_layer_item" >
                                                   <div class="img_layer_image"><img src="<?php echo base_url('/assets/images/images_layers_3-1.png');?>" alt="Imprint-layer9" /></div>
                                                </div>
                                             </div>
                                             <div class="img_layer_image_wrapper zoom_in" style="z-index:1">
                                                <div class="img_layer_item" >
                                                   <div class="img_layer_image"><img src="<?php echo base_url('/assets/images/images_layers_3-2.png');?>" alt="Imprint-layer10" /></div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="wpb_column vc_column_container vc_col-sm-6 vc_col-lg-4">
                                    <div class="vc_column-inner">
                                       <div class="wpb_wrapper">
                                          <div id=softlab_dbl_6054cf78387ad class="softlab_module_double_headings aleft ">
                                             <div class="heading_subtitle" style="font-size:18px; line-height:20px; font-weight:400; ">User Interfaces </div>
                                             <div class="heading_title" style="font-size:36px; line-height:1.333; font-weight:700; ">
                                                <div class="heading_title_tablet" style="font-size:32px;">
                                                   <div class="heading_title_mobile" style="font-size:26px;">Sales Manager App 
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div  class ="softlab_module_spacing">
                                             <div class="spacing_size spacing_size-initial" style="height:30px;"></div>
                                          </div>
                                          <div class="wpb_text_column wpb_content_element " >
                                             <div class="wpb_wrapper">
                                                <p>Allows Sales Manager to keep a track of real-time location, individual performance, expenses, trips and tasks of each field agent. Also ensures quick approvals and enables live meetings with in-built functionalities</p>
                                             </div>
                                          </div>
                                          <!-- <div  class ="softlab_module_spacing">
                                             <div class="spacing_size spacing_size-initial" style="height:30px;"></div>
                                          </div>
                                          <div id=softlab_button_6054cf7838e7a class="softlab_module_button wgl_button wgl_button-xl wgl_button-inline btn-gradient aleft"><a class="wgl_button_link" href="#" style=" margin-right:15px;">Get the App<span class="btn_border_gradient"></span></a></div>
                                          <div  id=softlab_soc_icon_wrap_6054cf7839291 class="softlab_module_social aleft" ><a href="https://www.apple.com/ios/app-store/" class="soc_icon fa fa-apple" style="font-size:16px; width:30px; height:30px; line-height:30px; margin-left:0px; margin-right:0px; margin-bottom:0px; " target='_blank'  title='Apple Store'></a><a href="https://play.google.com/store" class="soc_icon fa fa-android" style="font-size:16px; width:30px; height:30px; line-height:30px; margin-left:0px; margin-right:0px; margin-bottom:0px; " target='_blank'  title='Twitter'></a></div>
                                          <div  class ="softlab_module_spacing">
                                             <div class="spacing_size spacing_size-initial" style="height:30px;"></div>
                                          </div> -->
                                       </div>
                                    </div>
                                 </div>
                                 
                              </div>
                                                  
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div  class ="softlab_module_spacing">
                                 <div class="spacing_size spacing_size-initial" style="height:65px;"></div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div id="extended_6054cf7848a29" class="extended-parallax" data-paroller-type="foreground" style="top:10%; left:-27%; " data-paroller-direction="horizontal" data-paroller-factor="0.1" ><img src="<?php echo base_url('/assets/images/letter-n.png');?>" alt="Imprint-letter" /></div>
                  </div>


                  



                  
               </div>
            </div>
         </div>
      </main>


<?php  $this->load->view('footer/footer'); ?>
