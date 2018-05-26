<?php $GLOBALS['guest'] = $guest ?>

<?php function main() { ?>
<?php $guest = $GLOBALS['guest'] ?>

<h1>DOSEN</h1>
<div class="carxd mb-3">
    <div class="table-responsive">
        <table class="table table-bordered" id="dosen   " width="100%" cellspacing="0">
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
                <?php foreach ($guest as $dosen): ?>
                <tr>
                    <td>
                        <?= $dosen->nama ?>
                    </td>
                    <td>
                        <?= $dosen->alamat ?>
                    </td>
                    <td>
                        <?= $dosen->matakuliah ?>
                    </td>
                    <td>
                        <?= $dosen->gender ?>
                    </td>
                    <td>
                        <?= $dosen->dob ?>
                    </td>
                </tr>
            </tbody>
            <?php endforeach ?>
        </table>
    </div>

</div>

<?php } ?>



<?php require_once 'layout/single_page/index.php' ?>