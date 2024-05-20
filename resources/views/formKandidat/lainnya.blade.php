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

            <form action="{{ route('form.lainnya.store', $id) }}" method="POST" enctype="multipart/form-data"
                style="background: #FFFFFF;border-radius:20px;" class="p-4">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-md-12">
                        <h4>Lainnya</h4>
                    </div>
                    <!-- #3 -->
                    <div class="col-md-12 row">
                        <div class="col-md-4">
                            <div class="row mb-3">
                                <div class="col-md-12">Expected Basic</div>
                                <div class="col-md-12">
                                    <input class="form-control" type="text" name="expected_basic" required="required"
                                        placeholder="Masukkan Nama Keluarga" value="{{ $kandidat->expected_basic ?? '' }}"
                                        autofocus="on">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="row mb-3">
                                <div class="col-md-12">Expected Allowence</div>
                                <div class="col-md-12">
                                    <input class="form-control" type="text" name="expected_allowence" required="required"
                                        placeholder="Masukkan Relation" value="{{ $kandidat->expected_allowence ?? '' }}"
                                        autofocus="on">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="row mb-3">
                                <div class="col-md-12">Total Salary</div>
                                <div class="col-md-12">
                                    <input class="form-control" type="number" name="total_salary" required="required"
                                        placeholder="Masukkan Relation" value="{{ $kandidat->total_salary ?? '' }}"
                                        autofocus="on">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="row mb-3">
                                <div class="col-md-12">Your Wishes</div>
                                <div class="col-md-12">
                                    <input class="form-control" type="text" name="your_wishes" required="required"
                                        placeholder="Masukkan Relation" value="{{ $kandidat->your_wishes ?? '' }}"
                                        autofocus="on">
                                </div>
                            </div>
                        </div>
                        <!-- Submit -->
                        <button type="submit" value="Simpan Data" class="btn btn-success">Simpan Data</button>

                    </div>
                </div>

            </form>
        </section>
    </div>
@endsection
