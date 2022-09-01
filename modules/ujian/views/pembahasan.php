<!-- Sidebar Penomoran -->
<div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel" styele="background-color: #FFE6E6;">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasExampleLabel"></h5>
    <button type="button" class="btn-close text-reset mt-1 me-1" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body ujian">
    <div class="row">
        <div class="col-12">
            <h5>Paket Ujian 01</h5>
            <p class="fw-normal text-dark size-15">Bahasa Indonesia</p>
            <div class="solid-line mb-4"></div>
        </div>
        <div class="col-12 tab px-0">
            <div class="wrapper-ujian d-flex justify-content-center align-items-center flex-wrap">
                <button id="defaultOpen" class="btn rounded-circle mx-2 mb-3 tablinks" onclick="openCity(event,'ForSoal')">1</button>
                <button class="btn rounded-circle mx-2 mb-3 tablinks" onclick="openCity(event, 'ForSoal2')">2</button>
                <button class="btn btn-ragu_ragu mx-2 mb-3" onclick="openCity(event, 'ForSoal3')">3</button>
                <button class="btn rounded-circle mx-2 mb-3 tablinks" onclick="openCity(event, 'ForSoal4')">4</button>
                <button class="btn rounded-circle mx-2 mb-3 tablinks" onclick="openCity(event, 'ForSoal5')">5</button>
            </div>
        </div>
    </div>
  </div>
  <div class="offcanvas-footer bg-none my-3 mx-4">
        <div class="wrapper-button">
            <a href="#" class="btn btn-block btn-md btn-danger btn-detail-tugas" style="width: 100%;">Selesai Ujian</a>
        </div>
  </div>
</div>
<!-- Header -->
<header class="header position-fixed">
    <div id="header" class="row">
        <div class="col-auto">
            <a data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample" class="btn btn-44 rounded-circle menu-btn number-exam">
                <i class="fa-regular fa-objects-column" style="font-size:20px; color: #EC3528;"></i>
            </a>
        </div>
        <div class="col d-flex justify-content-center align-items-center text-center">
            <h6 class="text-dark">Paket Ujian 01</h6>
        </div>
        <div class="col-auto">
            <a href="#" target="_self" class="btn btn-44">
            </a>
        </div>
    </div>
</header>
<!-- Header ends -->

<!-- main page content -->
<div class="main-container container">
    <div class="col-12 col-md-12 col-lg-12 tabcontent" id="ForSoal">
        <div class="card shadow-none bg-transparent">
            <div class="row">
                <div class="col-12">
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="row mt-2">
                                <div class="col align-self-center">
                                    <p class="mb-0 size-15 text-dark fw-medium">Pertanyaan <span>1</span> dari <span>40</span> soal</p>
                                    <p class="mb-0 size-13 fw-normal fst-italic color-f73563">Soal bertipe pilihan ganda</p>
                                </div>
                            </div>
                            <div class="row d-flex justify-content-center align-items-center mt-3">
                                <div class="col-6 mb-2">
                                    <figure class="overflow-hidden rounded-15 text-center image-ujian" style="background-position: center; background-repeat: no-repeat; background-size: cover; background-image: url('<?= base_url('assets/images/no-photo-big.png');?>')">
                                    </figure>
                                </div>
                                <div class="col-6 mb-2">
                                    <figure class="overflow-hidden rounded-15 text-center image-ujian" style="background-position: center; background-repeat: no-repeat; background-size: cover; background-image: url('<?= base_url('assets/images/no-photo-big.png');?>')">
                                    </figure>
                                </div>
                                <div class="col-6 mb-2">
                                    <figure class="overflow-hidden rounded-15 text-center image-ujian" style="background-position: center; background-repeat: no-repeat; background-size: cover; background-image: url('<?= base_url('assets/images/no-photo-big.png');?>')">
                                    </figure>
                                </div>
                                <div class="col-6 mb-2">
                                    <figure class="overflow-hidden rounded-15 text-center image-ujian" style="background-position: center; background-repeat: no-repeat; background-size: cover; background-image: url('<?= base_url('assets/images/no-photo-big.png');?>')">
                                    </figure>
                                </div>
                                <div class="col-12 align-self-center">
                                    <p class="mb-0 size-14 text-dark fw-normal">Siapakah pendiri dari perusahaan Google awalnya dan siapakah yang menjadi CEO google saat ini dan berikan penjelasan jelas kenapa dia bisa berhasil menjadi CEO dari google?</p>
                                </div>
                            </div>
                            <div class="row mt-3">

                                <div class="col-12 col-md-12 col-lg-12 col-sm-12 mb-3">
                                    
                                    <label>
                                        <div class="card card-default card-input-true">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="value-true top-0 right-0 mb-2 text-end">
                                                        <i class="fa-solid fa-circle-check size-24" style="color: #2ecc71;"></i>
                                                    </div>
                                                </div>
                                                <div class="row d-flex justify-content-center align-items-center">
                                                    <div class="col-6 mb-2">
                                                        <figure class="overflow-hidden rounded-15 text-center image-ujian-jawaban" style="background-position: center; background-repeat: no-repeat; background-size: cover; background-image: url('<?= base_url('assets/images/no-photo-big.png');?>')">
                                                        </figure>
                                                    </div>
                                                    <div class="col-6 mb-2">
                                                        <figure class="overflow-hidden rounded-15 text-center image-ujian-jawaban" style="background-position: center; background-repeat: no-repeat; background-size: cover; background-image: url('<?= base_url('assets/images/no-photo-big.png');?>')">
                                                        </figure>
                                                    </div>
                                                    <div class="col-6 mb-2">
                                                        <figure class="overflow-hidden rounded-15 text-center image-ujian-jawaban" style="background-position: center; background-repeat: no-repeat; background-size: cover; background-image: url('<?= base_url('assets/images/no-photo-big.png');?>')">
                                                        </figure>
                                                    </div>
                                                    <div class="col-6 mb-2">
                                                        <figure class="overflow-hidden rounded-15 text-center image-ujian-jawaban" style="background-position: center; background-repeat: no-repeat; background-size: cover; background-image: url('<?= base_url('assets/images/no-photo-big.png');?>')">
                                                        </figure>
                                                    </div>
                                                </div>
                                                <p class="mb-0 size-14 text-dark fw-normal">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Condimentum mattis vulputate ullamcorper etiam non..</p>
                                            </div>
                                        </div>

                                    </label>
                                    
                                </div>
                                <div class="col-12 col-md-12 col-lg-12 col-sm-12 mb-3">
                                    
                                    <label>
                                        <div class="card card-default card-input">
                                            <div class="card-body">
                                                <p class="mb-0 size-14 text-dark fw-normal">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Condimentum mattis vulputate ullamcorper etiam non.</p>
                                            </div>
                                        </div>
                                    </label>
                                    
                                </div>

                                <div class="col-12 col-md-12 col-lg-12 col-sm-12 mb-3">
                                    
                                    <label>
                                        <div class="card card-default card-input-wrong">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="value-wrong top-0 right-0 mb-2 text-end">
                                                        <i class="fa-solid fa-circle-xmark size-24" style="color: #ec3528;"></i>
                                                    </div>
                                                </div>
                                                <p class="mb-0 size-14 text-dark fw-normal">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Condimentum mattis vulputate ullamcorper etiam non..</p>
                                            </div>
                                        </div>

                                    </label>
                                    
                                </div>
                                <div class="col-12 col-md-12 col-lg-12 col-sm-12 mb-3">
                                    
                                    <label>
                                        <div class="card card-default card-input">
                                            <div class="card-body">
                                                <p class="mb-0 size-14 text-dark fw-normal">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Condimentum mattis vulputate ullamcorper etiam non.</p>
                                            </div>
                                        </div>
                                    </label>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-12 col-md-12 col-lg-12 tabcontent" id="ForSoal2">
        <div class="card shadow-none bg-transparent">
            <div class="row">
                <div class="col-12">
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="row mt-2">
                                <div class="col align-self-center">
                                    <p class="mb-0 size-15 text-dark fw-medium">Pertanyaan <span>2</span> dari <span>40</span> soal</p>
                                    <p class="mb-0 size-13 fw-normal fst-italic color-f73563">Soal bertipe multiple choice</p>
                                </div>
                            </div>
                            <div class="row d-flex justify-content-center align-items-center mt-3">
                                <div class="col-6 mb-2">
                                    <figure class="overflow-hidden rounded-15 text-center image-ujian" style="background-position: center; background-repeat: no-repeat; background-size: cover; background-image: url('<?= base_url('assets/images/no-photo-big.png');?>')">
                                    </figure>
                                </div>
                                <div class="col-6 mb-2">
                                    <figure class="overflow-hidden rounded-15 text-center image-ujian" style="background-position: center; background-repeat: no-repeat; background-size: cover; background-image: url('<?= base_url('assets/images/no-photo-big.png');?>')">
                                    </figure>
                                </div>
                                <div class="col-6 mb-2">
                                    <figure class="overflow-hidden rounded-15 text-center image-ujian" style="background-position: center; background-repeat: no-repeat; background-size: cover; background-image: url('<?= base_url('assets/images/no-photo-big.png');?>')">
                                    </figure>
                                </div>
                                <div class="col-6 mb-2">
                                    <figure class="overflow-hidden rounded-15 text-center image-ujian" style="background-position: center; background-repeat: no-repeat; background-size: cover; background-image: url('<?= base_url('assets/images/no-photo-big.png');?>')">
                                    </figure>
                                </div>
                                <div class="col-12 align-self-center">
                                    <p class="mb-0 size-14 text-dark fw-normal">Siapakah pendiri dari perusahaan Google awalnya dan siapakah yang menjadi CEO google saat ini dan berikan penjelasan jelas kenapa dia bisa berhasil menjadi CEO dari google?</p>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col align-self-center">
                                    <p class="mb-0 size-14 text-dark fw-normal">Siapakah pendiri dari perusahaan Google awalnya dan siapakah yang menjadi CEO google saat ini dan berikan penjelasan jelas kenapa dia bisa berhasil menjadi CEO dari google?</p>
                                </div>
                            </div>
                            <div class="row mt-3">

                                <div class="col-12 col-md-12 col-lg-12 col-sm-12 mb-3">
                                    
                                    <label>
                                        <div class="card card-default-2 card-input-true">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="value-true top-0 right-0 mb-2 text-end">
                                                        <i class="fa-solid fa-circle-check size-24" style="color: #2ecc71;"></i>
                                                    </div>
                                                </div>
                                                <div class="row d-flex justify-content-center align-items-center">
                                                    <div class="col-6 mb-2">
                                                        <figure class="overflow-hidden rounded-15 text-center image-ujian-jawaban" style="background-position: center; background-repeat: no-repeat; background-size: cover; background-image: url('<?= base_url('assets/images/no-photo-big.png');?>')">
                                                        </figure>
                                                    </div>
                                                    <div class="col-6 mb-2">
                                                        <figure class="overflow-hidden rounded-15 text-center image-ujian-jawaban" style="background-position: center; background-repeat: no-repeat; background-size: cover; background-image: url('<?= base_url('assets/images/no-photo-big.png');?>')">
                                                        </figure>
                                                    </div>
                                                    <div class="col-6 mb-2">
                                                        <figure class="overflow-hidden rounded-15 text-center image-ujian-jawaban" style="background-position: center; background-repeat: no-repeat; background-size: cover; background-image: url('<?= base_url('assets/images/no-photo-big.png');?>')">
                                                        </figure>
                                                    </div>
                                                    <div class="col-6 mb-2">
                                                        <figure class="overflow-hidden rounded-15 text-center image-ujian-jawaban" style="background-position: center; background-repeat: no-repeat; background-size: cover; background-image: url('<?= base_url('assets/images/no-photo-big.png');?>')">
                                                        </figure>
                                                    </div>
                                                </div>
                                                <p class="mb-0 size-14 text-dark fw-normal">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Condimentum mattis vulputate ullamcorper etiam non..</p>
                                            </div>
                                        </div>

                                    </label>
                                    
                                </div>
                                <div class="col-12 col-md-12 col-lg-12 col-sm-12 mb-3">
                                    
                                    <label>
                                        <div class="card card-default-2 card-input-true">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="value-true top-0 right-0 mb-2 text-end">
                                                        <i class="fa-solid fa-circle-check size-24" style="color: #2ecc71;"></i>
                                                    </div>
                                                </div>
                                                <p class="mb-0 size-14 text-dark fw-normal">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Condimentum mattis vulputate ullamcorper etiam non.</p>
                                            </div>
                                        </div>
                                    </label>
                                    
                                </div>

                                <div class="col-12 col-md-12 col-lg-12 col-sm-12 mb-3">
                                    
                                    <label>
                                        <div class="card card-default-2 card-input-wrong">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="value-wrong top-0 right-0 mb-2 text-end">
                                                        <i class="fa-solid fa-circle-xmark size-24" style="color: #ec3528;"></i>
                                                    </div>
                                                </div>
                                                <p class="mb-0 size-14 text-dark fw-normal">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Condimentum mattis vulputate ullamcorper etiam non..</p>
                                            </div>
                                        </div>

                                    </label>
                                    
                                </div>
                                <div class="col-12 col-md-12 col-lg-12 col-sm-12 mb-3">
                                    
                                    <label>
                                        <div class="card card-default-2 card-input">
                                            <div class="card-body">
                                                <p class="mb-0 size-14 text-dark fw-normal">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Condimentum mattis vulputate ullamcorper etiam non.</p>
                                            </div>
                                        </div>
                                    </label>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-12 col-lg-12 tabcontent" id="ForSoal3">
        <div class="card shadow-none bg-transparent">
            <div class="row">
                <div class="col-12">
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="row mt-2">
                                <div class="col align-self-center">
                                    <p class="mb-0 size-15 text-dark fw-medium">Pertanyaan <span>3</span> dari <span>40</span> soal</p>
                                    <p class="mb-0 size-13 fw-normal fst-italic color-f73563">Soal bertipe esai singkat</p>
                                </div>
                            </div>
                            <div class="row d-flex justify-content-center align-items-center mt-3">
                                <div class="col-6">
                                    <figure class="overflow-hidden rounded-15 text-center image-ujian" style="background-position: center; background-repeat: no-repeat; background-size: cover; background-image: url('<?= base_url('assets/images/no-photo-big.png');?>')">
                                    </figure>
                                </div>
                                <div class="col-6">
                                    <figure class="overflow-hidden rounded-15 text-center image-ujian" style="background-position: center; background-repeat: no-repeat; background-size: cover; background-image: url('<?= base_url('assets/images/no-photo-big.png');?>')">
                                    </figure>
                                </div>
                                <div class="col-6">
                                    <figure class="overflow-hidden rounded-15 text-center image-ujian" style="background-position: center; background-repeat: no-repeat; background-size: cover; background-image: url('<?= base_url('assets/images/no-photo-big.png');?>')">
                                    </figure>
                                </div>
                                <div class="col-6">
                                    <figure class="overflow-hidden rounded-15 text-center image-ujian" style="background-position: center; background-repeat: no-repeat; background-size: cover; background-image: url('<?= base_url('assets/images/no-photo-big.png');?>')">
                                    </figure>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col align-self-center">
                                    <p class="mb-0 size-14 text-dark fw-normal">Siapakah pendiri dari perusahaan Google awalnya dan siapakah yang menjadi CEO google saat ini dan berikan penjelasan jelas kenapa dia bisa berhasil menjadi CEO dari google?</p>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-12 col-md-12 col-lg-12 col-sm-12 mb-3">
                                    
                                    <label>
                                    
                                        <div class="card card-default-2 card-input-wrong">
                                            <div class="card-body">
                                                <p class="mb-0 size-14 text-dark fw-normal d-flex align-self-center"> <i class="fa-solid fa-circle-xmark size-22 me-2" style="color: #ec3528;"></i>Lorem</p>
                                            </div>
                                        </div>

                                    </label>
                                    
                                </div>

                                <div class="col-12 col-md-12 col-lg-12 col-sm-12 mb-3">
                                    
                                    <label>
                                        <div class="card card-default-2 card-input-true">
                                            <div class="card-body">
                                                <p class="mb-0 size-14 text-dark fw-normal d-flex align-self-center"> <i class="fa-solid fa-circle-check size-24 me-2" style="color: #2ecc71;"></i> Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                            </div>
                                        </div>

                                    </label>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-12 col-lg-12 tabcontent" id="ForSoal4">
        <div class="card shadow-none bg-transparent">
            <div class="row">
                <div class="col-12">
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="row mt-2">
                                <div class="col align-self-center">
                                    <p class="mb-0 size-15 text-dark fw-medium">Pertanyaan <span>4</span> dari <span>40</span> soal</p>
                                    <p class="mb-0 size-13 fw-normal fst-italic color-f73563">Soal bertipe esai panjang</p>
                                </div>
                            </div>
                            <div class="row d-flex justify-content-center align-items-center mt-3">
                                <div class="col-6">
                                    <figure class="overflow-hidden rounded-15 text-center image-ujian" style="background-position: center; background-repeat: no-repeat; background-size: cover; background-image: url('<?= base_url('assets/images/no-photo-big.png');?>')">
                                    </figure>
                                </div>
                                <div class="col-6">
                                    <figure class="overflow-hidden rounded-15 text-center image-ujian" style="background-position: center; background-repeat: no-repeat; background-size: cover; background-image: url('<?= base_url('assets/images/no-photo-big.png');?>')">
                                    </figure>
                                </div>
                                <div class="col-6">
                                    <figure class="overflow-hidden rounded-15 text-center image-ujian" style="background-position: center; background-repeat: no-repeat; background-size: cover; background-image: url('<?= base_url('assets/images/no-photo-big.png');?>')">
                                    </figure>
                                </div>
                                <div class="col-6">
                                    <figure class="overflow-hidden rounded-15 text-center image-ujian" style="background-position: center; background-repeat: no-repeat; background-size: cover; background-image: url('<?= base_url('assets/images/no-photo-big.png');?>')">
                                    </figure>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col align-self-center">
                                    <p class="mb-0 size-14 text-dark fw-normal">Siapakah pendiri dari perusahaan Google awalnya dan siapakah yang menjadi CEO google saat ini dan berikan penjelasan jelas kenapa dia bisa berhasil menjadi CEO dari google?</p>
                                </div>
                            </div>
                            <div class="row mt-3">
    
                                <div class="col-12 col-md-12 col-lg-12 col-sm-12 mb-3">
                                    
                                    <label>
                                    
                                        <div class="card card-default-2 card-input-wrong">
                                            <div class="card-body">
                                                <p class="mb-0 size-14 text-dark fw-normal d-flex align-self-center"> <i class="fa-solid fa-circle-xmark size-22 me-2" style="color: #ec3528;"></i>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio sint alias laborum minima nemo. Nam laborum reiciendis aperiam.</p>
                                            </div>
                                        </div>

                                    </label>
                                    
                                </div>

                                <div class="col-12 col-md-12 col-lg-12 col-sm-12 mb-3">
                                    
                                    <label>
                                        <div class="card card-default-2 card-input-true">
                                            <div class="card-body">
                                                <p class="mb-0 size-14 text-dark fw-normal d-flex align-self-center"> <i class="fa-solid fa-circle-check size-24 me-2" style="color: #2ecc71;"></i> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Atque possimus laudantium perferendis non? Non repudiandae magni natus qui nisi laboriosam rerum ad animi nihil veritatis reprehenderit facilis, architecto, vitae corrupti?</p>
                                            </div>
                                        </div>

                                    </label>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-12 col-lg-12 tabcontent" id="ForSoal5">
        <div class="card shadow-none bg-transparent">
            <div class="row">
                <div class="col-12">
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="row mt-2">
                                <div class="col align-self-center">
                                    <p class="mb-0 size-15 text-dark fw-medium">Pertanyaan <span>5</span> dari <span>40</span> soal</p>
                                    <p class="mb-0 size-13 fw-normal fst-italic color-f73563">Soal bertipe penjodohan</p>
                                </div>
                            </div>
                            <div class="row d-flex justify-content-center align-items-center mt-3">
                                <div class="col-6">
                                    <figure class="overflow-hidden rounded-15 text-center image-ujian" style="background-position: center; background-repeat: no-repeat; background-size: cover; background-image: url('<?= base_url('assets/images/no-photo-big.png');?>')">
                                    </figure>
                                </div>
                                <div class="col-6">
                                    <figure class="overflow-hidden rounded-15 text-center image-ujian" style="background-position: center; background-repeat: no-repeat; background-size: cover; background-image: url('<?= base_url('assets/images/no-photo-big.png');?>')">
                                    </figure>
                                </div>
                                <div class="col-6">
                                    <figure class="overflow-hidden rounded-15 text-center image-ujian" style="background-position: center; background-repeat: no-repeat; background-size: cover; background-image: url('<?= base_url('assets/images/no-photo-big.png');?>')">
                                    </figure>
                                </div>
                                <div class="col-6">
                                    <figure class="overflow-hidden rounded-15 text-center image-ujian" style="background-position: center; background-repeat: no-repeat; background-size: cover; background-image: url('<?= base_url('assets/images/no-photo-big.png');?>')">
                                    </figure>
                                </div>
                            </div>
                            <div class="row my-3">
                                <div class="col align-self-center">
                                    <p class="mb-0 size-14 text-dark fw-normal">Siapakah pendiri dari perusahaan Google awalnya dan siapakah yang menjadi CEO google saat ini dan berikan penjelasan jelas kenapa dia bisa berhasil menjadi CEO dari google?</p>
                                </div>
                            </div>

                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="row d-flex justify-content-center align-items-center">
                                        <div class="col-6">
                                            <figure class="overflow-hidden rounded-15 text-center image-ujian-jawaban" style="background-position: center; background-repeat: no-repeat; background-size: cover; background-image: url('<?= base_url('assets/images/no-photo-big.png');?>')">
                                            </figure>
                                        </div>
                                        <div class="col-6">
                                            <figure class="overflow-hidden rounded-15 text-center image-ujian-jawaban" style="background-position: center; background-repeat: no-repeat; background-size: cover; background-image: url('<?= base_url('assets/images/no-photo-big.png');?>')">
                                            </figure>
                                        </div>
                                        <div class="col-6">
                                            <figure class="overflow-hidden rounded-15 text-center image-ujian-jawaban" style="background-position: center; background-repeat: no-repeat; background-size: cover; background-image: url('<?= base_url('assets/images/no-photo-big.png');?>')">
                                            </figure>
                                        </div>
                                        <div class="col-6">
                                            <figure class="overflow-hidden rounded-15 text-center image-ujian-jawaban" style="background-position: center; background-repeat: no-repeat; background-size: cover; background-image: url('<?= base_url('assets/images/no-photo-big.png');?>')">
                                            </figure>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col align-self-center">
                                            <p class="mb-0 size-14 text-dark fw-normal">Siapakah pendiri dari perusahaan Google awalnya dan siapakah yang menjadi CEO google saat ini dan berikan penjelasan jelas kenapa dia bisa berhasil menjadi CEO dari google?</p>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
        
                                        <div class="col-12 col-md-12 col-lg-12 col-sm-12 mb-3">
                                            
                                            <label>
                                                <ul class="list-group">
                                                    <li class="list-group-item wrong"><span class="mb-0 size-14 text-dark fw-normal d-flex align-self-center"><i class="fa-solid fa-circle-xmark size-22 me-2" style="color: #ec3528;"></i> Pendiri Larry Page & Sergey Brin</span></li>
                                                    <li class="list-group-item true"><span class="mb-0 size-14 text-dark fw-normal d-flex align-self-center"> <i class="fa-solid fa-circle-check size-24 me-2" style="color: #2ecc71;"></i> Pendiri Steve Jobs</span></li>
                                                    <li class="list-group-item"><span class="mb-0 size-14 text-dark fw-normal d-flex align-self-center">Pendiri Bill Gates</span></li>
                                                </ul>
                                            </label>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="row mt-3">
                                        <div class="col align-self-center">
                                            <p class="mb-0 size-14 text-dark fw-normal">Siapakah pendiri dari perusahaan Google awalnya dan siapakah yang menjadi CEO google saat ini dan berikan penjelasan jelas kenapa dia bisa berhasil menjadi CEO dari google?</p>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
        
                                        <div class="col-12 col-md-12 col-lg-12 col-sm-12 mb-3">
                                            
                                            <label>
                                                <ul class="list-group">
                                                    <li class="list-group-item wrong"><span class="mb-0 size-14 text-dark fw-normal d-flex align-self-center"><i class="fa-solid fa-circle-xmark size-22 me-2" style="color: #ec3528;"></i> Pendiri Larry Page & Sergey Brin</span></li>
                                                    <li class="list-group-item true"><span class="mb-0 size-14 text-dark fw-normal d-flex align-self-center"> <i class="fa-solid fa-circle-check size-24 me-2" style="color: #2ecc71;"></i> Pendiri Steve Jobs</span></li>
                                                    <li class="list-group-item"><span class="mb-0 size-14 text-dark fw-normal d-flex align-self-center">Pendiri Bill Gates</span></li>
                                                </ul>
                                            </label>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="row mt-3">
                                        <div class="col align-self-center">
                                            <p class="mb-0 size-14 text-dark fw-normal">Siapakah pendiri dari perusahaan Google awalnya dan siapakah yang menjadi CEO google saat ini dan berikan penjelasan jelas kenapa dia bisa berhasil menjadi CEO dari google?</p>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
        
                                        <div class="col-12 col-md-12 col-lg-12 col-sm-12 mb-3">
                                            
                                            <label>
                                                <ul class="list-group">
                                                    <li class="list-group-item wrong"><span class="mb-0 size-14 text-dark fw-normal d-flex align-self-center"><i class="fa-solid fa-circle-xmark size-22 me-2" style="color: #ec3528;"></i> Pendiri Larry Page & Sergey Brin</span></li>
                                                    <li class="list-group-item true"><span class="mb-0 size-14 text-dark fw-normal d-flex align-self-center"> <i class="fa-solid fa-circle-check size-24 me-2" style="color: #2ecc71;"></i> Pendiri Steve Jobs</span></li>
                                                    <li class="list-group-item"><span class="mb-0 size-14 text-dark fw-normal d-flex align-self-center">Pendiri Bill Gates</span></li>
                                                </ul>
                                            </label>
                                            
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
</div>
<!-- main page content ends -->

<footer class="footer footer-ujian">
    <div id="footer" class="container">
        <div class="row d-flex justify-content-between align-items-center my-3">
            <div class="col-12 d-flex justify-content-center align-self-center pe-4">
                <div class="timer-exam d-flex justify-content-center align-items-center py-2">
                    <i class="fa-solid fa-hourglass-clock me-2" style="font-size: 15px; color: #EC3528;"></i>
                    <p class="size-13" style="color: #EC3528">00 : 60 : 00</p>
                </div>
            </div>
        </div> 
        <div class="border-bottom"></div>
        <div class="row d-flex justify-content-center align-items-center mt-3">
            <div class="col-3 d-flex justify-content-center align-items-center"><a href="#" class="btn btn-danger d-flex justify-content-center align-items-center rounded-circle next-button"><i class="fa-solid fa-chevron-left text-white"></i></a></div>
            <div class="col-6 d-flex justify-content-center align-items-center"><button class="btn btn-outline-warning rounded-pill ragu-button">Ragu - Ragu</button></div>
            <div class="col-3 d-flex justify-content-center align-items-center"><a href="<?= base_url('ujian/exam_multiple')?>" class="btn btn-danger d-flex justify-content-center align-items-center  rounded-circle previous-button"><i class="fa-solid fa-chevron-right text-white"></i></a></div>
        </div>
    </div>
</footer>