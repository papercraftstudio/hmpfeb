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
        <form action="<?= base_url(); ?>Dasbor/add_galir" method="POST">
          <table class="table" id="galir" width="100%" cellspacing="0">
              <tr>
                <th>Kode Matkul</th>
                <td><input type="text" name="kode_matkul" id="kode_matkul"></td>
              </tr>
              <tr>
                <th>Nama Matkul</th>
                <td><input type="text" name="nama_matkul" id="nama_matkul"></td>
              </tr>
              <tr>
                <th>Semester</th>
                <td><input type="text" name="semester" id="semester"></td>
              </tr>
              <tr>
                <th>SKS</th>
                <td><input type="text" name="sks" id="sks"></td>
              </tr>
              <tr>
                <th>Kosyarat</th>
                <td><input type="text" name="kosyarat" id="kosyarat"></td>
              </tr>
              <tr>
              </tr>
            </tbody>
            <tr>
                <td colspan="2">
                    <center>
                        <a href="<?= base_url(); ?>dasbor/galir"> <input type="button" value="CANCEL"></a>
                        <input type="submit" value="TAMBAH DATA">
                    </center>
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

