@extends('layout.master')

@section('konten')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Data Karyawan Kontrak</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Karyawan</a></li>
                            <li class="breadcrumb-item active">Karyawan Kontrak</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>

        <!-- Main content -->
        <section class="content">
            <script src="https://cdn.ckeditor.com/ckeditor5/35.1.0/classic/ckeditor.js"></script>
            <h4>Detail</h4>

            <a href="/karyawan" class="btn btn-default"> Kembali</a>

            <br />
            <br />

            <form action="/karyawan/store" method="POST" enctype="multipart/form-data"
                style="background: #FFFFFF;border-radius:20px;" class="p-4">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-12 col-md-4 py-4" style="background:#c3c5c4;">
                        {{-- <img src="https://i.pinimg.com/564x/8d/be/20/8dbe2091b0bbee50cf55fac6bf58f4ab.jpg" width="100%"> --}}
                        {{-- <img src="{{ asset('storage/' . $model->foto) }}" alt="Foto Karyawan"> --}}
                        <div class="photo-profile mx-auto"
                            style="background-image: url('{{ asset('storage/' . $model->foto) }}')">

                        </div>
                        <div class="col-12">
                            <div class="row mb-3">
                                <div class="col-md-12 text-center">
                                    <h1>{{ $model->nama }}</h1>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-4">Join Date</div>
                                <div class="col-md-8">
                                    : {{ $model->join_date }}
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-4">NIK</div>
                                <div class="col-md-8">
                                    : {{ $model->id_nik }}
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-4">SAP</div>
                                <div class="col-md-8">
                                    : {{ $model->id_sap }}
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-4">No ID Badge</div>
                                <div class="col-md-8">
                                    : {{ $model->id_badge }}
                                </div>
                            </div>
                            <div class="row mb-3 text-center">
                                <div class="col-md-12">Status Karyawan</div>
                                <div class="col-md-12">
                                    {{ $model->status_karyawan }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <h4>DATA PRIBADI</h4>
                        <div class="row mb-3">
                            <div class="col-md-4">No KTP</div>
                            <div class="col-md-8">
                                : {{ $model->no_ktp }}
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">Tempat Lahir</div>
                            <div class="col-md-8">
                                : {{ $model->tempat_lahir }}
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">Tanggal Lahir</div>
                            <div class="col-md-8">
                                : {{ $model->tanggal_lahir }}
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">Agama</div>
                            <div class="col-md-8">
                                : {{ $model->agama }}
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">Jenis Kelamin</div>
                            <div class="col-md-8">
                                : {{ $model->jenis_kelamin }}
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">Suku</div>
                            <div class="col-md-8">
                                : {{ $model->suku }}
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">Status Perkawinan</div>
                            <div class="col-md-8">
                                : {{ $model->status_kawin }}
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">Jumlah Tanggungan</div>
                            <div class="col-md-8">
                                : {{ $model->jmlh_tanggung }}
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">Kelas BPJS</div>
                            <div class="col-md-8">
                                : {{ $model->kelas_bpjs }}
                            </div>
                        </div>

                        <h4>PENGALAMAN</h4>
                        <div class="row mb-3">
                            <div class="col-md-4">Level Karyawan</div>
                            <div class="col-md-8">
                                : {{ $model->level_karyawan }}
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">Departemen</div>
                            <div class="col-md-8">
                                : {{ $model->departemen }}
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">Posisi</div>
                            <div class="col-md-8">
                                : {{ $model->posisi }}
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">No HP</div>
                            <div class="col-md-8">
                                : {{ $model->no_hp }}
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">No WA</div>
                            <div class="col-md-8">
                                : {{ $model->no_wa }}
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">Email Pribadi</div>
                            <div class="col-md-8">
                                : {{ $model->email_pribdi }}
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">Email Kantor</div>
                            <div class="col-md-8">
                                : {{ $model->email_kantor }}
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <h4>PENGALAMAN</h4>
                        <div class="row mb-3">
                            <div class="col-md-4">Pendidikan Terakhir</div>
                            <div class="col-md-8">
                                : {{ $model->pendidikan }}
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">Jurusan Pendidikan</div>
                            <div class="col-md-8">
                                : {{ $model->jurusan_pendidikan }}
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">Tahun Kelulusan</div>
                            <div class="col-md-8">
                                : {{ $model->tahun_lulus }}
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">Nama Sekolah / Universitas</div>
                            <div class="col-md-8">
                                : {{ $model->nama_sekolahasal }}
                            </div>
                        </div>
                        <h4>RIWAYAT PELATIHAN</h4>
                        <div class="row mb-3">
                            <div class="col-md-12">1. Training Hospitality</div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-12">2. Training Complain Resolution</div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-12">3. Training Complimentary</div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-12">4. Training Supervisor</div>
                        </div>
                    </div>
                </div>
            </form>
        </section>
    </div>
@endsection
