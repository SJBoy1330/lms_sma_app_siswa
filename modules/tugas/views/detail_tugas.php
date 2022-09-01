<div class="main-container container">
    <div class=" row">
        <div class="col-12">
            <a class="row">
                <a data-bs-toggle="modal" data-bs-target="#">
                    <div class="list-group-item rounded-15 mb-1 shadow-sm position-relative overflow-hidden p-3 mb-3">
                        <div class="row mb-3">
                            <div class="col">
                                <p class="fw-bolder size-15"><?= $result->detail->nama_pelajaran; ?></p>
                            </div>
                        </div>
                        <div class="row py-1 px-2 mt-2 mb-2 ">
                            <div class="d-flex col-auto ps-0 pe-2">
                                <div class="avatar avatar-50 shadow-sm rounded-circle avatar-presensi-outline">
                                    <div class="avatar avatar-40 rounded-circle avatar-presensi-inline">
                                        <i class="fa-brands fa-stack-overflow size-22 text-white"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col align-self-center p-0 d-flex align-items-start flex-column">
                                <p class="mb-0 fw-normal size-13 text-secondary">Tugas</p>
                                <p class="mb-0 fw-normal size-14"><?= $result->detail->nama; ?></p>
                            </div>
                        </div>
                        <div class="row py-1 px-2 mt-2 mb-2 ">
                            <div class="d-flex col-auto ps-0 pe-2">
                                <div class="avatar avatar-50 shadow-sm rounded-circle avatar-presensi-outline">
                                    <div class="avatar avatar-40 rounded-circle avatar-presensi-inline" style="line-height: 42px;">
                                        <i class="fa-solid fa-hourglass-clock size-18 text-white"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col align-self-center p-0 d-flex align-items-start flex-column">
                                <p class="mb-0 fw-normal size-13 text-secondary">Batas Waktu</p>
                                <p class="mb-0 fw-normal size-14"><?= day_from_number(date('N', strtotime($result->detail->batas_waktu))) . ', ' . date('d', strtotime($result->detail->batas_waktu)) . ' ' . month_from_number(date('m', strtotime($result->detail->batas_waktu))) . ' ' . date('Y', strtotime($result->detail->batas_waktu)); ?></p>
                            </div>
                        </div>
                        <div class="row py-1 px-2 mt-2 mb-2 ">
                            <div class="d-flex col-auto ps-0 pe-2">
                                <div class="avatar avatar-50 shadow-sm rounded-circle avatar-presensi-outline">
                                    <div class="avatar avatar-40 rounded-circle avatar-presensi-inline">
                                        <i class="fa-solid fa-memo-pad size-20 text-white"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col align-self-center p-0 d-flex align-items-start flex-column">
                                <p class="mb-0 fw-normal size-13 text-secondary">Keterangan</p>
                                <p class="mb-0 fw-normal size-14"><?= $result->detail->keterangan; ?></p>
                            </div>
                        </div>
                        <?php if ($result->tugas_siswa) : ?>
                            <?php if ($result->tugas_siswa->status) : ?>
                                <div class="row py-1 px-2 mt-2 mb-2" id="div_status">
                                    <div id="reload_status" class="row">
                                        <div class="d-flex col-auto ps-0 pe-2">
                                            <div class="avatar avatar-50 shadow-sm rounded-circle avatar-presensi-outline">
                                                <div class="avatar avatar-40 rounded-circle avatar-presensi-inline">
                                                    <i class="fa-solid fa-circle-dot size-20 text-white"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col align-self-center p-0 d-flex align-items-start flex-column">
                                            <p class="mb-0 fw-normal size-13 text-secondary">Status</p>
                                            <p class="mb-0 fw-normal size-14"><?= $result->tugas_siswa->status; ?></p>
                                        </div>
                                    </div>

                                </div>
                            <?php endif; ?>
                            <?php if ($result->tugas_siswa->nilai) : ?>
                                <div class="row py-1 px-2 mt-2 mb-2 ">
                                    <div class="d-flex col-auto ps-0 pe-2">
                                        <div class="avatar avatar-50 shadow-sm rounded-circle avatar-presensi-outline">
                                            <div class="avatar avatar-40 rounded-circle avatar-presensi-inline">
                                                <i class="fa-solid fa-feather size-20 text-white"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col align-self-center p-0 d-flex align-items-start flex-column">
                                        <p class="mb-0 fw-normal size-13 text-secondary">Nilai</p>
                                        <p class="mb-0 fw-normal size-14"><?= $result->tugas_siswa->nilai; ?></p>
                                    </div>
                                </div>
                            <?php endif; ?>
                            <?php if ($result->tugas_siswa->komentar) : ?>
                                <div class="row py-1 px-2 mt-2 mb-2 ">
                                    <div class="d-flex col-auto ps-0 pe-2">
                                        <div class="avatar avatar-50 shadow-sm rounded-circle avatar-presensi-outline">
                                            <div class="avatar avatar-40 rounded-circle avatar-presensi-inline">
                                                <i class="fa-solid fa-feather size-20 text-white"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col align-self-center p-0 d-flex align-items-start flex-column">
                                        <p class="mb-0 fw-normal size-13 text-secondary">Komentar Guru</p>
                                        <p class="mb-0 fw-normal size-14"><?= $result->tugas_siswa->komentar; ?></p>
                                    </div>
                                </div>
                            <?php endif; ?>
                        <?php endif; ?>
                    </div>
                </a>
            </a>

            <!-- Begin New Design -->
            <?php if ($result->download) : ?>
                <div class="list-group-item rounded-15 mb-1 shadow-sm position-relative overflow-hidden p-3 mb-3">
                    <div class="col mb-2">
                        <p class="fw-bolder size-15">Download Tugas</p>
                    </div>
                    <?php foreach ($result->download as $row) : ?>
                        <?php
                        if ($row->file != FALSE) {
                            $action_download = 'href="' . $row->file . '" class="card shadow-sm mb-3"';
                        } else {
                            $action_download = 'class="card shadow-sm mb-3" onclick="take_alert(`PERINGATAN`, `Tidak bisa mengunduh file diakrenakan file rusak!`, `warning`)"';
                        }
                        ?>
                        <a <?= $action_download; ?>>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-auto">
                                        <div class="avatar avatar-50 rounded-10 bg-document">
                                            <!-- <i class="fa-solid fa-file-pdf size-30 text-danger"></i> -->
                                            <?php if ($row->file != FALSE) {
                                                echo get_icon_file($row->extension);
                                            } else {
                                                echo get_icon_file('corrupt');
                                            } ?>
                                        </div>
                                    </div>
                                    <div class="col align-self-center ps-0">
                                        <p class="mb-0 size-14 text-dark fw-normal"><?= tampil_text($row->nama, 14); ?></p>
                                        <p class="mb-0 size-12 fw-normal text-secondary"><?php if ($row->file != FALSE) {
                                                                                                echo strtoupper($row->extension);;
                                                                                            } else {
                                                                                                echo 'Corrupt';
                                                                                            } ?> File</p>
                                    </div>
                                    <div class="col-auto align-self-center text-end ms-3">
                                        <button type="button" class="btn btn-md bg-cancel rounded-circle"><i class="fa-solid fa-arrow-down size-26 text-danger"></i></button>
                                    </div>
                                </div>
                            </div>
                        </a>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
            <div class="list-group-item rounded-15 mb-1 shadow-sm position-relative overflow-hidden p-3 mb-3">
                <div id="display_jawaban">
                    <div id="reload_jawaban">
                        <div class="row mb-3">
                            <div class="col">
                                <p class="fw-bolder size-15">Tugas Anda</p>
                            </div>
                            <div class="col-auto align-self-center">
                                <?php
                                if ($result->tugas_siswa->kode_status == 1) {
                                    $color = 'text-warning';
                                } elseif ($result->tugas_siswa->kode_status == 2) {
                                    $color = 'label-hijau';
                                } elseif ($result->tugas_siswa->kode_status == 3) {
                                    $color = 'label-merah';
                                } else {
                                    if (strtotime($result->detail->batas_waktu) < strtotime(date('Y-m-d H:i:s'))) {
                                        $color = 'label-merah';
                                    } else {
                                        $color = 'text-dark';
                                    }
                                }
                                ?>
                                <a class="<?= $color; ?> fw-medium size-13"><?= $result->tugas_siswa->status; ?></a>
                            </div>
                        </div>
                        <?php if ($result->tugas_siswa->file) : ?>
                            <?php foreach ($result->tugas_siswa->file as $row) : ?>
                                <div class="card shadow-sm mb-3" id="jawaban-<?= $row->id_file; ?>">
                                    <div class=" card-body">
                                        <div class="row" id="loading_hapus">
                                            <div class="col-auto">
                                                <div class="avatar avatar-50 rounded-10 bg-document">
                                                    <!-- <i class="fa-solid fa-file-pdf size-30 text-danger"></i> -->
                                                    <?php if ($row->files != FALSE) {
                                                        echo get_icon_file($row->ext);
                                                    } else {
                                                        echo get_icon_file('corrupt');
                                                    } ?>
                                                </div>
                                            </div>
                                            <?php
                                            if ($row->files != FALSE) {
                                                $action = 'href="' . $row->files . '" class="col align-self-center ps-0"';
                                            } else {
                                                $action = 'class="col align-self-center ps-0 " onclick="take_alert(`PERINGATAN`, `Tidak bisa mengunduh file diakrenakan file rusak!`, `warning`)"';
                                            }
                                            ?>
                                            <a <?= $action; ?>>
                                                <p class="mb-0 size-14 text-dark fw-normal"><?= tampil_text($row->judul, 14) ?></p>
                                                <p class="mb-0 size-12 fw-normal text-secondary"><?php if ($row->files != FALSE) {
                                                                                                        echo strtoupper($row->ext);;
                                                                                                    } else {
                                                                                                        echo 'Corrupt';
                                                                                                    } ?> File</p>
                                            </a>
                                            <div class="col-auto align-self-center text-end ms-3" id="hapus_file_loading_<?= $row->id_file; ?>">
                                                <?php if ($result->tugas_siswa->kode_status == NULL || $result->tugas_siswa->kode_status == 3) : ?>
                                                    <button type="button" onclick="hapus_file(<?= $id_tugas; ?>,<?= $row->id_file; ?>)" class="btn btn-md bg-cancel rounded-circle"><i class="fa-solid fa-xmark size-26 text-danger"></i></button>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        <?php else : ?>
                            <?php if ($result->tugas_siswa->kode_status == 1 || $result->tugas_siswa->kode_status == 2) : ?>
                                <?= vector_default('vector_tugas_diserahkan.svg', 'Tidak ada lampiran', 'Tugas telah diserahkan tanpa melampirkan file'); ?>
                            <?php else : ?>
                                <div class="row">
                                    <div class="col-12 d-flex justify-content-center align-items-center flex-wrap mt-2">
                                        <div class="circle-serahtugas d-flex justify-content-center align-items-center">
                                            <i class="fa-solid fa-layer-plus" style="font-size: 45px; color: #c8c5c5;"></i>
                                        </div>
                                        <p class="size-14 text-secondary fw-normal text-center mx-1 mt-3">Tekan tombol lampirkan untuk menambahkan jawaban anda</p>
                                    </div>
                                </div>
                            <?php endif; ?>
                        <?php endif; ?>
                        <form class="row mt-4 mx-1" method="post" action="<?= base_url('tugas/serahkan'); ?>" id="form_serahkan" enctype="multipart/form-data">
                            <input type="hidden" name="id_tugas" id="id_tugas" value="<?= $id_tugas; ?>">
                            <!-- BUTTON UPLOAD TUGAS -->
                            <?php if (strtotime($result->detail->batas_waktu) < strtotime(date('Y-m-d H:i:s'))) : ?>
                                <?php if ($result->tugas_siswa->kode_status == NULL || $result->tugas_siswa->kode_status == 3) : ?>
                                    <?php if ($result->detail->izin_terlambat == 'Y') : ?>
                                        <input id="lapirkan_jawaban" name="file_jawaban[]" onchange="upload_jawaban(this)" multiple="multiple" type="file" hidden />
                                        <label for="lapirkan_jawaban" class="btn btn-block btn-md btn-danger btn-detail-tugas-tambah mb-2">Lampirkan Jawaban</label>
                                    <?php endif; ?>
                                <?php endif; ?>
                            <?php else : ?>
                                <?php if ($result->tugas_siswa->kode_status == NULL || $result->tugas_siswa->kode_status == 3) : ?>
                                    <input id="lapirkan_jawaban" name="file_jawaban[]" onchange="upload_jawaban(this)" multiple="multiple" type="file" hidden />
                                    <label for="lapirkan_jawaban" class="btn btn-block btn-md btn-danger btn-detail-tugas-tambah mb-2">Lampirkan Jawaban</label>
                                <?php endif; ?>
                            <?php endif; ?>

                            <!-- BUTTON SERAHKAAN TUGAS -->
                            <?php if (strtotime($result->detail->batas_waktu) < strtotime(date('Y-m-d H:i:s'))) : ?>
                                <?php if ($result->tugas_siswa->kode_status == NULL || $result->tugas_siswa->kode_status == 3) : ?>
                                    <?php if ($result->detail->izin_terlambat == 'Y') : ?>
                                        <input type="hidden" name="action" id="action" value="1">
                                        <button type="button" id="button_submited_tugas" onclick="submit_form(this,'#form_serahkan')" class="btn btn-block btn-md btn-danger btn-detail-tugas">Serahkan Terlambat</button>
                                    <?php endif; ?>
                                <?php endif; ?>
                            <?php else : ?>
                                <?php if ($result->tugas_siswa->kode_status == NULL || $result->tugas_siswa->kode_status == 3) : ?>
                                    <input type="hidden" name="action" id="action" value="1">
                                    <button type="button" id="button_submited_tugas" onclick="submit_form(this,'#form_serahkan')" class="btn btn-block btn-md btn-danger btn-detail-tugas">Serahkan Tugas</button>
                                <?php else : ?>
                                    <input type="hidden" name="action" id="action" value="0">
                                    <button type="button" id="button_submited_tugas" onclick="submit_form(this,'#form_serahkan')" class="btn btn-block btn-md btn-danger btn-detail-tugas">Batalkan Tugas</button>
                                <?php endif; ?>
                            <?php endif; ?>

                        </form>
                    </div>
                </div>

            </div>
            <!-- End New Design -->
        </div>
    </div>
</div>