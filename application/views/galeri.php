<?php $GLOBALS['guest'] = $guest ?>
<?php function main() { ?>
<?php $guest = $GLOBALS['guest'] ?>
    <div class="container margin_60_35">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <?php foreach($guest['albums'] as $album): ?>
                    <div class="col-md-4">
                        <div class="box_list wow fadeIn">
                            <figure>
                                <a href="<?= base_url('') ?>galeri/index/<?= $album->title ?>">
                                    <img src="" class="img-fluid" alt="">
                                    <div class="preview"><p><?= $album->title ?></p><span>Lihat Album</span></div>
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