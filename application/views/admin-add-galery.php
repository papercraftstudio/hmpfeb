<?php $GLOBALS['admin'] = $admin ?>

<?php function main() { ?>
<?php $admin = $GLOBALS['admin'] ?>
<?php if (isset($admin)): ?>



  <div class="box_general padding_bottom">
    <div class="header_box version_2">
      <h2><i class="fa fa-file"></i>Tambahkan Galery</h2>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <?php

        echo form_open_multipart('dasbor/added_galery'); ?>

        <?php 



    //Show hidden id field

        $data = array(

          'name' => 'id',
          'hidden' => 'true',

        );
        echo form_input($data);

        echo "<br>";

        //Show url
        echo form_label('Nama kegiatan : ','event');
        $data = array(

          'name' => 'event',
          'placeholder' => 'Nama Kegiatan',
          

        );
        echo form_input($data);

        echo("<br>");


    //Show content image
        $data = array(
          'name' => 'content',

        );
        echo form_textarea($data);

        echo("</br>");
    //Show url
        echo form_label('URL ke : ','title');
        $data = array(

          'name' => 'url',
          'placeholder' => 'Link',
          'class' => 'title',

        );

        echo form_input($data);

        echo("<br>");

    //Show checkbox
    echo form_checkbox('slideshow', '1', TRUE);
    echo form_label('Slideshow ? &nbsp','slideshow');

    echo("<br>");

    //show upload btn
    echo "<input type='file' name='userfile' size='20' />";

    echo("<br>");


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

