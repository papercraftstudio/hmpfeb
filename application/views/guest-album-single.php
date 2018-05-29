<?php $GLOBALS['guest'] = $guest ?>
<?php function main() { ?>
<?php $guest = $GLOBALS['guest'] ?>
    <div class="container margin_60_35">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <a href="<?= base_url() ?>galeri/" class="btn_1">Kembali ke Galeri</a>
                </div> <br>
                <div class="row">
                    <h3><?= $guest['current_album'] ?></h3>
                </div>
                <div class="row">
                    <?= $guest['description'] ?>
                </div>
                <br>
                <div class="row">

                    <?php foreach($guest['photos'] as $photo): ?>
                    <div class="col-md-4">
                        <div class="box_list wow fadeIn">
                            <figure>
                                <a href="<?= base_url('') ?>galeri/index/<?= $guest['current_album'] ?>/photo/<?= $photo->id ?>">
                                    <img src="<?= base_url('') ?>/uploads/<?= $photo->file_name ?>" class="img-fluid" alt="">
                                    <div class="preview"><p></p><span>Lihat Photo</span></div>
                                </a>
                            </figure>
                        </div>
                    </div>
                <?php endforeach; ?>
                </div>

            </div>
        </div>
    </div>
<?php } ?>

<?php require_once 'layout/landing/index.php' ?>