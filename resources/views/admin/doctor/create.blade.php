@extends('style')
@section('title', 'tambah dokter')
@section('content')
<div class="container p-3">
  <form method="post" action="{{route('dokter.post')}}">
    @csrf
  <div class="form-group row">
    <label for="dokter" class="col-4 col-form-label">Nama dokter</label> 
    <div class="col-8">
      <input id="dokter" name="dokter" placeholder="Nama lengkap dokter" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="poli" class="col-4 col-form-label">Poli</label> 
    <div class="col-8">
      <select id="poli" name="spesialis" class="custom-select">
        @foreach($polies as $poly)
        <option value="{{$poly->nama}}">{{$poly->nama}}</option>
        @endforeach
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="jadwal" class="col-4 col-form-label">Jadwal praktek</label> 
    <div class="col-8">
      <input id="jadwal" name="jadwal" placeholder="Jadwal " type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="kontak" class="col-4 col-form-label">Kontak</label> 
    <div class="col-8">
      <input id="kontak" name="kontak" placeholder="Nomor telepon" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="poli" class="col-4 col-form-label">Poli</label> 
    <div class="col-8">
      <select id="poli" name="poli" class="custom-select">
        @foreach($polies as $poly)
        <option value="{{$poly->id}}">{{$poly->nama}}</option>
        @endforeach
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="email" class="col-4 col-form-label">email</label> 
    <div class="col-8">
      <input id="email" name="email" placeholder="Email" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="password" class="col-4 col-form-label">Password</label> 
    <div class="col-8">
      <input id="password" name="password" placeholder="Password" type="text" class="form-control">
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