@extends('layouts.app')

@section('content')

<div class="container mt-4">

    @if(session('success'))
        <script>
            alert("{{ session('success') }}");
        </script>
    @endif

    <h1>Senarai Pelajar</h1>

    <table class="table table-bordered table-striped">

        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Kohort</th>
                <th>Kelas</th>
                <th>No IC</th>
                <th>Umur</th>
                <th>Tindakan</th>
            </tr>
        </thead>

        <tbody>

            @foreach ($student as $item)

            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->name_student }}</td>
                <td>{{ $item->cohort }}</td>
                <td>{{ $item->class }}</td>
                <td>{{ $item->no_ic }}</td>
                <td>{{ $item->age }}</td>

                <td>
                    <a href="{{ route('studentviewupdate', $item->id) }}"
                       class="btn btn-warning btn-sm">
                        UPDATE
                    </a>

                    <form action="{{ route('studentdelete', $item->id) }}"
                          method="POST"
                          style="display:inline;">

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger btn-sm">
                            DELETE
                        </button>

                    </form>
                </td>
            </tr>

            @endforeach

        </tbody>

    </table>

    <div class="mt-3">
        {{ $student->links() }}
    </div>

</div>

@endsection