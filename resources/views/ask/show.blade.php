@extends('adminlte.master')

@section('content')
    <div class="mt-3 ml-3">
        <h3>{{$ask->judul}}</h3>
        <p>{{$ask->isi}}</p>
        <p>{{$ask->tanggal_dibuat}}</p>
        <p>{{$ask->tanggal_diperbaharui}}</p>
    </div>
@endsection