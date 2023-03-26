<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Kecamatan</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
          </div>
        </div>
      </div>

      <h2>Data Kecamatan</h2>
      <!-- Button trigger modal -->
      <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#kecamatanModal">
        Tambah Data Kecamatan
      </button>

      <!-- Modal Kecamatan -->
      <div class="modal fade" id="kecamatanModal" tabindex="-1" aria-labelledby="kecamatanModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="kecamatanModalLabel">Tambah Data Kecamatan</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form action="<?=BASEURL?>/Dashboard/tambahKec" method="post">
                      <div class="form-floating mb-3">
                          <select class="form-select" aria-label="Default select example" name="id_kabupaten" id="kabupaten">
                          <?php foreach($data["kabupaten"] as $kabupaten): ?>
                                              <option value="<?=$kabupaten["id_kabupaten"]?>"><?=$kabupaten["nama_kabupaten"]?></option>
                              <?php endforeach ?>
                          </select>
                          <label for="kabupaten">Kabupaten</label>
                      </div>

                        <div class="form-floating mb-3">
                          <input type="text" class="form-control" name="nama_kecamatan" id="nama_kecamatan" placeholder="nama_kecamatan">
                          <label for="nama_kecamatan">Nama Kecamatan</label>
                        </div>
                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary">Tambah Kecamatan</button>
                  </form>
            </div>
          </div>
        </div>
      </div>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">No.</th>
              <th scope="col">Nama Kabupaten</th>
              <th scope="col">Nama Kecamatan</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
          <?php 
            $i = 1;
            foreach($data["kecamatan"] as $kecamatan): ?>
            <tr>
              <td><?=$i?></td>
              <td><?=$kecamatan["nama_kabupaten"]?></td>
              <td><?=$kecamatan["nama_kecamatan"]?></td>
              <td><a class="btn btn-sm btn-success" href="#">Edit</a> | <a class="btn btn-sm btn-danger" href="<?=BASEURL;?>/Dashboard/hapusKec/<?=$kecamatan["id_kecamatan"] ?>">Hapus</a></td>
            </tr>
            <?php $i++; endforeach?>

          </tbody>
        </table>
      </div>

</main>
