<?php $GLOBALS['guest'] = $guest ?>

<?php function main() { ?>
    <?php $guest = $GLOBALS['guest'] ?>


        <!-- <p><img alt="" class="img-fluid" src="<?= base_url() ?>assets/modal/img/blog-single.jpg"></p> -->
        <h1><?= $guest->title ?></h1>
        <div class="postmeta">
          <ul>
            <!-- <li><a href="#"><i class="icon_folder-alt"></i> Collections</a></li>
            <li><a href="#"><i class="icon_clock_alt"></i> 23/12/2015</a></li> -->
            <!-- <li><a href="#"><i class="icon_pencil-edit"></i> Admin</a></li> -->
            <!-- <li><a href="#"><i class="icon_comment_alt"></i> (14) Comments</a></li> -->
          </ul>
        </div>
        <!-- /post meta -->
        <div class="post-content">
          <?= $guest->content ?>

          <?php 
            if(isset($guest->url)) {
                echo("<p>Google Form Link : " . "<a href=" . $guest->url .">" . $guest->url . "</a> </p>");
            }
           ?>
          
        </div>

      
      
    
<?php } ?>



<?php require_once 'layout/single_page/index.php' ?>


