@extends('layouts.main')

@section('title', 'Desa Macanan | Berita')

@section('container')

  <style>
    .pagination {
      display: flex;
      justify-content: center;
      margin-top: 20px;
    }
  </style>

  <!-- ======= Hero Section ======= -->
  <section>
    <!-- Konten Hero Section bisa ditambahkan di sini jika diperlukan -->
  </section><!-- End Hero -->

  <!-- ======= Featured Services Section ======= -->
  <section id="featured-services" class="featured-services">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Berita Terbaru Desa Macanan</h2>
      </div>

      <div class="row">
        @foreach ($news as $item)
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
                <a class="cta-btn scrollto" href="/aset/{{ $item->id }}">Lihat detail</a> <!-- Link ke halaman detail -->
              </div>
            </div>
          </div>
        @endforeach
      </div>

      <!-- Paginasi -->
      <div class="custom-pagination">
        {{ $news->links('pagination::simple-bootstrap-4') }}
      </div>

    </div>
  </section><!-- End Featured Services Section -->

  <main>
    <!-- Konten utama tambahan bisa ditambahkan di sini -->
  </main><!-- End #main -->

@endsection
