<?php $GLOBALS['guest'] = $guest ?>

<?php function main() { ?>
    <?php $guest = $GLOBALS['guest'] ?>

  <div class="container margin_60">

      <div class="row">

        <div class="col-lg-12">

              <?php 
      foreach($guest->result() as $row) {
        echo("<h2> ". $row->title ."</h2>");
        echo("<p>" . $row->content ."</p>");
        echo("<a href=". base_url('kajian?id=' . $row->id) .">Selengkapnya...</a>");
      }
     ?>

     <?= $guest->pagin ?>
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

