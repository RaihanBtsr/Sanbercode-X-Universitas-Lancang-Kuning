@extends('layouts.master')
@section('title')
    Detail
@endsection
@section('content')
<h1>{{$crud->nama}}</h1>
<p>{{$crud->bio}}</p>
<a href="/crud" class="btn btn-secondary btn-sm">Kembali</a>
@endsection