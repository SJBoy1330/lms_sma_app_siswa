<!-- main page content -->
<div class="main-container container top-20">
    <div class="row">
        <div class="col-12">
            <div class="card mb-3">
                <div class="card-body">
                    <div class="row">
                        <div class="col-auto pe-2">
                            <div class="avatar avatar-46 shadow-sm rounded-15 avatar-presensi-outline">
                                <div class="avatar avatar-36 rounded-12 avatar-presensi-inline">
                                    <i class="fa-brands fa-stack-overflow size-22 text-white"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col align-self-center ps-0">
                            <p class="mb-0 size-12 fw-normal text-muted text-secondary">Mata Pelajaran</p>
                            <p class="mb-0 size-14 fw-normal"><?= ifnull($result->detail->nama_pelajaran, ' - '); ?></p>
                        </div>
                    </div>
                    <div class="row mt-3 flex-wrap">
                        <div class="col-auto pe-2">
                            <div class="avatar avatar-46 shadow-sm rounded-15 avatar-presensi-outline">
                                <div class="avatar avatar-36 rounded-12 avatar-presensi-inline">
                                    <i class="fa-regular fa-chart-bar size-20 text-white"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col align-self-center ps-0 pe-0">
                            <p class="mb-0 size-12 fw-normal text-muted text-secondary">Bab Pelajaran</p>
                            <p class="mb-0 size-13 fw-normal"><?= ifnull($result->detail->jumlah_bab, 0); ?> Bab</p>
                        </div>

                        <div class="col-auto ps-0 pe-2">
                            <div class="avatar avatar-46 shadow-sm rounded-15 avatar-presensi-outline">
                                <div class="avatar avatar-36 rounded-12 avatar-presensi-inline" style="line-height: 39px;">
                                    <i class="fa-solid fa-book-open-cover size-20 text-white"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col align-self-center ps-0">
                            <p class="mb-0 size-12 fw-normal text-muted text-secondary">Materi Pelajaran</p>
                            <p class="mb-0 size-13 fw-normal"><?= ifnull($result->detail->jumlah_materi, 0); ?> Materi</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row g-0">
        <?php if ($result->result) : ?>
            <?php foreach ($result->result as $row) : ?>
                <div class="col-12 mb-3">
                    <div class="accordion accordion-flush shadow-sm p-0" id="accordionFlushExample" style="border-radius: 10px;">
                        <div class="accordion-item" style="border-radius: 10px;">
                            <h2 class="accordion-header" id="flush-bab-<?= $row->id_bab; ?>">
                                <button class="accordion-button collapsed text-wrap" type="button" data-bs-toggle="collapse" data-bs-target="#bab-<?= $row->id_bab; ?>" aria-expanded="false" aria-controls="bab-<?= $row->id_bab; ?>" style="border-radius: 10px;">
                                    <div class="row">
                                        <div class="col-auto">
                                            <div class="avatar avatar-46 shadow-sm rounded-15 avatar-presensi-outline">
                                                <div class="avatar avatar-36 rounded-12 avatar-presensi-inline">
                                                    <i class="fa-regular fa-chart-bar size-20 text-white"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col align-self-center ps-0">
                                            <p class="mb-1 size-12 fw-normal text-muted text-secondary">Bab Pelajaran</p>
                                            <p class="mb-0 size-14 fw-normal"><?= $row->nama_bab; ?></p>
                                        </div>
                                    </div>
                                </button>
                            </h2>
                            <div id="bab-<?= $row->id_bab; ?>" class="accordion-collapse collapse" aria-labelledby="flush-bab-<?= $row->id_bab; ?>" data-bs-parent="#accordionFlushExample">

                                <?php if ($row->materi) : ?>
                                    <?php foreach ($row->materi as $materi) : ?>
                                        <div class="accordion-body size-11">
                                            <a href="<?= base_url('materi/detail_materi/' . $materi->id_materi); ?>" class="row d-flex text-dark">
                                                <div class="col-auto">
                                                    <div class="avatar avatar-46 shadow-sm rounded-circle avatar-presensi-outline">
                                                        <div class="avatar avatar-36 rounded-circle avatar-presensi-inline" style="line-height: 39px;">
                                                            <i class="fa-solid fa-book-open-cover size-16 text-white"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col align-self-center ps-0">
                                                    <p class="mb-0 size-12 fw-normal text-muted text-secondary">Materi Pelajaran</p>
                                                    <p class="mb-0 size-14 fw-normal"><?= $materi->judul; ?></p>
                                                </div>
                                            </a>
                                        </div>
                                    <?php endforeach; ?>
                                <?php else : ?>
                                    <?= vector_default('vector_kbm_kosong.svg', 'Tidak ada materi', 'Sekolah belum menyediakan materi untuk anda, hubungi guru anda atau pihak sekolah jika terjadi kesalahan!') ?>
                                <?php endif; ?>

                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else : ?>
            <?= vector_default('vector_bab_kosong.svg', 'Tidak ada bab', 'Tidak ada data Bab dan Materi tersedia, hubungi admin sekolah jika terjadi kesalahan!'); ?>
        <?php endif; ?>
    </div>
</div>
<!-- main page content ends -->