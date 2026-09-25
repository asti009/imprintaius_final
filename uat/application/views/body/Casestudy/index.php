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
 /* School Safety Tab Container */
.school-safety-tab {
    padding: 15px;
}

/* Existing Solution Card Styling */
.solution-card {
    border: 1px solid #e5e5e5;
    border-radius: 9px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    padding: 10px;
    background-color: #fff;
    margin-bottom: 20px;
}
.solution-image_wrapper img {
    width: 100%;
    border-radius: 9px;
}
.solution-label {
    background-color: #00c4b4; /* Green accent */
    color: #fff;
    padding: 5px 10px;
    border-radius: 5px;
    font-size: 12px;
    display: inline-block;
    margin-bottom: 10px;
}
.solution-title a {
    font-size: 16px;
    font-weight: 600;
    color: #333;
    text-decoration: none;
}
.solution-excerpt {
    font-size: 12px;
    color: #666;
    margin: 10px 0;
}
.solution-card .read-more a {
    background-color: #ff0000; /* Red button */
    color: #fff;
    padding: 8px 15px;
    border-radius: 5px;
    text-decoration: none;
    font-size: 12px;
    transition: background-color 0.3s ease;
}
.solution-card .read-more a:hover {
    background-color: #cc0000; /* Darker red on hover */
}

/* Latest Blogs Section */
.latest-blogs-section {
    /* Gradient Background with Green Accent */
    background: linear-gradient(135deg, #f9f9f9 0%, #e6faf5 100%); /* White to light green */
    border: 1px solid #b2f5ea; /* Light green border */
    box-shadow: 0 4px 12px rgba(0, 196, 180, 0.1); /* Soft green shadow */
    padding: 15px;
    border-radius: 12px;
}

/* Section Title */
.section-title_inner {
    color: #00c4b4; /* Green accent */
    border-bottom: 2px solid #00c4b4;
    padding-bottom: 5px;
    font-size: 16px;
    font-weight: 600;
    text-transform: uppercase;
}

/* Blog Item */
.latest-blogs-list li {
    border: 1px solid #e5e5e5;
    border-radius: 9px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    margin-bottom: 15px;
    padding: 10px;
    background-color: #fff;
}

/* Blog Content Layout - Stack Image on Top */
.blog-content {
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
}

/* Image Styling - Full Width, 9px Border-Radius */
.blog-image_wrapper {
    width: 100%;
    margin-bottom: 10px;
}
.blog-image_wrapper img {
    width: 100%;
    height: auto;
    border-radius: 9px;
    transition: transform 0.3s ease, filter 0.3s ease;
}
.blog-image_wrapper img:hover {
    transform: scale(1.03);
    filter: brightness(1.1);
}

/* Content Wrapper */
.blog-content_wrapper {
    width: 100%;
}

/* Blog Title - Smaller Font, Max 2 Lines */
.blog-title a {
    font-size: 14px;
    font-weight: 600;
    color: #333;
    transition: color 0.3s ease;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
    text-overflow: ellipsis;
    text-decoration: none;
}
.blog-title a:hover {
    color: #00c4b4; /* Green accent on hover */
}

/* Date - Smaller Font */
.meta-wrapper span {
    font-size: 10px;
    color: #888;
}

/* Read More Link */
.latest-blogs-list .read-more a {
    color: #fff;
    background-color: #ff0000; /* Red button to match existing style */
    font-size: 11px;
    padding: 5px 10px;
    border-radius: 5px;
    text-decoration: none;
    transition: background-color 0.3s ease;
}
.latest-blogs-list .read-more a:hover {
    background-color: #cc0000; /* Darker red on hover */
}

/* No Blogs Message */
.no-blogs span {
    color: #666;
    font-style: italic;
    font-size: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
}
.no-blogs span:before {
    content: "\f05a";
    font-family: "FontAwesome";
    margin-right: 8px;
    color: #00c4b4; /* Green accent */
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
                                 <?php if (empty($case_studies)): ?>
                                    <p>No case studies found.</p>
                                 <?php else: ?>
                                    <?php foreach ($case_studies as $study): ?>
                                       <div class="wgl_col-12 item">
                                          <div class="blog-post format-standard-image">
                                             <div class="blog-post_wrapper">
                                                <div class="blog-post_media">
                                                   <div class="blog-post_media_part">
                                                      <a href="<?php echo $study['link']; ?>" class="blog-post_feature-link">
                                                         <img src='<?php echo $study['image']; ?>'
                                                              alt='<?php echo htmlspecialchars($study['title']); ?>' />
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
                                                            <?php echo htmlspecialchars($study['category']); ?></span>
                                                      </span>
                                                   </div>
                                                   <h3 class="blog-post_title" style="margin-bottom: 10px">
                                                      <a href="<?php echo $study['link']; ?>"><?php echo htmlspecialchars($study['title']); ?></a>
                                                   </h3>
                                                   <div class="blog-post_text">
                                                      <p><?php echo htmlspecialchars($study['description']); ?></p>
                                                   </div>
                                                   <div class="clear"></div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    <?php endforeach; ?>
                                 <?php endif; ?>
                              </div>
                           </div>

                           <?php if ($total_pages > 1): ?>
                              <div class="pagination">
                                 <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                                    <a href="<?php echo base_url('casestudy?page=' . $i); ?>"
                                       class="<?php echo ($i == $current_page) ? 'active' : ''; ?>"><?php echo $i; ?></a>
                                 <?php endfor; ?>
                              </div>
                           <?php endif; ?>
                        </section>
                     </div>
                  </div>
               </div>
            </div>
         </div>
     
<div class="school-safety-tab">
    <!-- Existing School Safety Solution Content -->
    <div class="solution-card">
        <div class="solution-image_wrapper">
            <img src="path-to-school-bus-image.jpg" alt="School Bus GPS Tracking">
        </div>
        <div class="solution-content_wrapper">
            <div class="solution-label">School Bus GPS Tracking</div>
            <div class="solution-title">
                <a href="path-to-article">10 Questions to Gain a Better Understanding of a School Bus Tracking App</a>
            </div>
            <div class="solution-excerpt">
                Did you know that the longest school bus route in the world covers over 230 miles in Alaska? While most...
            </div>
            <div class="read-more">
                <a href="path-to-article">Read More</a>
            </div>
        </div>
    </div>

    <!-- New Latest Blogs Section -->
    <div class="latest-blogs-section">
        <div class="section-title"><span class="section-title_inner">Latest Blogs</span></div>
        <ul class="latest-blogs-list">
            <?php if (empty($latest_blogs)): ?>
                <li class="no-blogs">
                    <span>No blogs available. Check back soon!</span>
                </li>
            <?php else: ?>
                <?php foreach ($latest_blogs as $blog): ?>
                    <li class="clearfix with_image">
                        <div class="blog-content">
                            <div class="blog-image_wrapper">
                                <a href="<?php echo $blog['link']; ?>" target="_blank">
                                    <img src="<?php echo $blog['image']; ?>" alt="<?php echo htmlspecialchars($blog['title']); ?>">
                                </a>
                            </div>
                            <div class="blog-content_wrapper">
                                <div class="blog-title">
                                    <a href="<?php echo $blog['link']; ?>" target="_blank"><?php echo htmlspecialchars($blog['title']); ?></a>
                                </div>
                                <div class="meta-wrapper">
                                    <span><?php echo $blog['date']; ?></span>
                                </div>
                                <div class="read-more">
                                    <a href="<?php echo $blog['link']; ?>" target="_blank">Read More</a>
                                </div>
                            </div>
                        </div>
                    </li>
                <?php endforeach; ?>
            <?php endif; ?>
        </ul>
    </div>
</div>
               

</main>

<?php $this->load->view('footer/footer'); ?>