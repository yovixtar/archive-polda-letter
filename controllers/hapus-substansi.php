<?php

if (isset($_POST["submit"])) {
    try {
        $run_query_delete->delete_substansi_by_id($_POST['substansi_id']);
        alert_icon("success", "Berhasil menghapus Substansi!", "Redirecting...", "?page=sublist");
    } catch (\Throwable $th) {
        alert_icon("error", "Gagal menghapus Substansi!", "Redirecting...", "?page=sublist");
    }
}
