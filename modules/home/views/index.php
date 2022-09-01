<!-- main page content -->
<div class="main-container container">
    <!-- Ucapan Selamat Datang -->
    <div class="row my-4 text-start">
        <div class="col-9">
            <p class="mb-0 ms-2 title-2">Halo, <?= explode(' ', $user->nama)[0]; ?></p>
            <p class="mb-0 ms-2 title-1-home">Selamat Datang</p>
        </div>
        <div class="col-3 d-flex justify-content-center align-items-center">
            <?php if ($presensi_setting != NULL) : ?>
                <?php if ($presensi_setting->presensi_checkin == true) : ?>
                    <button type="button" class="btn btn-sm btn-outline-danger btn-fingerprint button_get_lokasi" data-bs-toggle="modal" data-bs-target="#presensiModal">
                        <i class="fa-solid fa-user-check" style="font-size:1.2rem"></i>
                    </button>
                <?php endif; ?>
            <?php endif; ?>
        </div>
    </div>
    <?php if ($result_aktif || $result_old) :  ?>
        <div class="row" style="margin-bottom : 0.75rem;" id="jadwal-list">
            <?php foreach ($result_aktif as $row) : ?>
                <?php $uniq = "presensi_" . date('Ymd') . $row->id_kelas . $row->id_staf . $row->id_pelajaran; ?>
                <?php if ((date('H:i:s') >= $row->jam_mulai) && (date('H:i:s') <= $row->jam_selesai)) : ?>
                    <?php if ($presensi_setting->presensi_mapel == true) : ?>
                        <?php if (!isset($presensi->presensi_mapel->$uniq)) : ?>
                            <a data-bs-toggle="modal" data-id="<?= $row->id_jadwal; ?>" data-bs-target="#presensiMapelModal" class="col-6 mb-3 jadwal text-dark button_get_lokasi button_presensi_mapel">
                            <?php else : ?>
                                <a href="<?= base_url('kbm/detail_kbm/' . $row->id_pelajaran . '/' . $row->id_kelas . '/' . $row->id_staf); ?>" class="col-6 mb-3 jadwal text-dark">
                                <?php endif; ?>
                            <?php else : ?>
                                <a href="<?= base_url('kbm/detail_kbm/' . $row->id_pelajaran . '/' . $row->id_kelas . '/' . $row->id_staf); ?>" class="col-6 mb-3 jadwal text-dark">
                                <?php endif; ?>
                            <?php else : ?>
                                <a class="col-6 mb-3 jadwal text-dark">
                                <?php endif ?>


                                <div class="card card-jadwalmapel">
                                    <div class="card-body">
                                        <?php if ((date('H:i:s') >= $row->jam_mulai) && (date('H:i:s') <= $row->jam_selesai)) : ?>
                                            <div class="boba-besar"></div>
                                            <div class="boba-kecil-1"></div>
                                            <div class="boba-kecil-2"></div>
                                        <?php endif ?>
                                        <?php if ($presensi_setting->presensi_mapel != FALSE && isset($presensi->presensi_mapel->$uniq)) : ?>
                                            <div class="jam-presensi">
                                                <p class="mb-0 text-white size-13"><?= $presensi->presensi_mapel->$uniq; ?></p>
                                            </div>
                                        <?php endif; ?>
                                        <div class="row flex-column">
                                            <div class="col-auto">
                                                <div class="avatar avatar-60 p-1 shadow-sm shadow-danger rounded-circle">
                                                    <?php if ((date('H:i:s') >= $row->jam_mulai) && (date('H:i:s') <= $row->jam_selesai)) : ?>
                                                        <div class="icons text-white rounded-circle bg-icon-jadwal">
                                                            <img src="<?= base_url(); ?>assets/icons/clipboard.png" width="24" alt="">
                                                        </div>
                                                    <?php else : ?>
                                                        <div class="icons text-white rounded-circle bg-icon-jadwal-pending">
                                                            <img src="<?= base_url(); ?>assets/icons/clipboard.png" width="24" alt="">
                                                        </div>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                            <div class="col align-self-center ps-3 mt-2">
                                                <p class="fw-normal mb-0 size-17"><?= tampil_text($row->nama_pelajaran, 13); ?></p>
                                                <p class="fw-normal mb-0 text-secondary size-13"><?= tampil_text($row->pengajar, 15); ?></p>
                                            </div>
                                            <div class="col text-end position-absolute mt-3" style="bottom: 13px; right: 4px;">
                                                <p class="mb-0 fw-normal size-12"><?= substr($row->jam_mulai, 0, -3) ?> - <?= substr($row->jam_selesai, 0, -3) ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </a>
                            <?php endforeach; ?>
                            <?php foreach ($result_old as $row) : ?>
                                <div class="col-6 mb-3 jadwal">
                                    <div class="card bg-opac-50 card-jadwalmapel">
                                        <div class="card-body">
                                            <?php $uniqq = "presensi_" . date('Ymd') . $row->id_kelas . $row->id_staf . $row->id_pelajaran; ?>
                                            <?php if ($presensi->presensi_mapel != NULL && isset($presensi->presensi_mapel->$uniqq)) : ?>
                                                <div class="jam-presensi-disable">
                                                    <p class="mb-0 text-white size-13"><?= $presensi->presensi_mapel->$uniqq; ?></p>
                                                </div>
                                            <?php endif; ?>
                                            <div class="row flex-column">
                                                <div class="col-auto">
                                                    <div class="avatar avatar-60 p-1 shadow-sm shadow-danger rounded-circle">
                                                        <div class="icons text-white rounded-circle bg-icon-jadwal opacity-5">
                                                            <img src="<?= base_url(); ?>assets/icons/clipboard.png" width="24" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col align-self-center ps-3 mt-2">
                                                    <p class="fw-normal mb-0 size-17 opacity-5"><?= tampil_text($row->nama_pelajaran, 13); ?></p>
                                                    <p class="fw-normal mb-0 text-secondary size-13 opacity-5"><?= tampil_text($row->pengajar, 15); ?></p>
                                                </div>
                                                <div class="col text-end mt-3 position-absolute" style="bottom: 13px; right: 4px;">
                                                    <p class="mb-0 fw-normal size-12 opacity-5"><?= substr($row->jam_mulai, 0, -3) ?> - <?= substr($row->jam_selesai, 0, -3) ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>

        </div>
        <nav aria-label=...>
            <ul class="pagination pagination-carousel">
                <a class="to-page d-none" href="javascript:void(0)"></a>
            </ul>
        </nav>
    <?php endif; ?>



    <!-- Pengumuman -->
    <?php if (isset($pengumuman)) : ?>
        <div class="row mt-4 mb-3 px-1">
            <div class="col">
                <h6 class="title">Pengumuman</h6>
            </div>
            <div class="col-auto align-self-center">
                <a href="<?= base_url('home/list_pengumuman'); ?>" class="label-merah">Lihat Semua</a>
            </div>
        </div>

        <div class="row">
            <?php foreach ($pengumuman as $row) : ?>
                <div class="col-12 col-md-6 col-lg-4">
                    <a href="<?= base_url('home/detail_pengumuman/' . $row->id_pengumuman . '?redirect=true') ?>" class="card mb-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-auto">
                                    <div class="avatar avatar-60 shadow-sm rounded-10 coverimg">

                                        <img src="<?= $row->gambar; ?>" loading="lazy" alt="">
                                    </div>
                                </div>
                                <div class=" col align-self-center ps-0">
                                    <p class="mb-1 size-15 fw-normal"><?= tampil_text($row->judul, 40) ?></p>
                                    <p class="fw-normal text-secondary size-12"><?= nice_time($row->tanggal_mulai) ?></p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
    <?php if (isset($berita)) : ?>
        <!-- Berita -->
        <div class="row mt-4 mb-3 px-1">
            <div class="col">
                <h6 class="title">Berita</h6>
            </div>
            <div class="col-auto">
                <a href="<?= base_url('home/list_berita') ?>" class="label-merah">Lihat Semua</a>
            </div>
        </div>
        <div class="row mb-2">
            <div class="col-12 px-0">
                <div class="swiper-container cardswiper cardswiper-berita">
                    <div class="swiper-wrapper">
                        <?php foreach ($berita as $row) : ?>
                            <a href="<?= base_url('home/detail_berita/' . $row->id_konten . '?redirect=true') ?>" class="swiper-slide">

                                <div class="card theme-bg shadow-sm shadow-purple card-berita" style="background-image: url('<?= $row->gambar; ?>');">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-auto position-absolute badge-status">
                                                <span class="badge rounded-pill px-3 py-2 bg-badge fw-normal"><?= $row->nama_kategori; ?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wrapper-text shadow-sm">
                                    <div class="row px-3 py-3">
                                        <p class="mb-1 fw-medium size-15 text-dark">
                                            <?= tampil_text($row->judul, 40) ?></p>
                                        <p class="mb-0 title-4-home-text"><?= tampil_text($row->keterangan, 80) ?></p>
                                    </div>
                                </div>
                            </a>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>

</div>
<!-- main page content ends -->

<!-- Modal Presensi -->
<?php if ($presensi_setting->presensi_checkin == true) : ?>
    <div class="modal fade" id="presensiModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" id="parent_presensi">
            <form method="POST" action="<?= base_url('presensi/presensi_siswa'); ?>" id="form_presensi_siswa" class=" modal-content">
                <div class="modal-header py-4">
                    <button type="button" class="btn-close me-0" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body mb-0 pb-0">
                    <div class="row">
                        <div class="col-12">
                            <div style="width : 90%;height :100%;position : absolute;z-index : 10;"></div>
                            <div id="map-container-google-1" class="z-depth-1-half map-container">
                                <iframe id="map_iframe" src="<?= $map; ?>" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                    <?php if ($presensi->presensi_sekolah->status_presensi < 2) : ?>
                        <div class="row mt-3">
                            <div class=" col">
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-auto ps-2 pe-1">
                                                <div class="avatar avatar-40 shadow-sm rounded-circle avatar-presensi-outline">
                                                    <div class="avatar avatar-30 rounded-circle avatar-presensi-inline">
                                                        <i class="fa-solid fa-clock size-20 text-white"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col align-self-center ps-1">
                                                <p class="mb-0 size-12 fw-medium">Jam Masuk</p>
                                                <p class="fw-normal text-secondary size-12"><?= ifnull($presensi->presensi_sekolah->scan_masuk, ' - '); ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php if ($presensi_setting->checkout == TRUE) : ?>
                                <?php if ($presensi->presensi_sekolah->scan_pulang != NULL) : ?>
                                    <div class="col">
                                        <div class="card mb-3">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-auto ps-2 pe-1">
                                                        <div class="avatar avatar-40 shadow-sm rounded-circle avatar-presensi-outline">
                                                            <div class="avatar avatar-30 rounded-circle avatar-presensi-inline">
                                                                <i class="fa-solid fa-clock size-20 text-white"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col align-self-center ps-1">
                                                        <p class="mb-0 size-12 fw-medium">Jam Pulang</p>
                                                        <p class="fw-normal text-secondary size-12"><?= ifnull($presensi->presensi_sekolah->scan_pulang, ' - '); ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            <?php endif; ?>
                        </div>
                    <?php else : ?>
                        <div class="row mt-3">
                            <div class=" col">
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <div class="row d-flex justify-content-center align-self-center">
                                            <div class="col align-self-center ps-1">
                                                <p class="mb-0 size-12 fw-medium text-center">ANDA SEDANG DALAM MASA <?php if ($presensi->presensi_sekolah->status_presensi == 2) {
                                                                                                                            echo 'IJIN';
                                                                                                                        } else {
                                                                                                                            echo 'SAKIT';
                                                                                                                        } ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>

                </div>
                <div class="modal-footer d-flex justify-content-center border-0 mt-0 pt-0">
                    <!-- BUTTON PRESENSI -->
                    <input type="hidden" class="lat" name="lat" value="<?= $lat; ?>">
                    <input type="hidden" class="long" name="long" value="<?= $long; ?>">

                    <input type="hidden" id="jam_masuk" name="jam_masuk" value="<?= $presensi_setting->jam_masuk; ?>">
                    <input type="hidden" id="jam_pulang" name="jam_pulang" value="<?= $presensi_setting->jam_pulang; ?>">
                    <?php if ($presensi_setting->checkout == true) : ?>
                        <input type="hidden" id="checkout" name="checkout" value="Y">
                    <?php else : ?>
                        <input type="hidden" id="checkout" name="checkout" value="N">
                    <?php endif; ?>
                    <?php if ($presensi_setting->status_presensi->masuk == true) : ?>
                        <?php if (!isset($presensi->presensi_sekolah->scan_masuk)) :  ?>
                            <input type="hidden" name="scan_masuk" value="Y">
                            <div class="modal-footer d-flex justify-content-center border-0">
                                <button type="button" id="button_submit_masuk" onclick="submit_form(this,'#form_presensi_siswa')" class="btn shadow-sm btn-presensi mb-2">Presensi Masuk</button>
                            </div>
                        <?php else : ?>
                            <?php if ($presensi_setting->checkout == true) : ?>
                                <?php if ($presensi_setting->status_presensi->pulang == true) : ?>
                                    <?php if (!isset($presensi->presensi_sekolah->scan_pulang)) : ?>
                                        <input type="hidden" name="scan_masuk" value="N">
                                        <div class="modal-footer d-flex justify-content-center border-0 py-0 my-0">
                                            <button type="button" id="button_submit_pulang" onclick="submit_form(this,'#form_presensi_siswa')" class="btn shadow-sm btn-presensi mb-2 d-flex justify-content-center">Presensi Pulang</button>
                                        </div>
                                    <?php endif; ?>
                                <?php endif; ?>
                            <?php endif; ?>
                        <?php endif; ?>

                    <?php endif; ?>
                    <?php if ($presensi_setting->checkout == true) : ?>
                        <?php if ($presensi_setting->status_presensi->masuk == false) : ?>
                            <?php if ($presensi_setting->status_presensi->pulang == true) : ?>
                                <?php if (!isset($presensi->presensi_sekolah->scan_pulang)) : ?>
                                    <input type="hidden" name="scan_masuk" value="N">
                                    <div class="modal-footer d-flex justify-content-center border-0">
                                        <button type="button" id="button_submit_pulang" onclick="submit_form(this,'#form_presensi_siswa')" class="btn shadow-sm btn-presensi mb-2 d-flex justify-content-center">Presensi Pulang</button>
                                    </div>
                                <?php endif; ?>
                            <?php endif; ?>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>

            </form>
        </div>
    </div>
<?php endif; ?>

<!-- Modal Presensi Mapel -->
<div class="modal fade" id="presensiMapelModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-fullscreen">
        <form id="form_presensi_mapel" method="POST" action="<?= base_url('presensi/mapel'); ?>" class="modal-content rounded-0">
            <div class="modal-header py-4">
                <button type="button" class="btn-close me-0" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12">
                        <div style="width : 90%;height :100%;position : absolute;z-index : 10;"></div>
                        <div id="map-container-google-1" class="z-depth-1-half map-container">

                            <iframe id="map_mapel" src="<?= $map; ?>" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-12">
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
                                    <div class="col align-self-center ps-1">
                                        <p class="mb-0 size-15 fw-medium">Nama Mata Pelajaran</p>
                                        <p id="nama_pelajaran" class="text-secondary size-13">-</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-auto">
                                        <div class="avatar avatar-50 shadow-sm rounded-circle avatar-presensi-outline">
                                            <div class="avatar avatar-40 rounded-circle avatar-presensi-inline" style="line-height: 44px;">
                                                <i class="fa-solid fa-chalkboard-user size-18 text-white"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col align-self-center ps-1">
                                        <p class="mb-0 size-15 fw-medium">Nama Guru</p>
                                        <p id="nama_staf" class="text-secondary size-13">-</p>
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
                                                <i class="fa-solid fa-clock size-24 text-white"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col align-self-center ps-1">
                                        <p class="mb-0 size-15 fw-medium">Jam Pelajaran</p>
                                        <p id="jam_pelajaran" class="text-danger size-13">--:--</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- BUTTON PRESENSI -->
            <input type="hidden" class="lat" name="lat" value="<?= $lat; ?>">
            <input type="hidden" class="long" name="long" value="<?= $long; ?>">
            <input type="hidden" id="id_pelajaran" name="id_pelajaran">
            <input type="hidden" id="id_staf" name="id_staf">
            <input type="hidden" id="id_kelas" name="id_kelas">
            <div class="modal-footer d-flex justify-content-center border-0">
                <button type="button" onclick="submit_form(this,'#form_presensi_mapel',1)" id="button_presensi_mapel" class="btn shadow-sm btn-presensi mb-2">Presensi</button>
            </div>
        </form>
    </div>
</div>