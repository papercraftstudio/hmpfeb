<?php function main() { ?>
    <div class="container margin_60_35">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <?php for ($i = 1; $i <= 6; $i++) { ?>
                        <div class="col-md-4">
                            <div class="box_list wow fadeIn">
                                <figure>
                                    <a href="">
                                        <img src="" class="img-fluid" alt="">
                                        <div class="preview"><span>Lihat Album</span></div>
                                    </a>
                                </figure>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
<?php } ?>

<?php require_once 'layout/landing/index.php' ?>