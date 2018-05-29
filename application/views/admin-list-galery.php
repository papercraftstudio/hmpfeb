<?php $GLOBALS['admin'] = $admin ?>

<?php function main() { ?>
    <?php $admin = $GLOBALS['admin'] ?>
    <?php if (isset($admin)): ?>
<div class="card mb-3">
  <div class="card-header">
      <i class="fa fa-table"></i> Galery
  </div>
      <div class="card-body">
        <a href="<?= base_url('dasbor/add_galery') ?>" class="btn_1">+ Tambah Foto</a>
            
        <a href="<?= base_url('dasbor/ada_galery') ?>" class="btn_1">+ Tambah Foto</a>
      </div>
  
</div>
    <?php endif; ?>
<?php } ?>



<?php require_once 'layout/dashboard/index.php' ?>

