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
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item"><a href="/karyawan">Karyawan</a></li>
                            <li class="breadcrumb-item active">Edit</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>

        <!-- Main content -->
        <section class="content">
            <script src="https://cdn.ckeditor.com/ckeditor5/35.1.0/classic/ckeditor.js"></script>
            <h2>Edit Data</h2>

            <a href="/karyawan" class="btn btn-default"> Kembali</a>

            <br />
            <br />

            <form action="/karyawan/update" method="POST" enctype="multipart/form-data"
                style="background: #FFFFFF;border-radius:20px;" class="p-4">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-md-6">
                        <div class="row mb-3">
                            <div class="col-md-4">NIK Karyawan</div>
                            <div class="col-md-8">
                                <input class="form-control" type="hidden" name="id_sap" required="required"
                                    placeholder="Masukkan SAP" value="{{ $model->id_sap }}" autofocus="on">
                                <input class="form-control" type="number" name="id_nik" required="required"
                                    placeholder="Masukkan NIK Karyawan" value="{{ $model->id_nik }}" autofocus="on">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">No ID Badge</div>
                            <div class="col-md-8">
                                <input class="form-control" type="number" name="id_badge" required="required"
                                    placeholder="Masukkan No ID Badge" value="{{ $model->id_badge }}" autofocus="on">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">Join Date</div>
                            <div class="col-md-8">
                                <input class="form-control" type="date" name="join_date" required="required"
                                    placeholder="Masukkan Tanggal Join" value="{{ $model->join_date }}" autofocus="on">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">Nama Karyawan</div>
                            <div class="col-md-8">
                                <input class="form-control" type="text" name="nama" required="required"
                                    placeholder="Masukkan Nama Karyawan" value="{{ $model->nama }}" autofocus="on">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">No KTP</div>
                            <div class="col-md-8">
                                <input class="form-control" type="number" name="no_ktp" required="required"
                                    placeholder="Masukkan Nomor KTP" value="{{ $model->no_ktp }}" autofocus="on">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">Tempat Lahir</div>
                            <div class="col-md-8">
                                <input class="form-control" type="text" name="tempat_lahir" required="required"
                                    placeholder="Masukkan Tempat Lahir" value="{{ $model->tempat_lahir }}" autofocus="on">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">Tanggal Lahir</div>
                            <div class="col-md-8">
                                <input class="form-control" type="date" name="tanggal_lahir" required="required"
                                    placeholder="Masukkan Tanggal Lahir" value="{{ $model->tanggal_lahir }}" autofocus="on">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-4">Agama</div>
                            <div class="col-md-8">
                                <select class="option form-control" name="agama" value="{{ $model->agama }}"
                                    required="required">
                                    <option value="islam">Islam</option>
                                    <option value="kristen">Kristen</option>
                                    <option value="katolik">Katolik</option>
                                    <option value="hindu">Hindu</option>
                                    <option value="buddha">Buddha</option>
                                    <option value="konghucu">Konghucu</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">Pendidikan</div>
                            <div class="col-md-8">
                                <select class="option form-control" name="pendidikan" value="{{ $model->pendidikan }}"
                                    required="required">
                                    <option value="SD">SD</option>
                                    <option value="SMP">SMP</option>
                                    <option value="SMA">SMA</option>
                                    <option value="SMK">SMK</option>
                                    <option value="Diploma 1">Diploma 1</option>
                                    <option value="Diploma 2">Diploma 2</option>
                                    <option value="Diploma 3">Diploma 3</option>
                                    <option value="Diploma 4">Diploma 4</option>
                                    <option value="Strata 1">Strata 1</option>
                                    <option value="Strata 2">Strata 2</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">Jurusan Pendidikan Terakhir</div>
                            <div class="col-md-8">
                                <input class="form-control" type="text" name="jurusan_pendidikan" required="required"
                                    placeholder="Masukkan Jurusan Pendidikan" value="{{ $model->jurusan_pendidikan }}"
                                    autofocus="on">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">Nama Sekolah / Universitas Pendidikan Terakhir</div>
                            <div class="col-md-8">
                                <input class="form-control" type="text" name="nama_sekolahasal" required="required"
                                    placeholder="Masukkan Nama Sekolah/Universitas"
                                    value="{{ $model->nama_sekolahasal }}" autofocus="on">
                                <!-- <textarea class="form-control" type="text" name="nama_sekolahasal" required="required" placeholder="Masukkan Nama Sekolah/Universitas" value="" autofocus="on"> -->
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">Tahun Lulus</div>
                            <div class="col-md-8">
                                <input class="form-control" type="number" name="tahun_lulus" required="required"
                                    placeholder="Masukkan Tahun Lulus" value="{{ $model->tahun_lulus }}" autofocus="on">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">Level Karyawan</div>
                            <div class="col-md-8">
                                <select class="option form-control" name="level_karyawan"
                                    value="{{ $model->level_karyawan }}" required="required">
                                    <option value="General Manager">General Manager</option>
                                    <option value="Head Of Department">Head Of Department</option>
                                    <option value="Assistant Head Department">Assistant Head Department</option>
                                    <option value="Supervisor">Supervisor</option>
                                    <option value="Rank n File">Rank n File</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">Departemen</div>
                            <div class="col-md-8">
                                <select class="option form-control" name="departemen" value="{{ $model->departemen }}"
                                    required="required">
                                    @foreach ($departemens as $departemen)
                                        <option value="{{ $departemen }}"
                                            {{ $model->departemen == $departemen ? 'selected' : '' }}>
                                            {{ $departemen }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row mb-3">
                            <div class="col-md-4">Posisi</div>
                            <div class="col-md-8">
                                <input class="form-control" type="text" name="posisi" required="required"
                                    placeholder="Masukkan Jurusan Pendidikan" value="{{ $model->posisi }}"
                                    autofocus="on">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">Status Karyawan</div>
                            <div class="col-md-8">
                                <select class="option form-control" name="status_karyawan"
                                    value="{{ $model->status_karyawan }}" required="required">
                                    <option value="Kontrak">Kontrak</option>
                                    <option value="Permanen">Permanen</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">Email Pribadi</div>
                            <div class="col-md-8">
                                <input class="form-control" type="email" name="email_pribdi" required="required"
                                    placeholder="Masukkan Email" value="{{ $model->email_pribdi }}" autofocus="on">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">Email Kantor</div>
                            <div class="col-md-8">
                                <input class="form-control" type="email" name="email_kantor" required="required"
                                    placeholder="Masukkan Email" value="{{ $model->email_kantor }}" autofocus="on">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">Jenis Kelamin</div>
                            <div class="col-md-8">
                                <select class="option form-control" name="jenis_kelamin" required="required">
                                    <option value="">--Pilih Jenis Kelamin--</option>
                                    <option value="Laki-Laki"
                                        {{ $model->jenis_kelamin == 'Laki-Laki' ? 'selected' : '' }}>
                                        Laki-Laki</option>
                                    <option value="Perempuan"
                                        {{ $model->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>
                                        Perempuan</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">Suku</div>
                            <div class="col-md-8">
                                <select class="option form-control" name="suku" value="{{ $model->suku }}"
                                    required="required">
                                    <option value="">--Pilih Suku--</option>
                                    @foreach ($sukus as $suku)
                                        <option value="{{ $suku }}"
                                            {{ $model->suku == $suku ? 'selected' : '' }}>
                                            {{ $suku }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">Status Perkawinan</div>
                            <div class="col-md-8">
                                <select class="option form-control" name="status_kawin"
                                    value="{{ $model->status_kawin }}" required="required">
                                    <option value="">--Pilih Status Perkawinan--</option>
                                    @foreach ($statuses as $status)
                                        <option value="{{ $status }}"
                                            {{ $model->status_kawin == $status ? 'selected' : '' }}>
                                            {{ $status }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">Jumlah Tanggungan</div>
                            <div class="col-md-8">
                                <select class="option form-control" name="jmlh_tanggung"
                                    value="{{ $model->jmlh_tanggung }}" required="required">
                                    <option value="">--Pilih Jumlah Tanggungan--</option>
                                    @foreach ($tanggungans as $tanggungan)
                                        <option value="{{ $tanggungan }}"
                                            {{ $model->jmlh_tanggung == $tanggungan ? 'selected' : '' }}>
                                            {{ $tanggungan }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">Nomor HP</div>
                            <div class="col-md-8">
                                <input class="form-control" type="number" name="no_hp" required="required"
                                    placeholder="Masukkan Nomor Handphone" value="{{ $model->no_hp }}" autofocus="on">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">Nomor WhatsApp</div>
                            <div class="col-md-8">
                                <input class="form-control" type="number" name="no_wa" required="required"
                                    placeholder="Masukkan Nomor WhatsApp" value="{{ $model->no_wa }}" autofocus="on">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">Riwayat Pelatihan</div>
                            <div class="col-md-8">
                                <input class="form-control" type="text" name="riwayat_pelatihan" required="required"
                                    placeholder="Masukkan Riwayat Pelatihan" value="{{ $model->riwayat_pelatihan }}"
                                    autofocus="on">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">Kelas BPJS</div>
                            <div class="col-md-8">
                                <input class="form-control" type="text" name="kelas_bpjs" required="required"
                                    placeholder="Masukkan Kelas BPJS" value="{{ $model->kelas_bpjs }}"
                                    value="{{ $model->kelas_bpjs }}" autofocus="on">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">Upload Foto</div>
                            <div class="col-md-8">
                                <input class="form-control" type="file" name="foto" value="{{ $model->foto }}"
                                    autofocus="on">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <input type="submit" value="Simpan Data" class="btn btn-success">

                    </div>
                </div>

            </form>
        </section>
    </div>
@endsection
