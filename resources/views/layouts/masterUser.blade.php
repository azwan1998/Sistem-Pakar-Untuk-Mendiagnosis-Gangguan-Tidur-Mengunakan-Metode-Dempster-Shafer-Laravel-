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
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">Tes Gangguan Tidur</a></li>
          <li><a class="nav-link scrollto" href="#pricing">Tipe Gangguan Tidur</a></li>
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
          <li><div>
                    @auth
                        <a class="getstarted scrollto" href="{{ url('/home') }}">Home</a>
                    @else
                        <a class="getstarted scrollto" href="{{ route('login') }}">Masuk Sebagai Admin</a>

                        <!-- @if (Route::has('register'))
                            <a href="{{ route('register') }}"></a>
                        @endif -->
                    @endauth
            </a></li>
        </ul>
        <i class="bi bi-lst mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up">Kenali Permasalahan Tidur Mu. </h1>
          <h2 data-aos="fade-up" data-aos-delay="400">Awali Hari Yang Cerah Dengan Tidur Yang Berkualitas.</h2>
          <div data-aos="fade-up" data-aos-delay="600">
            <div class="text-center text-lg-start">
              <a href="#about" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                <span>Mulai Konsultasi &nbsp &nbsp &nbsp &nbsp &nbsp</span>
                <i class="bi bi-arrow-right"></i>
              </a>
              <br>
              <a href="#pricing" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                <span>Kenali Gangguan Tidur</span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 tidur" data-aos="zoom-out" data-aos-delay="200">
          <img src="{{url('user/assets/img/cov.png')}}" class="img-fluid" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->



  <main id="main">


<!-- ======= About Section ======= -->
<section id="about" class="about">

<div class="container" data-aos="fade-up">
  <div class="row gx-0">

            <div class="col-xl-4 text-center" data-aos="fade-right" data-aos-delay="100">
              <img src="{{url('user/assets/img/warning.png')}}" class="img-fluid p-4" alt="">
            </div>

            <div class="col-xl-8 d-flex content">
              <div class="row align-self-center gy-4">

              <h2>Yang perlu diperhatikan sebelum memulai konsultasi.</h2>
                <p>
                      <li> Mengisi dengan <b>JUJUR</b>, sesuai dengan yang Anda rasakan agar menghasilkan diagnosis yang <b>AKURAT</b>. </li>
               
                      <li> Telah merasakan keluhan selama <b>MINIMAL 3 KALI DALAM SEMINGGU SELAMA 3 BULAN TERAKHIR</b>.</li>
                </p>
                
                
              
                <div class="text-center text-lg-start">
                  <a href="#contact" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                    <span>Saya Mengerti</span>
                    <i class="bi bi-arrow-right"></i>
                  </a>
                </div>
              </div>
            </div>


  </div>
</div>


</section><!-- End About Section -->





<section id="contact" class="contact">

<div class="container" data-aos="fade-up">
  <div class="row gx-0">

    <div class="col-lg-12 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
      <div class="content">
        <b><h2>Hai, Kenalan dulu yuk.</h2></b>
        <p>
          Isi biodata kamu, agar aku bisa mengenalimu.
        </p>
        <!-- FORM INPUT DATA USER -->
        <form action="/userhome/store" method="post">
              {{ csrf_field() }}

         
              <div class="col-md-8">
              <div class="main-card mb-3 card">
                  <div class="card-body">
                    <br>
                    <div>
                      <div class="input-group">
                        <div class="input-group-prepend"><span class="input-group-text">Nama</span></div>
                        <input size="50" maxlength="20" class="form-control" placeholder="contoh : Ivo Dwi Ananda" name="nama" id="nama" type="text" required="required" value="{{ old('nama') }}">
                      </div>
                      <br>
                      <div class="input-group">
                        <div class="input-group-prepend"><span class="input-group-text">Usia &nbsp &nbsp </span></div>
                        <input size="50" maxlength="50" class="form-control" placeholder="contoh : 22" name="usia" id="usia" type="number" required="required" value="{{ old('usia') }}">
                      </div>
                      <br>
                      <div class="form-group">
                          <div class="col-md-3">	
                            <div class="input-group-prepend"><span class="input-group-text" required="required">Jenis Kelamin</span></div>
                          </div>
                        <div class="col-md-9">
                        <input value="Laki Laki" name="jeniskel" id="jeniskel" type="radio" value="{{ old('jeniskel') }}">  Laki-Laki										
                        <input value="Perempuan" name="jeniskel" id="jeniskel" type="radio" value="{{ old('jeniskel') }}">  Perempuan													
                        <span class="help-block"><br></br></span>
                        </div>                                              

                        @if($errors->has('jeniskel'))
                            <small><div class="text-danger">
                            {{ $errors->first('jeniskel')}}
                            </div></small>
                          @endif
                      </div>
                    </div>
                    
                  </div>
              </div>
              <!-- <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
                    <img src="{{url('user/assets/img/haiii.png')}}" class="img-fluid" alt="">
                  </div> -->
          </div>



             <!-- <a href="#services" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center"> -->
             
          <!-- <i class="bi bi-arrow-right"></i> -->
        </a>
        
        
        
          
</section>
<div class="col-md-12" data-aos="fade-up" data-aos-delay="200">
  <h3><center>Keluhan Yang di Rasakan :</center></h3>
</div>
       
        <!-- <div class="text-center text-lg-start">
          <a href="#" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
            <span>Read More</span>
            <i class="bi bi-arrow-right"></i>
          </a>
        </div> -->

        
        <section id="features" class="features">
        <div class="container">
        <div class="col-lg-12 mt-5 mt-lg-0">
            <div class="row align-self-center gy-4"> 

            @foreach($evidence as $e)

              <div class="col-md-12" data-aos="zoom-in" data-aos-delay="200">
                <div class="feature-box d-flex align-items-center">
                  
                  <div class="checkbox_wrap">
                        <div class="checkbox_left">
                          {{ $e->name }} 
                        </div>
                        <div class="checkbox_right">
                            <i class="fas fa-check"></i>
                              <input type="checkbox" class="checkbox" name="evidence[]" value="{{$e->id}} ">
                            <i class="fas fa-times"></i>
                        </div>
                    </div>
                </div>
              </div>

              @endforeach
            </div>
            <br>
            <input type="submit" class="btn btn-primary" value="Selesai">
            &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
              
        </form>
            </div>
          </div>
          <br>

          <!-- <div class="row">

          <div class="col-lg-12">
            <img src="assets/img/features.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-12">
            <div class="row align-self-center gy-4">

              <div class="col-md-6" data-aos="zoom-out" data-aos-delay="200">
                <div class="feature-box d-flex align-items-center">
                  
                  <h3>Eos aspernaturjjjiiiiiiiiiiiiiiiiiiiiiiiiiiiiijjjika kamu merasa kesepian maka datanglah kepada Allah yang maha pengasih lagi maha penya rem</h3>
                </div>
              </div>
            </div>
          </div> -->
        </div>

          


    
          <!-- <div class="wrapper">
              <div class="checkbox_container">      
                  <p class="title">Beritahu saya ketika ada file:</p>
                  @foreach($evidence as $e)
                  <div class="checkbox_wrap">
                      <div class="checkbox_left">
                        {{ $e->name }}
                      </div>
                      <div class="checkbox_right">
                          <i class="fas fa-check"></i>
                          <input type="checkbox" class="checkbox">
                          <i class="fas fa-times"></i>
                      </div>
                  </div>
                @endforeach
              </div>
          </div> -->



      </div>
    </div>

    <!-- <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
      <img src="{{url('user/assets/img/hai.png')}}" class="img-fluid" alt="">
    </div> -->

  </div>
</div>
</div>
</div>
</div>

</section><!-- End About Section -->

<!-- ======= Pricing Section ======= -->
<section id="pricing" class="pricing">

<div class="container" data-aos="fade-up">

  <header class="section-header">
    <h2>KENALI</h2>
    <p>Tipe Gangguan Tidur</p>
  </header>

  <div class="row gy-4" data-aos="fade-left">

    <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
      <div class="box">
        <h3 style="color: #484C8D;">Insomnia</h3><br>
        <img src="{{url('user/assets/img/insomniaa.png')}}" class="img-fluid" alt="">
        <ul>
          Ketidakpuasan terhadap kuantitas atau kualitas tidur dengan keluhan kesulitan memulai & mempertahankan tidur.
        </ul>
        <!-- <a href="#" class="btn-buy">Selengkapnya</a> -->
      </div>
    </div>

    <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="200">
      <div class="box">
        
        <h3 style="color: #ff0071;">Obstructive Sleep Apnea (OSA)</h3>
        <img src="{{url('user/assets/img/osa.png')}}" class="img-fluid" alt="">
        <ul>
        Gangguan tidur terkait pernapasan, ditandai dengan penyempitan saluran napas, dengan gejala mendengkur pada saat tidur.
        </ul>
        <!-- <a href="#" class="btn-buy">Selengkapnya</a> -->
      </div>
    </div>

    <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="300">
      <div class="box">
        <h3 style="color: #07d5c0;">Restless Legs Syndrome (RLS)</h3>
        <img src="{{url('user/assets/img/rls.png')}}" class="img-fluid" alt="">
        <ul>
          Gangguan pada neurologi yang menimbulkan rasa tidak nyaman pada tubuh bagian tertentu pada malam hari. 
        </ul>
        <br>
        <!-- <a href="#" class="btn-buy">Selengkapnya</a> -->
      </div>
    </div>

    <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="400">
      <div class="box">
        
        <h3 style="color: #ff901c;">Narkolepsi</h3><br>
        <img src="{{url('user/assets/img/narkolepsi.png')}}" class="img-fluid" alt="">
        <ul>
         Serangan tidur yang ditandai dengan kantuk tak tertahankan yang muncul tiba-tiba pada siang hari atau pada saat beraktivitas.
        </ul>
        <!-- <a href="#" class="btn-buy">Selengkapnya</a> -->
      </div>
    </div>

  </div>

</div>

</section><!-- End Pricing Section -->


    <!-- ======= Values Section ======= -->
    <!-- <section id="values" class="values">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <p>Tidur Berkualitas Meningkatkan Produktivitas</p>
        </header>

        <div class="row">

          <div class="col-lg-4">
            <div class="box" data-aos="fade-up" data-aos-delay="200">
              <img src="{{url('user/assets/img/values-1.png')}}" class="img-fluid" alt="">
              <h3>TIPS</h3>
              <li> Atur jadwal Tidur</li>
              <li> Matikan lampu kamar</li>
              <li> Mendengarkan musik yang lembut</li>
              <li> Matikan alat elektronik 30 menit sebelum tidur</li>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box" data-aos="fade-up" data-aos-delay="400">
              <img src="{{url('user/assets/img/tidur.png')}}" class="img-fluid" alt="">
              <h3>Voluptatem voluptatum alias</h3>
              <p>Repudiandae amet nihil natus in distinctio suscipit id. Doloremque ducimus ea sit non.</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box" data-aos="fade-up" data-aos-delay="600">
              <img src="{{url('user/assets/img/values-3.png')}}" class="img-fluid" alt="">
              <h3>Fugit cupiditate alias nobis.</h3>
              <p>Quam rem vitae est autem molestias explicabo debitis sint. Vero aliquid quidem commodi.</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box" data-aos="fade-up" data-aos-delay="600">
              <img src="{{url('user/assets/img/values-3.png')}}" class="img-fluid" alt="">
              <h3>Fugit cupiditate alias nobis.</h3>
              <p>Quam rem vitae est autem molestias explicabo debitis sint. Vero aliquid quidem commodi.</p>
            </div>
          </div>
        </div>

      </div> -->

    <!-- </section>End Values Section -->

    <!-- ======= Counts Section ======= -->
    <!-- <section id="counts" class="counts">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="bi bi-emoji-smile"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
                <p>Happy Clients</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="bi bi-journal-richtext" style="color: #ee6c20;"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
                <p>Projects</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="bi bi-headset" style="color: #15be56;"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
                <p>Hours Of Support</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="bi bi-people" style="color: #bb0852;"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
                <p>Hard Workers</p>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section>End Counts Section -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <p>Tidur Berkualitas Meningkatkan Produktivitas</p>
        </header>

        <div class="row">

          <div class="col-lg-6">
          
            <img src="{{url('user/assets/img/haiii.png')}}" class="img-fluid p-4" alt="">
          </div>

          <div class="col-lg-6 mt-5 mt-lg-0 d-flex">
            <div class="row align-self-center gy-4">
            <center><h3>Manfaat Tidur Cukup</h3></center>

              <div class="col-md-6" data-aos="zoom-out" data-aos-delay="200">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check"></i>
                  <h3>Lebih produktif</h3>
                </div>
              </div>

              <div class="col-md-6" data-aos="zoom-out" data-aos-delay="300">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check"></i>
                  <h3>Menjaga berat badan</h3>
                </div>
              </div>

              <div class="col-md-6" data-aos="zoom-out" data-aos-delay="400">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check"></i>
                  <h3>Meningkatkan kekebalan tubuh</h3>
                </div>
              </div>

              <div class="col-md-6" data-aos="zoom-out" data-aos-delay="500">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check"></i>
                  <h3>Meningkatkan suasana hati</h3>
                </div>
              </div>

              <div class="col-md-6" data-aos="zoom-out" data-aos-delay="500">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check"></i>
                  <h3>Konsentrasi lebih baik</h3>
                </div>
              </div>

              <div class="col-md-6" data-aos="zoom-out" data-aos-delay="500">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check"></i>
                  <h3>Mencegah berbagai macam penyakit</h3>
                </div>
              </div>
            </div>
          </div>
        </div> <!-- / row -->

        <!-- <br>
        <br>
        <h3>&nbsp &nbsp &nbsp &nbsp Tips</h3>
        <br>

            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="500">
              <div class="feature-box d-flex align-items-center">
                <i class="bi bi-check"></i>
                <h3>Atur jadwal tidur</h3>
              </div>
            </div>

            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="500">
              <div class="feature-box d-flex align-items-center">
                <i class="bi bi-check"></i>
                <h3>Matikan lampu kamar</h3>
              </div>
            </div>

            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="500">
              <div class="feature-box d-flex align-items-center">
                <i class="bi bi-check"></i>
                <h3>Mendengarkan musik yang lembut</h3>
              </div>
            </div>

            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="500">
              <div class="feature-box d-flex align-items-center">
                <i class="bi bi-check"></i>
                <h3>Matikan alat elektronik 30 menit sebelum tidur</h3>
              </div>
            </div> -->

        <!-- Feature Tabs -->
        <!-- <div class="row feture-tabs" data-aos="fade-up">
          <div class="col-lg-6">
            <h3>Manfaat Tidur Cukup</h3>

            <div class="col-md-6" data-aos="zoom-out" data-aos-delay="200">
                <div class="feature-box d-flex align-items-center">
                  <i class="bi bi-check"></i>
                  <h4Atur Jadwal Tidur</h4>
                </div>
              </div>
             Tabs -->
            <!-- <ul class="nav nav-pills mb-3">
              <li>
                <a class="nav-link active" data-bs-toggle="pill" href="#tab1">Saepe fuga</a>
              </li>
              <li>
                <a class="nav-link" data-bs-toggle="pill" href="#tab2">Voluptates</a>
              </li>
              <li>
                <a class="nav-link" data-bs-toggle="pill" href="#tab3">Corrupti</a>
              </li>
            </ul><!-- End Tabs -->

            <!-- Tab Content -->
            
            <!-- <div class="tab-content">

              <div class="tab-pane fade show active" id="tab1">
                <p>Consequuntur inventore voluptates consequatur aut vel et. Eos doloribus expedita. Sapiente atque consequatur minima nihil quae aspernatur quo suscipit voluptatem.</p>
                <div class="d-flex align-items-center mb-2">
                  <i class="bi bi-check2"></i>
                  <h4>Repudiandae rerum velit modi et officia quasi facilis</h4>
                </div>
                <p>Laborum omnis voluptates voluptas qui sit aliquam blanditiis. Sapiente minima commodi dolorum non eveniet magni quaerat nemo et.</p>
                <div class="d-flex align-items-center mb-2">
                  <i class="bi bi-check2"></i>
                  <h4>Incidunt non veritatis illum ea ut nisi</h4>
                </div>
                <p>Non quod totam minus repellendus autem sint velit. Rerum debitis facere soluta tenetur. Iure molestiae assumenda sunt qui inventore eligendi voluptates nisi at. Dolorem quo tempora. Quia et perferendis.</p>
              </div><!-- End Tab 1 Content -->
              

              <!-- <div class="tab-pane fade show" id="tab2">
                <p>Consequuntur inventore voluptates consequatur aut vel et. Eos doloribus expedita. Sapiente atque consequatur minima nihil quae aspernatur quo suscipit voluptatem.</p>
                <div class="d-flex align-items-center mb-2">
                  <i class="bi bi-check2"></i>
                  <h4>Repudiandae rerum velit modi et officia quasi facilis</h4>
                </div>
                <p>Laborum omnis voluptates voluptas qui sit aliquam blanditiis. Sapiente minima commodi dolorum non eveniet magni quaerat nemo et.</p>
                <div class="d-flex align-items-center mb-2">
                  <i class="bi bi-check2"></i>
                  <h4>Incidunt non veritatis illum ea ut nisi</h4>
                </div>
                <p>Non quod totam minus repellendus autem sint velit. Rerum debitis facere soluta tenetur. Iure molestiae assumenda sunt qui inventore eligendi voluptates nisi at. Dolorem quo tempora. Quia et perferendis.</p>
              </div>End Tab 2 Content -->

              <!-- <div class="tab-pane fade show" id="tab3">
                <p>Consequuntur inventore voluptates consequatur aut vel et. Eos doloribus expedita. Sapiente atque consequatur minima nihil quae aspernatur quo suscipit voluptatem.</p>
                <div class="d-flex align-items-center mb-2">
                  <i class="bi bi-check2"></i>
                  <h4>Repudiandae rerum velit modi et officia quasi facilis</h4>
                </div>
                <p>Laborum omnis voluptates voluptas qui sit aliquam blanditiis. Sapiente minima commodi dolorum non eveniet magni quaerat nemo et.</p>
                <div class="d-flex align-items-center mb-2">
                  <i class="bi bi-check2"></i>
                  <h4>Incidunt non veritatis illum ea ut nisi</h4>
                </div>
                <p>Non quod totam minus repellendus autem sint velit. Rerum debitis facere soluta tenetur. Iure molestiae assumenda sunt qui inventore eligendi voluptates nisi at. Dolorem quo tempora. Quia et perferendis.</p>
              </div>End Tab 3 Content -->

            <!-- </div>

          </div>

          <div class="col-lg-6">
            <img src="{{url('user/assets/img/features-2.png')}}" class="img-fluid" alt="">
          </div>

        </div>   -->

        <!-- Feature Icons -->
        <div class="row feature-icons" data-aos="fade-up">
          <h3> Tips Mendapatkan Tidur yang Berkualitas</h3>
          <br>
          <br>

          <div class="row">

            <div class="col-xl-4 text-center" data-aos="fade-right" data-aos-delay="100">
              <img src="{{url('user/assets/img/tipss.png')}}" class="img-fluid p-9" alt="">
            </div>

            <div class="col-xl-8 d-flex content">
              <div class="row align-self-center gy-4">

                <div class="col-md-6 icon-box" data-aos="fade-up">
                  <i class="ri-time-line"></i>
                  <div>
                    <h4>Atur jadwal tidur</h4>
                    <p>Atur jam tidur dan bangun Anda selalu sama setiap harinya. Lakukan dengan bertahap, dengan tidur lebih awal dan bangun pagi 5 hingga 15 menit lebih awal, sampai Anda terbiasa dengan waktu untuk terbangun tersebut.</p>
                  </div>
                </div>

                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                  <i class="ri-magic-line"></i>
                  <div>
                    <h4>Matikan lampu kamar</h4>
                    <p>Cahaya dapat menurunkan kadar melatonin yang diproduksi tubuh, sehingga dapat membuat rasa kantuk berkurang dan membuat sulit tidur.</p>
                  </div>
                </div>

                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                  <i class="ri-music-line"></i>
                  <div>
                    <h4>Mendengarkan musik yang lembut</h4>
                    <p>Dapat mengontrol jantung dan organ vital jadi lebih rileks, sehingga tubuh jadi lebih siap untuk beristirahat. 
                  </div>
                </div>

                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                  <i class="ri-smartphone-line"></i>
                  <div>
                    <h4>Matikan alat elektronik 30 menit sebelum tidur</h4>
                    <p>Cahaya biru pada layar elektronik dapat menunda produksi melatonin dan membuat lebih sulit tidur. Menatap smartphone sebelum tidur juga dapat menyebabkan gangguan emosional yang mengganggu kualitas tidur </p>
                  </div>
                </div>

                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                  <i class="ri-book-line"></i>
                  <div>
                    <h4>Membaca buku favorit</h4>
                    <p>Selain dapat memperluas wawasan dan menguatkan ingatan, membaca buku sebelum tidur dapat meningkatkan relaksasi, mengurangi stres, menjaga kesehatan mental dan membuat tidur lebih berkualitas </p>
                  </div>
                </div>

                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
                  <i class="ri-radar-line"></i>
                  <div>
                    <h4>Explicabo consectetur</h4>
                    <p>Est autem dicta beatae suscipit. Sint veritatis et sit quasi ab aut inventore</p>
                  </div>
                </div>

              </div>
            </div>

          </div>

        </div><!-- End Feature Icons -->

      </div>

    </section><!-- End Features Section -->

    

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  

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