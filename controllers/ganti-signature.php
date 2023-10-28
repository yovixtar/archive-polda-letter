<?php

if (isset($_POST["submit"])) {
    try {
        $run_query_update->update_signature($_POST["name"], $_POST["nrp"], $_POST["id"]);
        alert_icon("success", "Berhasil mengganti Tanda Tangan!", "Redirecting...", "?page=setting");
    } catch (\Throwable $th) {
        alert_icon("error", "Gagal mengganti Tanda Tangan!", "Redirecting...", "?page=setting");
    }

}else{
    alert_icon("warning", "Not Allowed!", "Redirecting...", "?page=setting");
}