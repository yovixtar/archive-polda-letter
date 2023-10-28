<?php
if ($_POST["substansi"] == "") {
    alert_icon("warning", "Form Required", "Pastikan anda mengisi Nama Substansi", "?page=sublist");
} else {
    try {
        $run_query_create->add_substansi($_POST['substansi']);
        alert_icon("success", "Berhasil menambahkan Substansi!", "Redirecting...", "?page=sublist");
    } catch (\Throwable $th) {
        alert_icon("error", "Gagal menambahkan Substansi!", "Redirecting...", "?page=sublist");
    }
}
