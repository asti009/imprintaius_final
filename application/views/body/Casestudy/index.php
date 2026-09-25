<?php $this->load->helper('url'); ?>
<?php $this->load->view('header/header'); ?>

<style>
   @media only screen and (max-width: 600px) {
      .spacing-mobile {
         height: 160px;
      }
   }

   @media only screen and (min-width: 601px) {
      .spacing-mobile {
         height: 80px;
      }
   }

   .pagination {
      display: flex;
      justify-content: center;
      margin-top: 20px;
   }

   .pagination a {
      margin: 0 5px;
      padding: 0;
      text-decoration: none;
      color: #313131;
      border: 1px solid #ccc;
      border-radius: 50%;
      width: 40px;
      height: 40px;
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
   }

   .pagination a.active {
      background-color: #313131;
      color: white;
   }
</style>

<div class='page-header page-header_align_left'
   style="background-image:url(assets/images/page_title_bg.png); background-size:cover; background-repeat:no-repeat; background-attachment:scroll; background-position:center bottom; height:auto; margin-bottom:0px; padding-top:90px; padding-bottom:50px;">
   <div class='page-header_wrapper'>
      <div class='wgl-container'>
         <div class='page-header_content'>
            <h1 class='page-header_title' style="color:#161616; font-size:42px; line-height:72px;">Case Studies</h1>
            <div class='page-header_breadcrumbs' style="color:#8b9baf; font-size:16px; line-height:24px;margin-top: 0;">
               <div class="breadcrumbs">
                  <a href="<?php echo base_url('') ?>" class="home">Home</a>
                  <span class="divider"></span>
                  <span class="current">Case Studies</span>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

<main id="main">
   <div class="wgl-container">
      <div class="row sidebar_right">
         <div id='main-content' class="wgl_col-9">
            <div class="vc_row wpb_row vc_row-fluid">
               <div class="wpb_column vc_column_container vc_col-sm-12">
                  <div class="vc_column-inner">
                     <div class="wpb_wrapper">
                        <section class="wgl_cpt_section">
                           <div class="blog-posts">
                              <div class="container-grid row blog_columns-1 grid blog-style-standard">

                                 <?php
                                 $items_per_page = 5; 
                                 $total_studies = count($case_studies); 
                                 $total_pages = ceil($total_studies / $items_per_page); 
                                 $current_page = isset($_GET['page']) ? (int) $_GET['page'] : 1; 
                                 $current_page = max(1, min($total_pages, $current_page)); 
                                 $start_index = ($current_page - 1) * $items_per_page; 
                                 $studies_to_display = array_slice($case_studies, $start_index, $items_per_page); 
                                 ?>

                                 <?php foreach ($studies_to_display as $study): ?>
                                    <div class="wgl_col-12 item">
                                       <div class="blog-post format-standard-image">
                                          <div class="blog-post_wrapper">
                                             <div class="blog-post_media">
                                                <div class="blog-post_media_part">
                                                   <a href="<?php echo $study['link']; ?>" class="blog-post_feature-link">
                                                      <img src='<?php echo $study['image']; ?>'
                                                         alt='<?php echo $study['title']; ?>' />
                                                   </a>
                                                </div>
                                                <div class="blog-post_meta_info">
                                                   <div class="meta-wrapper">
                                                      <span class="date_post"><?php echo $study['date']; ?></span>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="blog-post_content">
                                                <div class="meta-wrapper">
                                                   <span class="blog-post_meta-categories">
                                                      <span style="color:#54e0c4;">CATEGORY /
                                                         <?php echo $study['category']; ?></span>
                                                   </span>
                                                </div>
                                                <h3 class="blog-post_title" style="margin-bottom: 10px">
                                                   <a href="<?php echo $study['link']; ?>"><?php echo $study['title']; ?></a>
                                                </h3>
                                                <div class="blog-post_text">
                                                   <p><?php echo $study['description']; ?></p>
                                                </div>
                                                <div class="clear"></div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 <?php endforeach; ?>
                              </div>
                           </div>

                           <div class="pagination">
                              <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                                 <a href="?page=<?php echo $i; ?>"
                                    class="<?php echo ($i == $current_page) ? 'active' : ''; ?>"><?php echo $i; ?></a>
                              <?php endfor; ?>
                           </div>
                        </section>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="sidebar-container sticky-sidebar wgl_col-3">
            <aside class='sidebar'>
               <div id="wgl-posts-3" class="widget softlab_widget widget_wgl_posts">
                  <div class="widget-title"><span class="widget-title_wrapper"><span class="widget-title_inner">Recent
                           Posts</span></span></div>
                  <ul class="recent-posts-widget recent-widget-521591598">
                     <?php for ($i = 0; $i < min(3, count($case_studies)); $i++): ?>
                        <li class="clearfix with_image">
                           <div class="recent-posts-content">
                              <div class="recent-posts-image_wrapper">
                                 <a href="<?php echo $case_studies[$i]['link']; ?>" target="_blank">
                                    <img src="<?php echo $case_studies[$i]['image']; ?>"
                                       alt="<?php echo $case_studies[$i]['title']; ?>">
                                 </a>
                              </div>
                              <div class="recent-posts-content_wrapper">
                                 <div class="post_title">
                                    <a href="<?php echo $case_studies[$i]['link']; ?>"
                                       target="_blank"><?php echo $case_studies[$i]['title']; ?></a>
                                 </div>
                                 <div class="meta-wrapper">
                                    <span><?php echo $case_studies[$i]['date']; ?></span>
                                 </div>
                              </div>
                           </div>
                        </li>
                     <?php endfor; ?>
                  </ul>
               </div>
            </aside>
         </div>
      </div>
   </div>
</main>

<?php $this->load->view('footer/footer'); ?>
