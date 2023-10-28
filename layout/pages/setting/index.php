<div class="row my-4">
    <div class="col-lg-4 col-md-6">
        <div class="col-lg-12 col-md-6 mb-md-0 mb-4">
            <div class="card">
                <div class="card-header pb-0">
                    <div class="row">
                        <div class="col-lg-12 col-10">
                            <h6>Setting Akun</h6>
                            <p class="text-sm mb-0">
                                Ganti <span class="font-weight-bold ms-1">Username dan Password</span> Admin
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card-body px-0 pb-0">
                    <div class="container m-0 pb-4">
                        <form action="?page=setting&acc=ganti-akun" method="POST">

                            <label>Username Lama</label>
                            <input type="text" name="username-old" class="form-control" placeholder="Username Sekarang" required>
                            <label>Password Lama</label>
                            <input type="password" name="password-old" class="form-control" placeholder="Password Sekarang" required>

                            <label class="mt-4">Username Baru</label>
                            <input type="text" name="username-new" class="form-control" placeholder="Username Baru" required>
                            <label>Password Baru</label>
                            <input type="password" name="password-new" class="form-control" placeholder="Password Baru" required>

                            <div class="text-center">
                                <button type="submit" name="submit" class="btn bg-gradient-success w-100 mt-4"><i class="fas fa-save"></i> Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-6">
        <div class="col-lg-12 col-md-6 mb-md-0 mb-4">
            <div class="card">
                <div class="card-header pb-0">
                    <div class="row">
                        <div class="col-lg-12 col-10">
                            <h6>Setting Tanda Tangan</h6>
                            <p class="text-sm mb-0">
                                Untuk <span class="font-weight-bold ms-1">Arsip Surat / Tindak Lanjut</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card-body px-0 pb-0">
                    <div class="container m-0 pb-4">
                        <form action="?page=setting&acc=ganti-signature" method="POST">
                            <input type="hidden" name="id" value="1">
                            <?php
                            $signature = $run_query->get_signature("1");
                            foreach ($signature as $result_signature) {
                            ?>
                                <label>Nama</label>
                                <input type="text" name="name" class="form-control" value="<?= $result_signature["name"] ?>" required>
                                <label>Nomor ID</label>
                                <input type="text" name="nrp" class="form-control" value="<?= $result_signature["nrp"] ?>" required>
                            <?php } ?>
                            <div class="text-center">
                                <button type="submit" name="submit" class="btn bg-gradient-success w-100 mt-4"><i class="fas fa-save"></i> Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>