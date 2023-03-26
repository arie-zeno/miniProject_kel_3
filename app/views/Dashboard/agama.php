<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">agama</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
          </div>
        </div>
      </div>

      <h2>Data Agama</h2>
      <!-- Button trigger modal -->
    <button type="button" class="btn btn-sm mb-3 btn-primary" data-bs-toggle="modal" data-bs-target="#agamaModal">
      Tambah Data Agama
    </button>

    <!-- Modal Agama -->
    <div class="modal fade" id="agamaModal" tabindex="-1" aria-labelledby="agamaModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="agamaModalLabel">Tambah Data Agama</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form action="<?=BASEURL?>/Dashboard/tambahAgm" method="post">
            <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="nama_agama" id="nama_agama" placeholder="nama_agama">
                            <label for="nama_agama">Nama agama</label>
                      <input type="hidden" name="id_agama" id="id_agama" value="<?=count($data["agama"]) ?>">
                  </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Tambah Agama</button>
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
              <th scope="col">Nama agama</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
          <?php 
            $i = 1;
            foreach($data["agama"] as $agama): ?>
            <tr>
              <td><?=$i?></td>
              <td><?=$agama["nama_agama"]?></td>
              <td><a class="btn btn-sm btn-success" href="#">Edit</a> | <a class="btn btn-sm btn-danger" href="<?=BASEURL;?>/Dashboard/hapusAgm/<?=$agama["id_agama"] ?>">Hapus</a></td>
            </tr>
            <?php $i++; endforeach?>

          </tbody>
        </table>
      </div>

</main>
