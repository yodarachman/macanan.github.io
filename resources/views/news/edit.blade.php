@extends('layouts.app')

@section('title', 'Edit Data Berita Desa Macanan')

@section('content')

<div class="container">
    <a href="/admin/news" class="btn btn-primary mb-3">Kembali</a>
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('news.update', $news->id) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="">Judul</label>
                    <input type="text" class="form-control" name="title" placeholder="Judul" value="{{ old('title', $news->title) }}">
                </div>
                @error('title')
                <small style="color:red">{{$message}}</small>
                @enderror

                <div class="form-group">
                    <label for="">Deskripsi</label>
                    <!-- Trix Editor -->
                    <input id="description" type="hidden" name="description" value="{{ old('description', $news->description) }}">
                    <trix-editor input="description" placeholder="Tulis deskripsi berita di sini..."></trix-editor>
                </div>
                @error('description')
                <small style="color:red">{{$message}}</small>
                @enderror

                <img src="{{ asset('image/' . $news->image) }}" alt="" class="img-fluid">
                <div class="form-group">
                    <label for="">Gambar</label>
                    <input type="file" class="form-control" name="image">
                </div>
                @error('image')
                <small style="color:red">{{$message}}</small>
                @enderror

                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection

@section('scripts')
    <!-- Trix Editor JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/trix/2.0.0/trix.min.js"></script>
@endsection
