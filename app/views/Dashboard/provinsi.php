<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Provinsi</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
          </div>
        </div>
      </div>

      <h2>Data Provinsi</h2>
            <!-- Button trigger modal -->
      <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#provinsiModal">
        Tambah Data Provinsi
      </button>

      <!-- Modal -->
      <div class="modal fade" id="provinsiModal" tabindex="-1" aria-labelledby="provinsiModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="provinsiModalLabel">Tambah Data Provinsi</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form action="<?=BASEURL?>/Dashboard/tambahProv" method="post">
                
              <div class="form-floating mb-3">
                <input type="text" class="form-control" name="nama_provinsi" id="nama_provinsi" placeholder="nama_provinsi">
                <label for="nama_provinsi">Nama Provinsi</label>
              </div>
              </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary">Tambah Provinsi</button>
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
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
          <?php 
            $i = 1;
            foreach($data["provinsi"] as $provinsi): ?>
            <tr>
              <td><?=$i?></td>
              <td><?=$provinsi["nama_provinsi"]?></td>
              <td><a class="btn btn-sm btn-success" href="#">Edit</a> | <a class="btn btn-sm btn-danger" href="<?=BASEURL;?>/Dashboard/hapusProv/<?=$provinsi["id_provinsi"] ?>">Hapus</a></td>
            </tr>
            <?php $i++; endforeach?>

          </tbody>
        </table>
      </div>

</main>
