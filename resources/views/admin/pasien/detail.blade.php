@extends('style')
@section('title', 'Detail')
@section('content')
<div class="b-example-divider b-example-vr"></div>
        <div class="container">
            <table class="table table-striped mt-3">
                <tr>
                    <td>Nama Pasien</td>
                    <td>:</td>
                    <td>{{$patien->nama}}</td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>:</td>
                    <td>{{$patien->email}}</td>
                </tr>
                <tr>
                    <td>Tempat lahir</td>
                    <td>:</td>
                    <td>{{$patien->tempat}}</td>
                </tr>
                <tr>
                    <td>Tanggal lahir</td>
                    <td>:</td>
                    <td>{{$patien->tanggal}}</td>
                </tr>
                <tr>
                    <td>Jenis kelamin</td>
                    <td>:</td>
                    <td>{{$patien->jenis_kelamin}}</td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td>{{$patien->alamat}}</td>
                </tr>
                <tr>
                    <td>keluhan</td>
                    <td>:</td>
                    <td>{{$patien->keluhan}}</td>
                </tr>
                <tr>
                    <td>Nomor Whats app</td>
                    <td>:</td>
                    <td>{{$patien->nomor_whatsapp}}</td>
                </tr>
            </table>
            <a href="pemeriksaan/{{$patien->id}}">
                 <button class="btn btn-success">Cari tenaga medis dan daftarkan</button>
            </a>
        </div>
@endsection
