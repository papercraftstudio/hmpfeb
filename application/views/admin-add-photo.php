<?php $GLOBALS['admin'] = $admin ?>

<?php function main() { ?>
<?php $admin = $GLOBALS['admin'] ?>
<?php if (isset($admin)): ?>



  <div class="box_general padding_bottom">
    <div class="header_box version_2">
      <h2><i class="fa fa-file"></i>Tambah Foto</h2>
    </div>
    <div class="col-md-9 lg-9" style="margin:0 auto">
      <div class="container"> <div class='group'>
        <?php

        echo form_open_multipart("dasbor/added_photo/$admin"); ?>

        <?php 



    //Show hidden id field

        $data = array(

          'name' => 'id',
          'hidden' => 'true'


        );
        echo form_input($data);

        echo "<br>";

        //Show url
        echo form_label('Upload Foto  ','photo');

        echo("<br>");


    //show upload btn
    echo "<input type='file' name='userfile' size='20' class='form-control' />";

    echo("<br>");

    //Show deskripsi image
    echo form_label('Deskripsi Foto  ','content'); echo("<br>");
        $data = array(
          'name' => 'content',
          'class' => 'form-control'

        );
        echo form_textarea($data);

        echo("</br>");

        //Show select option
        $options = array(
          'galery' => 'galery',
          'slideshow' => 'slideshow',

        );

        
        echo form_dropdown('type', $options, 'galery','class="form-control"'); // 'large' will be "selected"
        echo("</div");

        echo("<br>");

    //Show url textbox

        echo("<div class='slideshow' style=''>");echo form_label('URL ke : ','title');
        $data = array(

          'name' => 'url',
          'type' => 'url',
          'placeholder' => 'Link',
          'class' => 'form-control'


        );

        echo form_input($data);
        echo("</div>");

        echo("<br>");



    //Show cancel button
        echo("<div class='form-group'></div>");
        echo anchor('dasbor/album', 'Cancel', 'class="btn_1 gray form-control" style="text-align:center"');
        echo("</div>");


        


    //Show submit button
        echo("<div class='form-group'></div>");
        $data = array(
          'type' => 'submit',
          'name' => 'update',
          'value' => 'Insert',
          'class' => 'btn_1 form-control'
        );
        echo form_submit($data);
        echo("</div>");

    //Close form
        echo form_close();


        ?>
        </div>

      </div>
    </div>
  </div>




<?php endif; ?>
<?php } ?>



<?php require_once 'layout/dashboard/index.php' ?>
<script>
  
  $(document).ready(function() {

  });
</script>

