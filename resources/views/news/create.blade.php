@extends('layouts.app')

@section('title', 'Tambah Data Berita Desa Macanan')

@section('content')

<div class="container">
    <a href="/admin/news" class="btn btn-primary mb-3">Kembali</a>
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('news.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="title">Judul</label>
                    <input type="text" class="form-control" name="title" placeholder="Judul">
                </div>
                @error('title')
                <small style="color:red">{{$message}}</small>
                @enderror

                <div class="form-group">
                    <label for="description">Deskripsi</label>
                    <textarea name="description" id="description" cols="30" rows="10" class="form-control" placeholder="Deskripsi"></textarea>
                </div>
                @error('description')
                <small style="color:red">{{$message}}</small>
                @enderror

                <div class="form-group">
                    <label for="image">Gambar</label>
                    <input type="file" class="form-control" name="image">
                </div>
                @error('image')
                <small style="color:red">{{$message}}</small>
                @enderror

                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection

@section('scripts')
<script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('description');
</script>
@endsection
