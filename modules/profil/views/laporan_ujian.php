<!-- Header ends -->
<!-- main page content -->
<div class="main-container container">

    <?php if ($result->ujian) : ?>
        <div class="row bg-white mb-3" style="width: 100vw;">
            <div class="col-12">
                <div class="input-group">
                    <input type="text" onkeyup="search(this, 'a.target_search','#vector_riwayat')" class=" form-control form-control-pribadi pencarian" placeholder="Pencarian" aria-label="Pencarian" aria-describedby="basic-addon2">
                    <button class="input-group-text searhing" id="basic-addon2" style="background-color:#EC3528;"><i class="fa-solid fa-magnifying-glass size-20 text-white"></i></button>
                </div>
            </div>
        </div>
        <div class="row" id="display_ujian">

            <?php foreach ($result->ujian as $row) : ?>
                <a data-bs-toggle="modal" data-id="<?= $row->id_ujian; ?>" data-status="<?php if ($row->nilai >= $row->kkm) {
                                                                                            echo 'lulus';
                                                                                        } else {
                                                                                            echo 'gagal';
                                                                                        } ?>" data-pelajaran="<?= $row->id_pelajaran; ?>" href="#detailUjian" role="button" class="col-6 mb-3 jadwal target_search zoom-filter showing">
                    <div class="card card-jadwalmapel">
                        <div class="card-body">
                            <div class="row flex-column pt-2 ps-1">
                                <div class="col-auto">
                                    <div class="avatar avatar-50 shadow-sm rounded-circle avatar-presensi-outline">
                                        <div class="avatar avatar-40 rounded-circle avatar-presensi-inline">
                                            <i class="fa-solid fa-book-bookmark size-20 text-white"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col align-self-center ps-3 mt-2">
                                    <p class="mb-1 fw-medium text-dark size-15"><?= $row->nama_paket; ?></p>
                                    <?php if ($row->nilai >= $row->kkm) : ?>
                                        <p class="mb-0 text-success size-13">Lulus</p>
                                    <?php else : ?>
                                        <p class="mb-0 text-danger size-13">Gagal</p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            <?php endforeach; ?>

        </div>
    <?php endif; ?>
    <?= vector_default('vector_riwayat_ujian_kosong.svg', 'Tidak ada riwayat ujian', 'Anda belum mengikuti ujian sama sekali, hubungi admin atau pihak sekolah jika terjadi kesalahan!', 'vector_riwayat', count($result->ujian)); ?>
</div>
<!-- main page content ends -->


<!-- Modal Mapel -->
<div class="modal fade" id="detailUjian" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header py-4">
                <h5 class="modal-title">Detail Ujian</h5>
                <button type="button" class="btn-close me-0" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row mt-3">
                    <div class="col-12">
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-auto">
                                        <div class="avatar avatar-50 shadow-sm rounded-circle avatar-presensi-outline">
                                            <div class="avatar avatar-40 rounded-circle avatar-presensi-inline">
                                                <i class="fa-solid fa-calendar-week size-20 text-white"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col align-self-center ps-0">
                                        <p class="mb-0 size-15 fw-medium">Tanggal Ujian</p>
                                        <p class="text-secondary size-12">01 - 01 -2022</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-auto">
                                        <div class="avatar avatar-50 shadow-sm rounded-circle avatar-presensi-outline">
                                            <div class="avatar avatar-40 rounded-circle avatar-presensi-inline">
                                                <i class="fa-solid fa-book-bookmark size-20 text-white"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col align-self-center ps-0">
                                        <p class="mb-0 size-15 fw-medium">Nama Ujian</p>
                                        <p class="text-secondary size-12">Paket Ujian 01</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-auto">
                                        <div class="avatar avatar-50 shadow-sm rounded-circle avatar-presensi-outline">
                                            <div class="avatar avatar-40 rounded-circle avatar-presensi-inline">
                                                <i class="fa-brands fa-stack-overflow size-22 text-white"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col align-self-center ps-0">
                                        <p class="mb-0 size-15 fw-medium">Studi Pembelajaran</p>
                                        <p class="text-secondary size-12">Pelajaran 01</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-auto">
                                        <div class="avatar avatar-50 shadow-sm rounded-circle avatar-presensi-outline">
                                            <div class="avatar avatar-40 rounded-circle avatar-presensi-inline" style="line-height: 42px;">
                                                <i class="fa-solid fa-clock size-20 text-white"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col align-self-center ps-0">
                                        <p class="mb-0 size-15 fw-medium">Waktu Ujian</p>
                                        <p class="text-danger size-15">20 Menit</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-auto">
                                        <div class="avatar avatar-50 shadow-sm rounded-circle avatar-presensi-outline">
                                            <div class="avatar avatar-40 rounded-circle avatar-presensi-inline">
                                                <i class="fa-solid fa-bullseye-pointer size-20 text-white"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col align-self-center ps-0">
                                        <p class="mb-0 size-15 fw-medium">Nilai Ujian</p>
                                        <p class="text-success size-15">125</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Filter Status SPP -->
<div class="modal fade" id="filterUjian" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" style="box-shadow: 100px 0px 100px 100px rgb(0 0 0 / 10%)">
            <div class="modal-header border-0">
                <h5 class="modal-title" id="exampleModalLabel">Filter</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label class="form-label title-3">Mata Pelajaran</label>
                    <select class="form-select form-select form-select-pribadi border-0" id="pelajaran">
                        <option value="all">Semua</option>
                        <?php foreach ($result->pelajaran as $row) : ?>
                            <option value="<?= $row->id_pelajaran; ?>"><?= $row->nama; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label title-3">Status</label>
                    <select class="form-select form-select form-select-pribadi border-0" id="status">
                        <option value="all">Semua</option>
                        <option value="lulus">Lulus</option>
                        <option value="gagal">Belum Lulus</option>
                    </select>
                </div>
            </div>
            <div class="modal-footer border-0">
                <button type="button" onclick="filter_ujian()" class=" btn btn-block btn-md btn-danger btn-filter">Tampilkan</button>
            </div>
        </div>
    </div>
</div>