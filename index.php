<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Agrievent</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/agency.min.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Agri Event</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#services">Tentang Kami</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#portfolio">Acara</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">Tempat</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Kontak</a>
            </li>
            <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="indexlogin.html">Masuk</a>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Header -->
    <header class="masthead">
      <div class="container">
        <div class="intro-text">
          <div class="intro-lead-in">Selamat Datang </div>
          <div class="intro-heading text-uppercase">Cari acara yang kamu mau</div>
          <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">Telusuri</a>
        </div>
      </div>
    </header>

    <!-- Services -->
    <section id="services">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Sekilas tentang kami</h2>
            <h3 class="section-subheading text-muted">Mengumpulkan semua acara dengan akses yang mudah !</h3>
          </div>
        </div>
        <div class="row text-center">
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-shopping-cart fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">Gratis!</h4>
            <p class="text-muted">Untuk penyelenggara kamu dapat mendaftarkan acaramu secara cuma-cuma di Agri Event!</p>
          </div>
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-laptop fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">Terintegrasi Daring</h4>
            <p class="text-muted">Kami menyediakan proses tepat-waktu untuk reservasi tiket elektronik yang memudahkan kamu untuk memesan</p>
          </div>
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-lock fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">Keamanan yang terjamin</h4>
            <p class="text-muted">Dengan Platform terbaru yang kami usung dan backup data yang sangat cepat kami sangat menjunjung tinggi keamanan website yang kami buat</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Event -->
    <section class="bg-light" id="portfolio">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">ACARA YANG ADA</h2>
            <h3 class="section-subheading text-muted"></h3>
          </div>
        </div>
        <div class="row">
            <?php ?>

			<div class="col-md-4 col-sm-6 portfolio-item">
              <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
                <div class="portfolio-hover">
                  <div class="portfolio-hover-content">
                    <i class="fa fa-plus fa-3x"></i>
                  </div>
                </div>
                <img class="img-fluid" src="img/portfolio/01-thumbnail.jpg" alt="">
              </a>
              <div class="portfolio-caption">
                <h4>IAC</h4>
                <p class="text-muted">IPB Art Contest</p>
              </div>
            </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/02-thumbnail.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>OMI</h4>
              <p class="text-muted">Olimpiade Mahasiswa IPB</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/03-thumbnail.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>AGSN</h4>
              <p class="text-muted">Agrisymphony 2017</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal4">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/04-thumbnail.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>ACRA 2016</h4>
              <p class="text-muted">Konser musik mahasiswa IPB</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal5">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/05-thumbnail.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Semarak Kehutanan</h4>
              <p class="text-muted">Rangkaian acara Kehutanan IPB</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal6">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/06-thumbnail.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Bafest</h4>
              <p class="text-muted">Event budaya yang diselenggarakan Fakultas Ekonomi dan Manajemen IPB</p>
            </div>
          </div>
         </div>
       </section>

    <!-- Tempat -->
    <section id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Tempat</h2>
            <h3 class="section-subheading text-muted">Buat kamu penyelenggara event bingung mau ngadain event mu dimana ? Kami punya solusinya kami memberikan informasi cuma-cuma buat kamu yang ingin menyewa tempat di lingkungan IPB agar kamu bisa menyewa tempat tersebut tanpa bingung lagi harus mencari orang yang berwenang.</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <ul class="timeline">
              <li>
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="img/about/1.jpg" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4>Graha Widya Wisuda</h4>
                    <h4 class="subheading">Gedung serba guna IPB</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">Gedung Graha Widya Wisuda (GWW) biasa digunakan untuk acara-acara besar seperti wisuda dan ospek. Cocok untuk kamu yang mengadakan event konser dan seminar dengan skala besar. Gedung ini bisa menampung sampai dengan 4000 orang. Kamu bisa menghubungi Direktorat pelayanan Biro Umum untuk menyewa GWW.</p>
                  </div>
                </div>
              </li>
              <li class="timeline-inverted">
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="img/about/2.jpg" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4>Gedung Olahraga IPB</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">Gedung olahraga yang bisa digunakan untuk pertandingan bulu tangkis dan volli cocok untuk kamu yang ingin mengadakan event olahraga.</br>Jika ingin menggunakan ruangan ini bisa menghubungi nomor :08087644664</p>
                  </div>
                </div>
              </li>
              <li>
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="img/about/3.jpg" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4>Auditorium</h4>
                    <h4 class="subheading"></h4>
                    <p>Di IPB sendiri banyak sekali auditorium yang bisa digunakan untuk acara-acara seperti seminar dan talkshow kamu bisa menghubungi bapak syamsul di nomor telpon : 08998376464 untuk reservasi</p>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted"></p>
                  </div>
                </div>
              </li>
              <li class="timeline-inverted">
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="img/about/4.jpg" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4>Auditorium Andi Hakim Nasution</h4>
                    <p>Auditorium ini terletak di Gedung Andi Hakim Nasution. Auditorium ini sering dipakai untuk acara-acara resmi IPB seperti pelantikan rektor dan pejabat IPB, ataupun acara dari Direktorat Kemahasiswaan IPB.</p>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted"></p>
                  </div>
                </div>
              </li>
              <li class="timeline-inverted">
                <div class="timeline-image">
                  <h4>dan
                    <br> masih
                    <br>banyak lagi!</h4>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <!-- Kontak -->
    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Hubungi Kami</h2>
            <h3 class="section-subheading text-muted">Kamu dapat menghubungi kami dengan mengisi form dibawah ini.</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <form  action="contact.php" method="post" enctype= "multipart/form-data">
              <input class="form-control" type="hidden" id="id" name= "id">
              <p class="help-block text-danger"></p>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <input class="form-control" id="name" type="text" placeholder="Nama *" required data-validation-required-message="Mohon masukkan nama anda." name= "name">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="email" type="email" placeholder="e-mail *" required data-validation-required-message="Mohon masukkan alamat e-mail anda." name="email">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="phone" type="tel" placeholder="Nomor HP *" required data-validation-required-message="Mohon masukkan nomor telepon anda." name="phone">
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <textarea class="form-control" id="message" placeholder="Pesan *" required data-validation-required-message="Mohon masukkan pesan anda." name="message"></textarea>
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-lg-12 text-center">
                  <div id="success"></div>
                  <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Kirim Pesan</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <span class="copyright">Copyright &copy; Kelompok 7 2018</span>
          </div>
          <div class="col-md-4">
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-facebook"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-linkedin"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="col-md-4">
            <ul class="list-inline quicklinks">
              <li class="list-inline-item">
                <a href="#">Kebijakan Privasi</a>
              </li>
              <li class="list-inline-item">
                <a href="#">Peraturan Penggunaan</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>

    <!-- Portfolio Modals -->

	<!-- Modal 1 -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase">IAC</h2>
                  <p class="item-intro text-muted">IPB Art Contest</p>
                  <img class="img-fluid d-block mx-auto" src="img/portfolio/01-full.jpg" alt="">
                  <p>Kompetisi kreativitas seni tahunan yang dilaksanakan oleh BEM KM IPB.</p>
                  <ul class="list-inline">
                    <li>Tanggal: Februari-Maret 2017</li>
                    <li>Peserta : Mahasiswa IPB</li>
                    <li>Kategori: Perlombaan</li>
                  </ul>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fa fa-times"></i>
                    Kembali</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 2 -->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase">OMI</h2>
                  <p class="item-intro text-muted">Olimpiade Mahasiswa IPB</p>
                  <img class="img-fluid d-block mx-auto" src="img/portfolio/02-full.jpg" alt="">
                  <p>Kompetisi olahraga tahunan yang dilaksanakan oleh BEM KM IPB.</p>
                  <ul class="list-inline">
                    <li>Tanggal: Maret-April 2018</li>
                    <li>Peserta : Mahasiswa IPB</li>
                    <li>Kategori: Perlombaan</li>
                  </ul>
                  <button
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fa fa-times"></i>
                    Close Project</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 3 -->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase">AGSN</h2>
                  <p class="item-intro text-muted">Agrisymphony</p>
                  <img class="img-fluid d-block mx-auto" src="img/portfolio/03-full.jpg" alt="">
                  <p>Acara tahunan yang dikelola Direktorat Kemahasiswaan IPB sebagai ajang promosi IPB. Agrisymphony menaungi beberapa acara yang lebih spesifik dan memiliki keunikannya masing-masing.</p>
                  <ul class="list-inline">
                    <li>Tanggal: 16-17 September 2017</li>
                    <li>Peserta : Umum</li>
                    <li>Kategori: Festival</li>
                  </ul>
                  <button
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fa fa-times"></i>
                    Kembali</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 4 -->
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase">ACRA</h2>
                  <p class="item-intro text-muted">Art Collaboration and Revolutionary Action 2016</p>
                  <img class="img-fluid d-block mx-auto" src="img/portfolio/04-full.jpg" alt="">
                  <p>ACRA adalah</p>
                  <ul class="list-inline">
                    <li>Tanggal: 3 September 2016</li>
                    <li>Peserta : Umum</li>
                    <li>Kategori: Konser Musik</li>
                  </ul>
                  <button
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fa fa-times"></i>
                    Kembali</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 5 -->
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase">Semarak Kehutanan 2017</h2>
                  <p class="item-intro text-muted">Semarak Kehutanan IPB</p>
                  <img class="img-fluid d-block mx-auto" src="img/portfolio/05-full.jpg" alt="">
                  <p>Konser musik yang dilaksanakan oleh BEM Fakultas Kehutanan IPB.</p>
                  <ul class="list-inline">
                    <li>Tanggal: 10 November 2017</li>
                    <li>Peserta : Mahasiswa IPB</li>
                    <li>Kategori: Konser Musik</li>
                  </ul>
                  <button
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fa fa-times"></i>
                    Kembali</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 6 -->
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase">Bafest</h2>
                  <p class="item-intro text-muted">Bogor Art Festival</p>
                  <img class="img-fluid d-block mx-auto" src="img/portfolio/06-full.jpg" alt="">
                  <p>Festival seni tahunan yang dilaksanakan oleh BEM Fakultas Ekonomi dan Manajemen.</p>
                  <ul class="list-inline">
                    <li>Tanggal: 22 Desember 2017</li>
                    <li>Peserta : Umum</li>
                    <li>Kategori: Festival Seni</li>
                  </ul>
                  <button
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fa fa-times"></i>
                    Kembali</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>



    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/agency.min.js"></script>

  </body>

</html>
?>
