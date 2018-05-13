<?php $GLOBALS['admin'] = $admin ?>

<?php function main() { ?>
    <?php $admin = $GLOBALS['admin'] ?>
    <?php if (isset($admin)): ?>
<div class="card mb-3">
  <div class="card-header">
      <i class="fa fa-table"></i> Daftar Event
  </div>
      <div class="card-body">
      <a href="<?= base_url('dasbor/add_event') ?>" class="btn_1">+ Add Event</a>
        <div class="table-responsive">
          <table class="table table-bordered" id="users" width="100%" cellspacing="0">
            <thead>
              <tr>
                
                <th>Title</th>
                <th>Content</th>
                <th>URL</th>
                <th colspan="2"></th>
              </tr>
            </thead>
            <tbody>
            <?php foreach ($admin as $event): ?>
              <tr>
                
                <td><?= $event->title ?></td>
                <td><?= strip_tags(substr($event->content,0,50)) ?></td>
                <td><a href="<?= $event->url ?>"><?= $event->url ?></a></td>
                <td><a href="<?= base_url() ?>dasbor/edit_event?id=<?= $event->id ?>">Edit</a></td>

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

