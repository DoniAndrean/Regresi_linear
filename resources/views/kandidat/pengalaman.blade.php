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

            <form action="/kandidat/tambah-pengalaman-proses" method="POST" enctype="multipart/form-data"
                style="background: #FFFFFF;border-radius:20px;" class="p-4">
                {{ csrf_field() }}
                <input class="form-control" type="hidden" name="id_kandidat" required="required"
                    placeholder="Masukkan Bahasa Lain" autofocus="on" value="{{ $id }}">
                <div class="row">
                    <div class="col-md-12">
                        <h4>Pengalaman</h4>
                    </div>
                    <!-- #3 -->
                    <div class="col-md-12 row">
                        <div class="col-md-4">
                            <div class="row mb-3">
                                <div class="col-md-12">Company Name</div>
                                <div class="col-md-12">
                                    <input class="form-control" type="text" name="company_name" required="required"
                                        placeholder="Masukkan Nama Keluarga" value="" autofocus="on">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="row mb-3">
                                <div class="col-md-12">Position</div>
                                <div class="col-md-12">
                                    <input class="form-control" type="text" name="position" required="required"
                                    placeholder="Masukkan Relation" value="" autofocus="on">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="row mb-3">
                                <div class="col-md-12">Periode</div>
                                <div class="col-md-12">
                                    <input class="form-control" type="text" name="periode" required="required"
                                    placeholder="Masukkan Relation" value="" autofocus="on">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="row mb-3">
                                <div class="col-md-12">Salary</div>
                                <div class="col-md-12">
                                    <input class="form-control" type="text" name="salary" required="required"
                                    placeholder="Masukkan Relation" value="" autofocus="on">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row mb-3">
                                <div class="col-md-12">Main Duties</div>
                                <div class="col-md-12">
                                    <textarea name="main_duties" id="" cols="100" rows="4" class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row mb-3">
                                <div class="col-md-12">Reason For Leaving</div>
                                <div class="col-md-12">
                                    <textarea name="reason_for_leaving" id="" cols="100" rows="4" class="form-control"></textarea>

                                </div>
                            </div>
                        </div>
                        <!-- Submit -->
                        <div class="col-12 mb-3">
                            <input type="submit" value="Simpan Data" class="btn btn-success">

                        </div>
                    </div>

                    <!-- #3 -->
                    @foreach ($pengalaman as $key => $value)
                        <div class="col-md-12 row">
                            <div class="col-md-4">
                                <div class="row mb-3">
                                    <div class="col-md-12">Company Name</div>
                                    <div class="col-md-12">
                                        <input class="form-control" type="text" value="{{ $value->company_name }}"
                                            disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="row mb-3">
                                    <div class="col-md-12">Position</div>
                                    <div class="col-md-12">
                                        <input class="form-control" type="text" value="{{ $value->position }}"
                                            disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="row mb-3">
                                    <div class="col-md-12">Periode</div>
                                    <div class="col-md-12">
                                        <input class="form-control" type="text" value="{{ $value->periode }}"
                                            disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="row mb-3">
                                    <div class="col-md-12">Salary</div>
                                    <div class="col-md-12">
                                        <input class="form-control" type="text" value="{{ $value->salary }}"
                                            disabled>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="row mb-3">
                                    <div class="col-md-12">Main</div>
                                    <div class="col-md-12">
                                        <input class="form-control" type="text" value="{{ $value->main_duties }}" disabled>
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
