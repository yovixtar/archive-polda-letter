<?php

if (isset($_POST["submit"])) {
    try {
        $run_query_delete->delete_sumber_surat_by_id($_POST['sumber_surat_id']);
        alert_icon("success", "Berhasil menghapus Sumber Surat!", "Redirecting...", "?page=sublist");
    } catch (\Throwable $th) {
        alert_icon("error", "Gagal menghapus Sumber Surat!", "Redirecting...", "?page=sublist");
    }
}
