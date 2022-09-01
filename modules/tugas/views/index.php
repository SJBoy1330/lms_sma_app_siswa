<div class="main-container container">
    <div class="row">
        <div class="wrapper-searching-tugas">
            <div class="wrapper-samaran"></div>
            <div class="row bg-white">
                <div class="col-10">
                    <div class="input-group">
                        <input type="text" id="search_tugas" onkeyup="search(this,'div.target_search','#vector_tugas')" class="form-control form-control-pribadi pencarian" placeholder="Pencarian" aria-label="Pencarian" aria-describedby="basic-addon2">
                        <button class="input-group-text searhing" id="basic-addon2"><i class="fa-solid fa-magnifying-glass size-20 text-white"></i></button>
                    </div>
                </div>
                <div class="col-2 d-flex justify-content-center align-items-center ps-0">
                    <button class="btn bg-button filter-tugas border-0" data-bs-toggle="modal" data-bs-target="#filterTugas">
                        <i class="fa-regular fa-filter" style="color: #EC3528;"></i>
                    </button>
                </div>
            </div>
        </div>
        <div class="col-12 mt-3" id="display_tugas">
            <?php if ($result->tugas) : ?>
                <?php foreach ($result->tugas as $row) : ?>
                    <div class="row mb-3 mx-1 list-group-item rounded-15 mb-1 shadow-sm position-relative overflow-hidden p-3 target_search zoom-filter showing" data-pelajaran="<?= $row->id_pelajaran; ?>" data-status="<?php if ($row->dikerjakan == FALSE) {
                                                                                                                                                                                                                                echo 'belum';
                                                                                                                                                                                                                            } else {
                                                                                                                                                                                                                                if ($row->kode_status == 1) {
                                                                                                                                                                                                                                    echo 'koreksi';
                                                                                                                                                                                                                                } elseif ($row->kode_status == 2) {
                                                                                                                                                                                                                                    echo 'selesai';
                                                                                                                                                                                                                                } elseif ($row->kode_status == 3) {
                                                                                                                                                                                                                                    echo 'ditolak';
                                                                                                                                                                                                                                }
                                                                                                                                                                                                                            } ?>">
                        <div class="row mb-3 mx-0 px-0">
                            <div class="col ps-0">
                                <p class="fw-bolder size-15"><?= nice_title($row->nama_pelajaran, 80); ?></p>
                            </div>
                            <div class="col-auto align-self-center pe-0">
                                <?php if ($row->dikerjakan == false) : ?>
                                    <?php if (strtotime($row->batas_waktu) < strtotime(date('Y-m-d H:i:s'))) : ?>
                                        <p class="fw-normal size-14 text-danger">Belum Dikerjakan</p>
                                    <?php else : ?>
                                        <p class="fw-normal size-14">Belum Dikerjakan</p>
                                    <?php endif; ?>
                                <?php else : ?>
                                    <?php
                                    if ($row->kode_status == 1) {
                                        $warna = 'text-warning';
                                    } elseif ($row->kode_status == 2) {
                                        $warna = 'text-success';
                                    } elseif ($row->kode_status == 3) {
                                        $warna = 'text-danger';
                                    } else {
                                        $warna = NULL;
                                    }
                                    ?>
                                    <p class="fw-normal size-14 <?= $warna; ?>"><?= $row->status; ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="row py-1 px-2 mb-3">
                            <div class="d-flex col-auto align-items-center ps-0 pe-2">
                                <div class="avatar avatar-50 shadow-sm rounded-circle avatar-presensi-outline">
                                    <div class="avatar avatar-40 rounded-circle avatar-presensi-inline">
                                        <i class="fa-regular fa-memo-pad size-20 text-white"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col align-self-center p-0 d-flex align-items-start flex-column">
                                <p class="mb-0 fw-normal size-15"><?= nice_title($row->nama, 100); ?></p>
                            </div>
                        </div>

                        <div class="row mt-4 mx-1 ps-0">
                            <a href="<?= base_url('tugas/detail_tugas/' . $row->id_tugas) ?>" class="btn btn-block btn-md btn-danger btn-detail-tugas">Detail Tugas</a>
                        </div>

                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
            <?= vector_default('vector_tugas_kosong.svg', 'Tidak ada tugas', 'Tidak ada tugas tersedia, hubungi guru atau admin sekolah jika terdapat kesalahan!', 'vector_tugas', count($result->tugas)); ?>
        </div>
    </div>
</div>

<!-- Filter Ujian Modal -->
<div class="modal fade" id="filterTugas" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" style="box-shadow: 100px 0px 100px 100px rgb(0 0 0 / 10%)">
            <div class="modal-header border-0">
                <h5 class="modal-title" id="exampleModalLabel">Filter</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label for="exampleFormControlInput3" class="form-label title-3">Mata Pelajaran</label>
                    <select class="form-select form-select" aria-label="Default select example" id="pelajaran">
                        <option value="all" selected>Semua</option>
                        <?php if ($result->pelajaran) : ?>
                            <?php foreach ($result->pelajaran as $row) : ?>
                                <option value="<?= $row->id_pelajaran ?>"><?= $row->nama; ?></option>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput3" class="form-label title-3">Status</label>
                    <select class="form-select form-select" aria-label="Default select example" id="status">
                        <option value="all" selected>Semua</option>
                        <option value="selesai">Selesai</option>
                        <option value="koreksi">Menunggu Koreksi</option>
                        <option value="belum">Belum Dikerjakan</option>
                        <option value="ditolak">Ditolak</option>
                    </select>
                </div>
            </div>
            <div class="modal-footer border-0">
                <button type="button" id="button_filter_tugas" onclick="filter_tugas()" class="btn btn-block btn-md btn-danger btn-filter">Tampilkan</button>
            </div>
        </div>
    </div>
</div>