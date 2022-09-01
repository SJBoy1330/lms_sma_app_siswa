</main>
<!-- Footer -->
<?php if (!isset($config_hidden) || $config_hidden['footer'] != true) : ?>
    <footer class="footer">
        <div class="container">
            <ul class="nav nav-pills nav-justified">
                <li class="nav-item">
                    <a class="nav-link mt-1 <?= (set_active($this->uri->segment(1), 'home', $this->uri->segment(2), array())) ?>" href="<?= base_url('home'); ?>">
                        <span>
                            <i class="fa-solid fa-house size-18"></i>
                            <span class="nav-text">Beranda</span>
                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mt-1 <?= (set_active($this->uri->segment(1), 'kbm', $this->uri->segment(2), array())) ?>" href="<?= base_url('kbm'); ?>" onclick="unreload(this)">
                        <span>
                            <i class="far fa-calendar-alt size-18"></i>
                            <span class="nav-text">Jadwal</span>
                        </span>
                    </a>
                </li>
                <li class="nav-item centerbutton">
                    <button type="button" class="nav-link" data-bs-toggle="modal" data-bs-target="#menumodal" id="centermenubtn">
                        <span class="theme-radial-gradient d-flex justify-content-center align-items-center">
                            <i class="bi bi-columns-gap size-22"></i>
                        </span>
                    </button>
                </li>
                <li class="nav-item">
                    <a class="nav-link mt-1 <?= (set_active($this->uri->segment(1), 'toko', $this->uri->segment(2), array())) ?>" href="<?= base_url('toko'); ?>" onclick="unreload(this)">
                        <span>
                            <i class="fa-solid fa-shop size-18"></i>
                            <span class="nav-text">Toko</span>
                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mt-1 <?= (set_active($this->uri->segment(1), 'profil', $this->uri->segment(2), array())) ?>" href="<?= base_url('profil'); ?>" onclick="unreload(this)">
                        <span>
                            <i class="fa-solid fa-user size-18"></i>
                            <span class="nav-text">Profil</span>
                        </span>
                    </a>
                </li>
            </ul>
        </div>
    </footer>
    <div class="modal fade" id="menumodal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-sm modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content shadow position-absolute" style="bottom: 65px;">
                <div class="modal-body">
                    <div class="row justify-content-center">
                        <div class="col-auto text-center">
                            <a href="<?= base_url('materi') ?>" onclick="unreload(this)" class="avatar avatar-60 p-1 shadow-sm shadow-danger rounded-20 bg-danger mb-2 avatar-quicklinks">
                                <div class="circle-bg-top"></div>
                                <div class="circle-bg-bottom"></div>
                                <div class="icons text-danger">
                                    <i class="fa-solid fa-book-open-cover size-28 text-white"></i>
                                </div>
                            </a>
                            <p class="size-13 text-secondary">Materi</p>
                        </div>

                        <div class="col-auto text-center">
                            <a href="<?= base_url('ujian') ?>" onclick="unreload(this)" class="avatar avatar-60 p-1 shadow-sm shadow-primary rounded-20 bg-primary mb-2 avatar-quicklinks">
                                <div class="circle-bg-top"></div>
                                <div class="circle-bg-bottom"></div>
                                <div class="icons text-purple">
                                    <i class="fa-solid fa-book-bookmark size-28 text-white"></i>
                                </div>
                            </a>
                            <p class="size-13 text-secondary">Ujian</p>
                        </div>

                        <div class="col-auto text-center">
                            <a href="<?= base_url('tugas') ?>" onclick="unreload(this)" class="avatar avatar-60 p-1 shadow-sm shadow-warning rounded-20 bg-warning mb-2 avatar-quicklinks">
                                <div class="circle-bg-top"></div>
                                <div class="circle-bg-bottom"></div>
                                <div class="icons text-success">
                                    <i class="fa-solid fa-list-check size-28 text-white"></i>
                                </div>
                            </a>
                            <p class="size-13 text-secondary">Tugas</p>
                        </div>

                        <div class="col-auto text-center">
                            <a href="<?= base_url('qna') ?>" onclick="unreload(this)" class="avatar avatar-60 p-1 shadow-sm shadow-success rounded-20 bg-success mb-2 avatar-quicklinks">
                                <div class="circle-bg-top"></div>
                                <div class="circle-bg-bottom"></div>
                                <div class="icons text-success">
                                    <i class="fa-solid fa-messages size-28 text-white"></i>
                                </div>
                            </a>
                            <p class="size-13 text-secondary">Pesan</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>

<!-- Modal Loader -->
<div id="refresh_loading">
    <div class="modal fade" id="loading_scene" tabindex="-1" aria-labelledby="loading_scene" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-fullscreen">
            <div class="modal-content loader" style="border-radius: 0px;">
                <div class="modal-body loader">
                    <div class="row loader">
                        <div class="col-12 loader">
                            <div class="loadingio-spinner-double-ring-x5jbbv5x43o">
                                <div class="ldio-wmpldorvik">
                                    <div></div>
                                    <div></div>
                                    <div>
                                        <div></div>
                                    </div>
                                    <div>
                                        <div></div>
                                    </div>
                                </div>
                            </div>
                            <p class="size-20 fw-medium loader">Memuat... </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Required jquery and libraries -->
<script src="<?= base_url() ?>assets/js/jquery-3.3.1.min.js"></script>
<script src="<?= base_url() ?>assets/js/popper.min.js"></script>
<script src="<?= base_url() ?>assets/vendor/bootstrap-5/js/bootstrap.bundle.min.js"></script>

<script>
    var BASE_URL = baseUrl = '<?= base_url(); ?>';
    var API_URL = apiUrl = '<?= API_URL() ?>';
    var loading_scene = new bootstrap.Modal(document.getElementById("loading_scene"), {});
    var loading = $('#loading_scene');
    var css_button = 'btn btn-block btn-md';
    var html_loader = '<div class="row loader">\
                    <div class="col-12 loader">\
                        <div class="loadingio-spinner-double-ring-x5jbbv5x43o">\
                            <div class="ldio-wmpldorvik">\
                                <div></div>\
                                <div></div>\
                                <div>\
                                    <div></div>\
                                </div>\
                                <div>\
                                    <div></div>\
                                </div>\
                            </div>\
                        </div>\
                        <p class="size-20 fw-medium loader"> Loading... </p>\
                    </div>\
                </div>';
</script>
<!-- Customized jquery file  -->
<script src="<?= base_url() ?>assets/js/main.js"></script>
<script src="<?= base_url() ?>assets/js/color-scheme.js"></script>

<!-- swiper js script -->
<script src="<?= base_url() ?>assets/vendor/swiperjs-6.6.2/swiper-bundle.min.js"></script>

<script src="<?= base_url() ?>assets/js/pagination-carousel.js?v=<?= date('YmdHis') ?>"></script>

<script src="<?= base_url() ?>assets/js/global.js?v=<?= date('YmdHis') ?>"></script>

<!--evo calender-->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.min.js"></script>
<script src="<?= base_url() ?>assets/vendor/evo-calendar/js/evo-calendar.min.js"></script>
<script src="<?= base_url() ?>assets/vendor/evo-calendar/js/evo-calendar.js"></script>

<script src="<?= base_url('assets/js/alert/sweetalert2.all.min.js') ?>"></script>
<script src="<?= base_url('assets/js/alert/scriptalert.js') ?>"></script>

<script src="<?= base_url('assets/js/page/function.js?v=' . date('YmdHis')) ?>"></script>

<div id="script">
    <div id="scripting">
        <?php

        if (isset($js_add) && is_array($js_add)) {
            foreach ($js_add as $js) {
                echo $js;
            }
        } else {
            echo (isset($js_add) && ($js_add != "") ? $js_add : "");
        }

        ?>
    </div>
</div>