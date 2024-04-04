{{-- Header --}}
@include('componen/header')

<style>
    @media (max-width: 768px) {
        .alamat {
            margin-top: 3%;
            margin-left: 20px;
            /* Menggunakan persentase sebagai margin-top saat layar responsif */
        }
    }

    @media (min-width: 768px) {
        .alamat {
            margin-top: -100px;
            /* Menggunakan margin-top -100px saat layar tidak responsif */
        }
    }
</style>

<body>
    <div id="app">
        {{-- SIdebar --}}
        @include('componen/sidebar')
        <div class="layout-page">
            <div id="main">


                <div class="page-content">
                    @if (session()->has('tblBiodata') && session('tblBiodata')['status'] === 'N')
                        <section id="before_cv" class="row me-3  ">
                            <div class="col-12 col-lg-12 mt-3 ms-3">
                                <div class="row">
                                    <div class="col-12 col-lg-12 col-md-6">
                                        <div class="card">
                                            <div class="card-body px-4 py-4-5">
                                                <div class="row">
                                                    <div class="col-md-3 text-center"
                                                        style="padding: 10px; background-color: #f2f4f9;">
                                                        <div class="form-group border-white d-block mx-auto"
                                                            style="width: 200px; height: 200px; border-radius: 40px; background: transparent">
                                                            <img src="mazer/assets/images/faces/4.jpg"
                                                                style="width: 200px; height: 200px; border-radius: 40px;">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-9 pr-3">
                                                        <div class="row"
                                                            style="padding: 20px; background-position: right; background-size: contain; background-repeat: no-repeat; border-bottom:solid 3px #f2f4f9">
                                                            <div class="col-md-10 d-flex align-items-center">
                                                                <div class="my-auto ms-2">
                                                                    <h4 class="text-bold"
                                                                        style="text-transform: uppercase;">
                                                                        <strong>{{ session('userData')['name'] }}</strong>
                                                                    </h4>
                                                                    <h6>{{ session('userData')['email'] }}</h6>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2 my-auto text-right p-0">
                                                                <a href="https://rekrutmenbersama2024.fhcibumn.id/main#curiculum_vitae_final"
                                                                    id="ubah"
                                                                    class="btn btn-outline-primary pl-4 pr-4 mr-1 btn-rounded">
                                                                    <i class="mr-1 icmn-pencil" style=""></i> Ubah
                                                                    Data
                                                                </a>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="col-md-3 pl-5 pr-5 pt-4"
                                                        style=" background-color: #f2f4f9; ">
                                                        <b>No. KTP</b><br>
                                                        <label>Data Tidak Ditemukan</label>
                                                        <hr>
                                                        <b>No. HP</b><br>
                                                        <label>Data Tidak Ditemukan</label>
                                                        <hr>
                                                        <b>Tempat Lahir</b><br>
                                                        <label>Data Tidak Ditemukan</label>
                                                        <hr>
                                                        <b>Tanggal Lahir</b><br>
                                                        <label>Data Tidak Ditemukan</label>
                                                        <hr>
                                                        <b>Status Pernikahan</b><br>
                                                        <label>Data Tidak Ditemukan</label>
                                                        <hr>
                                                        <b>Jenis Kelamin</b><br>
                                                        <label>Data Tidak Ditemukan</label>
                                                        <hr>
                                                        <b>Agama</b><br>
                                                        <label>Data Tidak Ditemukan</label>
                                                        <hr>
                                                        <br>
                                                    </div>

                                                    <div class="col-md-9 pl-4 alamat">
                                                        <div class="d-flex pr-5" style="padding-top:5px;">
                                                            <i class="bi bi-arrow-down-right-square-fill fs-3 me-4 mb-5 "
                                                                style="vertical-align: middle;"></i>
                                                            <div class="row ml-3 mt-2">
                                                                <div class="col-md-12 pl-1">
                                                                    <h5 class="bold-text"> Alamat </h5>
                                                                    <p>Tidak ada alamat</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- end alamat -->

                                                        <!-- start pendidikan kerja -->
                                                        <div class="d-flex pr-5">
                                                            <i class="bi bi-arrow-down-right-square-fill fs-3 me-4 mb-5 "
                                                                style="vertical-align: middle;"></i>
                                                            <div class="row ml-3 mt-2">
                                                                <div class="col-md-12">
                                                                    <h5 class="bold-text"> Pendidikan</h5>
                                                                    <p>Tidak ada pendidikan</p>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <!-- end pendidikan kerja -->


                                                        <div class="d-flex pr-5">
                                                            <i class="bi bi-arrow-down-right-square-fill fs-3 me-4 mb-5 "
                                                                style="vertical-align: middle;"></i>
                                                            <div class="row ml-3 mt-2">
                                                                <div class="col-md-12">
                                                                    <h5 class="bold-text"> Pengalaman Kerja</h5>
                                                                    <p>Tidak ada pengalaman kerja </p>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="d-flex pr-5">
                                                            <i class="bi bi-arrow-down-right-square-fill fs-3 me-4 mb-5 "
                                                                style="vertical-align: middle;"></i>
                                                            <div class="row ml-3 mt-2">
                                                                <div class="col-md-12">
                                                                    <h5 class="bold-text"> Sertifikat</h5>
                                                                    <p>Tidak ada Sertifikat</p>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    @else
                    @endif
                    @if (session()->has('tblBiodata') && session('tblBiodata')['status'] === 'Y')
                        <section id="after_cv" class="row me-3 ">
                            <div class="col-12 col-lg-12 mt-3 ms-3">
                                <div class="row">
                                    <div class="col-12 col-lg-12 col-md-6">
                                        <div class="card">
                                            <div class="card-body px-4 py-4-5">
                                                <div class="row">
                                                    <div class="col-md-3 text-center"
                                                        style="padding: 10px; background-color: #f2f4f9;">
                                                        <div class="form-group border-white d-block mx-auto"
                                                            style="width: 200px; height: 200px; border-radius: 40px; background: transparent">
                                                            <img src="mazer/assets/images/faces/4.jpg"
                                                                style="width: 200px; height: 200px; border-radius: 40px;">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-9 pr-3">
                                                        <div
                                                            class="row"style="padding: 20px;background-position: right;background-size: contain;background-repeat: no-repeat;border-bottom:solid 3px #f2f4f9">
                                                            <div class="col-md-10 pl-0 my-auto ms-2">
                                                                <h4 class="text-bold"
                                                                    style="text-transform: uppercase;">
                                                                    <strong>{{ session('userData')['name'] }}</strong>
                                                                </h4>
                                                                <h6>{{ session('userData')['email'] }}</h6>
                                                            </div>
                                                            <div class="col-md-2 my-auto text-right p-0" style="">

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 pl-5 pr-5 pt-4"
                                                        style=" background-color: #f2f4f9; ">
                                                        <b>No. KTP</b><br>
                                                        <label>{{ session('tblBiodata')['no_ktp'] }}
                                                        </label>
                                                        <hr>
                                                        <b>No. HP</b><br>
                                                        <label>{{ session('userData')['noTelepon'] }}</label>
                                                        <hr>
                                                        <b>Tempat Lahir</b><br>
                                                        <label>Cirebon</label>
                                                        <hr>
                                                        <b>Tanggal Lahir</b><br>
                                                        <label>04 Desember 2000</label>
                                                        <hr>
                                                        <b>Status Pernikahan</b><br>
                                                        <label>Lajang</label>
                                                        <hr>
                                                        <b>Jenis Kelamin</b><br>
                                                        <label>Laki-laki</label>
                                                        <hr>
                                                        <b>Agama</b><br>
                                                        <label>Islam</label>
                                                        <hr>
                                                        <b style="text-transform: capitalize;">facebook</b><br>
                                                        <label style="word-wrap: break-word; display:block"
                                                            for="">AdlyDhy</label>
                                                        <hr>
                                                        <br>
                                                    </div>

                                                    <div class="col-md-9 pl-4 alamat">
                                                        <div class="d-flex mb-4 pr-5" style="padding-top:5px;">
                                                            <i class="bi bi-arrow-down-right-square-fill fs-3 me-4 mb-5 "
                                                                style="vertical-align: middle;"></i>
                                                            <div class="row ml-3 mt-2">
                                                                <div class="col-md-12 pl-1">
                                                                    <h5 class="bold-text"> Alamat KTP</h5>
                                                                    <p>Desa Ciawigajah Blok Pon rt 002 rw 006</p>
                                                                </div>

                                                                <div class="col-md-4 bl">
                                                                    <b>Provinsi</b>
                                                                    <br>
                                                                    <p class="txt-child">Jawa Barat</p>
                                                                </div>
                                                                <div class="col-md-4 bl-bb">
                                                                    <b>Kota/ Kabupaten</b>
                                                                    <br>
                                                                    <p class="txt-child">Kab. Cirebon</p>
                                                                </div>
                                                                <div class="col-md-4 bl-bb">
                                                                    <b>Kecamatan</b>
                                                                    <br>
                                                                    <p class="txt-child">Beber</p>
                                                                </div>
                                                                <div class="col-md-4 bt-bl" style="display: none;">
                                                                    <b>No. Rumah</b>
                                                                    <br>
                                                                    <p class="txt-child"></p>
                                                                </div>
                                                                <div class="col-md-4 bt-bl">
                                                                    <b>Kode Pos</b>
                                                                    <br>
                                                                    <p class="txt-child">45172</p>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <!-- end alamat -->

                                                        <!-- start pendidikan kerja -->
                                                        <div class="d-flex mb-4 pr-5" style="padding-top:5px;">
                                                            <i class="bi bi-arrow-down-right-square-fill fs-3 me-4 mb-5 "
                                                                style="vertical-align: middle;"></i>
                                                            <div class="row ml-3 mt-2">
                                                                <div class="col-md-12">
                                                                    <h5 class="bold-text"> Pendidikan</h5>
                                                                </div>
                                                                <div class="col-12">
                                                                    <div class="row">
                                                                        <div class="col-md-12 pl-1">
                                                                            <p class="m-0"><b>S1-Perguruan
                                                                                    Tinggi</b></p>
                                                                            <p><b>Universitas Muhammadiyah Cirebon,
                                                                                    Kota: CIREBON</b></p>
                                                                        </div>
                                                                        <div class="col-md-4 bl">
                                                                            <b>Jenis Perguruan Tinggi</b>
                                                                            <br>
                                                                            <p class="txt-child">PTS (Swasta)</p>
                                                                        </div>
                                                                        <div class="col-md-4 bl">
                                                                            <b>Detail Nama Jurusan</b>
                                                                            <br>
                                                                            <p class="txt-child">Teknik Informatika
                                                                            </p>
                                                                        </div>
                                                                        <div class="col-md-4 bl-bb">
                                                                            <b>NIM</b>
                                                                            <br>
                                                                            <p class="txt-child">190511091</p>
                                                                        </div>
                                                                        <div class="col-md-4 bt-bl">
                                                                            <b>IPK</b>
                                                                            <br>
                                                                            <p class="txt-child">3,45 dari 4,00</p>
                                                                        </div>
                                                                        <div class="col-md-4 bt-bl">
                                                                            <b>Status Lulus</b>
                                                                            <br>
                                                                            <p class="txt-child">Lulus</p>
                                                                        </div>
                                                                        <div class="col-md-4 bt-bl">
                                                                            <b>Tanggal Ijazah</b>
                                                                            <br>
                                                                            <p class="txt-child">30 August 2023</p>
                                                                        </div>
                                                                        <div class="col-md-4 bt-bl">
                                                                            <b>Ijazah/ Surat Keterangan Lulus</b>
                                                                            <br>
                                                                            <p class="txt-child"><a class="prev-link"
                                                                                    href="curiculum_vitae/preview_file/preview/RTYwQ0VBNkZCOUY0QjNBOUMzRUUyQTBGRTUyOTQ5QTM5OTFDMzM2RjVFMDkzMzlFQThBMkMwMUFCRDE0MUE2OF9JSkFaQUhfMDA2MjQ1OS5wZGY="
                                                                                    target="_blank">Pratinjau
                                                                                    File</a></p>
                                                                        </div>
                                                                        <div class="col-md-8 bt-bl">
                                                                            <b>Transkrip Nilai/ Nilai Ujian
                                                                                Sekolah</b>
                                                                            <br>
                                                                            <p class="txt-child"><a class="prev-link"
                                                                                    href="curiculum_vitae/preview_file/preview/RTYwQ0VBNkZCOUY0QjNBOUMzRUUyQTBGRTUyOTQ5QTM5OTFDMzM2RjVFMDkzMzlFQThBMkMwMUFCRDE0MUE2OF9UUkFOU0tSSVBfTklMQUlfMDA2MjYxOS5wZGY="
                                                                                    target="_blank">Pratinjau
                                                                                    File</a></p>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>

                                                        </div>
                                                        <!-- end pendidikan kerja -->


                                                        <div class="d-flex mb-4 pr-5" style="padding-top:5px;">
                                                            <i class="bi bi-arrow-down-right-square-fill fs-3 me-4 mb-5 "
                                                                style="vertical-align: middle;"></i>
                                                            <div class="row ml-3 mt-2">
                                                                <div class="col-md-12">
                                                                    <h5 class="bold-text"> Pengalaman Kerja</h5>
                                                                </div>
                                                                <div class="col-12">
                                                                    <div class="row">
                                                                        <div class="col-md-6 bl">
                                                                            <b>Nama Perusahaan</b>
                                                                            <br>
                                                                            <p class="txt-child">PT FREEPORT</p>
                                                                        </div>
                                                                        <div class="col-md-6 bl">
                                                                            <b>Jabatan</b>
                                                                            <br>
                                                                            <p class="txt-child">IT SUPPORT
                                                                            </p>
                                                                        </div>

                                                                        <div class="col-md-6   bt-bl">
                                                                            <b>Tanggal Bekerja</b>
                                                                            <br>
                                                                            <p class="txt-child">3,45 dari 4,00</p>
                                                                        </div>
                                                                        <div class="col-md-6  bt-bl">
                                                                            <b>Status Pegawai</b>
                                                                            <br>
                                                                            <p class="txt-child">Lulus</p>
                                                                        </div>
                                                                        <div class="col-md-12 bt-bl">
                                                                            <b>Peran dan Tanggung Jawab</b>
                                                                            <br>
                                                                            <p class="txt-child">Lulus</p>
                                                                        </div>

                                                                    </div>

                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="d-flex mb-4 pr-5" style="padding-top:5px;">
                                                            <i class="bi bi-arrow-down-right-square-fill fs-3 me-4 mb-5 "
                                                                style="vertical-align: middle;"></i>
                                                            <div class="row ml-3 mt-2">
                                                                <div class="col-md-12">
                                                                    <h5 class="bold-text"> Sertifikat</h5>
                                                                </div>
                                                                <div class="col-12">
                                                                    <div class="row">
                                                                        <div class="col-md-6 bl">
                                                                            <b>Nama Sertifikat</b>
                                                                            <br>
                                                                            <p class="txt-child">PT FREEPORT</p>
                                                                        </div>
                                                                        <div class="col-md-6 bl">
                                                                            <b>Penyelenggara</b>
                                                                            <br>
                                                                            <p class="txt-child">IT SUPPORT
                                                                            </p>
                                                                        </div>

                                                                        <div class="col-md-6   bt-bl">
                                                                            <b>Tahun Sertifikat</b>
                                                                            <br>
                                                                            <p class="txt-child">3,45 dari 4,00</p>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>

                                                        </div>


                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </section>
                    @else
                    @endif
                </div>
            </div>

            {{-- FOOTER --}}
        </div>
    </div>

    @include('componen/footer')
</body>

</html>
