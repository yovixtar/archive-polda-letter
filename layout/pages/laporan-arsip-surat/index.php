<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/css/datepicker.min.css" rel="stylesheet">


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/js/bootstrap-datepicker.min.js"></script>

<div class="row my-4">
    <div class="col-lg-4 col-md-6">
        <div class="card">
            <div class="card-header pb-0">
                <div class="row">
                    <div class="col-lg-8 col-10">
                        <h6>Cari Arsip Surat</h6>
                        <p class="text-sm mb-0">
                            Berdasarkan <span class="font-weight-bold ms-1">Single Bulan</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="card-body px-0 pb-0">
                <div class="container m-0 pb-4">
                    <form action="?page=laporan-arsip-surat" method="POST">
                        <label>Pilih Bulan</label>
                        <input type="text" name="tanggal-single" id="datepicker-3" class="form-control w-lg-50" placeholder="Bulan, Tahun" onchange="javascript:document.getElementById('tanggal-single').value = this.value" value="<?= (!empty($_POST["tanggal-single"])) ? $_POST["tanggal-single"] : "" ?>" required>

                        <div class="text-center">
                            <button type="submit" name="preview" value="single-month" class="btn bg-gradient-info w-100 mt-4"><i class="fas fa-search"></i> Preview</button>
                        </div>
                    </form>
                    <form action="ekspor-pdf/arsip-surat.php" method="GET">
                        <input type="hidden" id="tanggal-single" name="tanggal" value="<?= (!empty($_POST["tanggal-single"])) ? $_POST["tanggal-single"] : "" ?>">

                        <div class="text-center">
                            <button type="submit" name="by" value="month" class="btn bg-gradient-warning w-100"><i class="far fa-file-pdf"></i> Download PDF</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-4 col-md-6 mb-4">
        <div class="card">
            <div class="card-header pb-0">
                <div class="row">
                    <div class="col-lg-8 col-10">
                        <h6>Cari Arsip Surat</h6>
                        <p class="text-sm mb-0">
                            Berdasarkan <span class="font-weight-bold ms-1">Multi bulan</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="card-body px-0 pb-0">
                <div class="container m-0 pb-4">
                    <form action="?page=laporan-arsip-surat" method="POST">
                        <label>Pilih Bulan Awal</label>
                        <input type="text" name="tanggal-multi-awal" id="datepicker-4" class="form-control w-lg-50" placeholder="Bulan Awal" onchange="javascript:document.getElementById('tanggal-multi-awal').value = this.value" value="<?= (!empty($_POST["tanggal-multi-awal"])) ? $_POST["tanggal-multi-awal"] : "" ?>" required>

                        <label class="mt-3">Pilih Bulan Akhir</label>
                        <input type="text" name="tanggal-multi-akhir" id="datepicker-5" class="form-control w-lg-50" placeholder="Bulan Akhir" onchange="getLastDate(this.value)" value="<?= (!empty($_POST["tanggal-multi-akhir"])) ? $_POST["tanggal-multi-akhir"] : "" ?>" required>

                        <div class="text-center">
                            <button type="submit" name="preview" value="multi-month" class="btn bg-gradient-info w-100 mt-4"><i class="fas fa-search"></i> Preview</button>
                        </div>
                    </form>
                    <form action="ekspor-pdf/arsip-surat.php" method="GET">
                        <input type="hidden" id="tanggal-multi-awal" name="tanggal-multi-awal" value="<?= (!empty($_POST["tanggal-multi-awal"])) ? $_POST["tanggal-multi-awal"] : "" ?>">
                        <input type="hidden" id="tanggal-multi-akhir" name="tanggal-multi-akhir" value="<?= (!empty($_POST["tanggal-multi-akhir"])) ? $_POST["tanggal-multi-akhir"] : "" ?>">

                        <div class="text-center">
                            <button type="submit" name="by" value="multi-month" class="btn bg-gradient-warning w-100"><i class="far fa-file-pdf"></i> Download PDF</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-12 col-md-12">
        <?php
        if (isset($_POST["preview"])) {
            if ($_POST["preview"] == "multi-month") {
                $tanggal_query_awal = $_POST["tanggal-multi-awal"];
                $tanggal_query_akhir = $_POST["tanggal-multi-akhir"];
                $month_year = "";
                $title_table = "Berdasarkan Multi Bulan : " . format_tanggal($tanggal_query_awal)[1] . ' ' . format_tanggal($tanggal_query_awal)[2] . ' - ' . format_tanggal($tanggal_query_akhir)[1] . ' ' . format_tanggal($tanggal_query_akhir)[2];
                $arsip_surat = $run_query->get_arsip_surat_by_multi_month($tanggal_query_awal, $tanggal_query_akhir);
            } else if ($_POST["preview"] == "filter-npk") {
                $month_year = "";
                $title_table = "Berdasarkan Filter : " . $_POST['filter-npk'];
                (is_numeric($_POST["filter-npk"])) ? $arsip_surat = $run_query->get_arsip_surat_by_filter_ket($_POST["filter-npk"]) : $arsip_surat = $run_query->get_arsip_surat_by_filter_np($_POST["filter-npk"]);
            } else if ($_POST["preview"] == "single-month") {
                $tanggal_query = $_POST["tanggal-single"];
                $month_year = format_tanggal($tanggal_query)[1] . " " . format_tanggal($tanggal_query)[2];
                $title_table = "";
                $arsip_surat = $run_query->get_arsip_surat_by_single_date(format_tanggal($tanggal_query)[3], format_tanggal($tanggal_query)[2]);
            }
        } else {
            $tanggal_query = date('Y-m-d');
            $month_year = format_tanggal($tanggal_query)[1] . " " . format_tanggal($tanggal_query)[2];
            $title_table = "";
            $arsip_surat = $run_query->get_arsip_surat_by_single_date(format_tanggal($tanggal_query)[3], format_tanggal($tanggal_query)[2]);
        }

        include "layout/components/tabel_arsip_surat_tindak_lanjut.php";
        ?>
    </div>
</div>

<script>
    $("#datepicker").datepicker({
        format: "yyyy-mm-dd",
        startView: "months",
        minViewMode: "months"
    });
    $("#datepicker-2").datepicker({
        format: "yyyy-mm-dd",
        startView: "months",
        minViewMode: "months"
    });
    $("#datepicker-3").datepicker({
        format: "yyyy-mm-dd",
        startView: "months",
        minViewMode: "months"
    });
    $("#datepicker-4").datepicker({
        format: "yyyy-mm-dd",
        startView: "months",
        minViewMode: "months"
    });
    $("#datepicker-5").datepicker({
        format: "yyyy-mm-dd",
        startView: "months",
        minViewMode: "months"
    });

    function getLastDate(valuex) {
        var dateform = $("#datepicker-5").datepicker('getDate');
        var selectedMonth = dateform.getMonth();
        var selectedYear = dateform.getFullYear();

        var lastDate = new Date(selectedYear, selectedMonth + 1, 0);

        var year = lastDate.toLocaleString("default", {
            year: "numeric"
        });
        var month = lastDate.toLocaleString("default", {
            month: "2-digit"
        });
        var day = lastDate.toLocaleString("default", {
            day: "2-digit"
        });

        // Generate yyyy-mm-dd date string
        var formattedDate = year + "-" + month + "-" + day;

        document.getElementById('datepicker-5').value = formattedDate;
        document.getElementById('tanggal-multi-akhir').value = formattedDate;
    }
</script>