<?php $album = $this->uri->segment(3) ?>
<?php $GLOBALS['admin'] = $admin ?>

<?php function main() { ?>
<?php $admin = $GLOBALS['admin'] ?>
<?php if (isset($admin)): ?>
  <div class="card mb-3">
    <div class="card-header">
      <i class="fa fa-table"></i> Album <?= $admin['album'] ?>
    </div>
    <div class="card-body">

      <a href="<?= base_url('dasbor/album') ?>" class="btn_1 gray">Kembali</a>
      <a href="<?= base_url("dasbor/add_photo/") ?><?= "/" . $admin['album'] ?>" class="btn_1">+ Tambah Foto</a>
      <div class="table-responsive">
        <table class="table table-bordered" id="users" width="100%" cellspacing="0">
          <thead>
            <tr>

              <th>Foto</th>
              
              <th>Deskripsi</th>
              <th>Tipe</th>
              <th>Slideshow</th>
              <th colspan="2"></th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($admin as $photo): ?>
              <?php if(!isset($photo->id)) break ?>
              <tr>

                <td><img src="<?= base_url("uploads/$photo->file_name") ?>" width="100px" height="100px" alt=""><p><?= $photo->file_name ?></p></td>
                
                <td><?= $photo->content ?></td>
                <td><?= $photo->type ?></td>
                <td><?= $photo->url ?></td>
                <td>
                  <form action="<?= base_url() ?>dasbor/delete_photo/<?= $admin['album'] ?>/<?= $photo->id?>" onsubmit="return confirm('Apakah Anda yakin ingin menghapus foto ini?');">

                    <input type="submit" value="Delete">
                  </form>
                  
                  <td>
                    <form action="<?= base_url() ?>dasbor/<?= (empty($photo->type=='slideshow')) ? "set_slideshow" : "disable_slideshow" ?>/<?= $admin['album'] ?>/<?= $photo->id?>" <?= ($photo->type=='galery') ?  '' : 'onsubmit="return confirm(\'Apakah Anda yakin ingin supaya foto ini tidak ditambilkan di slideshow?\')"'  ?>>
                      <input type="submit" value="<?= ($photo->type=='galery') ? "Set Slideshow" : "Disable Slideshow" ?>">
                    </form>

                  </td>

                </tr>
              </tbody>
            <?php endforeach ?>
          </table>
        </div>
      </div>

    </div>
  <?php endif; ?>
  <?php } ?>



  <?php require_once 'layout/dashboard/index.php' ?>

