<?php $GLOBALS['admin'] = $admin ?>

<?php function main() { ?>
<?php $admin = $GLOBALS['admin'] ?>
<?php if (isset($admin)): ?>

    <script src="<?= base_url() ?>asset/tinymce/jquery.tinymce.min.js"></script>
    <script src="<?= base_url() ?>asset/tinymce/tinymce.min.js"></script>
    <script>
      tinymce.init(
        { selector:'textarea',
          theme : 'modern',
          plugins: 'print preview searchreplace autolink directionality visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists textcolor wordcount imagetools contextmenu colorpicker textpattern help',
          content_css: [
            '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
            '//www.tinymce.com/css/codepen.min.css'
          ]

      });

  </script>

<div class="box_general padding_bottom">
  <div class="header_box version_2">
      <h2><i class="fa fa-file"></i>Insert Kajian</h2>
  </div>
  <div class="card-body">
    <div class="table-responsive">
    <?php

    echo form_open('dasbor/added_kajian'); ?>

    <?php 

    //Show hidden id field


    $data = array(

      'name' => 'id',
      'hidden' => 'true',
      
    );
    echo form_input($data);

    //Show page title field
    echo form_label('Judul Halaman : ','title');
    $data = array(

      'name' => 'title',
      'placeholder' => 'Judul Halaman',
      'class' => 'title',
      
    );
    echo form_input($data);

    //Show page content field
    $data = array(
      'name' => 'content',
      
    );
    echo form_textarea($data);

    echo("</br>");

    //Show cancel button
    echo anchor('dasbor/kajian', 'Cancel', 'class="btn_1 gray"');

    //Show submit button
    $data = array(
      'type' => 'submit',
      'name' => 'update',
      'value' => 'Insert',
      'class' => 'btn_1'
    );
    echo form_submit($data);

    //Close form
    echo form_close();


    ?>
    

    </div>
  </div>
</div>



   <?php endif; ?>
<?php } ?>


<?php require_once 'layout/dashboard/index.php' ?>

