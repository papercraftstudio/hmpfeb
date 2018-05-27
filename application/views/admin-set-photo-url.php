
<?php $GLOBALS['admin'] = $admin ?>

<?php function main() { ?>
<?php $admin = $GLOBALS['admin'] ?>
<?php if (isset($admin)): ?>
  <div class="card mb-3">
    <div class="card-header">
      <i class="fa fa-table"></i> Set URL untuk Slideshow
    </div>
    <div class="card-body">
      <form action="<?= base_url()?>dasbor/setted_slideshow/<?= $admin['album'] . "/" .$admin['id'] ?>" method="post">
        <div class="form-group">
          <label for="usr">URL :&nbsp;</label>
          <input type="url" class="form-control" id="usr" name="url">
        </div>

        <input type="submit" class="btn btn-success" value="Submit">
      </form>
    </div>

  </div>
<?php endif; ?>
<?php } ?>



<?php require_once 'layout/dashboard/index.php' ?>

