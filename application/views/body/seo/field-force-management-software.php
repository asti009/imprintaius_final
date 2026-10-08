<?php
$this->load->helper('url');
$this->load->view('header/header');
?>

<style>
*,*::before,*::after{box-sizing:border-box}
body{font-family:Arial,Helvetica,'Poppins',sans-serif;color:#1b1830}
a{color:#2c409f}a:hover{color:#1e2d6f}
h1,h2,h3{font-family:Arial,Helvetica,'Poppins',sans-serif}
@keyframes imp-marquee{from{transform:translateX(0)}to{transform:translateX(-50%)}}
.imp-track{animation:imp-marquee 45s linear infinite}
@media(prefers-reduced-motion:reduce){.imp-track{animation:none}}
summary{cursor:pointer;list-style:none}
summary::-webkit-details-marker{display:none}
.ffm-page{background:#f5f7fa;overflow-x:hidden;font-family:Arial,Helvetica,'Poppins',sans-serif}

/* --- Base components --- */
.ffm-pill{padding:6px 14px;border-radius:6px;background:#e8ecf7;color:#2c409f;font-size:13px;font-weight:700;letter-spacing:.4px;text-transform:uppercase;display:inline-block}
.ffm-btn-primary{padding:14px 26px;border-radius:6px;background:#2c409f;color:#fff;font-weight:700;font-size:16px;text-decoration:none;display:inline-block;text-align:center}
.ffm-btn-secondary{padding:13px 22px;border-radius:6px;border:1.5px solid #c5cce6;color:#1b1830;font-weight:700;font-size:16px;text-decoration:none;display:inline-flex;gap:10px;align-items:center}
.ffm-btn-white{padding:14px 26px;border-radius:6px;background:#fff;color:#2c409f;font-weight:700;font-size:16px;text-decoration:none;display:inline-block;text-align:center}
.ffm-btn-outline-white{padding:13px 22px;border-radius:6px;border:1.5px solid rgba(255,255,255,.5);color:#fff;font-weight:700;font-size:16px;text-decoration:none;display:inline-block;text-align:center}

/* --- Layout --- */
.ffm-section{padding:60px 80px}
.ffm-section-alt{background:#fff}
.ffm-inner{max-width:1280px;margin:0 auto}
.ffm-grid-2{display:grid;grid-template-columns:1fr 1fr;gap:48px;align-items:center}
.ffm-stats-grid{display:grid;grid-template-columns:1fr 1fr;gap:16px}
.ffm-benefits-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:24px}

/* --- Card --- */
.ffm-card{background:#fff;border-radius:6px;border:1px solid #e0e4ed;padding:28px;box-shadow:0 4px 24px rgba(44,64,159,.07)}
.ffm-stat-num{font-family:Arial,Helvetica,'Poppins',sans-serif;font-size:40px;font-weight:700;color:#2c409f;line-height:1}
.ffm-stat-label{font-size:14px;color:#55506b;margin-top:6px}
.ffm-card-icon{width:44px;height:44px;border-radius:6px;background:#e8ecf7;display:flex;align-items:center;justify-content:center;margin-bottom:16px}

/* --- Feature rows --- */
.ffm-feature-icon{width:44px;height:44px;border-radius:6px;background:#e8ecf7;display:flex;align-items:center;justify-content:center;flex-shrink:0}
.ffm-feature-row{display:flex;gap:16px;align-items:flex-start;margin-bottom:20px}
.ffm-feature-text h3{margin:0 0 4px;font-size:16px;font-weight:700}
.ffm-feature-text p{margin:0;font-size:14px;color:#55506b;line-height:1.6}

/* --- Tags --- */
.ffm-tag{padding:4px 12px;border-radius:6px;background:#e8ecf7;color:#2c409f;font-size:12px;font-weight:600;display:inline-block;margin:3px}

/* --- FAQ --- */
.ffm-faq-item{border-bottom:1px solid #e0e4ed}
.ffm-faq-item summary{padding:20px 0;font-weight:600;font-size:16px;display:flex;justify-content:space-between;align-items:center;gap:12px}
.ffm-faq-item p{padding:0 0 20px;color:#55506b;line-height:1.7;margin:0}

/* --- Hero --- */
.ffm-hero{padding:40px 80px 0;background:linear-gradient(#fff 0 70%,#f5f7fa 70%);display:flex;flex-direction:column;gap:48px}
.ffm-hero-center{display:flex;flex-direction:column;align-items:center;gap:24px;text-align:center}
.ffm-hero h1{margin:0;font-size:52px;line-height:1.1;letter-spacing:-1.5px;font-weight:700;max-width:900px}
.ffm-hero-sub{margin:0;max-width:700px;font-size:18px;line-height:1.6;color:#55506b}
.ffm-hero-btns{display:flex;gap:14px;align-items:center;flex-wrap:wrap;justify-content:center}
.ffm-breadcrumb{font-size:13px;color:#55506b}
.ffm-breadcrumb a{color:#55506b;text-decoration:none}

/* --- Marquee --- */
.ffm-marquee-wrap{overflow:hidden;padding:28px 0;background:#fff;border-top:1px solid #e0e4ed;border-bottom:1px solid #e0e4ed}
.ffm-marquee-track{display:flex;gap:48px;white-space:nowrap}
.ffm-marquee-item{font-size:15px;font-weight:600;color:#55506b;opacity:.7}

/* --- Steps --- */
.ffm-steps{display:grid;grid-template-columns:repeat(3,1fr);gap:24px}
.ffm-step-card{background:#fff;border-radius:6px;border:1px solid #e0e4ed;padding:28px}
.ffm-step-num{width:36px;height:36px;border-radius:50%;background:#2c409f;color:#fff;font-weight:700;font-size:15px;display:flex;align-items:center;justify-content:center;margin-bottom:16px}
.ffm-step-card h3{margin:0 0 8px;font-size:17px}
.ffm-step-card p{margin:0;font-size:14px;color:#55506b;line-height:1.6}

/* --- CTA --- */
.ffm-cta{background:#2c409f;border-radius:6px;padding:56px;text-align:center;color:#fff}
.ffm-cta h2{margin:0 0 16px;font-size:36px;font-weight:700}
.ffm-cta p{margin:0 0 32px;font-size:18px;opacity:.85}
.ffm-cta-btns{display:flex;gap:14px;justify-content:center;flex-wrap:wrap}

/* --- Apps section image pairs --- */
.ffm-img-pair{display:flex;gap:16px;justify-content:center;align-items:flex-start}
.ffm-img-pair img{width:47%;border-radius:6px;box-shadow:0 8px 32px rgba(44,64,159,.12);height:auto}

/* --- Contact Form Section --- */
.ffm-contact-section{background:#f5f7fa;padding:80px 40px}
.ffm-contact-container{display:flex;gap:60px;max-width:1200px;margin:0 auto;align-items:stretch}
.ffm-contact-left{flex:1;max-width:500px}
.ffm-contact-title{font-size:32px;font-weight:700;color:#1b1830;line-height:1.3;margin:0 0 20px}
.ffm-contact-title span{color:#2c409f}
.ffm-contact-desc{font-size:15px;color:#55506b;line-height:1.7;margin:0 0 28px}
.ffm-contact-features{list-style:none;padding:0;margin:0 0 32px}
.ffm-contact-features li{display:flex;align-items:flex-start;gap:12px;margin-bottom:14px;font-size:14px;color:#55506b}
.ffm-contact-features li svg{flex-shrink:0;margin-top:2px}
.ffm-contact-tagline{font-size:18px;font-weight:700;color:#1b1830;margin:0 0 20px}
.ffm-app-badges{display:flex;gap:12px;margin-bottom:32px}
.ffm-app-badges a{display:inline-block}
.ffm-app-badges img{height:40px;width:auto}
.ffm-contact-trust{font-size:13px;color:#7a7590;display:flex;align-items:center;gap:8px}
.ffm-contact-trust svg{flex-shrink:0}
.ffm-contact-right{flex:1;max-width:550px}

/* Thank You Card Styles */
.ffm-thankyou-card{background:#fff;border-radius:6px;border:1px solid #e0e4ed;padding:48px 32px;box-shadow:0 4px 24px rgba(44,64,159,.07);text-align:center}
.ffm-thankyou-icon{margin-bottom:24px}
.ffm-thankyou-title{font-size:28px;font-weight:700;color:#1b1830;margin:0 0 12px}
.ffm-thankyou-text{font-size:16px;color:#55506b;line-height:1.6;margin:0}

/* Captcha Box Styles */
.ffm-captcha-box{background:#f9fafb;padding:16px;border-radius:6px;margin-bottom:20px}
.ffm-form-card{background:#fff;border-radius:6px;padding:36px;box-shadow:0 8px 40px rgba(44,64,159,0.1);border:1px solid #e0e4ed}
.ffm-form-header{margin-bottom:24px}
.ffm-form-header h3{font-size:22px;font-weight:700;color:#1b1830;margin:0 0 6px}
.ffm-form-header p{font-size:14px;color:#7a7590;margin:0}
.ffm-form-row{display:flex;gap:16px;margin-bottom:16px}
.ffm-form-group{flex:1}
.ffm-form-group label{display:block;font-size:13px;font-weight:600;color:#1b1830;margin-bottom:6px}
.ffm-form-group label span{color:#dc2626}
.ffm-form-group input,.ffm-form-group select,.ffm-form-group textarea{width:100%;padding:12px 14px;border:1px solid #e0e4ed;border-radius:6px;font-size:14px;font-family:inherit;color:#1b1830;background:#fff;transition:border-color 0.2s ease}
.ffm-form-group input:focus,.ffm-form-group select:focus,.ffm-form-group textarea:focus{outline:none;border-color:#2c409f}
.ffm-form-group input::placeholder,.ffm-form-group textarea::placeholder{color:#a0a8b8}
.ffm-form-group textarea{resize:vertical;min-height:100px}
.ffm-form-group select{cursor:pointer;appearance:none;background-image:url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' viewBox='0 0 24 24' fill='none' stroke='%237a7590' stroke-width='2'%3E%3Cpath d='M6 9l6 6 6-6'/%3E%3C/svg%3E");background-repeat:no-repeat;background-position:right 14px center}
.ffm-form-submit{width:100%;padding:14px 24px;background:#2c409f;color:#fff;border:none;border-radius:6px;font-size:16px;font-weight:700;cursor:pointer;transition:background 0.2s ease;margin-top:8px}
.ffm-form-submit:hover{background:#1e2d6f}
.trans{transition:all .3s ease}
.trans:hover{transform:scale(1.04);opacity:.9}

/* Hero Devices - Desktop + Mobile */
.ffm-hero-devices{display:flex;align-items:flex-end;justify-content:center;gap:24px;max-width:1100px;margin:0 auto;width:100%;padding:0 20px}
.ffm-desktop-frame{flex:1;max-width:780px;border-radius:6px;background:#fff;border:1px solid #e0e4ed;box-shadow:0 24px 60px rgba(44,64,159,0.16);overflow:hidden}
.ffm-browser-bar{height:32px;display:flex;align-items:center;gap:7px;padding:0 16px;background:#f0f3f9;border-bottom:1px solid #e0e4ed}
.ffm-browser-dot{width:10px;height:10px;border-radius:50%;background:#d0d6e6}
.ffm-browser-title{margin-left:12px;font-size:12px;color:#55506b}
.ffm-desktop-img{display:block;width:100%;height:auto}
.ffm-mobile-frame{position:relative;width:180px;flex-shrink:0;background:#1a1a2e;border-radius:28px;padding:8px;box-shadow:0 24px 60px rgba(44,64,159,0.22)}
.ffm-phone-notch{position:absolute;top:12px;left:50%;transform:translateX(-50%);width:60px;height:6px;background:#000;border-radius:10px;z-index:2}
.ffm-mobile-img{display:block;width:100%;height:auto;border-radius:20px}
.ffm-mobile-label{display:block;text-align:center;margin-top:8px;font-size:11px;color:#8a95a8;font-weight:500;letter-spacing:0.3px}

/* Features Sticky Scroll Section */
.ffm-features-sticky-section{padding:80px 40px;background:#fff}
.ffm-features-sticky-container{display:flex;gap:60px;max-width:1280px;margin:0 auto;align-items:flex-start}
.ffm-features-left{flex:1;max-width:480px;position:sticky;top:100px;height:fit-content}
.ffm-features-left-sticky{position:relative}
.ffm-features-title{font-size:36px;font-weight:700;color:#1b1830;line-height:1.2;margin:0 0 16px}
.ffm-features-subtitle{font-size:15px;color:#55506b;line-height:1.7;margin:0 0 32px}
.ffm-feature-pointers{display:flex;flex-direction:column;gap:0}
.ffm-feature-pointer{display:flex;gap:16px;padding:20px;border-left:3px solid #e0e4ed;cursor:pointer;transition:all 0.3s ease;position:relative}
.ffm-feature-pointer::before{content:'';position:absolute;left:-3px;top:0;bottom:0;width:3px;background:#2c409f;transform:scaleY(0);transition:transform 0.3s ease}
.ffm-feature-pointer.active::before,.ffm-feature-pointer:hover::before{transform:scaleY(1)}
.ffm-feature-pointer.active{background:linear-gradient(90deg,#e8ecf7 0%,transparent 100%)}
.ffm-pointer-icon{width:44px;height:44px;border-radius:6px;background:#e8ecf7;display:flex;align-items:center;justify-content:center;color:#2c409f;flex-shrink:0;transition:all 0.3s ease}
.ffm-feature-pointer.active .ffm-pointer-icon,.ffm-feature-pointer:hover .ffm-pointer-icon{background:#2c409f;color:#fff}
.ffm-pointer-content{flex:1}
.ffm-pointer-num{font-size:11px;font-weight:600;color:#8a95a8;letter-spacing:1px;display:block;margin-bottom:4px}
.ffm-pointer-content h4{margin:0 0 6px;font-size:16px;font-weight:700;color:#1b1830}
.ffm-pointer-content p{margin:0;font-size:13px;color:#55506b;line-height:1.5}
.ffm-features-right{flex:1;min-height:800px;display:flex;align-items:flex-start;justify-content:center;padding-top:40px}
.ffm-feature-screen{position:relative;width:100%;max-width:500px}
.ffm-screen-card{background:#fff;border:1px solid #e0e4ed;border-radius:6px;padding:24px;margin-bottom:16px;box-shadow:0 4px 24px rgba(44,64,159,0.06)}
.ffm-screen-main{background:#fafbfc}
.ffm-screen-header{display:flex;align-items:center;justify-content:space-between;margin-bottom:20px}
.ffm-screen-title{font-size:16px;font-weight:600;color:#1b1830}
.ffm-screen-badge{font-size:11px;font-weight:600;color:#22c55e;background:#dcfce7;padding:4px 10px;border-radius:20px}
.ffm-screen-chart{position:relative;width:120px;height:120px;margin:0 auto 20px}
.ffm-donut-chart{width:100%;height:100%;transform:rotate(-90deg)}
.ffm-chart-center{position:absolute;top:50%;left:50%;transform:translate(-50%,-50%);text-align:center}
.ffm-chart-num{display:block;font-size:28px;font-weight:700;color:#1b1830}
.ffm-chart-label{display:block;font-size:11px;color:#7a7590}
.ffm-screen-legend{display:flex;flex-direction:column;gap:8px}
.ffm-legend-item{display:flex;align-items:center;gap:8px;font-size:13px;color:#55506b}
.ffm-legend-dot{width:10px;height:10px;border-radius:50%}
.ffm-legend-item strong{margin-left:auto;color:#1b1830}
.ffm-screen-activity{display:flex;align-items:center;gap:16px;padding:16px 20px}
.ffm-activity-photo{width:60px;height:60px;border-radius:6px;background:#e0e4ed;flex-shrink:0}
.ffm-activity-text{font-size:12px;color:#55506b;line-height:1.5;margin:0}
.ffm-screen-checkin{padding:16px 20px}
.ffm-checkin-header{display:flex;align-items:center;gap:8px;font-size:13px;font-weight:600;color:#2c409f;margin-bottom:8px}
.ffm-checkin-details strong{display:block;font-size:14px;color:#1b1830;margin-bottom:2px}
.ffm-checkin-details span{font-size:12px;color:#7a7590}
.ffm-screen-pagination{display:flex;justify-content:center;gap:6px;margin-top:16px}
.ffm-page-dot{width:8px;height:8px;border-radius:50%;background:#e0e4ed;transition:all 0.3s ease}
.ffm-page-dot.active{background:#2c409f;width:24px;border-radius:4px}
.ffm-screen-stats{display:flex;gap:16px;justify-content:center}
.ffm-stat-box{text-align:center;padding:16px 24px;background:#e8ecf7;border-radius:6px}
.ffm-stat-val{display:block;font-size:24px;font-weight:700;color:#2c409f}
.ffm-stat-lbl{font-size:11px;color:#7a7590}
.ffm-screen-proof{display:flex;align-items:center;gap:16px;padding:16px 20px}
.ffm-proof-icon{width:48px;height:48px;border-radius:6px;background:#dcfce7;display:flex;align-items:center;justify-content:center}
.ffm-proof-text strong{display:block;font-size:14px;color:#1b1830}
.ffm-proof-text span{font-size:12px;color:#7a7590}
.ffm-ticket-list{display:flex;flex-direction:column;gap:12px}
.ffm-ticket-item{display:flex;align-items:center;gap:12px;padding:12px 16px;background:#e8ecf7;border-radius:10px}
.ffm-ticket-status{width:10px;height:10px;border-radius:50%}
.ffm-ticket-status.open{background:#f59e0b}
.ffm-ticket-status.progress{background:#2c409f}
.ffm-ticket-status.done{background:#22c55e}
.ffm-ticket-item strong{flex:1;font-size:14px;color:#1b1830}
.ffm-ticket-item span{font-size:12px;color:#7a7590}
.ffm-screen-tech{padding:16px 20px;text-align:center}
.ffm-tech-map{width:100%;height:80px;background:#e0e4ed;border-radius:6px;margin-bottom:8px}
.ffm-tech-text{font-size:12px;color:#55506b;margin:0}
.ffm-beat-list{display:flex;flex-direction:column;gap:8px}
.ffm-beat-item{display:flex;align-items:center;gap:12px;padding:12px 16px;background:#e8ecf7;border-radius:10px;position:relative}
.ffm-beat-item.done{opacity:0.6}
.ffm-beat-item.done::after{content:'✓';position:absolute;right:16px;color:#22c55e;font-weight:700}
.ffm-beat-item.current{background:#d5ddf5;border:2px solid #2c409f}
.ffm-beat-time{font-size:11px;color:#7a7590;width:60px}
.ffm-beat-item strong{font-size:14px;color:#1b1830}
.ffm-screen-expense{padding:16px 20px}
.ffm-expense-header{display:flex;align-items:center;gap:8px;font-size:13px;font-weight:600;color:#2c409f;margin-bottom:8px}
.ffm-expense-details strong{display:block;font-size:14px;color:#1b1830;margin-bottom:2px}
.ffm-expense-details span{font-size:12px;color:#7a7590}

/* Platform Section Styles */
.ffm-platform-section{background:#fff}
.ffm-platform-title{margin:0 0 12px;font-size:36px;font-weight:700;color:#1b1830}
.ffm-platform-block{display:grid;grid-template-columns:1fr 1fr;gap:48px;align-items:center;margin-bottom:56px}
.ffm-platform-block:last-child{margin-bottom:0}
.ffm-platform-images{display:flex;gap:16px;justify-content:center;align-items:flex-start}
.ffm-platform-images img{width:47%;max-width:240px;border-radius:6px;box-shadow:0 8px 32px rgba(44,64,159,.12);height:auto;object-fit:cover}
.ffm-platform-content{padding:0}
.ffm-platform-subtitle{margin:0 0 12px;font-size:22px;font-weight:700;color:#1b1830}
.ffm-platform-desc{color:#55506b;line-height:1.7;margin:0 0 16px;font-size:15px}
.ffm-platform-list{color:#55506b;line-height:1.8;padding-left:20px;margin:0;font-size:14px}
.ffm-platform-list li{margin-bottom:8px}
.ffm-platform-list li:last-child{margin-bottom:0}
.ffm-platform-list strong{color:#1b1830}

/* How It Works Section */
.ffm-howitworks-section{background:#f5f7fa}
.ffm-howitworks-title{margin:0 0 12px;font-size:36px;font-weight:700;color:#1b1830}
.ffm-howitworks-desc{color:#55506b;max-width:640px;margin:0 auto;line-height:1.7;font-size:15px}
.ffm-steps-desktop{display:grid;grid-template-columns:repeat(3,1fr);gap:24px}
.ffm-steps-mobile{display:none}
.ffm-steps-mobile-scroll{display:flex;gap:16px;overflow-x:auto;scroll-snap-type:x mandatory;-webkit-overflow-scrolling:touch;padding:0 20px 16px;margin:0 -20px}
.ffm-steps-mobile-scroll::-webkit-scrollbar{display:none}
.ffm-step-mobile-card{flex:0 0 280px;scroll-snap-align:start;background:#fff;border:1px solid #e0e4ed;border-radius:6px;padding:24px;box-shadow:0 4px 16px rgba(44,64,159,.06)}
.ffm-step-mobile-num{width:40px;height:40px;border-radius:50%;background:#2c409f;color:#fff;font-weight:700;font-size:16px;display:flex;align-items:center;justify-content:center;margin-bottom:16px}
.ffm-step-mobile-card h4{margin:0 0 10px;font-size:17px;font-weight:700;color:#1b1830}
.ffm-step-mobile-card p{margin:0;font-size:14px;color:#55506b;line-height:1.6}

/* Benefits Dial UI */
.ffm-dial-container{display:flex;align-items:stretch;justify-content:center;gap:32px;max-width:1200px;margin:0 auto}
.ffm-dial-left,.ffm-dial-right{display:flex;flex-direction:column;gap:16px;flex:1;max-width:280px}
.ffm-dial-card{display:flex;align-items:center;gap:12px;padding:16px 20px;background:#fff;border:1px solid #e0e4ed;border-radius:6px;cursor:pointer;transition:all 0.3s ease;box-shadow:0 2px 8px rgba(44,64,159,0.04)}
.ffm-dial-card:hover,.ffm-dial-card.active{border-color:#2c409f;background:#e8ecf7;box-shadow:0 8px 24px rgba(44,64,159,0.12);transform:translateY(-2px)}
.ffm-dial-card.active{border-color:#2c409f;border-width:2px}
.ffm-dial-card-icon{width:40px;height:40px;border-radius:10px;background:#2c409f;display:flex;align-items:center;justify-content:center;color:#fff;flex-shrink:0;transition:all 0.3s ease}
.ffm-dial-card:hover .ffm-dial-card-icon,.ffm-dial-card.active .ffm-dial-card-icon{transform:scale(1.05)}
.ffm-dial-card-title{flex:1;font-size:14px;font-weight:600;color:#1b1830}
.ffm-dial-card-num{font-size:12px;font-weight:600;color:#8a95a8}
.ffm-dial-right .ffm-dial-card{flex-direction:row-reverse;text-align:right}
.ffm-dial-center{display:flex;flex-direction:column;align-items:center;gap:20px;flex:0 0 320px}
.ffm-dial-info-box{background:#fff;border:1px solid #e0e4ed;border-radius:6px;padding:24px;text-align:center;box-shadow:0 8px 32px rgba(44,64,159,0.08);min-height:180px;display:flex;flex-direction:column;align-items:center;justify-content:center}
.ffm-dial-info-badge{font-size:11px;font-weight:600;color:#2c409f;letter-spacing:1px;margin-bottom:12px}
.ffm-dial-info-status{color:#22c55e}
.ffm-dial-info-icon{width:56px;height:56px;border-radius:6px;background:#e8ecf7;display:flex;align-items:center;justify-content:center;margin-bottom:12px}
.ffm-dial-info-title{margin:0 0 8px;font-size:18px;font-weight:700;color:#1b1830}
.ffm-dial-info-desc{margin:0;font-size:13px;color:#55506b;line-height:1.6}
.ffm-dial-wheel{position:relative;width:200px;height:200px}
.ffm-dial-svg{width:100%;height:100%;transform:rotate(-90deg)}
.ffm-dial-progress{transition:stroke-dashoffset 0.5s ease}
.ffm-dial-center-text{position:absolute;top:50%;left:50%;transform:translate(-50%,-50%);text-align:center}
.ffm-dial-number{display:block;font-size:42px;font-weight:700;color:#1b1830;line-height:1}
.ffm-dial-label{display:block;font-size:12px;color:#7a7590;text-transform:uppercase;letter-spacing:1px;margin-top:4px}
.ffm-dial-dot{position:absolute;width:12px;height:12px;background:#e0e4ed;border-radius:50%;transition:all 0.3s ease}
.ffm-dial-dot.active{background:#2c409f;box-shadow:0 0 0 4px rgba(44,64,159,0.2)}
.ffm-dial-footer{background:#fff;border:1px solid #e0e4ed;border-radius:6px;padding:16px 20px;display:flex;align-items:center;gap:12px;width:100%}
.ffm-dial-footer-icon{width:36px;height:36px;border-radius:8px;background:#e8ecf7;display:flex;align-items:center;justify-content:center;flex-shrink:0}
.ffm-dial-footer-text{text-align:left}
.ffm-dial-footer-text strong{display:block;font-size:13px;font-weight:600;color:#1b1830}
.ffm-dial-footer-text span{font-size:11px;color:#7a7590}
.ffm-benefits-mobile{display:none}
.ffm-benefits-mobile-scroll{display:flex;gap:16px;overflow-x:auto;padding:0 20px 16px;-webkit-overflow-scrolling:touch;scrollbar-width:none;-ms-overflow-style:none}
.ffm-benefits-mobile-scroll::-webkit-scrollbar{display:none}
.ffm-benefit-mobile-card{flex:0 0 280px;background:#fff;border:1px solid #e0e4ed;border-radius:6px;padding:24px;text-align:center}
.ffm-benefit-mobile-icon{width:56px;height:56px;border-radius:6px;background:#e8ecf7;display:flex;align-items:center;justify-content:center;margin:0 auto 16px}
.ffm-benefit-mobile-card h4{margin:0 0 8px;font-size:16px;font-weight:700;color:#1b1830}
.ffm-benefit-mobile-card p{margin:0;font-size:13px;color:#55506b;line-height:1.6}
.ffm-mobile-swipe-hint{display:none;text-align:center;margin-top:8px;font-size:13px;color:#8a95a8}

/* =====================
   TABLET  ≤ 1024px
===================== */
@media(max-width:1024px){
  .ffm-section{padding:52px 40px}
  .ffm-hero{padding:32px 40px 0;gap:36px}
  .ffm-hero h1{font-size:42px}
  .ffm-grid-2{gap:32px}
  .ffm-benefits-grid{grid-template-columns:repeat(2,1fr)}
  .ffm-cta{padding:48px 40px}
  .ffm-cta h2{font-size:30px}
  .ffm-hero-devices{gap:20px;padding:0 16px}
  .ffm-mobile-frame{width:150px;border-radius:24px;padding:6px}
  .ffm-phone-notch{width:50px;height:5px;top:10px}
  .ffm-mobile-img{border-radius:18px}
  /* Features Sticky Tablet */
  .ffm-features-sticky-section{padding:60px 40px}
  .ffm-features-sticky-container{gap:40px}
  .ffm-features-left{max-width:400px;position:sticky;top:80px}
  .ffm-features-title{font-size:30px}
  .ffm-features-right{min-height:600px}
  .ffm-feature-screen{max-width:420px}
  .ffm-screen-stats{gap:12px}
  .ffm-stat-box{padding:14px 18px}
  .ffm-stat-val{font-size:20px}
  /* Benefits Dial Tablet */
  .ffm-dial-container{gap:20px}
  .ffm-dial-left,.ffm-dial-right{max-width:240px;gap:12px}
  .ffm-dial-card{padding:12px 16px}
  .ffm-dial-card-icon{width:36px;height:36px}
  .ffm-dial-card-title{font-size:13px}
  .ffm-dial-center{flex:0 0 280px}
  .ffm-dial-wheel{width:180px;height:180px}
  .ffm-dial-number{font-size:36px}
  /* Contact Form Tablet */
  .ffm-contact-section{padding:60px 40px}
  .ffm-contact-container{gap:40px}
  .ffm-contact-title{font-size:28px}
  .ffm-form-card{padding:28px}
  /* Platform Section Tablet */
  .ffm-platform-title{font-size:30px}
  .ffm-platform-block{gap:32px}
  .ffm-platform-images img{max-width:200px}
  .ffm-platform-subtitle{font-size:20px}
  .ffm-platform-desc{font-size:14px}
  .ffm-platform-list{font-size:13px}
}

/* =====================
   MOBILE  ≤ 768px
===================== */
@media(max-width:768px){
  .ffm-section{padding:40px 20px}
  .ffm-hero{padding:24px 20px 0;gap:28px;background:linear-gradient(#fff 0 80%,#f6f5fa 80%)}
  .ffm-hero h1{font-size:32px;letter-spacing:-.5px}
  .ffm-hero-sub{font-size:16px}
  .ffm-grid-2{grid-template-columns:1fr;gap:28px}
  .ffm-stats-grid{grid-template-columns:1fr 1fr}
  .ffm-benefits-grid{grid-template-columns:1fr 1fr}
  .ffm-steps{grid-template-columns:1fr 1fr;gap:16px}
  .ffm-cta{padding:36px 20px;border-radius:6px}
  .ffm-cta h2{font-size:26px}
  .ffm-cta p{font-size:15px}
  .ffm-img-pair{gap:10px}
  .ffm-img-pair img{width:48%}
  .ffm-stat-num{font-size:32px}
  h2[style*="font-size:36px"]{font-size:26px!important}
  h2[style*="font-size:36px;"]{font-size:26px!important}
  .ffm-hero-devices{flex-direction:column;gap:20px;padding:0}
  .ffm-desktop-frame{max-width:100%}
  .ffm-mobile-frame{display:none}
  /* Features Sticky Mobile */
  .ffm-features-sticky-section{padding:40px 20px}
  .ffm-features-sticky-container{flex-direction:column;gap:32px}
  .ffm-features-left{position:relative;top:0;max-width:100%}
  .ffm-features-left-sticky{position:relative}
  .ffm-features-title{font-size:28px}
  .ffm-features-subtitle{font-size:14px;margin-bottom:24px}
  .ffm-feature-pointers{gap:12px}
  .ffm-feature-pointer{padding:16px;flex-direction:row;gap:12px}
  .ffm-pointer-icon{width:40px;height:40px;min-width:40px}
  .ffm-pointer-content{text-align:left}
  .ffm-pointer-num{font-size:10px}
  .ffm-pointer-content h4{font-size:15px}
  .ffm-pointer-content p{font-size:12px;display:block}
  .ffm-features-right{min-height:auto;padding-top:0;width:100%}
  .ffm-feature-screen{max-width:100%}
  .ffm-screen-card{padding:20px}
  .ffm-screen-header{flex-wrap:wrap;gap:8px}
  .ffm-screen-title{font-size:15px}
  .ffm-screen-chart{width:100px;height:100px}
  .ffm-chart-num{font-size:24px}
  .ffm-chart-label{font-size:10px}
  .ffm-screen-legend{gap:6px}
  .ffm-legend-item{font-size:12px}
  .ffm-screen-activity{flex-direction:column;text-align:center;gap:12px}
  .ffm-activity-photo{width:50px;height:50px}
  .ffm-screen-stats{flex-direction:row;flex-wrap:wrap;gap:8px}
  .ffm-stat-box{flex:1 1 80px;padding:12px 8px}
  .ffm-stat-val{font-size:20px}
  .ffm-ticket-list{gap:8px}
  .ffm-ticket-item{padding:10px 12px;gap:8px}
  .ffm-ticket-item strong{font-size:13px}
  .ffm-ticket-item span{font-size:11px}
  .ffm-beat-list{gap:6px}
  .ffm-beat-item{padding:10px 12px;gap:8px}
  .ffm-beat-time{font-size:10px;width:50px}
  .ffm-beat-item strong{font-size:13px}
  .ffm-screen-pagination{margin-top:20px}
  /* Benefits - Hide dial, show mobile cards */
  .ffm-dial-container{display:none}
  .ffm-benefits-mobile{display:block;margin:0 -20px}
  .ffm-mobile-swipe-hint{display:block}
  /* Platform Section Mobile */
  .ffm-platform-title{font-size:26px}
  .ffm-platform-block{grid-template-columns:1fr;gap:28px;margin-bottom:48px}
  .ffm-platform-block.ffm-platform-reverse{direction:ltr}
  .ffm-platform-block.ffm-platform-reverse .ffm-platform-content{order:2}
  .ffm-platform-block.ffm-platform-reverse .ffm-platform-images{order:1}
  .ffm-platform-images{flex-direction:row;gap:12px;justify-content:center}
  .ffm-platform-images img{width:45%;max-width:180px;border-radius:6px}
  .ffm-platform-content{text-align:left}
  .ffm-platform-subtitle{font-size:20px;margin-bottom:12px}
  .ffm-platform-desc{font-size:14px;margin-bottom:16px}
  .ffm-platform-list{font-size:13px;padding-left:18px;line-height:1.7}
  .ffm-platform-list li{margin-bottom:10px}
  /* How It Works Mobile - Show slider, hide grid */
  .ffm-howitworks-title{font-size:26px}
  .ffm-howitworks-desc{font-size:14px;padding:0 10px}
  .ffm-steps-desktop{display:none}
  .ffm-steps-mobile{display:block}
  .ffm-steps-mobile-scroll{padding:0 20px 16px;margin:0 -20px;gap:14px}
  .ffm-step-mobile-card{flex:0 0 280px;padding:22px}
  /* Contact Form Mobile */
  .ffm-contact-section{padding:40px 20px}
  .ffm-contact-container{flex-direction:column;gap:32px}
  .ffm-contact-left,.ffm-contact-right{max-width:100%}
  .ffm-contact-title{font-size:26px}
  .ffm-form-card{padding:24px}
  .ffm-form-row{flex-direction:column;gap:16px}
  .ffm-app-badges{justify-content:flex-start}
}

/* =====================
   SMALL MOBILE  ≤ 480px
===================== */
@media(max-width:480px){
  .ffm-section{padding:32px 16px}
  .ffm-hero{padding:20px 16px 0;gap:24px}
  .ffm-hero h1{font-size:26px}
  .ffm-hero-sub{font-size:15px}
  .ffm-hero-btns{flex-direction:column;width:100%}
  .ffm-btn-primary,.ffm-btn-secondary,.ffm-btn-white,.ffm-btn-outline-white{width:100%;justify-content:center;text-align:center}
  .ffm-grid-2{gap:20px}
  .ffm-stats-grid{grid-template-columns:1fr 1fr;gap:10px}
  .ffm-steps{grid-template-columns:1fr}
  .ffm-card{padding:20px}
  .ffm-step-card{padding:20px}
  .ffm-cta{padding:28px 16px}
  .ffm-cta h2{font-size:22px}
  .ffm-cta-btns{flex-direction:column;align-items:center}
  .ffm-img-pair{flex-direction:column;align-items:center}
  .ffm-img-pair img{width:80%;max-width:260px}
  .ffm-stat-num{font-size:28px}
  .ffm-faq-item summary{font-size:14px}
  h2[style*="font-size:36px"]{font-size:22px!important}
  h2[style*="font-size:36px;"]{font-size:22px!important}
  h3[style*="font-size:22px"]{font-size:18px!important}
  /* Features Sticky Small Mobile */
  .ffm-features-sticky-section{padding:32px 16px}
  .ffm-features-title{font-size:22px;line-height:1.3}
  .ffm-features-subtitle{font-size:13px}
  .ffm-feature-pointers{gap:10px}
  .ffm-feature-pointer{padding:12px;gap:10px}
  .ffm-pointer-icon{width:36px;height:36px;min-width:36px}
  .ffm-pointer-icon svg{width:16px;height:16px}
  .ffm-pointer-num{font-size:9px}
  .ffm-pointer-content h4{font-size:14px;margin-bottom:4px}
  .ffm-pointer-content p{font-size:11px;line-height:1.4}
  .ffm-screen-card{padding:16px}
  .ffm-screen-header{margin-bottom:16px}
  .ffm-screen-title{font-size:14px}
  .ffm-screen-badge{font-size:10px;padding:3px 8px}
  .ffm-screen-stats{flex-direction:column;gap:8px}
  .ffm-stat-box{padding:12px 20px;flex:none;width:100%}
  .ffm-stat-val{font-size:22px}
  .ffm-stat-lbl{font-size:10px}
  .ffm-screen-chart{width:90px;height:90px;margin-bottom:16px}
  .ffm-chart-num{font-size:20px}
  .ffm-legend-item{font-size:11px}
  .ffm-legend-dot{width:8px;height:8px}
  .ffm-screen-activity{padding:12px 16px}
  .ffm-activity-photo{width:44px;height:44px}
  .ffm-activity-text{font-size:11px}
  .ffm-screen-checkin{padding:12px 16px}
  .ffm-checkin-header{font-size:12px}
  .ffm-checkin-details strong{font-size:13px}
  .ffm-checkin-details span{font-size:11px}
  .ffm-ticket-item{padding:10px}
  .ffm-ticket-item strong{font-size:12px}
  .ffm-ticket-item span{font-size:10px}
  .ffm-beat-item{padding:10px}
  .ffm-beat-item strong{font-size:12px}
  .ffm-beat-time{font-size:10px}
  .ffm-screen-proof{padding:12px 16px;gap:12px}
  .ffm-proof-icon{width:40px;height:40px}
  .ffm-proof-text strong{font-size:13px}
  .ffm-proof-text span{font-size:11px}
  .ffm-tech-map{height:60px}
  .ffm-tech-text{font-size:11px}
  .ffm-screen-pagination{gap:4px}
  .ffm-page-dot{width:6px;height:6px}
  .ffm-page-dot.active{width:20px}
  /* Benefits Mobile - smaller cards on small mobile */
  .ffm-benefits-mobile{margin:0 -16px}
  .ffm-benefits-mobile-scroll{padding:0 16px 16px}
  .ffm-benefit-mobile-card{flex:0 0 260px;padding:20px}
  /* Platform Section Small Mobile */
  .ffm-platform-title{font-size:22px;line-height:1.3}
  .ffm-platform-block{gap:24px;margin-bottom:40px}
  .ffm-platform-images{gap:10px}
  .ffm-platform-images img{width:46%;max-width:150px;border-radius:6px}
  .ffm-platform-subtitle{font-size:18px}
  .ffm-platform-desc{font-size:13px;line-height:1.6}
  .ffm-platform-list{font-size:12px;padding-left:16px;line-height:1.6}
  .ffm-platform-list li{margin-bottom:8px}
  /* How It Works Small Mobile */
  .ffm-howitworks-title{font-size:22px;line-height:1.3}
  .ffm-howitworks-desc{font-size:13px}
  .ffm-steps-mobile-scroll{padding:0 16px 16px;margin:0 -16px;gap:12px}
  .ffm-step-mobile-card{flex:0 0 260px;padding:20px}
  .ffm-step-mobile-num{width:36px;height:36px;font-size:14px}
  .ffm-step-mobile-card h4{font-size:16px;margin-bottom:8px}
  .ffm-step-mobile-card p{font-size:13px;line-height:1.5}
  /* Contact Form Small Mobile */
  .ffm-contact-section{padding:32px 16px}
  .ffm-contact-title{font-size:22px}
  .ffm-form-card{padding:20px}
  .ffm-form-header h3{font-size:18px}
  .ffm-form-group input,.ffm-form-group select,.ffm-form-group textarea{padding:10px 12px;font-size:14px}
  .ffm-app-badges img{height:36px}
}
</style>

<div class="ffm-page">

<!-- HERO -->
<section class="ffm-hero">
  <div class="ffm-breadcrumb">
   </div>
  <div class="ffm-hero-center">
    <div class="ffm-pill">Field force management platform</div>
    <h1>Field Force Management Software for Smarter Business Growth</h1>
    <p class="ffm-hero-sub">One platform that brings together live GPS tracking, geo-tagged attendance, task management, and expense control, cutting travel costs by 40% and admin overhead by 60%.</p>
    <div class="ffm-hero-btns">
      <a href="<?php echo base_url('contactus'); ?>" class="ffm-btn-primary">Book a Demo</a>
      <a href="https://imprint.astiinfotech.com/#/login" target="_blank" class="ffm-btn-secondary">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#2c409f" stroke-width="2"><circle cx="12" cy="8" r="4"/><path d="M4 21c1-4 4-6 8-6s7 2 8 6"/></svg>
        Start Free Today
      </a>
    </div>
  </div>
  <!-- Dashboard screenshot - Desktop + Mobile -->
  <div class="ffm-hero-devices">
    <!-- Desktop Browser Frame -->
    <div class="ffm-desktop-frame">
      <div class="ffm-browser-bar">
        <span class="ffm-browser-dot"></span>
        <span class="ffm-browser-dot"></span>
        <span class="ffm-browser-dot"></span>
        <span class="ffm-browser-title">Imprint &middot; Manager dashboard (web)</span>
      </div>
      <img src="<?php echo base_url('assets/images/Dashboard-lg.png'); ?>" alt="Imprint field force management software dashboard" class="ffm-desktop-img">
    </div>
    <!-- Mobile Phone Frame -->
    <div class="ffm-mobile-frame">
      <div class="ffm-phone-notch"></div>
      <img src="<?php echo base_url('assets/images/mobile-screen/mobile_dashboard.png'); ?>" alt="Imprint mobile app dashboard" class="ffm-mobile-img">
      <!-- <span class="ffm-mobile-label">Mobile App</span> -->
    </div>
  </div>
</section>

<!-- TRUSTED BY MARQUEE -->
<div class="ffm-marquee-wrap">
  <div class="ffm-marquee-track imp-track">
    <span class="ffm-marquee-item">Banking</span>
    <span class="ffm-marquee-item">Insurance</span>
    <span class="ffm-marquee-item">Healthcare</span>
    <span class="ffm-marquee-item">Security Services</span>
    <span class="ffm-marquee-item">Agritech</span>
    <span class="ffm-marquee-item">Pharmaceuticals</span>
    <span class="ffm-marquee-item">Elderly Care</span>
    <span class="ffm-marquee-item">FMCG</span>
    <span class="ffm-marquee-item">Logistics</span>
    <span class="ffm-marquee-item">Telecom</span>
    <span class="ffm-marquee-item">Banking</span>
    <span class="ffm-marquee-item">Insurance</span>
    <span class="ffm-marquee-item">Healthcare</span>
    <span class="ffm-marquee-item">Security Services</span>
    <span class="ffm-marquee-item">Agritech</span>
    <span class="ffm-marquee-item">Pharmaceuticals</span>
    <span class="ffm-marquee-item">Elderly Care</span>
    <span class="ffm-marquee-item">FMCG</span>
    <span class="ffm-marquee-item">Logistics</span>
    <span class="ffm-marquee-item">Telecom</span>
  </div>
</div>

<!-- WHY CHOOSE -->
<section class="ffm-section ffm-section-alt">
  <div style="max-width:1280px;margin:0 auto;">
    <div class="ffm-grid-2">
      <div>
        <div class="ffm-pill" style="margin-bottom:16px;">Why Imprint</div>
        <h2 style="margin:0 0 16px;font-size:36px;font-weight:700;line-height:1.15;">Why Choose Imprint for Field Force Management?</h2>
        <p style="color:#55506b;line-height:1.7;margin:0 0 24px;">Imprint's <strong>field force management software</strong> enables real-time service tracking and faster ticket resolution, improving field team accountability, response times, and operational efficiency.</p>
        <a href="<?php echo base_url('contactus'); ?>" class="ffm-btn-primary">Book a Demo</a>
      </div>
      <div class="ffm-stats-grid">
        <div class="ffm-card" style="text-align:center;">
          <div class="ffm-stat-num">98%</div>
          <div class="ffm-stat-label">Attendance accuracy</div>
        </div>
        <div class="ffm-card" style="text-align:center;">
          <div class="ffm-stat-num">3x</div>
          <div class="ffm-stat-label">Faster task assignment</div>
        </div>
        <div class="ffm-card" style="text-align:center;">
          <div class="ffm-stat-num">40%</div>
          <div class="ffm-stat-label">Reduction in travel costs</div>
        </div>
        <div class="ffm-card" style="text-align:center;">
          <div class="ffm-stat-num">60%</div>
          <div class="ffm-stat-label">Less admin overhead</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- KEY FEATURES -->
<section class="ffm-section ffm-features-sticky-section">
  <div class="ffm-features-sticky-container">
    <!-- Left Side - Sticky Feature Pointers -->
    <div class="ffm-features-left">
      <div class="ffm-features-left-sticky">
        <div class="ffm-pill" style="margin-bottom:16px;">Features</div>
        <h2 class="ffm-features-title">Built for Teams That <span style="color:#2c409f;">Work in the Field</span></h2>
        <p class="ffm-features-subtitle">Imprint field force management software fits the way your team already works — wherever your people move between clients, sites and territories.</p>
        
        <div class="ffm-feature-pointers">
          <div class="ffm-feature-pointer active" data-feature="1">
            <div class="ffm-pointer-icon"><svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/></svg></div>
            <div class="ffm-pointer-content">
              <span class="ffm-pointer-num">01</span>
              <h4>Field Sales Teams</h4>
              <p>See where every sales rep is during working hours, which clients they met and which leads moved forward.</p>
            </div>
          </div>
          <div class="ffm-feature-pointer" data-feature="2">
            <div class="ffm-pointer-icon"><svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/></svg></div>
            <div class="ffm-pointer-content">
              <span class="ffm-pointer-num">02</span>
              <h4>Collections & Lending</h4>
              <p>Geo-verified borrower and verification visits with photos and time stamps, so every visit is backed by proof.</p>
            </div>
          </div>
          <div class="ffm-feature-pointer" data-feature="3">
            <div class="ffm-pointer-icon"><svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M14.7 6.3a1 1 0 000 1.4l1.6 1.6a1 1 0 001.4 0l3.77-3.77a6 6 0 01-7.94 7.94l-6.91 6.91a2.12 2.12 0 01-3-3l6.91-6.91a6 6 0 017.94-7.94l-3.76 3.76z"/></svg></div>
            <div class="ffm-pointer-content">
              <span class="ffm-pointer-num">03</span>
              <h4>Service & Maintenance Teams</h4>
              <p>Assign tickets on the go and see technicians move between customer sites until the job is closed.</p>
            </div>
          </div>
          <div class="ffm-feature-pointer" data-feature="4">
            <div class="ffm-pointer-icon"><svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg></div>
            <div class="ffm-pointer-content">
              <span class="ffm-pointer-num">04</span>
              <h4>Pharma & Healthcare Reps</h4>
              <p>Plan daily beats, log doctor visits and submit travel expenses from one simple app.</p>
            </div>
          </div>
        </div>
        
        <a href="<?php echo base_url('contactus'); ?>" class="ffm-btn-primary" style="margin-top:24px;">Book a Demo</a>
      </div>
    </div>
    
    <!-- Right Side - Feature Screenshots -->
    <div class="ffm-features-right">
      <div class="ffm-feature-screen" data-screen="1">
        <div class="ffm-screen-card ffm-screen-main">
          <div class="ffm-screen-header">
            <span class="ffm-screen-title">Today's Field Activity</span>
            <span class="ffm-screen-badge">Live</span>
          </div>
          <div class="ffm-screen-chart">
            <svg viewBox="0 0 120 120" class="ffm-donut-chart">
              <circle cx="60" cy="60" r="50" fill="none" stroke="#e8e5f3" stroke-width="12"/>
              <circle cx="60" cy="60" r="50" fill="none" stroke="#2c409f" stroke-width="12" stroke-dasharray="220 94" stroke-dashoffset="0" stroke-linecap="round"/>
              <circle cx="60" cy="60" r="50" fill="none" stroke="#4a5fc0" stroke-width="12" stroke-dasharray="47 267" stroke-dashoffset="-220" stroke-linecap="round"/>
              <circle cx="60" cy="60" r="50" fill="none" stroke="#c5d0ef" stroke-width="12" stroke-dasharray="47 267" stroke-dashoffset="-267" stroke-linecap="round"/>
            </svg>
            <div class="ffm-chart-center">
              <span class="ffm-chart-num">48</span>
              <span class="ffm-chart-label">Tasks</span>
            </div>
          </div>
          <div class="ffm-screen-legend">
            <div class="ffm-legend-item"><span class="ffm-legend-dot" style="background:#2c409f"></span>Completed <strong>34 (71%)</strong></div>
            <div class="ffm-legend-item"><span class="ffm-legend-dot" style="background:#4a5fc0"></span>In Progress <strong>10 (21%)</strong></div>
            <div class="ffm-legend-item"><span class="ffm-legend-dot" style="background:#c5d0ef"></span>Pending <strong>4 (8%)</strong></div>
          </div>
        </div>
        <div class="ffm-screen-card ffm-screen-activity">
          <div class="ffm-activity-photo"></div>
          <p class="ffm-activity-text">Photo — sales rep checking in at a client on the Imprint app.</p>
        </div>
        <div class="ffm-screen-card ffm-screen-checkin">
          <div class="ffm-checkin-header">
            <svg width="16" height="16" fill="none" stroke="#2c409f" stroke-width="2" viewBox="0 0 24 24"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
            <span>Rep check-in</span>
          </div>
          <div class="ffm-checkin-details">
            <strong>Client meeting - Downtown branch</strong>
            <span>Geo-verified at 9:42 AM</span>
          </div>
        </div>
        <div class="ffm-screen-pagination">
          <span class="ffm-page-dot active"></span>
          <span class="ffm-page-dot"></span>
          <span class="ffm-page-dot"></span>
          <span class="ffm-page-dot"></span>
        </div>
      </div>
      
      <div class="ffm-feature-screen" data-screen="2" style="display:none;">
        <div class="ffm-screen-card ffm-screen-main">
          <div class="ffm-screen-header">
            <span class="ffm-screen-title">Collection Visits</span>
            <span class="ffm-screen-badge">Today</span>
          </div>
          <div class="ffm-screen-stats">
            <div class="ffm-stat-box"><span class="ffm-stat-val">28</span><span class="ffm-stat-lbl">Verified</span></div>
            <div class="ffm-stat-box"><span class="ffm-stat-val">5</span><span class="ffm-stat-lbl">Pending</span></div>
            <div class="ffm-stat-box"><span class="ffm-stat-val">₹2.4L</span><span class="ffm-stat-lbl">Collected</span></div>
          </div>
        </div>
        <div class="ffm-screen-card ffm-screen-proof">
          <div class="ffm-proof-icon"><svg width="24" height="24" fill="none" stroke="#22c55e" stroke-width="2" viewBox="0 0 24 24"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg></div>
          <div class="ffm-proof-text">
            <strong>Visit Verified</strong>
            <span>Photo + GPS + Timestamp captured</span>
          </div>
        </div>
        <div class="ffm-screen-pagination">
          <span class="ffm-page-dot"></span>
          <span class="ffm-page-dot active"></span>
          <span class="ffm-page-dot"></span>
          <span class="ffm-page-dot"></span>
        </div>
      </div>
      
      <div class="ffm-feature-screen" data-screen="3" style="display:none;">
        <div class="ffm-screen-card ffm-screen-main">
          <div class="ffm-screen-header">
            <span class="ffm-screen-title">Service Tickets</span>
            <span class="ffm-screen-badge">Active</span>
          </div>
          <div class="ffm-ticket-list">
            <div class="ffm-ticket-item"><span class="ffm-ticket-status open"></span><strong>AC Repair</strong><span>Site: Downtown Mall</span></div>
            <div class="ffm-ticket-item"><span class="ffm-ticket-status progress"></span><strong>Maintenance Check</strong><span>Site: Tech Park</span></div>
            <div class="ffm-ticket-item"><span class="ffm-ticket-status done"></span><strong>Installation</strong><span>Site: Riverside Office</span></div>
          </div>
        </div>
        <div class="ffm-screen-card ffm-screen-tech">
          <div class="ffm-tech-map"></div>
          <p class="ffm-tech-text">Live tracking — Technician en route to next site</p>
        </div>
        <div class="ffm-screen-pagination">
          <span class="ffm-page-dot"></span>
          <span class="ffm-page-dot"></span>
          <span class="ffm-page-dot active"></span>
          <span class="ffm-page-dot"></span>
        </div>
      </div>
      
      <div class="ffm-feature-screen" data-screen="4" style="display:none;">
        <div class="ffm-screen-card ffm-screen-main">
          <div class="ffm-screen-header">
            <span class="ffm-screen-title">Daily Beat Plan</span>
            <span class="ffm-screen-badge">Pharma</span>
          </div>
          <div class="ffm-beat-list">
            <div class="ffm-beat-item done"><span class="ffm-beat-time">9:00 AM</span><strong>Dr. Sharma Clinic</strong></div>
            <div class="ffm-beat-item done"><span class="ffm-beat-time">10:30 AM</span><strong>City Hospital</strong></div>
            <div class="ffm-beat-item current"><span class="ffm-beat-time">12:00 PM</span><strong>Medicare Pharmacy</strong></div>
            <div class="ffm-beat-item"><span class="ffm-beat-time">2:00 PM</span><strong>Dr. Patel Clinic</strong></div>
          </div>
        </div>
        <div class="ffm-screen-card ffm-screen-expense">
          <div class="ffm-expense-header">
            <svg width="16" height="16" fill="none" stroke="#2c409f" stroke-width="2" viewBox="0 0 24 24"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/></svg>
            <span>Expense Submitted</span>
          </div>
          <div class="ffm-expense-details">
            <strong>Travel - ₹450</strong>
            <span>Auto-calculated from GPS route</span>
          </div>
        </div>
        <div class="ffm-screen-pagination">
          <span class="ffm-page-dot"></span>
          <span class="ffm-page-dot"></span>
          <span class="ffm-page-dot"></span>
          <span class="ffm-page-dot active"></span>
        </div>
      </div>
    </div>
  </div>
</section>

<script>
(function() {
  const pointers = document.querySelectorAll('.ffm-feature-pointer');
  const screens = document.querySelectorAll('.ffm-feature-screen');
  
  // Scroll-based feature switching
  const section = document.querySelector('.ffm-features-sticky-section');
  if (!section) return;
  
  function updateActiveFeature() {
    const sectionRect = section.getBoundingClientRect();
    const sectionHeight = section.offsetHeight;
    const scrollProgress = Math.max(0, -sectionRect.top) / (sectionHeight - window.innerHeight);
    
    let activeIndex = Math.min(3, Math.floor(scrollProgress * 4));
    if (sectionRect.top > 0) activeIndex = 0;
    
    pointers.forEach((p, i) => {
      p.classList.toggle('active', i === activeIndex);
    });
    
    screens.forEach((s, i) => {
      s.style.display = i === activeIndex ? 'block' : 'none';
    });
  }
  
  // Pointer click handling
  pointers.forEach((pointer, index) => {
    pointer.addEventListener('click', () => {
      pointers.forEach(p => p.classList.remove('active'));
      pointer.classList.add('active');
      screens.forEach((s, i) => {
        s.style.display = i === index ? 'block' : 'none';
      });
    });
  });
  
  window.addEventListener('scroll', updateActiveFeature);
  updateActiveFeature();
})();
</script>

<!-- BENEFITS -->
<section class="ffm-section ffm-section-alt ffm-benefits-section">
  <div style="max-width:1280px;margin:0 auto;">
    <div style="text-align:center;margin-bottom:48px;">
      <div class="ffm-pill" style="margin-bottom:16px;">Benefits</div>
      <h2 style="margin:0 0 12px;font-size:36px;font-weight:700;">Benefits of Using <span style="color:#2c409f;">Imprint</span></h2>
      <p style="margin:0;color:#7a7590;font-size:16px;">Hover any benefit card to see details in the center panel</p>
    </div>
    
    <div class="ffm-dial-container">
      <!-- Left Benefits Column -->
      <div class="ffm-dial-left">
        <div class="ffm-dial-card" data-benefit="1">
          <div class="ffm-dial-card-icon"><svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><polyline points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/></svg></div>
          <span class="ffm-dial-card-title">Increased Productivity</span>
          <span class="ffm-dial-card-num">01</span>
        </div>
        <div class="ffm-dial-card" data-benefit="2">
          <div class="ffm-dial-card-icon"><svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg></div>
          <span class="ffm-dial-card-title">Improved Visibility</span>
          <span class="ffm-dial-card-num">02</span>
        </div>
        <div class="ffm-dial-card" data-benefit="3">
          <div class="ffm-dial-card-icon"><svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/></svg></div>
          <span class="ffm-dial-card-title">Better Resource Allocation</span>
          <span class="ffm-dial-card-num">03</span>
        </div>
      </div>

      <!-- Center Dial -->
      <div class="ffm-dial-center">
        <div class="ffm-dial-info-box" id="dialInfoBox">
          <div class="ffm-dial-info-badge"><span class="ffm-dial-info-num">01</span> OF 06 • <span class="ffm-dial-info-status">ACTIVE</span></div>
          <div class="ffm-dial-info-icon"><svg width="28" height="28" fill="none" stroke="#2c409f" stroke-width="2" viewBox="0 0 24 24"><polyline points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/></svg></div>
          <h4 class="ffm-dial-info-title">Increased Productivity</h4>
          <p class="ffm-dial-info-desc">Imprint enhances the productivity of both field agents and managers by automating routine tasks and providing real-time insights.</p>
        </div>
        <div class="ffm-dial-wheel">
          <svg viewBox="0 0 200 200" class="ffm-dial-svg">
            <circle cx="100" cy="100" r="85" fill="none" stroke="#e0e4ed" stroke-width="12"/>
            <circle cx="100" cy="100" r="85" fill="none" stroke="#2c409f" stroke-width="12" stroke-dasharray="89 445" stroke-dashoffset="0" stroke-linecap="round" class="ffm-dial-progress" id="dialProgress"/>
            <defs>
              <linearGradient id="dialGradient" x1="0%" y1="0%" x2="100%" y2="0%">
                <stop offset="0%" style="stop-color:#2c409f"/>
                <stop offset="100%" style="stop-color:#2c409f"/>
              </linearGradient>
            </defs>
          </svg>
          <div class="ffm-dial-center-text">
            <span class="ffm-dial-number">06</span>
            <span class="ffm-dial-label">Benefits</span>
          </div>
          <!-- Dial Dots -->
          <span class="ffm-dial-dot" data-pos="1" style="top:5%;left:50%;transform:translateX(-50%)"></span>
          <span class="ffm-dial-dot" data-pos="2" style="top:25%;right:8%"></span>
          <span class="ffm-dial-dot" data-pos="3" style="bottom:25%;right:8%"></span>
          <span class="ffm-dial-dot" data-pos="4" style="bottom:5%;left:50%;transform:translateX(-50%)"></span>
          <span class="ffm-dial-dot" data-pos="5" style="bottom:25%;left:8%"></span>
          <span class="ffm-dial-dot" data-pos="6" style="top:25%;left:8%"></span>
        </div>
        <div class="ffm-dial-footer">
          <div class="ffm-dial-footer-icon"><svg width="18" height="18" fill="none" stroke="#2c409f" stroke-width="2" viewBox="0 0 24 24"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg></div>
          <div class="ffm-dial-footer-text">
            <strong>Complete Field Management</strong>
            <span>6 powerful benefits to transform your operations</span>
          </div>
        </div>
      </div>

      <!-- Right Benefits Column -->
      <div class="ffm-dial-right">
        <div class="ffm-dial-card" data-benefit="4">
          <span class="ffm-dial-card-num">04</span>
          <span class="ffm-dial-card-title">Enhanced Client Satisfaction</span>
          <div class="ffm-dial-card-icon"><svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/></svg></div>
        </div>
        <div class="ffm-dial-card" data-benefit="5">
          <span class="ffm-dial-card-num">05</span>
          <span class="ffm-dial-card-title">Cost-Effective Operations</span>
          <div class="ffm-dial-card-icon"><svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/></svg></div>
        </div>
        <div class="ffm-dial-card" data-benefit="6">
          <span class="ffm-dial-card-num">06</span>
          <span class="ffm-dial-card-title">Data-Driven Insights</span>
          <div class="ffm-dial-card-icon"><svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg></div>
        </div>
      </div>
    </div>

    <!-- Mobile Benefits (shown only on mobile) -->
    <div class="ffm-benefits-mobile">
      <div class="ffm-benefits-mobile-scroll">
        <div class="ffm-benefit-mobile-card">
          <div class="ffm-benefit-mobile-icon"><svg width="24" height="24" fill="none" stroke="#2c409f" stroke-width="2" viewBox="0 0 24 24"><polyline points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/></svg></div>
          <h4>Increased Productivity</h4>
          <p>Imprint enhances the productivity of both field agents and managers by automating routine tasks.</p>
        </div>
        <div class="ffm-benefit-mobile-card">
          <div class="ffm-benefit-mobile-icon"><svg width="24" height="24" fill="none" stroke="#2c409f" stroke-width="2" viewBox="0 0 24 24"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg></div>
          <h4>Improved Visibility</h4>
          <p>With real-time tracking and automated reports, managers have complete visibility of field operations.</p>
        </div>
        <div class="ffm-benefit-mobile-card">
          <div class="ffm-benefit-mobile-icon"><svg width="24" height="24" fill="none" stroke="#2c409f" stroke-width="2" viewBox="0 0 24 24"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/></svg></div>
          <h4>Better Resource Allocation</h4>
          <p>Task assignment and beat planning features ensure that resources are used efficiently.</p>
        </div>
        <div class="ffm-benefit-mobile-card">
          <div class="ffm-benefit-mobile-icon"><svg width="24" height="24" fill="none" stroke="#2c409f" stroke-width="2" viewBox="0 0 24 24"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/></svg></div>
          <h4>Enhanced Client Satisfaction</h4>
          <p>Field agents can manage leads more efficiently, ensuring timely follow-ups.</p>
        </div>
        <div class="ffm-benefit-mobile-card">
          <div class="ffm-benefit-mobile-icon"><svg width="24" height="24" fill="none" stroke="#2c409f" stroke-width="2" viewBox="0 0 24 24"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/></svg></div>
          <h4>Cost-Effective Operations</h4>
          <p>Automating tasks like attendance, reporting, and expense submission reduces overhead.</p>
        </div>
        <div class="ffm-benefit-mobile-card">
          <div class="ffm-benefit-mobile-icon"><svg width="24" height="24" fill="none" stroke="#2c409f" stroke-width="2" viewBox="0 0 24 24"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg></div>
          <h4>Data-Driven Insights</h4>
          <p>Detailed analytics and reporting tools to measure field team performance.</p>
        </div>
      </div>
      <p class="ffm-mobile-swipe-hint">← Swipe to explore →</p>
    </div>
  </div>
</section>

<script>
(function() {
  const benefitData = {
    1: { num: '01', title: 'Increased Productivity', desc: 'Imprint enhances the productivity of both field agents and managers by automating routine tasks and providing real-time insights.', icon: '<polyline points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/>' },
    2: { num: '02', title: 'Improved Visibility', desc: 'With real-time tracking and automated reports, managers have complete visibility of field operations, enabling data-driven decisions.', icon: '<path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/>' },
    3: { num: '03', title: 'Better Resource Allocation', desc: 'Task assignment and beat planning features ensure that resources are used efficiently, reducing travel time and costs.', icon: '<path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/>' },
    4: { num: '04', title: 'Enhanced Client Satisfaction', desc: 'Field agents can manage leads more efficiently, ensuring timely follow-ups and better customer engagement.', icon: '<path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/>' },
    5: { num: '05', title: 'Cost-Effective Operations', desc: 'Automating tasks like attendance, reporting, and expense submission helps reduce administrative overhead and prevents fraud.', icon: '<line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/>' },
    6: { num: '06', title: 'Data-Driven Insights', desc: 'Detailed analytics and reporting tools help businesses measure field team performance and identify areas for improvement.', icon: '<polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/>' }
  };
  
  const cards = document.querySelectorAll('.ffm-dial-card');
  const dots = document.querySelectorAll('.ffm-dial-dot');
  const infoBox = document.getElementById('dialInfoBox');
  const progress = document.getElementById('dialProgress');
  
  function updateDial(benefitNum) {
    const data = benefitData[benefitNum];
    if (!data || !infoBox) return;
    
    infoBox.querySelector('.ffm-dial-info-num').textContent = data.num;
    infoBox.querySelector('.ffm-dial-info-title').textContent = data.title;
    infoBox.querySelector('.ffm-dial-info-desc').textContent = data.desc;
    infoBox.querySelector('.ffm-dial-info-icon').innerHTML = '<svg width="28" height="28" fill="none" stroke="#2c409f" stroke-width="2" viewBox="0 0 24 24">' + data.icon + '</svg>';
    
    // Update progress ring
    const dashOffset = -((benefitNum - 1) * 89);
    if (progress) progress.style.strokeDashoffset = dashOffset;
    
    // Update active states
    cards.forEach(c => c.classList.remove('active'));
    document.querySelector('.ffm-dial-card[data-benefit="' + benefitNum + '"]')?.classList.add('active');
    
    dots.forEach(d => d.classList.remove('active'));
    document.querySelector('.ffm-dial-dot[data-pos="' + benefitNum + '"]')?.classList.add('active');
  }
  
  cards.forEach(card => {
    card.addEventListener('mouseenter', () => updateDial(parseInt(card.dataset.benefit)));
  });
  
  // Initialize with first benefit
  updateDial(1);
  document.querySelector('.ffm-dial-card[data-benefit="1"]')?.classList.add('active');
  document.querySelector('.ffm-dial-dot[data-pos="1"]')?.classList.add('active');
})();
</script>

<!-- CONTACT FORM SECTION -->
<section class="ffm-contact-section">
  <div class="ffm-contact-container">
    <!-- Left Side - Content -->
    <div class="ffm-contact-left">
      <h2 class="ffm-contact-title">Facing Issues with Field Force Management?</h2>
      <p class="ffm-contact-desc">Imprint’s field workforce management software helps you manage field teams, monitor daily activities, and track everything in one place.
</p>
      
      <ul class="ffm-contact-features">
        <li>
          <svg width="18" height="18" fill="none" stroke="#22c55e" stroke-width="2" viewBox="0 0 24 24"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
          Real-time visibility into field team locations and movement

        </li>
        <li>
          <svg width="18" height="18" fill="none" stroke="#22c55e" stroke-width="2" viewBox="0 0 24 24"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
          Verified attendance with greater workforce accountability

        </li>
        <li>
          <svg width="18" height="18" fill="none" stroke="#22c55e" stroke-width="2" viewBox="0 0 24 24"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
          Fewer missed customer visits and service commitments

        </li>
        <li>
          <svg width="18" height="18" fill="none" stroke="#22c55e" stroke-width="2" viewBox="0 0 24 24"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
           Faster ticket resolution with reduced response delays

        </li>
        <li>
          <svg width="18" height="18" fill="none" stroke="#22c55e" stroke-width="2" viewBox="0 0 24 24"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
          Full operational cost visibility
        </li>
      </ul>
      
      <p class="ffm-contact-tagline">Field operations, managed end to end.</p>
      
      <p class="ffm-contact-desc" style="margin-bottom:16px;">Available on:</p>
      <div class="ffm-app-badges">
        <a href="https://play.google.com/store/apps/details?id=com.astiinfotech.Imprint&hl=en_IN" target="_blank">
          <img src="<?php echo base_url('assets/images/mobile-screen/playstore.png'); ?>" alt="Get it on Google Play">
        </a>
        <a href="https://apps.apple.com/in/app/imprint-asti/id1204732517" target="_blank">
          <img src="<?php echo base_url('assets/images/mobile-screen/appstore.png'); ?>" alt="Download on App Store">
        </a>
      </div>
      
      <p class="ffm-contact-trust">
        <svg width="18" height="18" fill="none" stroke="#2c409f" stroke-width="2" viewBox="0 0 24 24"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
        Trusted by 50+ companies — Finance, FMCG, healthcare, telecom, agriculture and construction.
      </p>
    </div>
    
    <!-- Right Side - Form -->
    <div class="ffm-contact-right">
      <!-- Form Card -->
      <div class="ffm-form-card" id="ffmFormCard">
        <div class="ffm-form-header">
          <h3>Tell Us Your Queries,</h3>
          <p>We are here to assist you</p>
        </div>
        
        <form action="" method="post" id="ffmContactForm" novalidate="novalidate">
          <div class="ffm-form-row">
            <div class="ffm-form-group">
              <label>Full Name <span>*</span></label>
              <input type="text" id="ffm_name" placeholder="Enter your full name" maxlength="50" onpaste="return false;" ondrop="return false;" autocomplete="off">
            </div>
            <div class="ffm-form-group">
              <label>Email <span>*</span></label>
              <input type="text" id="ffm_email" placeholder="Enter your email" onpaste="return false;" ondrop="return false;" autocomplete="off">
            </div>
          </div>
          
          <div class="ffm-form-row">
            <div class="ffm-form-group">
              <label>Interested In <span>*</span></label>
              <input type="text" id="ffm_interested" placeholder="e.g. Field Force Management" maxlength="50" onpaste="return false;" ondrop="return false;" autocomplete="off">
            </div>
            <div class="ffm-form-group">
              <label>Phone Number <span>*</span></label>
              <div style="position:relative;">
                <span style="position:absolute;left:13px;top:50%;transform:translateY(-50%);color:#55506b;">+</span>
                <input type="number" id="ffm_phone" placeholder="Phone Number" style="padding-left:28px;" onpaste="return false;" ondrop="return false;" autocomplete="off">
              </div>
            </div>
          </div>
          
          <div class="ffm-form-group" style="margin-bottom:16px;">
            <label>Message <span>*</span></label>
            <textarea id="ffm_message" placeholder="Tell us about your requirements..." onpaste="return false;" ondrop="return false;" autocomplete="off"></textarea>
          </div>
          
          <!-- Captcha Verification -->
          <div class="ffm-form-group ffm-captcha-box">
            <label style="font-weight:600;">Verify you're human: <span id="ffm_captcha_q" style="color:#2c409f;font-weight:bold;"></span> = ?</label>
            <input type="text" id="ffm_captcha_input" placeholder="Enter answer" style="max-width:200px;margin-top:8px;" autocomplete="off">
            <span id="ffm_captcha_error" style="color:#ef4444;display:none;margin-left:10px;font-size:14px;">Incorrect answer</span>
          </div>
          
          <div style="display:flex;align-items:center;gap:16px;">
            <button type="button" id="ffm_submit" onclick="if(ffmValidateCaptcha()) ffmContactSubmit()" class="ffm-form-submit">Submit Enquiry</button>
            <img id="ffm_loading" src="<?php echo base_url('/assets/images/3.gif'); ?>" alt="Loading..." style="display:none;width:32px;height:32px;">
          </div>
        </form>
      </div>
      
      <!-- Thank You Card (hidden by default) -->
      <div class="ffm-thankyou-card" id="ffmThankYouCard" style="display:none;">
        <div class="ffm-thankyou-icon">
          <svg width="64" height="64" fill="none" stroke="#22c55e" stroke-width="2" viewBox="0 0 24 24">
            <path d="M22 11.08V12a10 10 0 11-5.93-9.14"/>
            <polyline points="22 4 12 14.01 9 11.01"/>
          </svg>
        </div>
        <h3 class="ffm-thankyou-title">Thank You!</h3>
        <p class="ffm-thankyou-text">Your enquiry has been submitted successfully. Our team will get back to you shortly.</p>
        <a href="<?php echo base_url(''); ?>" class="ffm-btn-primary" style="margin-top:20px;">Back to Home</a>
      </div>
    </div>
  </div>
</section>

<!-- Contact Form JavaScript -->
<script>
var ffmCaptchaAnswer = 0;

// Generate captcha on page load
function ffmGenerateCaptcha() {
    var num1 = Math.floor(Math.random() * 10) + 1;
    var num2 = Math.floor(Math.random() * 10) + 1;
    var questionElement = document.getElementById('ffm_captcha_q');
    if (questionElement) {
        questionElement.textContent = num1 + ' + ' + num2;
        ffmCaptchaAnswer = num1 + num2;
    }
}

// Validate captcha
function ffmValidateCaptcha() {
    var inputElement = document.getElementById('ffm_captcha_input');
    var errorElement = document.getElementById('ffm_captcha_error');
    
    if (!inputElement || !errorElement) return false;
    
    var userAnswer = parseInt(inputElement.value);
    
    if (userAnswer === ffmCaptchaAnswer) {
        errorElement.style.display = 'none';
        return true;
    } else {
        errorElement.style.display = 'inline';
        return false;
    }
}

// Form submission function
function ffmContactSubmit() {
    var $ = jQuery;
    var name = $('#ffm_name').val();
    var email = $('#ffm_email').val();
    var phone = $('#ffm_phone').val();
    var interested = $('#ffm_interested').val();
    var message = $('#ffm_message').val();
    var to = "info@astiinfotech.com";
    var subject = "Interested in " + interested;
    
    // Validation patterns
    var pattern = /^[0-9]{6,16}$/;
    var namepattern = /^.{3,50}$/;
    var interestpattern = /^.{3,50}$/;
    var emailpattern = /[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,3}$/;

    // Validation
    if (name == null || name == "") {
        alert("Name must be filled out.");
        return false;
    } else if (!namepattern.test(name)) {
        alert("Name should be between 3 and 50 characters.");
        return false;
    } else if (email == null || email == "") {
        alert("Email must be filled out.");
        return false;
    } else if (!emailpattern.test(email)) {
        alert("Please provide a valid email address.");
        return false;
    } else if (interested == null || interested == "") {
        alert("Interested In field must be filled out.");
        return false;
    } else if (!interestpattern.test(interested)) {
        alert("Interested In field should be between 3 and 50 characters.");
        return false;
    } else if (phone == "") {
        alert("Please provide your phone number!");
        return false;
    } else if (!pattern.test(phone)) {
        alert("Phone number should be between 6 and 16 digits.");
        return false;
    } else if (message == null || message == "") {
        alert("Please provide a message.");
        return false;
    } else if (name != "" && email != "" && phone != "" && message != "") {
        
        // Show loading, disable button
        $('#ffm_submit').text('Sending...');
        $('#ffm_loading').show();
        
        $.ajax({
            type: "POST",
            data: {
                "name": name,
                "email": email,
                "subject": interested,
                "message": message,
                "to": to,
                "phone": phone
            },
            url: "https://imprintai.us/imprintmail.php",
            success: function(msg) {
                $('#ffm_loading').hide();
                
                // Clear form fields
                $('#ffm_name').val('');
                $('#ffm_email').val('');
                $('#ffm_phone').val('');
                $('#ffm_interested').val('');
                $('#ffm_message').val('');
                $('#ffm_captcha_input').val('');
                $('#ffm_submit').text('Submit Enquiry');
                
                // Hide form, show thank you
                $('#ffmFormCard').fadeOut(300, function() {
                    $('#ffmThankYouCard').fadeIn(300);
                });
            },
            error: function() {
                $('#ffm_loading').hide();
                $('#ffm_submit').text('Submit Enquiry');
                alert("Something went wrong. Please try again.");
            }
        });
    }
}

// Initialize captcha when DOM is ready
if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', ffmGenerateCaptcha);
} else {
    ffmGenerateCaptcha();
}
setTimeout(ffmGenerateCaptcha, 500);
</script>

<!-- APPS & DASHBOARD -->
<section class="ffm-section ffm-platform-section">
  <div style="max-width:1280px;margin:0 auto;">
    <div style="text-align:center;margin-bottom:48px;">
      <div class="ffm-pill" style="margin-bottom:16px;">Platform</div>
      <h2 class="ffm-platform-title">The Imprint Apps and Dashboard</h2>
    </div>
    
    <!-- Mobile App Section -->
    <div class="ffm-platform-block">
      <div class="ffm-platform-images">
        <img class="trans" src="<?php echo base_url('assets/images/mobile-screen/homedashboard.jpg'); ?>" alt="Imprint mobile app">
        <img class="trans" src="<?php echo base_url('assets/images/mobile-screen/taskmanagement.jpg'); ?>" alt="Task management">
      </div>
      <div class="ffm-platform-content">
        <h3 class="ffm-platform-subtitle">Mobile App for Field Agents</h3>
        <p class="ffm-platform-desc">Give field agents the tools to manage daily tasks, customer visits, expenses, attendance, and service updates on the go.</p>
        <ul class="ffm-platform-list">
          <li><strong>Task and Lead Updates:</strong> Manage assigned tasks and update leads on the go.</li>
          <li><strong>Geo-tagged Attendance:</strong> Mark attendance with location verification.</li>
          <li><strong>Expense Submission:</strong> Submit travel and other field expenses for approval.</li>
          <li><strong>Client Visit Reports:</strong> Record customer visits and field activities.</li>
          <li><strong>Leave Management:</strong> Apply for leave and manage leave requests directly from the app.</li>
          <li><strong>Ticket Updates:</strong> View assigned tickets and update their status.</li>
        </ul>
      </div>
    </div>
    
    <!-- Dashboard Section -->
    <div class="ffm-platform-block ffm-platform-reverse">
      <div class="ffm-platform-content">
        <h3 class="ffm-platform-subtitle">Manager's Dashboard</h3>
        <p class="ffm-platform-desc">Imprint's centralized dashboard provides managers with complete 360-degree visibility into their field teams' daily operations. With real-time tracking, automated reports, and performance analytics, managers can make data-driven decisions.</p>
        <ul class="ffm-platform-list">
          <li><strong>Real-time tracking and reporting:</strong> Monitor field agents and generate instant reports.</li>
          <li><strong>Task and beat management:</strong> Efficiently assign and manage tasks and routes.</li>
          <li><strong>Performance analytics:</strong> Access data-driven insights on team performance.</li>
          <li><strong>Lead management:</strong> Organize, track, and update leads to streamline the sales process.</li>
          <li><strong>Customizable alerts and notifications:</strong> Set up personalized alerts for deviations or missed tasks.</li>
        </ul>
      </div>
      <div class="ffm-platform-images">
        <img class="trans" src="<?php echo base_url('assets/images/mobile-screen/homedashboard.jpg'); ?>" alt="Manager dashboard">
        <img class="trans" src="<?php echo base_url('assets/images/mobile-screen/addlead.jpg'); ?>" alt="Lead management">
      </div>
    </div>
  </div>
</section>

<!-- HOW IT WORKS -->
<section class="ffm-section ffm-section-alt ffm-howitworks-section">
  <div style="max-width:1280px;margin:0 auto;">
    <div style="text-align:center;margin-bottom:48px;">
      <div class="ffm-pill" style="margin-bottom:16px;">How It Works</div>
      <h2 class="ffm-howitworks-title">How Imprint Turns Field Complexity Into Operational Clarity</h2>
      <p class="ffm-howitworks-desc">Imprint's field force management system connects the manager dashboard and the agent app so every field activity, from attendance to task completion, is captured, tracked, and reported automatically.</p>
    </div>
    
    <!-- Desktop/Tablet: Grid Layout -->
    <div class="ffm-steps ffm-steps-desktop">
      <div class="ffm-step-card">
        <div class="ffm-step-num">1</div>
        <h3>Real-Time Monitoring</h3>
        <p>Managers assign tasks and routes from the dashboard. Agents get notified instantly on the app, check in via GPS and update task status as they move through the day.</p>
      </div>
      <div class="ffm-step-card">
        <div class="ffm-step-num">2</div>
        <h3>Automate the Admin</h3>
        <p>Check-ins, expense claims, and visit reports are captured through the app and synced to the dashboard in real time without delays and the need for paperwork.</p>
      </div>
      <div class="ffm-step-card">
        <div class="ffm-step-num">3</div>
        <h3>Report and Optimize</h3>
        <p>Live field data converts into performance reports automatically. Managers see what happened, what it cost, and where to improve before the next day begins.</p>
      </div>
    </div>
    
    <!-- Mobile: Horizontal Scroll Slider -->
    <div class="ffm-steps-mobile">
      <p class="ffm-mobile-swipe-hint"><svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg> Swipe to explore</p>
      <div class="ffm-steps-mobile-scroll">
        <div class="ffm-step-mobile-card">
          <div class="ffm-step-mobile-num">1</div>
          <h4>Real-Time Monitoring</h4>
          <p>Managers assign tasks and routes from the dashboard. Agents get notified instantly on the app, check in via GPS and update task status as they move through the day.</p>
        </div>
        <div class="ffm-step-mobile-card">
          <div class="ffm-step-mobile-num">2</div>
          <h4>Automate the Admin</h4>
          <p>Check-ins, expense claims, and visit reports are captured through the app and synced to the dashboard in real time without delays and the need for paperwork.</p>
        </div>
        <div class="ffm-step-mobile-card">
          <div class="ffm-step-mobile-num">3</div>
          <h4>Report and Optimize</h4>
          <p>Live field data converts into performance reports automatically. Managers see what happened, what it cost, and where to improve before the next day begins.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- INDUSTRIES -->
<section class="ffm-section">
  <div style="max-width:1280px;margin:0 auto;">
    <div style="text-align:center;margin-bottom:40px;">
      <div class="ffm-pill" style="margin-bottom:16px;">Industries</div>
      <h2 style="margin:0 0 12px;font-size:36px;font-weight:700;">Industries That Can Benefit from Imprint</h2>
      <p style="color:#55506b;max-width:700px;margin:0 auto;line-height:1.7;">Imprint's field force management system works for any business with a mobile workforce, from field sales and service teams to last-mile delivery.
</strong> is designed to cater to a wide range of industries.</p>
    </div>
    <div style="text-align:center;margin-bottom:32px;">
      <span class="ffm-tag">Banking</span>
      <span class="ffm-tag">Insurance</span>
      <span class="ffm-tag">Healthcare</span>
      <span class="ffm-tag">Security Services</span>
      <span class="ffm-tag">Agritech</span>
      <span class="ffm-tag">Pharmaceuticals</span>
      <span class="ffm-tag">Elderly Care</span>
      <span class="ffm-tag">FMCG</span>
      <span class="ffm-tag">Logistics</span>
      <span class="ffm-tag">Telecom</span>
      <span class="ffm-tag">Real Estate</span>
      <span class="ffm-tag">Solar Energy</span>
    </div>
    <p style="color:#55506b;line-height:1.7;text-align:center;max-width:800px;margin:0 auto;">By integrating Imprint into your field operations, you can gain greater control, streamline processes, and improve the overall performance of your field teams. Whether you're managing sales, service, or delivery teams, Imprint's <strong>field force management software</strong> is designed to help you achieve success.</p>
  </div>
</section>

<!-- FAQ -->
<section class="ffm-section ffm-section-alt">
  <div style="max-width:800px;margin:0 auto;">
    <div style="text-align:center;margin-bottom:40px;">
      <div class="ffm-pill" style="margin-bottom:16px;">FAQ</div>
      <h2 style="margin:0;font-size:36px;font-weight:700;">Frequently Asked Questions</h2>
    </div>
    <details class="ffm-faq-item">
      <summary>What is field force management software? <span>+</span></summary>
      <p>Field workforce management software helps businesses track, manage, and optimize their on-ground teams through GPS tracking, automated attendance, task assignment, beat planning, and performance reporting.</p>
    </details>
    <details class="ffm-faq-item">
      <summary>How does Imprint track field agent attendance? <span>+</span></summary>
      <p>Agents check in and out automatically based on GPS location, removing manual punch-ins and producing tamper-proof records at 98% accuracy.</p>
    </details>
    <details class="ffm-faq-item">
      <summary>Can Imprint be used across multiple industries? <span>+</span></summary>
      <p>Yes. Imprint's field force automation software serves any organization with a mobile workforce, including banking, healthcare, pharmaceuticals, FMCG, logistics, and agritech.</p>
    </details>
    <details class="ffm-faq-item">
      <summary>Does Imprint have a mobile app for field agents? <span>+</span></summary>
      <p>Yes. The field force management app covers task management, lead tracking, geo-tagged attendance, expense submission, and in-app reporting in one place.</p>
    </details>
    <details class="ffm-faq-item">
      <summary>How does beat planning work in Imprint? <span>+</span></summary>
      <p>Managers create optimized daily, weekly, or monthly routes for field agents, improving visit coverage and driving a 40% reduction in travel costs Imprint customers report.</p>
    </details>
  </div>
</section>

<!-- CTA -->
<section class="ffm-section">
  <div style="max-width:1280px;margin:0 auto;">
    <div class="ffm-cta" id="demo">
      <h2>Ready to Transform Your Field Operations?</h2>
      <p>Join thousands of businesses using Imprint to manage their field teams smarter.</p>
      <div class="ffm-cta-btns">
        <a href="<?php echo base_url('contactus'); ?>" class="ffm-btn-white">Book a Demo</a>
        <a href="https://imprint.astiinfotech.com/#/login" target="_blank" class="ffm-btn-outline-white">Start Free Today</a>
      </div>
    </div>
  </div>
</section>

</div><!-- .ffm-page -->



<?php
$this->load->view('footer/footer');
?>
