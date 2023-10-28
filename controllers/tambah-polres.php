<?php
if ($_POST["polres"] == "") {
    alert_icon("warning", "Form Required", "Pastikan anda mengisi Nama Polres", "?page=sublist");
} else {
    try {
        $run_query_create->add_polres($_POST['polres']);
        alert_icon("success", "Berhasil menambahkan Polres!", "Redirecting...", "?page=sublist");
    } catch (\Throwable $th) {
        alert_icon("error", "Gagal menambahkan Polres!", "Redirecting...", "?page=sublist");
    }
}
