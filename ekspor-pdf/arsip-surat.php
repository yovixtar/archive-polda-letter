<?php

require_once __DIR__ . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A4-L']);

ob_start();
include "format-pdf-arsip-surat.php"; 
$template = ob_get_contents();
ob_end_clean();

$mpdf->WriteHTML($template);
$mpdf->Output('Laporan Bulanan.pdf', 'D');