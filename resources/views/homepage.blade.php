<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nusantara hospital</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .carousel-caption {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            color: white;
        }
    </style>
</head>

<body>

    <nav class="navbar bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand" href="#">
                <h1>Nusantara <span class="text-primary">Hospital</span></h1>
            </a>
        </div>
    </nav>

    <!-- Opening page -->
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('ruang.png')}}" class="d-block w-100 opacity-25" alt="..." height="750px">
                <div class="carousel-caption">
                    <h1 class="text-dark">Nusantara <span class="text-primary">Hospital</span></h1>
                    <p style="color: salmon;font-size:xx-large;">Karena setiap nafas berharga</p>
                    <p class="text-dark"> Menyediakan layanan kesehatan yang berkualitas, terjangkau, dan berorientasi pada
                        kebutuhan pasien dengan mengutamakan keselamatan, kenyamanan, serta
                        kepercayaan masyarakat</p>
                    <a href="#pelayanan">
                    <button class="btn btn-primary">Learn more</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- pelayanan kami -->
    <div class="bg-primary p-1 text-white" id="pelayanan">
        <h1>Pelayanan kami</h1>
        <h1><b> Nusantara hospital menyediakan berbagai macam pelayanan</b></h1>
        <div class="d-flex flex-wrap">
            <div class="card mx-3 my-3" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Rawat Inap</h5>
                    <p class="card-text">Penyediaan kamar untuk pasien yang membutuhkan perawatan intensif atau pengawasan medis selama beberapa hari.</p>
                </div>
            </div>
            <div class="card mx-3 my-3" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Rawat jalan</h5>
                    <p class="card-text">Pemeriksaan oleh dokter spesialis atau umum tanpa perlu menginap.
                        Termasuk poliklinik khusus, seperti:
                        Poli anak.
                        Poli penyakit dalam.
                        Poli bedah.
                        Poli gigi.</p>
                </div>
            </div>
            <div class="card mx-3 my-3" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Gawat Darurat (Emergency Services)</h5>
                    <p class="card-text">Penyediaan kamar untuk pasien yang membutuhkan perawatan intensif atau pengawasan medis selama beberapa hari.</p>
                </div>
            </div>
            <div class="card mx-3 my-3" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Layanan Diagnostik</h5>
                    <p class="card-text">aboratorium: pemeriksaan darah, urin, dan tes lainnya.
                        Radiologi: rontgen, CT scan, MRI, USG.
                        Patologi anatomi: biopsi dan analisis jaringan..</p>
                </div>
            </div>
            <div class="card mx-3 my-3" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title"> Layanan Bedah</h5>
                    <p class="card-text">Fisioterapi untuk pemulihan fungsi fisik.
                        Terapi okupasi dan terapi bicara.</p>
                </div>
            </div>
            <div class="card mx-3 my-3" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Layanan Rehabilitasi Medis</h5>
                    <p class="card-text">Bedah umum dan spesialis (orthopedi, urologi, bedah saraf, dll.).
                        Bedah elektif (terencana) dan darurat.</p>
                </div>
            </div>
            <div class="card mx-3 my-3" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title"> Layanan Kebidanan dan Kandungan</h5>
                    <p class="card-text">Pemeriksaan kehamilan.
                        Persalinan (normal dan caesar).
                        Konsultasi fertilitas dan kesehatan reproduksi.</p>
                </div>
            </div>
            <div class="card mx-3 my-3" style="width: 18rem;">
                <div class="card-body"> Layanan Farmasi</h5>
                    <p class="card-text">Penyuluhan terkait penyakit tertentu.
                        Edukasi gizi, kebersihan, dan pencegahan penyakit..</p>
                </div>
            </div>
            <div class="card mx-3 my-3" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title"> Layanan Penyuluhan dan Edukasi Kesehatan</h5>
                    <p class="card-text">Bedah umum dan spesialis (orthopedi, urologi, bedah saraf, dll.).
                        Bedah elektif (terencana) dan darurat.</p>
                </div>
            </div>
            <div class="card mx-3 my-3" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Layanan Gizi</h5>
                    <p class="card-text">Penyediaan makanan sesuai kebutuhan gizi pasien rawat inap.
                        Konsultasi diet untuk pasien rawat jalan.</p>
                </div>
            </div>
            <div class="card mx-3 my-3" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Layanan Kesehatan Jiwa</h5>
                    <p class="card-text">Bedah umum dan spesialis (orthopedi, urologi, bedah saraf, dll.).
                        Bedah elektif (terencana) dan darurat.</p>
                </div>
            </div>
            <div class="card mx-3 my-3" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Layanan Penunjang Lainnya</h5>
                    <p class="card-text">Ambulans untuk transportasi pasien.
                        Homecare untuk pasien yang membutuhkan perawatan di rumah.
                        Pusat informasi pasien dan pengaduan..</p>
                </div>
            </div>
        </div>
    </div>
    <!-- pelayanan kami -->
    <!-- Tenaga medis -->
    <div style="background-color: salmon;">
        <h1 class="text-center">Tenaga medis berpengalaman</h1>
        <div class="d-flex flex-wrap">
            @foreach($doctors as $doctor)
            <div class="card mx-3 my-3" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{$doctor->nama}}</h5>
                    <p class="card-text">{{$doctor->poly->nama}}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <!-- Tenaga medis -->
     <!-- closing -->
     <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('ruang.png')}}" class="d-block w-100 opacity-25" alt="..." height="750px">
                <div class="carousel-caption">
                    <h1 class="text-dark">Nusantara <span class="text-primary">Hospital</span></h1>
                    <p style="color: salmon;">Kp tamansari rt 01 rw 05 desa karyasari kecamatan leuwilang kabupaten
                    bogor</p>
                    <p class="text-dark"> Jagokoding15@gmail.com</p>
                    <a href="/nusantara-hospital/register">
                    <button class="btn btn-primary">Pendaftaran pasien</button>
                    </a>
                </div>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
