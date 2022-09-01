<!-- main page content -->
<div class="main-container container">
    <div class="row mb-2">
        <div class="col-12 col-md-12 col-lg-12" style="margin-top: 60px;">
            <div class="card shadow-none bg-transparent">
                <div class="card-body tabcontent-wali" id="Tugas" style="padding: 6px 0px;">
                    <div class="row">
                        <div class="col-12">
                            <?php if ($result_fresh) : ?>
                                <?php foreach ($result_fresh as $row) : ?>
                                    <?php if ($row->status_ujian != true) {
                                        $css =  'berlangsung';
                                        $href = '#';
                                    } else {
                                        $css = NULL;
                                        $href = base_url('ujian/detail_ujian/' . $row->id_paket_ujian);
                                    } ?>
                                    <div class="card <?= $css; ?>mb-3">
                                        <a href="<?= $href; ?>" class=" card-body ujian">
                                            <span class="badge bg-time-exam py-2 px-3 text-danger size-8 fw-normal position-absolute top-0 end-0 rounded-15-start-bottom"><?= $row->jam_mulai; ?> - <?= $row->jam_selesai; ?></span>
                                            <div class="row pb-0 mt-1">
                                                <div class="col-auto">
                                                    <div class="avatar avatar-50 shadow-sm rounded-circle avatar-presensi-outline">
                                                        <div class="avatar avatar-40 rounded-circle avatar-presensi-inline">
                                                            <i class="fa-solid fa-book-bookmark size-20 text-white"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col align-self-center ps-0">
                                                    <p class="mb-0 size-15 fw-medium text-dark" style="width: 65%;"><?= tampil_text($row->nama_paket, 20); ?></p>
                                                    <p class="mb-0 size-12 fw-normal text-secondary"><?= tampil_text($row->nama_pelajaran, 20); ?> | <?= $row->nice_tanggal; ?></p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                <?php endforeach; ?>
                            <?php else : ?>
                                <?= vector_default('vector_ujian_kosong.svg', 'Tidak ada ujian aktif', 'Tidak ada ujian yang sedang berlangsung maupun belum mulai, silahkan hubungi pihak sekolah jika terjadi kesalahan!', 'vector_ujian') ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>

                <div class="card-body tabcontent-wali" id="Ujian" style="padding: 6px 0px;">
                    <div class="row">
                        <div class="col-12">
                            <?php if ($result_old) : ?>
                                <?php foreach ($result_old as $row) : ?>
                                    <?php if ($row->kode_status == 2) : ?>
                                        <a href="<?= base_url('ujian/pembahasan/' . $row->id_paket_ujian) ?>" class="card mb-3">
                                        <?php else : ?>
                                            <a href="#" class="card mb-3">
                                            <?php endif; ?>
                                            <div class="card-body ujian">
                                                <?php if ($row->kode_status < 1) {
                                                    $css = 'bg-history-exam-danger text-danger';
                                                } else {
                                                    $css = 'bg-history-exam text-success';
                                                } ?>
                                                    <span class="badge <?= $css; ?> py-2 px-3 size-8 fw-normal position-absolute top-0 end-0 rounded-15-start-bottom"><?= $row->status; ?></span>
                                                    <div class="row pb-0 mt-1">
                                                        <div class="col-auto">
                                                            <div class="avatar avatar-50 shadow-sm rounded-circle avatar-presensi-outline">
                                                                <div class="avatar avatar-40 rounded-circle avatar-presensi-inline">
                                                                    <i class="fa-solid fa-book-bookmark size-20 text-white"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col align-self-center ps-0">
                                                            <p class="mb-0 size-15 fw-medium" style="width: 65%;"><?= tampil_text($row->nama_paket, 20); ?></p>
                                                            <p class="mb-0 size-12 fw-normal text-secondary"><?= tampil_text($row->nama_pelajaran, 20); ?> | <?= $row->nice_tanggal; ?></p>
                                                        </div>
                                                    </div>
                                            </div>
                                            </a>
                                        <?php endforeach; ?>
                                    <?php else : ?>
                                        <?= vector_default('vector_riwayat_ujian_kosong.svg', 'Tidak ada riwayat ujian', 'Tidak ada riwayat ujian, silahkan hubungi pihak sekolah jika terjadi kesalahan!', 'vector_ujian') ?>
                                    <?php endif; ?>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
<!-- main page content ends -->