<?php 
$this->load->helper('url');
$this->load->view('header/header'); ?>

<div class='page-header page-header_align_left' style="background-image:url(assets/images/page_title_bg.png); background-size:cover; background-repeat:no-repeat; background-attachment:scroll; background-position:center bottom; height:auto; margin-bottom:0px; padding-top:90px; padding-bottom:50px;">
    <div class='page-header_wrapper'>
        <div class='wgl-container'>
            <div class='page-header_content'>
                <h1 class='page-header_title' style="color:#161616; font-size:42px; line-height:72px;">Blogs</h1>
                <div class='page-header_breadcrumbs' style="color:#8b9baf; font-size:16px; line-height:24px;margin-top: 0;">
                    <div class="breadcrumbs">
                        <a href="<?php echo base_url('')?>" class="home">Home</a> 
                        <span class="divider"></span> 
                        <span class="current">Blogs</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<main id="main">
    <div class="wgl-container">
        <div class="row ">
            <div id="main-content" class="wgl_col-12">
                <div class="vc_row wpb_row vc_row-fluid">
                    <div class="wpb_column vc_column_container vc_col-sm-12">
                        <div class="vc_column-inner ">
                            <div class="wpb_wrapper">
                                <section class="wgl_cpt_section">
                                    <div class="blog-posts">
                                        <div class="container-grid row blog_columns-3 grid blog-style-standard">
                                            <?php foreach ($blogs as $blog): ?>
                                                <div class="wgl_col-4 item">
                                                    <div class="blog-post format-standard-image">
                                                        <div class="blog-post_wrapper">
                                                            <div class="blog-post_media">
                                                                <div class="blog-post_media_part">
                                                                    <a href="<?php echo base_url($blog['slug'])?>" class="blog-post_feature-link">
                                                                        <img src="<?php echo base_url('assets/images/blog-images/' . $blog['image']);?>" alt="<?php echo $blog['title'];?>">
                                                                    </a>
                                                                </div>
                                                                <div class="blog-post_meta_info">
                                                                    <div class="meta-wrapper">
                                                                        <span class="date_post"><?php echo $blog['date']; ?></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="blog-post_content">
                                                                <div class="meta-wrapper">
                                                                    <span class="blog-post_meta-categories">
                                                                        <span style="color:#54e0c4;">Category</span>
                                                                        <span style="color:#54e0c4;"><?php echo $blog['category']; ?></span>
                                                                    </span>
                                                                </div>
                                                                <h4 class="blog-post_title" style="margin-bottom: 15px">
                                                                    <a href="<?php echo base_url($blog['slug']);?>"><?php echo $blog['title']; ?></a>
                                                                </h4>
                                                                <div class="clear"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endforeach; ?>
<!-- pagination -->
                                            <div class="pagination" style="width: 100%; display: flex; justify-content: center;"> 
                                                <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                                                    <a href="<?php echo base_url('blog/' . $i); ?>" <?php if ($i == $currentPage): ?>class="active"<?php endif; ?>><?php echo $i; ?></a>
                                                <?php endfor; ?>
                                            </div>

                                            <style>
                                            .pagination a.active {
                                                background-color: #191930;
                                                color: #ffffff !important;
                                                border-radius: 25px;
                                            }
                                            .pagination a {
                                                padding: 5px 15px;
                                                color: #161616 !important;
                                            }
                                            </style>
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                </section>
                                <div class="softlab_module_spacing">
                                    <div class="spacing_size spacing_size-initial" style="height:60px;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php $this->load->view('footer/footer'); ?>
