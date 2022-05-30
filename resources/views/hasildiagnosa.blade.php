<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SleepTest - Teman Permasalahan Tidur Mu</title>
  <meta content="" name="description">

  <meta content="" name="keywords">

  <!-- "{{url('admin/assets/img/favicon.pn')}}"> -->

  <!-- Favicons -->
  <link href="{{url('user/assets/img/icon.png')}}" rel="icon">
  <link href="{{url('user/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{url('user/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{url('user/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{url('user/assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{url('user/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{url('user/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
  <link href="{{url('user/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{url('user/assets/css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: FlexStart - v1.4.0
  * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

  <style>

.container{
  font-family:'Helvetica';
  font-size: 18px;
}    

.checkbox_wrap{
    display: flex;
    width: 4400px;
    margin-bottom: 20px;
    justify-content: space-between;
    align-items: center;
    font-family: 'Helvetica';
    font-size: 19px;
}

.card-body{
  background: #F0F8FF;
}
.checkbox_wrap:last-child{
    margin-bottom: 0;
}
.checkbox_wrap .checkbox_right{
    position: relative;
    width: 102px;
    height: 38px;
}
.checkbox_wrap .checkbox{
    width: 100%;
    height: 100%;    
    background: #c8cacc;
    appearance: none;
    position: relative;
    -webkit-appearance: none;
    outline: none;
    cursor: pointer;
    border-radius: 3px;
}
.checkbox_wrap .checkbox:before{
    content: "";
    position: absolute;
    top: 2px;
    left: 2px;
    width: 50px;
    height: 34px;
    background: #fff;
    border-radius: 3px;
    transition: left 0.2s ease;
    z-index: 2;
}
.checkbox_wrap .checkbox:checked:before{
    left: 50px;
}
.checkbox_wrap .checkbox:checked{
    background: #87CEFA;
}
.checkbox_wrap .checkbox_right .fas{
    position: absolute;
    top: 10px;
    font-size: 20px;
    z-index: 1;
    color: #fff;
    pointer-events: none;
}
.checkbox_wrap .checkbox_right .fa-check{
    left: 16px;
    background: #87CEFA;
}
.checkbox_wrap .checkbox_right .fa-times{
    right: 9px;
    background: #c8cacc;
}
.ivo{
    color: #51596a;
    box-sizing: border-box;
    align-items: center;
    display: flex;
    flex-direction: column;
    justify-content: center;
    background-color: #fff;
    border-radius: 10px;
    width: 100%;
    z-index: 3;
    border: 1px solid #dcdcdc;
    flex: 0 0 50%;
    font-size: .9em;
    margin: 30px 0 0 20px;
    max-width: none;
    padding: 15px 40px;
    margin-bottom: 90px;
    font-family: Open Sans,Helvetica Neue,Arial!important;
}
</style>

</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <img src="{{url('user/assets/img/icon.png')}}" alt="">
        <span>SleepTest</span>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero"></a></li>
          <li><a class="nav-link scrollto" href="#about"></a></li>
          <li><a class="nav-link scrollto" href="#pricing"></a></li>
          <!-- <li><a class="nav-link scrollto" href="#portfolio">Portfolio</a></li>
          <li><a class="nav-link scrollto" href="#team">Team</a></li>
          <li><a href="blog.html">Blog</a></li>
          <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li> -->
          
        </ul>
        <a href="/" class="btn btn-outline-primary">Kembali ke halaman konsultasi  &nbsp &nbsp &nbsp     
              
        </a>
        <i class="bi bi-lst mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  
  <section id="hero" class="hero d-flex align-items-center">

<div class="container">
  <div class="row">
    <div class="col-lg-6 d-flex flex-column justify-content-center"></br>
    <h2 data-aos="fade-up" data-aos-delay="400">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Hasil Diagnosa :</h2>
      <h1 data-aos="fade-up">
        @foreach($tt as $t)
            {{ $t->name }}
        @endforeach
        
        <h2 data-aos="fade-up" data-aos-delay="400">Persentase : {{$percent}}% </h2>
      </h1>
      <div class="col-lg-6 tidur" data-aos="zoom-out" data-aos-delay="200">
      <img src="{{url('user/assets/img/insom.png')}}" class="img-fluid" alt="">
      </div>
    </div>
    <div class="col-lg-6 tidur" data-aos="zoom-out" data-aos-delay="200">
   
<br>
    

</br>
              <li>Nama Pasien &nbsp &nbsp &nbsp  &nbsp : {{$nama['nama']}}</li>
              <li>Usia &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp: {{$nama['usia']}}</li>
              <li>Jenis Kelamin &nbsp &nbsp &nbsp &nbsp  : {{$nama['jeniskel']}}</li>
              <br>

              
              <br>
              <b>Gejala yang dirasakan</b>
              
              
              
              @foreach($gejala as $g)
                <li>{{$g->name}}</li>
              @endforeach
              @foreach ($tt as $t)
                <!-- <li>{{$t->name}}</li> -->
                <br>
                <b>Penanganan yang dapat dilakukan:</b>
                @foreach(json_decode($t->solution) as $ss)
                  <br>{{$ss}}
                @endforeach
                
              @endforeach
            
        </div>
  </div>
</div>

</section><!-- End Hero -->



  <main id="main">




  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container">
      <div class="copyright">
        <!-- &copy; Copyright <strong><span>FlexStart</span></strong>. All Rights Reserved -->
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/flexstart-bootstrap-startup-template/ -->
        Designed with <a href="https://bootstrapmade.com/">💕</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>


  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Vendor JS Files -->
  <script src="{{url('user/assets/vendor/bootstrap/js/bootstrap.bundle.js')}}"></script>
  <script src="{{url('user/assets/vendor/aos/aos.js')}}"></script>
  <script src="{{url('user/assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{url('user/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{url('user/assets/vendor/purecounter/purecounter.js')}}"></script>
  <script src="{{url('user/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{url('user/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
  <script src="https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap"></script>

  <!-- Template Main JS File -->
  <script src="{{url('user/assets/js/main.js')}}"></script>


        <main class="py-4">
            @yield('content')
        </main>

</body>

</html>