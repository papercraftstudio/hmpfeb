<?php $GLOBALS['admin'] = $admin ?>

<?php function main() { ?>
<?php $admin = $GLOBALS['admin'] ?>
<?php if (isset($admin)): ?>

    <script src="<?= base_url() ?>asset/tinymce/jquery.tinymce.min.js"></script>
    <script src="<?= base_url() ?>asset/tinymce/tinymce.min.js"></script>
    <script>tinymce.init({ selector:'textarea' });</script>

<div class="box_general padding_bottom">
  <div class="header_box version_2">
      <h2><i class="fa fa-file"></i>Edit Halaman</h2>
  </div>
  <div class="card-body">
    <div class="table-responsive">
    <?php

    echo form_open('dasbor/editted_page'); ?>

    <?php 

    //Show hidden id field


    $data = array(

      'name' => 'id',
      'hidden' => 'true',
      'value' => $admin->id
    );
    echo form_input($data);

    //Show page title field
    echo form_label('Judul Halaman : ','title');
    $data = array(

      'name' => 'title',
      'placeholder' => 'Judul Halaman',
      'class' => 'title',
      'value' => $admin->title
    );
    echo form_input($data);

    //Show page content field
    $data = array(
      'name' => 'content',
      'value' => $admin->content
    );
    echo form_textarea($data);

    //Show preview button
    $data = array(
      'type' => 'submit',
      'name' => 'preview',
      'value' => 'Preview'
    );
    echo form_submit($data);

    //Show submit button
    $data = array(
      'type' => 'submit',
      'name' => 'update',
      'value' => 'update'
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

