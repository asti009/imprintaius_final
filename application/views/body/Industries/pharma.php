<?php 
$this->load->helper('url');
 $this->load->view('header/header'); ?>

<!-- ===================== INDUSTRY HERO ===================== -->
<style>
.ind-hero {
   background: #f4f3fb;
   padding: 130px 0 70px;
}
.ind-hero-inner {
   max-width: 1000px;
   margin: 0 auto;
   padding: 0 24px;
   text-align: center;
}
.ind-breadcrumb {
   font-family: Poppins, sans-serif;
   font-size: 14px;
   color: #6b7280;
   margin-bottom: 36px;
   text-align: left;
}
.ind-breadcrumb a { color: #6b7280; text-decoration: none; }
.ind-breadcrumb a:hover { color: #2c409f; }
.ind-breadcrumb .sep { margin: 0 6px; color: #b9b9c6; }
.ind-breadcrumb .current { color: #16123a; font-weight: 600; }
.ind-badge {
   display: inline-flex;
   align-items: center;
   gap: 10px;
   background: #fff;
   border: 1px solid #e4e1f3;
   border-radius: 40px;
   padding: 6px 6px 6px 6px;
   margin-bottom: 26px;
   font-family: Poppins, sans-serif;
   font-size: 13.5px;
}
.ind-badge .ind-badge-pill {
   background: #2c409f;
   color: #fff;
   border-radius: 30px;
   padding: 7px 16px;
   font-weight: 600;
}
.ind-badge .ind-badge-text {
   color: #2c409f;
   padding-right: 14px;
   font-weight: 500;
}
.ind-hero h1 {
   font-family: Poppins, sans-serif;
   font-size: 56px;
   font-weight: 800;
   line-height: 1.1;
   color: #16123a;
   margin: 0 0 22px;
   letter-spacing: -1px;
}
.ind-hero h1 .accent { color: #2c409f; display: block; }
.ind-hero p {
   font-family: Poppins, sans-serif;
   font-size: 18px;
   line-height: 1.6;
   color: #6b7280;
   max-width: 680px;
   margin: 0 auto 34px;
}
.ind-hero-btns {
   display: flex;
   gap: 16px;
   justify-content: center;
   flex-wrap: wrap;
}
.ind-btn {
   display: inline-flex;
   align-items: center;
   justify-content: center;
   font-family: Poppins, sans-serif;
   font-size: 16px;
   font-weight: 600;
   padding: 14px 32px;
   border-radius: 40px;
   text-decoration: none;
   transition: all .25s ease;
   cursor: pointer;
}
.ind-btn-primary {
   background: #2c409f;
   color: #fff !important;
   border: 1.5px solid #2c409f;
   box-shadow: 0 10px 26px rgba(91,63,214,.32);
}
.ind-btn-primary:hover { background: #4a30bd; border-color: #4a30bd; transform: translateY(-2px); color: #fff !important; }
.ind-btn-outline {
   background: transparent;
   color: #2c409f !important;
   border: 1.5px solid #cfc6f4;
}
.ind-btn-outline:hover { border-color: #2c409f; background: #fff; transform: translateY(-2px); color: #2c409f !important; }

/* ---------- Tablet ---------- */
@media (max-width: 992px) {
   .ind-hero { padding: 110px 0 60px; }
   .ind-hero h1 { font-size: 44px; }
}
/* ---------- Phone ---------- */
@media (max-width: 600px) {
   .ind-hero { padding: 100px 0 48px; }
   .ind-hero-inner { padding: 0 18px; }
   .ind-breadcrumb { margin-bottom: 24px; font-size: 13px; }
   .ind-badge { flex-wrap: wrap; justify-content: center; font-size: 12.5px; }
   .ind-hero h1 { font-size: 30px; letter-spacing: -0.5px; }
   .ind-hero p { font-size: 15px; }
   .ind-hero-btns { gap: 12px; }
   .ind-btn { width: 100%; font-size: 15px; padding: 13px 24px; }
}
@media (max-width: 380px) {
   .ind-hero h1 { font-size: 26px; }
}
</style>

<section class="ind-hero">
   <div class="ind-hero-inner">
      <div class="ind-breadcrumb">
         <a href="<?php echo base_url('')?>">Home</a>
         <span class="sep">/</span>
         <a href="<?php echo base_url('industries')?>">Industries</a>
         <span class="sep">/</span>
         <span class="current">NBFCs &amp; Lenders</span>
      </div>

      <span class="ind-badge">
         <span class="ind-badge-pill">Imprint Field Force Management</span>
         <span class="ind-badge-text">Configured for NBFCs &amp; Lenders</span>
      </span>

      <h1>Every Doctor Visit Planned.<span class="accent">Every Field Activity Tracked.</span></h1>

      <p>Empower medical representatives to plan doctor visits, manage territories, capture feedback and record field activities through one connected platform.</p>

      <div class="ind-hero-btns">
         <a href="<?php echo base_url('contactus#Demo'); ?>" class="ind-btn ind-btn-primary">Book a Demo</a>
         <a href="https://imprint.astiinfotech.com/#/login" target="_blank" rel="noopener" class="ind-btn ind-btn-outline">Start Free Trial</a>
      </div>
   </div>
</section>
<!-- =================== END INDUSTRY HERO =================== -->

<!-- ===================== THE PROBLEM ===================== -->
<style>
.prob-section {
   background: #f4f3fb;
   padding: 20px 0 80px;
}
.prob-inner {
   max-width: 1120px;
   margin: 0 auto;
   padding: 0 24px;
}
.prob-header {
   text-align: center;
   margin-bottom: 48px;
}
.prob-header .prob-label {
   display: inline-block;
   font-family: Poppins, sans-serif;
   font-size: 12px;
   font-weight: 700;
   letter-spacing: 2px;
   text-transform: uppercase;
   color: #2c409f;
   margin-bottom: 16px;
}
.prob-header h2 {
   font-family: Poppins, sans-serif;
   font-size: 40px;
   font-weight: 800;
   color: #16123a;
   line-height: 1.2;
   margin: 0 0 18px;
   letter-spacing: -0.5px;
}
.prob-header p {
   font-family: Poppins, sans-serif;
   font-size: 17px;
   line-height: 1.6;
   color: #6b7280;
   max-width: 660px;
   margin: 0 auto;
}
.prob-grid {
   display: flex;
   flex-wrap: wrap;
   justify-content: center;
   gap: 24px;
   max-width: 1000px;
   margin: 0 auto;
}
.prob-card {
   flex: 0 1 calc(33.333% - 16px);
   max-width: calc(33.333% - 16px);
   background: #fff;
   border: 1px solid #ebe9f3;
   border-radius: 16px;
   padding: 26px 24px;
   box-shadow: 0 4px 18px rgba(22,18,58,0.04);
   transition: box-shadow 0.3s ease, transform 0.3s ease;
}
.prob-card:hover {
   box-shadow: 0 16px 40px rgba(91,63,214,0.1);
   transform: translateY(-4px);
}
.prob-num {
   width: 34px;
   height: 34px;
   border-radius: 50%;
   background: #d63aae;
   color: #fff;
   font-family: Poppins, sans-serif;
   font-size: 14px;
   font-weight: 700;
   display: flex;
   align-items: center;
   justify-content: center;
   margin-bottom: 22px;
}
.prob-card h4 {
   font-family: Poppins, sans-serif;
   font-size: 18px;
   font-weight: 700;
   color: #16123a;
   margin: 0 0 12px;
   line-height: 1.3;
}
.prob-card p {
   font-family: Poppins, sans-serif;
   font-size: 14.5px;
   line-height: 1.6;
   color: #6b7280;
   margin: 0;
}
/* ---------- Tablet ---------- */
@media (max-width: 992px) {
   .prob-header h2 { font-size: 32px; }
   .prob-grid { max-width: 680px; }
   .prob-card { flex: 0 1 calc(50% - 12px); max-width: calc(50% - 12px); }
}
/* ---------- Phone ---------- */
@media (max-width: 600px) {
   .prob-section { padding: 10px 0 56px; }
   .prob-inner { padding: 0 18px; }
   .prob-header { margin-bottom: 34px; }
   .prob-header h2 { font-size: 26px; }
   .prob-header p { font-size: 15px; }
   .prob-grid { gap: 16px; max-width: 420px; }
   .prob-card { flex: 1 1 100%; max-width: 100%; padding: 22px 20px; }
   .prob-card h4 { font-size: 17px; }
}
@media (max-width: 380px) {
   .prob-header h2 { font-size: 23px; }
}
</style>

<section class="prob-section" aria-label="The Problem">
   <div class="prob-inner">
      <div class="prob-header">
         <span class="prob-label">The Problem</span>
         <h3>Managing Pharma Field Teams Shouldn't Mean Managing Paperwork</h3>
         <p>Pharmaceutical companies rely on medical representatives to communicate product information, maintain professional relationships with healthcare practitioners and gather field insights.</p>
      </div>

      <div class="prob-grid">
         <div class="prob-card">
            <div class="prob-num">1</div>
            <h4>Limited Visibility into Doctor Visits</h4>
            <p>Sales managers need reliable information about planned appointments, completed visits and territory coverage.</p>
         </div>
         <div class="prob-card">
            <div class="prob-num">2</div>
            <h4> Unstructured Territory and Beat Planning</h4>
            <p>Medical representatives often need to coordinate multiple doctor appointments across different locations. </p>
         </div>
         <div class="prob-card">
            <div class="prob-num">3</div>
            <h4>Delayed Doctor Feedback and Field Reports</h4>
            <p>Manual reporting can delay the collection of doctor feedback, product-related observations and market insights.</p>
         </div>
         <div class="prob-card">
            <div class="prob-num">4</div>
            <h4>Repetitive Documentation</h4>
            <p>Recording visit details, maintaining customer information and preparing daily reports manually creates additional administrative work. </p>
         </div>
         <div class="prob-card">
            <div class="prob-num">5</div>
            <h4> Limited Customer and Territory Insights</h4>
            <p>When visit history, feedback and activity records are scattered across different systems, managers may find it difficult to compare territory performance and identify patterns in field engagement.</p>
         </div>
      </div>
   </div>
</section>
<!-- =================== END THE PROBLEM =================== -->

<!-- ===================== LENDERS GAIN (STATS) ===================== -->
<style>
.gain-section {
   background: #2a1f6e;
   padding: 64px 0;
}
.gain-inner {
   max-width: 1060px;
   margin: 0 auto;
   padding: 0 24px;
}
.gain-section h2 {
   font-family: Poppins, sans-serif;
   font-size: 34px;
   font-weight: 800;
   color: #fff;
   text-align: center;
   margin: 0 0 48px;
   line-height: 1.25;
   letter-spacing: -0.5px;
}
.gain-stats {
   display: flex;
   align-items: stretch;
   justify-content: center;
   margin-bottom: 44px;
}
.gain-stat {
   flex: 1 1 0;
   text-align: center;
   padding: 0 24px;
   position: relative;
}
.gain-stat + .gain-stat::before {
   content: "";
   position: absolute;
   left: 0;
   top: 6px;
   bottom: 6px;
   width: 1px;
   background: rgba(255,255,255,0.18);
}
.gain-num {
   font-family: Poppins, sans-serif;
   font-size: 48px;
   font-weight: 800;
   color: #fff;
   line-height: 1;
   margin-bottom: 14px;
   letter-spacing: -1px;
}
.gain-label {
   font-family: Poppins, sans-serif;
   font-size: 14.5px;
   line-height: 1.5;
   color: rgba(255,255,255,0.7);
   max-width: 240px;
   margin: 0 auto;
}
.gain-cta {
   display: flex;
   align-items: center;
   justify-content: space-between;
   gap: 20px;
   background: rgba(255,255,255,0.06);
   border: 1px solid rgba(255,255,255,0.12);
   border-radius: 50px;
   padding: 12px 12px 12px 30px;
   max-width: 620px;
   margin: 0 auto;
}
.gain-cta-text {
   font-family: Poppins, sans-serif;
   font-size: 16px;
   font-weight: 500;
   color: #fff;
}
.gain-cta-btn {
   flex: 0 0 auto;
   font-family: Poppins, sans-serif;
   font-size: 15px;
   font-weight: 600;
   color: #2a1f6e !important;
   background: #fff;
   border-radius: 40px;
   padding: 13px 26px;
   text-decoration: none;
   white-space: nowrap;
   transition: transform .25s ease, background .25s ease;
}
.gain-cta-btn:hover { transform: translateY(-2px); background: #efecff; color: #2a1f6e !important; }

/* ---------- Tablet ---------- */
@media (max-width: 992px) {
   .gain-section h2 { font-size: 28px; }
   .gain-num { font-size: 40px; }
}
/* ---------- Phone ---------- */
@media (max-width: 600px) {
   .gain-section { padding: 46px 0; }
   .gain-inner { padding: 0 18px; }
   .gain-section h2 { font-size: 23px; margin-bottom: 34px; }
   .gain-stats { flex-direction: column; gap: 30px; margin-bottom: 34px; }
   .gain-stat { padding: 0; }
   .gain-stat + .gain-stat::before { display: none; }
   .gain-stat + .gain-stat { border-top: 1px solid rgba(255,255,255,0.15); padding-top: 28px; }
   .gain-num { font-size: 38px; }
   .gain-label { max-width: none; }
   .gain-cta { flex-direction: column; border-radius: 20px; padding: 24px 20px; text-align: center; }
   .gain-cta-btn { width: 100%; text-align: center; }
}
</style>

<section class="gain-section" aria-label=" BUSINESS IMPACT">
   <div class="gain-inner">
      <h2>Give Your Pharma Sales Team Better Field Visibility</h2>

      <div class="gain-stats">
         <div class="gain-stat">
            <div class="gain-num">20-22%</div>
            <div class="gain-label">Improvement in workforce efficiency and performance</div>
         </div>
         <div class="gain-stat">
            <div class="gain-num">16%</div>
            <div class="gain-label">Time saved through data management automation</div>
         </div>
         <div class="gain-stat">
            <div class="gain-num">70-80%</div>
            <div class="gain-label">Revenue share attributed to field teams in selected sectors</div>
         </div>
      </div>

 
   </div>
</section>
<!-- =================== END LENDERS GAIN (STATS) =================== -->

<!-- ===================== WHY LENDERS CHOOSE + HOW IT WORKS ===================== -->
<style>
/* ---------- WHY LENDERS CHOOSE (light) ---------- */
.why-section {
   background: #f4f3fb;
   padding: 70px 0;
}
.why-inner, .how-inner {
   max-width: 1120px;
   margin: 0 auto;
   padding: 0 24px;
}
.why-header, .how-header {
   text-align: center;
   margin-bottom: 44px;
}
.why-label, .how-label {
   display: inline-block;
   font-family: Poppins, sans-serif;
   font-size: 12px;
   font-weight: 700;
   letter-spacing: 2px;
   text-transform: uppercase;
   color: #2c409f;
   margin-bottom: 14px;
}
.why-header h2, .how-header h2 {
   font-family: Poppins, sans-serif;
   font-size: 34px;
   font-weight: 800;
   color: #16123a;
   margin: 0 0 16px;
   line-height: 1.25;
   letter-spacing: -0.5px;
}
.how-header p {
   font-family: Poppins, sans-serif;
   font-size: 17px;
   line-height: 1.6;
   color: #6b7280;
   max-width: 640px;
   margin: 0 auto;
}
.why-grid {
   display: flex;
   flex-wrap: wrap;
   justify-content: center;
   gap: 18px;
}
.why-card {
   flex: 1 1 0;
   min-width: 180px;
   background: #fff;
   border: 1px solid #ebe9f3;
   border-radius: 14px;
   padding: 24px 20px;
   text-align: center;
   box-shadow: 0 4px 16px rgba(22,18,58,0.04);
   transition: box-shadow 0.3s ease, transform 0.3s ease;
}
.why-card:hover { box-shadow: 0 14px 34px rgba(91,63,214,0.1); transform: translateY(-4px); }
.why-num, .how-num {
   width: 30px;
   height: 30px;
   border-radius: 50%;
   background: #2c409f;
   color: #fff;
   font-family: Poppins, sans-serif;
   font-size: 13px;
   font-weight: 700;
   display: flex;
   align-items: center;
   justify-content: center;
   margin: 0 auto 16px;
}
.why-card h4 {
   font-family: Poppins, sans-serif;
   font-size: 15.5px;
   font-weight: 700;
   color: #16123a;
   margin: 0 0 10px;
   line-height: 1.3;
}
.why-card p {
   font-family: Poppins, sans-serif;
   font-size: 13px;
   line-height: 1.55;
   color: #6b7280;
   margin: 0;
}

/* ---------- HOW IT WORKS (white) ---------- */
.how-section {
   background: #fff;
   padding: 70px 0;
}
.how-grid {
   display: flex;
   flex-wrap: wrap;
   gap: 20px;
}
.how-card {
   flex: 1 1 calc(25% - 15px);
   min-width: 200px;
   background: #fff;
   border: 1px solid #ebe9f3;
   border-radius: 14px;
   padding: 24px 22px;
   box-shadow: 0 4px 16px rgba(22,18,58,0.04);
   transition: box-shadow 0.3s ease, transform 0.3s ease;
}
.how-card:hover { box-shadow: 0 14px 34px rgba(91,63,214,0.1); transform: translateY(-4px); }
.how-num { margin: 0 0 18px; }
.how-card h4 {
   font-family: Poppins, sans-serif;
   font-size: 16px;
   font-weight: 700;
   color: #16123a;
   margin: 0 0 10px;
   line-height: 1.3;
}
.how-card p {
   font-family: Poppins, sans-serif;
   font-size: 13.5px;
   line-height: 1.6;
   color: #6b7280;
   margin: 0;
}
/* highlight the final step */
.how-card.how-final {
   background: #f3f0fd;
   border-color: #ddd4f7;
}
.how-card.how-final .how-num { background: #d63aae; }

/* ---------- Tablet ---------- */
@media (max-width: 992px) {
   .why-header h2, .how-header h2 { font-size: 28px; }
   .why-card { flex: 1 1 calc(33.333% - 12px); }
   .how-card { flex: 1 1 calc(50% - 10px); }
}
/* ---------- Phone ---------- */
@media (max-width: 600px) {
   .why-section, .how-section { padding: 48px 0; }
   .why-inner, .how-inner { padding: 0 18px; }
   .why-header, .how-header { margin-bottom: 32px; }
   .why-header h2, .how-header h2 { font-size: 24px; }
   .how-header p { font-size: 15px; }
   .why-grid, .how-grid { gap: 14px; }
   .why-card { flex: 1 1 100%; }
   .how-card { flex: 1 1 100%; }
}
</style>

<section class="why-section" aria-label="Why Lenders Choose Imprint AI">
   <div class="why-inner">
      <div class="why-header">
         <span class="why-label">Why Imprint AI</span>
         <h2>Simplify Pharma Field Force Management with Imprint AI</h2>
      </div>
      <div class="why-grid">
         <div class="why-card">
            <div class="why-num">1</div>
            <h4>Real-Time Field Workforce Visibility</h4>
            <p>Give sales managers a clearer view of medical representatives' field activities through location tracking and centralised reporting. 
</p>
         </div>
         <div class="why-card">
            <div class="why-num">2</div>
            <h4>Structured Doctor Visit Reporting</h4>
            <p>Enable medical representatives to record visit details and capture relevant feedback through digital workflows. </p>
         </div>
         <div class="why-card">
            <div class="why-num">3</div>
            <h4>Smarter Beat and Appointment Planning</h4>
            <p>Organise doctor appointments, daily schedules and field routes through structured planning. 
</p>
         </div>
         <div class="why-card">
            <div class="why-num">4</div>
            <h4>Paperless Field Documentation</h4>
            <p>Allow representatives to record customer information, attach relevant photographs and maintain accessible field records through the mobile application.</p>
         </div>
         <div class="why-card">
            <div class="why-num">5</div>
            <h4>Data-Driven Field Performance Insights</h4>
            <p>Use available reports and analytics to review visit history, territory activity and representative performance.  </p>
         </div>
      </div>
   </div>
</section>

<section class="how-section" aria-label="HOW IMPRINT AI WORKS">
   <div class="how-inner">
      <div class="how-header">
         <span class="how-label">How Imprint AI Works</span>
         <h2>From Doctor Visit Planning to Actionable Field Insights</h2>
         <p>Imprint connects medical representatives with sales managers through mobile applications and a centralised dashboard.  </p>
      </div>
      <div class="how-grid">
         <div class="how-card">
            <div class="how-num">1</div>
            <h4>Organise Medical Representatives and Territories

</h4>
            <p>Set up team members, assigned territories and relevant customer records according to your operational structure.</p>
         </div>
         <div class="how-card">
            <div class="how-num">2</div>
            <h4> Plan Doctor Visits and Daily Beats</h4>
            <p>Create structured schedules for appointments and field activities. </p>
         </div>
         <div class="how-card">
            <div class="how-num">3</div>
            <h4>Record Doctor Visits and Feedback</h4>
            <p>Use digital workflows to record visit details, capture relevant feedback and maintain customer interaction records. </p>
         </div>
         <div class="how-card">
            <div class="how-num">4</div>
            <h4>Upload Digital Records</h4>
            <p>Capture relevant photographs, documents and other supporting information through available mobile application features.  
</p>
         </div>
         <div class="how-card">
            <div class="how-num">5</div>
            <h4>Review Field Activity and Performance
</h4>
            <p>Managers can review available location information, attendance records, completed visits and field reports. </p>
         </div>
         <div class="how-card">
            <div class="how-num">6</div>
            <h4>Coordinate Teams and Communicate Updates</h4>
            <p>Use available meeting, messaging or bulletin functionality to share operational updates.
</p>
         </div>
         <div class="how-card how-final">
            <div class="how-num">7</div>
            <h4>Make Informed Operational Decisions</h4>
            <p>Use field reports, visit history and available analytics to evaluate representative activity and territory coverage.</p>
         </div>
      </div>
   </div>
</section>
<!-- =================== END WHY LENDERS CHOOSE + HOW IT WORKS =================== -->

<!-- ===================== CORE PLATFORM + EVERYTHING ELSE ===================== -->
<style>
/* ---------- CORE PLATFORM (tabs) ---------- */
.core-section {
   background: #f4f3fb;
   padding: 70px 0;
}
.core-inner {
   max-width: 1120px;
   margin: 0 auto;
   padding: 0 24px;
}
.core-header {
   text-align: center;
   margin-bottom: 40px;
}
.core-label {
   display: inline-block;
   font-family: Poppins, sans-serif;
   font-size: 12px;
   font-weight: 700;
   letter-spacing: 2px;
   text-transform: uppercase;
   color: #2c409f;
   margin-bottom: 14px;
}
.core-header h2 {
   font-family: Poppins, sans-serif;
   font-size: 34px;
   font-weight: 800;
   color: #16123a;
   margin: 0 0 16px;
   line-height: 1.25;
   letter-spacing: -0.5px;
}
.core-header p {
   font-family: Poppins, sans-serif;
   font-size: 17px;
   line-height: 1.6;
   color: #6b7280;
   max-width: 620px;
   margin: 0 auto 14px;
}
.core-header a.core-link {
   font-family: Poppins, sans-serif;
   font-size: 15px;
   font-weight: 600;
   color: #2c409f;
   text-decoration: underline;
}
.core-body {
   display: grid;
   grid-template-columns: 320px 1fr;
   gap: 24px;
   align-items: start;
}
.core-tabs {
   display: flex;
   flex-direction: column;
   gap: 10px;
}
button.core-tab {
   display: flex;
   align-items: center;
   gap: 14px;
   width: 100%;
   text-align: left;
   background: #fff;
   border: 1px solid #ebe9f3;
   border-radius: 12px;
   padding: 14px 18px;
   font-family: Poppins, sans-serif;
   font-size: 15px;
   font-weight: 600;
   color: #16123a !important;
   cursor: pointer;
   transition: all .25s ease;
   height: auto;
   line-height: 1.4;
}
button.core-tab:hover {
   background: #f8f6ff;
   border-color: #d9d2f7;
   color: #16123a !important;
}
button.core-tab .core-tab-num {
   width: 26px;
   height: 26px;
   border-radius: 50%;
   background: #f0edfc;
   color: #2c409f !important;
   font-size: 12px;
   font-weight: 700;
   display: flex;
   align-items: center;
   justify-content: center;
   flex: 0 0 auto;
   transition: all .25s ease;
}
button.core-tab.active {
   background: #2c409f;
   border-color: #2c409f;
   color: #fff !important;
   box-shadow: 0 10px 26px rgba(91,63,214,.3);
}
button.core-tab.active:hover {
   background: #4a30bd;
   border-color: #4a30bd;
   color: #fff !important;
}
button.core-tab.active .core-tab-num { background: rgba(255,255,255,0.25); color: #fff !important; }
.core-panel-wrap {
   background: #fff;
   border: 1px solid #ebe9f3;
   border-radius: 16px;
   padding: 30px;
   box-shadow: 0 6px 24px rgba(22,18,58,0.05);
}
.core-panel { display: none; grid-template-columns: 1fr 1fr; gap: 30px; align-items: center; }
.core-panel.active { display: grid; }
.core-shot {
   background: #efeafb;
   border-radius: 12px;
   min-height: 200px;
   display: flex;
   align-items: center;
   justify-content: center;
   color: #9b8fd0;
   font-family: Poppins, sans-serif;
   font-size: 14px;
   text-align: center;
   padding: 20px;
}
.core-panel h3 {
   font-family: Poppins, sans-serif;
   font-size: 22px;
   font-weight: 700;
   color: #16123a;
   margin: 0 0 14px;
}
.core-panel > div > p {
   font-family: Poppins, sans-serif;
   font-size: 14.5px;
   line-height: 1.6;
   color: #6b7280;
   margin: 0 0 18px;
}
.core-feats { list-style: none; margin: 0; padding: 0; }
.core-feats li {
   font-family: Poppins, sans-serif;
   font-size: 14px;
   color: #3d3a55;
   display: flex;
   align-items: flex-start;
   gap: 10px;
   margin-bottom: 12px;
}
.core-feats li i { color: #2c409f; margin-top: 2px; }

/* ---------- EVERYTHING ELSE ---------- */
.else-section {
   background: #fff;
   padding: 70px 0;
}
.else-inner {
   max-width: 1120px;
   margin: 0 auto;
   padding: 0 24px;
}
.else-header { text-align: center; margin-bottom: 44px; }
.else-label {
   display: inline-block;
   font-family: Poppins, sans-serif;
   font-size: 12px;
   font-weight: 700;
   letter-spacing: 2px;
   text-transform: uppercase;
   color: #2c409f;
   margin-bottom: 14px;
}
.else-header h2 {
   font-family: Poppins, sans-serif;
   font-size: 34px;
   font-weight: 800;
   color: #16123a;
   margin: 0;
   line-height: 1.25;
   letter-spacing: -0.5px;
}
.else-grid {
   display: grid;
   grid-template-columns: repeat(3, 1fr);
   gap: 24px;
}
.else-card {
   border: 1px solid #ebe9f3;
   border-radius: 14px;
   padding: 26px 24px;
   background: #fff;
   transition: box-shadow 0.3s ease, transform 0.3s ease;
}
.else-card:hover { box-shadow: 0 14px 34px rgba(91,63,214,0.1); transform: translateY(-4px); }
.else-card h4 {
   font-family: Poppins, sans-serif;
   font-size: 17px;
   font-weight: 700;
   color: #16123a;
   margin: 0 0 10px;
}
.else-card p {
   font-family: Poppins, sans-serif;
   font-size: 14px;
   line-height: 1.6;
   color: #6b7280;
   margin: 0;
}

/* Mobile Slider for Additional Capabilities */
.else-slider-wrapper {
   display: none;
   position: relative;
   overflow: hidden;
   padding: 0 18px;
}
.else-slider {
   display: flex;
   transition: transform 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
   touch-action: pan-y;
}
.else-slider .else-card {
   flex: 0 0 100%;
   margin-right: 0;
   box-shadow: 0 4px 20px rgba(91,63,214,0.08);
   border: 1px solid #e4e1f3;
}
.else-slider-controls {
   display: flex;
   align-items: center;
   justify-content: center;
   gap: 20px;
   margin-top: 28px;
   padding: 0 18px;
}
.else-slider-dots {
   display: flex;
   justify-content: center;
   align-items: center;
   gap: 10px;
}
.else-slider-dot {
   width: 8px;
   height: 8px;
   border-radius: 50%;
   background: #d9d2f7;
   border: none;
   cursor: pointer;
   transition: all 0.3s ease;
   padding: 0;
}
.else-slider-dot.active {
   background: #2c409f;
   width: 24px;
   border-radius: 10px;
}
.else-slider-btn {
   width: 42px;
   height: 42px;
   border-radius: 50%;
   background: #fff;
   border: 2px solid #e4e1f3;
   color: #2c409f;
   font-size: 14px;
   cursor: pointer;
   display: flex;
   align-items: center;
   justify-content: center;
   transition: all 0.3s ease;
   box-shadow: 0 2px 8px rgba(91,63,214,0.1);
}
.else-slider-btn:hover {
   background: #2c409f;
   border-color: #2c409f;
   color: #fff;
   box-shadow: 0 4px 16px rgba(91,63,214,0.25);
   transform: scale(1.05);
}
.else-slider-btn:active {
   transform: scale(0.95);
}
.else-slider-btn:disabled {
   opacity: 0.35;
   cursor: not-allowed;
   background: #f5f5f5;
   border-color: #e0e0e0;
   color: #bbb;
   box-shadow: none;
}
.else-slider-btn:disabled:hover {
   transform: none;
   background: #f5f5f5;
   border-color: #e0e0e0;
   color: #bbb;
}
.else-slider-counter {
   font-family: Poppins, sans-serif;
   font-size: 13px;
   font-weight: 600;
   color: #6b7280;
   min-width: 50px;
   text-align: center;
}
.else-slider-counter span {
   color: #2c409f;
}

/* ---------- Tablet ---------- */
@media (max-width: 992px) {
   .core-header h2, .else-header h2 { font-size: 28px; }
   .core-body { grid-template-columns: 1fr; }
   .core-tabs { flex-direction: row; flex-wrap: wrap; }
   button.core-tab { flex: 1 1 calc(50% - 5px); }
   .else-grid { grid-template-columns: repeat(2, 1fr); }
}
/* ---------- Phone ---------- */
@media (max-width: 600px) {
   .core-section, .else-section { padding: 48px 0; }
   .core-inner, .else-inner { padding: 0 18px; }
   .core-header h2, .else-header h2 { font-size: 24px; }
   .core-header p { font-size: 15px; }
   button.core-tab { flex: 1 1 100%; }
   .core-panel-wrap { padding: 20px; }
   .core-panel.active { grid-template-columns: 1fr; gap: 20px; }
   .core-panel h3 { font-size: 19px; }
   
   /* Hide grid, show slider on mobile */
   .else-grid { display: none; }
   .else-slider-wrapper { display: block; }
   .else-inner { padding: 0; }
   .else-header { padding: 0 18px; }
}
</style>

<section class="core-section" aria-label="The Core Platform">
   <div class="core-inner">
      <div class="core-header">
         <span class="core-label">The Core Platform</span>
         <h2>Pharma Field Force Management Software for Everyday Operations
</h2>
         <p>Imprint brings together field visibility, scheduling, digital documentation and reporting capabilities to support pharmaceutical sales teams. </p>
         <!-- <a href="<?php echo base_url('field-force-management-software'); ?>" class="core-link">See the full field force management software &rarr;</a> -->
      </div>

      <div class="core-body">
         <div class="core-tabs">
            <button type="button" class="core-tab active" onclick="coreSwitch(this,'core-1')"><span class="core-tab-num">01</span> Live Location Tracking and Alerts</button>
            <button type="button" class="core-tab" onclick="coreSwitch(this,'core-2')"><span class="core-tab-num">02</span>Geo-Tagged Visit Verification</button>
            <button type="button" class="core-tab" onclick="coreSwitch(this,'core-3')"><span class="core-tab-num">03</span>Doctor and Customer Visit Management</button>
            <button type="button" class="core-tab" onclick="coreSwitch(this,'core-4')"><span class="core-tab-num">04</span> Beat Planning and Appointment Scheduling</button>
            <button type="button" class="core-tab" onclick="coreSwitch(this,'core-5')"><span class="core-tab-num">05</span> Dynamic Digital Forms</button>
            <button type="button" class="core-tab" onclick="coreSwitch(this,'core-6')"><span class="core-tab-num">06</span> Manager Dashboard and Reports</button>
         </div>

         <div class="core-panel-wrap">
            <div class="core-panel active" id="core-1">
               <div class="core-shot">Screenshot: live map + alerts</div>
               <div>
                  <h3> Live Location Tracking and Alerts</h3>
                  <p>Monitor medical representatives' field movements during authorised working activities and review location information through the dashboard.</p>
                  <ul class="core-feats">
                     <li><i class="fa fa-check"></i>View available field agent locations in real time.</li>
                     <li><i class="fa fa-check"></i> Monitor team movements across assigned territories.</li>
                     <li><i class="fa fa-check"></i>Identify configured alerts for missed tasks or route deviations.</li>
                  </ul>
               </div>
            </div>
            <div class="core-panel" id="core-2">
               <div class="core-shot">Geo-Tagged Visit Verification</div>
               <div>
                  <h3>Geo-Tagged Visit Verification</h3>
                  <p>Maintain location-linked records of doctor visits to support field activity monitoring and reporting</p>
                  <ul class="core-feats">
                     <li><i class="fa fa-check"></i> Record visit timestamps and location information.</li>
                     <li><i class="fa fa-check"></i> Capture relevant photographs and visit details.</li>
                     <li><i class="fa fa-check"></i> Review available visit records through the management dashboard.</li>
                  </ul>
               </div>
            </div>
            <div class="core-panel" id="core-3">
               <div class="core-shot"> Doctor and Customer Visit Management</div>
               <div>
                  <h3>Lead and Case Allocation</h3>
                  <p>Organise field interactions and maintain structured records for customer visits.</p>
                  <ul class="core-feats">
                     <li><i class="fa fa-check"></i> Manage assigned doctor visits and appointments.</li>
                     <li><i class="fa fa-check"></i> Record visit details through digital workflows.</li>
                     <li><i class="fa fa-check"></i> Maintain accessible customer interaction histories..</li>
                  </ul>
               </div>
            </div>
            <div class="core-panel" id="core-4">
               <div class="core-shot">Beat Planning and Appointment Scheduling</div>
               <div>
                  <h3>Beat Planning and Appointment Scheduling</h3>
                  <p>Help medical representatives structure their daily schedules and organise territory coverage.</p>
                  <ul class="core-feats">
                     <li><i class="fa fa-check"></i> Plan daily doctor visits and appointments.</li>
                     <li><i class="fa fa-check"></i> Organise routes across assigned locations.</li>
                     <li><i class="fa fa-check"></i>Track scheduled activities and visit completion.</li>
                  </ul>
               </div>
            </div>
            <div class="core-panel" id="core-5">
               <div class="core-shot">Dynamic Digital Forms</div>
               <div>
                  <h3>Dynamic Digital Forms</h3>
                  <p>Replace paper-based field reports with digital information capture.</p>
                  <ul class="core-feats">
                     <li><i class="fa fa-check"></i> Record doctor feedback and relevant field observations.</li>
                     <li><i class="fa fa-check"></i> Upload supporting documents and photographs.</li>
                     <li><i class="fa fa-check"></i> Standardise field reporting through configurable forms.</li>
                  </ul>
               </div>
            </div>
            <div class="core-panel" id="core-6">
               <div class="core-shot">Manager Dashboard and Reports</div>
               <div>
                  <h3>Manager Dashboard and Reports</h3>
                  <p>Bring field activity and workforce information together for easier operational monitoring.</p>
                  <ul class="core-feats">
                     <li><i class="fa fa-check"></i> Review attendance and representative activity records.</li>
                     <li><i class="fa fa-check"></i> Monitor visit completion and territory coverage.</li>
                     <li><i class="fa fa-check"></i> Access available reports to identify follow-up requirements.</li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

<section class="else-section" aria-label="Everything Else Your Field Team Needs">
   <div class="else-inner">
      <div class="else-header">
         <span class="else-label">ADDITIONAL CAPABILITIES</span>
         <h2>Everything Your Medical Representatives Need to Stay Connected</h2>
      </div>
      
      <!-- Desktop Grid -->
      <div class="else-grid">
         <div class="else-card">
            <h4>Attendance and Timesheets</h4>
            <p>Maintain digital attendance records and review check-in and check-out information. </p>
         </div>
         <div class="else-card">
            <h4>Expense and Conveyance Management</h4>
            <p>Allow representatives to submit travel expenses and supporting bills digitally. </p>
         </div>
         <div class="else-card">
            <h4>Leave Management</h4>
            <p>Digitise leave requests and approval workflows. Help managers coordinate representative availability and maintain visibility into team schedules.</p>
         </div>
         <div class="else-card">
            <h4>Task Management</h4>
            <p>Assign field activities, follow-ups and other operational tasks to medical representatives. </p>
         </div>
         <div class="else-card">
            <h4>Built-in Meetings &amp; Bulletins</h4>
            <p>Use available meeting and bulletin features to share important updates, communicate sales priorities and coordinate distributed field teams.</p>
         </div>
         <div class="else-card">
            <h4>Predictive Insights</h4>
            <p>Use available reporting and analytics capabilities to review field activities, visit history and territory coverage. </p>
         </div>
      </div>
      
      <!-- Mobile Slider -->
      <div class="else-slider-wrapper">
         <div class="else-slider" id="elseSlider">
            <div class="else-card">
               <h4>Attendance and Timesheets</h4>
               <p>Maintain digital attendance records and review check-in and check-out information.</p>
            </div>
            <div class="else-card">
               <h4>Expense and Conveyance Management</h4>
               <p>Allow representatives to submit travel expenses and supporting bills digitally.</p>
            </div>
            <div class="else-card">
               <h4>Leave Management</h4>
               <p>Digitise leave requests and approval workflows. Help managers coordinate representative availability.</p>
            </div>
            <div class="else-card">
               <h4>Task Management</h4>
               <p>Assign field activities, follow-ups and other operational tasks to medical representatives.</p>
            </div>
            <div class="else-card">
               <h4>Built-in Meetings &amp; Bulletins</h4>
               <p>Use available meeting and bulletin features to share important updates and coordinate teams.</p>
            </div>
            <div class="else-card">
               <h4>Predictive Insights</h4>
               <p>Use available reporting and analytics capabilities to review field activities and territory coverage.</p>
            </div>
         </div>
         <div class="else-slider-controls">
            <button type="button" class="else-slider-btn" id="elsePrev" aria-label="Previous">
               <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="15 18 9 12 15 6"></polyline></svg>
            </button>
            <div class="else-slider-dots" id="elseSliderDots"></div>
            <button type="button" class="else-slider-btn" id="elseNext" aria-label="Next">
               <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"></polyline></svg>
            </button>
         </div>
      </div>
   </div>
</section>

<script>
function coreSwitch(btn, panelId) {
   document.querySelectorAll('.core-tab').forEach(function(b){ b.classList.remove('active'); });
   document.querySelectorAll('.core-panel').forEach(function(p){ p.classList.remove('active'); });
   btn.classList.add('active');
   document.getElementById(panelId).classList.add('active');
}

// Mobile Slider for Additional Capabilities
(function() {
   var slider = document.getElementById('elseSlider');
   var dotsContainer = document.getElementById('elseSliderDots');
   var prevBtn = document.getElementById('elsePrev');
   var nextBtn = document.getElementById('elseNext');
   
   if (!slider) return;
   
   var cards = slider.querySelectorAll('.else-card');
   var currentIndex = 0;
   var totalCards = cards.length;
   var startX = 0;
   var currentX = 0;
   var isDragging = false;
   
   // Create dots
   for (var i = 0; i < totalCards; i++) {
      var dot = document.createElement('button');
      dot.className = 'else-slider-dot' + (i === 0 ? ' active' : '');
      dot.setAttribute('aria-label', 'Go to slide ' + (i + 1));
      dot.setAttribute('data-index', i);
      dot.onclick = function() { goToSlide(parseInt(this.getAttribute('data-index'))); };
      dotsContainer.appendChild(dot);
   }
   
   function updateSlider() {
      slider.style.transform = 'translateX(-' + (currentIndex * 100) + '%)';
      
      // Update dots
      var dots = dotsContainer.querySelectorAll('.else-slider-dot');
      dots.forEach(function(dot, idx) {
         dot.classList.toggle('active', idx === currentIndex);
      });
      
      // Update buttons
      prevBtn.disabled = currentIndex === 0;
      nextBtn.disabled = currentIndex === totalCards - 1;
   }
   
   function goToSlide(index) {
      currentIndex = Math.max(0, Math.min(index, totalCards - 1));
      updateSlider();
   }
   
   prevBtn.onclick = function() { goToSlide(currentIndex - 1); };
   nextBtn.onclick = function() { goToSlide(currentIndex + 1); };
   
   // Touch events for swipe
   slider.addEventListener('touchstart', function(e) {
      startX = e.touches[0].clientX;
      isDragging = true;
      slider.style.transition = 'none';
   }, { passive: true });
   
   slider.addEventListener('touchmove', function(e) {
      if (!isDragging) return;
      currentX = e.touches[0].clientX;
      var diff = currentX - startX;
      var offset = -(currentIndex * 100) + (diff / slider.offsetWidth * 100);
      slider.style.transform = 'translateX(' + offset + '%)';
   }, { passive: true });
   
   slider.addEventListener('touchend', function() {
      if (!isDragging) return;
      isDragging = false;
      slider.style.transition = 'transform 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94)';
      var diff = startX - currentX;
      if (Math.abs(diff) > 50) {
         if (diff > 0) goToSlide(currentIndex + 1);
         else goToSlide(currentIndex - 1);
      } else {
         updateSlider();
      }
   });
   
   // Initialize
   updateSlider();
})();
</script>
<!-- =================== END CORE PLATFORM + EVERYTHING ELSE =================== -->

<!-- ===================== EVERY ROLE + FINAL CTA ===================== -->
<style>
/* ---------- EVERY ROLE (light) ---------- */
.role-section {
   background: #f0eefa;
   padding: 70px 0;
}
.role-inner, .fcta-inner {
   max-width: 1120px;
   margin: 0 auto;
   padding: 0 24px;
}
.role-header { text-align: center; margin-bottom: 44px; }
.role-label {
   display: inline-block;
   font-family: Poppins, sans-serif;
   font-size: 12px;
   font-weight: 700;
   letter-spacing: 2px;
   text-transform: uppercase;
   color: #2c409f;
   margin-bottom: 14px;
}
.role-header h2 {
   font-family: Poppins, sans-serif;
   font-size: 34px;
   font-weight: 800;
   color: #16123a;
   margin: 0;
   line-height: 1.25;
   letter-spacing: -0.5px;
}
.role-grid {
   display: grid;
   grid-template-columns: repeat(4, 1fr);
   gap: 22px;
}
.role-card {
   background: #fff;
   border: 1px solid #e4e1f3;
   border-top: 3px solid #2c409f;
   border-radius: 12px;
   padding: 24px 22px;
   transition: box-shadow 0.3s ease, transform 0.3s ease;
}
.role-card:hover { box-shadow: 0 14px 34px rgba(91,63,214,0.12); transform: translateY(-4px); }
.role-card h4 {
   font-family: Poppins, sans-serif;
   font-size: 16px;
   font-weight: 700;
   color: #16123a;
   margin: 0 0 12px;
   line-height: 1.3;
}
.role-card p {
   font-family: Poppins, sans-serif;
   font-size: 13.5px;
   line-height: 1.6;
   color: #6b7280;
   margin: 0;
}

/* ---------- FINAL CTA ---------- */
.fcta-section {
   background: #fff;
   padding: 20px 0 70px;
}
.fcta-band {
   background: #2c409f;
   border-radius: 22px;
   padding: 56px 40px;
   text-align: center;
}
.fcta-band h2 {
   font-family: Poppins, sans-serif;
   font-size: 34px;
   font-weight: 800;
   color: #fff;
   margin: 0 0 16px;
   line-height: 1.2;
   letter-spacing: -0.5px;
}
.fcta-band p {
   font-family: Poppins, sans-serif;
   font-size: 16px;
   line-height: 1.6;
   color: rgba(255,255,255,0.85);
   max-width: 640px;
   margin: 0 auto 30px;
}
.fcta-btns { display: flex; gap: 16px; justify-content: center; flex-wrap: wrap; }
.fcta-btn {
   font-family: Poppins, sans-serif;
   font-size: 15px;
   font-weight: 600;
   padding: 14px 32px;
   border-radius: 40px;
   text-decoration: none;
   transition: transform .25s ease, background .25s ease;
}
.fcta-btn-primary { background: #fff; color: #2c409f !important; }
.fcta-btn-primary:hover { transform: translateY(-2px); background: #efecff; color: #2c409f !important; }
.fcta-btn-outline { background: transparent; color: #fff !important; border: 1.5px solid rgba(255,255,255,0.6); }
.fcta-btn-outline:hover { transform: translateY(-2px); background: rgba(255,255,255,0.12); color: #fff !important; }
.fcta-related {
   text-align: center;
   margin-top: 30px;
   font-family: Poppins, sans-serif;
   font-size: 14px;
   color: #6b7280;
}
.fcta-related a { color: #2c409f; text-decoration: underline; margin: 0 4px; }
.fcta-related .sep { color: #c7c4d6; margin: 0 6px; }

/* ---------- Tablet ---------- */
@media (max-width: 992px) {
   .role-header h2, .fcta-band h2 { font-size: 28px; }
   .role-grid { grid-template-columns: repeat(2, 1fr); }
}
/* ---------- Phone ---------- */
@media (max-width: 600px) {
   .role-section { padding: 48px 0; }
   .role-inner, .fcta-inner { padding: 0 18px; }
   .role-header { margin-bottom: 32px; }
   .role-header h2 { font-size: 24px; }
   .role-grid { grid-template-columns: 1fr; gap: 16px; }
   .fcta-band { padding: 40px 22px; border-radius: 18px; }
   .fcta-band h2 { font-size: 23px; }
   .fcta-band p { font-size: 15px; }
   .fcta-btn { width: 100%; text-align: center; }
   .fcta-related { font-size: 13px; }
}
</style>

<section class="role-section" aria-label="Every Role in Your NBFC">
   <div class="role-inner">
      <div class="role-header">
         <span class="role-label">Who It's For</span>
         <h2>One Platform for Your Entire Pharma Field Force</h2>
      </div>
      <div class="role-grid">
         <div class="role-card">
            <h4>Medical Representatives</h4>
            <p>Organise doctor appointments, manage daily schedules and record field interactions through a mobile application. </p>
         </div>
         <div class="role-card">
            <h4>Pharma Sales Managers</h4>
            <p>Use available workforce information to coordinate representatives and identify operational gaps.</p>
         </div>
         <div class="role-card">
            <h4>Regional Sales Managers</h4>
            <p>Use available reports to understand visit coverage, compare performance and identify areas requiring additional support.</p>
         </div>
         <div class="role-card">
            <h4>Field Operations Teams</h4>
            <p>Coordinate schedules, attendance, expense documentation and field reporting through structured workflows. </p>
         </div>
      </div>
   </div>
</section>

<section class="fcta-section" aria-label="Final Call to Action">
   <div class="fcta-inner">
      <div class="fcta-band">
         <h2>Bring Your Pharma Field Team Together with Imprint AI</h2>
         <p>Book a personalised walkthrough to explore the platform against your team's territory structure, reporting requirements and field management workflows.</p>
         <div class="fcta-btns">
            <a href="<?php echo base_url('contactus#Demo'); ?>" class="fcta-btn fcta-btn-primary">Book a Demo</a>
            <a href="https://imprint.astiinfotech.com/#/login" target="_blank" rel="noopener" class="fcta-btn fcta-btn-outline">Start Free Trial</a>
         </div>
      </div>
      <!-- <div class="fcta-related">
         Related:
         <a href="<?php echo base_url('lending'); ?>">Lending Solutions</a>
         <span class="sep">|</span>
         <a href="<?php echo base_url('collections'); ?>">Collections</a>
         <span class="sep">|</span>
         <a href="<?php echo base_url('field-force-management-software'); ?>">Field Force Management Software</a>
      </div> -->
   </div>
</section>
<!-- =================== END EVERY ROLE + FINAL CTA =================== -->

<!-- ===================== FAQ (same UI as home) ===================== -->
<style>
.faq-section {
   padding: 72px 0 80px;
   background: #f7f6fc;
}
.faq-inner {
   max-width: 860px;
   margin: 0 auto;
   padding: 0 24px;
}
.faq-header {
   text-align: center;
   margin-bottom: 44px;
}
.faq-header .faq-tag {
   display: inline-block;
   font-family: Poppins, sans-serif;
   font-size: 12px;
   font-weight: 600;
   letter-spacing: 1.5px;
   text-transform: uppercase;
   color: #2c409f;
   background: #ece9fb;
   padding: 7px 16px;
   border-radius: 30px;
   margin-bottom: 18px;
}
.faq-header h2 {
   font-family: Poppins, sans-serif;
   font-size: 36px;
   font-weight: 700;
   color: #16123a;
   margin: 0 0 12px;
   line-height: 1.2;
}
.faq-header .faq-sub {
   font-family: Poppins, sans-serif;
   font-size: 16px;
   color: #6b7280;
   margin: 0;
}
.faq-list {
   display: flex;
   flex-direction: column;
   gap: 14px;
}
.faq-item {
   background: #fff;
   border: 1px solid #ebe9f3;
   border-radius: 14px;
   box-shadow: 0 2px 10px rgba(22,18,58,0.03);
   overflow: hidden;
   transition: border-color 0.3s ease, box-shadow 0.3s ease, background 0.3s ease;
}
.faq-item:hover {
   border-color: #d9d2f7;
   box-shadow: 0 10px 28px rgba(91,63,214,0.08);
}
.faq-item.open {
   border-color: #c7bdf4;
   box-shadow: 0 14px 34px rgba(91,63,214,0.12);
}
.faq-q {
   width: 100%;
   background: none;
   border: 0;
   cursor: pointer;
   display: flex;
   align-items: flex-start;
   justify-content: space-between;
   gap: 16px;
   text-align: left;
   padding: 22px 24px;
   font-family: Poppins, sans-serif;
   font-size: 16.5px;
   font-weight: 600;
   color: #16123a !important;
   transition: color 0.25s ease;
   line-height: 1.4;
}
.faq-q > span:not(.faq-icon) { 
   color: #16123a !important;
   flex: 1;
   word-wrap: break-word;
   overflow-wrap: break-word;
}
.faq-item.open .faq-q,
.faq-item.open .faq-q > span:not(.faq-icon) { color: #16123a !important; }
.faq-icon {
   flex: 0 0 auto;
   width: 32px;
   height: 32px;
   min-width: 32px;
   border-radius: 50%;
   background: #f0edfc;
   color: #2c409f !important;
   font-size: 18px;
   line-height: 1;
   display: flex;
   align-items: center;
   justify-content: center;
   transition: transform 0.35s ease, background 0.3s ease, color 0.3s ease;
}
.faq-item.open .faq-icon {
   transform: rotate(135deg);
   background: #2c409f;
   color: #fff !important;
}
.faq-a {
   max-height: 0;
   overflow: hidden;
   transition: max-height 0.4s ease;
}
.faq-a-inner {
   padding: 0 24px 24px;
   font-family: Poppins, sans-serif;
   font-size: 15px;
   line-height: 1.7;
   color: #5f6377;
   border-top: 1px solid #f0eef7;
   margin-top: 2px;
   padding-top: 18px;
}

/* Tablet */
@media (max-width: 768px) {
   .faq-section { padding: 56px 0 60px; }
   .faq-inner { padding: 0 20px; }
   .faq-header { margin-bottom: 36px; }
   .faq-header h2 { font-size: 28px; }
   .faq-q { 
      font-size: 15.5px; 
      padding: 20px 22px; 
      gap: 14px;
   }
   .faq-icon { width: 30px; height: 30px; min-width: 30px; font-size: 16px; }
   .faq-a-inner { font-size: 14.5px; padding: 16px 22px 22px; }
}

/* Phone */
@media (max-width: 600px) {
   .faq-section { padding: 48px 0 52px; }
   .faq-inner { padding: 0 16px; }
   .faq-header { margin-bottom: 30px; }
   .faq-header h2 { font-size: 24px; line-height: 1.25; }
   .faq-header .faq-sub { font-size: 14px; }
   .faq-header .faq-tag { font-size: 11px; padding: 6px 14px; }
   .faq-list { gap: 12px; }
   .faq-item { border-radius: 12px; }
   .faq-q { 
      font-size: 14.5px; 
      padding: 16px 16px; 
      gap: 12px;
      line-height: 1.45;
   }
   .faq-q > span:not(.faq-icon) {
      font-size: 14.5px;
   }
   .faq-icon { 
      width: 28px; 
      height: 28px; 
      min-width: 28px; 
      font-size: 15px; 
      margin-top: 2px;
   }
   .faq-a-inner { 
      font-size: 13.5px; 
      padding: 14px 16px 18px; 
      line-height: 1.65;
   }
}

/* Small Phone */
@media (max-width: 380px) {
   .faq-header h2 { font-size: 21px; }
   .faq-q { 
      font-size: 13.5px; 
      padding: 14px 14px; 
      gap: 10px;
   }
   .faq-q > span:not(.faq-icon) {
      font-size: 13.5px;
   }
   .faq-icon { 
      width: 26px; 
      height: 26px; 
      min-width: 26px; 
      font-size: 14px; 
   }
   .faq-a-inner { 
      font-size: 13px; 
      padding: 12px 14px 16px; 
   }
}
</style>

<section class="faq-section" aria-label="Frequently Asked Questions">
   <div class="faq-inner">
      <div class="faq-header">
         <span class="faq-tag">FAQs</span>
         <h2>Frequently Asked Questions</h2>
      </div>

      <div class="faq-list">
         <div class="faq-item">
            <button type="button" class="faq-q" onclick="faqToggle(this)">
               <span>What is pharma field force management software?</span>
               <span class="faq-icon">+</span>
            </button>
            <div class="faq-a">
               <div class="faq-a-inner">Pharma field force management software helps pharmaceutical companies organise medical representatives' schedules, track field activities, manage doctor visits and maintain digital reports.</div>
            </div>
         </div>
         <div class="faq-item">
            <button type="button" class="faq-q" onclick="faqToggle(this)">
               <span>How does Imprint AI help pharmaceutical companies manage medical representatives?</span>
               <span class="faq-icon">+</span>
            </button>
            <div class="faq-a">
               <div class="faq-a-inner">Imprint provides field workforce management capabilities such as location tracking, attendance, beat planning, digital forms and reporting. These tools help sales managers review field activities and enable representatives to record relevant visit information through digital workflows.</div>
            </div>
         </div>
         <div class="faq-item">
            <button type="button" class="faq-q" onclick="faqToggle(this)">
               <span>Can Imprint AI help plan doctor visits and routes?</span>
               <span class="faq-icon">+</span>
            </button>
            <div class="faq-a">
               <div class="faq-a-inner">Imprint supports beat planning and appointment scheduling for field teams. Pharmaceutical companies can use these capabilities to organise representative schedules, coordinate visits across territories and review visit completion.</div>
            </div>
         </div>
         <div class="faq-item">
            <button type="button" class="faq-q" onclick="faqToggle(this)">
               <span>Can medical representatives record doctor feedback digitally?</span>
               <span class="faq-icon">+</span>
            </button>
            <div class="faq-a">
               <div class="faq-a-inner">Imprint's dynamic digital forms can support structured information capture. Teams can configure relevant forms for visit records and field observations, subject to the platform's available functionality and implementation requirements.</div>
            </div>
         </div>
         <div class="faq-item">
            <button type="button" class="faq-q" onclick="faqToggle(this)">
               <span>How can sales managers monitor field representative performance?</span>
               <span class="faq-icon">+</span>
            </button>
            <div class="faq-a">
               <div class="faq-a-inner">Managers can review available location information, attendance, visit records and field activity reports through the management dashboard. These records help them assess territory coverage and identify activities that may require follow-up.</div>
            </div>
         </div>
         <div class="faq-item">
            <button type="button" class="faq-q" onclick="faqToggle(this)">
               <span>Does Imprint AI support paperless field reporting?</span>
               <span class="faq-icon">+</span>
            </button>
            <div class="faq-a">
               <div class="faq-a-inner">Imprint supports digital forms and document handling, helping representatives record field information and upload relevant supporting materials. This can reduce dependence on paper-based documentation and repetitive manual data entry.</div>
            </div>
         </div>
         <div class="faq-item">
            <button type="button" class="faq-q" onclick="faqToggle(this)">
               <span>Can Imprint AI help manage field expenses?</span>
               <span class="faq-icon">+</span>
            </button>
            <div class="faq-a">
               <div class="faq-a-inner">Imprint includes expense management capabilities that can support digital expense submissions and reimbursement workflows. Confirm the available travel calculation, receipt capture and approval features with the Imprint team.</div>
            </div>
         </div>
         <div class="faq-item">
            <button type="button" class="faq-q" onclick="faqToggle(this)">
               <span>Can pharma sales managers communicate with medical representatives through Imprint?</span>
               <span class="faq-icon">+</span>
            </button>
            <div class="faq-a">
               <div class="faq-a-inner">Imprint's supplied product information includes digital meetings and bulletin functionality. These tools can support team coordination and the sharing of operational updates, depending on the features enabled for your organisation.</div>
            </div>
         </div>
      </div>
   </div>
</section>

<script>
function faqToggle(btn) {
   var item = btn.parentElement;
   var answer = btn.nextElementSibling;
   var isOpen = item.classList.contains('open');
   document.querySelectorAll('.faq-item').forEach(function(it){
      it.classList.remove('open');
      var a = it.querySelector('.faq-a');
      if (a) { a.style.maxHeight = null; }
      var ic = it.querySelector('.faq-icon');
      if (ic) { ic.textContent = '+'; }
   });
   if (!isOpen) {
      item.classList.add('open');
      answer.style.maxHeight = answer.scrollHeight + 'px';
      btn.querySelector('.faq-icon').textContent = '+';
   }
}
</script>
<!-- =================== END FAQ =================== -->
        <style>
                                    .d-flex{
display: flex;
   }
.icon-set-wrap .infobox_icon {
    color: #ffffff;
}
.icon-set-wrap .infobox_icon_container {
    background: -webkit-radial-gradient(100% 110%, circle farthest-corner, #d75dbc 10%, #6a4bc4 50%);
    background: radial-gradient(circle farthest-corner at 100% 110%, #d75dbc 10%, #6a4bc4 50%);
    border-radius: 50%;
}
.wpb-js-composer .wgl-container .vc_row .vc_toggle {
    margin-bottom: 20px;
    transition: 0.4s ease-in-out;
}
.vc_toggle {
    display: block;
    margin: 0 0 21.73913043px 0;
    padding: 0;
    font-size: 1em;
}
.wpb-js-composer .wgl-container .vc_row .vc_toggle.vc_toggle_active .vc_toggle_title, .wpb-js-composer .wgl-container .vc_row .vc_toggle:hover .vc_toggle_title {
    color: #ffffff;
}
.wpb-js-composer .wgl-container .vc_row .vc_toggle .vc_toggle_title {
    position: relative;
    z-index: 0;
    padding-top: 14px;
    padding-right: 66px;
    padding-bottom: 14px;
    padding-left: 30px;
    border: 1px solid #e7e8e8;
    border-radius: 25px;
    font-size: 16px;
    line-height: 1.4;
    font-weight: 500;
    background-color: #f3f3f3;
    transition: inherit;
}
.vc_toggle_title {
    cursor: pointer;
    display: block;
    margin: 0;
    padding: 0;
    position: relative;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    font-weight: 400;
}

                                 </style>
                                
 
</div>
</div>
</div>
</div>
<!-- <div class="softlab_module_spacing"><div class="spacing_size spacing_size-initial" style="height:87px;"></div></div>   -->
</div></div></div></div>
</div>
</div>
</div>
        
</main>

<?php  $this->load->view('footer/footer'); ?>