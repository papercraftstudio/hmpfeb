<?php $GLOBALS['admin'] = $admin ?>

<?php function main() { ?>
    <?php $admin = $GLOBALS['admin'] ?>
    <?php if (isset($admin)): ?>
<div class="card mb-3">
  <div class="card-header">
      <i class="fa fa-table"></i> Daftar Halaman
  </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="users" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Content</th>
                <th colspan="2"></th>
              </tr>
            </thead>
            <tbody>
            <?php foreach ($admin as $page): ?>
              <tr>
                <td><?= $page->id ?></td>
                <td><?= $page->title ?></td>
                <td><?= strip_tags(substr($page->content,0,50)) ?></td>
                <td><a href="<?= base_url() ?>dasbor/edit_page?id=<?= $page->id ?>">Edit</a></td>

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

