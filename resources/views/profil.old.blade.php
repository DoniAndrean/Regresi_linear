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
                    <a href="{{ route('karyawan.detail', optional($model->where('posisi', 'GM')->first())->id_sap ?? 'null') }}"
                        class="struktur-card">
                        <div>General Manager</div>
                        <div>{{ optional($model->where('posisi', 'GM')->first())->nama }}</div>
                    </a>
                    <a href="{{ route('karyawan.detail', optional($model->where('posisi', 'Executive Secretary')->first())->id_sap ?? 'null') }}"
                        class="struktur-card ml-4">
                        <div>Executive Secretary</div>
                        <div>{{ optional($model->where('posisi', 'Executive Secretary')->first())->nama }}</div>
                    </a>
                    <div class="d-flex flex-column gap-2 ml-4">
                        <a href="{{ route('karyawan.detail', optional($model->where('posisi', 'GMO Head')->first())->id_sap ?? 'null') }}"
                            class="struktur-card ml-4">
                            <div>GMO Head</div>
                            <div>{{ optional($model->where('posisi', 'GMO Head')->first())->nama }}</div>
                        </a>
                        <div class="d-flex flex-column gap-2 ml-4">
                            <a href="{{ route('karyawan.detail', optional($model->where('posisi', 'Front Office')->first())->id_sap ?? 'null') }}"
                                class="struktur-card ml-4">
                                <div>Front Office</div>
                                <div>{{ optional($model->where('posisi', 'Front Office')->first())->nama }}</div>
                            </a>
                            <div class="d-flex flex-column gap-2 ml-4">
                                <a href="{{ route('karyawan.detail', optional($model->where('posisi', 'Transport')->first())->id_sap ?? 'null') }}"
                                    class="struktur-card ml-4">
                                    <div>Transport</div>
                                    <div>{{ optional($model->where('posisi', 'Transport')->first())->nama }}</div>
                                </a>
                                <a href="{{ route('karyawan.detail', optional($model->where('posisi', 'Health Club')->first())->id_sap ?? 'null') }}"
                                    class="struktur-card ml-4">
                                    <div>Health Club</div>
                                    <div>{{ optional($model->where('posisi', 'Health Club')->first())->nama }}</div>
                                </a>
                            </div>
                            <a href="{{ route('karyawan.detail', optional($model->where('posisi', 'House Keeping')->first())->id_sap ?? 'null') }}"
                                class="struktur-card ml-4">
                                <div>House Keeping</div>
                                <div>{{ optional($model->where('posisi', 'House Keeping')->first())->nama }}</div>
                            </a>
                            <a href="{{ route('karyawan.detail', optional($model->where('posisi', 'Engineering')->first())->id_sap ?? 'null') }}"
                                class="struktur-card ml-4">
                                <div>Engineering</div>
                                <div>{{ optional($model->where('posisi', 'Engineering')->first())->nama }}</div>
                            </a>
                            <a href="{{ route('karyawan.detail', optional($model->where('posisi', 'F&B Product')->first())->id_sap ?? 'null') }}"
                                class="struktur-card ml-4">
                                <div>F&B Product</div>
                                <div>{{ optional($model->where('posisi', 'F&B Product')->first())->nama }}</div>
                            </a>
                            <a href="{{ route('karyawan.detail', optional($model->where('posisi', 'F&B Service')->first())->id_sap ?? 'null') }}"
                                class="struktur-card ml-4">
                                <div>F&B Service</div>
                                <div>{{ optional($model->where('posisi', 'F&B Service')->first())->nama }}</div>
                            </a>
                            <a href="{{ route('karyawan.detail', optional($model->where('posisi', 'Eco Campy')->first())->id_sap ?? 'null') }}"
                                class="struktur-card ml-4">
                                <div>Eco Campy</div>
                                <div>{{ optional($model->where('posisi', 'Eco Campy')->first())->nama }}</div>
                            </a>
                            <a href="{{ route('karyawan.detail', optional($model->where('posisi', 'Human Resource')->first())->id_sap ?? 'null') }}"
                                class="struktur-card ml-4">
                                <div>Human Resource</div>
                                <div>{{ optional($model->where('posisi', 'Human Resource')->first())->nama }}</div>
                            </a>
                        </div>
                    </div>
                </div>
        </section>

    </div>
@endsection
