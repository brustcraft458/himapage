<?php
$rootdir = ".";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Himatif Page</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <?php require_once("$rootdir/assets/component/head-res.php") ?>

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
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>Himatif Kodingin</h1>
          <h2>
          Himatif salam koding adalah mantra yang menggema di ruang-ruang kuliah, laboratorium, dan komunitas-komunitas pengembang di seluruh penjuru. Itu lebih dari sekadar kata-kata, namun itu adalah simbol dari semangat kolaboratif, eksplorasi tak terbatas, dan dedikasi terhadap kemajuan teknologi.</h2>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="#pricing" class="btn-get-started scrollto">Lihat Layanan</a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <!-- <img src="<?=$rootdir?>/assets/img/hero-img.png" class="img-fluid animated" alt=""> -->
          <iframe class="hero-video img-fluid rounded-3" src="https://www.youtube.com/embed/1b025-rE5e4?si=wMmibozWgy6yqeoD" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients section-bg">
      <div class="container">
        <div class="d-flex align-items-center justify-content-center" data-aos="zoom-in">
          <div class="">
            <img src="<?=$rootdir?>/assets/img/logo/fik.png" width="140" class="img-fluid" alt="">
          </div>
          <div class="">
            <img src="<?=$rootdir?>/assets/img/logo/himatif.png" width="140" class="img-fluid" style="scale: 1.8" alt="">
          </div>
          <div class="">
            <img src="<?=$rootdir?>/assets/img/logo/ubp.png" width="140" class="img-fluid" alt="">
          </div>
        </div>

      </div>
    </section><!-- End Cliens Section -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Tentang Kami</h2>
        </div>

        <div class="row content">
          <div class="col-lg-6">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>
              <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate velit</li>
              <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>
            </ul>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
              Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
              velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
              culpa qui officia deserunt mollit anim id est laborum.
            </p>
            <a href="#" class="btn-learn-more">Learn More</a>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us section-bg">
      <div class="container-fluid" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

            <div class="content">
              <h3><strong>Visi Misi</strong></h3>
              <p>
                Meningkatkan peran HIMATIF sebagai wadah yang
                aktif dan responsif, guna meningkatkan pengalaman
                akademik serta untuk menampung dan menyalurkan
                aspirasi mahasiswa teknik informatika
              </p>
            </div>

            <div class="accordion-list">
              <ul>
                <li>
                  <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-1"><span>01</span> Menjadi jembatan akademik <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                    <p>
                      Menjadi jembatan bagi mahasiswa untuk meningkatkan potensi akademik
                    </p>
                  </div>
                </li>

                <li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed"><span>02</span> Memaksimalkan wadah aspirasi <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                      Memaksimalkan peran HIMATIF sebagai wadah dalam menampung dan menyalurkan aspirasi mahasiswa Teknik Informatika
                    </p>
                  </div>
                </li>

                <li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3" class="collapsed"><span>03</span> Menjalin Kerja Sama Dosen <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                      Menjalin Kerja Sama yang Baik Kepada Dosen dan Mahasiswa
                    </p>
                  </div>
                </li>

                <li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-4" class="collapsed"><span>04</span> Mendukung peningkatan akademik <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-4" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                      Menjadikan HIMATIF sebagai wadah untuk mendukung peningkatan bidang akademik serta non-akademi
                    </p>
                  </div>
                </li>

              </ul>
            </div>

          </div>

          <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" style='background-image: url("<?=$rootdir?>/assets/img/logo/gantari.png");' data-aos="zoom-in" data-aos-delay="150">&nbsp;</div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-title py-0">
          <h2>Depatermen Himatif</h2>
        </div>

        <div class="gradient-pading">
          <div class="scrollbar d-flex flex-row gap-3 bd-highlight mb-3">
              <a class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" href="<?=$rootdir?>/depatermen/penristek" data-aos="zoom-in" data-aos-delay="200">
                <div class="box icon-box">
                  <div class="icon"><i class="bx bx-file"></i></div>
                  <h4>Penristek</h4>
                  <p class="text-dark">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
                </div>
              </a>
              <a class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" href="<?=$rootdir?>/depatermen/miba" data-aos="zoom-in" data-aos-delay="200">
                <div class="box icon-box">
                  <div class="icon"><i class="bx bx-file"></i></div>
                  <h4>Miba</h4>
                  <p class="text-dark">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
                </div>
              </a>
              <a class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" href="<?=$rootdir?>/depatermen/sosial" data-aos="zoom-in" data-aos-delay="200">
                <div class="box icon-box">
                  <div class="icon"><i class="bx bx-file"></i></div>
                  <h4>Sosial</h4>
                  <p class="text-dark">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
                </div>
              </a>
              <a class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" href="<?=$rootdir?>/depatermen/sosial" data-aos="zoom-in" data-aos-delay="200">
                <div class="box icon-box">
                  <div class="icon"><i class="bx bx-file"></i></div>
                  <h4>KWU</h4>
                  <p class="text-dark">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
                </div>
              </a>
              <a class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" href="<?=$rootdir?>/depatermen/sosial" data-aos="zoom-in" data-aos-delay="200">
                <div class="box icon-box">
                  <div class="icon"><i class="bx bx-file"></i></div>
                  <h4>PSDMO</h4>
                  <p class="text-dark">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
                </div>
              </a>
              <a class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" href="<?=$rootdir?>/depatermen/sosial" data-aos="zoom-in" data-aos-delay="200">
                <div class="box icon-box">
                  <div class="icon"><i class="bx bx-file"></i></div>
                  <h4>Humas</h4>
                  <p class="text-dark">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
                </div>
              </a>
              <a class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" href="<?=$rootdir?>/depatermen/sosial" data-aos="zoom-in" data-aos-delay="200">
                <div class="box icon-box">
                  <div class="icon"><i class="bx bx-file"></i></div>
                  <h4>Medinfo</h4>
                  <p class="text-dark">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
                </div>
              </a>
              <a class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" href="<?=$rootdir?>/depatermen/sosial" data-aos="zoom-in" data-aos-delay="200">
                <div class="box icon-box">
                  <div class="icon"><i class="bx bx-file"></i></div>
                  <h4>Pasif</h4>
                  <p class="text-dark">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
                </div>
              </a>
          </div>
        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title py-0">
          <h2>Ketua Himatif</h2>
        </div>

        <div class="gradient-pading-sec">
          <div class="scrollbar d-flex flex-row gap-3">
            <?php for ($x = 0; $x <= 10; $x++) : ?>
              <div class="col-lg-6 mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="200">
                <div class="box member d-flex align-items-start">
                  <div class="pic"><img src="<?=$rootdir?>/assets/img/team/team-2.jpg" class="img-fluid" alt=""></div>
                  <div class="member-info">
                    <h4>Sarah Jhonson</h4>
                    <span>Ketua Himatif</span>
                    <p>Tetap hidup meskipun digidaw biskuit ahoy</p>
                    <div class="social">
                      <a href="https://instagram.com/"><i class="ri-instagram-fill"></i></a>
                      <a href="mailto:namaorang@mhs.ubpkarawang.ac.id?subject=Himatif Page"> <i class="ri-mail-fill"></i> </a>
                    </div>
                  </div>
                </div>
              </div>
            <?php endfor;?>
          </div>
        </div>

      </div>
    </section><!-- End Team Section -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Layanan Himatif</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="gradient-pading">
          <div class="scrollbar d-flex flex-row gap-4">
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
              <div class="box featured">
                <h4>Registrasi Event</h4>
                <ul>
                  <li><i class="bx bx-check"></i>Menambah Wawasan</li>
                  <li><i class="bx bx-check"></i>Mendapatkan Sertifikat</li>
                  <li class="na"><i class="bx bx-x"></i><span>Mendapatkan SK</span></li>
                  <li><i class="bx bx-check"></i>Membangun Relasi</li>
                  <li class="na"><i class="bx bx-x"></i> <span>Pharetra massa massa ultricies</span></li>
                </ul>
                <a href="<?=$rootdir?>/redirect.php?form=event" class="buy-btn">Lihat Sekarang</a>
              </div>
            </div>
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
              <div class="box">
                <h4>Oprec Kepanitian</h4>
                <ul>
                  <li><i class="bx bx-check"></i>Menambah Wawasan</li>
                  <li><i class="bx bx-check"></i>Mendapatkan Sertifikat</li>
                  <li><i class="bx bx-check"></i>Mendapatkan SK</li>
                  <li><i class="bx bx-check"></i>Membangun Relasi</li>
                  <li class="na"><i class="bx bx-x"></i> <span>Massa ultricies mi quis hendrerit</span></li>
                </ul>
                <a href="<?=$rootdir?>/redirect.php?form=panitia" class="buy-btn">Lihat Sekarang</a>
              </div>
            </div>
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
              <div class="box">
                <h4>Himatif Store</h4>
                <ul>
                  <li><i class="bx bx-check"></i>Mendapatkan PDH</li>
                  <li><i class="bx bx-check"></i>Mendapatkan Merchandines</li>
                  <li class="na"><i class="bx bx-x"></i> <span>Nulla at volutpat diam uteera</span></li>
                  <li class="na"><i class="bx bx-x"></i> <span>Pharetra massa massa ultricies</span></li>
                  <li class="na"><i class="bx bx-x"></i> <span>Massa ultricies mi quis hendrerit</span></li>
                </ul>
                <a href="<?=$rootdir?>/redirect.php?form=store" class="buy-btn">Lihat Sekarang</a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Pricing Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>JL. HS.Ronggo Waluyo, Karawang, Jawa Barat</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>info@example.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+1 5589 55488 55s</p>
              </div>

              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.54042985124!2d107.2986690246002!3d-6.3239293936655505!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69762d4c316603%3A0x50a8005dfd52a897!2sUniversitas%20Buana%20Perjuangan%20Karawang!5e0!3m2!1sid!2sid!4v1707465945600!5m2!1sid!2sid" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Your Name</label>
                  <input type="text" name="name" class="form-control" id="name" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Your Email</label>
                  <input type="email" class="form-control" name="email" id="email" required>
                </div>
              </div>
              <div class="form-group">
                <label for="name">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject" required>
              </div>
              <div class="form-group">
                <label for="name">Message</label>
                <textarea class="form-control" name="message" rows="10" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <?php require_once("$rootdir/assets/component/footer.php"); ?>

  <!-- <div id="preloader"></div> -->
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <?php require_once("$rootdir/assets/component/footer-res.php"); ?>

</body>

</html>