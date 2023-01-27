@extends('siapus.admin_master')
@section('siapus')
  <main id="main">
    <!-- ======= Hero Section ======= -->
    <section id="beranda">
      <section id="hero">
        <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">
          <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

          <div class="carousel-inner" role="listbox">
            <!-- Slide 1 -->
            <div class="carousel-item active" style="background-image: url({{asset('siapus/img/slide/slide-1.jpg') }})">
              <div class="container">
                <h2>Selamat Datang di <span>SI APUS</span></h2>
                <p>SI APUS merupakan Sistem Antrean Puskesmas Banyuwangi</p>
                <p>DENGAN SI APUS KE PUSKESMAS JADI MULUS</p>
                <a href="{{route('pasiens.create')}}" class="btn-get-started scrollto">Daftar Sekarang</a>
              </div>
            </div>

            <!-- Slide 2 -->
            <div class="carousel-item" style="background-image: url({{asset('siapus/img/slide/slide-2.jpg') }})">
              <div class="container">
                <h2>Selamat Datang di <span>SI APUS</span></h2>
                <p>SI APUS merupakan Sistem Antrean Puskesmas Banyuwangi</p>
                <p>DENGAN SI APUS KE PUSKESMAS JADI MULUS</p>
                <a href="{{route('pasiens.create')}}" class="btn-get-started scrollto">Daftar Sekarang</a>
              </div>
            </div>

            <!-- Slide 3 -->
            <div class="carousel-item" style="background-image: url({{asset('siapus/img/slide/slide-0.jpg') }})">
              <div class="container">
                <h2>Selamat Datang di <span>SI APUS</span></h2>
                <p>SI APUS merupakan Sistem Antrean Puskesmas Banyuwangi</p>
                <p>DENGAN SI APUS KE PUSKESMAS JADI MULUS</p>
                <a href="{{route('pasiens.create')}}" class="btn-get-started scrollto">Daftar Sekarang</a>
              </div>
            </div>
          </div>

          <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
          </a>

          <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
          </a>
        </div>
      </section>
      <!-- ======= infoPus Section ======= -->
      {{-- <section id="infoPus" class="infoPus">
        <div class="container-fluid mt-5" data-aos="fade-up">
          <div class="section-title">
            <h2>Pencarian Puskesmas</h2>
          </div>
          <div class="row g-5">
            <div class="row d-flex">

              <div class="col-md-6 col-sm-6 justify-content-start">

                <div class="card">

                  <div class="input-box">
                    <input type="text" class="form-control" placeholder="Cari Puskesmas">
                    <i class="fa fa-search"></i>
                  </div>
                  <div class="list border-bottom">
                    <div class="d-flex flex-column ml-3">
                      <span>Puskesmas Sobo</span>
                    </div>
                  </div>
                  <div class="list border-bottom">

                    <div class="d-flex flex-column ml-3">
                      <span>Puskesmas Jajag</span>
                    </div>
                  </div>
                  <div class="list border-bottom">

                    <div class="d-flex flex-column ml-3">
                      <span>Puskesmas Badean</span>
                    </div>
                  </div>
                  <div class="list">
                    <div class="d-flex flex-column ml-3">
                      <span>Puskesmas Singonjuruh</span>
                    </div>
                  </div>

                </div>

              </div>
              <div
                class="col-md-6 mb-5 col-sm-6 order-first order-md-last d-flex align-items-center justify-content-center">
                <div class="img">
                  <img src="{{asset('siapus/img/informasipuskesmas/1.png') }}" alt="" class="img-fluid" />
                </div>
              </div>
            </div>
          </div>
        </div>
        </div>
      </section> --}}
      <!-- End infoPus Us Section -->

      <!-- ======= infoPus Section ======= -->
      {{-- <section id="infoPus" class="infoPus">
        <div class="container-fluid container-lg mt-5" data-aos="fade-up">
          <div class="section-title">
            <h2>Pencarian Puskesmas</h2>
          </div>
          <div class="row g-5">
            <div class="row d-flex">

              <div class="col-md-6 col-sm-6 justify-content-start" style="margin-top:90px">

                <div class="card">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"> <i class="fa fa-search"></i></i></span>
                    </div>
                    <div class="form-control">
                      <!-- <label>Cari Nama Ibu Kota Provinsi:</label> -->
                      <div>
                        <select name="search-puskesmas" class="selectpicker form-control" data-live-search="true">
                          <option>Cari Puskesmas</option>
                          <option>Puskesmas Sobo</option>
                          <option>Puskesmas Jajag</option>
                          <option>Puskesmas Badean</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div
                class="col-md-6 mb-5 col-sm-6 order-first order-md-last d-flex align-items-center justify-content-center">
                <div class="img">
                  <img src="{{asset('siapus/img/informasipuskesmas/1.png') }}" alt="" class="img-fluid" />
                </div>
              </div>
            </div>
          </div>
        </div>
        </div>
        </div>
        </div>
      </section> --}}
      <!-- End infoPus Us Section -->

      <!-- ======= Puskesmas Terpilih Section ======= -->
      {{-- <section id="aboutPus" class="aboutPus">
        <div class="container" data-aos="fade-up">
          <div class="section-title">
            <h2>Puskesmas Badean</h2>
          </div>
          <div class="row d-flex align-items-center justify-content-center">
            <div class="image col-lg-6" style="background-image: url('{{asset('siapus/img/aboutPus.png') }}')" data-aos="zoom-in">
            </div>
            <div class="col-lg-4 order-2 order-lg-1 mx-5" data-aos="fade-right">
              <div class="icon-box mt-5 mt-lg-0">
                <i class="bi bi-geo-alt"></i>
                <h4>Alamat</h4>
                <p>
                  Jl Raya Badean No 74 Badean Kec. Blimbingsari - Banyuwangi,
                  68461
                </p>
              </div>
              <div class="icon-box mt-5">
                <i class="bi bi-telephone"></i>
                <h4>Nomor Handphone</h4>
                <p>0333-630987 / 081259753040</p>
              </div>
              <div class="icon-box mt-5">
                <i class="bi bi-envelope"></i>
                <h4>Email</h4>
                <p>Pkm_Badean@yahoo.co.id</p>
              </div>
            </div>
          </div>
        </div>
      </section> --}}

      <section id="aboutPus" class="aboutPus">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Pencarian Puskesmas</h2>
                </div>
                <div class="row d-flex align-items-center justify-content-center">
                    <div class="col-md-6 col-sm-6 justify-content-start">
                    
                        <div class="card">
                         <img class="image-searchpus" src="{{asset('siapus/img/doctor-1.png') }}" alt="">
                            <label for="exampleFormControlInput1" class="mb-2 title-search">Silahkan Pilih
                                Puskesmas Yang Dituju</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"> <i class="fa fa-search"></i></i></span>
                                </div>
                                <div class="form-control">
                                    <div>
                                        <select name="id_puskesmas" id="id_puskesmas" class="selectpicker form-control"
                                            data-live-search="true">
                                            <option>Cari Puskesmas</option>
                                          @foreach ($puskesmas as $pusk)
                                                    <option value="{{ $pusk->id_puskesmas }}" > {{ $pusk->nama_puskesmas }} </option>
                                                @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-12 order-2 order-lg-1 mx-5" data-aos="fade-right">
                    <h3 id="nama_puskesmas">Dinas Kesehatan Banyuwangi</h3>
                    <div class="image"  
                        data-aos="zoom-in">
                        <img id="gambar" src="{{ asset('siapus/img/dinkes.jpg') }}" >
                    </div>
                        <div class="icon-box mt-5 mt-lg-0">
                            <i class="bi bi-geo-alt"></i>
                            <h4>Alamat</h4>
                            <p id="alamat_puskesmas">
                                 Jl. Letkol Istiqlah No.42, Singonegaran, Kec. Banyuwangi, Kab. Banyuwangi.
                            </p>
                        </div>
                        <div class="icon-box mt-5">
                            <i class="bi bi-telephone"></i>
                            <h4>Nomor Telepon</h4>
                            <p id="telp_puskesmas">(0333) 424794</p>
                        </div>
                        <div class="icon-box mt-5">
                            <i class="bi bi-envelope"></i>
                            <h4>Email</h4>
                            <p id="email_puskesmas">dinkesbanyuwangi@banyuwangikab.co.id</p>
                        </div>
                        <div class="icon-box mt-5">
                            <i class="bi bi-clock"></i>
                            <h4>Jam Kerja</h4>
                            <p id="jam_kerja">Senin - Jumat : 08.00 - 15.00</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

      <!-- End Puskesmas Terpilih Section -->

      <!-- ======= Informasi Nomor Antrean Section ======= -->
      <section id="infonomorantrean" class="infonomorantrean">
        <div class="container" data-aos="fade-up">
          <div class="section-title">
            <h2>Informasi Nomor Antrean</h2>
          </div>
          <div class="row no-gutters d-flex align-items-center justify-content-center" id="poli">
            
          </div>
        </div>
      </section>
      <!-- Informasi Nomor Antrean Section -->
    </section>
  </main>
  <!-- End #main -->

  <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
  <script>
    $( "select" ) .change(function () {   
      const container = document.getElementById('poli');

      container.replaceChildren();
      
      var selPus = document.getElementById("id_puskesmas").value
      $.get("/puskesmas/index", (res) => {
        
        res.data.forEach((item, index) => {
          if(selPus==item.id_puskesmas){
            document.getElementById("gambar").src='/siapus/img/'+ item.foto_puskesmas;
            document.getElementById("nama_puskesmas").innerHTML = item.nama_puskesmas;
            document.getElementById("alamat_puskesmas").innerHTML = item.alamat_puskesmas;
            document.getElementById("telp_puskesmas").innerHTML = item.telp_puskesmas;
            document.getElementById("email_puskesmas").innerHTML = item.email_puskesmas;
            document.getElementById("jam_kerja").innerHTML = item.jam_kerja;
            const temp = {};
            for (const age of item.antrean) {
              temp[age.id_poli] = true;
            }

            const unique = [];
            for (const age in temp) {
              unique.push(age);
            }
            unique.forEach((data_antrean,index_antrean)=>{
              // console.log(data_antrean);
              item.poli.forEach((data_poli, index_poli) => {
                console.log(data_poli.logo_poli) 
                if(data_poli.id_poli==data_antrean){
                    
                    var array= item.antrean.filter(function(item_poli){
                                if ((item_poli.id_poli == data_poli.id_poli)&&(item_poli.id_puskesmas==item.id_puskesmas)) {
                                  return true;
                                } else {
                                  return false;
                                }
                              }).length
                           
                    $('#poli').append('<div class="col-lg-3 col-md-3 d-md-flex align-items-md-stretch mb-5" style="margin-left:50px"><div class="count-box"><img class="imginfoantrean mx-auto" src="siapus/img/poli/'+ data_poli.logo_poli+ '" alt="" /><span data-purecounter-start="0" data-purecounter-end="18" data-purecounter-duration="1" class="purecounter d-flex align-items-center justify-content-center" >'+array+'</span><p class="namapoli" style="font-size: 20px"><strong >'+data_poli.nama_poli+'</strong></p><div class="col-md-12 col-sm-6 order-first order-md-last d-flex align-items-center justify-content-center"><a href="{{route('pasiens.create')}}" class="btn btn-get-started scrollto">Daftar Sekarang</a></div></div></div>')
                  }
              })
            })
            
          }
         })
    });
})
  </script>
 
  @endsection
  