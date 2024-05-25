@extends('formKandidat.layout')

@section('konten')
    <div class="size-screen wrapper-form-kandidat">
        <div class="card w-max p-5">
            <div class="heading">Masukkan Kode Antrian Kandidat anda</div>
            <hr>
            <form action="/form-kandidat/input-kode" class="d-flex flex-column gap-2" method="POST">
                @csrf
                <input class="form-control form-control-lg" type="text" placeholder="Kode" name="kode" required>
                <button class="btn-success btn">
                    Kirim
                </button>
            </form>
        </div>
    </div>
@endsection
