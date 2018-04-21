<!DOCTYPE html>
<html>
<head>
    <title>Page Title</title>
</head>
<body>
    Halaman Admin <br/>
    <?= $this->session->userdata('nama'); ?>

    </br>
	<a href="<?= base_url('login/logout'); ?>">Logout</a>
</body>
</html>