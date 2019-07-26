<!DOCTYPE html>
<html lang="en">
<head>

	<title>Wisata Jogja</title>

  	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="">
  	<meta name="description" content="">

	<!-- stylesheets css -->
	<link rel="stylesheet" href="{{ asset('asset/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/custom.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('asset/css/loaders.css') }}"/>
  	<link rel="stylesheet" href="{{ asset('asset/css/magnific-popup.css') }}">
	<link rel="stylesheet" href="{{ asset('asset/css/animate.min.css') }}">
	<link rel="stylesheet" href="{{ asset('asset/css/font-awesome.min.css') }}">
  	<link rel="stylesheet" href="{{ asset('asset/css/nivo-lightbox.css') }}">
  	<link rel="stylesheet" href="{{ asset('asset/css/nivo_themes/default/default.css') }}">
  	<link rel="stylesheet" href="{{ asset('asset/css/hover-min.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/contact-input-style.css') }}">

		<link href="{{ asset('asset/animasi/css/responsive.css') }}" rel="stylesheet">
		<link href="{{ asset('asset/animasi/css/prettify.css') }}" rel="stylesheet">
		<link rel="shortcut icon" href="{{ asset('asset/animasi/img/icons/favicon.ico') }}">
		<link rel="apple-touch-icon" sizes="114x114" href="{{ asset('asset/animasi/img/icons/apple-touch-icon-114x114.png') }}">
		<link rel="apple-touch-icon" sizes="72x72" href="{{ asset('asset/animasi/img/icons/apple-touch-icon-72x72.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('asset/animasi/img/icons/apple-touch-icon.png') }}"> 
    @stack('css')
  	
</head>
<body>
 <div class="loader loader-bg">
        <div class="loader-inner ball-pulse-rise">
          <div></div>
          <div></div>
          <div></div>
          <div></div>
          <div></div>
        </div>
      </div>

<!------------Static navbar ------------>
    <nav class="navbar navbar-default top-bar affix" data-spy="affix" data-offset-top="250" >
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Wisata Jogja</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Wisata Jogja</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#intro">Home</a></li>
            <li><a href="#hotels">Category</a></li>
            <li><a href="#location">Top Locations</a></li>
            {{-- <li><a href="#todo">To-Do List</a></li> --}}
            <li><a href="#video-sec">Video</a></li>
              
              
              <li><a href="#contact-sec">Stay in Touch</a></li>
           
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>


    
<!-- CONTENT WRAPPER
		============================================= -->
		<div id="content-wrapper">
		
		
<!-- INTRO
============================================= -->
	<section id="intro">
			
		<!-- Intro Page Slides -->
		<div id="slides">
					<div id="introslide-2" class="tgs-slide"></div>
					<div id="introslide-1" class="tgs-slide"></div>
					<div id="introslide-0" class="tgs-slide"></div>
					<ul class="slides-container">
						
						<section id="banner" class="parallax">
              <div class="gradient-overlay"></div>
                <div class="container">
                  <div class="row">
              
                    <div class="col-md-offset-2 col-md-8 col-sm-12">
                      <h1 class="wow fadeInUp" data-wow-delay="1s">Info Wisata Jogja</h1>
                      <p class="wow fadeInUp" data-wow-delay="1s">Yogyakarta adalah ibu kota dan pusat pemerintahan Daerah Istimewa Yogyakarta, Indonesia.<br>
                        Kota Yogyakarta adalah kediaman bagi Sultan Hamengkubuwana dan Adipati Paku Alam. Kota Yogyakarta merupakan salah satu kota terbesar di Indonesia dan kota terbesar kempat di wilayah Pulau Jawa bagian selatan setelah Bandung, Malang, dan Surakarta menurut jumlah penduduk.<br></p>
                      </div>
              
                  </div>
                </div>
              </section>
              
						
						<!-- Intro Page Slider Image 2 -->
						<li>
							<!-- <div id="introslide-2" class="tgs-slide"></div> -->
							<div class="intro-content text-center">
								<h1 class="wow fadeInUp" data-wow-delay="1s">Info Wisata Jogja</h1>
							</div>
						</li>
						
						<!-- Intro Page Slider Image 3 -->
						<li>
							<!-- <div id="introslide-3" class="tgs-slide"></div> -->
							<div class="intro-content text-center">
								<h1 class="wow fadeInUp" data-wow-delay="1s">Info Wisata Jogja</h1>
							</div>
						</li>
					</ul>
				</div>  <!-- End Intro Page Slides -->
				
				<!-- Scroll Down Button -->
				<span class="scroll-down"> 
					<a id="GoToMainContent" href="#hotels">
						<span><i class="livicon" data-n="angle-wide-down" data-c="#fff" data-hc="false" data-s="32" data-l="true"></i></span>
					</a>Explore More 
				</span> 
				
			</section>  <!-- END INTRO -->
			
</div>  <!-- END CONTENT WRAPPER -->

<!------------ Gallery section ------------>
<section id="hotels" class="parallax">
  <div class="container">
    <div class="row">

      <div class="col-md-12">

       <div class="col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10 text-center">
         <div class="wow fadeInUp section-title" data-wow-delay="1s">
            <h2>Category</h2>
        </div>
      </div>
        
          <!-- iso section -->
          <div class="iso-section wow fadeInUp text-center" data-wow-delay="0.5">

                    <ul class="filter-wrapper clearfix">
                  <ul class="filter-wrapper clearfix">
                    <li><a href="#" data-filter="*" class="selected opc-main-bg">All</a></li>
                    <li><a href="#" class="opc-main-bg" data-filter=".wisataalam">Wisata Alam</a></li>
                    <li><a href="#" class="opc-main-bg" data-filter=".wisatapantai">Wisata Pantai</a></li>
                    <li><a href="#" class="opc-main-bg" data-filter=".wisatasejarah">Wisata Sejarah</a></li>
                    <li><a href="#" class="opc-main-bg" data-filter=".wisatakuliner">Wisata Kuliner</a></li>
                </ul>

                    </ul>

                    <!-- iso box section -->
                    <div class="iso-box-section wow fadeInUp" data-wow-delay="0.9s">
                      <div class="iso-box-wrapper col4-iso-box">

                        <div class="iso-box wisataalam col-md-4 col-sm-6">
                          <div class="gallery-thumb">
                            <a href="{{ asset('asset/images/alam-01.jpg') }}" data-lightbox-gallery="food-gallery">
                              <img src="{{ asset('asset/images/alam-01.jpg') }}" class="fluid-img" alt="Gallery">
                                <div class="gallery-overlay">
                                  <div class="gallery-item">
                                    <i class="fa fa-search"></i>
                                  </div>
                                </div>
                            </a>
                          </div>
                          <h3>Wisata Alam Kalibiru</h3>
                        </div>

                        <div class="iso-box wisataalam col-md-4 col-sm-6">
                          <div class="gallery-thumb">
                            <a href="{{ asset('asset/images/alam-02.jpg') }}" data-lightbox-gallery="food-gallery">
                              <img src="{{ asset('asset/images/alam-02.jpg') }}" class="fluid-img" alt="Gallery">
                                <div class="gallery-overlay">
                                  <div class="gallery-item">
                                    <i class="fa fa-search"></i>
                                  </div>
                                </div>
                            </a>
                          </div>
                          <h3>Tebing Breksi</h3>
                        </div>

                        <div class="iso-box wisataalam col-md-4 col-sm-6">
                          <div class="gallery-thumb">
                            <a href="{{ asset('asset/images/alam-03.jpg') }}" data-lightbox-gallery="food-gallery">
                              <img src="{{ asset('asset/images/alam-03.jpg') }}" class="fluid-img" alt="Gallery">
                                <div class="gallery-overlay">
                                  <div class="gallery-item">
                                    <i class="fa fa-search"></i>
                                  </div>
                                </div>
                            </a>
                          </div>
                          <h3>Hutan Pinus Mangunan</h3>
                        </div>

                        <div class="iso-box wisataalam col-md-4 col-sm-6">
                          <div class="gallery-thumb">
                            <a href="{{ asset('asset/images/alam-04.jpg') }}" data-lightbox-gallery="food-gallery">
                              <img src="{{ asset('asset/images/alam-04.jpg') }}" class="fluid-img" alt="Gallery">
                                <div class="gallery-overlay">
                                  <div class="gallery-item">
                                    <i class="fa fa-search"></i>
                                  </div>
                                </div>
                            </a>
                          </div>
                          <h3>Bukit Panguk</h3>
                        </div>

                        <div class="iso-box wisataalam col-md-4 col-sm-6">
                          <div class="gallery-thumb">
                            <a href="{{ asset('asset/images/alam-05.jpg') }}" data-lightbox-gallery="food-gallery">
                              <img src="{{ asset('asset/images/alam-05.jpg') }}" class="fluid-img" alt="Gallery">
                                <div class="gallery-overlay">
                                  <div class="gallery-item">
                                    <i class="fa fa-search"></i>
                                  </div>
                                </div>
                            </a>
                          </div>
                          <h3>Embung Nglanggeran</h3>
                        </div>

                        <div class="iso-box wisataalam col-md-4 col-sm-6">
                          <div class="gallery-thumb">
                            <a href="{{ asset('asset/images/alam-06.jpg') }}" data-lightbox-gallery="food-gallery">
                              <img src="{{ asset('asset/images/alam-06.jpg') }}" class="fluid-img" alt="Gallery">
                                <div class="gallery-overlay">
                                  <div class="gallery-item">
                                    <i class="fa fa-search"></i>
                                  </div>
                                </div>
                            </a>
                          </div>
                          <h3>Goa Pindul</h3>
                        </div>

                        <div class="iso-box wisataalam col-md-4 col-sm-6">
                          <div class="gallery-thumb">
                            <a href="{{ asset('asset/images/alam-07.jpg') }}" data-lightbox-gallery="food-gallery">
                              <img src="{{ asset('asset/images/alam-07.jpg') }}" class="fluid-img" alt="Gallery">
                                <div class="gallery-overlay">
                                  <div class="gallery-item">
                                    <i class="fa fa-search"></i>
                                  </div>
                                </div>
                            </a>
                          </div>
                          <h3>Air Terjun Kedung Pedut</h3>
                        </div>

                        <div class="iso-box wisataalam col-md-4 col-sm-6">
                          <div class="gallery-thumb">
                            <a href="{{ asset('asset/images/alam-08.jpg') }}" data-lightbox-gallery="food-gallery">
                              <img src="{{ asset('asset/images/alam-08.jpg') }}" class="fluid-img" alt="Gallery">
                                <div class="gallery-overlay">
                                  <div class="gallery-item">
                                    <i class="fa fa-search"></i>
                                  </div>
                                </div>
                            </a>
                          </div>
                          <h3>Gumuk Pasir Parangkusumo</h3>
                        </div>

                        <div class="iso-box wisataalam col-md-4 col-sm-6">
                          <div class="gallery-thumb">
                            <a href="{{ asset('asset/images/alam-09.jpg') }}" data-lightbox-gallery="food-gallery">
                              <img src="{{ asset('asset/images/alam-09.jpg') }}" class="fluid-img" alt="Gallery">
                                <div class="gallery-overlay">
                                  <div class="gallery-item">
                                    <i class="fa fa-search"></i>
                                  </div>
                                </div>
                            </a>
                          </div>
                          <h3>Bukit Bintang</h3>
                        </div>

                        <div class="iso-box wisatapantai col-md-4 col-sm-6">
                          <div class="gallery-thumb">
                            <a href="{{ asset('asset/images/pantai-01.jpg') }}" data-lightbox-gallery="food-gallery">
                              <img src="{{ asset('asset/images/pantai-01.jpg') }}" class="fluid-img" alt="Gallery">
                                <div class="gallery-overlay">
                                  <div class="gallery-item">
                                    <i class="fa fa-search"></i>
                                  </div>
                                </div>
                            </a>
                          </div>
                          <h3>Pantai Indrayanti</h3>
                        </div>

                        <div class="iso-box wisatapantai col-md-4 col-sm-6">
                          <div class="gallery-thumb">
                            <a href="{{ asset('asset/images/pantai-02.jpg') }}" data-lightbox-gallery="food-gallery">
                              <img src="{{ asset('asset/images/pantai-02.jpg') }}" class="fluid-img" alt="Gallery">
                                <div class="gallery-overlay">
                                  <div class="gallery-item">
                                    <i class="fa fa-search"></i>
                                  </div>
                                </div>
                            </a>
                          </div>
                          <h3>Pantai Nglambor</h3>
                        </div>

                        <div class="iso-box wisatapantai col-md-4 col-sm-6">
                          <div class="gallery-thumb">
                            <a href="{{ asset('asset/images/pantai-03.jpg') }}" data-lightbox-gallery="food-gallery">
                              <img src="{{ asset('asset/images/pantai-03.jpg') }}" class="fluid-img" alt="Gallery">
                                <div class="gallery-overlay">
                                  <div class="gallery-item">
                                    <i class="fa fa-search"></i>
                                  </div>
                                </div>
                            </a>
                          </div>
                          <h3>Pantai Pok Tunggal</h3>
                        </div>

                        <div class="iso-box wisatapantai col-md-4 col-sm-6">
                          <div class="gallery-thumb">
                            <a href="{{ asset('asset/images/pantai-04.jpg') }}" data-lightbox-gallery="food-gallery">
                              <img src="{{ asset('asset/images/pantai-04.jpg') }}" class="fluid-img" alt="Gallery">
                                <div class="gallery-overlay">
                                  <div class="gallery-item">
                                    <i class="fa fa-search"></i>
                                  </div>
                                </div>
                            </a>
                          </div>
                          <h3>Pantai Timang</h3>
                        </div>

                        <div class="iso-box wisatapantai col-md-4 col-sm-6">
                          <div class="gallery-thumb">
                            <a href="{{ asset('asset/images/pantai-05.jpg') }}" data-lightbox-gallery="food-gallery">
                              <img src="{{ asset('asset/images/pantai-05.jpg') }}" class="fluid-img" alt="Gallery">
                                <div class="gallery-overlay">
                                  <div class="gallery-item">
                                    <i class="fa fa-search"></i>
                                  </div>
                                </div>
                            </a>
                          </div>
                          <h3>Pantai Ngrenehan</h3>
                        </div>

                        <div class="iso-box wisatapantai col-md-4 col-sm-6">
                          <div class="gallery-thumb">
                            <a href="{{ asset('asset/images/pantai-06.jpg') }}" data-lightbox-gallery="food-gallery">
                              <img src="{{ asset('asset/images/pantai-06.jpg') }}" class="fluid-img" alt="Gallery">
                                <div class="gallery-overlay">
                                  <div class="gallery-item">
                                    <i class="fa fa-search"></i>
                                  </div>
                                </div>
                            </a>
                          </div>
                          <h3>Pantai Parangtritis</h3>
                        </div>

                        <div class="iso-box wisatapantai col-md-4 col-sm-6">
                          <div class="gallery-thumb">
                            <a href="{{ asset('asset/images/pantai-07.jpg') }}" data-lightbox-gallery="food-gallery">
                              <img src="{{ asset('asset/images/pantai-07.jpg') }}" class="fluid-img" alt="Gallery">
                                <div class="gallery-overlay">
                                  <div class="gallery-item">
                                    <i class="fa fa-search"></i>
                                  </div>
                                </div>
                            </a>
                          </div>
                          <h3>Pantai Sadranan</h3>
                        </div>

                        <div class="iso-box wisatapantai col-md-4 col-sm-6">
                          <div class="gallery-thumb">
                            <a href="{{ asset('asset/images/pantai-08.jpg') }}" data-lightbox-gallery="food-gallery">
                              <img src="{{ asset('asset/images/pantai-08.jpg') }}" class="fluid-img" alt="Gallery">
                                <div class="gallery-overlay">
                                  <div class="gallery-item">
                                    <i class="fa fa-search"></i>
                                  </div>
                                </div>
                            </a>
                          </div>
                          <h3>Pantai Wediombo</h3>
                        </div>

                        <div class="iso-box wisatapantai col-md-4 col-sm-6">
                          <div class="gallery-thumb">
                            <a href="{{ asset('asset/images/pantai-09.jpg') }}" data-lightbox-gallery="food-gallery">
                              <img src="{{ asset('asset/images/pantai-09.jpg') }}" class="fluid-img" alt="Gallery">
                                <div class="gallery-overlay">
                                  <div class="gallery-item">
                                    <i class="fa fa-search"></i>
                                  </div>
                                </div>
                            </a>
                          </div>
                          <h3>Pantai Jungwok</h3>
                        </div>

                        <div class="iso-box wisatasejarah col-md-4 col-sm-6">
                          <div class="gallery-thumb">
                            <a href="{{ asset('asset/images/sejarah-01.jpg') }}" data-lightbox-gallery="food-gallery">
                              <img src="{{ asset('asset/images/sejarah-01.jpg') }}" class="fluid-img" alt="Gallery">
                                <div class="gallery-overlay">
                                  <div class="gallery-item">
                                    <i class="fa fa-search"></i>
                                  </div>
                                </div>
                            </a>
                          </div>
                          <h3>Benteng Vredeburg</h3>
                        </div>

                        <div class="iso-box wisatasejarah col-md-4 col-sm-6">
                          <div class="gallery-thumb">
                            <a href="{{ asset('asset/images/sejarah-02.jpg') }}" data-lightbox-gallery="food-gallery">
                              <img src="{{ asset('asset/images/sejarah-02.jpg') }}" class="fluid-img" alt="Gallery">
                                <div class="gallery-overlay">
                                  <div class="gallery-item">
                                    <i class="fa fa-search"></i>
                                  </div>
                                </div>
                            </a>
                          </div>
                          <h3>Monumen Jogja Kembali / Monjali</h3>
                        </div>

                        <div class="iso-box wisatasejarah col-md-4 col-sm-6">
                          <div class="gallery-thumb">
                            <a href="{{ asset('asset/images/sejarah-03.jpg') }}" data-lightbox-gallery="food-gallery">
                              <img src="{{ asset('asset/images/sejarah-03.jpg') }}" class="fluid-img" alt="Gallery">
                                <div class="gallery-overlay">
                                  <div class="gallery-item">
                                    <i class="fa fa-search"></i>
                                  </div>
                                </div>
                            </a>
                          </div>
                          <h3>Keraton Yogyakarta</h3>
                        </div>

                        <div class="iso-box wisatasejarah col-md-4 col-sm-6">
                          <div class="gallery-thumb">
                            <a href="{{ asset('asset/images/sejarah-04.jpg') }}" data-lightbox-gallery="food-gallery">
                              <img src="{{ asset('asset/images/sejarah-04.jpg') }}" class="fluid-img" alt="Gallery">
                                <div class="gallery-overlay">
                                  <div class="gallery-item">
                                    <i class="fa fa-search"></i>
                                  </div>
                                </div>
                            </a>
                          </div>
                          <h3>Taman Sari</h3>
                        </div>

                        <div class="iso-box wisatasejarah col-md-4 col-sm-6">
                          <div class="gallery-thumb">
                            <a href="{{ asset('asset/images/sejarah-05.jpg') }}" data-lightbox-gallery="food-gallery">
                              <img src="{{ asset('asset/images/sejarah-05.jpg') }}" class="fluid-img" alt="Gallery">
                                <div class="gallery-overlay">
                                  <div class="gallery-item">
                                    <i class="fa fa-search"></i>
                                  </div>
                                </div>
                            </a>
                          </div>
                          <h3>Museum Perjuangan Jogja</h3>
                        </div>

                        <div class="iso-box wisatasejarah col-md-4 col-sm-6">
                          <div class="gallery-thumb">
                            <a href="{{ asset('asset/images/sejarah-06.jpg') }}" data-lightbox-gallery="food-gallery">
                              <img src="{{ asset('asset/images/sejarah-06.jpg') }}" class="fluid-img" alt="Gallery">
                                <div class="gallery-overlay">
                                  <div class="gallery-item">
                                    <i class="fa fa-search"></i>
                                  </div>
                                </div>
                            </a>
                          </div>
                          <h3>Gedung Agung Jogja</h3>
                        </div>

                        <div class="iso-box wisatasejarah col-md-4 col-sm-6">
                          <div class="gallery-thumb">
                            <a href="{{ asset('asset/images/sejarah-07.jpg') }}" data-lightbox-gallery="food-gallery">
                              <img src="{{ asset('asset/images/sejarah-07.jpg') }}" class="fluid-img" alt="Gallery">
                                <div class="gallery-overlay">
                                  <div class="gallery-item">
                                    <i class="fa fa-search"></i>
                                  </div>
                                </div>
                            </a>
                          </div>
                          <h3>Museum Sonobudoyo</h3>
                        </div>

                        <div class="iso-box wisatasejarah col-md-4 col-sm-6">
                          <div class="gallery-thumb">
                            <a href="{{ asset('asset/images/sejarah-08.jpg') }}" data-lightbox-gallery="food-gallery">
                              <img src="{{ asset('asset/images/sejarah-08.jpg') }}" class="fluid-img" alt="Gallery">
                                <div class="gallery-overlay">
                                  <div class="gallery-item">
                                    <i class="fa fa-search"></i>
                                  </div>
                                </div>
                            </a>
                          </div>
                          <h3>Candi Prambanan</h3>
                        </div>

                        <div class="iso-box wisatasejarah col-md-4 col-sm-6">
                          <div class="gallery-thumb">
                            <a href="{{ asset('asset/images/sejarah-09.jpg') }}" data-lightbox-gallery="food-gallery">
                              <img src="{{ asset('asset/images/sejarah-09.jpg') }}" class="fluid-img" alt="Gallery">
                                <div class="gallery-overlay">
                                  <div class="gallery-item">
                                    <i class="fa fa-search"></i>
                                  </div>
                                </div>
                            </a>
                          </div>
                          <h3>Candi Sambisari</h3>
                        </div>

                        <div class="iso-box wisatakuliner lunch col-md-4 col-sm-6">
                          <div class="gallery-thumb">
                            <a href="{{ asset('asset/images/kuliner-01.jpg') }}" data-lightbox-gallery="food-gallery">
                              <img src="{{ asset('asset/images/kuliner-01.jpg') }}" class="fluid-img" alt="Gallery">
                                <div class="gallery-overlay">
                                  <div class="gallery-item">
                                    <i class="fa fa-search"></i>
                                  </div>
                                </div>
                            </a>
                          </div>
                          <h3>House Of Raminten</h3>
                        </div>

                        <div class="iso-box wisatakuliner lunch col-md-4 col-sm-6">
                          <div class="gallery-thumb">
                            <a href="{{ asset('asset/images/kuliner-02.jpg') }}" data-lightbox-gallery="food-gallery">
                              <img src="{{ asset('asset/images/kuliner-02.jpg') }}" class="fluid-img" alt="Gallery">
                                <div class="gallery-overlay">
                                  <div class="gallery-item">
                                    <i class="fa fa-search"></i>
                                  </div>
                                </div>
                            </a>
                          </div>
                          <h3>Gudeg Yu Djum</h3>
                        </div>

                        <div class="iso-box wisatakuliner lunch col-md-4 col-sm-6">
                          <div class="gallery-thumb">
                            <a href="{{ asset('asset/images/kuliner-03.jpg') }}" data-lightbox-gallery="food-gallery">
                              <img src="{{ asset('asset/images/kuliner-03.jpg') }}" class="fluid-img" alt="Gallery">
                                <div class="gallery-overlay">
                                  <div class="gallery-item">
                                    <i class="fa fa-search"></i>
                                  </div>
                                </div>
                            </a>
                          </div>
                          <h3>Angkringan Kopi Joss Lik Man</h3>
                        </div>

                        <div class="iso-box wisatakuliner lunch col-md-4 col-sm-6">
                          <div class="gallery-thumb">
                            <a href="{{ asset('asset/images/kuliner-04.jpg') }}" data-lightbox-gallery="food-gallery">
                              <img src="{{ asset('asset/images/kuliner-04.jpg') }}" class="fluid-img" alt="Gallery">
                                <div class="gallery-overlay">
                                  <div class="gallery-item">
                                    <i class="fa fa-search"></i>
                                  </div>
                                </div>
                            </a>
                          </div>
                          <h3>Bong Kopitown</h3>
                        </div>

                        <div class="iso-box wisatakuliner lunch col-md-4 col-sm-6">
                          <div class="gallery-thumb">
                            <a href="{{ asset('asset/images/kuliner-05.jpg') }}" data-lightbox-gallery="food-gallery">
                              <img src="{{ asset('asset/images/kuliner-05.jpg') }}" class="fluid-img" alt="Gallery">
                                <div class="gallery-overlay">
                                  <div class="gallery-item">
                                    <i class="fa fa-search"></i>
                                  </div>
                                </div>
                            </a>
                          </div>
                          <h3>Bakpia Kurnia Sari</h3>
                        </div>

                        <div class="iso-box wisatakuliner lunch col-md-4 col-sm-6">
                          <div class="gallery-thumb">
                            <a href="{{ asset('asset/images/kuliner-06.jpg') }}" data-lightbox-gallery="food-gallery">
                              <img src="{{ asset('asset/images/kuliner-06.jpg') }}" class="fluid-img" alt="Gallery">
                                <div class="gallery-overlay">
                                  <div class="gallery-item">
                                    <i class="fa fa-search"></i>
                                  </div>
                                </div>
                            </a>
                          </div>
                          <h3>Bakpia Pathok 25</h3>
                        </div>

                        <div class="iso-box wisatakuliner lunch col-md-4 col-sm-6">
                          <div class="gallery-thumb">
                            <a href="{{ asset('asset/images/kuliner-07.jpg') }}" data-lightbox-gallery="food-gallery">
                              <img src="{{ asset('asset/images/kuliner-07.jpg') }}" class="fluid-img" alt="Gallery">
                                <div class="gallery-overlay">
                                  <div class="gallery-item">
                                    <i class="fa fa-search"></i>
                                  </div>
                                </div>
                            </a>
                          </div>
                          <h3>Bakpia Kukus Tugu Jogja</h3>
                        </div>

                       </div>
                    </div>

          </div>

      </div>

    </div>
  </div>
</section>

<!------------ Menu section ------------>
<section id="location" class="parallax">
  <div class="container">
    <div class="row">

      <div class="col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10">
         <div class="wow fadeInUp section-title" data-wow-delay="1s">
            <h2>Top Locations <small>Lokasi wisata terpopuler di Jogja.</small></h2>
        </div>
      </div>

      <div class="col-md-6 col-sm-12">
        <div class="media wow fadeInUp" data-wow-delay="0.5s">
          <div class="media-object pull-left">
            <img src="{{ asset('asset/images/location-01.jpg') }}" class="img-responsive" alt="Food Menu">
          </div>
          <div class="media-body">
            <h3 class="media-heading">Candi Prambanan</h3>
            <p>Candi Prambanan atau Candi Roro Jonggrang adalah kompleks candi Hindu terbesar di Indonesia yang dibangun pada abad ke-9 masehi. Candi ini dipersembahkan untuk Trimurti, tiga dewa utama Hindu yaitu Brahma sebagai dewa pencipta, Wishnu sebagai dewa pemelihara, dan Siwa sebagai dewa pemusnah.</p>
              <a href="#" class="btn btn-capsul btn-transparent-prime">Explore Now</a>
          </div>
        </div>

        <div class="media wow fadeInUp" data-wow-delay="0.9s">
          <div class="media-object pull-left">
            <img src="{{ asset('asset/images/location-02.jpg') }}" class="img-responsive" alt="Food Menu">
          </div>
          <div class="media-body">
            <h3 class="media-heading">Gumuk Pasir Parangkusumo</h3>
            <p>Gumuk Pasir Yogyakarta merupakan objek wisata di Daerah Istimewa Yogyakarta. Gumuk Pasir Yogyakarta terbentuk dari material Gunung Merapi yang kemudian mengalami Trasnportasi melalui Sungai Opak dan Sungai Progo yang kemudian terbawa ombak dan mengendap di pantai.</p>
             <a href="#" class="btn btn-capsul btn-transparent-prime">Explore Now</a>
          </div>
        </div>

        <div class="media wow fadeInUp" data-wow-delay="0.9s">
          <div class="media-object pull-left">
            <img src="{{ asset('asset/images/location-03.jpg') }}" class="img-responsive" alt="Food Menu">
          </div>
          <div class="media-body">
            <h3 class="media-heading">Keraton Yogyakarta</h3>
            <p>Karaton Ngayogyakarta Hadiningrat) merupakan istana resmi Kesultanan Ngayogyakarta Hadiningrat yang kini berlokasi di Kota Yogyakarta, Daerah Istimewa Yogyakarta, Indonesia. Walaupun kesultanan tersebut secara resmi telah menjadi bagian Republik Indonesia pada tahun 1950.</p>
             <a href="#" class="btn btn-capsul btn-transparent-prime">Explore Now</a>
          </div>
        </div>

      </div>

      <div class="col-md-6 col-sm-12">
        <div class="media wow fadeInUp" data-wow-delay="0.5s">
          <div class="media-object pull-left">
            <img src="{{ asset('asset/images/location-04.jpg') }}" class="img-responsive" alt="Food Menu">
           </div>
          <div class="media-body">
            <h3 class="media-heading">Taman Sari Jogja</h3>
            <p>Taman Sari adalah situs bekas taman atau kebun istana Keraton Ngayogyakarta Hadiningrat, yang dapat dibandingkan dengan Kebun Raya Bogor sebagai kebun Istana Bogor. Kebun ini dibangun pada zaman Sultan Hamengku Buwono I (HB I) pada tahun 1758-1765/9 "The Fragrant Garden".</p>
              <a href="#" class="btn btn-capsul btn-transparent-prime">Explore Now</a>
          </div>
        </div>

        <div class="media wow fadeInUp" data-wow-delay="0.9s">
          <div class="media-object pull-left">
            <img src="{{ asset('asset/images/location-05.jpg') }}" class="img-responsive" alt="Food Menu">
          </div>
          <div class="media-body">
            <h3 class="media-heading">Pantai Parangtritis</h3>
            <p>Parangtritis merupakan objek wisata yang cukup terkenal di Yogyakarta selain objek pantai lainnya seperti Samas, Baron, Kukup, Krakal dan Glagah. Parangtritis mempunyai keunikan pemandangan yang tidak terdapat pada objek wisata lainnya yaitu selain ombak yang besar juga adanya gunung-gunung pasir di sekitar pantai</p>
              <a href="#" class="btn btn-capsul btn-transparent-prime">Explore Now</a>
          </div>
        </div>

        <div class="media wow fadeInUp" data-wow-delay="0.9s">
          <div class="media-object pull-left">
            <img src="{{ asset('asset/images/location-06.jpg') }}" class="img-responsive" alt="Food Menu">
          </div>
          <div class="media-body">
            <h3 class="media-heading">Benteng Vredeburg</h3>
            <p>Museum Benteng Vredeburg adalah sebuah benteng yang terletak di depan Gedung Agung dan Kraton Kesultanan Yogyakarta. Sekarang, benteng ini menjadi sebuah museum. Di sejumlah bangunan di dalam benteng ini terdapat diorama mengenai sejarah Indonesia.</p>
              <a href="#" class="btn btn-capsul btn-transparent-prime">Explore Now</a>
          </div>
        </div>

      </div>
    </div>
  </div>
  </div>
</section>


<!------------ Video section ------------>
<section id="video-sec" class="parallax">
  <div class="overlay"></div>
    <div class="container">
      <div class="row">

          <div class="col-md-offset-2 col-md-8 col-sm-12">
              <h2 class="wow fadeInUp" data-wow-delay="0.5s">Watch the video<small>All journeys have secret destinations of which the traveler is unaware.</small></h2>
              <small><em>Video by: Yogyakarta Vacation Travel Guide | Expedia</em></small>
              <video width="400" height="300" controls autoplay>
                <source src="{{ asset('asset/video/Yogyakarta.mp4') }}" type="video/mp4">
              </div>

      </div>
    </div>
</section>




<!------------ Contact section ------------>
<section id="contact-sec" class=" content">
  <div class="overlay"></div>
	<div class="container form-block">
                <div class="row">
                <div class="col-lg-12 text-center"><h2>Get in Touch<small>Stay in touch for more information</small></h2></div>
				<div class="col-lg-4 col-md-4 col-sm-12">
                <span class="input input-hoshi">
					<input class="input_field input_field-hoshi" type="text" id="input-4" />
					<label class="input_label input_label-hoshi input_label-hoshi-color-1" for="input-4">
						<span class="input_label-content input_label-content-hoshi">Name</span>
					</label>
				</span>
                </div>
				<div class="col-lg-4 col-md-4 col-sm-12">
                <span class="input input-hoshi">
					<input class="input_field input_field-hoshi" type="text" id="input-4" />
					<label class="input_label input_label-hoshi input_label-hoshi-color-1" for="input-4">
						<span class="input_label-content input_label-content-hoshi">Phone</span>
					</label>
				</span>
                </div>
				<div class="col-lg-4 col-md-4 col-sm-12">
                <span class="input input-hoshi">
					<input class="input_field input_field-hoshi" type="text" id="input-4" />
					<label class="input_label input_label-hoshi input_label-hoshi-color-1" for="input-4">
						<span class="input_label-content input_label-content-hoshi">Email</span>
					</label>
				</span>
                </div>
                
                <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                
                <a href="#" class="btn btn-capsul btn-transparent-white">Submit</a>
                </div>
                
                </div>
                </div>
</section>

<!------------ Footer section ------------>
<footer>
    
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-3">&copy;<script type="text/javascript">document.write(new Date().getFullYear());</script> Kristi Rahayu</div>
                <div class="col-sm-12 col-md-2 col-md-offset-7">Created with <i class="fa fa-heart"></i></div>
            </div>
        
        </div>
    
    </footer>



<script src="{{ asset('asset/js/jquery.js') }}"></script>
<script src="{{ asset('asset/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('asset/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('asset/js/jquery.backstretch.min.js') }}"></script>
<script src="{{ asset('asset/js/isotope.js') }}"></script>
<script src="{{ asset('asset/js/imagesloaded.min.js') }}"></script>
<script src="{{ asset('asset/js/nivo-lightbox.min.js') }}"></script>
<script src="{{ asset('asset/js/jquery.parallax.js') }}"></script>
<script src="{{ asset('asset/js/smoothscroll.js') }}"></script>
<script src="{{ asset('asset/js/wow.min.js') }}"></script>
<script src="{{ asset('asset/js/core.js') }}"></script>

{{-- <script src="{{ asset('asset/animasi/js/jquery-2.1.0.min.js') }}" type="text/javascript"></script> --}}
		<script src="{{ asset('asset/animasi/js/d3.min.js') }}" type="text/javascript"></script>
		<script src="{{ asset('asset/animasi/js/jquery.superslides.js') }}" type="text/javascript"></script>
		<script src="{{ asset('asset/animasi/js/jquery.flexslider.js') }}" type="text/javascript"></script>
		<script src="{{ asset('asset/animasi/js/rgbcolor.js') }}"></script> 
		<script src="{{ asset('asset/animasi/js/canvg.js') }}"></script>
		<script src="{{ asset('asset/animasi/js/demo.js') }}" type="text/javascript"></script>
		<script src="{{ asset('asset/animasi/js/raphael-min.js') }}" type="text/javascript"></script>
		<script src="{{ asset('asset/animasi/js/livicons.custom.min.js') }}" type="text/javascript"></script>
		<script src="{{ asset('asset/animasi/js/custom.js') }}" type="text/javascript"></script>
		<script>
			!function ($) {
			  $(function(){
				window.prettyPrint && prettyPrint()   
			  })
			}(window.jQuery)
		</script>


</body>
</html>