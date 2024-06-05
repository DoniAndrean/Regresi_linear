@extends('layout.master')

@section('konten')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">LIHAT INTERVIEW KANDIDAT</h1>
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
                    @method('put')
                    @foreach ($masterSoal as $soal)
                        <div class="form-group mb-5">
                            <div class="mb-3" style="font-size: 18px;font-weight: 500">
                                {{ $loop->iteration }}. {{ $soal->soal }}
                            </div>
                            <div class="row row-cols-4 ml-3">
                                @foreach ($options as $option)
                                    @php
                                        $optValue = $option['value'];
                                        $idSoal = $soal->id;
                                    @endphp
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="soal[{{ $soal->id }}]"
                                            id="soal_{{ $soal->id }}_{{ $option['value'] }}"
                                            value="{{ $option['value'] }}"
                                            {{ $interview->first(function ($item) use ($optValue, $idSoal) {
                                                return $item->id_soal == $idSoal && $item->jawaban == $optValue;
                                            })
                                                ? 'checked'
                                                : '' }}>
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
                    <button class="btn btn-outline-success w-100">Simpan Perubahan</button>
                </form>
            </section>
        </div>
    </div>
@endsection
