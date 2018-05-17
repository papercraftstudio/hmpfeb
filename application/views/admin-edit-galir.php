<?php $GLOBALS['admin'] = $admin ?>

<?php function main() { ?>
    <?php $admin = $GLOBALS['admin'] ?>
    <?php if (isset($admin)): ?>
<div class="card mb-3">
  <div class="card-header">
      <i class="fa fa-table"></i> Galir
  </div>
      <div class="card-body">
        <div class="table-responsive">
        <form action="<?= base_url(); ?>Dasbor/edit_galir" method="POST">
          <table class="table table-bordered" id="galir" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>Kode Matkul</th>
                <th>Nama Matkul</th>
                <th>Semester</th>
                <th>SKS</th>
                <th>Kosyarat</th>
              </tr>
            </thead>
            <tbody>
            <?php foreach ($admin as $galir): ?>
              <tr>
                <td><input type="text" name="kode_matkul" id="kode_matkul" value="<?=$galir->kode_matkul ?>"></td>
                <td><input type="text" name="nama_matkul" id="nama_matkul" value="<?=$galir->nama_matkul ?>"></td>
                <td><input type="text" name="semester" id="semester" value="<?=$galir->semester ?>"></td>
                <td><input type="text" name="sks" id="sks" value="<?=$galir->sks ?>"></td>
                <td><input type="text" name="kosyarat" id="kosyarat" value="<?=$galir->kosyarat ?>"></td>
              </tr>
            </tbody>
            <?php endforeach ?>
            <tr>
                <td colspan="5">
                    <input type="hidden" name="id" id="id" value="<?= $galir->id; ?>">
                    <input type="submit" value="EDIT">
                    <a href="<?= base_url(); ?>dasbor/galir"> <input type="button" value="CANCEL"></a>
                </td>
            </tr>
          </table>
        </form>
        </div>
      </div>
  
</div>
    <?php endif; ?>
<?php } ?>



<?php require_once 'layout/dashboard/index.php' ?>

