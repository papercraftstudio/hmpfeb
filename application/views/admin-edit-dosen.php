<?php $GLOBALS['admin'] = $admin ?>

<?php function main() { ?>
    <?php $admin = $GLOBALS['admin'] ?>
    <?php if (isset($admin)): ?>
<div class="card mb-3">
  <div class="card-header">
      <i class="fa fa-table"></i> Dosen
  </div>
      <div class="card-body">
        <div class="table-responsive">
        <form action="<?= base_url(); ?>Dasbor/edit_dosen" method="POST">
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
                <td><input type="text" name="nama" id="nama" value="<?=$dosen->nama ?>"></td>
                <td><input type="text" name="alamat" id="alamat" value="<?=$dosen->alamat ?>"></td>
                <td><input type="text" name="matakuliah" id="matakuliah" value="<?=$dosen->matakuliah ?>"></td>
                <td>
                    <?php  
                        $p="";
                        $l="";
                        if ($dosen->gender == "L") {
                            $l="checked";
                        }
                        else {
                            $p="checked";
                        }
                    ?>

                    <input type="radio" name="gender" value="P" <?=$p;?>> Wanita
                    <input type="radio" name="gender" value="L" <?=$l;?>> Laki-Laki
                </td>
                <td><input type="date" name="dob" id="dob" value="<?=$dosen->dob ?>"></td>
              </tr>
            </tbody>
            <?php endforeach ?>
            <tr>
                <td colspan="5">
                    <input type="hidden" name="id" id="id" value="<?= $dosen->id; ?>">
                    <input type="submit" value="EDIT" class="btn btn-primary">
                    <a href="<?= base_url(); ?>dasbor/dosen"> <input type="button" class="btn btn-danger" value="CANCEL"></a>
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

