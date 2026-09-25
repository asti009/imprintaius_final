<?php $this->load->view('header/header'); ?>

<div class='page-header page-header_align_left'
   style="background-image:url(assets/images/page_title_bg.png); background-size:cover; background-repeat:no-repeat; background-attachment:scroll; background-position:center bottom; height:auto; margin-bottom:0px; padding-top:90px; padding-bottom:50px;">
   <div class='page-header_wrapper'>
      <div class='wgl-container'>
         <div class='page-header_content'>
            <h1 class='page-header_title' style="color:#161616; font-size:42px; line-height:72px;">
               <?php echo htmlspecialchars($case_study['title']); ?>
            </h1>
            <div class='page-header_breadcrumbs' style="color:#8b9baf; font-size:16px; line-height:24px;margin-top: 0;">
               <div class="breadcrumbs">
                  <a href="<?php echo base_url('') ?>" class="home">Home</a>
                  <span class="divider"></span>
                  <a href="<?php echo base_url('casestudy') ?>">Case Studies</a>
                  <span class="divider"></span>
                  <span class="current"><?php echo htmlspecialchars($case_study['title']); ?></span>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

<main id="main">
   <div class="wgl-container">
      <div class="row">
         <div id='main-content' class="wgl_col-12">
            <div class="vc_row wpb_row vc_row-fluid">
               <div class="wpb_column vc_column_container vc_col-sm-12">
                  <div class="vc_column-inner">
                     <div class="wpb_wrapper">
                        <section class="wgl_cpt_section">
                           <div class="blog-post format-standard-image">
                              <div class="blog-post_wrapper">
                                 <?php if (!empty($case_study['image'])): ?>
                                    <div class="blog-post_media">
                                       <div class="blog-post_media_part">
                                          <img src="<?php echo $case_study['image']; ?>"
                                               alt="<?php echo htmlspecialchars($case_study['title']); ?>" />
                                       </div>
                                    </div>
                                 <?php endif; ?>
                                 <div class="blog-post_content">
                                    <div class="meta-wrapper">
                                       <span class="date_post"><?php echo $case_study['date']; ?></span>
                                       <span class="blog-post_meta-categories">
                                          <span style="color:#54e0c4;">CATEGORY /
                                             <?php echo htmlspecialchars($case_study['category']); ?></span>
                                       </span>
                                    </div>
                                    <div class="blog-post_text">
                                       <p><?php echo htmlspecialchars($case_study['content']); ?></p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </section>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</main>

<?php $this->load->view('footer/footer'); ?>