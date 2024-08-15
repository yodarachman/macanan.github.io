@extends('layouts.main')

@section('title', 'Desa Macanan | Berita')

@section('container')



  <!-- ======= Hero Section ======= -->
  <section>
  </section><!-- End Hero -->
  <section id="featured-services" class="featured-services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Berita Terbaru Desa Macanan</h2>
        </div>

        <div class="row">
        @foreach ($news as $news)
          <div class="col-md-3 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
            <div class="member-img">
              <img src="/image/{{$news->image}}" alt="" class="img-fluid" >
              </div>
              <br>
              <div class="text-center">
              <h4>{{$news->title}}</h4>
              <small>{{ $news->created_at->format('d M Y') }}</small>
            </div>
              <p class="description">{{ Str::limit($news->description, 100) }}</p>
              <div class="text-center">
                <a class="cta-btn scrollto" href="/deskripsi/{{$news->id}}">Lihat detail</a> <!-- Link ke halaman detail -->
            </div>
            </div>
          </div>
          @endforeach
        </div>

      </div>
    </section><!-- End Featured Services Section -->

  <main>
  </main><!-- End #main -->

  @endsection