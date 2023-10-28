<?php
if ($_POST["sumber-surat"] == "") {
    alert_icon("warning", "Form Required", "Pastikan anda mengisi Nama Sumber Surat", "?page=sublist");
} else {
    try {
        $run_query_create->add_sumber_surat($_POST['sumber-surat']);
        alert_icon("success", "Berhasil menambahkan Sumber Surat!", "Redirecting...", "?page=sublist");
    } catch (\Throwable $th) {
        alert_icon("error", "Gagal menambahkan Sumber Surat!", "Redirecting...", "?page=sublist");
    }
}
