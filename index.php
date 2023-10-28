<?php

session_start();

require 'config.php';
include $view;
include $create;
include $update;
include $delete;

function format_tanggal($tanggal)
{
	$bulan = array(
		1 =>   'Januari',
		'Februari',
		'Maret',
		'April',
		'Mei',
		'Juni',
		'Juli',
		'Agustus',
		'September',
		'Oktober',
		'November',
		'Desember'
	);
	$pecahkan = explode('-', $tanggal);

	// variabel tanggal_indo 0 = tanggal
	// variabel tanggal_indo 1 = bulan (indonesia)
	// variabel tanggal_indo 2 = tahun
	// variabel tanggal_indo 3 = bulan (int)

	$tanggal_indo = [$pecahkan[2], $bulan[(int)$pecahkan[1]], $pecahkan[0], $pecahkan[1]];
	return $tanggal_indo;
}

$run_query = new view($config);
$run_query_create = new create($config);
$run_query_update = new update($config);
$run_query_delete = new delete($config);

if (!empty($_SESSION['admin'])) {
	include "layout/public/index.php";
} else {
	include "layout/auth/login.php";
}
