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
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        {{-- Main Content --}}
        <section class="content">
            <!-- DataTables Example -->
            <div class="card shadow mb-4">
                <!-- <div class="card-header py-3">
                                                                <h6 class="m-0 font-weight-bold text-primary">DATA KARYAWAN KONTRAK</h6>
                                                            </div> -->
                <div class="card-body">
                    <a href="{{ route('jadwal-pelatihan.create') }}" class="btn btn-info mb-2"> Tambah</a>
                    <div class="table-responsive">
                        <table class="table table-bordered" id="example2" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Waktu</th>
                                    <th>Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no = 1 @endphp
                                @foreach ($model as $p)
                                    <tr>
                                        <td>{{ $no }}</td>
                                        <td>{{ $p->waktu }}</td>
                                        <td>
                                            <button type="button" class="btn btn-info btn-xs" data-toggle="modal"
                                                data-target="#myModal{{ $p->id }}">Detail</button>
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                <a href="/cuti/edit/{{ $p->id }}" class="btn btn-success btn-xs">
                                                    <i class='fa fa-edit'></i>
                                                </a>

                                                <form action="{{ route('jadwal-pelatihan.delete', $p->id) }}" method="POST"
                                                    class="show-delete-confirm">
                                                    @csrf
                                                    @method('delete')
                                                    <button class="btn btn-danger btn-xs" title="Hapus Jadwal">
                                                        <i class='fa fa-trash'></i>
                                                    </button>
                                                </form>
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
                title: 'Hapus Jadwal',
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
