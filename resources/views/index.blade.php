<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  
  <title>CV.Media Karya</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="{{ asset('img/favicon.png') }}" rel="icon">
  <link href="{{ asset('img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700|Open+Sans:300,300i,400,400i,700,700i" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="{{ asset('lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
  <link href="{{ asset('lib/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
  <link href="{{ asset('lib/ionicons/css/ionicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('lib/magnific-popup/magnific-popup.css') }}" rel="stylesheet">

  <!-- Main Stylesheet File -->
   <link href="{{ asset('css/style.css') }}" rel="stylesheet">
   <link href="{{ asset('css/style_porto.css') }}" rel="stylesheet">

  
</head>

<body>

  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left col-lg-4 col-md-4">
        <!--<h1><a href="#intro" class="scrollto">CV.Media Karya</a></h1> -->
        @foreach (\App\Profile::all() as $pro)
        <a href="#intro"><img src="{{ asset('/img/Logo/' . $pro->logo) }}" style="border-radius: 50%"></a>
        @endforeach
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#intro">Beranda</a></li>
          <li><a href="#about">Tentang Kita</a></li>
          <li><a href="#features">Bidang</a></li>
          <li><a href="#more-features">Layanan</a></li>
          <li><a href="#clients">Partner</a></li>
          <li><a href="#gallery">Portofolio</a></li>
          <li><a href="#contact">Kontak</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">

    <div class="intro-text">
      <h2>Selamat Datang di CV.MEDIA KARYA</h2>
      <p>Menjual Barang Barang yang Anda Butuhkan</p>
      <a href="#about" class="btn-get-started scrollto">Mulai</a>
    </div>

  

  </section><!-- #intro -->

  <main id="main">
    <!--==========================
      About Us Section
    ============================-->
    <section id="about" class="section-bg">
    
      <div class="container-fluid">
        <div class="section-header">
          <h3 class="section-title">Tentang Kita</h3>
          <span class="section-divider"></span>
          <p class="section-description">
            Jasa Perdagangan Umum, Peralatan dan Perlengkapan Rumah Tangga<br>          
          </p>
        </div>
@foreach (\App\Profile::all() as $pro)
        <div class="row">
          <div class="col-lg-6 about-img wow fadeInUp">
              <img src="{{ asset('img/about-img.jpg') }}" class="card-img-top">
            </a>
          </div>

          <div class="col-lg-6 content wow fadeInRight">
            <h2>Deskripsi </h2>
            <h3>Nomer Legalitas : {{$pro->nolegal}}</h3>
            <p>
            {{$pro->about}}
            </p>
            <a>
                <button type="button" id="btM"  class="btn" style="background:linear-gradient(45deg, #1de099, #1dc8cd); text-color:white;">
                   <a href = "{{ asset('/img/SK/' . $pro->scansk) }}" style=" color:white;">Tap here to show</a> 
                </button>
                <button type="button" id="btD" class="btn" style="background:linear-gradient(45deg, #1de099, #1dc8cd); text-color:white;" data-toggle="modal" data-target="#exampleModal">
                   <p style=" color:white;">Tap here to show</p> 
                </button>
                

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="width:530px;;">
      <div class="modal-body">
        <img src="{{ asset('/img/SK/' . $pro->scansk) }}" style="width:500px; heigth:550px;"  class="card-img-top">
      </div>
      <div class="modal-footer" >
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
            </a>
            <!--<a href ="{{ asset('/img/SK/' . $pro->scansk) }}" class="gallery-popup">-->
            <!--<button type="button" class="btn btn-success">Tap here to show </button>-->
            <!--</a>-->
            

          </div>
        </div>
@endforeach
      </div>
      
    </section><!-- #about -->

    <!--==========================
      Product Featuress Section
    ============================-->
    <section id="features">
      <div class="container">

        <div class="row">

          <div class="col-lg-8 offset-lg-4">
            <div class="section-header wow fadeIn" data-wow-duration="1s">
              <h3 class="section-title">Bidang</h3>
              <span class="section-divider"></span>
            </div>
          </div>

          <div class="col-lg-4 col-md-5 features-img">
            <img src="img/product-features.png" alt="" class="wow fadeInLeft">
          </div>

          <div class="col-lg-8 col-md-7 ">

            <div class="row">

              <div class="col-lg-6 col-md-6 box wow fadeInRight">
                <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
                <h4 class="title"><a href="">Web Development</a></h4>
                <p class="description">Jasa pembuatan Website berdasarkan kebutuhan pengguna dengan menggunakan berbagai framework seperti Laravel, CI dan lain sebagainya.</p>
              </div>
              <div class="col-lg-6 col-md-6 box wow fadeInRight" data-wow-delay="0.1s">
                <div class="icon"><i class="ion-ios-flask-outline"></i></div>
                <h4 class="title"><a href="">Pengadaan Peralatan</a></h4>
                <p class="description">Menyediakan alat-alat yang akan digunakan dalam kegiatan pelatihan dan lain sebagainya yang diselenggarakan oleh pemerintah.</p>
              </div>
              <div class="col-lg-6 col-md-6 box wow fadeInRight" data-wow-delay="0.2s">
                <div class="icon"><i class="ion-social-buffer-outline"></i></div>
                <h4 class="title"><a href="">Pengadaan Konsumsi</a></h4>
                <p class="description">Menyediakan makanan dan minuman dalam suatu kegiatan yang dilakukan oleh penyelenggara seperti pelatihan, pertemuan dan lain sebagainya.</p>
              </div>
              <div class="col-lg-6 col-md-6 box wow fadeInRight" data-wow-delay="0.3s">
                <div class="icon"><i class="ion-ios-analytics-outline"></i></div>
                <h4 class="title"><a href="">Penyelenggaraan Acara</a></h4>
                <p class="description">Jasa yang menyediakan tempat dan fasilitas untuk terselenggaranya suatu kegiatan seperti Jobfair, Pelatihan dan lain sebagainya.</p>
              </div>
            </div>

          </div>

        </div>

      </div>

    </section><!-- #features -->

    
    <!--==========================
      More Features Section
    ============================-->
    <section id="more-features" class="section-bg">
      <div class="container">

        <div class="section-header">
          <h3 class="section-title">Project Unggulan</h3>
          <span class="section-divider"></span>
          <p class="section-description">Berikut adalah beberapa project unggulan yang telah kami kembangkan</p>
        </div>
        
            <style>
    /* Container needed to position the overlay. Adjust the width as needed */
    .containerz {
      position: relative;
      width: 100%;
      padding: 10px;
    }
    
    /* Make the image to responsive */
    .imagez {
      width: 100%;
      height: auto;
    }
    
    /* The overlay effect (full height and width) - lays on top of the container and over the image */
    .overlayz {
      position: absolute;
      top: 0;
      bottom: 0;
      left: 0;
      right: 0;
      height: 100%;
      width: 100%;
      opacity: 0;
      transition: .3s ease;
      background: linear-gradient(45deg, #1de099, #1dc8cd);
    }
    
    /* When you mouse over the container, fade in the overlay icon*/
    .containerz:hover .overlayz {
      opacity: 1;
    }
    
    /* The icon inside the overlay is positioned in the middle vertically and horizontally */
    .iconz {
      color: white;
      font-size: 70px;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      -ms-transform: translate(-50%, -50%);
      text-align: center;
    }
    
    /* When you move the mouse over the icon, change color */
    .fa-eye:hover {
      color: black;
    }
    
        </style>
        <div class="row ">
            <div class="card containerz col-md-4 wow fadeInLeft">
                <img src="{{ asset('img/gallery/mediakarya1.png') }}" alt="Avatar" class="imagez">
                <div class="overlayz">
                  <a href="https://cvmediakarya.web.id/" class="iconz" title="Detail" target="_blank" rel="external">
                    <i class="fa fa-eye"></i>
                  </a>
                </div>
              </div>
              <div class="card containerz col-md-4 wow fadeInUp">
                <img src="{{ asset('img/gallery/alhikmah.png') }}" alt="Avatar" class="imagez">
                <div class="overlayz">
                  <a href="https://alhikmahtourtravel.000webhostapp.com/" class="iconz" title="Detail" target="_blank" rel="external">
                    <i class="fa fa-eye"></i>
                  </a>
                </div>
              </div>
              <div class="card containerz col-md-4 wow fadeInRight">
                <img src="{{ asset('img/gallery/mekarya.png') }}" alt="Avatar" class="imagez">
                <div class="overlayz">
                  <a href="https://bootstrapmade.com/demo/themes/BizPage/" class="iconz" title="Detail" target="_blank" rel="external">
                    <i class="fa fa-eye"></i>
                  </a>
                </div>
              </div>
        </div>
    </section>
    <!--==========================
      Partner
    ============================-->
    <section id="clients">
      <div class="container-fluid">
        <div class="section-header">
        <h3 class="section-title">Partner</h3>
          <span class="section-divider"></span>
        </div>
        <div class="row wow fadeInUp">
          <div class="col">
            
          </div>

          <div class="col-lg-auto">
            @foreach (\App\Partner::all() as $part)
            
              <img src="{{ asset('/img/partner/' . $part->logo) }}" alt="" style="width: 130px; height: 150px;filter: grayscale(100%); 
	-webkit-filter: grayscale(100%);
	-moz-filter: grayscale(100%);
	-ms-filter: grayscale(100%);
	-o-filter: grayscale(100%);">
            
            @endforeach
          </div>

          <div class="col">
            
          </div>
        </div>
      </div>
    </section><!-- #partner -->

    
    <!--==========================
      Gallery Section
    ============================-->
    
    <section id="gallery">
      <div class="container-fluid">
        <div class="section-header">
          <h3 class="section-title">Portofolio</h3>
          <span class="section-divider"></span>
          <p class="section-description">Menggambarkan beberapa kegiatan di kantor kita
        </div>


        <div class="container-porto row no-gutters">
          @foreach (\App\Portofolio::all() as $por)
          <div class="col-lg-4 col-md-6 gallery-item wow fadeInUp">
            <img src="{{ asset('/img/portofolio/' . $por->foto) }}" width="250px" height="350px" alt="Avatar" class="image-porto">
            <a href="{{ asset('/img/portofolio/' . $por->foto) }}" class="gallery-popup">
            <div class="overlay-porto">

                <div class="text-porto">{{$por->nama}} <br>{{$por->keterangan}}</div>
              
            </div>
            </a>
          </div>
          @endforeach
        </div>
        
      </div>
    </section><br><br><br><!-- #gallery 
  
    <!--==========================
      Contact Section
    ============================-->
    <section id="contact">
      <div class="container">
        <div class="row wow fadeInUp">
@foreach (\App\Profile::all() as $pro)

          <div class="col-lg-4 col-md-4">
            <div class="contact-about">
              <h3 style="font-size: 30px;">CV.Media Karya</h3>
              <p>{{$pro->about}}</p>
              <div class="social-links">
                <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="info">
              <div>
                <i class="ion-ios-location-outline"></i>
                <p>{{$pro->alamat}}</p>
              </div>

              <div>
                <i class="ion-ios-email-outline"></i>
                <p>{{$pro->email}}</p>
              </div>

              <div>
                <i class="ion-ios-telephone-outline"></i>
                <p>+0{{$pro->telpon}}</p>
              </div>
@endforeach

            </div>
          </div>

          <div class="container  col-lg-5 col-md-8">
          <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBK4nZlYsOX9VTNrXN7bZYGY42ivljgPcI
    &q=Jl. Anggrek II, Panjang, Kec. Bae, Kabupaten Kudus, Jawa Tengah 59326" width="100%" height="380" frameborder="0" style="border:0" allowfullscreen=""></iframe>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #contact -->
    
  </main>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 text-lg-left text-center">
          <div class="copyright">
            &copy; Copyright <strong>CV.Media Karya</strong>. All Rights Reserved
          </div>
        </div>
        
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="{{ asset('lib/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('lib/jquery/jquery-migrate.min.js') }}"></script>
  <script src="{{ asset('lib/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
  <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
  <script src="{{ asset('lib/superfish/hoverIntent.js') }}"></script>
  <script src="{{ asset('lib/superfish/superfish.min.js') }}"></script>
  <script src="{{ asset('lib/magnific-popup/magnific-popup.min.js') }}"></script>

  <!-- Contact Form JavaScript File -->
  <script src="{{ asset('contactform/contactform.js') }}"></script>

  <!-- Template Main Javascript File -->
  <script src="{{ asset('js/main.js') }}"></script>
 
</body>
</html>
