@extends('layout.master')

@section('konten')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Employee Application Form</h1>
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

            <form action="/kandidat/store" method="POST" enctype="multipart/form-data"
                style="background: #FFFFFF;border-radius:20px;" class="p-4">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-md-12">
                        <h4>Personal Data</h4>
                    </div>
                    <div class="col-md-6">
                        <div class="row mb-3">
                            <div class="col-md-4">Posisi</div>
                            <div class="col-md-8">
                                <input class="form-control" type="text" name="posisi" placeholder="Masukkan Posisi"
                                    value="">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">Informasi Lowongan</div>
                            <div class="col-md-8">
                                <input class="form-control" type="text" name="informasi_lowongan"
                                    placeholder="Masukkan Informasi Lowongan" value="">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">Nama</div>
                            <div class="col-md-8">
                                <input class="form-control" type="text" name="nama"
                                    placeholder="Masukkan Nama Lengkap" value="">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">Umur</div>
                            <div class="col-md-8">
                                <input class="form-control" type="text" name="umur" placeholder="Masukkan Umur"
                                    value="">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">Tempat Lahir</div>
                            <div class="col-md-8">
                                <input class="form-control" type="text" name="tempat_lahir"
                                    placeholder="Masukkan Tempat Lahir" value="">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row mb-3">
                            <div class="col-md-4">Tanggal Lahir</div>
                            <div class="col-md-8">
                                <input class="form-control" type="date" name="tanggal_lahir"
                                    placeholder="Masukkan Tanggal Lahir" value="">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">Status Perkawinan</div>
                            <div class="col-md-8">
                                <!-- <input class="form-control" type="text" name="alamat"  placeholder="Masukkan Data" value="" > -->
                                <select class="option form-control" name="status_perkawinan">
                                    <option value="">--Pilih Status Perkawinan--</option>
                                    <option value="Sudah Kawin">Sudah Kawin</option>
                                    <option value="Belum Kawin">Belum Kawin</option>
                                    <option value="Cerai Hidup">Cerai Hidup</option>
                                    <option value="Cerai Mati">Cerai Mati</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">Jenis Kelamin</div>
                            <div class="col-md-8">
                                <!-- <input class="form-control" type="text" name="alamat"  placeholder="Masukkan Data" value="" > -->
                                <select class="option form-control" name="jenis_kelamin">
                                    <option value="">--Pilih Jenis Kelamin--</option>
                                    <option value="Laki-Laki">Laki-Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">Berat Badan</div>
                            <div class="col-md-8">
                                <input class="form-control" type="text" name="berat_badan"
                                    placeholder="Masukkan Berat Badan" value="">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">Tinggi Badan</div>
                            <div class="col-md-8">
                                <input class="form-control" type="text" name="tinggi_badan"
                                    placeholder="Masukkan Tinggi Badan" value="">
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
                                <input class="form-control" type="text" name="alamat" placeholder="Masukkan Alamat"
                                    value="">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">No HP</div>
                            <div class="col-md-8">
                                <input class="form-control" type="text" name="no_hp" placeholder="Masukkan No HP"
                                    value="">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row mb-3">
                            <div class="col-md-4">Email</div>
                            <div class="col-md-8">
                                <input class="form-control" type="text" name="email" placeholder="Masukkan Email"
                                    value="">
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
                                    <input class="form-control" type="text" name="bahasa_pertama"
                                        placeholder="Masukkan Bahasa Pertama" value="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                        </div>
                    </div>

                    <!-- #4 -->
                    <div class="col-md-12 row d-none">
                        <div class="col-md-12">
                            <h4>Pendidikan Formal</h4>
                        </div>

                        <div class="col-md-12 row">
                            <div class="col-md-4">
                                <div class="row mb-3">
                                    <div class="col-md-12">Nama Sekolah</div>
                                    <div class="col-md-12">
                                        <textarea name="skill_tambahan" id="" cols="30" rows="5" class="form-control"
                                            placeholder="Masukkan Nama Sekolah"></textarea>
                                        <!-- <input class="form-control" type="text" name="bahasa_lain"  placeholder="Masukkan Nama Sekolah" value="" > -->
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="row mb-3">
                                    <div class="col-md-12">Jenjang</div>
                                    <div class="col-md-12">
                                        <select name="read" id="" class="form-control">
                                            <option value="fair">Tidak Sekolah</option>
                                            <option value="fair">TK</option>
                                            <option value="good">SD</option>
                                            <option value="fluent">SMP</option>
                                            <option value="fluent">SMA</option>
                                            <option value="fluent">S1</option>
                                            <option value="fluent">S2</option>
                                            <option value="fluent">S3</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="row mb-3">
                                    <div class="col-md-12">From</div>
                                    <div class="col-md-12">
                                        <select name="write" id="" class="form-control">
                                            @for ($i = date('Y'); $i >= 2000; $i--)
                                                <option>{{ $i }}</option>
                                            @endfor
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="row mb-3">
                                    <div class="col-md-12">To</div>
                                    <div class="col-md-12">
                                        <select name="write" id="" class="form-control">
                                            @for ($i = date('Y'); $i >= 2000; $i--)
                                                <option>{{ $i }}</option>
                                            @endfor
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="row mb-3">
                                    <div class="col-md-12">GPA</div>
                                    <div class="col-md-12">
                                        <input class="form-control" type="text" name="bahasa_lain"
                                            placeholder="Masukkan NIK Karyawan" value="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- #5 -->
                    <div class="col-md-12 row d-none">
                        <div class="col-md-12">
                            <h4>Pendidikan Informal</h4>
                        </div>

                        <div class="col-md-12 row">
                            <div class="col-md-4">
                                <div class="row mb-3">
                                    <div class="col-md-12">Institusi</div>
                                    <div class="col-md-12">
                                        <textarea name="skill_tambahan" id="" cols="30" rows="5" class="form-control"
                                            placeholder="Masukkan Institusi"></textarea>
                                        <!-- <input class="form-control" type="text" name="bahasa_lain"  placeholder="Masukkan NIK Karyawan" value="" > -->
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="row mb-3">
                                    <div class="col-md-12">Major</div>
                                    <div class="col-md-12">
                                        <input class="form-control" type="text" name="bahasa_lain"
                                            placeholder="Masukkan Major" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="row mb-3">
                                    <div class="col-md-12">From</div>
                                    <div class="col-md-12">
                                        <select name="write" id="" class="form-control">
                                            @for ($i = date('Y'); $i >= 2000; $i--)
                                                <option>{{ $i }}</option>
                                            @endfor
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="row mb-3">
                                    <div class="col-md-12">To</div>
                                    <div class="col-md-12">
                                        <select name="write" id="" class="form-control">
                                            @for ($i = date('Y'); $i >= 2000; $i--)
                                                <option>{{ $i }}</option>
                                            @endfor
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="row mb-3">
                                    <div class="col-md-12">GPA</div>
                                    <div class="col-md-12">
                                        <input class="form-control" type="text" name="bahasa_lain"
                                            placeholder="Masukkan NIK Karyawan" value="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- #6 -->
                    <div class="col-md-12 row d-none">
                        <div class="col-md-12">
                            <h4>Informasi Keluarga</h4>
                        </div>

                        <div class="col-md-12 row">
                            <div class="col-md-3">
                                <div class="row mb-3">
                                    <div class="col-md-12">Nama</div>
                                    <div class="col-md-12">
                                        <input class="form-control" type="text" name="bahasa_lain"
                                            placeholder="Masukkan Nama" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="row mb-3">
                                    <div class="col-md-12">Hubungan</div>
                                    <div class="col-md-12">
                                        <select name="read" id="" class="form-control">
                                            <option value="">--Pilih Hubungan--</option>
                                            <option value="ayah">Ayah</option>
                                            <option value="ibu">Ibu</option>
                                            <option value="adik">Adik</option>
                                            <option value="wali">Wali</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="row mb-3">
                                    <div class="col-md-12">Umur</div>
                                    <div class="col-md-12">
                                        <input class="form-control" type="text" name="bahasa_lain"
                                            placeholder="Masukkan Umur" value="">
                                        <!-- <select name="write" id="" class="form-control">
                  @for ($i = date('Y'); $i >= 2000; $i--)
    <option>{{ $i }}</option>
    @endfor
                 </select> -->
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="row mb-3">
                                    <div class="col-md-12">Alamat</div>
                                    <div class="col-md-12">
                                        <input class="form-control" type="text" name="bahasa_lain"
                                            placeholder="Masukkan Alamat" value="">
                                        <!-- <select name="write" id="" class="form-control">
                  @for ($i = date('Y'); $i >= 2000; $i--)
    <option>{{ $i }}</option>
    @endfor
                 </select> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- #7 -->

                    <div class="col-md-12 row d-none">
                        <div class="col-md-12">
                            <h4>Kontak Darurat</h4>
                        </div>
                        <div class="col-md-12 row">
                            <div class="col-md-3">
                                <div class="row mb-3">
                                    <div class="col-md-12">Nama</div>
                                    <div class="col-md-12">
                                        <input class="form-control" type="text" name="bahasa_lain"
                                            placeholder="Masukkan Nama" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="row mb-3">
                                    <div class="col-md-12">Hubungan</div>
                                    <div class="col-md-12">
                                        <input class="form-control" type="text" name="bahasa_lain"
                                            placeholder="Masukkan Hubungan" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="row mb-3">
                                    <div class="col-md-12">No HP</div>
                                    <div class="col-md-12">
                                        <input class="form-control" type="text" name="bahasa_lain"
                                            placeholder="Masukkan No HP" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="row mb-3">
                                    <div class="col-md-12">Alamat</div>
                                    <div class="col-md-12">
                                        <input class="form-control" type="text" name="bahasa_lain"
                                            placeholder="Masukkan Alamat" value="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 row d-none">
                        <div class="col-md-12">
                            <h4>Bersedia Bekerja</h4>
                        </div>

                        <div class="col-md-12 row">
                            <div class="col-md-3">
                                <div class="row mb-3">
                                    <div class="col-md-12">Di Luar Negeri</div>
                                    <div class="col-md-12">
                                        <select name="read" id="" class="form-control">
                                            <option value="">--Pilih--</option>
                                            <option value="bersedia">Bersedia</option>
                                            <option value="tidak">Tidak</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="row mb-3">
                                    <div class="col-md-12">Alasan</div>
                                    <div class="col-md-12">
                                        <input class="form-control" type="text" name="bahasa_lain"
                                            placeholder="Masukkan Alasan" value="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 row">
                            <div class="col-md-3">
                                <div class="row mb-3">
                                    <div class="col-md-12">Di Dalam Negeri</div>
                                    <div class="col-md-12">
                                        <select name="read" id="" class="form-control">
                                            <option value="">--Pilih--</option>
                                            <option value="bersedia">Bersedia</option>
                                            <option value="tidak">Tidak</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="row mb-3">
                                    <div class="col-md-12">Alasan</div>
                                    <div class="col-md-12">
                                        <input class="form-control" type="text" name="bahasa_lain"
                                            placeholder="Masukkan Alasan" value="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 row d-none">
                        <div class="col-md-12">
                            <h4>Pengalaman Kerja</h4>
                        </div>

                        <div class="col-md-12 row">
                            <div class="col-md-3">
                                <div class="row mb-3">
                                    <div class="col-md-12">Nama Perusahaan</div>
                                    <div class="col-md-12">
                                        <textarea name="harapan" id="" cols="30" rows="5" class="form-control"
                                            placeholder="Masukkan Nama Perusahaan"></textarea>
                                        <!-- <input class="form-control" type="text" name="bahasa_lain"  placeholder="Masukkan Nama Perusahaan" value="" > -->
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="row mb-3">
                                    <div class="col-md-12">Posisi</div>
                                    <div class="col-md-12">
                                        <input class="form-control" type="text" name="bahasa_lain"
                                            placeholder="Masukkan Posisi" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="row mb-3">
                                    <div class="col-md-12">From</div>
                                    <div class="col-md-12">
                                        <select name="write" id="" class="form-control">
                                            @for ($i = date('Y'); $i >= 2000; $i--)
                                                <option>{{ $i }}</option>
                                            @endfor
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="row mb-3">
                                    <div class="col-md-12">To</div>
                                    <div class="col-md-12">
                                        <select name="write" id="" class="form-control">
                                            @for ($i = date('Y'); $i >= 2000; $i--)
                                                <option>{{ $i }}</option>
                                            @endfor
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="row mb-3">
                                    <div class="col-md-12">Tugas Utama</div>
                                    <div class="col-md-12">
                                        <textarea name="harapan" id="" cols="30" rows="5" class="form-control"
                                            placeholder="Masukkan Tugas Utama"></textarea>
                                        <!-- <input class="form-control" type="text" name="bahasa_lain"  placeholder="Masukkan Alamat" value="" > -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- #? -->
                    <div class="col-md-12 row d-none">
                        <div class="col-md-12">
                            <h4>Lainnya</h4>
                        </div>
                        <div class="col-md-6">
                            <div class="row mb-3">
                                <div class="col-md-4">Izin Mengemudi</div>
                                <div class="col-md-8">
                                    <input class="form-control" type="text" name="izin_mengemudi"
                                        placeholder="Masukkan Jenis Izin Mengemudi" value="">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-4">Bentuk Transportasi</div>
                                <div class="col-md-8">
                                    <input class="form-control" type="text" name="bentuk_transportasi"
                                        placeholder="Masukkan Bentuk Transportasi" value="">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-4">Basic Gaji</div>
                                <div class="col-md-8">
                                    <input class="form-control" type="text" name="basic_gaji"
                                        placeholder="Masukkan Nominal" value="">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-4">Uang Saku</div>
                                <div class="col-md-8">
                                    <input class="form-control" type="text" name="uang_saku"
                                        placeholder="Masukkan Nominal" value="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row mb-3">
                                <div class="col-md-4">Gaji Bersih</div>
                                <div class="col-md-8">
                                    <input class="form-control" type="text" name="gaji_bersih"
                                        placeholder="Masukkan Nominal" value="">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-4">Skill Tambahan</div>
                                <div class="col-md-8">
                                    <textarea name="skill_tambahan" id="" cols="30" rows="5" class="form-control"
                                        placeholder="Masukkan Skill"></textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-4">Harapan Di Pekerjaan Baru</div>
                                <div class="col-md-8">
                                    <textarea name="harapan" id="" cols="30" rows="5" class="form-control"
                                        placeholder="Masukkan Harapan"></textarea>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- Submit -->
                <div class="row mb-3">
                    <input type="submit" value="Selanjutnya" class="btn btn-success float-right">

                </div>
            </form>

        </section>
    </div>
@endsection
