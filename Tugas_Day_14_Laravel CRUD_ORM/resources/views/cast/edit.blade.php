@extends('layouts.master')
@section('title')
    Halaman Edit Cast
@endsection
@section('content')
<form method="POST" action="/cast/{{$cast->id}}">
    {{-- validation --}}
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    {{-- Form Input --}}
    @csrf
    @method("put")
    <div class="form-groub">
      <label>Nama</label>
      <input type="text" value="{{$cast->nama}}" class="form-control" name="nama">
    </div>
    <div class="form-groub">
      <label>Umur</label>
      <input type="number" value="{{$cast->umur}}" class="form-control" name="umur">
    </div>
    <div class="form-groub">
        <label>Bio</label><br>
        <textarea name="bio" class="form-control" cols="30" rows="10">{{$cast->bio}}</textarea>
    </div><br>
    <button type="submit" class="btn btn-primary">Simpan</button>
  </form>

  
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@if(session('status'))
    <script>
        Swal.fire(
            'Good job!',
            '{{ session('status') }}',
            'success'
        );
    </script>
@endif

@endsection