<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Edit Page | Admin</title>
    <script src="<?= base_url() ?>assets/tinymce/jquery.tinymce.min.js"></script>
    <script src="<?= base_url() ?>assets/tinymce/tinymce.min.js"></script>
    <script>tinymce.init({ selector:'textarea' });</script>
  </head>
  <body>
    <!-- <form action="http://localhost/hmpfeb/page/editted" method="post">
      <p>Judul : <input type="text" name="title" placeholder="Judul Halaman"> </p>
      <textarea name="content" rows="8" cols="80"></textarea>
      <p><input type="submit" name="update" value="Update"></p>
    </form> -->

    <?php

    echo form_open('../admin/editted_page');

    //Show hidden id field

    $data = array(

      'name' => 'id',
      'hidden' => 'true',
      'value' => $page->id
    );
    echo form_input($data);

    //Show page title field
    echo form_label('Judul Halaman : ','title');
    $data = array(

      'name' => 'title',
      'placeholder' => 'Judul Halaman',
      'class' => 'title',
      'value' => $page->title
    );
    echo form_input($data);

    //Show page content field
    $data = array(
      'name' => 'content',
      'value' => $page->content
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
  </body>
</html>
