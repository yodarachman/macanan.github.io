@extends('layouts.main')

@section('title', 'Desa Macanan | UMKM Sekitar')

@section('container')

  <!-- ======= Hero Section ======= -->
  <section>
  </section><!-- End Hero -->


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
  <main>
  </main><!-- End #main -->

  @endsection