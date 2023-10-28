<?php
function alert_icon($icon, $title, $msg, $redirect)
{
?>
    <script>
        let timerInterval
        Swal.fire({
            icon: '<?= $icon ?>',
            title: '<?= $title ?>',
            html: '<?= $msg ?>',
            timer: 3000,
            timerProgressBar: true,
            didOpen: () => {
                Swal.showLoading()
            },
            willClose: () => {
                clearInterval(timerInterval)
            }
        }).then((result) => {
            /* Read more about handling dismissals below */
            if (result.dismiss === Swal.DismissReason.timer) {
                window.location = "<?= $redirect ?>";
            }
        })
    </script>
<?php
}
