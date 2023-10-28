<?php

if (isset($_POST["submit"])) {
    try {
        $run_query_delete->delete_polres_by_id($_POST['polres_id']);
        alert_icon("success", "Berhasil menghapus Polres!", "Redirecting...", "?page=sublist");
    } catch (\Throwable $th) {
        alert_icon("error", "Gagal menghapus Polres!", "Redirecting...", "?page=sublist");
    }
}
