@extends('siapus.admin_master')
@section('siapus')

<main id="main">
    <!-- ======= Antrean Saya Section ======= -->
    <section id="antreansaya" class="antreansaya">
      <div class="container mt-5" data-aos="fade-up">
        <div class="section-title" style="margin-top: 50px;">
          <h2>Antrean Saya</h2>
        </div>


        @if ($antrean->count() > 0)
        @foreach ($antrean as $item)
            <div class="row d-flex">
          <div class="col-md-10 col-sm-6 justify-content-start"  data-bs-toggle="modal" data-bs-target="#exampleModal1" data-bs-antrean="{{ $item->nomor_antrean }}" data-bs-waktu="{{ Carbon\Carbon::parse($item->created_at)->locale('id')->setTimezone('Asia/Jakarta')->settings(['formatFunction' => 'translatedFormat'])->format('H:i:s') }}" data-bs-hari="{{ Carbon\Carbon::parse($item->created_at)->locale('id')->settings(['formatFunction' => 'translatedFormat'])->format('l, d F Y') }}" data-bs-poli="{{ $item->polis->nama_poli }}" data-bs-id_poli="{{ $item->polis->id_poli }}" data-bs-puskesmas="{{ $item->puskesmas->nama_puskesmas }}" data-bs-id_puskesmas="{{ $item->puskesmas->id_puskesmas }}" data-bs-pasien="{{ $item->pasiens->nama_pasien }}">
            <table width="100%" border="0">
              <tbody>
                <tr>
                  <td valign="top">
                    <table border="0" width="100%" class="table">
                      <tbody>
                        <tr>
                          <td width="25%" valign="top" class="textt">Nama</td>
                          <td width="2%">:</td>
                          <td style="font-weight:bold">{{$item->pasiens->nama_pasien}}
                          {{-- <?php
                                $nama=$item->pasiens->nama_pasien;
                                $jumlah_sensor=20;
                                $setelah_angka_ke=12;

                                $sensor = mb_substr($nama, $setelah_angka_ke, $jumlah_sensor);

                                $nama2=explode($sensor,$nama);

                                $nama_new=$nama2[0]."**********".$nama2[1];

                                echo $nama_new;
                                ?> --}}
                          </td>
                        </tr>
                        <tr>
                          <td class="textt">NIK</td>
                          <td>:</td>
                          <td>
                              <?php
                                $nik=$item->pasiens->nik;
                                $jumlah_sensor=8;
                                $setelah_angka_ke=4;

                                $sensor = mb_substr($nik, $setelah_angka_ke, $jumlah_sensor);

                                $nik2=explode($sensor,$nik);

                                $nik_new=$nik2[0]."********".$nik2[1];

                                echo $nik_new;
                                ?>
                          </td>
                        </tr>
                        <tr>
                          <td class="textt">Poli</td>
                          <td>:</td>
                          <td>{{$item->polis->nama_poli}}</td>
                        </tr>
                        <tr>
                          <td class="textt">Puskesmas</td>
                          <td>:</td>
                          <td>{{$item->puskesmas->nama_puskesmas}}</td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          @if($item->status == "Menunggu")
          <div class="col-md-2 mb-5 col-sm-6 order-last order-md-last d-flex align-items-center justify-content-center">
            <button class="btn btn-warning">Menunggu</button>
          </div>
          @elseif($item->status == "Dilayani")
          <div class="col-md-2 mb-5 col-sm-6 order-last order-md-last d-flex align-items-center justify-content-center">
            <button class="btn btn-primary">Dalam Pelayanan</button>
          </div>
          @elseif($item->status == "Selesai")
          <div class="col-md-2 mb-5 col-sm-6 order-last order-md-last d-flex align-items-center justify-content-center">
            <button class="btn btn-success">Selesai</button>
          </div>
          @elseif($item->status == "Batal")
          <div class="col-md-2 mb-5 col-sm-6 order-last order-md-last d-flex align-items-center justify-content-center">
            <button class="btn btn-danger">Batal</button>
          </div>
          @endif

          <!-- </div> -->
        </div>
        @endforeach
        @else
        <div class="d-flex justify-content-center">
            <img class="image-antreans" src="{{asset('siapus/img/antrean-1.png') }}" alt="">
        </div>
                    <h5 class="text-center">Anda Belum Melakukan Pendaftaran Antrean</h5>
        @endif

        <!-- Modal 1-->
        <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div class="row" style="border-color: transparent;">
                  <table border="0" width="100%" id="popupTiket">
                    <tbody>
                      <tr>
                        <td width="25%" valign="middle" align="center"><img class="img-popupku img-fluid" src="{{asset('siapus/img/pop-upantreansaya/logo_bwi.png') }}" alt=""></td>
                        <td width="50%" valign="middle" align="center"><strong><span class="font-text" id="nama_pus"></span></strong></td>
                        <td width="25%" valign="middle" align="center"><img class="img-popupku img-fluid" src="{{asset('siapus/img/pop-upantreansaya/logo_pus.png') }}" alt="" ></td>
                      </tr>
                    </tbody>
                  </table>
                </div>

                <div class="row d-flex" style="border-color: transparent; margin-top: -50px;">
                  <div class="col-md-6 col-sm-6 d-flex align-items-center justify-content-center">
                    <h5 class="modal-title" id="exampleModalLabel" style="font-size: 16px;"><strong id="hari"></strong></h5>
                  </div>
                  <div class="col-md-6 col-sm-6 d-flex align-items-center justify-content-center">
                    <h5 class="modal-title" id="exampleModalLabel" style="font-size: 16px;"><strong>Jam, </strong><strong id="waktu"></strong></h5>
                </div>
                </div>
                <div class="col d-flex align-items-center justify-content-center" style="margin-top: -30px;">
                  <h5 class="modal-title" id="exampleModalLabel" style="font-size: 20px;"><strong>Nomor Antrean
                      Anda</strong></h5>
                </div>
                <div class="col d-flex align-items-center justify-content-center">
                  <h1 class="modal-title" id="exampleModalLabel" style="font-size: 52px;"><strong id="no_antrean"></strong></h1>
                </div>

              </div>
              <div class="modal-footer d-flex align-items-center justify-content-center">

                <div class="col-12 d-flex align-items-center justify-content-center">
                  <h5 class="modal-title" id="exampleModalLabel"><strong id="nama_pasien"></strong></h5>
                </div>
                <div class="col-12 d-flex align-items-center justify-content-center">
                  <h5 class="modal-title" id="exampleModalLabel"><strong id="nama_poli"></strong></h5>
                </div>
                <div class="col-12 d-flex align-items-center justify-content-center">
                  <h5 class="modal-title" id="exampleModalLabel">Antrean Saat Ini : <strong id="saat_ini"></strong></h5>
                </div>

                <div class="col-12 d-flex align-items-center justify-content-center">
                  <h5 class="modal-title" id="exampleModalLabel">Antrean Selanjutnya : <strong id="lanjut"></strong></h5>
                  </div>
                </div>
            </div>
          </div>
        </div>


      </div>
      </div>
    </section>
    <!-- End Antrean Saya Section -->
  </main>
  <!-- End #main -->

  <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
  <script>
    document.addEventListener("DOMContentLoaded", x => {
      const modal = document.getElementById('exampleModal1');
      const tabel = document.getElementById('popupTiket');
      modal.addEventListener('show.bs.modal', evt => {
        let activeBtn = event.relatedTarget;
        const poli = activeBtn.getAttribute('data-bs-id_poli');
        const puskesmas = activeBtn.getAttribute('data-bs-id_puskesmas');
        $.ajax({
          url: "/saat_ini/"+poli+"/"+puskesmas,
          type: 'GET',
            dataType: "json",
            complete: function(res) {
              const data = res.responseJSON;
              modal.querySelector('#saat_ini').textContent = data[0].nomor_antrean;
            }
        })
         $.ajax({
          url: "/lanjut/"+poli+"/"+puskesmas,
          type: 'GET',
            dataType: "json",
            complete: function(res) {
              const data = res.responseJSON;
              modal.querySelector('#lanjut').textContent = data[0].nomor_antrean;
            }
        })
        modal.querySelector('#nama_pus').textContent = activeBtn.getAttribute('data-bs-puskesmas');
        modal.querySelector('#no_antrean').textContent = activeBtn.getAttribute('data-bs-antrean');
        modal.querySelector('#nama_pasien').textContent = 'Nama : ' + activeBtn.getAttribute('data-bs-pasien');
        modal.querySelector('#nama_poli').textContent = activeBtn.getAttribute('data-bs-poli');
        modal.querySelector('#hari').textContent = activeBtn.getAttribute('data-bs-hari');
        modal.querySelector('#waktu').textContent = activeBtn.getAttribute('data-bs-waktu');

    })
  });

  </script>


@endsection
