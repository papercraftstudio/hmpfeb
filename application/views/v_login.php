<!DOCTYPE html>
<html>

<head>
    <title><?= isset($title) ? $title : 'Untitled'; ?></title>
    <link rel='stylesheet prefetch' href='<?= base_url(); ?>assets/bootstrap/css/bootstrap.min.css'>
    <link rel='stylesheet prefetch' href='<?= base_url(); ?>assets/font-awesome/css/font-awesome.min.css'>
</head>

<body>
<div class="row">
    <div class="col-lg-4"></div>
    <div class="col-lg-4" style="margin-top: 80px">
        <div class="jumbotron text-center">
            <?php if (isset($error)) { ?>
                <div class="alert alert-danger">
                    <strong>Oops!</strong> <?= $error ?>
                </div>
            <?php } ?>
            <form method="POST" action="<?= base_url('login/login_action'); ?>">
                <div class="form-group">
                    <input class="form-control text-center" type="text" name="username" id="username" placeholder="Username"/>
                </div>
                <div class="form-group">
                    <input class="form-control text-center" type="password" name="pass" id="pass" placeholder="Password"/>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary" type="submit">LOGIN</button>
                </div>
            </form>
        </div>
    </div>
    <div class="col-lg-4"></div>
</div>

<!-- Script -->
<script src='<?= base_url(); ?>assets/jquery/jquery-3.2.1.min.js'></script>
<script src='<?= base_url(); ?>assets/bootstrap/js/bootstrap.min.js'></script>
<script src='<?= base_url(); ?>assets/bootstrap/js/bootstrap.bundle.min.js'></script>
</body>

</html>