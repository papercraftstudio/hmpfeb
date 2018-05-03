<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>list pages</title>
  </head>
  <body>

  <table border="1">
    <tr>
      <th>Id</th>
      <th>Title</th>
      <th>Content</th>
      <th colspan="2"></th>
    </tr>

    <?php foreach ($pages as $page): ?>
      <tr>
        <td><?= $page->id ?></td>
        <td><?= $page->title ?></td>
        <td><?= $page->content ?></td>
        <td><a href="<?= base_url() ?>PageCon/page?id=<?= $page->id ?>">Edit</a></td>

      </tr>
    <?php endforeach ?>
  </table>

  </body>
</html>
