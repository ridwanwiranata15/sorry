@extends('style')
@section('title', 'Data Dokter')
@section('content')
<div class="container p-3">
  <a href="{{route('dokter.create')}}">
    <button class="btn btn-success">Tambah</button>
  </a>
  <table class="table table-striped table-bordered m-5">
    <thead>
      <tr>
        <th scope="col" class="text-center px-3">No</th>
        <th scope="col" class="text-center px-3">Nama</th>
        <th scope="col" class="text-center px-3">Spesialis</th>
        <th scope="col" class="text-center px-3">Jadwal Praktek</th>
        <th scope="col" class="text-center px-3">Kontak Darurat</th>
        <th scope="col" class="text-center px-3">Poli</th>
        <th scope="col" class="text-center px-3">Email</th>
        <th scope="col" class="text-center px-3">Password</th>
        <th scope="col" class="text-center px-3">Aksi</th>
      </tr>
    </thead>
    <tbody>
      @foreach($doctors as $doctor)
      <tr>
        <th scope="row" class="text-center">{{$loop->iteration}}</th>
        <td class="text-nowrap">{{$doctor->nama}}</td>
        <td>{{$doctor->spesialis}}</td>
        <td>{{$doctor->jadwal}}</td>
        <td>{{$doctor->kontak}}</td>
        <td>{{$doctor->poly->nama}}</td>
        <td>{{$doctor->user->email}}</td>
        <td>{{$doctor->user->password}}</td>
        <td>
          <a href="{{route('dokter.edit', $doctor->id)}}">
            <button class="btn btn-sm btn-primary">Edit</button>
          </a>
          <form action="" method="post">
            <button class="btn btn-sm btn-danger">delete</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection
