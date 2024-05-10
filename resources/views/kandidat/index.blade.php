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
                                    <td>{{ $loop->iteration + 1 }}</td>
                                    <td>{{ $p->posisi }}</td>
                                    <td>{{ $p->informasi_lowongan }}</td>
                                    <td>{{ $p->nama }}</td>
                                    <td>{{ $p->umur }}</td>
                                    <td>{{ $p->tempat_lahir }}</td>
                                    <td>{{ $p->tanggal_lahir }}</td>
                                    <td>
                                        <a href="/kandidat/personal-data/{{ $p->id_kandidat }}" class="btn btn-info "
                                            title="Detail">
                                            <i class='fa fa-eye'></i>
                                        </a>

                                        <a href="/kandidat/hapus/{{ $p->id_kandidat }}" class="btn btn-danger"
                                            title="Hapus" onclick="return confirm('Apakah anda yakin?')">
                                            <i class='fa fa-trash'></i>
                                        </a>
                                        <a href="kandidat/rekap/{{ $p->id_kandidat }}" class="btn btn-warning"
                                            title="Rekap">
                                            <i class='fa fa-file'></i>
                                        </a>
                                        @if ($p->telah_interview)
                                            <a href="#" class="btn btn-primary" title="Hasil Interview">
                                                Lihat Hasil Interview
                                            </a>
                                        @else
                                            <a href="{{ route('interview', encrypt($p->id_kandidat)) }}"
                                                class="btn btn-success" title="Interview">
                                                Interview
                                            </a>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </table>

                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
