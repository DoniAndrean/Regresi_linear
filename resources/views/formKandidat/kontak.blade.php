@extends('formKandidat.layout')

@section('konten')
    <div>
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Employee Application Form</h1>
                    </div>
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
            <a href="{{ route('form.pengalaman', $id) }}" class="btn-next-page btn btn-primary">
                Selanjutnya
                <i class="fa fa-angle-right"></i>
            </a>
            <form action="{{ route('form.kontak', $id) }}" method="POST" enctype="multipart/form-data"
                style="background: #FFFFFF;border-radius:20px;" class="p-4">
                {{ csrf_field() }}
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
                                    <input class="form-control" type="text" name="nama_kontak_darurat"
                                        required="required" placeholder="Masukkan Nama Kontak Darurat" value=""
                                        autofocus="on">
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
                    @foreach ($kontak_darurat as $key => $value)
                        <div class="col-md-12 row">
                            <div class="col-md-4">
                                <div class="row mb-3">
                                    <div class="col-md-12">Nama Kontak Darurat</div>
                                    <div class="col-md-12">
                                        <input class="form-control" type="text" value="{{ $value->nama_kontak_darurat }}"
                                            disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="row mb-3">
                                    <div class="col-md-12">Relation</div>
                                    <div class="col-md-12">
                                        <input class="form-control" type="text" value="{{ $value->relation }}" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="row mb-3">
                                    <div class="col-md-12">Age</div>
                                    <div class="col-md-12">
                                        <input class="form-control" type="text" value="{{ $value->age }}" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="row mb-3">
                                    <div class="col-md-12">Address</div>
                                    <div class="col-md-12">
                                        <input class="form-control" type="text" value="{{ $value->address }}" disabled>
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
