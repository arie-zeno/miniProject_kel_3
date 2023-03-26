<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Penduduk</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
          </div>
        </div>
      </div>

      <h2>Detail Penduduk</h2>
      <table class="w-25">
        <tr>
          <td>NIK</td>
          <td>:</td>
          <td><?=$data["detail_penduduk"]["nik"] ?></td>
        </tr>
        <tr>
          <td>Nama</td>
          <td>:</td>
          <td><?=$data["detail_penduduk"]["nama"] ?></td>
        </tr>
        <tr>
          <td>Jenis Kelamin</td>
          <td>:</td>
          <td><?=$data["detail_penduduk"]["jenis_kelamin"] ?></td>
        </tr>
        <tr>
          <td>Tempat, Tanggal Lahir</td>
          <td>:</td>
          <td><?=$data["detail_penduduk"]["ttl"] ?></td>
        </tr>
        <tr>
          <td>Alamat</td>
          <td>:</td>
          <td><?=$data["detail_penduduk"]["alamat"] ?></td>
        </tr>
        <tr>
          <td>Agama</td>
          <td>:</td>
          <td><?=$data["detail_penduduk"]["nama_agama"] ?></td>
        </tr>
        <tr>
          <td>Provinsi</td>
          <td>:</td>
          <td><?=$data["detail_penduduk"]["nama_provinsi"] ?></td>
        </tr>
        <tr>
          <td>Kabupaten</td>
          <td>:</td>
          <td><?=$data["detail_penduduk"]["nama_kabupaten"] ?></td>
        </tr>
        <tr>
          <td>Kecamatan</td>
          <td>:</td>
          <td><?=$data["detail_penduduk"]["nama_kecamatan"] ?></td>
        </tr>
        <tr>
          <td>Kelurahan</td>
          <td>:</td>
          <td><?=$data["detail_penduduk"]["nama_kelurahan"] ?></td>
        </tr>
        <tr>
          <td>Pekerjaan</td>
          <td>:</td>
          <td><?=$data["detail_penduduk"]["nama_pekerjaan"] ?></td>
        </tr>
        <tr>
          <td>pendidikan</td>
          <td>:</td>
          <td><?=$data["detail_penduduk"]["nama_pendidikan"] ?></td>
        </tr>
        <tr>
          <td>Kewarganegaraan</td>
          <td>:</td>
          <td><?=$data["detail_penduduk"]["kewarganegaraan"] ?></td>
        </tr>
        <tr>
          <td>Golongan Darah</td>
          <td>:</td>
          <td><?=$data["detail_penduduk"]["gol_darah"] ?></td>
        </tr>
      </table>

</main>
