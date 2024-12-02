@extends('style')

@section('title', 'daftarkan pemeriksaan')
@section('content')
<div class="b-example-divider b-example-vr"></div>
  <div class="container">
  <form method="post" action="{{route('pemeriksaan', $patien->id)}}">
    @csrf
  <div class="form-group row">
    <label for="text" class="col-4 col-form-label">Text Field</label>
    <div class="col-8">
      <span name="patien">{{$patien->nama}}</span>
    </div>
  </div>
  <div class="form-group row">
    <label for="dokter" class="col-4 col-form-label">Dokter</label>
    <div class="col-8">
      <select id="dokter" name="dokter" class="form-control">
      <option value="pilh dokter">Pilih dokter</option>
        @foreach($doctors as $doctor)
        <option value="{{$doctor->id}}">{{$doctor->nama}}</option>
        @endforeach
      </select>
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
