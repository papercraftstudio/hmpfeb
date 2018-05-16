<div class="layer"></div>
<div id="preloader">
    <div data-loader="circle-side"></div>
</div>
<header class="header_sticky">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-6">
                <div id="logo">
                    <a href="<?php echo base_url() ?>">
                        <img src="<?php echo base_url() ?>asset/landing/img/logo.png" alt="" width="163" height="36">
                    </a>
                </div>
            </div>
            <nav class="col-lg-9 col-6">
                <a class="cmn-toggle-switch cmn-toggle-switch__htx open_close" href="#0"><span>Menu Mobile</span></a>
                <ul id="top_access">
                    <?php if (!$this->session->userdata('login')): ?>
                        <li><a href="<?php echo @$google_login_url ?>"><i class="pe-7s-user"></i></a></li>
                    <?php else: ?>
                        <li id="user">
                            <a href="<?php echo base_url('profil') ?>">
                                <?php $picture = base_url() . 'asset/landing/img/avatar.png' ?>
                                <figure><img src="<?php echo @$user['picture_url'] ?? $picture ?>" alt=""></figure>
                                <?php echo @$user['first_name'] ?>
                            </a>
                        </li>
                    <?php endif; ?>
                </ul>
                <div class="main-menu">
                    <ul>
                        <li><a href="<?php echo base_url() ?>" class="show-submenu"> Beranda</a></li>
                        <li><a href="<?php echo base_url('galeri') ?>"> Galeri</a></li>
                        <li><a href="<?php echo base_url('kajian') ?>"> Kajian</a></li>
                        <li><span><a href="#0">Events</a></span>
                            <ul> 
                                <?php foreach($events as $event): ?>
                                <li><a href="event/?id=<?= $event->id ?>"><?= $event->title ?></a></li>
                                <?php endforeach; ?>
                                
                            </ul>

                        </li>
                        <li><a href="<?php echo base_url('page/about_us') ?>"> About Us</a></li>
                        <li><a href="<?php echo base_url('page/visi_misi') ?>"> Visi &amp; Misi</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>