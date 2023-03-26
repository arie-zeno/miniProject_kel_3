<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 pb-5">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Penduduk</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
          </div>
        </div>
      </div>

      <h2>Data Penduduk</h2>


      <form method="post" action="<?=BASEURL?>/Dashboard/editDataPenduduk">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="nik" placeholder="nik" name="nik" value="<?=$data["detail_penduduk"]["nik"] ?>">
                                <label for="nik">NIK</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="nama" placeholder="nama" name="nama" value="<?=$data["detail_penduduk"]["nama"] ?>">
                                <label for="nama">Nama</label>
                            </div>


                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="alamat" placeholder="alamat" name="alamat" value="<?=$data["detail_penduduk"]["alamat"] ?>">
                                <label for="alamat">Alamat</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="ttl" placeholder="Tempat, Tanggal Lahir" name="ttl" value="<?=$data["detail_penduduk"]["ttl"] ?>">
                                <label for="ttl">Tempat, Tanggal Lahir</label>
                            </div>

                            <div class="form-floating mb-3">
                                <select class="form-select" aria-label="Default select example" name="jenis_kelamin" id="floatJK" >
                                    <option selected value="<?=$data["detail_penduduk"]["jenis_kelamin"] ?>"><?=$data["detail_penduduk"]["jenis_kelamin"] ?></option>
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                                <label for="floatJK">Jenis Kelamin</label>
                            </div>
                            
                            <div class="form-floating mb-3">
                                <select class="form-select" aria-label="Default select example" id="floatAgama" name="agama">
                                    <option selected value="<?=$data["detail_penduduk"]["id_agama"] ?>"><?=$data["detail_penduduk"]["nama_agama"] ?></option>
                                        <?php foreach($data["agama"] as $agama): ?>
                                            <option value="<?=$agama["id_agama"]?>"><?=$agama["nama_agama"]?></option>
                                        <?php endforeach ?>
                                    </select>
                                    <label for="floatAgama">Agama</label>
                            </div>
                            
                            <div class="mb-3">
                                <select class="form-select" aria-label="Default select example" id="SelectProvinsi" name="provinsi">
                                    <option selected value="<?=$data["detail_penduduk"]["id_provinsi"] ?>"><?=$data["detail_penduduk"]["nama_provinsi"] ?></option>
                                    <?php foreach($data["provinsi"] as $provinsi): ?>
                                            <option value="<?=$provinsi["id_provinsi"]?>"><?=$provinsi["nama_provinsi"]?></option>
                                        <?php endforeach ?>
                                    </select>
                            </div>

                            <div class="mb-3">
                                <select class="form-select"  aria-label="Default select example" id="SelectKabupaten" name="kabupaten">
                                    <option selected value="<?=$data["detail_penduduk"]["id_kabupaten"] ?>"><?=$data["detail_penduduk"]["nama_kabupaten"] ?></option>
                                        <?php foreach($data["kabupaten"] as $kabupaten): ?>
                                            <option class="<?=$kabupaten["id_provinsi"]?>" value="<?=$kabupaten["id_kabupaten"]?>"><?=$kabupaten["nama_kabupaten"]?></option>
                                        <?php endforeach ?>
                                    </select>
                            </div>

                            <div class="mb-3">
                                <select class="form-select"  aria-label="Default select example" id="SelectKecamatan" name="kecamatan">
                                    <option selected value="<?=$data["detail_penduduk"]["id_kecamatan"] ?>"><?=$data["detail_penduduk"]["nama_kecamatan"] ?></option>
                                        <?php foreach($data["kecamatan"] as $kecamatan): ?>
                                            <option class="<?=$kecamatan["id_kabupaten"]?>" value="<?=$kecamatan["id_kecamatan"]?>"><?=$kecamatan["nama_kecamatan"]?></option>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                                
                                <div class="mb-3">
                                    <select class="form-select"  aria-label="Default select example" id="SelectKelurahan" name="kelurahan">
                                        <option selected value="<?=$data["detail_penduduk"]["id_kelurahan"] ?>"><?=$data["detail_penduduk"]["nama_kelurahan"] ?></option>
                                        <?php foreach($data["kelurahan"] as $kelurahan): ?>
                                            <option class="<?=$kelurahan["id_kecamatan"]?>" value="<?=$kelurahan["id_kelurahan"]?>"><?=$kelurahan["nama_kelurahan"]?></option>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                    
                
                                    <div class="form-floating mb-3">
                                        <select class="form-select" aria-label="Default select example" id="floatPendidikan" name="pendidikan">
                                            <option selected value="<?=$data["detail_penduduk"]["id_pendidikan"] ?>"><?=$data["detail_penduduk"]["nama_pendidikan"] ?></option>
                                                <?php foreach($data["pendidikan"] as $pendidikan): ?>
                                                    <option value="<?=$pendidikan["id_pendidikan"]?>"><?=$pendidikan["nama_pendidikan"]?> Sederajat</option>
                                                <?php endforeach ?>
                                            </select>
                                            <label for="floatPendidikan">Pendidikan</label>
                                    </div>

                                    <div class="form-floating mb-3">
                                        <select class="form-select" aria-label="Default select example" id="floatPekerjaan" name="pekerjaan">
                                            <option selected value="<?=$data["detail_penduduk"]["id_pekerjaan"] ?>"><?=$data["detail_penduduk"]["nama_pekerjaan"] ?></option>
                                                <?php foreach($data["pekerjaan"] as $pekerjaan): ?>
                                                    <option value="<?=$pekerjaan["id_pekerjaan"]?>"><?=$pekerjaan["nama_pekerjaan"]?></option>
                                                <?php endforeach ?>
                                            </select>
                                            <label for="floatPekerjaan">Pekerjaan</label>
                                    </div>

                                    <div class="form-floating mb-3">
                                        <select class="form-select" aria-label="Default select example" name="status_perkawinan" id="floatKawin">
                                            <option selected value="<?=$data["detail_penduduk"]["status_perkawinan"] ?>"><?=$data["detail_penduduk"]["status_perkawinan"] ?></option>
                                            <option value="Sudah Menikah">Sudah Menikah</option>
                                            <option value="Belum Menikah">Belum Menikah</option>
                                        </select>
                                        <label for="floatKawin">Status Perkawinan</label>
                                    </div>

                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="kewarganegaraan" placeholder="Kewarganegaraan" name="kewarganegaraan" value="<?=$data["detail_penduduk"]["kewarganegaraan"] ?>">
                                        <label for="kewarganegaraan">Kewarganegaraan</label>
                                    </div>

                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="gol_darah" placeholder="Golongan Darah" name="gol_darah" value="<?=$data["detail_penduduk"]["gol_darah"] ?>">
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
                        <button type="submit" class="btn btn-primary text-center">Edit</button>
                    </form>
 
</main>
