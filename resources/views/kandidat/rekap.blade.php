@extends('layout.master')

@section('konten')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Data Rekapitulasi Kandidat</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item"><a href="/karyawan">Karyawan</a></li>
                            <li class="breadcrumb-item active">Tambah</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>

        <!-- Main content -->
        <section class="content">
            <!-- /.content-header -->
            <script src="https://cdn.ckeditor.com/ckeditor5/35.1.0/classic/ckeditor.js"></script>

            <a href="/kandidat" class="btn btn-default"> Kembali</a>

            <br />
            <br />

            <div class="row p-4" style="background: #FFFFFF;border-radius:20px;">
                <div class="row">
                    <div class="col-md-12">
                        <h4>Personal Data</h4>
                    </div>
                    <div class="col-md-6">
                        <div class="row mb-3">
                            <div class="col-md-4">Posisi</div>
                            <div class="col-md-8">
                                : {{ $kandidat->posisi }}
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">Informasi Lowongan</div>
                            <div class="col-md-8">
                                : {{ $kandidat->informasi_lowongan }}
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">Nama</div>
                            <div class="col-md-8">
                                : {{ $kandidat->nama }}
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">Umur</div>
                            <div class="col-md-8">
                                : {{ $kandidat->umur }}
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">Tempat Lahir</div>
                            <div class="col-md-8">
                                : {{ $kandidat->tempat_lahir }}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row mb-3">
                            <div class="col-md-4">Tanggal Lahir</div>
                            <div class="col-md-8">
                                : {{ $kandidat->tanggal_lahir }}
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">Status Perkawinan</div>
                            <div class="col-md-8">
                                : {{ $kandidat->status_perkawinan }}
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">Jenis Kelamin</div>
                            <div class="col-md-8">
                                : {{ $kandidat->jenis_kelamin }}
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">Berat Badan</div>
                            <div class="col-md-8">
                                : {{ $kandidat->berat_badan }}

                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">Tinggi Badan</div>
                            <div class="col-md-8">
                                : {{ $kandidat->tinggi_badan }}
                            </div>
                        </div>
                    </div>
                    <!-- #2 -->
                    <div class="col-md-12">
                        <h4>Informasi Kontak</h4>
                    </div>
                    <div class="col-md-6">
                        <!-- alamat -->
                        <div class="row mb-3">
                            <div class="col-md-4">Alamat</div>
                            <div class="col-md-8">
                                : {{ $kandidat->alamat }}
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">No HP</div>
                            <div class="col-md-8">
                                : {{ $kandidat->no_hp }}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row mb-3">
                            <div class="col-md-4">Email</div>
                            <div class="col-md-8">
                                : {{ $kandidat->email }}
                            </div>
                        </div>
                    </div>
                    <!-- #3 -->
                    <div class="col-md-12 row">
                        <div class="col-md-12">
                            <h4>Informasi Bahasa</h4>
                        </div>
                        <div class="col-md-6">
                            <div class="row mb-3">
                                <div class="col-md-4">Bahasa Pertama</div>
                                <div class="col-md-8">
                                    : {{ $kandidat->bahasa_pertama }}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                        </div>
                    </div>

                    <div class="col-md-12">
                        <h4>Bahasa yang Dikuasai</h4>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Bahasa Lain</th>
                                    <th>Membaca</th>
                                    <th>Menulis</th>
                                    <th>Berbicara</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($bahasaLain as $bahasa)
                                    <tr>
                                        <td>{{ $bahasa->bahasa_lain }}</td>
                                        <td>{{ $bahasa->membaca }}</td>
                                        <td>{{ $bahasa->menulis }}</td>
                                        <td>{{ $bahasa->berbicara }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <div class="col-md-12">
                        <h4>Data Pendidikan</h4>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Nama Sekolah</th>
                                    <th>Jenjang</th>
                                    <th>Tahun</th>
                                    <th>GPA</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pendidikan as $edu)
                                    <tr>
                                        <td>{{ $edu->nama_sekolah }}</td>
                                        <td>{{ $edu->jenjang }}</td>
                                        <td>{{ $edu->tahun_from }} - {{ $edu->tahun_to }}</td>
                                        <td>{{ $edu->gpa }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <div class="col-md-12">
                        <h4>Data Keluarga</h4>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Hubungan</th>
                                    <th>Umur</th>
                                    <th>Alamat</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($keluarga as $anggota)
                                    <tr>
                                        <td>{{ $anggota->nama_keluarga }}</td>
                                        <td>{{ $anggota->relation }}</td>
                                        <td>{{ $anggota->age }}</td>
                                        <td>{{ $anggota->address }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <div class="col-md-12">
                        <h4>Kontak Darurat</h4>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Nama Kontak Darurat</th>
                                    <th>Relation</th>
                                    <th>Age</th>
                                    <th>Address</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($kontakDarurat as $kontak)
                                    <tr>
                                        <td>{{ $kontak->nama_kontak_darurat }}</td>
                                        <td>{{ $kontak->relation }}</td>
                                        <td>{{ $kontak->age }}</td>
                                        <td>{{ $kontak->address }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <div class="col-md-12">
                        <h4>Data Pengalaman Kerja</h4>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Nama Perusahaan</th>
                                    <th>Posisi</th>
                                    <th>Periode</th>
                                    <th>Gaji</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pengalaman as $exp)
                                    <tr>
                                        <td>{{ $exp->company_name }}</td>
                                        <td>{{ $exp->position }}</td>
                                        <td>{{ $exp->periode }}</td>
                                        <td>{{ $exp->salary }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
        </section>
    </div>
@endsection
