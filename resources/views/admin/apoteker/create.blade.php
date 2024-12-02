@extends('style')
@section('title', 'Tambah Apoteker')
@section('content')
<div class="container p-3">
  <form method="post" action="/admin/apoteker/store-create">
    @csrf
  <div class="form-group row">
    <label for="dokter" class="col-4 col-form-label">Nama</label> 
    <div class="col-8">
      <input id="dokter" name="dokter" placeholder="Nama lengkap apoteker" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="telepon" class="col-4 col-form-label">Telepon</label> 
    <div class="col-8">
      <input id="telepon" name="telepon" placeholder="telepon " type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="alamat" class="col-4 col-form-label">Alamat</label> 
    <div class="col-8">
      <input id="alamat" name="alamat" placeholder="Nomor telepon" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="str" class="col-4 col-form-label">Str</label> 
    <div class="col-8">
      <input id="str" name="str" placeholder="str" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="status" class="col-4 col-form-label">Shift</label> 
    <div class="col-8">
      <input id="shift" name="shift" placeholder="shift" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <label for="status" class="col-4 col-form-label">Status</label> 
    <div class="col-8">
      <input id="status" name="status" placeholder="status" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <label for="email" class="col-4 col-form-label">Email</label> 
    <div class="col-8">
      <input id="email" name="email" placeholder="email" type="text" class="form-control">
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
</main>
@endsection