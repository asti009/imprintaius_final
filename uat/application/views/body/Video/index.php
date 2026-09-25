<?php
$this->load->helper('url');
$this->load->view('header/header');
?>

<div class='page-header page-header_align_left'
   style="background-image:url(assets/images/page_title_bg.png); background-size:cover; background-repeat:no-repeat; background-attachment:scroll; background-position:center bottom; height:auto; margin-bottom:0px; padding-top:90px; padding-bottom:50px;">
   <div class='page-header_wrapper'>
      <div class='wgl-container'>
         <div class='page-header_content'>
            <h1 class='page-header_title' style="color:#161616; font-size:42px; line-height:72px;">Our Videos</h1>
            <div class='page-header_breadcrumbs' style="color:#8b9baf; font-size:16px; line-height:24px;margin-top: 0;">
               <div class="breadcrumbs"><a href="<?php echo base_url('') ?>" class="home">Home</a> <span
                     class="divider"></span> <span class="current">Our Videos</span></div>
            </div>
         </div>
      </div>
   </div>
</div>

<main id="main">  
   <div class="wgl-container">
      <div class="video-grid">
         <?php
         if (count($videos_to_display) > 0) {
            foreach ($videos_to_display as $video) { ?>
               <div class="video-item">
                  <iframe width="350" height="287" src="<?php echo $video['link']; ?>" frameborder="0"
                     allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                     allowfullscreen></iframe>
                  <h3><?php echo $video['title']; ?></h3>
               </div>
            <?php }
         } else {
            echo "<p>No videos available.</p>";
         }
         ?>
      </div>

      <?php if ($total_pages > 1) { ?>
         <div class="pagination">
            <?php for ($i = 1; $i <= $total_pages; $i++) { ?>
               <a href="?page=<?php echo $i; ?>"
                  class="<?php echo $i == $current_page ? 'active' : ''; ?>"><?php echo $i; ?></a>
            <?php } ?>
         </div>
      <?php } ?>
   </div>
</main>

<style>
   .video-grid {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
      justify-content: space-around;
   }

   .video-item {
      text-align: center;
      max-width: 320px;
      margin-bottom: 30px;
   }

   .video-item iframe {
      border-radius: 30px;
      overflow: hidden;
   }

   .video-item h3 {
      margin-top: 10px;
      font-size: 24px;
      line-height: 36px;
      font-weight: 700;
      color: #313131;
      text-align: left;
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

<?php
$this->load->view('footer/footer');
?>
