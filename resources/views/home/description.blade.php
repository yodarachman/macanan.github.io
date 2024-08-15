@extends('layouts.main')

@section('title', 'Deskripsi Berita - ' . $news->title)

@section('container')

  <section id="doctors" class="doctors section-bg">
    <div class="container" data-aos="fade-up">
      <div class="section-title">
        <h2>Deskripsi Berita</h2>
        <br/>
        @if($news->image)
        <div class="member-img">
          <img src="/image/{{$news->image}}" alt="Gambar Berita" class="img-fluid">
        </div>
        <br>
        @endif
        <p class="description">{!! $news->description !!}</p>
      </div>
    </div>
  </section>

@endsection
