@extends('layout/master')
@section('konten')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">DATA KANDIDAT</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active">KANDIDAT</li>
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
                    <a href="{{ url('/kandidat/tambah') }}" class="btn btn-info mb-2"> Tambah</a>
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <tr>
                                <th>No</th>
                                <th>Posisi</th>
                                <th>Informasi Lowongan</th>
                                <th>Nama</th>
                                <th>Umur</th>
                                <th>Tempat Lahir</th>
                                <th>Tanggal Lahir</th>
                                <th>Opsi</th>
                            </tr>
                            @php $no = 1 @endphp
                            @foreach ($model as $p)
                                <tr>
                                    <td>{{ $no }}</td>
                                    <td>{{ $p->posisi }}</td>
                                    <td>{{ $p->informasi_lowongan }}</td>
                                    <td>{{ $p->nama }}</td>
                                    <td>{{ $p->umur }}</td>
                                    <td>{{ $p->tempat_lahir }}</td>
                                    <td>{{ $p->tanggal_lahir }}</td>
                                    <td>
                                        <!-- <div class="btn-group" role="group" aria-label="Basic example">
                                                    -->
                                        <a href="/kandidat/personal-data/{{ $p->id_kandidat }}" class="btn btn-info ">
                                            <i class='fa fa-edit'></i> Detail
                                        </a>
                                        <a href="/kandidat/edit/{{ $p->id_kandidat }}" class="btn btn-info ">
                                            <i class='fa fa-edit'></i> Interview
                                        </a>

                                        <a href="/kandidat/hapus/{{ $p->id_kandidat }}" class="btn btn-danger"
                                            onclick="return confirm('Apakah anda yakin?')">
                                            <i class='fa fa-trash'></i>
                                        </a>
                                        <a href="kandidat/rekap/{{ $p->id_kandidat }}" class="btn btn-warning">rekap</a>

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
