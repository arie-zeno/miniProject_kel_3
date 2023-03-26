    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Selamat Datang Admin</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
          </div>
        </div>
      </div>

      <div class="container">

        <div class="table-responsive">
          <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th class="text-center" scope="col">Jumlah Penduduk</th>
              <th class="text-center" scope="col">Jumlah Pendidikan</th>
              <th class="text-center" scope="col">Jumlah Provinsi</th>
              <th class="text-center" scope="col">Jumlah Kabupaten</th>
              <th class="text-center" scope="col">Jumlah Kecamatan</th>
              <th class="text-center" scope="col">Jumlah Kelurahan</th>
              <th class="text-center" scope="col">Jumlah Agama</th>
              <th class="text-center" scope="col">Jumlah Pekerjaan</th>
            </tr>
          </thead>
          <tbody>

          <tr>
            <td class="text-center"><?=count($data["penduduk"]) ?></td>
            <td class="text-center"><?=count($data["pendidikan"]) ?></td>
            <td class="text-center"><?=count($data["provinsi"]) ?></td>
            <td class="text-center"><?=count($data["kabupaten"]) ?></td>
            <td class="text-center"><?=count($data["kecamatan"]) ?></td>
            <td class="text-center"><?=count($data["kelurahan"]) ?></td>
            <td class="text-center"><?=count($data["agama"]) ?></td>
            <td class="text-center"><?=count($data["pekerjaan"]) ?></td>
          </tr>
          
        </tbody>
      </table>
    </div>
  </div>
        </main>
