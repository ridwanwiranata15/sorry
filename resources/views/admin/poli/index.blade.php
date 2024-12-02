@extends('style')
@section('title', 'Data poli')
@section('content')
<div class="container p-3">
    <a href="{{route('poli.create')}}">
        <button class="btn btn-success">Tambah</button>
    </a>
  <table class="table table-striped table-bordered m-5">
  <thead>
    <tr>
      <th scope="col" class="text-center px-3">No</th>
      <th scope="col" class="text-center px-3">Nama</th>
      <th scope="col" class="text-center px-3">Lokasi</th>
      <th scope="col" class="text-center px-3">Jadwal</th>
      <th scope="col" class="text-center px-3">Hari</th>
      <th scope="col" class="text-center px-3">Kapasitas harian</th>
      <th scope="col" class="text-center px-3">Kepala poli</th>
      <th scope="col" class="text-center px-3">Jumlah dokter</th>
      <th scope="col" class="text-center px-3">Aksi</th>
    </tr>
  </thead>
  <tbody>
    @foreach($polies as $poly)
    <tr>
      <th scope="row" class="text-center">{{$loop->iteration}}</th>
      <td class="text-nowrap">{{$poly->nama}}</td>
      <td>{{$poly->lokasi}}</td>
      <td>{{$poly->jadwal}}</td>
      <td>{{$poly->hari}}</td>
      <td>{{$poly->kapasitas}}</td>
      <td>{{$poly->kepala}}</td>
      <td>{{$poly->jumlah}}</td>
      <td>
        <form action="{{route('poli.edit', $poly->id)}}" method="get">
            <button class="btn btn-sm btn-primary" type="submit">Edit</button>
        </form>
        <form action="{{route('poli.delete', $poly->id)}}" method="post">
          @csrf
          @method('delete')
            <button class="btn btn-sm btn-danger" type="submit">Delete</button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

  </div>
@endsection