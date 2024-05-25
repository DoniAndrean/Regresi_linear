@extends('layout/master')
@section('konten')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Master Soal Interview</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active">Master Soal</li>
                            <li class="breadcrumb-item active">TAMBAH</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        {{-- Main Content --}}
        <section class="content">
            <h3>Tambah Soal Interview</h3>

            <a href="{{ url()->previous() }}" class="btn btn-default"> Kembali</a>
            <form action="{{ route('soal.store') }}" method="POST" style="background: #FFFFFF;border-radius:20px;"
                class="p-4">
                @method('post')
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div>
                            <label for="soal">Soal</label>
                            <input class="form-control  @error('soal') is-invalid @enderror" type="text" name="soal"
                                required="required" autofocus>
                            @error('soal')
                                <div class="invalid-feedback">{{ $message }} </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-end">
                    <button type="submit"class="btn btn-success">Simpan Soal</button>
                </div>

            </form>
        </section>
    </div>
@endsection
