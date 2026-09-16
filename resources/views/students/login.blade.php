@extends('layouts.app')

@section('title', 'Login')

@section('content')

<div class="container">

    <div class="row justify-content-center mt-5">

        <div class="col-md-5">

            <div class="card shadow">

                <div class="card-body">

                    <h2 class="text-center mb-4">
                        Login Sistem
                    </h2>

                    <p class="text-center text-muted">
                        Sila masukkan maklumat anda
                    </p>

                    @if(session('error'))

                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>

                    @endif

                    <form action="{{ route('studentlogin') }}" method="POST">

                        @csrf

                        <div class="mb-3">

                            <label class="form-label">
                                Email
                            </label>

                            <input
                                type="email"
                                name="email"
                                class="form-control"
                                placeholder="Masukkan email"
                                required
                            >

                        </div>

                        <div class="mb-3">

                            <label class="form-label">
                                Password
                            </label>

                            <input
                                type="password"
                                name="password"
                                class="form-control"
                                placeholder="Masukkan password"
                                required
                            >

                        </div>

                        <button
                            type="submit"
                            class="btn btn-primary w-100">
                            Login
                        </button>

                    </form>

                    <div class="text-center mt-3">

                        <a href="/">
                            ← Kembali ke Home
                        </a>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection