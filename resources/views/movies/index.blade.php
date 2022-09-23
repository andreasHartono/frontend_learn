@extends('layout.admin')
@section('content')
    <h1>DAFTAR MOVIE</h1>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Judul</th>
                <th scope="col">Date</th>
                <th scope="col">Score</th>
                <th scope="col">Serial</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $d)
                <tr>
                    <th scope="row">{{ $d->id }}</th>
                    <td>{{ $d->judul }}</td>
                    <td>{{ $d->date }}</td>
                    <td>{{ $d->score }}</td>
                    <td>{{ $d->serial }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
