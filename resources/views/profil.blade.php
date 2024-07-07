@extends('layout/master')
@push('styles')
    <link rel="stylesheet" href="{{ asset('style/profil.css') }}">
@endpush
@section('konten')
    <div class="content-wrapper" style="width: max-content;min-width: calc(100vw - 250px);height: 110vh">
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
        <section class="content position-relative px-4" style="margin-top: 100px">
            <div class="d-flex flex-column align-items-center justify-content-center">
                <div class="position-relative" style="width: max-content;translate: -124px 0;">
                    <a class="position-card" style="position: absolute;top: 0;right:0;translate: 50% -100%"
                        href="{{ route('karyawan.detail', optional($model->where('posisi', 'GM')->first())->id_sap ?? 'null') }}">
                        <div class="photo-profile mx-auto" style="overflow: hidden;width:48px;height:48px">
                            <img src="{{ asset(optional($model->where('posisi', 'GM')->first())->foto) }}"
                                style="width: 100%;"
                                onerror="this.onerror=null; this.src='{{ asset('assets/pp_placeholder.jpg') }}';" />
                        </div>
                        <div class="position">General Manager</div>
                        <div class="text-secondary">{{ optional($model->where('posisi', 'GM')->first())->nama }}</div>
                    </a>
                    <a class="position-card" style="position: absolute;bottom: 0;left:0;translate: -100% 50%"
                        href="{{ route('karyawan.detail', optional($model->where('posisi', 'Executive Secretary')->first())->id_sap ?? 'null') }}">
                        <div class="photo-profile mx-auto" style="overflow: hidden;width:48px;height:48px">
                            <img src="{{ asset(optional($model->where('posisi', 'Executive Secretary')->first())->foto) }}"
                                style="width: 100%;"
                                onerror="this.onerror=null; this.src='{{ asset('assets/pp_placeholder.jpg') }}';" />
                        </div>
                        <div class="position">Executive Secretary</div>
                        <div class="text-secondary">
                            {{ optional($model->where('posisi', 'Executive Secretary')->first())->nama }}</div>
                    </a>
                    <div class="sudut-kanan-bawah" style="width: 48px; height: 80px"></div>
                </div>
                <div class="bar-vertical" style="height: 96px;position: relative;left:-102px"></div>
                <div class="position-relative">
                    <div class="position-relative" style="height:48px;">
                        <div class="border-ltr"
                            style="height: 100%; width:88%;; position: absolute; left:50%; translate:-50% 0"></div>
                    </div>
                    <div class="d-flex" style="gap: 36px;">
                        <div>
                            <a class="position-card"
                                href="{{ route('karyawan.detail', optional($model->where('posisi', 'GMO Head')->first())->id_sap ?? 'null') }}">
                                <div class="photo-profile mx-auto" style="overflow: hidden;width:48px;height:48px">
                                    <img src="{{ asset(optional($model->where('posisi', 'GMO Head')->first())->foto) }}"
                                        style="width: 100%;"
                                        onerror="this.onerror=null; this.src='{{ asset('assets/pp_placeholder.jpg') }}';" />
                                </div>
                                <div class="position">GMO Head</div>
                                <div class="text-secondary">
                                    {{ optional($model->where('posisi', 'GMO Head')->first())->nama }}
                                </div>
                            </a>
                        </div>
                        <div class="position-relative">
                            <div class="bar-vertical"
                                style="height: 48px;position: absolute;left:50%;top:0;translate:-50% -100%">
                            </div>
                            <a class="position-card"
                                href="{{ route('karyawan.detail', optional($model->where('posisi', 'Front Office')->first())->id_sap ?? 'null') }}">
                                <div class="photo-profile mx-auto" style="overflow: hidden;width:48px;height:48px">
                                    <img src="{{ asset(optional($model->where('posisi', 'Front Office')->first())->foto) }}"
                                        style="width: 100%;"
                                        onerror="this.onerror=null; this.src='{{ asset('assets/pp_placeholder.jpg') }}';" />
                                </div>
                                <div class="position">Front Office</div>
                                <div class="text-secondary">
                                    {{ optional($model->where('posisi', 'Front Office')->first())->nama }}</div>
                            </a>
                            <div class="position-absolute" style="bottom:0;left:50%;translate:-50% 100%">
                                <div class="position-relative">
                                    <div class="bar-vertical"
                                        style="height: 48px;position: relative;left:50%;top:0;translate:-50% 0">
                                    </div>
                                    <div class="border-ltr"
                                        style="width: 60%;height:48px;position: relative; left:50%;translate: -50% 0">
                                    </div>
                                    <div class="d-flex" style="gap: 36px">
                                        <a class="position-card"
                                            href="{{ route('karyawan.detail', optional($model->where('posisi', 'Transport')->first())->id_sap ?? 'null') }}">
                                            <div class="photo-profile mx-auto"
                                                style="overflow: hidden;width:48px;height:48px">
                                                <img src="{{ asset(optional($model->where('posisi', 'Transport')->first())->foto) }}"
                                                    style="width: 100%;"
                                                    onerror="this.onerror=null; this.src='{{ asset('assets/pp_placeholder.jpg') }}';" />
                                            </div>
                                            <div class="position">Transport</div>
                                            <div class="text-secondary">
                                                {{ optional($model->where('posisi', 'Transport')->first())->nama }}</div>
                                        </a>
                                        <a class="position-card"
                                            href="{{ route('karyawan.detail', optional($model->where('posisi', 'Health Club')->first())->id_sap ?? 'null') }}">
                                            <div class="photo-profile mx-auto"
                                                style="overflow: hidden;width:48px;height:48px">
                                                <img src="{{ asset(optional($model->where('posisi', 'Health CLub')->first())->foto) }}"
                                                    style="width: 100%;"
                                                    onerror="this.onerror=null; this.src='{{ asset('assets/pp_placeholder.jpg') }}';" />
                                            </div>
                                            <div class="position">Health Club</div>
                                            <div class="text-secondary">
                                                {{ optional($model->where('posisi', 'Health Club')->first())->nama }}
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="position-relative">
                            <div class="bar-vertical"
                                style="height: 48px;position: absolute;left:50%;top:0;translate:-50% -100%"></div>
                            <a class="position-card"
                                href="{{ route('karyawan.detail', optional($model->where('posisi', 'House Keeping')->first())->id_sap ?? 'null') }}">
                                <div class="photo-profile mx-auto" style="overflow: hidden;width:48px;height:48px">
                                    <img src="{{ asset(optional($model->where('posisi', 'House Keeping')->first())->foto) }}"
                                        style="width: 100%;"
                                        onerror="this.onerror=null; this.src='{{ asset('assets/pp_placeholder.jpg') }}';" />
                                </div>
                                <div class="position">House Keeping</div>
                                <div class="text-secondary">
                                    {{ optional($model->where('posisi', 'House Keeping')->first())->nama }}</div>
                            </a>
                        </div>
                        <div class="position-relative">
                            <div class="bar-vertical"
                                style="height: 48px;position: absolute;left:50%;top:0;translate:-50% -100%"></div>
                            <a class="position-card"
                                href="{{ route('karyawan.detail', optional($model->where('posisi', 'Engineering')->first())->id_sap ?? 'null') }}">
                                <div class="photo-profile mx-auto" style="overflow: hidden;width:48px;height:48px">
                                    <img src="{{ asset(optional($model->where('posisi', 'Engineering')->first())->foto) }}"
                                        style="width: 100%;"
                                        onerror="this.onerror=null; this.src='{{ asset('assets/pp_placeholder.jpg') }}';" />
                                </div>
                                <div class="position">Engineering</div>
                                <div class="text-secondary">
                                    {{ optional($model->where('posisi', 'Engineering')->first())->nama }}</div>
                            </a>
                        </div>
                        <div class="position-relative">
                            <div class="bar-vertical"
                                style="height: 48px;position: absolute;left:50%;top:0;translate:-50% -100%"></div>
                            <a class="position-card"
                                href="{{ route('karyawan.detail', optional($model->where('posisi', 'F&B Product')->first())->id_sap ?? 'null') }}">
                                <div class="photo-profile mx-auto" style="overflow: hidden;width:48px;height:48px">
                                    <img src="{{ asset(optional($model->where('posisi', 'F&B Product')->first())->foto) }}"
                                        style="width: 100%;"
                                        onerror="this.onerror=null; this.src='{{ asset('assets/pp_placeholder.jpg') }}';" />
                                </div>
                                <div class="position">F&B Product</div>
                                <div class="text-secondary">
                                    {{ optional($model->where('posisi', 'F&B Product')->first())->nama }}</div>
                            </a>
                        </div>
                        <div class="position-relative">
                            <div class="bar-vertical"
                                style="height: 48px;position: absolute;left:50%;top:0;translate:-50% -100%"></div>
                            <a class="position-card"
                                href="{{ route('karyawan.detail', optional($model->where('posisi', 'F&B Service')->first())->id_sap ?? 'null') }}">
                                <div class="photo-profile mx-auto" style="overflow: hidden;width:48px;height:48px">
                                    <img src="{{ asset(optional($model->where('posisi', 'F&B Service')->first())->foto) }}"
                                        style="width: 100%;"
                                        onerror="this.onerror=null; this.src='{{ asset('assets/pp_placeholder.jpg') }}';" />
                                </div>
                                <div class="position">F&B Service</div>
                                <div class="text-secondary">
                                    {{ optional($model->where('posisi', 'F&B Service')->first())->nama }}</div>
                            </a>
                        </div>
                        <div class="position-relative">
                            <div class="bar-vertical"
                                style="height: 48px;position: absolute;left:50%;top:0;translate:-50% -100%"></div>
                            <a class="position-card"
                                href="{{ route('karyawan.detail', optional($model->where('posisi', 'Eco Campy')->first())->id_sap ?? 'null') }}">
                                <div class="photo-profile mx-auto" style="overflow: hidden;width:48px;height:48px">
                                    <img src="{{ asset(optional($model->where('posisi', 'Eco Campy')->first())->foto) }}"
                                        style="width: 100%;"
                                        onerror="this.onerror=null; this.src='{{ asset('assets/pp_placeholder.jpg') }}';" />
                                </div>
                                <div class="position">Eco Campy</div>
                                <div class="text-secondary">
                                    {{ optional($model->where('posisi', 'Eco Campy')->first())->nama }}</div>
                            </a>
                        </div>
                        <div>
                            <a class="position-card"
                                href="{{ route('karyawan.detail', optional($model->where('posisi', 'Human Resource')->first())->id_sap ?? 'null') }}">
                                <div class="photo-profile mx-auto" style="overflow: hidden;width:48px;height:48px">
                                    <img src="{{ asset(optional($model->where('posisi', 'Human Resource')->first())->foto) }}"
                                        style="width: 100%;"
                                        onerror="this.onerror=null; this.src='{{ asset('assets/pp_placeholder.jpg') }}';" />
                                </div>
                                <div class="position">Human Resource</div>
                                <div class="text-secondary">
                                    {{ optional($model->where('posisi', 'Human Resource')->first())->nama }}
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
