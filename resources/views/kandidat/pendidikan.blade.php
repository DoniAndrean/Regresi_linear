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

            <a href="/kandidat/tambah" class="btn btn-default"> Kembali</a>
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
                    <span class=""
                        style="border-radius:100px;background: #EABE6C;padding:6px 9px;width:100px;height:50px;">4.</span>
                    Keluarga
                </div>
                <div class="mx-3">
                    <span class=""
                        style="border-radius:100px;background: #EABE6C;padding:6px 9px;width:100px;height:50px;">5.</span>
                    Kontak Darurat
                </div>
                <div class="mx-3">
                    <span class=""
                        style="border-radius:100px;background: #EABE6C;padding:6px 9px;width:100px;height:50px;">6.</span>
                    Pengalaman
                </div>
                <div class="mx-3">
                    <span class="rounded-circle"
                        style="border-radius:100px;background: #EABE6C;padding:6px 9px;width:100px;height:50px;">7.</span>
                    Lainnya
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
                        <h4>Pendidikan Formal</h4>
                    </div>
                    <!-- #3 -->
                    <div class="col-md-12 row">
                        <div class="col-md-4">
                            <div class="row mb-3">
                                <div class="col-md-12">Nama Sekolah</div>
                                <div class="col-md-12">
                                    <input class="form-control" type="text" name="nama_sekolah" required="required"
                                        placeholder="Masukkan Nama Sekolah" value="" autofocus="on">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="row mb-3">
                                <div class="col-md-12">Jenjang</div>
                                <div class="col-md-12">
                                    <select name="jenjang" id="" class="form-control">
                                        <option>Tidak Sekolah</option>
                                        <option>TK</option>
                                        <option>SD</option>
                                        <option>SMP</option>
                                        <option>SMA</option>
                                        <option>S1</option>
                                        <option>S2</option>
                                        <option>S3</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="row mb-3">
                                <div class="col-md-12">From</div>
                                <div class="col-md-12">
                                    <select name="tahun_from" id="" class="form-control">
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
                                    <select name="tahun_to" id="" class="form-control">
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
                                    <input class="form-control" type="text" name="gpa" required="required"
                                        placeholder="Masukkan GPA" value="" autofocus="on">
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
                                    <input class="form-control" type="text" value="{{$value->nama_sekolah}}" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="row mb-3">
                                <div class="col-md-12">Jenjang</div>
                                <div class="col-md-12">
                                    <input class="form-control" type="text" value="{{$value->jenjang}}" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="row mb-3">
                                <div class="col-md-12">From</div>
                                <div class="col-md-12">
                                    <input class="form-control" type="text" value="{{$value->tahun_from}}" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="row mb-3">
                                <div class="col-md-12">To</div>
                                <div class="col-md-12">
                                    <input class="form-control" type="text" value="{{$value->tahun_to}}" disabled>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="row mb-3">
                                <div class="col-md-12">GPA</div>
                                <div class="col-md-12">
                                    <input class="form-control" type="text" value="{{$value->gpa}}" disabled>
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
