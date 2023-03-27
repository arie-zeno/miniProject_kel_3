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

      <h2>Data Penduduk</h2>
      <div class="row">
            <div class="col-lg-6">
                <?php Flasher::flash(); ?>
            </div>
        </div>
          <!-- Button trigger modal -->
                <button type="button" class="btn btn-sm btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#modalTambah">
                Tambah Data Penduduk
                </button>

                <!-- Modal -->
                <div class="modal fade" id="modalTambah" tabindex="-1" aria-labelledby="modalTambahLabel" aria-hidden="true">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <h1 class="modal-title fs-5" id="modalTambahLabel">Tambah Data</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="<?=BASEURL?>/Dashboard/tambah">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="nik" placeholder="nik" name="nik">
                                <label for="nik">NIK</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="nama" placeholder="nama" name="nama">
                                <label for="nama">Nama</label>
                            </div>


                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="alamat" placeholder="alamat" name="alamat">
                                <label for="alamat">Alamat</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="ttl" placeholder="Tempat, Tanggal Lahir" name="ttl">
                                <label for="ttl">Tempat, Tanggal Lahir</label>
                            </div>

                            <div class="form-floating mb-3">
                                <select class="form-select" aria-label="Default select example" name="jenis_kelamin" id="floatJK">
                                    <option selected>Pilih Jenis Kelamin</option>
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                                <label for="floatJK">Jenis Kelamin</label>
                            </div>
                            
                            <div class="form-floating mb-3">
                                <select class="form-select" aria-label="Default select example" id="floatAgama" name="agama">
                                    <option selected>Pilih Agama</option>
                                        <?php foreach($data["agama"] as $agama): ?>
                                            <option value="<?=$agama["id_agama"]?>"><?=$agama["nama_agama"]?></option>
                                        <?php endforeach ?>
                                    </select>
                                    <label for="floatAgama">Agama</label>
                            </div>
                            
                            <div class="mb-3">
                                <select class="form-select" aria-label="Default select example" id="SelectProvinsi" name="provinsi">
                                    <option selected>Provinsi</option>
                                    <?php foreach($data["provinsi"] as $provinsi): ?>
                                            <option value="<?=$provinsi["id_provinsi"]?>"><?=$provinsi["nama_provinsi"]?></option>
                                        <?php endforeach ?>
                                    </select>
                            </div>

                            <div class="mb-3">
                                <select class="form-select" disabled aria-label="Default select example" id="SelectKabupaten" name="kabupaten">
                                    <option selected >Kabupaten</option>
                                        <?php foreach($data["kabupaten"] as $kabupaten): ?>
                                            <option class="<?=$kabupaten["id_provinsi"]?>" value="<?=$kabupaten["id_kabupaten"]?>"><?=$kabupaten["nama_kabupaten"]?></option>
                                        <?php endforeach ?>
                                    </select>
                            </div>

                            <div class="mb-3">
                                <select class="form-select" disabled aria-label="Default select example" id="SelectKecamatan" name="kecamatan">
                                    <option selected >Kecamatan</option>
                                        <?php foreach($data["kecamatan"] as $kecamatan): ?>
                                            <option class="<?=$kecamatan["id_kabupaten"]?>" value="<?=$kecamatan["id_kecamatan"]?>"><?=$kecamatan["nama_kecamatan"]?></option>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                                
                                <div class="mb-3">
                                    <select class="form-select" disabled aria-label="Default select example" id="SelectKelurahan" name="kelurahan">
                                        <option selected >Kelurahan</option>
                                        <?php foreach($data["kelurahan"] as $kelurahan): ?>
                                            <option class="<?=$kelurahan["id_kecamatan"]?>" value="<?=$kelurahan["id_kelurahan"]?>"><?=$kelurahan["nama_kelurahan"]?></option>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                    
                
                                    <div class="form-floating mb-3">
                                        <select class="form-select" aria-label="Default select example" id="floatPendidikan" name="pendidikan">
                                            <option selected>Pilih Pendidikan</option>
                                                <?php foreach($data["pendidikan"] as $pendidikan): ?>
                                                    <option value="<?=$pendidikan["id_pendidikan"]?>"><?=$pendidikan["nama_pendidikan"]?> Sederajat</option>
                                                <?php endforeach ?>
                                            </select>
                                            <label for="floatPendidikan">Pendidikan</label>
                                    </div>

                                    <div class="form-floating mb-3">
                                        <select class="form-select" aria-label="Default select example" id="floatPekerjaan" name="pekerjaan">
                                            <option selected>Pilih Pekerjaan</option>
                                                <?php foreach($data["pekerjaan"] as $pekerjaan): ?>
                                                    <option value="<?=$pekerjaan["id_pekerjaan"]?>"><?=$pekerjaan["nama_pekerjaan"]?></option>
                                                <?php endforeach ?>
                                            </select>
                                            <label for="floatPekerjaan">Pekerjaan</label>
                                    </div>

                                    <div class="form-floating mb-3">
                                        <select class="form-select" aria-label="Default select example" name="status_perkawinan" id="floatKawin">
                                            <option selected>Pilih Status Perkawinan</option>
                                            <option value="Sudah Menikah">Sudah Menikah</option>
                                            <option value="Belum Menikah">Belum Menikah</option>
                                        </select>
                                        <label for="floatKawin">Status Perkawinan</label>
                                    </div>

                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="kewarganegaraan" placeholder="Kewarganegaraan" name="kewarganegaraan">
                                        <label for="kewarganegaraan">Kewarganegaraan</label>
                                    </div>

                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="gol_darah" placeholder="Golongan Darah" name="gol_darah">
                                        <label for="gol_darah">Golongan Darah</label>
                                    </div>
                <script>
                    let SelectProvinsi = document.getElementById("SelectProvinsi"),
                        SelectKabupaten = document.getElementById("SelectKabupaten"),
                        SelectKecamatan = document.getElementById("SelectKecamatan"),
                        SelectKelurahan = document.getElementById("SelectKelurahan");
                
                        
                        function onOffSelectOption(option1, option2){
                            for(let i = 1; i < option1.options.length; i++){
                                if(option1.options[i].selected == true){
                                    option2.disabled = false;
                                    
                                    // let data = option2.querySelectorAll("."+option1.value);
                                    let data = option2.options;
                                    console.log(data)

                                
                                    for(let j = 1; j < data.length; j++){
                                        if( data[j].className == option1.value){
                                            console.log('ada ' + data[j].className);
                                            data[j].style.display = "block";
                                        }else{
                                            console.log('tidak ada ' + data[j].className);
                                            data[j].style.display = "none";
                                        }
                
                                    }
                                }
                            }
                        }
                        SelectProvinsi.addEventListener("click", ()=>{
                            onOffSelectOption(SelectProvinsi, SelectKabupaten);
                        });

                        SelectKabupaten.addEventListener("click", () => {
                            onOffSelectOption(SelectKabupaten, SelectKecamatan);
                        });

                        SelectKecamatan.addEventListener("click", () => {
                            onOffSelectOption(SelectKecamatan, SelectKelurahan);
                        });
                </script>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </form>
                    </div>
                </div>
                </div>
                </div>
        </div>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th class="text-center" scope="col">NIK</th>
              <th class="text-center" scope="col">Nama</th>
              <th class="text-center" scope="col">Alamat</th>
              <th class="text-center" scope="col">Tempat Tanggal Lahir</th>
              <th class="text-center" scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
          <?php foreach($data["penduduk"] as $penduduk): ?>
            <tr>
              <td class="text-center"><?=$penduduk["nik"]?></td>
              <td class="text-center"><?=$penduduk["nama"]?></td>
              <td class="text-center"><?=$penduduk["alamat"]?></td>
              <td class="text-center"><?=$penduduk["ttl"]?></td>
              <td class="text-center"><a class="btn btn-sm btn-success" href="<?=BASEURL;?>/Dashboard/detail/<?=$penduduk["nik"] ?>">Detail</a> | <a class="btn btn-sm btn-primary" href="<?=BASEURL;?>/Dashboard/edit/<?=$penduduk["nik"] ?>">Edit</a> |  <a class="btn btn-sm btn-danger" href="<?=BASEURL;?>/Dashboard/hapus/<?=$penduduk["nik"] ?>">Hapus</a></td>
            </tr>
            <?php endforeach?>

          </tbody>
        </table>
      </div>
    </main>
