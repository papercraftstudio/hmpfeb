<?php $GLOBALS['guest'] = $guest ?>
<?php function main() { ?>
<?php $guest = $GLOBALS['guest'] ?>
<div class="container margin_60_35">
    <div class="row">
        <div class="col-lg-12">
            <div class="row">
                <a href="<?= base_url() ?>galeri/index/<?= $guest['current_album'] ?>" class="btn_1">Kembali ke Album</a>
            </div> <br>
            <div class="row">

                <div class="col-md-9">
                    <figure>
                        <img src="<?= base_url() ?>uploads/<?= $guest['photo']->file_name ?>" alt="" width="100%%">
                    </figure>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h3>Deskripsi Foto</h2>
                    </div>
                    <div class="col-md-4">
                        <div class="col-md-12"><span style="width:100%"><?= $guest['photo']->content ?></span></div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<?php } ?>

<?php require_once 'layout/landing/index.php' ?>