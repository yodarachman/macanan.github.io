@extends('layouts.app')

@section('title', 'Tambah User Desa Macanan')

@section('content')

<div class="container">
    <a href="{{ route('user.create') }}" class="btn btn-primary mb-3">Tambah Data</a>

    @if ($message = Session::get('message'))
        <div class="alert alert-success">
            <strong>Berhasil</strong>
            <p>{{ $message }}</p>
        </div>
    @endif

    <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Level</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i = 1;
                @endphp
                @foreach ($user as $u)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $u->name }}</td>
                    <td>{{ $u->email }}</td>
                    <td>{{ $u->level }}</td>
                    <td>
                        <a href="{{ route('user.edit', $u->id) }}" class="btn btn-warning">Edit</a>

                        <form action="{{ route('user.destroy', $u->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
