<?php include_once('header.php') ?>
    <div class="bg_color_2">
        <div class="container margin_60_35">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <div class="card text-center">
                        <h3 class="card-header">Masuk</h3>
                        <div class="card-body">
                            <?php if (isset($error)) { ?>
                                <div class="alert alert-danger"><?= $error ?></div>
                            <?php } ?>
                            <form method="POST" action="<?= base_url('login/login_action'); ?>">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="username" placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" name="pass" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <input class="btn_1" type="submit" value="Masuk">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
    </div>
<?php include_once('footer.php') ?>