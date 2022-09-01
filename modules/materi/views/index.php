<!-- main page content -->
<div class="main-container container top-20">
    <div class="row">
        <div class="col-12">
            <?php if ($result) : ?>
                <?php foreach ($result as $row) : ?>
                    <a href="<?= base_url('materi/detail_bab/' . $row->id_pelajaran) ?>" class="card mb-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-auto">
                                    <div class="avatar avatar-50 shadow-sm rounded-18 avatar-presensi-outline">
                                        <div class="avatar avatar-40 rounded-15 avatar-presensi-inline">
                                            <i class="fa-brands fa-stack-overflow size-22 text-white"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col align-self-center ps-0">
                                    <p class="mb-0 size-14 fw-normal"><?= tampil_text($row->nama_pelajaran, 20); ?></p>
                                    <p class="mb-0 size-13 fw-normal text-muted text-secondary"><?= tampil_text($row->nama_staf, 20); ?></p>
                                </div>
                                <div class="col-auto align-self-center text-end ms-3">
                                    <button class="btn btn-md btn-link"><i class="fa-solid fa-chevron-right size-26 text-dark"></i></button>
                                </div>
                            </div>
                        </div>
                    </a>
                <?php endforeach; ?>
            <?php else : ?>
                <?= vector_default('vector_kbm_kosong.svg', 'Tidak ada mata pelajaran', 'Tidak ada mata pelajaran terkait, silahkan coba lagi nanti atau hubungi admin') ?>
            <?php endif; ?>
        </div>
    </div>
</div>
<!-- main page content ends -->