<div class="row my-4">
    <div class="col-lg-4 col-md-6">
        <div class="mb-md-3 mb-4">
            <div class="card">
                <div class="card-header pb-0">
                    <div class="row">
                        <div class="col-lg-8 col-10">
                            <h6>Tambah Arsip Surat</h6>
                            <p class="text-sm mb-0">
                                Form <span class="font-weight-bold ms-1">Tambah Arsip Surat</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card-body px-0 pb-0">
                    <div class="container m-0 pb-4">
                        <div class="text-center">
                            <a href="?page=form-arsip-surat&form=tambah">
                                <button type="button" class="btn bg-gradient-success w-100"><i class="fas fa-plus"></i> Tambah Arsip Surat</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-12">
        <?php
        $tanggal_query = date('Y-m-d');
        $month_year = format_tanggal($tanggal_query)[1] . " " . format_tanggal($tanggal_query)[2];
        $title_table = "";
        $arsip_surat = $run_query->get_arsip_surat_by_single_date(format_tanggal($tanggal_query)[3], format_tanggal($tanggal_query)[2]);


        include "layout/components/tabel_arsip_surat_tindak_lanjut.php";
        ?>
    </div>
</div>