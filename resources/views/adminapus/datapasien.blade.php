@extends('adminapus.admin_master')
@section('adminapus')

<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Pasien</h1>
    </div>

    <div class="row">
        <div class="col-lg-12 mb-4">
            <!-- Simple Tables -->
            <div class="card">
                <div class="table-responsive">
                    <table class="table table-sm align-items-center table-flush text-center">
                        <thead class="thead-light">
                            <tr>
                                <th>No</th>
                                <th>NIK</th>
                                <th>Nama Pasien</th>
                                <th>Alamat</th>
                                <th>Puskesmas</th>
                                <th>Poli</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>3510131456780009</td>
                                <td>Rokib</td>
                                <td>Dsn : Tegal Wero, Rt/Rw : 002/001</td>
                                <td>Puskesmas Sobo</td>
                                <td>Poli Umum</td>
                                <td>
                                    <h5><span class="badge badge-warning">Menunggu Validasi</span></h5>
                                </td>
                                <td><button type="button" class="btn btn-outline-success btn-sm">&#9989; </button>
                                    <button type="button" class="btn btn-outline-danger btn-sm">&#10060;</button>
                                </td>
                            </tr>

                            <tr>
                                <td>2</td>
                                <td>3510131456780009</td>
                                <td>Rokib</td>
                                <td>Jalan Sawo Indah Blok Semangka</td>
                                <td>Puskesmas Sobo</td>
                                <td>Poli Umum</td>
                                <td>
                                    <h5><span class="badge badge-danger">Batal</span></h5>
                                </td>
                                <td><button type="button" class="btn btn-outline-success btn-sm">&#9989; </button>
                                    <button type="button" class="btn btn-outline-danger btn-sm">&#10060;</button>
                                </td>
                            </tr>

                            <tr>
                                <td>3</td>
                                <td>3510131456780009</td>
                                <td>Rokib</td>
                                <td>Sobo Barat</td>
                                <td>Puskesmas Sobo</td>
                                <td>Poli Umum</td>
                                <td>
                                    <h5><span class="badge badge-success">Selesai Validasi</span></h5>
                                </td>
                                <td><button type="button" class="btn btn-outline-success btn-sm">&#9989; </button>
                                    <button type="button" class="btn btn-outline-danger btn-sm">&#10060;</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="card-footer"></div>
            </div>
        </div>
    </div>
    <!--Row-->

</div>
<!---Container Fluid-->
</div>

@endsection