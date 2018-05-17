<?php $GLOBALS['guest'] = $guest ?>

<?php function main() { ?>
    <?php $guest = $GLOBALS['guest'] ?>

  <div class="container margin_60">

      <div class="row">

        <div class="col-lg-12">

          <?php 
            foreach ($guest as $kajian) :
           ?>
          <article class="blog wow fadeIn">
            <div class="row no-gutters">
              <div class="col-lg-12">
                <div class="post_info">
                  <small><?= $kajian->date ?></small>
                  <h3><a href="blog-post.html">Nec nihil menandri appellantur ut</a></h3>
                  <p>Quodsi sanctus pro eu, ne audire scripserit quo. Vel an enim offendit salutandi, in eos quod omnes epicurei, ex veri qualisque scriptorem mei.</p>
                  <ul>
                    <li>
                      <div class="thumb"><img src="img/thumb_blog.jpg" alt=""></div> Jessica Hoops
                    </li>
                    <li><i class="icon_comment_alt"></i> 20</li>
                  </ul>
                </div>
              </div>
            </div>
          </article>
        <?php endforeach ?>
          <!-- /article -->

  
          <nav aria-label="...">
            <ul class="pagination pagination-sm">
              <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1">Previous</a>
              </li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item">
                <a class="page-link" href="#">Next</a>
              </li>
            </ul>
          </nav>
          <!-- /pagination -->
        </div>
        <!-- /col -->
        
        
        <!-- /aside -->
      </div>
      <!-- /row -->
    </div>
      
      
    
<?php } ?>



<?php require_once 'layout/single_page/index.php' ?>


