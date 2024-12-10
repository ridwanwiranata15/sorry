@extends('style')
@section('title', 'Dashboard')
@section('content')
<div class="container my-5">
        <h2 class="text-center mb-4">Lebih dari 10% pasien kami layani</h2>
        <div class="card">
            <div class="card-body">
                <canvas id="salesChart"></canvas>
            </div>
        </div>
    </div>
@endsection
