<!-- resources/views/user/form.blade.php -->

@extends('layout.app')

@section('content')
    <div class="container">
        <h2>Formulir User</h2>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form method="post" action="{{ route('user.process') }}">
            @csrf

            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" name="nama" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="alamat">Alamat:</label>
                <input type="text" name="alamat" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection
