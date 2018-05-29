<?php $GLOBALS['user'] = @$user ?>

<?php function main() { ?>
    <?php $user = $GLOBALS['user'] ?>
    <div class="container margin_60">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body border px-4 rounded-top">
                        <div class="row my-1">
                            <div class="col-lg-5 col-md-4">
                                <figure>
                                    <?php $picture = base_url() . 'asset/landing/img/avatar.png' ?>
                                    <img src="<?php echo @$user['picture_url'] ?? $picture ?>" alt="" class="img-fluid">
                                </figure>
                            </div>
                            <div class="col-lg-7 col-md-8 mb-4">
                                <div class="table-responsive mb-2">
                                    <table class="table table-bordered">
                                        <tbody>
                                        <tr>
                                            <td>Alamat E-mail</td>
                                            <td><?php echo @$user['email'] ?></td>
                                        </tr>
                                        <tr>
                                            <td> Nama</td>
                                            <td><?php echo @$user['first_name'] . ' ' . @$user['last_name'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Nama Depan</td>
                                            <td><?php echo @$user['first_name'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Nama Belakang</td>
                                            <td><?php echo @$user['last_name'] ?? '-' ?></td>
                                        </tr>
                                        <tr>
                                            <td>Jenis Kelamin</td>
                                            <td><?php echo @$user['gender'] ?? '-' ?></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer border border-top-0">
                        <a href="<?php echo base_url('autentikasi/keluar') ?>" class="btn_1 outline">
                            Keluar
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>

<?php require_once 'layout/landing/index.php' ?>