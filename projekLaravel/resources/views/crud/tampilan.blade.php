@extends('layouts.master')
@section('title')
    Tampilan
@endsection
@section('content')
<a href="/crud/create" class="btn btn-sm btn-primary">Tambah</a>
<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">no</th>
        <th scope="col">nama lengkap</th>
        <th scope="col">umur</th>
        <th scope="col">bio</th>
      </tr>
    </thead>
    <tbody>
      @forelse ($crud as $key => $item)
      <tr>
        <th scope="row">{{$key + 1}}</th>
        <td>{{$item->nama}}</td>
        <td>{{$item->umur}}</td>
        <td>
            <form action="/crud/{{$item->id}}" method="POST">
                <a href="/crud/{{$item->id}}" class="btn btn-info btn-sm">Detail</a>
                <a href="/crud/{{$item->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                @csrf
                @method("Delete")
                <input type="submit" value="Delete" class="btn btn-danger btn-sm">
            </form>
        </td>
      </tr>
      @empty
          <tr>
            <td>Tabel Tidak Tersedia!</td>
          </tr>
      @endforelse
    </tbody>
  </table>
@endsection