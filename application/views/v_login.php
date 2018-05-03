<?php include_once('header.php') ?>
<style>
        .pad{
            margin-top: 10px;
            text-align: center;
        }
    </style>
    <center>
        <div class="col-lg-4" style="margin-top: 80px">
            <div class="jumbotron">
                <form method="POST" action="<?= base_url('login/login_action'); ?>">
                    <input class="form-control pad" type="text" name="username" id="username" placeholder="Username" />
                    <input class="form-control pad" type="password" name="pass" id="pass" placeholder="Password" />
                    <button class="btn btn-primary pad" type="submit">LOGIN </button>
                </form>
            </div>
        </div>
    </center>
<!-- Script -->
<?php include_once('footer.php') ?>
