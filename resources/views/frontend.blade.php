<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> Hosting | Teamplate</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('fastes/assets/img/favicon.ico')}}">

	<!-- CSS here -->
	<link rel="stylesheet" href="{{asset('fastes/assets/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('fastes/assets/css/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{asset('fastes/assets/css/slicknav.css')}}">
  <link rel="stylesheet" href="{{asset('fastes/assets/css/flaticon.css')}}">
  <link rel="stylesheet" href="{{asset('fastes/assets/css/progressbar_barfiller.css')}}">
  <link rel="stylesheet" href="{{asset('fastes/assets/css/gijgo.css')}}">
  <link rel="stylesheet" href="{{asset('fastes/assets/css/animate.min.css')}}">
  <link rel="stylesheet" href="{{asset('fastes/assets/css/animated-headline.css')}}">
	<link rel="stylesheet" href="{{asset('fastes/assets/css/magnific-popup.css')}}">
	<link rel="stylesheet" href="{{asset('fastes/assets/css/fontawesome-all.min.css')}}">
	<link rel="stylesheet" href="{{asset('fastes/assets/css/themify-icons.css')}}">
	<link rel="stylesheet" href="{{asset('fastes/assets/css/slick.css')}}">
	<link rel="stylesheet" href="{{asset('fastes/assets/css/nice-select.css')}}">
  <link rel="stylesheet" href="{{asset('fastes/assets/css/style.css')}}">
    
</head>
<body>


    <!-- ? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="{{asset('fastes/assets/img/logo/loder.png')}}" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <header>
        <!-- Header Start -->
        <div class="header-area header-transparent">
            <div class="main-header header-sticky">
                <div class="container-fluid">
                    <div class="menu-wrapper d-flex align-items-center justify-content-between">
                        <!-- Logo -->
                        <div class="logo">
                            <a href="index.html"><img src="{{asset('fastes/assets/img/logo/logo.png')}}" alt=""></a>
                        </div>
                        <!-- Main-menu -->
                        
                        <!-- Header-btn -->
                        
                        <!-- Mobile Menu -->
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>
    <!-- header end -->
    <main>
        <!-- Hero Area Start-->
        <div class="slider-area">
            <div class="single-slider slider-height d-flex align-items-center">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-8 col-lg-9">
                            <!-- Hero Caption -->
                            <div class="hero__caption">
                                <h1>Tracking Covid</h1>
                            </div>
                            <!--Hero form -->
                            
                            <!-- Domain List -->
                         
                            <!-- Domain List  End-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Hero Area End-->
        <!--? Pricing Card Start -->
        <?php
        $Sembuh = 0;
        $Meninggal = 0;
        $Positif = 0;

        foreach($data as $key){
        $Sembuh +=    $key['Sembuh'];
        $Meninggal += $key['Meninggal'];
        $Positif +=   $key['Positive'];
        }

        ?>
        <section class="pricing-card-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-10">
                        <div class="single-card text-center mb-30">
                            <div class="card-top">
                                <img src="{{asset('fastes/assets/img/gallery/price1.png')}}" alt="">
                                <h4>Indonesia</h4>
                            </div>
                            <div class="card-mid">
                                <h4>{{$sembuh}} <span>/ indonesia</span></h4>
                                <h4>{{$positive}} <span>/ indonesia</span></h4>
                                <h4>{{$meninggal}} <span>/Indonesia </span></h4>

                            </div>
                           
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-10">
                        <div class="single-card text-center mb-30">
                            <div class="card-top">
                                <img src="{{asset('fastes/assets/img/gallery/price1.png')}}" alt="">
                                <h4>Sembuh Dunia</h4>
                            </div>
                            <div class="card-mid">
                                <h4> {{$Sembuh}}<span>/Dunia </span></h4>
                            </div>
                            </div>
                            </div>

                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-10">
                        <div class="single-card text-center mb-30">
                            <div class="card-top">
                                <img src="{{asset('fastes/assets/img/gallery/price1.png')}}" alt="">
                                <h4>Meninggal Dunia</h4>
                            </div>
                            <div class="card-mid">
                                <h4> {{$Meninggal}}<span>/Dunia </span></h4>
                            </div>
                            </div>
                            </div>

                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-10" >
                        <div class="single-card text-center mb-30">
                            <div class="card-top">
                                <img src="{{asset('fastes/assets/img/gallery/price1.png')}}" alt="">
                                <h4>Positive Dunia</h4>
                            </div>
                            <div class="card-mid">
                                <h4> {{$Positif}}<span>/Dunia </span></h4>
                            </div>
                            </div>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="card mb-4">
                            <div class="card-header" align="center"> 
                                    Data Coronavirus Berdasarkan Provinsi di Negara Indonesia
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>NO.</th>
                                                <th>PROVINSI</th>
                                                <th>POSITIF</th>
                                                <th>SEMBUH</th>
                                                <th>MENINGGAL</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @php $no=1; @endphp
                                        @foreach ($tampil as $data)
                                        <tr>
                                            <th>{{$no++}}</th>
                                            <th>{{$data->nama_provinsi}}
                                            <th>{{$data->positive}}
                                            <th>{{$data->sembuh}}
                                            <th>{{$data->meninggal}}  
                                        </tr>
                                        @endforeach
                                    </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php
        $datapositif = file_get_contents("https://api.kawalcorona.com/positif");
        $positif = json_decode($datapositif, TRUE);
        $datasembuh = file_get_contents("https://api.kawalcorona.com/sembuh");
        $sembuh = json_decode($datasembuh, TRUE);
        $datameninggal = file_get_contents("https://api.kawalcorona.com/meninggal");
        $meninggal = json_decode($datameninggal, TRUE);
        $dataid = file_get_contents("https://api.kawalcorona.com/indonesia");
        $id = json_decode($dataid, TRUE);
        $datadunia= file_get_contents("https://api.kawalcorona.com/");
        $dunia = json_decode($datadunia, TRUE);
        
    ?>

                    <div class="card-header ">
                    <h3 class="card-title" align="center">Data Kasus Corona virus Global</h3>
                    </div>
                     <div class="card-body" >
                         <div style="height:600px;overflow:auto;margin-right:15px;">
                                 <table class="table table-striped"  fixed-header  >
                                 <thead>
                                     <tr>
                                     <th scope="col">No</th>
                                     <th scope="col">Negara</th>
                                     <th scope="col">Positif</th>
                                     <th scope="col">Sembuh</th>
                                     <th scope="col">Meninggal</th>
                                     </tr>
                                 </thead>
                                 <tbody>
             
                                 @php
                                     $no = 1;    
                                 @endphp
                                 <?php
                                     for ($i= 0; $i <= 191; $i++){
             
                                     
                                     ?>
                                 <tr>
                                     <td> <?php echo $i+1 ?></td>
                                     <td> <?php echo $dunia[$i]['attributes']['Country_Region'] ?></td>
                                     <td> <?php echo $dunia[$i]['attributes']['Confirmed'] ?></td>
                                     <td><?php echo $dunia[$i]['attributes']['Recovered']?></td>
                                     <td><?php echo $dunia[$i]['attributes']['Deaths']?></td>
                                 </tr>
                                     <?php 
                                 
                                 } ?>
                                 </tbody>
                                 </table>
                                 </tbody>
                                 </table>
                          </div>
                   </div>
       
            <section class="load-balancing  pt-top section-bg2" data-background="{{asset('fastesassets/img/gallery/section_bg01.png')}}">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-11 col-lg-11 col-md-10 ">
                        <!-- Section Tittle -->
                        <div class="section-tittle text-center mb-90">
                            <h2>Corona Virus</h2>
                            <p>Coronavirus merupakan keluarga besar virus yang menyebabkan penyakit pada manusia dan hewan. Pada manusia biasanya menyebabkan penyakit infeksi saluran pernapasan, mulai flu biasa hingga penyakit yang serius seperti Middle East Respiratory Syndrome (MERS) dan Sindrom Pernafasan Akut Berat/ Severe Acute Respiratory Syndrome (SARS)
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-features mb-40">
                            <div class="features-icon">
                                <img src="{{asset('fastes/assets/img/gallery/right-icon.png')}}" alt="">
                            </div>
                            <div class="features-caption">
                                <h3>Apa saja gejala COVID-19</h3>
                                <p>Gejala umum berupa demam ≥380C, batuk kering, dan sesak napas. Jika ada orang yang dalam 14 hari sebelum muncul gejala tersebut pernah melakukan perjalanan ke negara terjangkit, atau pernah merawat/kontak erat dengan penderita COVID-19, maka terhadap orang tersebut akan dilakukan pemeriksaan laboratorium lebih lanjut untuk memastikan diagnosisnya. .</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-features mb-40">
                            <div class="features-icon">
                                <img src="{{asset('fastes/assets/img/gallery/right-icon.png')}}" alt="">
                            </div>
                            <div class="features-caption">
                                <h3>.Seberapa bahayanya COVID-19 ini</h3>
                                <p>Seperti penyakit pernapasan lainnya, COVID-19 dapat menyebabkan gejala ringan termasuk pilek, sakit tenggorokan, batuk, dan demam. Sekitar 80% kasus dapat pulih tanpa perlu perawatan khusus..</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-features mb-40">
                            <div class="features-icon">
                                <img src="{{asset('fastes/assets/img/gallery/right-icon.png')}}" alt="">
                            </div>
                            <div class="features-caption">
                                <h3>Apakah sudah ada vaksin untuk COVID-19</h3>
                                <p>Vaksin untuk mencegah infeksi COVID-19 sedang dalam tahap pengembangan/uji coba..</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-features mb-40">
                            <div class="features-icon">
                                <img src="{{asset('fastes/assets/img/gallery/right-icon.png')}}" alt="">
                            </div>
                            <div class="features-caption">
                                <h3>Siapa saja yang berisiko terinfeksi COVID-19</h3>
                                <p>Orang yang tinggal atau bepergian di daerah di mana virus COVID-19 bersirkulasi sangat mungkin berisiko terinfeksi. .</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-features mb-40">
                            <div class="features-icon">
                                <img src="{{asset('fastes/assets/img/gallery/right-icon.png')}}" alt="">
                            </div>
                            <div class="features-caption">
                                <h3>.Bagaimana cara mencegah penularan virus corona</h3>
                                <p>Menjaga kesehatan dan kebugaran agar stamina tubuh tetap prima dan sistem imunitas / kekebalan tubuh meningkat. 
                                    Mencuci tangan secara teratur menggunakan air dan sabun atau handrub berbasis alkohol. Mencuci tangan sampai
                                     bersih selain dapat membunuh virus yang mungkin ada di tangan kita, tindakan ini juga me rupakan salah satu tindakan yang mudah dan murah. 
                                     Sekitar 98% penyebaran penyakit bersumber dari tangan. Karena itu, menjaga kebersihan tangan adalah hal yang sangat penting..</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-features mb-40">
                            <div class="features-icon">
                                <img src="{{asset('fastes/assets/img/gallery/right-icon.png')}}" alt="">
                            </div>
                            <div class="features-caption">
                                <h3>Apakah saya harus selalu menggunakan masker</h3>
                                <p>Pemakaian masker hanya bagi orang yang memiliki gejala infeksi pernapasan (batuk atau bersin), mencurigai infeksi COVID-19 dengan gejala ringan, 
                                    mereka yang merawat orang yang bergejala seperti demam dan batuk, dan para petugas kesehatan. .</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        

        <section class="support-area section-bg2 pt-130 pb-130" data-background="{{asset('fastes/assets/img/gallery/section_bg02.png')}}">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-lg-5">
                        <div class="support-caption">
                        <!-- Section Tittle -->
                        <div class="section-tittle section-tittle2">
                            <h2>Hubungi<br></h2>
                            <p class="support-details"></p>
                        </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="support-number">
                            <!-- Single contact -->
                            <div class="single-contact">
                                <div class="contact-icon">
                                    <i class="fas fa-phone-volume"></i>
                                </div>
                                <div class="contact-number">
                                    <span>081221669831</span>
                                </div>
                            </div>
                            <!-- Single contact -->
                            <div class="single-contact">
                                <div class="contact-icon">
                                    <i class="far fa-comment"></i>
                                </div>
                                <div class="contact-number">
                                    <a href="https://m.facebook.com/smkassalaam/"><i class="fab fa-facebook-f"></i>acebook</a>
                                    <a href="https:www.instagram.com/smkassalaam/"><i class="icofont-instagram"></i>Instagram</a><br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        
      
   
                        
    <!-- JS here -->

    <script src="{{asset('fastes/assets/js/vendor/modernizr-3.5.0.min.js')}}"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="{{asset('fastes/assets/js/vendor/jquery-1.12.4.min.js')}}"></script>
    <script src="{{asset('fastes/assets/js/popper.min.js')}}"></script>
    <script src="{{asset('fastes/assets/js/bootstrap.min.js')}}"></script>
    <!-- Jquery Mobile Menu -->
    <script src="{{asset('fastes/assets/js/jquery.slicknav.min.js')}}"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="{{asset('fastes/assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('fastes/assets/js/slick.min.js')}}"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="{{asset('fastes/assets/js/wow.min.js')}}"></script>
    <script src="{{asset('fastes/assets/js/animated.headline.js')}}"></script>
    <script src="{{asset('fastes/assets/js/jquery.magnific-popup.js')}}"></script>

    <!-- Date Picker -->
    <script src="{{asset('fastes/assets/js/gijgo.min.js')}}"></script>
    <!-- Nice-select, sticky -->
    <script src="{{asset('fastes/assets/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('fastes/assets/js/jquery.sticky.js')}}"></script>
    <!-- Progress -->
    <script src="{{asset('fastes/assets/js/jquery.barfiller.js')}}"></script>
    
    <!-- counter , waypoint,Hover Direction -->
    <script src="{{asset('fastes/assets/js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('fastes/assets/js/waypoints.min.js')}}"></script>
    <script src="{{asset('fastes/assets/js/jquery.countdown.min.js')}}"></script>
    <script src="{{asset('fastes/assets/js/hover-direction-snake.min.js')}}"></script>

    <!-- contact js -->
    <script src="{{asset('fastes/assets/js/contact.js')}}"></script>
    <script src="{{asset('fastes/assets/js/jquery.form.js')}}"></script>
    <script src="{{asset('fastes/assets/js/jquery.validate.min.js')}}"></script>
    <script src="{{asset('fastes/assets/js/mail-script.js')}}"></script>
    <script src="{{asset('fastes/assets/js/jquery.ajaxchimp.min.js')}}"></script>
    
    <!-- Jquery Plugins, main Jquery -->	
    <script src="{{asset('fastes/assets/js/plugins.js')}}"></script>
    <script src="{{asset('fastes/assets/js/main.js')}}"></script>
    
    </body>
</html>