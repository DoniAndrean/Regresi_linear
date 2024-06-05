@extends('layout/master')
@section('konten')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">DATA KANDIDAT</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active">KANDIDAT</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <!-- DataTables Example -->
            <div class="card shadow mb-4">
                <div class="card-body">
                    {{-- <a href="{{ url('/kandidat/tambah') }}" class="btn btn-info mb-2"> Tambah</a> --}}
                    <a href="{{ url('/kandidat/generate') }}" class="btn btn-info mb-2"> Tambah Antrian</a>
                    <a href="{{ url('/form-kandidat') }}" target="_blank" class="btn btn-success mb-2">Pengisian
                        Data Karyawan</a>
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <tr>
                                <th>No</th>
                                <th>Code</th>
                                <th>Posisi</th>
                                <th>Informasi Lowongan</th>
                                <th>Nama</th>
                                <th>Umur</th>
                                <th>Tempat Lahir</th>
                                <th>Tanggal Lahir</th>
                                <th>Opsi</th>
                            </tr>
                            @php $no = 1 @endphp
                            @foreach ($model as $p)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $p->id_kandidat }} <span class="btn-copy text-secondary"
                                            data-id="{{ $p->id_kandidat }}"><i class="fa fa-clipboard"></i></span></td>
                                    <td>{{ $p->posisi ?? '-' }}</td>
                                    <td>{{ $p->informasi_lowongan ?? '-' }}</td>
                                    <td>{{ $p->nama ?? '-' }}</td>
                                    <td>{{ $p->umur ?? '-' }}</td>
                                    <td>{{ $p->tempat_lahir ?? '-' }}</td>
                                    <td>{{ $p->tanggal_lahir ?? '-' }}</td>
                                    <td>
                                        <a href="/kandidat/personal-data/{{ $p->id_kandidat }}" class="btn btn-info "
                                            title="Detail">
                                            <i class='fa fa-eye'></i>
                                        </a>

                                        <a href="/kandidat/hapus/{{ $p->id_kandidat }}" class="btn btn-danger"
                                            title="Hapus" onclick="return confirm('Apakah anda yakin?')">
                                            <i class='fa fa-trash'></i>
                                        </a>
                                        <a href="kandidat/rekap/{{ $p->id_kandidat }}" class="btn btn-warning"
                                            title="Rekap">
                                            <i class='fa fa-file'></i>
                                        </a>
                                        {{-- <a href="form-kandidat/{{ $p->id_kandidat }}/personal" class="btn btn-secondary"
                                            title="Rekap">
                                            <i class='fa fa-file'></i>
                                        </a> --}}
                                        @if ($p->telah_interview)
                                            <a href="/kandidat/interview/{{ $p->id_kandidat }}/edit"
                                                class="btn btn-primary" title="Hasil Interview">
                                                Lihat Hasil Interview
                                            </a>
                                        @else
                                            <a href="/kandidat/interview/{{ $p->id_kandidat }}" class="btn btn-success"
                                                title="Interview">
                                                Interview
                                            </a>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </table>

                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
@push('scripts')
    <script>
        $(".btn-copy").on("click", (e) => {
            const id = $(e.currentTarget).data("id")
            var tempTextarea = $('<textarea>');
            $('body').append(tempTextarea);
            tempTextarea.val(id).select();
            document.execCommand('copy');

            tempTextarea.remove();

            Swal.fire({
                toast: true,
                icon: 'success',
                title: 'Kode antrian berhasil disalin ke clipboard!',
                animation: false,
                position: 'bottom',
                showConfirmButton: false,
                timer: 1000,
                timerProgressBar: false,
                showClass: {
                    popup: "",
                },
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })
        })
    </script>
@endpush
