@extends('layouts.app')

@section('content')

<div class="container mt-4">

    <h2 class="mb-4">Update Data Pelajar</h2>

    <form action="{{ url('/studentupdateid/' . $student->id) }}" method="POST">

        @csrf

        <!-- Nama -->
        <div class="mb-3">
            <label for="name" class="form-label">Nama:</label>

            <input
                type="text"
                id="name_student"
                name="name_student"
                value="{{ $student->name_student }}"
                class="form-control"
                placeholder="Masukkan nama"
                required
            >
        </div>

        <!-- Kohort -->
        <div class="mb-3">
            <label for="cohort" class="form-label">Kohort:</label>

            <input
                type="number"
                id="cohort"
                name="cohort"
                value="{{ $student->cohort }}"
                class="form-control"
                min="1"
                max="4000"
                required
            >
        </div>

        <!-- Kelas -->
        <div class="mb-3">
            <label for="class" class="form-label">Kelas:</label>

            <input
                type="text"
                id="class"
                name="class"
                value="{{ $student->class }}"
                class="form-control"
                placeholder="Masukkan kelas"
                required
            >
        </div>

        <!-- No IC -->
        <div class="mb-3">
            <label for="no_ic" class="form-label">No IC:</label>

            <input
                type="text"
                id="no_ic"
                name="no_ic"
                value="{{ $student->no_ic }}"
                class="form-control"
                placeholder="Masukkan No IC"
                required
            >
        </div>

        <!-- Umur -->
        <div class="mb-3">
            <label for="age" class="form-label">Umur:</label>

            <input
                type="number"
                id="age"
                name="age"
                value="{{ $student->age }}"
                class="form-control"
                min="1"
                max="100"
                required
            >
        </div>

        <!-- Button -->
        <button type="submit" class="btn btn-primary">
            Update
        </button>

        <a href="{{ route('studentview') }}" class="btn btn-secondary">
            Batal
        </a>

    </form>

</div>

@endsection