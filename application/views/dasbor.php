<?php $GLOBALS['total_admin'] = $total_admin ?>
<?php $GLOBALS['total_user'] = $total_user ?>

<?php function main() { ?>
    <?php $total_admin = $GLOBALS['total_admin'] ?? 0 ?>
    <?php $total_user = $GLOBALS['total_user'] ?? 0 ?>
    <div class="row">
        <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card dashboard text-white bg-secondary o-hidden h-100">
                <div class="card-body">
                    <div class="card-body-icon"><i class="fa fa-fw fa-star-o"></i></div>
                    <div class="mr-5"><h5><?php echo @$total_admin ?> Admin</h5></div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="<?php echo base_url('dasbor/admin') ?>">
                    <span class="float-left">Lihat Daftar Admin</span>
                    <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
                </a>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card dashboard text-white bg-secondary o-hidden h-100">
                <div class="card-body">
                    <div class="card-body-icon"><i class="fa fa-fw fa-user-circle-o"></i></div>
                    <div class="mr-5"><h5><?php echo @$total_user ?> Pengguna</h5></div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="<?php echo base_url('dasbor/pengguna') ?>">
                    <span class="float-left">Lihat Daftar Pengguna</span>
                    <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
                </a>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card dashboard text-white bg-secondary o-hidden h-100">
                <div class="card-body">
                    <div class="card-body-icon"><i class="fa fa-fw fa-free-code-camp"></i></div>
                    <div class="mr-5"><h5>0 Kegiatan</h5></div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="">
                    <span class="float-left">Lihat Daftar Kegiatan</span>
                    <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
                </a>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card dashboard text-white bg-secondary o-hidden h-100">
                <div class="card-body">
                    <div class="card-body-icon"><i class="fa fa-fw fa-image"></i></div>
                    <div class="mr-5"><h5>0 Album</h5></div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="">
                    <span class="float-left">Lihat Daftar Album</span>
                    <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
                </a>
            </div>
        </div>
    </div>
<?php } ?>

<?php require_once 'layout/dashboard/index.php' ?>