@extends('style')
@section('title', 'Data Apoteker')
@section('content')
<div class="container p-3">
    <a href="{{route('apoteker.create')}}">
        <button class="btn btn-success">Tambah</button>
    </a>
  <table class="table table-striped table-bordered m-5">
  <thead>
    <tr>
      <th scope="col" class="text-center px-3">No</th>
      <th scope="col" class="text-center px-3">Nama</th>
      <th scope="col" class="text-center px-3">Telepon</th>
      <th scope="col" class="text-center px-3">Alamat</th>
      <th scope="col" class="text-center px-3">Nomor STR</th>
      <th scope="col" class="text-center px-3">Shift</th>
      <th scope="col" class="text-center px-3">Status</th>
      <th scope="col" class="text-center px-3">Email</th>
      <th scope="col" class="text-center px-3">Password</th>
      <th scope="col" class="text-center px-3">Aksi</th>
    </tr>
  </thead>
  <tbody>
   @foreach($apoteker as $data)
    <tr>
      <th scope="row" class="text-center">{{$loop->iteration}}</th>
      <td class="text-nowrap">{{$data->nama}}</td>
      <td>{{$data->telepon}}</td>
      <td>{{$data->Alamat}}</td>
      <td>{{$data->str}}</td>
      <td>{{$data->shift}}</td>
      <td>{{$data->status}}</td>
      <td>{{$data->user->email}}</td>
      <td>{{$data->user->password}}</td>
      <td>
            <a href="/admin/apoteker/edit/{{$data->id}}">
                <button class="btn btn-warning">Edit</button>
            </a>
            <form action="/admin/apoteker/delete/{{$data->id}}" method="post">
                @csrf
                @method("delete")
                <button class="btn btn-danger">Delete</button>
            </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection