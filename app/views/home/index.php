
<div class="container-fluid py-5 bg-dark  mb-5">
                <div class="container my-5 py-5">
                    <div class="row align-items-center g-5">
                        <div class="col-lg-6 text-center text-lg-start">
                            <h1 class="display-3 text-white animated slideInLeft">Aplikasi<br>Data Kependudukan</h1>
                            <p class="text-white animated slideInLeft mb-4 pb-2">Aplikasi yang dapat digunakan untuk menyimpan Data Kependudukan di Banjarmasin</p>
                            <!-- <a href="<?=BASEURL ?>/Dashboard" class="btn btn-primary py-sm-3 px-sm-5 me-3 animated slideInLeft">Ke Halaman Admin</a> -->

                            <!-- Button trigger modal -->
                          <button type="button" class="btn btn-primary py-sm-3 px-sm-5 me-3 animated slideInLeft text-white" data-bs-toggle="modal" data-bs-target="#loginModal">
                            Kehalaman Admin
                          </button>

                          <!-- Modal -->
                          <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h1 class="modal-title fs-5" id="loginModalLabel">Masukkan Password</h1>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                  <form action="<?=BASEURL?>/Dashboard/login" method="post">
                                  <div class="form-floating mb-3">
                                          <input type="password" class="form-control" name="password" id="password" placeholder="password">
                                          <label for="password">Password</label>
                                </div>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Login</button>
                              </form>
                                </div>
                              </div>
                            </div>
                          </div>


                        </div>
                        <div class="col-lg-6 text-center text-lg-end overflow-hidden">
                            <img class="" href="<?=BASEURL ?>/img/mobile-app.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar End -->

        <!-- Statistik Sederhana -->
        <div class="container-fluid py-5">
            <div class="container">
                <div class="row justify-content-center">
                  <div class="col-lg-8 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                                <i class="fa fa-3x fa-check text-primary mb-4"></i>
                                <h5>Data Yang Tercatat</h5>
                                <p>Total <?=count($data["penduduk"]) ?> Penduduk, <?=count($data["provinsi"]) ?> Provinsi, <?=count($data["kabupaten"]) ?> Kabupaten, <?=count($data["kecamatan"]) ?> Kecamatan, <?=count($data["kelurahan"]) ?> Kelurahan</p>
                            </div>
                        </div>
                    </div>
                  </div>
              </div>
          </div>

        <!-- Fitur-Fitur Start -->
        <div class="container-fluid py-5">
            <div class="container">
                <div class="row g-4">
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                                <i class="fa fa-3x fa-plus-square text-primary mb-4"></i>
                                <h5>Menambahkan Data</h5>
                                <p>Anda dapat menambahkan data sendiri di manapun dan kapanpun.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                                <i class="fa fa-3x fa-edit text-primary mb-4"></i>
                                <h5>Mengedit Data</h5>
                                <p>Ingin mengubah data karena ada kesalahan atau pembaruan? Jangan khawatir, Anda dapat mengubah atau mengeditnya.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                                <i class="fa fa-3x fa-trash text-primary mb-4"></i>
                                <h5>Menghapus Data</h5>
                                <p>Tentu saja data yang telah dibuat dapat dihapus pula.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                                <i class="fa fa-3x fa-archive text-primary mb-4"></i>
                                <h5>Menyimpan Data</h5>
                                <p>Juga dapat digunakan untuk menyimpan data untuk keperluan lainnya.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Fitur-Fitur End -->

        <!-- Team Start -->
        <div class="container-fluid pt-5 pb-3">
            <div class="container pb-5">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Team Members</h5>
                    <h1 class="mb-5">PILKOM '21</h1>
                </div>
                <div class="row g-4">
                    <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class="rounded-circle overflow-hidden m-4">
                                <img class="img-fluid" href="<?=BASEURL ?>/img/.jpg" alt="">
                            </div>
                            <h5 class="mb-0">Ari, Willy, Farabi</h5>
                            <small>Backend</small>
                            <div class="d-flex justify-content-center mt-3">
                                <a class="btn btn-square btn-primary mx-1" href="<?=BASEURL ?>/instagram.com/"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class="rounded-circle overflow-hidden m-4">
                                <img class="img-fluid" href="<?=BASEURL ?>/img/.jpg" alt="">
                            </div>
                            <h5 class="mb-0">Tio, Nadia, Tata</h5>
                            <small>Frontend</small>
                            <div class="d-flex justify-content-center mt-3">
                                <a class="btn btn-square btn-primary mx-1" href="<?=BASEURL ?>/instagram.com/"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- Team End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>
