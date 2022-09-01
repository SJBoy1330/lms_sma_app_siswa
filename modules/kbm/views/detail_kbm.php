<!-- main page content -->
<div class="main-container container top-20">
    <div class="row mt-3">
        <div class="col-12 col-md-10 col-lg-8 mx-auto">
            <div class="row">
                <div class="col-6 mx-auto">
                    <div class="card mb-3">
                        <div class="col-auto position-absolute avatar-detail-kbm">
                            <div class="avatar avatar-50 shadow-sm rounded-18 avatar-presensi-outline">
                                <div class="avatar avatar-40 rounded-15 avatar-presensi-inline">
                                    <i class="fa-solid fa-building-user size-18 text-white"></i>
                                </div>
                            </div>
                        </div>
                        <div class="card-body detail-kbm">
                            <div class="row">
                                <div class="col align-self-center ps-4 text-detail-kbm">
                                    <p class="mb-0 size-15 fw-medium">Kelas</p>
                                    <p class="fw-normal text-secondary size-12"><?= ifnull(tampil_text($result->detail->nama_kelas, 25), ' - '); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 mx-auto">
                    <div class="card mb-3">
                        <div class="col-auto position-absolute avatar-detail-kbm">
                            <div class="avatar avatar-50 shadow-sm rounded-18 avatar-presensi-outline">
                                <div class="avatar avatar-40 rounded-15 avatar-presensi-inline">
                                    <i class="fa-brands fa-stack-overflow size-22 text-white"></i>
                                </div>
                            </div>
                        </div>
                        <div class="card-body detail-kbm">
                            <div class="row">
                                <div class="col align-self-center ps-4 text-detail-kbm">
                                    <p class="mb-0 size-14 fw-medium">Mata Pelajaran</p>
                                    <p class="fw-normal text-secondary size-12"><?= ifnull(tampil_text($result->detail->nama_pelajaran, 25), ' - '); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row my-4">
                <div class="col-6 mx-auto">
                    <div class="card mb-3">
                        <div class="col-auto position-absolute avatar-detail-kbm">
                            <div class="avatar avatar-50 shadow-sm rounded-18 avatar-presensi-outline">
                                <div class="avatar avatar-40 rounded-15 avatar-presensi-inline">
                                    <i class="fa-solid fa-chalkboard-user size-20 text-white"></i>
                                </div>
                            </div>
                        </div>
                        <div class="card-body detail-kbm">
                            <div class="row">
                                <div class="col align-self-center ps-4 text-detail-kbm">
                                    <p class="mb-0 size-15 fw-medium">Guru</p>
                                    <p class="fw-normal text-secondary size-12"><?= ifnull(tampil_texT($result->detail->nama_staf, 25), ' - '); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 mx-auto">
                    <div class="card mb-3">
                        <div class="col-auto position-absolute avatar-detail-kbm">
                            <div class="avatar avatar-50 shadow-sm rounded-18 avatar-presensi-outline">
                                <div class="avatar avatar-40 rounded-15 avatar-presensi-inline">
                                    <i class="fa-solid fa-calendar-week size-20 text-white"></i>
                                </div>
                            </div>
                        </div>
                        <div class="card-body detail-kbm">
                            <div class="row">
                                <div class="col align-self-center ps-4 text-detail-kbm">
                                    <p class="mb-0 size-15 fw-medium">Tanggal</p>
                                    <p class="fw-normal text-secondary size-12"><?= $tanggal; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mb-4">
                <div class="col-8 pe-0">
                    <?php if ($result->result != NULL && $result->result->link != NULL) : ?>
                        <a href="<?= $result->result->link; ?>" class="card mb-3">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-auto">
                                        <div class="avatar avatar-50 shadow-sm rounded-18 avatar-presensi-outline">
                                            <div class="avatar avatar-40 rounded-15 avatar-presensi-inline">
                                                <i class="fa-solid fa-circle-video size-22 text-white"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-auto align-self-center ps-0">
                                        <p class="mb-0 size-13 fw-medium"><?= $result->result->provider; ?></p>
                                        <div class="jam-presensi-2">
                                            <p class="mb-0 text-white size-13">Live</p>
                                        </div>
                                        <p class="mb-0 size-12 fw-normal text-primary">Gabung Sekarang</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    <?php else : ?>
                        <a class="card mb-3">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-auto">
                                        <div class="avatar avatar-50 shadow-sm rounded-18 avatar-presensi-outline-disabled">
                                            <div class="avatar avatar-40 rounded-15 avatar-presensi-inline-disabled">
                                                <i class="fa-solid fa-circle-video size-22 text-white"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-auto align-self-center ps-0">
                                        <p class="mb-0 size-13 fw-medium color-8F8F8F">Meet Online</p>
                                        <p class="mb-0 size-12 fw-normal text-danger">Tidak ada meet online</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    <?php endif; ?>
                </div>
                <?php if ($result->result->chat != NULL && $result->result->chat != 'N') : ?>
                    <!-- ini enabled -->
                    <div class="col-4 d-flex justify-content-center align-items-center">
                        <div class="card card-chatting mb-3">
                            <div class="card-body">
                                <div class="row d-flex justify-content-center align-items-center">
                                    <div class="col-auto">
                                        <a href="<?= base_url('qna/chatting_grup/' . $result->result->id_chat . '?tanggal=' . date('Y-m-d', strtotime($result->result->tanggal))); ?>" class="avatar avatar-50 rounded-15 avatar-presensi-inline">
                                            <i class="fa-regular fa-messages size-22 text-white"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php else : ?>
                    <!-- INI DISABLED -->
                    <div class="col-4 d-flex justify-content-center align-items-center">
                        <div class="card card-chatting mb-3">
                            <div class="card-body">
                                <div class="row d-flex justify-content-center align-items-center">
                                    <div class="col-auto">
                                        <a href="#" class="avatar avatar-50 rounded-15 avatar-presensi-inline-disabled">
                                            <i class="fa-regular fa-messages size-22 text-white"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
            <?php if ($result->result) : ?>
                <?php if ($result->result->materi) : ?>
                    <div class="row">
                        <div class="col-12">
                            <p class="mb-1 title-detail-kbm-judul">Materi hari ini</p>
                        </div>
                        <div class="col-12">
                            <?php foreach ($result->result->materi as $row) : ?>
                                <a href="<?= base_url('materi/detail_materi/' . $row->id_materi . '?redirect=true') ?>" class="card mb-3">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-auto">
                                                <div class="avatar avatar-50 shadow-sm rounded-18 avatar-presensi-outline">
                                                    <div class="avatar avatar-40 rounded-15 avatar-presensi-inline" style="line-height: 44px;">
                                                        <i class="fa-solid fa-book-open-cover size-18 text-white"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col align-self-center px-0">
                                                <p class="mb-0 size-14 fw-normal"><?= tampil_text($row->judul, 25); ?></p>
                                                <p class="mb-0 size-13 fw-normal text-secondary"><?= tampil_text($row->bab, 35); ?></p>
                                            </div>
                                            <div class="col-auto align-self-center">
                                                <button class="btn btn-md btn-link"><i class="fa-solid fa-chevron-right size-26 text-dark"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endif; ?>

            <?php endif; ?>
            <?php if ($result->tugas) : ?>
                <div class="row">
                    <div class="col-12">
                        <p class="mb-1 title-detail-kbm-judul">Tugas hari ini</p>
                    </div>
                    <div class="col-12">
                        <?php foreach ($result->tugas as $row) : ?>
                            <a href="<?= base_url('tugas/detail_tugas/' . $row->id_tugas) ?>" class="card mb-3">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-auto">
                                            <div class="avatar avatar-50 shadow-sm rounded-18 avatar-presensi-outline">
                                                <div class="avatar avatar-40 rounded-15 avatar-presensi-inline" style="line-height: 44px;">
                                                    <i class="fa-solid fa-book-open-cover size-18 text-white"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col align-self-center px-0">
                                            <p class="mb-0 size-14 fw-normal"><?= tampil_text($row->nama, 25); ?></p>
                                            <p class="mb-0 size-13 fw-normal text-secondary"><?= tampil_text($row->keterangan, 35); ?></p>
                                        </div>
                                        <div class="col-auto align-self-center">
                                            <button class="btn btn-md btn-link"><i class="fa-solid fa-chevron-right size-26 text-dark"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>
<!-- main page content ends -->