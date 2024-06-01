@extends('layouts.master')

@section('title')
    Halaman Tampil Cast
@endsection

@section('content')

<a href="/cast/create" class="btn btn-sm btn-primary">Tambah</a>
<table class="table">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nama</th>
        <th scope="col">Umur</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @forelse ($cast as $key => $item)
        <tr>
            <th scope="row">{{$key + 1}}</th>
            <td>{{$item->nama}}</td>
            <td>{{$item->umur}}</td>
            <td>
                <form action="/cast/{{$item->id}}" method="POST" onsubmit="return confirmDelete(event)">
                  <a href="/cast/{{$item->id}}" class="btn btn-sm btn-info">Detail</a>
                  <a href="/cast/{{$item->id}}/edit" class="btn btn-sm btn-warning">Edit</a>
                  @csrf
                  @method("DELETE")
                  <input type="submit" class="btn btn-sm btn-danger" value="Delete">
                </form>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="4">Cast Belum ada</td>
        </tr>
        @endforelse
    </tbody>
</table>


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

<script>
    function confirmDelete(event) {
        event.preventDefault();
        Swal.fire({
            title: 'Apakah Anda ingin menghapus data ini?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                event.target.submit();
            }
        });
    }
</script>

@endsection
