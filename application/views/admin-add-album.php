<?php $GLOBALS['admin'] = $admin ?>

<?php function main() { ?>
<?php $admin = $GLOBALS['admin'] ?>
<?php if (isset($admin)): ?>

  <script src="<?= base_url() ?>asset/tinymce/jquery.tinymce.min.js"></script>
  <script src="<?= base_url() ?>asset/tinymce/tinymce.min.js"></script>

  <div class="box_general padding_bottom">
    <div class="container">     
     <div class="alert alert-warning">
      <strong>Perhatian!</strong> Harap tidak menggunakan tanda spasi dalam penamaan album supaya tidak terjadi error
    </div>
    <div class="header_box version_2">
      <h2><i class="fa fa-file"></i>Tambah Album Baru</h2>
    </div>
    <div class="card-body">
      <div class="table-responsive col-lg-9 col-md-9 col-sm-12 col-xs-12" style="margin: 0 auto">
        <div class="form-group">
        <?php

        echo form_open('dasbor/added_album'); ?>

        <?php 

    //Show hidden id field


        $data = array(

          'name' => 'id',
          'hidden' => 'true'


        );
        echo form_input($data);

    //Show album title
        echo form_label('Nama Album : &nbsp;','title');
        $data = array(

          'name' => 'title',
          'placeholder' => 'Judul Album',
          'class' => 'title form-control',
          'pattern' => '^[a-zA-Z0-9_]*$',
          'title' => 'Hanya huruf dan angka saja tanpa spasi atau tanda baca lainnya'

        );
        echo form_input($data);

        echo("<br>");

    //Show description
        echo form_label('Deskripsi Album : ','content'); 
        echo("<br>");
        $data = array(
          'name' => 'content',
          'class' => 'form-control'

        );
        echo form_textarea($data);


        echo("</br>");

    //Show cancel button
        echo("<div class='form-group'>");
        echo anchor('dasbor/album', 'Cancel', 'class="btn_1 gray form-control" style="text-align:center" ');
        echo("</div>");

    //Show submit button
        echo("<div class='form-group'>");
        $data = array(
          'type' => 'submit',
          'name' => 'update',
          'value' => 'Insert',
          'class' => 'btn_1 form-control'
        );
        echo("</div>");

        echo form_submit($data);

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

