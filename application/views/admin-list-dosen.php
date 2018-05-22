<?php $GLOBALS['admin'] = $admin ?>

<script>
function editFunction() {
    $('#form_action').attr('action', '<?= base_url(); ?>Dasbor/list_edit_dosen');
    $('#form_action').submit();
}

function deleteFunction() {
    var r = confirm("Apakah Anda Yakin Akan Menghapus Data Tersebut?");
    if (r == true) {
      $('#form_action').attr('action', '<?= base_url(); ?>Dasbor/delete_dosen');
      $('#form_action').submit();
    }
}
</script>

<?php function main() { ?>
    <?php $admin = $GLOBALS['admin'] ?>
    <?php if (isset($admin)): ?>
<div class="card mb-3">
  <div class="card-header">
      <i class="fa fa-table"></i> dosen
  </div>
      <div class="card-body">
      <a href="<?= base_url('dasbor/list_add_dosen') ?>" class="btn_1">+ Add dosen</a>
        <div class="table-responsive">
          <table class="table table-bordered" id="dosen" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Matakuliah</th>
                <th>Jenis Kelamin</th>
                <th>Tanggal Lahir</th>
              </tr>
            </thead>
            <tbody>
            <?php foreach ($admin as $dosen): ?>
              <tr>
                <td><?= $dosen->nama ?></td>
                <td><?= $dosen->alamat ?></td>
                <td><?= $dosen->matakuliah ?></td>
                <td><?= $dosen->gender ?></td>
                <td><?= $dosen->dob ?></td>
                <td>
                  <form action="" method="POST" id="form_action">
                    <input type="hidden" name="id" id="id" value="<?= $dosen->id; ?>"/>
                  </form>
                  <input type="button" value="EDIT" onclick="editFunction()"> 
                  <input type="button" value="Delete" onclick="deleteFunction()">
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

