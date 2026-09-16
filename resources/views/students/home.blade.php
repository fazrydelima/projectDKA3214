@extends('layouts.app')

@section('title', 'Home')

@section('content')

<div class="container">

    <div class="text-center py-5">

        <h1 class="display-4">
            Selamat Datang Ke Sistem Pelajar
        </h1>
        <a href="{{ route('login') }}" class="btn btn-primary">
            Login
        </a>

    </div>

</div>

@endsection