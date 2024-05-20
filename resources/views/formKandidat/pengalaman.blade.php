@extends('formKandidat.layout')

@section('konten')
    <div>
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
            @include('formKandidat.stepmenu')


            <br />
            <br />
            <a href="{{ route('form.lainnya', $id) }}" class="btn-next-page btn btn-primary">
                Selanjutnya
                <i class="fa fa-angle-right"></i>
            </a>
            <form action="{{ route('form.pengalaman.store', $id) }}" method="POST" enctype="multipart/form-data"
                style="background: #FFFFFF;border-radius:20px;" class="p-4">
                {{ csrf_field() }}
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
                                        <input class="form-control" type="text" value="{{ $value->salary }}" disabled>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="row mb-3">
                                    <div class="col-md-12">Main</div>
                                    <div class="col-md-12">
                                        <input class="form-control" type="text" value="{{ $value->main_duties }}"
                                            disabled>
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
