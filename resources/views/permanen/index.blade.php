@extends('layout/master')
@section('konten')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Profil</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
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
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">DATA KARYAWAN</h6>
            </div>
            <div class="card-body">
                <a href="{{ url('/karyawan/tambah') }}" class="btn btn-primary mb-2"> Tambah</a>
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <tr>
                            <th>No</th>
                            <th>SAP</th>
                            <th>Nama Karyawan</th>
                            <th>Opsi</th>
                        </tr>
                        @php $no = 1 @endphp
                        @foreach($model as $p)
                        <tr>
                            <td>{{ $no }}</td>
                            <td>{{ $p->id_sap }}</td>
                            <td>{{ $p->nama }}</td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a href="/pegawai/edit/{{ $p->id_sap }}" class="btn btn-success ">
                                        <i class='fa fa-pencil'></i> Edit
                                    </a>

                                    <a href="/pegawai/hapus/{{ $p->id_sap }}" class="btn btn-danger" onclick="return confirm('Apakah anda yakin?')">
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