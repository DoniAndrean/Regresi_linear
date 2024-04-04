@extends('layout/master')
@section('konten')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Jadwal Pelatihan</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active">Jadwal Pelatihan</li>
                            <li class="breadcrumb-item active">TAMBAH</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        {{-- Main Content --}}
        <section class="content">
            <h3>Tambah Karyawan</h3>

            <a href="{{ url()->previous() }}" class="btn btn-default"> Kembali</a>
            <form action="{{ route('jadwal-pelatihan.store') }}" method="POST"
                style="background: #FFFFFF;border-radius:20px;" class="p-4">
                @method('post')
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div>
                            <label for="waktu">Waktu Pelatihan</label>
                            <input class="form-control  @error('waktu') is-invalid @enderror" type="datetime-local"
                                name="waktu" required="required">
                            @error('waktu')
                                <div class="invalid-feedback">{{ $message }} </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-end">
                    <button type="submit"class="btn btn-success">Simpan Jadwal</button>
                </div>

            </form>
        </section>
    </div>
@endsection
