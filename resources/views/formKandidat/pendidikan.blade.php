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
            <a href="{{ route('form.keluarga', $id) }}" class="btn-next-page btn btn-primary">
                Selanjutnya
                <i class="fa fa-angle-right"></i>
            </a>
            <form action="{{ route('form.pendidikan', $id) }}" method="POST" enctype="multipart/form-data"
                style="background: #FFFFFF;border-radius:20px;" class="p-4">
                {{ csrf_field() }}
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
                                        <input class="form-control" type="text" value="{{ $value->nama_sekolah }}"
                                            disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="row mb-3">
                                    <div class="col-md-12">Jenjang</div>
                                    <div class="col-md-12">
                                        <input class="form-control" type="text" value="{{ $value->jenjang }}" disabled>
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
                                        <input class="form-control" type="text" value="{{ $value->tahun_to }}" disabled>
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
            <br>
            {{-- informal --}}
            <form action="{{ route('form.institusi.store', $id) }}" method="POST" enctype="multipart/form-data"
                style="background: #FFFFFF;border-radius:20px;" class="p-4">
                {{ csrf_field() }}
                <input class="form-control" type="hidden" name="id_kandidat" required="required"
                    placeholder="Masukkan Bahasa Lain" autofocus="on" value="{{ $id }}">
                <div class="row">
                    <div class="col-md-12">
                        <h4>Pendidikan Informal</h4>
                    </div>
                    <!-- #3 -->
                    <div class="col-md-12 row">
                        <div class="col-md-4">
                            <div class="row mb-3">
                                <div class="col-md-12">Institusi</div>
                                <div class="col-md-12">
                                    <input class="form-control" type="text" name="institusi" required="required"
                                        placeholder="Masukkan Institusi" value="" autofocus="on">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="row mb-3">
                                <div class="col-md-12">Major</div>
                                <div class="col-md-12">
                                    <input class="form-control" type="text" name="major" required="required"
                                        placeholder="Masukkan Major" value="" autofocus="on">
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
                    @foreach ($pendidikan_informal as $key => $value)
                        <div class="col-md-12 row">
                            <div class="col-md-4">
                                <div class="row mb-3">
                                    <div class="col-md-12">Institusi</div>
                                    <div class="col-md-12">
                                        <input class="form-control" type="text" value="{{ $value->institusi }}"
                                            disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="row mb-3">
                                    <div class="col-md-12">Major</div>
                                    <div class="col-md-12">
                                        <input class="form-control" type="text" value="{{ $value->major }}" disabled>
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
