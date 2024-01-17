@extends('layout/master')
@section('konten')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">DATA KARYAWAN KONTRAK</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
						<li class="breadcrumb-item active">Karyawan</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <!-- DataTables Example -->
        <div class="card shadow mb-4">
            <!-- <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">DATA KARYAWAN KONTRAK</h6>
            </div> -->
            <div class="card-body">
                <a href="{{ url('/permanen/tambah') }}" class="btn btn-primary mb-2"> Tambah</a>
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <tr>
                            <th>No</th>
                            <th>SAP</th>
                            <th>Nama Karyawan</th>
                            <th>Tempat Lahir</th>
                            <th>Tanggal Lahir</th>
                            <!-- <th>Agama</th> -->
                            <!-- <th>Pendidikan</th> -->
                            <!-- <th>Jurusan Pendidikan Terakhir</th> -->
                            <th>Level Karyawan</th>
                            <th>Departemen</th>
                            <th>Posisi</th>
                            <th>Status Karyawan</th>
                            <th>Opsi</th>
                        </tr>
                        @php $no = 1 @endphp
                        @foreach($model as $p)
                        <tr>
                            <td>{{ $no }}</td>
                            <td>{{ $p->id_sap }}</td>
                            <td>{{ $p->nama }}</td>
                            <td>{{ $p->tempat_lahir }}</td>
                            <td>{{ $p->tanggal_lahir }}</td>
                            <!-- <td>{{ $p->agama }}</td>
                            <td>{{ $p->pendidikan }}</td>
                            <td>{{ $p->jurusan_pendidikan }}</td> -->
                            <td>{{ $p->level_karyawan }}</td>
                            <td>{{ $p->departemen }}</td>
                            <td>{{ $p->posisi }}</td>
                            <td>{{ $p->status_karyawan }}</td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a href="/permanen/detail/{{ $p->id_sap }}" class="btn btn-secondary ">
                                        <i class='fa fa-address-card'></i> Detail
                                    </a>
                                    <a href="/permanen/edit/{{ $p->id_sap }}" class="btn btn-success ">
                                        <i class='fa fa-edit'></i> Edit
                                    </a>

                                    <a href="/permanen/hapus/{{ $p->id_sap }}" class="btn btn-danger" onclick="return confirm('Apakah anda yakin?')">
                                        <i class='fa fa-trash'></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        @php $no++ @endphp
                        @endforeach
                    </table>

                </div>
            </div>
        </div>
    </section>
</div>
@endsection