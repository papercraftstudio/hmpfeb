<?php $GLOBALS['guest'] = $guest ?>

<?php function main() { ?>
<?php $guest = $GLOBALS['guest'] ?>
    <div class="container">
            <center>
            <div id="slides">
                <?php foreach ($guest as $banner) { ?>
                    <img src="<?= base_url(); ?>uploads/<?= $banner->file_name;?>">
                <?php } ?>
            </div>
                </center>
        </div>
<?php } ?>

<?php require_once 'layout/landing/index.php' ?>