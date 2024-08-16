@extends('layouts.app')

@section('title','Data Berita Desa Macanan')

@section('content')

<div class="container">
    
    <a href="/admin/news/create" class="btn btn-primary mb-3">Tambah Data</a>

    @if ($message = Session::get('message'))
        <div class="alert alert-success">
            <strong>Berhasil</strong>
            <p>{{$message}}</p>
        </div>
    @endif
    <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Deskripsi</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($news as $index => $newsItem)
                <tr>
                    <td>{{ $news->firstItem() + $index }}</td>
                    <td>{{$newsItem->title}}</td>
                    <td>{!! $newsItem->description !!}</td>
                    <td>
                        <img src="/image/{{$newsItem->image}}" alt="" class="img-fluid" width="90">
                    </td>
                    <td>
                        <a href="{{ route('news.edit', $newsItem->id) }}" class="btn btn-warning">Edit</a>
                        <br>

                        <form action="{{route('news.destroy', $newsItem->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                           <br><button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <style>
        .pagination {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }
    </style>

    <div class="custom-pagination">
        {{ $news->links('pagination::simple-bootstrap-4') }}
    </div>
</div>

@endsection
