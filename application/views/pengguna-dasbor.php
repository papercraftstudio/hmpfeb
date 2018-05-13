<?php $GLOBALS['user'] = $user ?>
<script>
function myFunction() {
    var x = $("#email").val();
    var r = confirm("Apakah Anda Yakin Akan Menjadikan "+ x +" Sebagai Admin?");
    if (r == true) {
        $("#form_make_admin").submit();
    }
}
</script>
<?php function main() { ?>
    <?php $user = $GLOBALS['user'] ?>
    <?php if (isset($user)): ?>
        <div class="card mb-3">
            <div class="card-header">
                <i class="fa fa-table"></i> Daftar Pengguna
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
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($user as $row) { ?>
                            <tr>
                                <td><?php echo @$row->email ?></td>
                                <td><?php echo @$row->first_name ?></td>
                                <td><?php echo @$row->last_name ?? '-' ?></td>
                                <td><?php echo @$row->gender ?? '-' ?></td>
                                <td><?php echo @date('d/m/Y H:i:s', strtotime($row->created) + 25200) ?></td>
                                <td>
                                    <form method="POST" action="<?= base_url(); ?>Dasbor/make_admin" id="form_make_admin">
                                        <input type="hidden" value="<?= $row->email; ?>" name="email" id="email">
                                    </form>
                                        <input type="button" value="Jadikan Admin" id="make_admin" onclick="myFunction()"> 
                                </td>
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