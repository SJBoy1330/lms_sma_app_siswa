<!-- main page content -->
<div class="main-container container">
    <div class="row mb-2">
        <div class="col-12 col-md-12 col-lg-12" style="margin-top: 60px;">
            <div class="card shadow-none bg-transparent">
                <div class="card-body tabcontent-wali" id="Tugas" style="padding: 6px 0px;">
                    <div class="row">
                        <div class="col-6 mb-3 jadwal pe-1">
                            <div class="card">
                                <div class="card-body detail-ujian pt-3 mb-2">
                                    <div class="row flex-column">
                                        <div class="col-auto">
                                            <div class="avatar avatar-50 shadow-sm rounded-circle avatar-presensi-outline">
                                                <div class="avatar avatar-40 rounded-circle avatar-presensi-inline">
                                                    <i class="fa-solid fa-book-bookmark size-22 text-white"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col align-self-center ps-3 mt-2">
                                            <p class="mb-0 fw-medium text-dark size-14">Nama Paket Ujian</p>
                                            <p class="mb-0 text-secondary size-13"><?= $result->nama; ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 mb-3 jadwal ps-1">
                            <div class="card">
                                <div class="card-body detail-ujian pt-3 mb-2">
                                    <div class="row flex-column">
                                        <div class="col-auto">
                                            <div class="avatar avatar-50 shadow-sm rounded-circle avatar-presensi-outline">
                                                <div class="avatar avatar-40 rounded-circle avatar-presensi-inline">
                                                    <i class="fa-brands fa-stack-overflow size-22 text-white"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col align-self-center ps-3 mt-2">
                                            <p class="mb-0 fw-medium text-dark size-14">Nama Pelajaran</p>
                                            <p class="mb-0 text-secondary size-13"><?= $result->nama_pelajaran; ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 mb-3 jadwal pe-1">
                            <div class="card">
                                <div class="card-body detail-ujian pt-3 mb-2">
                                    <div class="row flex-column">
                                        <div class="col-auto">
                                            <div class="avatar avatar-50 shadow-sm rounded-circle avatar-presensi-outline">
                                                <div class="avatar avatar-40 rounded-circle avatar-presensi-inline">
                                                    <i class="fa-solid fa-timer size-20 text-white"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col align-self-center ps-3 mt-2">
                                            <p class="mb-0 fw-medium text-dark size-14">Waktu Ujian</p>
                                            <p class="mb-0 text-secondary size-13"><?= $result->waktu; ?> Menit</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 mb-3 jadwal ps-1">
                            <div class="card">
                                <div class="card-body detail-ujian pt-3 mb-2">
                                    <div class="row flex-column">
                                        <div class="col-auto">
                                            <div class="avatar avatar-50 shadow-sm rounded-circle avatar-presensi-outline">
                                                <div class="avatar avatar-40 rounded-circle avatar-presensi-inline">
                                                    <i class="fa-solid fa-clipboard-question size-22 text-white"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col align-self-center ps-3 mt-2">
                                            <p class="mb-0 fw-medium text-dark size-14">Jumlah Soal</p>
                                            <p class="mb-0 text-secondary size-13"><?= $result->jumlah_soal; ?> Soal</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2 mx-1">
                        <a href="<?= base_url('ujian/exam'); ?>" class="btn btn-block btn-md btn-danger btn-detail-tugas">Mulai Ujian</a>
                    </div>
                </div>

                <div class="card-body tabcontent-wali" id="Ujian" style="padding: 6px 0px;">
                    <?php if (json_decode($result->instruksi)) : ?>
                        <div class="row">
                            <div class="col-12">
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <?php foreach (json_decode($result->instruksi) as $row) : ?>
                                            <div class="row mt-2">
                                                <div class="col-auto">
                                                    <i class="fa-solid fa-circle" style="color: #ec3528;"></i>
                                                </div>
                                                <div class="col align-self-center ps-0">
                                                    <p class="mb-0 size-15 text-dark fw-normal"><?= $row; ?></p>
                                                </div>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php else : ?>
                        <?= vector_default('vector_ujian_kosong.svg', 'Tidak ada instruksi', 'Tidak terdapat instruksi untuk ujian ini, silahkan hubungi pihak sekolah jika terjadi kesalahan!') ?>
                    <?php endif; ?>
                </div>

            </div>
        </div>
    </div>

</div>
<!-- main page content ends -->