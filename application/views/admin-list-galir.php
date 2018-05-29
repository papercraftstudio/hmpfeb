<?php $GLOBALS['admin'] = $admin ?>

<script>
function editFunction() {
    $('#form_action').attr('action', '<?= base_url(); ?>Dasbor/list_edit_galir');
    $('#form_action').submit();
}

function deleteFunction() {
    var r = confirm("Apakah Anda Yakin Akan Menghapus Data Tersebut?");
    if (r == true) {
      $('#form_action').attr('action', '<?= base_url(); ?>Dasbor/delete_galir');
      $('#form_action').submit();
    }
}
</script>

<?php function main() { ?>
    <?php $admin = $GLOBALS['admin'] ?>
    <?php if (isset($admin)): ?>
<div class="card mb-3">
  <div class="card-header">
      <i class="fa fa-table"></i> Galir
  </div>
      <div class="card-body">
      <a href="<?= base_url('dasbor/list_add_galir') ?>" class="btn_1">+ Add Galir</a>
        <div class="table-responsive">
          <table class="table table-bordered" id="galir" width="100%" cellspacing="0">
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
                  <form action="" method="POST" id="form_action">
                    <input type="hidden" name="id" id="id" value="<?= $galir->id; ?>"/>
                  </form>
                  <input type="button" class="btn btn-primary" value="EDIT" onclick="editFunction()"> 
                  <input type="button" class="btn btn-danger" value="Delete" onclick="deleteFunction()">
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

