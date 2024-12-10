@extends('style')
@section('title', 'Data pasien')
@section('content')
<div class="b-example-divider b-example-vr"></div>
<div class="container">
  @if(session()->has('success'))
  <div class="alert alert-success">
    <p class="text-center">{{session('success')}}</p>
  </div>
  @endif
  <form action="/search" method="get" class="m-3">
    <input type="text" class="form-input" name="search">
    <button class="btn btn-primary">Cari</button>
  </form>
  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col" class="text-center px-3">No</th>
        <th scope="col" class="text-center px-3">Kode</th>
        <th scope="col" class="text-center px-3">Nama</th>
        <th scope="col" class="text-center px-3">Tempat lahir</th>
        <th scope="col" class="text-center px-3">Tanggal lahir</th>
        <th scope="col" class="text-center px-3">Aksi</th>
      </tr>
    </thead>
    <tbody>
      @foreach($patiens as $patien)
      <tr>
        <td scope="col" class="text-center px-3">{{$loop->iteration}}</td>
        <td scope="col" class="text-center px-3">{{$patien->kode_pendaftaran}}</td>
        <td scope="col" class="text-center px-3">{{$patien->nama}}</td>
        <td scope="col" class="text-center px-3">{{$patien->tempat_lahir}}</td>
        <td scope="col" class="text-center px-3">{{$patien->tanggal_lahir}}</td>
        <td scope="col" class="text-center px-3">
          <a href="admin/pasien/detail/{{$patien->id}}">
            <button class="btn btn-primary">Detail</button>
          </a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
    <div class="container my-5">
        <h2 class="text-center mb-4">Lebih dari 10% pasien kami layani</h2>
        <div class="card">
            <div class="card-body">
                <canvas id="salesChart"></canvas>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->

  @endsection
