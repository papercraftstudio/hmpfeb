<?php $GLOBALS['admin'] = $admin ?>

<?php function main() { ?>
<?php $admin = $GLOBALS['admin'] ?>
<?php if (isset($admin)): ?>



  <div class="box_general padding_bottom">
    <div class="header_box version_2">
      <h2><i class="fa fa-file"></i>Tambah Foto</h2>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <?php

        echo form_open_multipart("dasbor/added_photo/$admin"); ?>

        <?php 



    //Show hidden id field

        $data = array(

          'name' => 'id',
          'hidden' => 'true',

        );
        echo form_input($data);

        echo "<br>";

        //Show url
        echo form_label('Upload Foto  ','photo');

        echo("<br>");


    //show upload btn
    echo "<input type='file' name='userfile' size='20' />";

    echo("<br>");

    //Show deskripsi image
    echo form_label('Deskripsi Foto  ','content'); echo("<br>");
        $data = array(
          'name' => 'content',

        );
        echo form_textarea($data);

        echo("</br>");

        //Show checkbox
        $data = array(
          'id' => 'slideshow',

        );
        echo("<label>");echo form_checkbox($data,'slideshow', '0', TRUE);echo("Slideshow ? &nbsp;</label>");

        echo("<br>");

    //Show url textbox

        echo("<div class='slideshow' style='display:none'>");echo form_label('URL ke : ','title');
        $data = array(

          'name' => 'url',
          'type' => 'url',
          'placeholder' => 'Link',


        );

        echo form_input($data);
        echo("</div>");

        echo("<br>");



    //Show cancel button
        echo anchor('dasbor/album', 'Cancel', 'class="btn_1 gray"');


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
<script>
  
  $(document).ready(function() {
    $("#slideshow").change(function() {

      console.log("changed");
        $('.slideshow').toggle();
    
});
  });
</script>

