<?php $this->load->view('admin_header') ?>
<ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="<?= base_url() ?>admin/index">Admin</a>
        </li>
        <li class="breadcrumb-item active"><?= (isset($title) ? $title : "My Dashboard") ?></li>
      </ol>
<?php 

  if(isset($title)) {
    if($title == "Pages") {
      
      $this->load->view('admin/list_page');
    } else {
      echo "nonpages";
    }
  } else {
    echo "index admin";
  }
?>

<?php $this->load->view('admin_footer') ?>