<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Mengubungkan File CSS -->
    <link rel="stylesheet" type="text/css" href="index.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Menu</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
  <a class="navbar-brand" href="#">DATABASE POPULASI PENDUDUK</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Data
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Data Kependudukan</a></li>
            <li><a class="dropdown-item" href="#">Data Kependidikan</a></li>
            <li><a class="dropdown-item" href="#">Data Kepegawaian</a></li>
          </ul>
        </li>
      <li class="nav-item active">
        <a class="nav-link" href="#home">Home <span class="sr-only">(current)</span></a>
      </li>
    </ul>
  </div>
  </div>
</nav>

<div class="card">
  <div class="card-body">
    <h5 class="card-title">Tambah Data Penduduk</h5>
    <form>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nama</label>
        <input type="nama" class="form-control" id="nama" aria-describedby="emailHelp">
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Tempat/Tgl. Lahir</label>
        <input type="tempatlahir" class="form-control" id="tempatlahir">
        <input type="date" id="datemax" name="datemax">
      </div>
      <div>
        <label for="exampleInputPassword1" class="form-label">Jenis Kelamin</label>
        <select class="form-select" aria-label="Default select example">
          <option value="">-Pilih Jenis Kelamin-</option>
          <option value="1">Perempuan</option>
          <option value="2">Laki-Laki</option>
        </select>
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Alamat</label>
        <input type="alamat" class="form-control" id="alamat" aria-describedby="emailHelp">
      </div>
      <div>
          <label for="quantity">RT</label>
          <input type="number" id="quantity" name="quantity" min="0" max="100" step="10" value="">
          <label for="quantity">RW</label>
          <input type="number" id="quantity" name="quantity" min="0" max="100" step="10" value="">
      </div>
      <div>
        <label for="exampleInputEmail1" class="form-label">Kel/Desa</label>
        <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
          <option value="">-Pilih Kel/Desa-</option>
          <option value="1">Alalak Selatan</option>
          <option value="2">Alalak Tengah</option>
          <option value="3">Alalak Utara</option>
          <option value="1">Alalak Besar</option>
          <option value="2">Alalak Kecil</option>

          <option value="3">Basirih Selatan</option>
          <option value="1">Basirih</option>
          <option value="2">Belitung Selatan</option>
          <option value="3">Belitung Utara</option>
          <option value="1">Benua Anyar</option>

          <option value="3">Gadang</option>

          <option value="1">Karang Mekar</option>
          <option value="2">Kebun Bunga</option>
          <option value="3">Kelayan Barat</option>
          <option value="1">Kelayan Dalam</option>
          <option value="3">Kelayan Luar</option>
          <option value="1">Kelayan Selatan</option>
          <option value="2">Kelayan Tengah</option>
          <option value="3">Kelayan Timur</option>
          <option value="1">Kertak Baru Ilir</option>
          <option value="3">kertak Baru Ulu</option>
          <option value="1">Kuin Cerucuk</option>
          <option value="2">Kuin Selatan</option>
          <option value="3">Kuin Utara</option>
          <option value="1">Kuripan</option>

          <option value="3">Mantuil</option>
          <option value="1">Mawar</option>
          <option value="2">Melayu</option>
          <option value="3">Murung Raya</option>

          <option value="3">Pangeran</option>
          <option value="1">Pasar Lama</option>
          <option value="2">Pekapuran Lama</option>
          <option value="3">Pekapuran Laut</option>
          <option value="1">Pekauman</option>
          <option value="3">Pelambuan</option>
          <option value="1">Pemurus Baru</option>
          <option value="2">Pemurus Dalam</option>
          <option value="3">Pemurus Luar</option>
          <option value="1">Pengambangan</option>

          <option value="3">Seberang Masjid</option>
          <option value="1">Sungai Andai</option>
          <option value="2">Sungai Baru</option>
          <option value="3">Sungai Bilu</option>
          <option value="1">Sungai Jingah</option>
          <option value="3">Sungai Lulut</option>
          <option value="1">Sungai Miai</option>
          <option value="2">Surgi Mufti</option>

          <option value="3">Tanjung Pagar</option>
          <option value="1">Telaga Biru</option>
          <option value="2">Telawang</option>
          <option value="3">Teluk Dalam</option>
          <option value="1">Teluk Tiram</option>
        </select>
        <label for="exampleInputEmail1" class="form-label">Kecamatan</label>
        <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
          <option value="">-Pilih Kecamatan-</option>
          <option value="1">Banjarmasin Barat</option>
          <option value="2">Banjarmasin Selatan</option>
          <option value="3">Banjarmasin Tengah</option>
          <option value="3">Banjarmasin Timur</option>
          <option value="3">Banjarmasin Utara</option>
        </select>
    </div>
    <div>
        <label for="exampleInputEmail1" class="form-label">Agama</label>
        <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
        <option value="">-Agama-</option>
          <option value="1">Islam</option>
          <option value="2">Kristen</option>
          <option value="3">Katolik</option>
          <option value="2">Hindu</option>
          <option value="3">Budha</option>
          <option value="3">Konghucu</option>
        </select>
        <label for="exampleInputEmail1" class="form-label">Status Perkawinan</label>
        <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
        <option value="">-Status Perkawinan-</option>
          <option value="1">Kawin</option>
          <option value="2">Belum Kawin</option>
        </select>
    </div>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Pekerjaan</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>

  <button type="submit" class="btn btn-primary">Tambah</button>
</form>

  </div>
</div>
<!-- Modal -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>