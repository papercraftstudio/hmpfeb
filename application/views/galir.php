<?php $GLOBALS['guest'] = $guest ?>

<?php function main() { ?>
<?php $guest = $GLOBALS['guest'] ?>

<h1>GALIR</h1>
<div class="carxd mb-3">
        <div class="table-responsive">
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
                        <?php foreach ($guest as $galir): ?>
                        <tr>
                            <td><?= $galir->kode_matkul ?></td>
                            <td><?= $galir->nama_matkul ?></td>
                            <td><?= $galir->semester ?></td>
                            <td><?= $galir->sks ?></td>
                            <td><?= $galir->kosyarat ?></td>
                        </tr>
                    </tbody>
                    <?php endforeach ?>
                </table>
        </div>

</div>

<?php } ?>



<?php require_once 'layout/single_page/index.php' ?>