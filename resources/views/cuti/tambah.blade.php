@extends('layout.master')
@section('konten')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Data Cuti</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item"><a href="/cuti">Cuti</a></li>
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
            <h3>Tambah Cuti</h3>

            <a href="/cuti" class="btn btn-default"> Kembali</a>

            <br />
            <br />

            <form action="/cuti/store" method="POST" enctype="multipart/form-data"
                style="background: #FFFFFF;border-radius:20px;" class="p-4">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-md-6">
                        <div class="row mb-3">
                            <div class="col-md-4">SAP</div>
                            <div class="col-md-8">
                                <select class="option form-control" name="id_sap" required="required">
                                    <option value="">--Pilih Karyawan--</option>
                                    @foreach ($model as $key => $value)
                                        <option value="{{ $value->id_sap }}" selected>{{ $value->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">Jenis Cuti</div>
                            <div class="col-md-8">
                                <select class="option form-control" name="jenis_cuti" required="required">
                                    <option value="">--Pilih Jenis Cuti--</option>
                                    @if (Auth::user()->role === 'admin')
                                        @foreach ($modelMasterCuti as $key => $value)
                                            @if ($value->id_cuti === 2)
                                                @if (in_array(Auth::user()->karyawan->level_karyawan, ['GM', 'Head Of Department', 'Assistant Head Department']))
                                                    <option value="{{ $value->id_cuti }}">{{ $value->jenis_cuti }}</option>
                                                @endif
                                            @else
                                                <option value="{{ $value->id_cuti }}">{{ $value->jenis_cuti }}</option>
                                            @endif
                                        @endforeach
                                    @else
                                        @foreach ($modelMasterCuti as $key => $value)
                                            <option value="{{ $value->id_cuti }}">{{ $value->jenis_cuti }}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">Jumlah Cuti</div>
                            <div class="col-md-8">
                                <input class="form-control" type="number" name="jumlah_cuti" required="required"
                                    placeholder="" value="1" autofocus="on">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">Start Cuti</div>
                            <div class="col-md-8">
                                <input class="form-control" type="date" name="start_cuti" required="required"
                                    placeholder="Masukkan Start Cuti" value="{{ date('Y-m-d') }}" autofocus="on">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">End Cuti</div>
                            <div class="col-md-8">
                                <input class="form-control" type="date" name="end_cuti" required="required"
                                    placeholder="Masukkan End Cuti" value="{{ date('Y-m-d') }}" autofocus="on">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">Alasan Cuti</div>
                            <div class="col-md-8">
                                <input class="form-control" type="text" name="alasan_cuti" required="required"
                                    placeholder="Masukkan Alasan Cuti" value="" autofocus="on">
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
