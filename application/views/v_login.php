<html>

<head>
    <title>
        <?= isset($title) ? $title:'Untitled';?>
    </title>
    <link rel='stylesheet prefetch' href='<?=base_url();?>assets/bootstrap/css/bootstrap.min.css'>
    <link rel='stylesheet prefetch' href='<?=base_url();?>assets/font-awesome/css/font-awesome.min.css'>
    <style>
        .pad{
            margin-top: 10px;
            text-align: center;
        }
    </style>
</head>

<body>
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
    <script src='<?=base_url();?>assets/jquery/jquery-3.2.1.min.js'></script>
    <script src='<?=base_url();?>assets/bootstrap/js/bootstrap.min.js'></script>
    <script src='<?=base_url();?>assets/bootstrap/js/bootstrap.bundle.min.js'></script>
</body>

</html>