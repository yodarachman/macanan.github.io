@extends('layouts.app')

@section('title', 'Edit User Macanan')

@section('content')

<div class="container">
    <a href="/admin/user" class="btn btn-primary mb-3">Kembali</a>
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('user.update', $user->id) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Nama" value="{{ old('name', $user->name) }}">
                </div>
                @error('name')
                <small style="color:red">{{ $message }}</small>
                @enderror

                <div class="form-group">
                    <label for="level">Level</label>
                    <input type="text" class="form-control" id="level" name="level" placeholder="Level" value="{{ old('level', $user->level) }}">
                </div>
                @error('level')
                <small style="color:red">{{ $message }}</small>
                @enderror

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" id="email" name="email" placeholder="Email" value="{{ old('email', $user->email) }}">
                </div>
                @error('email')
                <small style="color:red">{{ $message }}</small>
                @enderror

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                    <small class="form-text text-muted">Kosongkan jika tidak ingin mengubah password.</small>
                </div>
                @error('password')
                <small style="color:red">{{ $message }}</small>
                @enderror

                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
