<?php

if ($_GET['file'] != "" && $_GET['idx'] != "") {
    $path = 'file-bukti/' . $_GET['file'];
    if (file_exists($path)) {
        try {
            unlink($path);
            $data = array("", $_GET['idx']);
            $run_query_update->update_bukti_arsip_surat_by_id($data);
            alert_icon("success", "Berhasil menghapus Bukti Tindak Lanjut!", "Redirecting...", "?page=form-arsip-surat&form=update&idx=" . $_GET['idx']);
        } catch (\Throwable $th) {
            alert_icon("error", "Gagal menghapus Bukti Tindak Lanjut!", "Redirecting...", "?page=form-arsip-surat&form=update&idx=" . $_GET['idx']);
        }
    } else {
        alert_icon("error", "File Bukti Tindak Lanjut tidak ditemukan!", "Redirecting...", "?page=form-arsip-surat&form=update&idx=" . $_GET['idx']);
    }
} else {
    alert_icon("warning", "Not Allowed!", "Redirecting...", "?page=cari-arsip-surat");
}
