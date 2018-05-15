<?php $GLOBALS['admin'] = $admin ?>

<?php function main() { ?>
    <?php $admin = $GLOBALS['admin'] ?>
    <?php if (isset($admin)): ?>
<div class="card mb-3">
  <div class="card-header">
      <i class="fa fa-table"></i> Galir
  </div>
      <div class="card-body">
      <a href="<?= base_url('dasbor/add_galir') ?>" class="btn_1">+ Add Galir</a>
        <div class="table-responsive">
          <table class="table table-bordered" id="users" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>Kode Matkul</th>
                <th>Nama Matkul</th>
                <th>Semester</th>
                <th>SKS</th>
                <th>Kosyarat</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
            <?php foreach ($admin as $galir): ?>
              <tr>
                <td><?= $galir->kode_matkul ?></td>
                <td><?= $galir->nama_matkul ?></td>
                <td><?= $galir->semester ?></td>
                <td><?= $galir->sks ?></td>
                <td><?= $galir->kosyarat ?></td>
                <td>
                  <form action="" method="POST">
                    <input type="hidden" name="id" id="id" value="<?= $galir->id; ?>"/>
                  </form>
                  <button>edit</button>
                  <button>delete</delete>
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

