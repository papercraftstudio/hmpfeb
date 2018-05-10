<!DOCTYPE html>
<html lang="id">
<?php require_once 'head.php' ?>
<body>
<?php require_once 'header.php' ?>
<main>
    <?php if (is_callable('main')) main(); ?>
</main>
<?php require_once 'footer.php' ?>
</body>
</html>