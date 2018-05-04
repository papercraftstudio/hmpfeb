<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Find easily a doctor and book online an appointment">
    <meta name="author" content="Ansonika">
    <title><?= isset($title) ? $title : 'Untitled'; ?></title>
    <link rel='stylesheet' href='<?= base_url() ?>assets/bootstrap/css/bootstrap.min.css'>
    <link rel='stylesheet' href='<?= base_url() ?>assets/font-awesome/css/font-awesome.min.css'>
    <link rel="stylesheet" href="<?= base_url() ?>assets/modal/css/style.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/modal/css/menu.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/modal/css/vendors.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/modal/css/icon_fonts/css/all_icons_min.css">
</head>
<body>
<div id="preloader" class="Fixed">
    <div data-loader="circle-side"></div>
</div>
<div id="page">
    <header class="header_sticky">
        <a href="#menu" class="btn_mobile">
            <div class="hamburger hamburger--spin" id="hamburger">
                <div class="hamburger-box">
                    <div class="hamburger-inner"></div>
                </div>
            </div>
        </a>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-6">
                    <div id="logo">
                        <a href="index.html" title="Findoctor">
                            <img src="<?= base_url() ?>assets/modal/img/logo.png" width="163" height="36">
                        </a>
                    </div>
                </div>
                <div class="col-lg-9 col-6">
                    <ul id="top_access">
                        <li><a href=""><i class="pe-7s-user"></i></a></li>
                        <li><a href=""><i class="pe-7s-add-user"></i></a></li>
                    </ul>
                    <nav id="menu" class="main-menu">
                        <ul>
                            <li><span><a href="">Beranda</a></span></li>
                            <li><span><a href="">Tentang</a></span></li>
                            <li><span><a href="">Galeri</a></span></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <main>