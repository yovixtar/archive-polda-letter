    <div class="row">
        <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-capitalize font-weight-bold">Arsip Bulan ini</p>
                                <h5 class="font-weight-bolder mb-0">
                                    <?php
                                    foreach ($run_query->get_amount_bulan_ini() as $result) {
                                        echo (!empty($result["amount_all"])) ? $result["amount_all"] : "0";
                                    }
                                    ?>
                                </h5>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                <i class="fas fa-archive"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-capitalize font-weight-bold">Arsip Tahun Ini</p>
                                <h5 class="font-weight-bolder mb-0">
                                <?php
                                    foreach ($run_query->get_amount_tahun_ini() as $result) {
                                        echo (!empty($result["amount_all"])) ? $result["amount_all"] : "0";
                                    }
                                    ?>
                                </h5>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md"> <i class="fas fa-archive"></i>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-sm-6">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-capitalize font-weight-bold">Total Arsip</p>
                                <h5 class="font-weight-bolder mb-0">
                                <?php
                                    foreach ($run_query->get_all_amount_surat_no_date() as $result) {
                                        echo (!empty($result["amount_all"])) ? $result["amount_all"] : "0";
                                    }
                                    ?>
                                </h5>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md"> <i class="fas fa-archive"></i>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div style="height: 60vh;"></div>