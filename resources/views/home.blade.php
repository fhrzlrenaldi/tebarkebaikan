<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>TebarKebaikan</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">


  <!-- =======================================================
  * Template Name: Impact - v1.1.0
  * Template URL: https://bootstrapmade.com/impact-bootstrap-business-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
@include('user.partials.navbar')


  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero">
    <div class="container position-relative">
      <div class="row gy-5" data-aos="fade-in">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
          <h2>OPEN DONASI SEKARANG JUGA!!<span></span></h2>
          <p>Ayo bantu saudara kita sekarang juga, berapapun nominalnya bersama kita Tebar Kebaikan.</p>
          {{-- <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="#about" class="btn-get-started">Selanjutnya</a>
         </div> --}}
        </div>
        <div class="col-lg-6 order-1 order-lg-2">
          <img src="assets/img/logo.png" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="100">
        </div>
      </div>
    </div>

    <div class="icon-boxes position-relative">
      <div class="container position-relative">
        <div class="row gy-4 mt-5">

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-easel"></i></div>
              <p>Donasi</P>
              <h4 class="title"><a href="" class="stretched-link">Pendidikan</a></h4>
            </div>
          </div>
          <!--End Icon Box -->

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-gem"></i></div>
              <p>Donasi</P>
              <h4 class="title"><a href="" class="stretched-link">Bencana ALam</a></h4>
            </div>
          </div>
          <!--End Icon Box -->

          <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-geo-alt"></i></div>
              <p>Ingin Menggalang Dana?</P>
              <h4 class="title"><a href="" class="stretched-link">Galang Dana</a></h4>
            </div>
          </div>
          <!--End Icon Box -->

           <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="icon-box">
              <div class="icon"><i class="bi bi-command"></i></div>
              <p>Ingin Donasi?</P>
              <h4 class="title"><a href="" class="stretched-link">Donasi</a></h4>
            </div>
          </div>
          <!-- End Icon Box -->

        </div>
      </div>
    </div>

    </div>
  </section>
  <!-- End Hero Section -->

  <main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Tentang Kami</h2>
           </div>

        <div class="row gy-4">
          <div class="col-lg-6">
            <h3>Tebar Kebaikan</h3>
            <img src="assets/img/donasi.png" class="img-fluid rounded-4 mb-4" alt="">
            <p>Sebuah aplikasi donasi berbasis website yang dapat membuka kegiatan penggalangan dana, sekaligus menyalurkan dana donasi yang telah berhasil dikumpulkan. Dengan menggunakan media aplikasi donasi berbasis website ini, penggalang dana dan donatur bisa lebih leluasa dalam kegiatan berdonasi dana,
                dan mengajak masyarakat untuk ikut memberikan dana untuk orang-orang yang membutuhkan..</p>
            <p>“TebarKebaikan” menyediakan pengalangan dana yang berfokus hanya pada dua kategori saja, yaitu kategori pendidikan dan bencana. Dari kedua kategori galang dana tersebut.</p>
          </div>
          <div class="col-lg-6">
            <div class="content ps-0 ps-lg-5">
              <p class="fst-italic">
              “TebarKebaikan” akan berusaha untuk menyediakan kegiatan penggalangan dana donasi yang
              </p>
              <ul>
              <li><i class="bi bi-check-circle-fill"></i> Mudah.</li>
                <li><i class="bi bi-check-circle-fill"></i> Aman.</li>
                <li><i class="bi bi-check-circle-fill"></i> Terpercaya.</li>
                <li><i class="bi bi-check-circle-fill"></i> Cepat.</li>
              </ul>
              <p>
              “TebarKebaikan” akan berusaha semaksimal mungkin
              </p>
              <div class="position-relative mt-4">
                <img src="assets/img/hoo.png" class="img-fluid rounded-4" alt="">
              </div>
            </div>
          </div>
        </div>


      </div>
    </section><!-- End About Us Section -->

<!-- ======= Our Services Section ======= -->
<section id="services" class="services sections-bg">
    <div class="container" data-aos="fade-up">

        <div class="section-header">
            <h2>Doa Doa #Orang Baik</h2>
        </div>

        <div class="slide-container swiper">
            <div class="slide-content">
                <div class="card-wrapper swiper-wrapper">
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <!--<img src="images/profile1.jpg" alt="" class="card-img">-->
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">David Dell</h2>
                            <p class ="description">
                                <i class="bi bi-quote quote-icon-left"></i>
                                Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                                <i class="bi bi-quote quote-icon-right"></i>
                              </p>
                            <button class="button">View More</button>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <!--<img src="images/profile2.jpg" alt="" class="card-img">-->
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">David Dell</h2>
                                <p class ="description">
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    Semoga kita semua selalu diberikan pertolongan dan kemudahan oleh Allah SWT. Aamiin YRA.
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            <button class="button"><i class ="bi bi-heart-fill"></i><br>Aamiin YRA</button>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <!--<img src="images/profile3.jpg" alt="" class="card-img">-->
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">David Dell</h2>
                            <p class ="description">
                                <i class="bi bi-quote quote-icon-left"></i>
                                Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                                <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                            <button class="button">View More</button>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <!--<img src="images/profile4.jpg" alt="" class="card-img">-->
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">David Dell</h2>
                            <p class ="description">
                                <i class="bi bi-quote quote-icon-left"></i>
                                Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                                <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                            <button class="button">View More</button>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <!--<img src="images/profile5.jpg" alt="" class="card-img">-->
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">David Dell</h2>
                            <p class ="description">
                                <i class="bi bi-quote quote-icon-left"></i>
                                Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                                <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                            <button class="button">View More</button>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <!--<img src="images/profile6.jpg" alt="" class="card-img">-->
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">David Dell</h2>
                            <p class ="description">
                                <i class="bi bi-quote quote-icon-left"></i>
                                Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                                <i class="bi bi-quote quote-icon-right"></i>
                              </p>
                            <button class="button">View More</button>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <!--<img src="images/profile7.jpg" alt="" class="card-img">-->
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">David Dell</h2>
                            <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                            <button class="button">View More</button>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <!--<img src="images/profile8.jpg" alt="" class="card-img">-->
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">David Dell</h2>
                            <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                            <button class="button">View More</button>
                        </div>
                    </div>
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <!--<img src="images/profile9.jpg" alt="" class="card-img">-->
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">David Dell</h2>
                            <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                            <button class="button">View More</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-button-next swiper-navBtn"></div>
            <div class="swiper-button-prev swiper-navBtn"></div>
            <div class="swiper-pagination"></div>
        </div>

    </div>
  </section><!-- End Our Services Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Donasi Segera</h2>
        </div>

        <div class="slides-3 swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="card">
                    <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                      <img src="assets/img/donasi.png" class="img-fluid"/>
                      <a href="#!">
                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                      </a>
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">Santuni Ratusan Mustahik dengan Bayar Wajib Fidyah</h5>
                      <br>
                      <div class="progress" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar bg-success" style="width: 25%"></div>
                      </div>
                      <hr>
                      <p class="card-text">Rp 123.456.789</p>
                      <p class="text">1 hari</p>
                      <a href="#!" class="btn btn-primary">Selanjutnya</a>
                    </div>
                  </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
                <div class="testimonial-wrap">
                  <div class="card">
                      <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                        <img src="assets/img/hoo.png" class="img-fluid"/>
                        <a href="#!">
                          <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                        </a>
                      </div>
                      <div class="card-body">
                        <h5 class="card-title">Santuni Ratusan Mustahik dengan Bayar Wajib Fidyah</h5>
                        <br>
                        <div class="progress" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                          <div class="progress-bar bg-success" style="width: 25%"></div>
                        </div>
                        <hr>
                        <p class="card-text">Rp 123.456.789</p>
                        <p class="text">2 hari</p>
                        <a href="#!" class="btn btn-primary">Selanjutnya</a>
                      </div>
                    </div>
                </div>
              </div><!-- End testimonial item -->

              <div class="swiper-slide">
                <div class="testimonial-wrap">
                  <div class="card">
                      <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                        <img src="assets/img/blog/blog-6.jpg" class="img-fluid"/>
                        <a href="#!">
                          <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                        </a>
                      </div>
                      <div class="card-body">
                        <h5 class="card-title">Santuni Ratusan Mustahik dengan Bayar Wajib Fidyah</h5>
                        <br>
                        <div class="progress" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                          <div class="progress-bar bg-success" style="width: 25%"></div>
                        </div>
                        <hr>
                        <p class="card-text">Rp 123.456.789</p>
                        <p class="text">1 hari</p>
                        <a href="#!" class="btn btn-primary">Selanjutnya</a>
                      </div>
                    </div>
                </div>
              </div><!-- End testimonial item -->

              <div class="swiper-slide">
                <div class="testimonial-wrap">
                  <div class="card">
                      <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                        <img src="assets/img/blog/blog-5.jpg" class="img-fluid"/>
                        <a href="#!">
                          <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                        </a>
                      </div>
                      <div class="card-body">
                        <h5 class="card-title">Santuni Ratusan Mustahik dengan Bayar Wajib Fidyah</h5>
                        <br>
                        <div class="progress" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                          <div class="progress-bar bg-success" style="width: 25%"></div>
                        </div>
                        <hr>
                        <p class="card-text">Rp 123.456.789</p>
                        <p class="text">1 hari</p>
                        <a href="#!" class="btn btn-primary">Selanjutnya</a>
                      </div>
                    </div>
                </div>
              </div><!-- End testimonial item -->

              <div class="swiper-slide">
                <div class="testimonial-wrap">
                  <div class="card">
                      <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                        <img src="assets/img/blog/blog-4.jpg" class="img-fluid"/>
                        <a href="#!">
                          <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                        </a>
                      </div>
                      <div class="card-body">
                        <h5 class="card-title">Santuni Ratusan Mustahik dengan Bayar Wajib Fidyah</h5>
                        <br>
                        <div class="progress" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                          <div class="progress-bar bg-success" style="width: 25%"></div>
                        </div>
                        <hr>
                        <p class="card-text">Rp 123.456.789</p>
                        <p class="text">1 hari</p>
                        <a href="#!" class="btn btn-primary">Selanjutnya</a>
                      </div>
                    </div>
                </div>
              </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->


    <!-- ======= Recent Blog Posts Section ======= -->
    <section id="artikel" class="recent-posts sections-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Artikel</h2>
        </div>

        <div class="row gy-4">

          <div class="col-xl-4 col-md-6">
            <article>

              <div class="post-img">
                <img src="assets/img/blog/blog-1.jpg" alt="" class="img-fluid">
              </div>

              <p class="post-category">Politics</p>

              <h2 class="title">
                <a href="blog-details.html">Dolorum optio tempore voluptas dignissimos</a>
              </h2>

              <div class="d-flex align-items-center">
                <img src="assets/img/blog/blog-author.jpg" alt="" class="img-fluid post-author-img flex-shrink-0">
                <div class="post-meta">
                  <p class="post-author">Maria Doe</p>
                  <p class="post-date">
                    <time datetime="2022-01-01">Jan 1, 2022</time>
                  </p>
                </div>
              </div>

            </article>
          </div><!-- End post list item -->

          <div class="col-xl-4 col-md-6">
            <article>

              <div class="post-img">
                <img src="assets/img/blog/blog-2.jpg" alt="" class="img-fluid">
              </div>

              <p class="post-category">Sports</p>

              <h2 class="title">
                <a href="blog-details.html">Nisi magni odit consequatur autem nulla dolorem</a>
              </h2>

              <div class="d-flex align-items-center">
                <img src="assets/img/blog/blog-author-2.jpg" alt="" class="img-fluid post-author-img flex-shrink-0">
                <div class="post-meta">
                  <p class="post-author">Allisa Mayer</p>
                  <p class="post-date">
                    <time datetime="2022-01-01">Jun 5, 2022</time>
                  </p>
                </div>
              </div>

            </article>
          </div><!-- End post list item -->

          <div class="col-xl-4 col-md-6">
            <article>

              <div class="post-img">
                <img src="assets/img/blog/blog-3.jpg" alt="" class="img-fluid">
              </div>

              <p class="post-category">Entertainment</p>

              <h2 class="title">
                <a href="blog-details.html">Possimus soluta ut id suscipit ea ut in quo quia et soluta</a>
              </h2>

              <div class="d-flex align-items-center">
                <img src="assets/img/blog/blog-author-3.jpg" alt="" class="img-fluid post-author-img flex-shrink-0">
                <div class="post-meta">
                  <p class="post-author">Mark Dower</p>
                  <p class="post-date">
                    <time datetime="2022-01-01">Jun 22, 2022</time>
                  </p>
                </div>
              </div>

            </article>
          </div><!-- End post list item -->

        </div><!-- End recent posts list -->

      </div>
    </section><!-- End Recent Blog Posts Section -->


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-info">
          <a href="index.html" class="logo d-flex align-items-center">
            <span>Tebar Kebaikan</span>
          </a>
          <p>Dengan menggunakan media aplikasi donasi berbasis website ini, penggalang dana dan donatur bisa lebih leluasa dalam kegiatan berdonasi dana    .</p>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Pages</h4>
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Tentang Kami</a></li>
            <li><a href="#">Artikel</a></li>
            <li><a href="#">Donasi</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><a href="#">Web Design</a></li>
            <li><a href="#">Web Development</a></li>
            <li><a href="#">Product Management</a></li>
            <li><a href="#">Marketing</a></li>
            <li><a href="#">Graphic Design</a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
          <h4>Contact Us</h4>
          <p>
            A108 Adam Street <br>
            New York, NY 535022<br>
            United States <br><br>
            <strong>Phone:</strong> +1 5589 55488 55<br>
            <strong>Email:</strong> info@example.com<br>
          </p>

        </div>

      </div>
    </div>

  </footer><!-- End Footer -->
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>


</body>

</html>
