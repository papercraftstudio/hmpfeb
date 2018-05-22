<?php $GLOBALS['admin'] = $admin ?>

<?php function main() { ?>
    <?php $admin = $GLOBALS['admin'] ?>
    <?php if (isset($admin)): ?>
<div class="card mb-3">
  <div class="card-header">
      <i class="fa fa-table"></i> dosen
  </div>
      <div class="card-body">
        <div class="table-responsive">
        <form action="<?= base_url(); ?>Dasbor/add_dosen" method="POST">
          <table class="table" id="dosen" width="100%" cellspacing="0">
              <tr>
                <th>Nama</th>
                <td><input type="text" name="nama" id="nama" required></td>
              </tr>
              <tr>
                <th>Alamat</th>
                <td><input type="text" name="alamat" id="alamat"></td>
              </tr>
              <tr>
                <th>Matakuliah</th>
                <td><input type="text" name="matakuliah" id="matakuliah"></td>
              </tr>
              <tr>
                <th>Jenis Kelamin</th>
                <td>
                    <input type="radio" name="gender" value="P"> Laki-Laki
                    <input type="radio" name="gender" value="L"> Wanita
                </td>
              </tr>
              <tr>
                <th>Tanggal Lahir</th>
                <td><input type="date" name="dob" id="dob"></td>
              </tr>
              <tr>
              </tr>
            </tbody>
            <tr>
                <td colspan="2">
                    <center>
                        <a href="<?= base_url(); ?>dasbor/dosen"> <input type="button" value="CANCEL"></a>
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

