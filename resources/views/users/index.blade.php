@extends('layout/master')
@section('konten')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Daftar User</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active">Daftar Users</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        {{-- Main Content --}}
        <section class="content">
            <!-- DataTables Example -->
            <div class="card shadow mb-4">
                <div class="card-body">
                    {{-- <a href="{{ route('soal.create') }}" class="btn btn-info mb-2">Tambah</a> --}}
                    <div class="table-responsive">
                        <table class="table table-bordered" id="example2" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th style="width: 24px;">No</th>
                                    <th>Nama</th>
                                    <th>Role</th>
                                    <th>Email</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no = 1 @endphp
                                @foreach ($model as $p)
                                    <tr>
                                        <td style="width: 24px;" class="text-center">{{ $no }}</td>
                                        <td>{{ $p->nama }}</td>
                                        <td>{{ $p->role }}</td>
                                        <td>{{ $p->email }}</td>
                                        <td>
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                <a href="{{ route('soal.edit', $p->id) }}" class="btn btn-success btn-xs">
                                                    <i class='fa fa-edit'></i>
                                                </a>

                                                {{-- <form action="{{ route('soal.delete', $p->id) }}" method="POST"
                                                    class="show-delete-confirm">
                                                    @csrf
                                                    @method('delete')
                                                    <button class="btn btn-danger btn-xs" title="Hapus Soal">
                                                        <i class='fa fa-trash'></i>
                                                    </button>
                                                </form> --}}
                                            </div>
                                        </td>
                                    </tr>
                                    @php $no++ @endphp
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
@push('scripts')
    <script>
        $('.show-delete-confirm').submit((e) => {
            const form = $(this).closest("form");
            e.preventDefault();
            Swal.fire({
                title: 'Hapus Soal',
                text: 'Apakah Anda Yakin?',
                icon: 'question',
                showCancelButton: true,
                cancelButtonText: 'Batal',
                confirmButtonText: 'Hapus',
                confirmButtonColor: '#dc3545'
            }).then((result) => {
                if (result.isConfirmed) {
                    e.currentTarget.submit()
                }
            })
        })
    </script>
@endpush
