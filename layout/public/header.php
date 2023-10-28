<?php
$title_page = "";

$switch_pages = isset($_GET['page']) ? $_GET['page'] : null;
switch ($switch_pages) {
    case 'sublist':
        $title_page = "Daftar Substansi, Petugas, dan PolRes";
        break;
    case 'laporan':
        $title_page = "Laporan";
        break;
    case 'tambah-arsip-surat':
        $title_page = "Tambah Arsip Surat";
        break;
    case 'cari-arsip-surat':
        $title_page = "Cari Arsip Surat";
        break;
    case 'laporan-arsip-surat':
        $title_page = "Laporan Arsip Surat";
        break;
    case 'form-arsip-surat':
        $title_page = "Form Arsip Surat";
        break;
    case 'setting':
        $title_page = "Setting";
        break;

    default:
        $title_page = "Dashboard";
        break;
}
?>

<!-- Navbar -->
<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl mb-5" id="navbarBlur" navbar-scroll="true">
    <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
                <li class="breadcrumb-item text-sm text-dark active" aria-current="page"><?= $title_page ?></li>
            </ol>
            <h6 class="font-weight-bolder mb-0"><?= $title_page ?></h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
            <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars text-dark"></i>
                </button>
                <a href="?logout" class="nav-link text-body font-weight-bold px-0 d-none d-lg-block">
                    <i class="fa fa-user me-sm-1"></i>
                    <span class="d-sm-inline d-none">Logout</span>
                </a>
            </div>
        </div>
    </div>

    <div class="collapse w-100" id="navbarTogglerDemo03">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="flex-direction: column;">
            <li class="nav-item">
                <a class="nav-link border-bottom border-primary active" aria-current="page" href="?">
                    <i class="fas fa-home mx-4"></i> Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link border-bottom border-primary" href="?page=sublist">
                    <i class="fas fa-sitemap ms-4 me-3"></i> Sublist
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link border-bottom border-primary" href="?page=tambah-arsip-surat">
                    <i class="fas fa-add mx-4"></i> Form Arsip Surat
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link border-bottom border-primary" href="?page=cari-arsip-surat">
                    <i class="fas fa-paste mx-4"></i> Cari Arsip Surat
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link border-bottom border-primary" href="?page=laporan-arsip-surat">
                    <i class="fas fa-paste mx-4"></i> Laporan Arsip Surat
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link border-bottom border-primary" href="?page=setting">
                    <i class="fas fa-tools mx-4"></i> Setting
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link border-bottom border-primary" href="?logout">
                    <i class="fas fa-user mx-4"></i> Logout
                </a>
            </li>
        </ul>
    </div>
</nav>

<!-- End Navbar -->