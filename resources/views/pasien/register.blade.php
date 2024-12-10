<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi Pasien</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
@if(session()->has('success'))
  <div class="alert alert-success">
    <p class="text-center">{{session('success')}}</p>
  </div>
  @endif
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-header text-center bg-primary text-white">
                        <h3>Registrasi Pasien</h3>
                    </div>
                    <div class="card-body">
                        <form action="/nusantara-hospital-post" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama lengkap Anda" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan email Anda" required>
                            </div>
                            <div class="mb-3">
                                <label for="phone" class="form-label">Tempat lahir</label>
                                <input type="tel" class="form-control" id="tempat" name="tempat" placeholder="Masukkan Tempat lahir Anda" required>
                            </div>
                            <div class="mb-3">
                                <label for="dob" class="form-label">Tanggal Lahir</label>
                                <input type="date" class="form-control" id="dob" name="tanggal" required>
                            </div>
                            <div class="mb-3">
                                <label for="gender" class="form-label">Jenis Kelamin</label>
                                <select class="form-select" id="gender" name="jenis_kelamin" required>
                                    <option value="" selected>Pilih jenis kelamin</option>
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="address" class="form-label">Alamat</label>
                                <textarea class="form-control" id="address" name="alamat" rows="3" placeholder="Masukkan alamat Anda" required></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="phone" class="form-label">Keluhan</label>
                                <input type="tel" class="form-control" id="phone" name="keluhan" placeholder="Masukkan Keluhan Anda" required>
                            </div>
                            <div class="mb-3">
                                <label for="phone" class="form-label">Nomor whatsApp</label>
                                <input type="tel" class="form-control" id="phone" name="nomor_whatsapp" placeholder="Masukkan Keluhan Anda" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Daftar</button>
                            <a href="/">
                            <button type="button" class="btn btn-danger">Kembali</button>
                            </a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
