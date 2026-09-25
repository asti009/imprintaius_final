<?php 
$this->load->helper('url');
$this->load->view('header/header'); ?>

<div class='page-header page-header_align_left' style="background-image:url(assets/images/page_title_bg.png); background-size:cover; background-repeat:no-repeat; background-attachment:scroll; background-position:center bottom; height:auto; margin-bottom:0px; padding-top:90px; padding-bottom:50px;">
    <div class='page-header_wrapper'>
        <div class='wgl-container'>
            <div class='page-header_content'>
                <h1 class='page-header_title' style="color:#161616; font-size:42px; line-height:72px;"><?php echo esc_html($blog['title']); ?></h1>
                <div class='page-header_breadcrumbs' style="color:#8b9baf; font-size:16px; line-height:24px;margin-top: 0;">
                    <div class="breadcrumbs">
                        <a href="<?php echo esc_url(base_url('at')) ?>" class="home">Home</a> 
                        <span class="divider"></span> 
                        <a href="<?php echo esc_url(base_url('at/blog')) ?>" class="home">Blogs</a> 
                        <span class="divider"></span> 
                        <span class="current"><?php echo esc_html($blog['title']); ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<main id="main">
    <div class="wgl-container">
        <div class="row">
            <div id="main-content" class="wgl_col-12">
                <div class="vc_row wpb_row vc_row-fluid">
                    <div class="wpb_column vc_column_container vc_col-sm-12">
                        <div class="vc_column-inner">
                            <div class="wpb_wrapper">
                                <section class="wgl_cpt_section">
                                    <div class="blog-post">
                                        <div class="blog-post_wrapper">
                                            <div class="blog-post_media">
                                                <div class="blog-post_media_part">
                                                    <img src="<?php echo esc_url($blog['image']); ?>" alt="<?php echo esc_attr($blog['title']); ?>">
                                                </div>
                                                <div class="blog-post_meta_info">
                                                    <div class="meta-wrapper">
                                                        <span class="date_post"><?php echo esc_html($blog['date']); ?></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="blog-post_content">
                                                <div class="meta-wrapper">
                                                    <span class="blog-post_meta-categories">
                                                        <span style="color:#54e0c4;">Category / </span>
                                                        <span style="color:#54e0c4;"><?php echo esc_html($blog['category']); ?></span>
                                                    </span>
                                                </div>
                                                <h2 class="blog-post_title"><?php echo esc_html($blog['title']); ?></h2>
                                                <div class="blog-post_text">
                                                    <?php echo $blog['content']; // Content is assumed to be safe HTML from a trusted source ?>
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