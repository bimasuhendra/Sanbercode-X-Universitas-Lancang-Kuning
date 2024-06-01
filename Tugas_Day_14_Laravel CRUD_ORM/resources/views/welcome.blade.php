@extends('layouts.master')
@section('title')
    Welcome!
@endsection
@section('content')
    <h1>SELAMAT DATANG! <?php echo $fname; ?> <?php echo $lname; ?></h1>
    <h3>Terima kasih telah bergabung di sanberbook. Social Media kita bersama!</h3>
@endsection