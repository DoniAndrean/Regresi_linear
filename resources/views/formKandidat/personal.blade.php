@extends('formKandidat.layout')

@section('konten')
    <div class="p-5">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Employee Application Form</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>

        <!-- Main content -->
        <section class="content">
            <!-- /.content-header -->
            <script src="https://cdn.ckeditor.com/ckeditor5/35.1.0/classic/ckeditor.js"></script>

            @include('formKandidat.stepmenu')

            <br />
            <br />

            <form action="{{ route('form.personal.store', $id) }}" method="POST" enctype="multipart/form-data"
                style="background: #FFFFFF;border-radius:20px;" class="p-4">
                {{ csrf_field() }}
                <input class="form-control" type="hidden" name="id_kandidat" required value="{{ $id }}">
                <div class="row">
                    <div class="col-md-12">
                        <h4>Personal Data</h4>
                    </div>
                    <div class="col-md-8 col-12">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input class="form-control" type="text" name="nama" required id="nama"
                                placeholder="Masukkan Nama Lengkap" value="{{ $kandidat->nama }}">
                        </div>
                        <div class="form-group">
                            <label for="posisi">Posisi</label>
                            <input class="form-control" type="text" name="posisi" placeholder="Masukkan Posisi" required
                                value="{{ $kandidat->posisi }}" id="posisi">
                        </div>
                        <div class="form-group">
                            <label for="informasi_lowongan">Informasi Lowongan</label>
                            <input class="form-control" type="text" name="informasi_lowongan" id="informasi_lowongan"
                                required placeholder="Masukkan Informasi Lowongan"
                                value="{{ $kandidat->informasi_lowongan }}">
                        </div>
                        <div class="form-group">
                            <label for="umur">Umur</label>
                            <input class="form-control" type="text" name="umur" required id="umur"
                                placeholder="Masukkan Umur" value="{{ $kandidat->umur }}">
                        </div>
                        <div class="form-group">
                            <label for="tempat_lahir">Tempat Lahir</label>
                            <input class="form-control" type="text" name="tempat_lahir" required id="tempat_lahir"
                                placeholder="Masukkan Tempat Lahir" value="{{ $kandidat->tempat_lahir }}">
                        </div>
                    </div>
                    <div class="col-md-4 col-12">
                        <div class="form-group">
                            <label for="tanggal_lahir">Tanggal Lahir</label>
                            <input class="form-control" type="date" name="tanggal_lahir" required id="tanggal_lahir"
                                placeholder="Masukkan Tanggal Lahir" value="{{ $kandidat->tanggal_lahir }}"
                                max="2015-12-31">
                        </div>
                        <div class="form-group">
                            <label for="status_perkawinan">Status Perkawinan</label>
                            <select class="option form-control" name="status_perkawinan" required id="status_perkawinan">
                                @foreach ($statusOptions as $option)
                                    <option value="{{ $option }}"
                                        {{ $kandidat->status_perkawinan == $option ? 'selected' : '' }}>
                                        {{ $option }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="jenis_kelamin">Jenis Kelamin</label>
                            <select class="option form-control" name="jenis_kelamin" required id="jenis_kelamin">
                                <option value="{{ $kandidat->jenis_kelamin }}">{{ $kandidat->jenis_kelamin }}
                                </option>
                                <option value="Laki-Laki">Laki-Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="berat_badan">Berat Badan</label>
                            <input class="form-control" type="text" name="berat_badan" required
                                placeholder="Masukkan Berat Badan" value="{{ $kandidat->berat_badan }}" id="berat_badan">
                        </div>
                        <div class="form-group">
                            <label for="tinggi_badan">Tinggi Badan</label>
                            <input class="form-control" type="text" name="tinggi_badan" required
                                placeholder="Masukkan Tinggi Badan" value="{{ $kandidat->tinggi_badan }}"
                                id="tinggi_badan">
                        </div>
                    </div>
                    <!-- #2 -->
                    <div class="row col-md-12">
                        <div class="col-8">
                            <h4>Informasi Kontak</h4>
                            <div class="row row-cols-3">
                                <!-- alamat -->
                                <div class="form-group">
                                    <label for="alamat">Alamat</label>
                                    <input class="form-control" type="text" name="alamat" required id="alamat"
                                        placeholder="Masukkan Alamat" value="{{ $kandidat->alamat }}">
                                </div>
                                <div class="form-group">
                                    <label for="no_hp">No HP</label>
                                    <input class="form-control" type="text" name="no_hp" required id="no_hp"
                                        placeholder="Masukkan No HP" value="{{ $kandidat->alamat }}">
                                </div>
                                <div class="form-group">
                                    <label for="bahasa_pertama">Email</label>
                                    <input class="form-control" type="text" name="email" required
                                        id="bahasa_pertama" placeholder="Masukkan Email" value="{{ $kandidat->email }}">
                                </div>
                            </div>
                        </div>
                        <!-- #3 -->
                        <div class="col-4">
                            <h4>Informasi Bahasa</h4>
                            <div class="form-group">
                                <label for="bahasa_pertama">Bahasa Pertama</label>
                                <input class="form-control" type="text" name="bahasa_pertama" required
                                    id="bahasa_pertama" placeholder="Masukkan Bahasa Pertama"
                                    value="{{ $kandidat->bahasa_pertama }}">
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-success float-right">Selanjutnya</button>
            </form>
        </section>
    </div>
@endsection
