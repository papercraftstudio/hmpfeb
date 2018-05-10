<?php $GLOBALS['admin'] = $admin ?>

<?php function main() { ?>
    <?php $admin = $GLOBALS['admin'] ?>
    <?php if (isset($admin)): ?>
        <div class="card mb-3">
            <div class="card-header">
                <i class="fa fa-table"></i> Daftar Admin
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="users" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Alamat E-Mail</th>
                            <th>Name Depan</th>
                            <th>Nama Belakang</th>
                            <th>Jenis Kelamin</th>
                            <th>Bergabung</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($admin as $row) { ?>
                            <tr>
                                <td><?php echo @$row->email ?></td>
                                <td><?php echo @$row->first_name ?></td>
                                <td><?php echo @$row->last_name ?? '-' ?></td>
                                <td><?php echo @$row->gender ?? '-' ?></td>
                                <td><?php echo @date('d/m/Y H:i:s', strtotime($row->created) + 25200) ?></td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    <?php endif; ?>
<?php } ?>

<?php require_once 'layout/dashboard/index.php' ?>