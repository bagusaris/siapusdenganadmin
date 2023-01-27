@extends('siapus.admin_master')
@section('siapus')

      <main id="main">

        <!-- ======= Featured Services Section ======= -->
        <section id="featured-services" class="featured-services">
            <div class="container" data-aos="fade-up">
                <div class="section-title" style="margin-top: 120px;">
                    <h2>Informasi Poli</h2>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                            <!-- <div class="icon"><i class="fas fa-heartbeat"></i></div> -->
                            <!-- <div class="icon"><img src="./assets/img/poli/1.png" class="card-img" alt=".."><b><a href=""
                                        style="margin-left: 25px; color: black;">POLI UMUM</a></b></i></div> -->
                                        <div class="icon"><img src="{{asset('siapus/img/poli/UMUM.png') }}" class="card-img" alt=".."><b></b></i></div>
                            <h4 class="title"><a href="">POLI UMUM</a></h4>
                            <p class="description">Poli umum adalah jenis layanan di Puskesmas yang memberikan
                                pelayanan kedokteran berupa pemeriksaan kesehatan.</p>
                            <a href="#popup" class="card-link">Selengkapnya &raquo;</a>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                            <!-- <div class="icon"><i class="fas fa-pills"></i></div> -->
                            <div class="icon"><img src="{{asset('siapus/img/poli/KIA.png') }}" class="card-img" alt=".."><b></b></i></div>
                            <h4 class="title"><a href="">POLI KIA</a></h4>
                            <p class="description">Poli KIA adalah jenis layanan di Puskesmas yang memberikan
                                pelayanan ibu hamil, ibu bersalin, imunisasi</p>
                            <a href="#popupkia" class="card-link">Selengkapnya &raquo;</a>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
                            <!-- <div class="icon"><i class="fas fa-thermometer"></i></div> -->
                            <div class="icon"><img src="{{asset('siapus/img/poli/GIGI.png') }}" class="card-img" alt=".."><b></b></i></div>
                            <h4 class="title"><a href="">POLI GIGI</a></h4>
                            <p class="description">Poli Gigi adalah jenis layanan di Puskesmas yang memberikan
                                pelayanan seputar kesehatan mulut dan gigi</p>
                            <a href="#popupgigi" class="card-link">Selengkapnya &raquo;</a>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Featured Services Section -->
        <div class="popup" id="popup">
            <div class="popup-content">
                    <div class="popup-header">
                        <h2><b>Poli Umum</b></h2>
                        <a href="#" class="popup-close">&times;</a>
                    </div>
                    <div class="popup-img">
                        <img src="{{asset('siapus/img/poli/UMUM.png') }}" alt="">
                    </div>
                    <div class="popup-text">
                        <p>Poli umum merupakan salah satu dari jenis layanan di Puskesmas yang memberikan pelayanan
                            kedokteran berupa pemeriksaan kesehatan, pengobatan dan penyuluhan kepada pasien atau
                            masyarakat, serta meningkatkan pengetahuan dan kesadaran masyarakat dalam bidang kesehatan.
                        </p>
                    </div>
                </div>
            </div>
            </div>

            <div class="popupkia" id="popupkia">
                <div class="popup-content">
                        <div class="popup-header">
                            <h2><b>Poli KIA</b></h2>
                            <a href="#" class="popup-close">&times;</a>
                        </div>
                        <div class="popup-img">
                            <img src="{{asset('siapus/img/poli/KIA.png') }}" alt="">
                        </div>
                        <div class="popup-text">
                            <p>Poli KIA adalah jenis layanan di Puskesmas yang memberikan pelayanan ibu hamil, ibu bersalin, imunisasi, pengobatan bayi dan balita, kesehatan reproduksi remaja termasuk calon pengantin, pelayanan pil KB dan implan.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="popupgigi" id="popupgigi">
                <div class="popup-content">
                        <div class="popup-header">
                            <h2><b>Poli Gigi</b></h2>
                            <a href="#" class="popup-close">&times;</a>
                        </div>
                        <div class="popup-img">
                            <img src="{{asset('siapus/img/poli/GIGI.png') }}" alt="">
                        </div>
                        <div class="popup-text">
                            <p>Poli Gigi adalah jenis layanan di Puskesmas yang memberikan pelayanan seputar kesehatan mulut dan gigi berupa pemeriksaan kesehatan gigi dan mulut, pengobatan dan pemberian tindakan medis dasar kesehatan gigi dan mulut seperti penambalan gigi, pencabutan gigi dan pembersihan karang gigi.
                            </p>
                        </div>
                    </div>
                </div>
            </div>


        <!-- ======= Panduan Pendaftaran Section ======= -->
        <section id="panduanpendaftaran" class="panduanpendaftaran">
            <div class="container" data-aos="fade-up">
                <div class="section-title" style="margin-top: 120px;">
                    <h2>Panduan Pendaftaran</h2>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                            <!-- <div class="icon"><i class="fas fa-heartbeat"></i></div> -->
                            <!-- <div class="icon"><img src="./assets/img/poli/1.png" class="card-img" alt=".."><b><a href=""
                                        style="margin-left: 25px; color: black;">POLI UMUM</a></b></i></div> -->
                                        <div class="icon"><img src="{{asset('./siapus/img/panduanpendaftaran/1.png') }}" class="card-img" alt=".."><b></b></i></div>
                            <!-- <h4 class="title"><a href="">POLI UMUM</a></h4> -->
                            <p class="description">Setelah anda masuk halaman utama, pilih menu pendaftaran antrean</p>
                            <!-- <a href="#" class="card-link">Selengkapnya &raquo;</a> -->
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                            <!-- <div class="icon"><i class="fas fa-pills"></i></div> -->
                            <div class="icon"><img src="{{asset('./siapus/img/panduanpendaftaran/2.png') }}" class="card-img" alt=".."><b></b></i></div>
                            <!-- <h4 class="title"><a href="">POLI KIA</a></h4> -->
                            <p class="description">Isi formulir data diri lalu ok maka data anda akan muncul pada tiket</p>
                            <!-- <a href="#" class="card-link">Selengkapnya &raquo;</a> -->
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
                            <!-- <div class="icon"><i class="fas fa-thermometer"></i></div> -->
                            <div class="icon"><img src="{{asset('./siapus/img/panduanpendaftaran/3.png') }}" class="card-img" alt=".."><b></b></i></div>
                            <!-- <h4 class="title"><a href="">POLI GIGI</a></h4> -->
                            <p class="description">Tiket pendaftaran dapat di cek pada menu “Antrean Saya” lalu klik detail untuk melihat nomor antrian</p>
                            <!-- <a href="#" class="card-link">Selengkapnya &raquo;</a> -->
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Panduan Pendaftaran Section -->
    </main>

@endsection