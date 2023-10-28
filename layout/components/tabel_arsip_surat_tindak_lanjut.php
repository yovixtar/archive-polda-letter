<div class="col-lg-12 col-md-12 mb-md-0 mb-4">
    <div class="card">
        <div class="card-header pb-0">
            <div class="row">
                <div class="col-lg-6 col-7">
                    <h6>Daftar Arsip Surat Tindak Lanjut</h6>
                    <h6 class="mb-0"><?= $title_table ?></h6>
                    <p class="text-sm mb-0 mt-0">
                        <?= (!empty($month_year)) ? 'Bulan <span class="font-weight-bold ms-1">' . $month_year . '</span>' : "" ?>
                    </p>
                </div>
            </div>
        </div>
        <div class="card-body px-0 pb-2">
            <div class="table-responsive">
                <table class="table align-items-center mb-0">
                    <thead>
                        <tr>
                            <?php if ($_GET['page'] == "cari-arsip-surat") { ?>
                                <th class="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7">Aksi</th>
                            <?php } ?>
                            <th class="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7">Ket</th>
                            <th class="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7">Nomor Surat</th>
                            <th class="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7">Pelapor / Terlapor</th>
                            <th class="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7">Jenis Masalah</th>
                            <th class="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7">Status</th>
                            <th class="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7">Substansi</th>
                            <th class="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7">Jawaban ke Pengadu</th>
                            <th class="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7">Jawaban Polres</th>
                            <th class="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7">Surat ke Satker</th>
                            <th class="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7">Bukti</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($arsip_surat as $result_arsip_surat) {
                        ?>
                            <tr>
                                <?php if ($_GET['page'] == "cari-arsip-surat") { ?>
                                    <td>
                                        <button type="button" class="btn bg-gradient-danger m-0" title="Delete" onclick="return confirm_delete_sumber(<?= $result_arsip_surat['id_arsip_surat'] ?>)"><i class="fas fa-trash-alt"></i></button>
                                        <a href="?page=form-arsip-surat&form=update&idx=<?= $result_arsip_surat["id_arsip_surat"] ?>">
                                            <button type="button" class="btn bg-gradient-info m-0" title="Update"><i class="fas fa-pen-alt"></i></button>
                                        </a>
                                    </td>
                                <?php } ?>
                                <td>
                                    <h6 class="mb-0 text-sm text-center"><?= $result_arsip_surat["keterangan"] ?></h6>
                                </td>
                                <td>
                                    <h6 class="mb-0 text-sm text-center"><?= $result_arsip_surat["nomor_surat"] . "<br /> Tgl." . date_format(date_create($result_arsip_surat["tanggal_surat"]), "d-m-Y") ?></h6>
                                </td>
                                <td>
                                    <h6 class="mb-0 text-sm text-center"><?= $result_arsip_surat["pelapor"] . " / " . $result_arsip_surat["name_polres"] ?></h6>
                                </td>
                                <td>
                                    <h6 class="mb-0 text-sm text-center"><?= $result_arsip_surat["jenis_masalah"] ?></h6>
                                </td>
                                <td>
                                    <h6 class="mb-0 text-sm text-center"><?= $result_arsip_surat["status_surat"] ?></h6>
                                </td>
                                <td>
                                    <h6 class="mb-0 text-sm text-center"><?= ($result_arsip_surat["substansi_ket"] == "") ? "-" : $result_arsip_surat["substansi_ket"] ?></h6>
                                </td>
                                <td>
                                    <h6 class="mb-0 text-sm text-center"><?= ($result_arsip_surat["jawaban_pengadu"] == "") ? "-" :  $result_arsip_surat["jawaban_pengadu"] . "<br /> Tgl." . date_format(date_create($result_arsip_surat["tanggal_jawaban_pengadu"]), "d-m-Y") ?></h6>
                                </td>
                                <td>
                                    <h6 class="mb-0 text-sm text-center"><?= ($result_arsip_surat["jawaban_polres"] == "") ? "-" :  $result_arsip_surat["jawaban_polres"] . "<br /> Tgl." . date_format(date_create($result_arsip_surat["tanggal_jawaban_polres"]), "d-m-Y") ?></h6>
                                </td>
                                <td>
                                    <h6 class="mb-0 text-sm text-center"><?= ($result_arsip_surat["jawaban_satker"] == "") ? "-" :  $result_arsip_surat["jawaban_satker"] . "<br /> Tgl." . date_format(date_create($result_arsip_surat["tanggal_jawaban_satker"]), "d-m-Y") ?></h6>
                                </td>
                                <td>
                                    <?= ($result_arsip_surat['bukti'] != "") ? '<h6 class="mb-0 text-m mb-2"><a href="file-bukti/' . $result_arsip_surat['bukti'] . '" target="_blank"><span class="badge bg-gradient-secondary"><i class="fas fa-file-download"></i> Download</span></a></h6>' : '<h6 class="mb-0 text-sm text-center">-</h6>' ?>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


<!-- Vertically centered modal -->
<div class="modal fade" id="modal-delete-arsip-surat-by-id" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Yakin hapus Tindak Lanjut ?</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="?page=cari-arsip-surat&acc=delete-arsip-surat-by-id" method="POST">
                <div class="modal-body">
                    <p>Data akan terhapus permanen!</p>
                    <input type="hidden" name="id-tindak-lanjut" value="" id="delete-arsip-surat-by-id">
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
    function confirm_delete_sumber(idx) {
        var deleteModal = new bootstrap.Modal(document.getElementById('modal-delete-arsip-surat-by-id'));
        document.getElementById('delete-arsip-surat-by-id').value = idx;
        deleteModal.show();
    }
</script>