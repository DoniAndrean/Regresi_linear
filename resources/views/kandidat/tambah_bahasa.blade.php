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
        <div class="pull-right float-end float-right d-flex">
            <div class="mx-3">
                <a href="/kandidat/personal-data/{{ $id }}" class="text-black">
                    <span class=""
                        style="border-radius:100px;background: #EABE6C;padding:6px 9px;width:100px;height:50px;">1.</span>
                    Personal Data
                </a>
            </div>
            <div class="mx-3">
                <a href="/kandidat/tambah-bahasa/{{ $id }}" class="text-black">
                    <span class="text-black"
                        style="border-radius:100px;background: #EABE6C;padding:6px 9px;width:100px;height:50px;">2.</span>
                    Bahasa
                </a>
            </div>
            <div class="mx-3">
                <a href="/kandidat/tambah-pendidikan/{{ $id }}">
                    <span class=""
                        style="border-radius:100px;background: #EABE6C;padding:6px 9px;width:100px;height:50px;">3.</span>
                    Pendidikan
                </a>
            </div>
            <div class="mx-3">
                <a href="/kandidat/tambah-keluarga/{{ $id }}">
                    <span class=""
                        style="border-radius:100px;background: #EABE6C;padding:6px 9px;width:100px;height:50px;">4.</span>
                    Keluarga
                </a>
            </div>
            <div class="mx-3">
                <a href="/kandidat/tambah-kontak-darurat/{{ $id }}">
                    <span class=""
                        style="border-radius:100px;background: #EABE6C;padding:6px 9px;width:100px;height:50px;">5.</span>
                    Kontak Darurat
                </a>
            </div>
            <div class="mx-3">
                <a href="/kandidat/tambah-pengalaman/{{ $id }}">
                    <span class=""
                        style="border-radius:100px;background: #EABE6C;padding:6px 9px;width:100px;height:50px;">6.</span>
                    Pengalaman
                </a>
            </div>
            <div class="mx-3">
                <a href="/kandidat/tambah-lainnya/{{ $id }}">
                    <span class="rounded-circle"
                        style="border-radius:100px;background: #EABE6C;padding:6px 9px;width:100px;height:50px;">7.</span>
                    Lainnya
                </a>
            </div>
        </div>

        <br />
        <br />

        <form action="/kandidat/tambah-bahasa-proses" method="POST" enctype="multipart/form-data"
            style="background: #FFFFFF;border-radius:20px;" class="p-4">
            {{ csrf_field() }}
            <input class="form-control" type="hidden" name="id_kandidat" required="required"
                placeholder="Masukkan Bahasa Lain" autofocus="on" value="{{ $id }}">
            <div class="row">
                <div class="col-md-12">
                    <h4>Bahasa</h4>
                </div>
                <!-- #3 -->
                <div class="col-md-12 row">
                    <div class="col-md-3">
                        <div class="row mb-3">
                            <div class="col-md-12">Bahasa Lain</div>
                            <div class="col-md-12">
                                <input class="form-control" type="text" name="bahasa_lain" required="required"
                                    placeholder="Masukkan Bahasa Lain" value="" autofocus="on">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="row mb-3">
                            <div class="col-md-12">Membaca</div>
                            <div class="col-md-12">
                                <select name="membaca" id="" class="form-control">
                                    <option value="cukup">Cukup</option>
                                    <option value="baik">Baik</option>
                                    <option value="fasih">Fasih</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="row mb-3">
                            <div class="col-md-12">Menulis</div>
                            <div class="col-md-12">
                                <select name="menulis" id="" class="form-control">
                                    <option value="cukup">Cukup</option>
                                    <option value="baik">Baik</option>
                                    <option value="fasih">Fasih</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="row mb-3">
                            <div class="col-md-12">Berbicara</div>
                            <div class="col-md-12">
                                <select name="berbicara" id="" class="form-control">
                                    <option value="cukup">Cukup</option>
                                    <option value="baik">Baik</option>
                                    <option value="fasih">Fasih</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- #3 -->
                @foreach ($bahasa as $key => $value)
                <div class="col-md-12 row">
                    <div class="col-md-3">
                        <div class="row mb-3">
                            <div class="col-md-12">Bahasa Lain</div>
                            <div class="col-md-12">
                                <input class="form-control" type="text" value="{{ $value->bahasa_lain }}" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="row mb-3">
                            <div class="col-md-12">Membaca</div>
                            <div class="col-md-12">
                                <input class="form-control" type="text" value="{{ $value->membaca }}" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="row mb-3">
                            <div class="col-md-12">Menulis</div>
                            <div class="col-md-12">
                                <input class="form-control" type="text" value="{{ $value->menulis }}" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="row mb-3">
                            <div class="col-md-12">Berbicara</div>
                            <div class="col-md-12">
                                <input class="form-control" type="text" value="{{ $value->berbicara }}" disabled>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
            <!-- Submit -->
            <div class="row mb-3">
                <input type="submit" value="Simpan Data" class="btn btn-success">

            </div>

        </form>
    </section>
</div>
@endsection