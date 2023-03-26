<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Pekerjaan</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
          </div>
        </div>
      </div>

      <h2>Data Pekerjaan</h2>
      <!-- Button trigger modal -->
      <button type="button" class="btn btn-primary btn-sm mb-3" data-bs-toggle="modal" data-bs-target="#PekerjaanModal">
        Tambah Data Pekerjaan
      </button>

      <!-- Modal Pekerjaan -->
      <div class="modal fade" id="PekerjaanModal" tabindex="-1" aria-labelledby="PekerjaanModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="PekerjaanModalLabel">Tambah Data Pekerjaan</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form action="<?=BASEURL?>/Dashboard/tambahPkr" method="post">
                      <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="nama_pekerjaan" id="nama_pekerjaan" placeholder="nama_kelurahan">
                            <label for="nama_pekerjaan">Nama Pekerjaan</label>
                          </div>
                      <input type="hidden" name="id_pekerjaan" id="id_pekerjaan" value="<?=count($data["pekerjaan"]) ?>">
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
              <th scope="col">Nama Pekerjaan</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
          <?php 
            $i = 1;
            foreach($data["pekerjaan"] as $pekerjaan): ?>
            <tr>
              <td><?=$i?></td>
              <td><?=$pekerjaan["nama_pekerjaan"]?></td>
              <td><a class="btn btn-sm btn-success" href="#">Edit</a> | <a class="btn btn-sm btn-danger" href="<?=BASEURL;?>/Dashboard/hapusPkr/<?=$pekerjaan["id_pekerjaan"] ?>">Hapus</a></td>
            </tr>
            <?php $i++; endforeach?>

          </tbody>
        </table>
      </div>

</main>
