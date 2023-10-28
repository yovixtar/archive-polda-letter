<div class="row my-4">

    <div class="col-lg-4 col-md-6 mb-md-3 mb-4">
        <div class="card">
            <div class="card-header pb-0">
                <div class="row">
                    <div class="col-lg-8 col-10">
                        <h6>Tambah Substansi</h6>
                        <p class="text-sm mb-0">
                            Form <span class="font-weight-bold ms-1">Tambah Substansi</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="card-body px-0 pb-0">
                <div class="container m-0 pb-4">
                    <form action="?page=sublist&acc=tambah-substansi" method="post">
                        <label>Nama Substansi</label>
                        <input type="text" name="substansi" class="form-control" placeholder="Nama Substansi" required>
                        <button type="submit" class="btn bg-gradient-success w-100 mt-3"><i class="fas fa-plus"></i> Tambah Substansi</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-6 mb-md-3 mb-4">
        <div class="card">
            <div class="card-header pb-0">
                <div class="row">
                    <div class="col-lg-8 col-10">
                        <h6>Tambah Sumber Surat</h6>
                        <p class="text-sm mb-0">
                            Form <span class="font-weight-bold ms-1">Tambah Sumber Surat</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="card-body px-0 pb-0">
                <div class="container m-0 pb-4">
                    <form action="?page=sublist&acc=tambah-sumber-surat" method="post">
                        <label>Nama Sumber Surat</label>
                        <input type="text" name="sumber-surat" class="form-control" placeholder="Nama Sumber Surat" required>
                        <button type="submit" class="btn bg-gradient-success w-100 mt-3"><i class="fas fa-plus"></i> Tambah Sumber Surat</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-6 mb-md-3 mb-4">
        <div class="card">
            <div class="card-header pb-0">
                <div class="row">
                    <div class="col-lg-8 col-10">
                        <h6>Tambah Polres</h6>
                        <p class="text-sm mb-0">
                            Form <span class="font-weight-bold ms-1">Tambah Polres</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="card-body px-0 pb-0">
                <div class="container m-0 pb-4">
                    <form action="?page=sublist&acc=tambah-polres" method="post">
                        <label>Nama Polres</label>
                        <input type="text" name="polres" class="form-control" placeholder="Nama Polres" required>
                        <button type="submit" class="btn bg-gradient-success w-100 mt-3"><i class="fas fa-plus"></i> Tambah Polres</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-4 col-md-4 mb-md-0 mb-4">
        <div class="card">
            <div class="card-header pb-0">
                <div class="row">
                    <div class="col-lg-6 col-7">
                        <h6>Daftar Substansi</h6>
                        <p class="text-sm mb-0">
                            <span class="font-weight-bold ms-1">Kategori</span> Surat
                        </p>
                    </div>
                </div>
            </div>
            <div class="card-body px-0 pb-2">
                <div class="table-responsive">
                    <table class="table align-items-center mb-0">
                        <thead>
                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nama Substansi</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $nomor = 1;
                            $substansi = $run_query->get_substansi();
                            foreach ($substansi as $result) {
                            ?>
                                <tr>
                                    <td style="padding-left: 30px;">
                                        <h6 class="mb-0 text-sm"><?= $nomor ?></h6>
                                    </td>
                                    <td>
                                        <h6 class="mb-0 text-sm"><?= $result["name"] ?></h6>
                                    </td>
                                    <td>
                                        <button type="submit" name="submit" class="btn bg-gradient-danger m-0" title="Delete" onclick="return confirm_delete_substansi(<?= $result['id'] ?>)"><i class="fas fa-trash-alt"></i></button>
                                    </td>
                                </tr>
                            <?php
                                $nomor++;
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-4 mb-md-0 mb-4">
        <div class="card">
            <div class="card-header pb-0">
                <div class="row">
                    <div class="col-lg-6 col-7">
                        <h6>Daftar Petugas</h6>
                        <p class="text-sm mb-0">
                            <span class="font-weight-bold ms-1">Sumber</span> Surat
                        </p>
                    </div>
                </div>
            </div>
            <div class="card-body px-0 pb-2">
                <div class="table-responsive">
                    <table class="table align-items-center mb-0">
                        <thead>
                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nama Petugas</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $nomor = 1;
                            $substansi = $run_query->get_sumber_surat();
                            foreach ($substansi as $result) {
                            ?>
                                <tr>
                                    <td style="padding-left: 30px;">
                                        <h6 class="mb-0 text-sm"><?= $nomor ?></h6>
                                    </td>
                                    <td>
                                        <h6 class="mb-0 text-sm"><?= $result["name"] ?></h6>
                                    </td>
                                    <td>
                                        <button type="submit" name="submit" class="btn bg-gradient-danger m-0" title="Delete" onclick="return confirm_delete_sumber_surat(<?= $result['id'] ?>)"><i class="fas fa-trash-alt"></i></button>
                                    </td>
                                </tr>
                            <?php
                                $nomor++;
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-4 mb-md-0 mb-4">
        <div class="card">
            <div class="card-header pb-0">
                <div class="row">
                    <div class="col-lg-12 col-7">
                        <h6>Daftar PolRes</h6>
                        <p class="text-sm mb-0">
                            <span class="font-weight-bold ms-1">Kepolisian Resor</span> Jawa Tengah
                        </p>
                    </div>
                </div>
            </div>
            <div class="card-body px-0 pb-2">
                <div class="table-responsive">
                    <table class="table align-items-center mb-0">
                        <thead>
                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nama Polres</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $nomor = 1;
                            $polres = $run_query->get_polres();
                            foreach ($polres as $result) {
                            ?>
                                <tr>
                                    <td style="padding-left: 30px;">
                                        <h6 class="mb-0 text-sm"><?= $nomor ?></h6>
                                    </td>
                                    <td>
                                        <h6 class="mb-0 text-sm"><?= $result["name"] ?></h6>
                                    </td>
                                    <td>
                                        <button type="submit" name="submit" class="btn bg-gradient-danger m-0" title="Delete" onclick="return confirm_delete_polres(<?= $result['id'] ?>)"><i class="fas fa-trash-alt"></i></button>
                                    </td>
                                </tr>
                            <?php
                                $nomor++;
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- Delete Substansi modal -->
<div class="modal fade" id="modal-delete-substansi" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Yakin hapus Substansi ?</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="?page=sublist&acc=hapus-substansi" method="POST">
                <div class="modal-body">
                    <p>Data akan terhapus permanen!</p>
                    <input type="hidden" name="substansi_id" value="" id="delete-substansi-id">
                </div>
                <div class="modal-footer">
                    <span class="btn btn-secondary" data-bs-dismiss="modal">Close</span>
                    <button type="submit" name="submit" class="btn btn-danger">Yes, Hapus</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Delete Sumber Surat modal -->
<div class="modal fade" id="modal-delete-sumber-surat" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Yakin hapus Sumber Surat ?</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="?page=sublist&acc=hapus-sumber-surat" method="POST">
                <div class="modal-body">
                    <p>Data akan terhapus permanen!</p>
                    <input type="hidden" name="sumber_surat_id" value="" id="delete-sumber-surat-id">
                </div>
                <div class="modal-footer">
                    <span class="btn btn-secondary" data-bs-dismiss="modal">Close</span>
                    <button type="submit" name="submit" class="btn btn-danger">Yes, Hapus</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Delete polres modal -->
<div class="modal fade" id="modal-delete-polres" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Yakin hapus Polres ?</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="?page=sublist&acc=hapus-polres" method="POST">
                <div class="modal-body">
                    <p>Data akan terhapus permanen!</p>
                    <input type="hidden" name="polres_id" value="" id="delete-polres-id">
                </div>
                <div class="modal-footer">
                    <span class="btn btn-secondary" data-bs-dismiss="modal">Close</span>
                    <button type="submit" name="submit" class="btn btn-danger">Yes, Hapus</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    function confirm_delete_substansi(substansi_id) {
        var deleteModal = new bootstrap.Modal(document.getElementById('modal-delete-substansi'));
        document.getElementById('delete-substansi-id').value = substansi_id;
        deleteModal.show();
    }

    function confirm_delete_sumber_surat(sumber_surat_id) {
        var deleteModal = new bootstrap.Modal(document.getElementById('modal-delete-sumber-surat'));
        document.getElementById('delete-sumber-surat-id').value = sumber_surat_id;
        deleteModal.show();
    }

    function confirm_delete_polres(polres) {
        var deleteModal = new bootstrap.Modal(document.getElementById('modal-delete-polres'));
        document.getElementById('delete-polres-id').value = polres;
        deleteModal.show();
    }
</script>