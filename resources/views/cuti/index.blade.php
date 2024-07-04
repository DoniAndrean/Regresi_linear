@extends('layout/master')
@section('konten')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">DATA CUTI</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active">Cuti</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">

            <div class="card shadow mb-4">
                <div class="card-body">
                    <a href="{{ url('/cuti/tambah') }}" class="btn btn-info mb-2"> Tambah</a>
                    <a href="{{ url('/cuti/download') }}" class="btn btn-success mb-2"> Download</a>
                    <div class="table-responsive">
                        <table class="table table-bordered" id="example2" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Karyawan</th>
                                    <th>Departemen</th>
                                    <th>Jenis Cuti</th>
                                    <th>Sisa Cuti</th>
                                    <th>Jumlah Cuti</th>
                                    <th>Start Cuti</th>
                                    <th>End Cuti</th>
                                    <th>Alasan Cuti</th>
                                    <th>Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no = 1 @endphp
                                @foreach ($model as $p)
                                    <tr>
                                        <td>{{ $no }}</td>
                                        <td>{{ $p->nama }}</td>
                                        <td>{{ $p->departemen }}</td>
                                        <td>{{ $p->jenis_cuti }}</td>
                                        <td class="text-center">
                                            <span class="btn btn-xs btn-info rounded-circle" style="min-width:20px;">
                                                {{ $p->kuota_cuti }}
                                            </span>
                                        </td>
                                        <td class="text-center">
                                            <span class="btn btn-xs btn-info rounded-circle" style="min-width:20px;">
                                                {{ $p->jumlah_cuti }}
                                            </span>
                                        </td>
                                        <td><span
                                                class="btn btn-xs btn-secondary">{{ date('d-m-Y', strtotime($p->start_cuti)) }}</span>
                                        </td>
                                        <td><span
                                                class="btn btn-xs btn-warning">{{ date('d-m-Y', strtotime($p->end_cuti)) }}</span>
                                        </td>
                                        <td>{{ $p->alasan_cuti }}</td>
                                        <td>
                                            <button type="button" class="btn btn-info btn-xs" data-toggle="modal"
                                                data-target="#myModal{{ $p->id_cuti }}">Detail</button>
                                            <div class="btn-group" role="group" aria-label="Basic example">

                                                @if (Auth::user()->role == 'user')
                                                    <a href="/cuti/edit/{{ $p->id_cuti }}"
                                                        class="btn btn-success btn-xs">
                                                        <i class='fa fa-edit'></i>
                                                    </a>
                                                @endif
                                                @if (Auth::user()->role == 'admin')
                                                    @if ($p->status_cuti == 'Pengajuan')
                                                        <a href="{{ route('cuti.approve', $p->id_cuti) }}"
                                                            class="btn btn-success btn-xs" title="Setujui cuti"
                                                            onclick="return confirm('Apakah anda yakin?')">
                                                            <i class="fa fa-check"></i>
                                                        </a>
                                                    @endif
                                                    <a href="/cuti/hapus/{{ $p->id_cuti }}" class="btn btn-danger btn-xs"
                                                        onclick="return confirm('Apakah anda yakin?')">
                                                        <i class='fa fa-trash'></i>
                                                    </a>
                                                @endif
                                            </div>
                                        </td>
                                    </tr>

                                    <div id="myModal{{ $p->id_cuti }}" class="modal fade" role="dialog">
                                        <div class="modal-dialog">

                                            <!-- Modal content-->
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close"
                                                        data-dismiss="modal">&times;</button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-3">Nama</div>
                                                        <div class="col-9">: {{ $p->nama }}</div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-3">Jenis Cuti</div>
                                                        <div class="col-9">: {{ $p->jenis_cuti }}</div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-3">Jumlah Cuti</div>
                                                        <div class="col-9">: {{ $p->jumlah_cuti }}</div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-3">Jadwal Cuti</div>
                                                        <div class="col-9">:
                                                            {{ date('d-m-Y', strtotime($p->start_cuti)) }} -
                                                            {{ date('d-m-Y', strtotime($p->end_cuti)) }}</div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-3">Alasan Cuti</div>
                                                        <div class="col-9">: {{ $p->alasan_cuti }}</div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-3">Status Cuti</div>
                                                        <div class="col-9">: {{ $p->status_cuti }}
                                                            @if ($p->status_cuti != 'selesai')
                                                                <a href="/cuti/status/{{ $p->id_cuti }}/selesai"
                                                                    class="btn btn-success btn-xs"
                                                                    onclick="return confirm('Apakah anda yakin?')">
                                                                    Selesai
                                                                </a>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default"
                                                        data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @php $no++ @endphp
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
