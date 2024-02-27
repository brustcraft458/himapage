<?php
$rootdir = "../..";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />

  <title>Depatermen Kwu</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <?php require_once("$rootdir/assets/component/head-res.php"); ?>

  <!-- =======================================================
  * Template Name: Arsha
  * Updated: Jan 29 2024 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
  <?php require_once("$rootdir/assets/component/header.php"); ?>

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1"
          data-aos="fade-up" data-aos-delay="200">
          <h1>DEPARTEMEN KWU</h1>
          <h2>KEWIRAUSAHAAN</h2>
          <p class="text-white">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit.
            Repellendus dolor iusto, obcaecati quasi ut facilis architecto
            eligendi officiis autem doloremque esse recusandae accusamus nihil
            molestiae accusantium, ratione molestias? Tenetur, commodi.
          </p>
          <!-- <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="#about" class="btn-get-started scrollto">Get Started</a>
            <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
          </div> -->
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="<?= $rootdir ?>/assets/img/departemen/1708172657680.png"
            class="depatermen-img img-fluid animated rounded" alt="" />
        </div>
      </div>
    </div>
  </section>
  <!-- End Hero -->

  <main id="main">
    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us section-bg">
      <div class="container-fluid" data-aos="fade-up">
        <div class="row">
          <div class="">
            <div class="content">
              <h3 class="text-center"><strong>PROKER</strong></h3>

              <p class="text-center">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                Duis aute irure dolor in reprehenderit
              </p>
            </div>

            <div class="accordion-list">
              <ul>
                <li>
                  <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-1">
                    <span>01</span>Himatif Store<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i>
                  </a>
                  <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                    <p>
                      Feugiat pretium nibh ipsum consequat. Tempus iaculis
                      urna id volutpat lacus laoreet non curabitur gravida.
                      Venenatis lectus magna fringilla urna porttitor rhoncus
                      dolor purus non.
                    </p>
                  </div>
                </li>

                <li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed">
                    <span>02</span>IT Klinik<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i>
                  </a>
                  <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                      Dolor sit amet consectetur adipiscing elit pellentesque
                      habitant morbi. Id interdum velit laoreet id donec
                      ultrices. Fringilla phasellus faucibus scelerisque
                      eleifend donec pretium. Est pellentesque elit
                      ullamcorper dignissim. Mauris ultrices eros in cursus
                      turpis massa tincidunt dui.
                    </p>
                  </div>
                </li>

                <li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3" class="collapsed">
                    <span>03</span>Webinar Kewirausahaan<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i>
                  </a>
                  <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                      Eleifend mi in nulla posuere sollicitudin aliquam
                      ultrices sagittis orci. Faucibus pulvinar elementum
                      integer enim. Sem nulla pharetra diam sit amet nisl
                      suscipit. Rutrum tellus pellentesque eu tincidunt.
                      Lectus urna duis convallis convallis tellus. Urna
                      molestie at elementum eu facilisis sed odio morbi quis
                    </p>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container" data-aos="fade-up">
        <div class="section-title py-0">
          <h2>Anggota KWU</h2>
        </div>

        <div class="gradient-pading-sec">
          <div class="scrollbar d-flex flex-row gap-3">
            <?php for ($x = 0; $x <= 10; $x++): ?>
              <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="100">
                <div class="member d-flex align-items-start">
                  <div class="pic" style="width: 120px; height: 120px">
                    <img src="<?= $rootdir ?>/assets/img/team/team-1.jpg" class="img-fluid" alt="" />
                  </div>
                  <div class="member-info" style="">
                    <h4>Gozali</h4>
                    <span>Ketua Departemen</span>

                    <div class="social">
                      <a href=""><i class="ri-instagram-fill"></i></a>
                      <a href=""><i class="ri-mail-fill"></i> </a>
                    </div>
                  </div>
                </div>
              </div>
            <?php endfor; ?>
          </div>
        </div>
      </div>
    </section>
    <!-- End Team Section -->

    <!-- ======= Event Section ======= -->
    <section id="event" class="pricing">
      <div class="container" data-aos="fade-up">
        <div class="section-title py-0">
          <h2>Store & Event KWU</h2>
        </div>

        <div class="gradient-pading">
          <div class="scrollbar d-flex flex-row gap-4">
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
              <div class="box featured">
                <h4 style="font-size: 31px">Pemesanan PDH</h4>
                <ul>
                  <li><i class="bx bx-check"></i>Terlihat Keren</li>
                  <li><i class="bx bx-check"></i>Mendapatkan Kehangatan</li>
                  <li class="na"><i class="bx bx-x"></i><span>Mendapatkan Pasangan</span></li>
                  <li><i class="bx bx-check"></i>Mendapatkan Merchandines</li>
                  <li class="na"><i class="bx bx-x"></i> <span>Pharetra massa massa ultricies</span></li>
                </ul>
                <button type="button" class="buy-btn" data-bs-toggle="modal" data-bs-target="#pesanpdh-form">
                  Beli Sekarang
                </button>
              </div>
            </div>
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
              <div class="box">
                <h4 style="font-size: 31px">IT Klinik</h4>
                <ul>
                  <li><i class="bx bx-check"></i>Menambah Wawasan</li>
                  <li><i class="bx bx-check"></i>Mendapatkan Sertifikat</li>
                  <li class="na"><i class="bx bx-x"></i><span>Membangun Rasa Cinta</span></li>
                  <li><i class="bx bx-check"></i>Membangun Relasi</li>
                  <li class="na"><i class="bx bx-x"></i> <span>Pharetra massa massa ultricies</span></li>
                </ul>
                <button type="button" class="buy-btn" data-bs-toggle="modal" data-bs-target="#itklinik-form">
                  Daftar Sekarang
                </button>
              </div>
            </div>
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
              <div class="box">
                <h4 style="font-size: 31px">Webinar Kewirausahaan</h4>
                <ul>
                  <li><i class="bx bx-check"></i>Menambah Wawasan</li>
                  <li><i class="bx bx-check"></i>Mendapatkan Sertifikat</li>
                  <li class="na"><i class="bx bx-x"></i><span>Mendapatkan SK</span></li>
                  <li><i class="bx bx-check"></i>Membangun Relasi</li>
                  <li class="na"><i class="bx bx-x"></i> <span>Pharetra massa massa ultricies</span></li>
                </ul>
                <button type="button" class="buy-btn" data-bs-toggle="modal" data-bs-target="#utd7-form">
                  Daftar Sekarang
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Event Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">
        <div class="section-title py-0">
          <h2>Dokumentasi</h2>
        </div>

        <ul id="portfolio-flters" class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
          <li data-filter="*" class="filter-active">All</li>
          <li data-filter=".filter-app">Acara</li>
          <li data-filter=".filter-card">Lainnya</li>
        </ul>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-img">
              <img src="<?= $rootdir ?>/assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="" />
            </div>
            <div class="portfolio-info">
              <h4>App 1</h4>
              <p>App</p>
              <a href="<?= $rootdir ?>/assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1">
                <i class="bx bx-plus"></i>
              </a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-img">
              <img src="<?= $rootdir ?>/assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="" />
            </div>
            <div class="portfolio-info">
              <h4>Web 3</h4>
              <p>Web</p>
              <a href="<?= $rootdir ?>/assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3">
                <i class="bx bx-plus"></i>
              </a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-img">
              <img src="<?= $rootdir ?>/assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="" />
            </div>
            <div class="portfolio-info">
              <h4>App 2</h4>
              <p>App</p>
              <a href="<?= $rootdir ?>/assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 2">
                <i class="bx bx-plus"></i>
              </a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-img">
              <img src="<?= $rootdir ?>/assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="" />
            </div>
            <div class="portfolio-info">
              <h4>Card 2</h4>
              <p>Card</p>
              <a href="<?= $rootdir ?>/assets/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 2">
                <i class="bx bx-plus"></i>
              </a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-img">
              <img src="<?= $rootdir ?>/assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="" />
            </div>
            <div class="portfolio-info">
              <h4>Web 2</h4>
              <p>Web</p>
              <a href="<?= $rootdir ?>/assets/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 2">
                <i class="bx bx-plus"></i>
              </a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Portfolio Section -->

  </main><!-- End #main -->

  <modal>
    <!-- Pemesanan PDH -->
    <div class="modal fade" id="pesanpdh-form" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <form action="" method="POST" class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Pemesanan PDH</h5>
            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="form-group">
              <label for="nama" class="col-form-label">Nama</label>
              <input type="text" class="form-control text-uppercase" id="nama" name="nama" required />
            </div>
            <div class="form-group">
              <label for="nim" class="col-form-label">Nim</label>
              <input type="number" class="form-control text-uppercase" id="nim" name="nim" required />
            </div>
            <div class="form-group">
              <label for="email" class="col-form-label">Email</label>
              <input type="email" class="form-control text-uppercase" id="email" name="email" required />
            </div>
            <div class="form-group">
              <label for="kelas" class="col-form-label">Kelas</label>
              <input type="text" class="form-control text-uppercase" id="kelas" name="kelas" required />
            </div>
            <div class="form-group">
              <label for="angkatan" class="col-form-label">Angkatan</label>
              <input type="text" class="form-control text-uppercase" id="angkatan" name="angkatan" required/>
            </div>
            <div class="form-group">
              <label for="no_wa" class="col-form-label">No Whatsapp</label>
              <input type="number" class="form-control text-uppercase" id="no_wa" name="no_wa" required />
            </div>
            <div class="form-group">
              <label for="ukuran" class="col-form-label">Ukuran</label>
              <select class="form-select" aria-label="Default select example" required>
                <option selected>Pilih Ukuran</option>
                <option value="1">M</option>
                <option value="2">L</option>
                <option value="3">XL</option>
              </select>
            </div>
            <div class="form-group">
              <label for="bukti_pembayaran" class="col-form-label">Bukti Pembayaran</label>
              <input type="file" class="form-control" id="bukti_pembayaran" name="bukti_pembayaran" accept=".png, .jpeg, .jpg" required />
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
              Batal
            </button>
            <button type="submit" class="btn btn-primary" name="send_form" value="pemesanan_pdh">
              Kirim
            </button>
          </div>
        </form>
      </div>
    </div>

    <!-- IT Klinik -->
    <div class="modal fade" id="itklinik-form" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <form action="" method="POST" class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Konsultasi IT Klinik</h5>
            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="form-group">
              <label for="nama" class="col-form-label">Nama</label>
              <input type="text" class="form-control text-uppercase" id="nama" name="nama" required />
            </div>
            <div class="form-group">
              <label for="email" class="col-form-label">Email</label>
              <input type="email" class="form-control text-uppercase" id="email" name="email" required />
            </div>
            <div class="form-group">
              <label for="no_wa" class="col-form-label">No Whatsapp</label>
              <input type="number" class="form-control text-uppercase" id="no_wa" name="no_wa" required />
            </div>
            <div class="form-group">
              <label for="jenis" class="col-form-label">Jenis</label>
              <input type="text" class="form-control text-uppercase" id="jenis" name="jenis" required />
            </div>
            <div class="form-group">
              <label for="kendala" class="col-form-label">Kendala</label>
              <input type="text" class="form-control text-uppercase" id="kendala" name="kendala" required />
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
              Batal
            </button>
            <button type="submit" class="btn btn-primary" name="send_form" value="it_klinik">
              Kirim
            </button>
          </div>
        </form>
      </div>
    </div>
  </modal>

  <?php require_once("$rootdir/assets/component/footer.php"); ?>

  <?php require_once("$rootdir/assets/component/footer-res.php"); ?>
</body>

</html>