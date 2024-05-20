@extends('layout.master')

@section('konten')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">INTERVIEW KANDIDAT</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item"><a href="/kandidat">KANDIDAT</a></li>
                            <li class="breadcrumb-item active">INTERVIEW</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
            <section class="content">
                <form action="/kandidat/interview/{{ $model->id_kandidat }}" method="POST" class="soal-wrapper">
                    @csrf
                    @foreach ($masterSoal as $soal)
                        <div class="form-group mb-5">
                            <div class="mb-3" style="font-size: 18px;font-weight: 500">
                                {{ $loop->iteration }}. {{ $soal->soal }}
                            </div>
                            <div class="row row-cols-4 ml-3">
                                @foreach ($options as $option)
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="soal[{{ $soal->id }}]"
                                            id="soal_{{ $soal->id }}_{{ $option['value'] }}"
                                            value="{{ $option['value'] }}">
                                        <label class="form-check-label"
                                            for="soal_{{ $soal->id }}_{{ $option['value'] }}">
                                            {{ $option['label'] }}
                                        </label>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <hr>
                    @endforeach
                    <button class="btn btn-success w-100">Simpan</button>
                </form>
            </section>
        </div>
    </div>
@endsection
