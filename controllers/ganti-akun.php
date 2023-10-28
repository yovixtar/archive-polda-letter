<?php

if (isset($_POST["submit"])) {
if ($run_query->get_current_account($_POST["username-old"], $_POST["password-old"]) > 0) {
    try {
        $run_query_update->update_akun($_POST["username-old"], $_POST["password-old"], $_POST["username-new"], $_POST["password-new"]);
        session_destroy();
        alert_icon("success", "Berhasil mengganti Akun!", "Redirecting...", "?");
    } catch (\Throwable $th) {
        alert_icon("error", "Gagal mengganti Akun!", "Redirecting...", "?page=setting");
    }
}else{
    alert_icon("error", "Akun tidak ditemukan!", "Redirecting...", "?page=setting");
}

}else{
    alert_icon("warning", "Not Allowed!", "Redirecting...", "?page=setting");
}