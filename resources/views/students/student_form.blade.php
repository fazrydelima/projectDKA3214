@extends('layouts.app')

@section('content')

<div class="container mt-4">

    <h1>Borang Pelajar</h1>

    <form action="{{ route('studentinsert') }}" method="POST">

        @csrf

        <div class="mb-3">
            <label class="form-label">Nama</label>
            <input type="text" name="name_student" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Kohort</label>
            <input type="number" name="cohort" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Kelas</label>
            <input type="text" name="class" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">No IC</label>
            <input type="text" name="no_ic" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Umur</label>
            <input type="number" name="age" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">
            Submit
        </button>

    </form>

</div>

@endsection