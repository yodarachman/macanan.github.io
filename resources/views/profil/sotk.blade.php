@extends('layouts.main')

@section('title', 'Desa Macanan | Visi Misi')

@section('container')

  <!-- ======= Hero Section ======= -->
  <section>
  </section><!-- End Hero -->

  <main>
  </main><!-- End #main -->
  <section id="doctors" class="doctors section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Organisasi Desa Macanan</h2>
        </div>

        <div class="row">
        @foreach ($perangkat as $perangkat)
          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="100">
              <div class="member-img">
                <img src="/image/{{$perangkat->image}}" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h4>{{$perangkat->title}}</h4>
                <span>{{$perangkat->description}}</span>
              </div>
            </div>
          </div>
        @endforeach
          

        </div>

      </div>
    </section><!-- End Doctors Section -->

@endsection