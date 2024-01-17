@extends('layout.master')

@section('konten')
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0">Data Karyawan Kontrak</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="/">Home</a></li>
						<li class="breadcrumb-item"><a href="/karyawan">Karyawan</a></li>
						<li class="breadcrumb-item active">Edit</li>
					</ol>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>

	<!-- Main content -->
	<section class="content">
		<script src="https://cdn.ckeditor.com/ckeditor5/35.1.0/classic/ckeditor.js"></script>
		<h2>Edit Data</h2>

		<a href="/karyawan" class="btn btn-default"> Kembali</a>

		<br />
		<br />

		<form action="/karyawan/update" method="POST" enctype="multipart/form-data" style="background: #FFFFFF;border-radius:20px;" class="p-4">
			{{ csrf_field() }}
			<div class="row">
				<div class="col-md-6">
					<div class="row mb-3">
						<div class="col-md-4">Nama Karyawan</div>
						<div class="col-md-8">
							<input class="form-control" type="hidden" name="id_sap" required="required" placeholder="Masukkan SAP" value="{{ $model->id_sap }}" autofocus="on">
							<input class="form-control" type="text" name="nama" required="required" placeholder="Masukkan Nama Karyawan" value="{{ $model->nama }}" autofocus="on">
						</div>
					</div>
					<div class="row mb-3">
						<div class="col-md-4">Tempat Lahir</div>
						<div class="col-md-8">
							<input class="form-control" type="text" name="tempat_lahir" required="required" placeholder="Masukkan Tempat Lahir" value="{{ $model->tempat_lahir }}" autofocus="on">
						</div>
					</div>
					<div class="row mb-3">
						<div class="col-md-4">Tanggal Lahir</div>
						<div class="col-md-8">
							<input class="form-control" type="date" name="tanggal_lahir" required="required" placeholder="Masukkan Tanggal Lahir" value="{{ $model->tanggal_lahir }}" autofocus="on">
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="row mb-3">
						<div class="col-md-4">Agama</div>
						<div class="col-md-8">
							<select class="option form-control" name="agama" value="{{ $model->agama }}" required="required">
								<option value="islam">Islam</option>
								<option value="kristen">Kristen</option>
								<option value="katolik">Katolik</option>
								<option value="hindu">Hindu</option>
								<option value="buddha">Buddha</option>
								<option value="konghucu">Konghucu</option>
							</select>
						</div>
					</div>
					<div class="row mb-3">
						<div class="col-md-4">Pendidikan</div>
						<div class="col-md-8">
							<select class="option form-control" name="pendidikan" value="{{ $model->pendidikan }}" required="required">
								<option value="SD">SD</option>
								<option value="SMP">SMP</option>
								<option value="SMA">SMA</option>
								<option value="SMK">SMK</option>
								<option value="Diploma 1">Diploma 1</option>
								<option value="Diploma 2">Diploma 2</option>
								<option value="Diploma 3">Diploma 3</option>
								<option value="Diploma 4">Diploma 4</option>
								<option value="Strata 1">Strata 1</option>
								<option value="Strata 2">Strata 2</option>
							</select>
						</div>
					</div>
					<div class="row mb-3">
						<div class="col-md-4">Jurusan Pendidikan Terakhir</div>
						<div class="col-md-8">
							<input class="form-control" type="text" name="jurusan_pendidikan" required="required" placeholder="Masukkan Jurusan Pendidikan" value="{{ $model->jurusan_pendidikan }}" autofocus="on">
						</div>
					</div>
					<div class="row mb-3">
						<div class="col-md-4">Level Karyawan</div>
						<div class="col-md-8">
							<select class="option form-control" name="level_karyawan" value="{{ $model->level_karyawan }}" required="required">
								<option value="General Manager">General Manager</option>
								<option value="Head Of Department">Head Of Department</option>
								<option value="Assistant Head Department">Assistant Head Department</option>
								<option value="Supervisor">Supervisor</option>
								<option value="Rank n File">Rank n File</option>
							</select>
						</div>
					</div>
					<div class="row mb-3">
						<div class="col-md-4">Departemen</div>
						<div class="col-md-8">
							<select class="option form-control" name="departemen" value="{{ $model->departemen }}" required="required">
								<option value="GMO">GMO</option>
								<option value="HRD">HRD</option>
								<option value="Food And Beverage Service">Food And Beverage Service</option>
								<option value="Food And Beverage Product">Food And Beverage Product</option>
								<option value="Front Office & Health Club">Front Office & Health Club</option>
								<option value="House Keeping">House Keeping</option>
								<option value="Eco Camp">Eco Camp</option>
								<option value="Engineering">Engineering</option>
							</select>
						</div>
					</div>
					<div class="row mb-3">
						<div class="col-md-4">Posisi</div>
						<div class="col-md-8">
							<input class="form-control" type="text" name="posisi" required="required" placeholder="Masukkan Jurusan Pendidikan" value="{{ $model->posisi }}" autofocus="on">
						</div>
					</div>
					<div class="row mb-3">
						<div class="col-md-4">Status Karyawan</div>
						<div class="col-md-8">
							<select class="option form-control" name="status_karyawan" value="{{ $model->status_karyawan }}" required="required">
								<option value="Kontrak">Kontrak</option>
								<option value="Permanen">Permanen</option>
							</select>
						</div>
					</div>
				</div>
			</div>
			<div class="row mb-3">
				<div class="col-md-6">
					<input type="submit" value="Simpan Data" class="btn btn-success">

				</div>
			</div>

		</form>
	</section>
</div>
@endsection