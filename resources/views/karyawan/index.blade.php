@extends('layout/master')
@section('konten')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">DATA KARYAWAN {{ $title }}</h1>
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
                <div class="card-body">
                    @if (Auth::user()->role === 'admin')
                        <div class="d-flex justify-content-between mb-2">
                            <a href="{{ url('/karyawan/tambah') }}" class="btn btn-info">Tambah</a>
                            <a href="{{ route('user.generate') }}" class="btn btn-success">Generate User</a>
                        </div>
                    @endif
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Join Date</th>
                                <th>SAP</th>
                                <th>NIK</th>
                                <th>Departemen</th>
                                <th>Posisi</th>
                                <th>Level Karyawan</th>
                                <th>Pendidikan</th>
                                <th>Opsi</th>
                            </tr>
                            @php $no = 1 @endphp
                            @foreach ($model as $p)
                                <tr>
                                    <td>{{ $no }}</td>
                                    <td>{{ $p->nama }}</td>
                                    <td>{{ $p->join_date }}</td>
                                    <td>{{ $p->id_sap }}</td>

                                    <td>{{ $p->id_nik }}</td>

                                    <td>{{ $p->departemen }}</td>
                                    <td>{{ $p->posisi }}</td>
                                    <td>{{ $p->level_karyawan }}</td>
                                    <td>{{ $p->pendidikan }}</td>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <a href="/karyawan/detail/{{ $p->id_sap }}" class="btn btn-secondary ">
                                                <i class='fa fa-address-card'></i> Detail
                                            </a>
                                            <a href="/karyawan/edit/{{ $p->id_sap }}" class="btn btn-success ">
                                                <i class='fa fa-edit'></i> Edit
                                            </a>

                                            <a href="/karyawan/hapus/{{ $p->id_sap }}" class="btn btn-danger"
                                                onclick="return confirm('Apakah anda yakin?')">
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
