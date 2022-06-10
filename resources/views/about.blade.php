@extends('layout.main')


@section('container')

<div class="container">
    <div class="content mt-3">
        <h3>{{ $name }}</h3>
        <h5>{{ $email }}</h5>
        <img src="{{ asset('images/'. $foto) }}" alt="{{ $name }}" width="200" class="img-thumbnail rounded-circle">
    </div>
</div>

@endsection