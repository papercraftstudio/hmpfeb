<nav class="navbar navbar-expand-lg navbar-dark bg-default fixed-top" id="mainNav">
    <a class="navbar-brand" href="<?php echo base_url() ?>">
        <img src="/asset/dashboard/img/logo.png" data-retina="true" alt="" width="163" height="36">
    </a>
    <button class="navbar-toggler navbar-toggler-right"
            type="button"
            data-toggle="collapse"
            data-target="#navbarResponsive"
            aria-controls="navbarResponsive"
            aria-expanded="false"
            aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
                <a class="nav-link" href="<?php echo base_url('dasbor') ?>">
                    <i class="fa fa-fw fa-dashboard"></i>
                    <span class="nav-link-text">Dasbor</span>
                </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="My profile">
                <a class="nav-link nav-link-collapse collapsed"
                   data-toggle="collapse"
                   href="#collapseProfile"
                   data-parent="#exampleAccordion">
                    <i class="fa fa-fw fa-table"></i>
                    <span class="nav-link-text">Data</span>
                </a>
                <ul class="sidenav-second-level collapse" id="collapseProfile">
                    <li><a href="<?php echo base_url('dasbor/admin') ?>">Admin</a></li>
                    <li><a href="<?php echo base_url('dasbor/pengguna') ?>">Pengguna</a></li>
                </ul>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
                <a class="nav-link" href="<?php echo base_url('dasbor/page') ?>">
                    <i class="fa fa-fw fa-dashboard"></i>
                    <span class="nav-link-text">Page</span>
                </a>
            </li>

            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
                <a class="nav-link" href="<?php echo base_url('dasbor/events') ?>">
                    <i class="fa fa-fw fa-dashboard"></i>
                    <span class="nav-link-text">Events</span>
                </a>
            </li>
        </ul>
        <ul class="navbar-nav sidenav-toggler">
            <li class="nav-item">
                <a class="nav-link text-center" id="sidenavToggler">
                    <i class="fa fa-fw fa-angle-left"></i>
                </a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('autentikasi/keluar') ?>">
                    <i class="fa fa-fw fa-sign-out"></i> Keluar
                </a>
            </li>
        </ul>
    </div>
</nav>