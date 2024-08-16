@extends('layouts.main')

@section('title', 'Desa Macanan | Home')

@section('container')

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">
        @foreach ($sliders as $index => $slider)
        <!-- Slide {{ $index + 1 }} -->
        <div class="carousel-item {{ $index === 0 ? 'active' : '' }}" style="background-image: url('/image/{{$slider->image}}'); background-size: cover; background-position: center;">
          <div class="container">
            <h2>{{ $slider->title }}</h2>
            <p>{{ $slider->description }}</p>
          </div>
        </div>
        @endforeach
        

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section><!-- End Hero -->

  <main id="main">

<!-- ======= Featured Services Section ======= -->
<section id="featured-services" class="featured-services">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>Berita Desa Macanan</h2>
    </div>

    <div class="row">
      @foreach ($news->sortByDesc('created_at')->take(6) as $item)
        <div class="col-md-3 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
          <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
            <div class="member-img">
              <img src="/image/{{ $item->image }}" alt="" class="img-fluid">
            </div>
            <br>
            <div align="left">
              <h4>{{ $item->title }}</h4>
              <small>{{ $item->created_at->format('d M Y') }}</small>
            </div>
            <p class="description">
              {!! Str::limit(strip_tags($item->description), 150, '...') !!}
            </p>
            <div class="text-center">
              <a class="cta-btn scrollto" href="/aset/{{ $item->id }}">Lihat detail</a>
            </div>
          </div>
        </div>
      @endforeach
    </div>

  </div>
</section><!-- End Featured Services Section -->



    


    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="text-center">
          <h3>Sejarah Desa Macanan</h3>
          <p> Desa Macanan adalah sebuah desa yang terletak di Kecamatan Kebakkramat, Kabupaten Karanganyar, Jawa Tengah
            Asal-mualsan nama Desa Macanan , Dahulu ada cerita seekor Gajah dan Macan, macan yang satu ini adalah macan yang datang dari Gunung Lawu, Gunung Lawu adalah gunung yang terletak disebelah timur Kabupaten Karanganyar dan masih menjadi kawasan Kabupaten Karanganyar
          </p>
          <a class="cta-btn scrollto" href="/sejarah">Lihat detail</a>
        </div>

      </div>
    </section><!-- End Cta Section -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">
      @foreach ($sambutan as $sambutan)
        <div class="section-title">
          <h2>{{$sambutan->title}}</h2>
        </div>

        <div class="row">
          <div class="col-lg-6" data-aos="fade-right">
            <img src="/image/{{$sambutan->image}}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left">
            <h3></h3>
            <br>
            <p>
              {!! $sambutan->description !!}
            </p>
          </div>
        </div>
    @endforeach
      </div>
    </section><!-- End About Us Section -->

    

    

    <!-- ======= Services Section ======= -->
    <section id="services" class="services services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Informasi Layanan Desa Macanan</h2>
        </div>

        <div class="row">
        @foreach ($service as $service)
          <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="100">
           <img src="/image/{{$service->image}}" alt="" class="img-fluid" width="100">
            <h4>{{$service->title}}</h4>
            <p>{{$service->description}}</p> 
            <a class="cta-btn scrollto" href="/informasi">Lihat detail</a>  
         </div>
         @endforeach 



        </div>

      </div>
    </section><!-- End Featured Services Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services services">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>UMKM Desa Macanan</h2>
        </div>
        
        <div class="row">
        @foreach ($umkm as $umkm)
          <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="100">
          <img src="/image/{{$umkm->image}}" alt="" class="img-fluid" width="100">
            <h4>{{$umkm->title}}</h4>
            <p>{{$umkm->description}}</p>    
          </div>
          @endforeach
        </div>
    
      </div>
    </section><!-- End Services Section -->

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Galeri Desa Macanan</h2>
        </div>
 
        <div class="gallery-slider swiper">
       
          <div class="swiper-wrapper align-items-center">
          @foreach ($galeri as $index => $galeri)
            <div class="swiper-slide{{$index === 0 ? 'active' : ''}}">
              <a class="gallery-lightbox" href="image/{{$galeri->image}}"> <img src="image/{{$galeri->image}}" class="img-fluid" alt=""> </a>
           
            </div>
            @endforeach
            </div>
            <div class="swiper-pagination">
            
            </div>
          
      
        </div>

      </div>
    </section><!-- End Gallery Section -->


  </main><!-- End #main -->

  @endsection