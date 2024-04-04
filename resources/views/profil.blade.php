@extends('layout/master')
@section('konten')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Struktur Organisasi</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content pb-2">
            <div class="container-fluid">
                <div class="d-flex flex-column gap-2">
                    <div class="struktur-card">
                        <div>General Manager</div>
                        <div>Afif Khairi</div>
                    </div>
                    <div class="struktur-card ml-4">
                        <div>Executive Secretary</div>
                        <div>Achira Puji Lestari</div>
                    </div>
                    <div class="d-flex flex-column gap-2 ml-4">
                        <div class="struktur-card ml-4">
                            <div>GMO Head</div>
                            <div>Bambang Iswanto</div>
                        </div>
                        <div class="d-flex flex-column gap-2 ml-4">
                            <div class="struktur-card ml-4">
                                <div>Front Office</div>
                                <div>Sandy Lee</div>
                            </div>
                            <div class="d-flex flex-column gap-2 ml-4">
                                <div class="struktur-card ml-4">
                                    <div>Transport</div>
                                    <div>Ade Saputra</div>
                                </div>
                                <div class="struktur-card ml-4">
                                    <div>Helath Club</div>
                                    <div>Antoni</div>
                                </div>
                            </div>
                            <div class="struktur-card ml-4">
                                <div>House Keeping</div>
                                <div>Abdul Rosyid</div>
                            </div>
                            <div class="struktur-card ml-4">
                                <div>Engineering</div>
                                <div>Kurnia Prasetyo</div>
                            </div>
                            <div class="struktur-card ml-4">
                                <div>F&B Product</div>
                                <div>M. Apriantoro</div>
                            </div>
                            <div class="struktur-card ml-4">
                                <div>F&B Service</div>
                                <div>Zaenal Paijo</div>
                            </div>
                            <div class="struktur-card ml-4">
                                <div>Eco Campy</div>
                                <div>Suranto</div>
                            </div>
                            <div class="struktur-card ml-4">
                                <div>Human Resource</div>
                                <div>Cliff Malonda</div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>

    </div>
@endsection
