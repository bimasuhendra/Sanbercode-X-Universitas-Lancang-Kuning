@extends('layouts.master')
@section('title')
    Halaman Bio Cast
@endsection
@section('content')
    <h1>{{$cast->nama}}</h1>
    <p>{{$cast->umur}}</p>
    <p>{{$cast->bio}}</p>

    <a href="/cast" class="btn btn-sm btn-secondary">Kembali</a>

@endsection