<?php $GLOBALS['admin'] = $admin ?>

<?php function main() { ?>
    <?php $admin = $GLOBALS['admin'] ?>
    <?php if (isset($admin)): ?>
<div class="card mb-3">
  <div class="card-header">
      <i class="fa fa-table"></i> Daftar Album 
  </div>
      <div class="card-body">
      
      <a href="<?= base_url('dasbor/add_album') ?>" class="btn_1">+ Add Album</a>
        <div class="table-responsive">
          <table class="table table-bordered" id="users" width="100%" cellspacing="0">
            <thead>
              <tr>
                
                <th>Judul Album</th>
                <th>Deskripsi</th>
                <th colspan="2"></th>
              </tr>
            </thead>
            <tbody>
            <?php foreach ($admin as $album): ?>
              <tr>
                
                <td><a href="<?= base_url("dasbor/album/$album->title") ?>"><?= $album->title ?></a></td>
                <td><?= strip_tags(substr($album->content,0,50)) ?></td>
                <td>
                  <form action="<?= base_url() ?>dasbor/delete_album/<?= $album->id ?>" method="post" onsubmit="return confirm('Anda yakin ingin menghapus album ini beserta foto-foto didalamnya?')">
                    <input type="submit" value="Hapus">
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

