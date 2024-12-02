@extends('style')
@section('title', 'Ubah Poli')
@section('content')
<div class="container p-3">
  <form method="post" action="{{route('poli.patch', $poly->id)}}">
    @csrf
    @method('patch')
  <div class="form-group row">
    <label for="dokter" class="col-4 col-form-label">Nama</label> 
    <div class="col-8">
      <input id="dokter" name="poli" placeholder="Nama lengkap dokter" type="text" class="form-control" value="{{$poly->nama}}">
    </div>
  </div>
  <div class="form-group row">
    <label for="spesialis" class="col-4 col-form-label">Lokasi</label> 
    <div class="col-8">
      <input id="spesialis" name="lokasi" placeholder="spesialis" type="text" class="form-control" value="{{$poly->lokasi}}">
    </div>
  </div>
  <div class="form-group row">
    <label for="jadwal" class="col-4 col-form-label">Jadwal</label> 
    <div class="col-8">
      <input id="jadwal" name="jadwal" placeholder="Jadwal " type="text" class="form-control" value="{{$poly->jadwal}}">
    </div>
  </div>
  <div class="form-group row">
    <label for="kontak" class="col-4 col-form-label">Hari</label> 
    <div class="col-8">
      <input id="kontak" name="hari" placeholder="Nomor telepon" type="text" class="form-control" value="{{$poly->hari}}">
    </div>
  </div>
  <div class="form-group row">
    <label for="kontak" class="col-4 col-form-label">Kapasitas</label> 
    <div class="col-8">
      <input id="kontak" name="kapasitas" placeholder="Nomor telepon" type="text" class="form-control" value="{{$poly->kapasitas}}">
    </div>
  </div>
  <div class="form-group row">
    <label for="email" class="col-4 col-form-label">Kepala poli</label> 
    <div class="col-8">
      <input id="email" name="kepala" placeholder="Email" type="text" class="form-control" value="{{$poly->kepala}}">
    </div>
  </div>
  <div class="form-group row">
    <label for="password" class="col-4 col-form-label">Jumlah dokter</label> 
    <div class="col-8">
      <input id="password" name="jumlah" placeholder="Password" type="text" class="form-control" value="{{$poly->jumlah}}">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
  </div>
@endsection