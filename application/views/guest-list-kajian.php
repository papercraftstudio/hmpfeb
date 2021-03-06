<?php $GLOBALS['guest'] = $guest ?>

<?php function main() { ?>
    <?php $guest = $GLOBALS['guest'] ?>

  <div class="container margin_60">

      <div class="row">

        <div class="col-lg-12">
        <h2>Kajian</h2>
          <?php 
            foreach ($guest->result() as $kajian) :
           ?>
          <article class="blog wow fadeIn">
            <div class="row no-gutters">
              <div class="col-lg-12">
                <div class="post_info">
                  <small><?= $kajian->date ?></small>
                  <h3><a href="blog-post.html"><?= $kajian->title ?></a></h3>
                  <p><?= strip_tags(substr($kajian->content,0,500)) ?></p>
                  <p><a href="<?= base_url("kajian/?id=" . $kajian->id) ?>">Read More...</a></p>
                </div>
              </div>
            </div>
          </article>
        <?php endforeach ?>
          <!-- /article -->

          <nav aria-label="...">
          <?= $guest->pagin ?>

          </nav>

<!--         <nav aria-label="...">
          
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
          </nav> -->
          <!-- /pagination -->
        </div>
        <!-- /col -->
        
        
        <!-- /aside -->
      </div>
      <!-- /row -->
    </div>
      
      
    
<?php } ?>



<?php require_once 'layout/single_page/index.php' ?>

