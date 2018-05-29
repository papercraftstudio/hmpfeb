<!DOCTYPE html>
<html lang="id">
<?php require_once 'head.php' ?>
<body class="fixed-nav sticky-footer" id="page-top">
<?php require_once 'header.php' ?>
<div class="content-wrapper">
    <div class="container-fluid">
        <?php if (is_callable('main')) main(); ?>
    </div>
</div>
<?php require_once 'footer.php' ?>
</body>
</html>