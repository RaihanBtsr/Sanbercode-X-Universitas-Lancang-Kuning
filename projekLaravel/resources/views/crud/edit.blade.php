@extends('layouts.master')
@section('title')
    Edit
@endsection
@section('content')
<form method="POST" action="/crud/{{$crud->id}}">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    @csrf
    @method("put")
    <div class="form-group">
      <label>nama lengkap</label>
      <input type="text" value="{{$crud->nama}}" class="form-control" name="nama">
    </div>
    <div class="form-group">
      <label>umur</label>
      <input type="number" value="{{$crud->umur}}" class="form-control" name="umur">
    </div>
    <div class="form-group">
      <label>bio</label>
      <textarea name="bio" class="form-control" cols="30" rows="10">{{$crud->bio}}</textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    <a href="/crud" class="btn btn-danger">Batal</a>
  </form>
@endsection