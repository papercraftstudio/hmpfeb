<?php include_once("header.php") ?>
<div id="breadcrumb">
  <div class="container">
    <ul>
    <?= $breadcrumb?>
    </ul>
  </div>
</div>
<!-- /breadcrumb -->

<div class="container margin_60">
  <div class="row">
    <div class="col-lg-9">
      <div class="bloglist singlepost">
        <!-- <p><img alt="" class="img-fluid" src="<?= base_url() ?>assets/modal/img/blog-single.jpg"></p> -->
        <h1><?= $title ?></h1>
        <div class="postmeta">
          <ul>
            <li><a href="#"><i class="icon_folder-alt"></i> Collections</a></li>
            <li><a href="#"><i class="icon_clock_alt"></i> 23/12/2015</a></li>
            <!-- <li><a href="#"><i class="icon_pencil-edit"></i> Admin</a></li> -->
            <!-- <li><a href="#"><i class="icon_comment_alt"></i> (14) Comments</a></li> -->
          </ul>
        </div>
        <!-- /post meta -->
        <div class="post-content">
          <?= $content->content ?>
        </div>
        <!-- /post -->
      </div>
      <!-- /single-post -->


      <hr>

    </div>
    <!-- /col -->

  <?php $this->load->view('page_sidebar') ?>

  </div>
  <!-- /row -->
</div>
<!-- /container -->
