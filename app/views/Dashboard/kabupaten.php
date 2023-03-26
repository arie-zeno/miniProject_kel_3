<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Kabupaten</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
          </div>
        </div>
      </div>

      <h2>Data Kabupaten</h2>
      <!-- Button trigger modal -->
      <button type="button" class="btn btn-primary btn-sm mb-3" data-bs-toggle="modal" data-bs-target="#kabupatenModal">
        Tambah Data Kabupaten
      </button>

      <!-- Modal -->
      <div class="modal fade" id="kabupatenModal" tabindex="-1" aria-labelledby="kabupatenModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="kabupatenModalLabel">Tambah Data Kabupaten</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form action="<?=BASEURL?>/Dashboard/tambahKab" method="post">
                  <div class="form-floating mb-3">
                      <select class="form-select" aria-label="Default select example" name="id_provinsi" id="provinsi">
                      <?php foreach($data["provinsi"] as $provinsi): ?>
                                          <option value="<?=$provinsi["id_provinsi"]?>"><?=$provinsi["nama_provinsi"]?></option>
                          <?php endforeach ?>
                      </select>
                      <label for="provinsi">Provinsi</label>
                  </div>

                    <div class="form-floating mb-3">
                      <input type="text" class="form-control" name="nama_kabupaten" id="nama_kabupaten" placeholder="nama_kabupaten">
                      <label for="nama_kabupaten">Nama Kabupaten</label>
                    </div>
                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary">Tambah Kabupaten</button>
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
              <th scope="col">Nama Provinsi</th>
              <th scope="col">Nama Kabupaten</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
          <?php 
            $i = 1;
            foreach($data["kabupaten"] as $kabupaten): ?>
            <tr>
              <td><?=$i?></td>
              <td><?=$kabupaten["nama_provinsi"]?></td>
              <td><?=$kabupaten["nama_kabupaten"]?></td>
              <td><a class="btn btn-sm btn-success" href="#">Edit</a> | <a class="btn btn-sm btn-danger" href="<?=BASEURL;?>/Dashboard/hapusKab/<?=$kabupaten["id_kabupaten"] ?>">Hapus</a></td>
            </tr>
            <?php $i++; endforeach?>

          </tbody>
        </table>
      </div>

</main>
