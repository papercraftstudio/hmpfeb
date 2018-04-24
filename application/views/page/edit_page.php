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
    
    <p>Judul : <input type="text" name="judul" placeholder="Judul Halaman"> </p>
    <textarea name="name" rows="8" cols="80"></textarea>
  </body>
</html>
