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
            <h3>Tambah Karyawan</h3>

            <a href="/karyawan" class="btn btn-default"> Kembali</a>

            <br />
            <br />

            <form action="/karyawan/store" method="POST" enctype="multipart/form-data"
                style="background: #FFFFFF;border-radius:20px;" class="p-4">
                {{ csrf_field() }}
                <!-- <div class="row">
                    <div class="col-md-6">
                     <div class="row mb-3">
                      <div class="col-md-4">SAP</div>
                      <div class="col-md-8">
                       <input class="form-control" type="text" name="id_sap" required="required" placeholder="Masukkan SAP" value="" autofocus="on">
                      </div>
                     </div>
                     <div class="row mb-3">
                      <div class="col-md-4">Nama Karyawan</div>
                      <div class="col-md-8">
                       <input class="form-control" type="text" name="nama" required="required" placeholder="Masukkan Nama Karyawan" value="" autofocus="on">
                      </div>
                     </div>
                     <div class="row mb-3">
                      <div class="col-md-4">Tempat Lahir</div>
                      <div class="col-md-8">
                       <input class="form-control" type="text" name="tempat_lahir" required="required" placeholder="Masukkan Tempat Lahir" value="" autofocus="on">
                      </div>
                     </div>
                     <div class="row mb-3">
                      <div class="col-md-4">Tanggal Lahir</div>
                      <div class="col-md-8">
                       <input class="form-control" type="date" name="tanggal_lahir" required="required" placeholder="Masukkan Tanggal Lahir" value="" autofocus="on">
                      </div>
                     </div>
                    </div>
                    <div class="col-md-6">

                     <div class="row mb-3">
                      <div class="col-md-4">Agama</div>
                      <div class="col-md-8">
                       <select class="option form-control" name="agama" required="required">
                        <option value="">--Pilih Agama--</option>
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Katolik">Katolik</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Buddha">Buddha</option>
                        <option value="Konghucu">Konghucu</option>
                       </select>
                      </div>
                     </div>
                     <div class="row mb-3">
                      <div class="col-md-4">Pendidikan</div>
                      <div class="col-md-8">
                       <select class="option form-control" name="pendidikan" required="required">
                        <option value="">--Pilih Pendidikan--</option>
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
                       <input class="form-control" type="text" name="jurusan_pendidikan" required="required" placeholder="Masukkan Jurusan Pendidikan" value="" autofocus="on">
                      </div>
                     </div>
                     <div class="row mb-3">
                      <div class="col-md-4">Level Karyawan</div>
                      <div class="col-md-8">
                       <select class="option form-control" name="level_karyawan" required="required">
                        <option value="">--Pilih Level Karyawan--</option>
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
                       <select class="option form-control" name="departemen" required="required">
                        <option value="">--Pilih Departemen--</option>
                        <option value="GMO">GMO</option>
                        <option value="HRD">HRD</option>
                        <option value="Food And Beverage Service">Food And Beverage Service</option>
                        <option value="Food And Beverage Product">Food And Beverage Product</option>
                        <option value="Front Office & Health Club">Front Office & Health Club</option>
                        <option value="House Keeping">House Keeping</option>
                        <option value="Eco Camp">Eco Camp</option>
                        <option value="Engineering">Engineering</option>
                       </select>
                      </div>
                     </div>
                     <div class="row mb-3">
                      <div class="col-md-4">Posisi</div>
                      <div class="col-md-8">
                       <input class="form-control" type="text" name="posisi" required="required" placeholder="Masukkan Jurusan Pendidikan" value="" autofocus="on">
                      </div>
                     </div>
                     <div class="row mb-3">
                      <div class="col-md-4">Status Karyawan</div>
                      <div class="col-md-8">
                       <select class="option form-control" name="status_karyawan" required="required">
                        <option value="">--Pilih Status Karyawan--</option>
                        <option value="Kontrak">Kontrak</option>
                       </select>
                      </div>
                     </div>
                    </div>
                   </div> -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="row mb-3">
                            <div class="col-md-4">SAP</div>
                            <div class="col-md-8">
                                <input class="form-control" type="text" name="id_sap" required="required"
                                    placeholder="Masukkan SAP" value="" autofocus="on">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">No ID Badge</div>
                            <div class="col-md-8">
                                <input class="form-control" type="number" name="id_badge" required="required"
                                    placeholder="Masukkan No ID Badge" value="" autofocus="on">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">Join Date</div>
                            <div class="col-md-8">
                                <input class="form-control" type="date" name="join_date" required="required"
                                    placeholder="" value="" autofocus="on">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">NIK Karyawan</div>
                            <div class="col-md-8">
                                <input class="form-control" type="number" name="id_nik" required="required"
                                    placeholder="Masukkan NIK Karyawan" value="" autofocus="on">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">Nama Karyawan</div>
                            <div class="col-md-8">
                                <input class="form-control" type="text" name="nama" required="required"
                                    placeholder="Masukkan Nama Karyawan" value="" autofocus="on">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">No KTP</div>
                            <div class="col-md-8">
                                <input class="form-control" type="number" name="no_ktp" required="required"
                                    placeholder="Masukkan Nomor KTP" value="" autofocus="on">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">Tempat Lahir</div>
                            <div class="col-md-8">
                                <input class="form-control" type="text" name="tempat_lahir" required="required"
                                    placeholder="Masukkan Tempat Lahir" value="" autofocus="on">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">Tanggal Lahir</div>
                            <div class="col-md-8">
                                <input class="form-control" type="date" name="tanggal_lahir" required="required"
                                    placeholder="" value="" autofocus="on">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">Agama</div>
                            <div class="col-md-8">
                                <select class="option form-control" name="agama" required="required">
                                    <option value="">--Pilih Agama--</option>
                                    <option value="Islam">Islam</option>
                                    <option value="Kristen">Kristen</option>
                                    <option value="Katolik">Katolik</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Buddha">Buddha</option>
                                    <option value="Konghucu">Konghucu</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">Pendidikan</div>
                            <div class="col-md-8">
                                <select class="option form-control" name="pendidikan" required="required">
                                    <option value="">--Pilih Pendidikan--</option>
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
                                    placeholder="Masukkan Jurusan Pendidikan" value="" autofocus="on">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">Nama Sekolah / Universitas Pendidikan Terakhir</div>
                            <div class="col-md-8">
                                <input class="form-control" type="text" name="nama_sekolahasal" required="required"
                                    placeholder="Masukkan Nama Sekolah/Universitas" value="" autofocus="on">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">Tahun Lulus</div>
                            <div class="col-md-8">
                                <input class="form-control" type="number" name="tahun_lulus" required="required"
                                    placeholder="Masukkan Tahun Lulus" value="" autofocus="on">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">Level Karyawan</div>
                            <div class="col-md-8">
                                <select class="option form-control" name="level_karyawan" required="required">
                                    <option value="">--Pilih Level Karyawan--</option>
                                    <option value="General Manager">General Manager</option>
                                    <option value="Head Of Department">Head Of Department</option>
                                    <option value="Assistant Head Department">Assistant Head Department</option>
                                    <option value="Supervisor">Supervisor</option>
                                    <option value="Rank n File">Rank n File</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row mb-3">
                            <div class="col-md-4">Departemen</div>
                            <div class="col-md-8">
                                <select class="option form-control" name="departemen" required="required">
                                    <option value="">--Pilih Departemen--</option>
                                    <option value="GMO">GMO</option>
                                    <option value="HRD">HRD</option>
                                    <option value="Food And Beverage Service">Food And Beverage Service</option>
                                    <option value="Food And Beverage Product">Food And Beverage Product</option>
                                    <option value="Front Office & Health Club">Front Office & Health Club</option>
                                    <option value="House Keeping">House Keeping</option>
                                    <option value="Eco Camp">Eco Camp</option>
                                    <option value="Engineering">Engineering</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">Posisi</div>
                            <div class="col-md-8">
                                <input class="form-control" type="text" name="posisi" required="required"
                                    placeholder="Masukkan Posisi" value="" autofocus="on">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">Status Karyawan</div>
                            <div class="col-md-8">
                                <select class="option form-control" name="status_karyawan" required="required">
                                    <option value="">--Pilih Status Karyawan--</option>
                                    <option value="Kontrak">Kontrak</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">Email Pribadi</div>
                            <div class="col-md-8">
                                <input class="form-control" type="email" name="email_pribdi" required="required"
                                    placeholder="Masukkan Email" value="" autofocus="on">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">Email Kantor</div>
                            <div class="col-md-8">
                                <input class="form-control" type="email" name="email_kantor"
                                    placeholder="Masukkan Email" value="" autofocus="on">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">Jenis Kelamin</div>
                            <div class="col-md-8">
                                <select class="option form-control" name="jenis_kelamin" required="required">
                                    <option value="">--Pilih Jenis Kelamin--</option>
                                    <option value="Laki-Laki">Laki-Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">Suku</div>
                            <div class="col-md-8">
                                <select class="option form-control" name="suku" required="required">
                                    <option value="">--Pilih Suku--</option>
                                    <option value="Jawa">Jawa</option>
                                    <option value="Melayu">Melayu</option>
                                    <option value="Sunda">Sunda</option>
                                    <option value="Batak">Batak</option>
                                    <option value="Minang">Minang</option>
                                    <option value="Tionghoa">Tionghoa</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">Status Perkawinan</div>
                            <div class="col-md-8">
                                <select class="option form-control" name="status_kawin" required="required">
                                    <option value="">--Pilih Status Perkawinan--</option>
                                    <option value="Sudah Kawin">Sudah Kawin</option>
                                    <option value="Belum Kawin">Belum Kawin</option>
                                    <option value="Cerai Hidup">Cerai Hidup</option>
                                    <option value="Cerai Mati">Cerai Mati</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">Jumlah Tanggungan</div>
                            <div class="col-md-8">
                                <select class="option form-control" name="jmlh_tanggung" required="required">
                                    <option value="">--Pilih Jumlah Tanggungan--</option>
                                    <option value="1 Orang">1 Orang</option>
                                    <option value="2 Orang">2 Orang</option>
                                    <option value="3 Orang">3 Orang</option>
                                    <option value="4 Orang">4 Orang</option>
                                    <option value="Belum Menikah">Belum Menikah</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">Nomor HP</div>
                            <div class="col-md-8">
                                <input class="form-control" type="number" name="no_hp" required="required"
                                    placeholder="Masukkan Nomor Handphone" value="" autofocus="on">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">Nomor WhatsApp</div>
                            <div class="col-md-8">
                                <input class="form-control" type="number" name="no_wa" required="required"
                                    placeholder="Masukkan Nomor WhatsApp" value="" autofocus="on">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">Riwayat Pelatihan</div>
                            <div class="col-md-8">
                                <input class="form-control" type="text" name="riwayat_pelatihan" required="required"
                                    placeholder="Masukkan Riwayat Pelatihan" value="" autofocus="on">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">Kelas BPJS</div>
                            <div class="col-md-8">
                                <input class="form-control" type="text" name="kelas_bpjs" required="required"
                                    placeholder="Masukkan Kelas BPJS" value="" autofocus="on">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">Upload Foto</div>
                            <div class="col-md-8">
                                <input class="form-control" type="file" name="foto" required="required"
                                    value="" autofocus="on">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">

                    <input type="submit" value="Simpan Data" class="btn btn-success">

                </div>

            </form>
        </section>
    </div>
@endsection
