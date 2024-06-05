<!-- resources/views/user/form.blade.php -->

@extends('layout.app')

@section('content')
    <div class="container">

        <h2>Page Index</h2>
     

      @if(is_array($userArray))
        @foreach($userArray as $user)
            Nama: {{  $user["nama"] }} , Alamat: {{ $user["alamat"] }}
        @endforeach
    @else
        Data tidak valid atau tidak ada.
    @endif

    </div>
@endsection
