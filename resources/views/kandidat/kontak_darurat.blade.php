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
                    <span class=""
                        style="border-radius:100px;background: #EABE6C;padding:6px 9px;width:100px;height:50px;">1.</span>
                    Personal Data
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

            <form action="/kandidat/tambah-pendidikan-proses" method="POST" enctype="multipart/form-data"
                style="background: #FFFFFF;border-radius:20px;" class="p-4">
                {{ csrf_field() }}
                <input class="form-control" type="hidden" name="id_kandidat" required="required"
                    placeholder="Masukkan Bahasa Lain" autofocus="on" value="{{ $id }}">
                <div class="row">
                    <div class="col-md-12">
                        <h4>Kontak Darurat</h4>
                    </div>
                    <!-- #3 -->
                    <div class="col-md-12 row">
                        <div class="col-md-4">
                            <div class="row mb-3">
                                <div class="col-md-12">Nama Kontak Darurat</div>
                                <div class="col-md-12">
                                    <input class="form-control" type="text" name="nama_keluarga" required="required"
                                        placeholder="Masukkan Nama Keluarga" value="" autofocus="on">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="row mb-3">
                                <div class="col-md-12">Relation</div>
                                <div class="col-md-12">
                                    <input class="form-control" type="text" name="relation" required="required"
                                    placeholder="Masukkan Relation" value="" autofocus="on">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="row mb-3">
                                <div class="col-md-12">Age</div>
                                <div class="col-md-12">
                                    <input class="form-control" type="text" name="age" required="required"
                                    placeholder="Masukkan Relation" value="" autofocus="on">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="row mb-3">
                                <div class="col-md-12">Address</div>
                                <div class="col-md-12">
                                    <input class="form-control" type="text" name="address" required="required"
                                    placeholder="Masukkan Relation" value="" autofocus="on">
                                </div>
                            </div>
                        </div>
                        <!-- Submit -->
                        <div class="col-12 mb-3">
                            <input type="submit" value="Simpan Data" class="btn btn-success">

                        </div>
                    </div>

                    <!-- #3 -->
                    @foreach ($pendidikan as $key => $value)
                        <div class="col-md-12 row">
                            <div class="col-md-4">
                                <div class="row mb-3">
                                    <div class="col-md-12">Nama Sekolah</div>
                                    <div class="col-md-12">
                                        <input class="form-control" type="text" value="{{ $value->nama_sekolah }}"
                                            disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="row mb-3">
                                    <div class="col-md-12">Jenjang</div>
                                    <div class="col-md-12">
                                        <input class="form-control" type="text" value="{{ $value->jenjang }}"
                                            disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="row mb-3">
                                    <div class="col-md-12">From</div>
                                    <div class="col-md-12">
                                        <input class="form-control" type="text" value="{{ $value->tahun_from }}"
                                            disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="row mb-3">
                                    <div class="col-md-12">To</div>
                                    <div class="col-md-12">
                                        <input class="form-control" type="text" value="{{ $value->tahun_to }}"
                                            disabled>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="row mb-3">
                                    <div class="col-md-12">GPA</div>
                                    <div class="col-md-12">
                                        <input class="form-control" type="text" value="{{ $value->gpa }}" disabled>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

            </form>
        </section>
    </div>
@endsection
