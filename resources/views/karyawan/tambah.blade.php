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
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active">Dashboard</li>
					</ol>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>

	<!-- Main content -->
	<section class="content">
		<!-- /.content-header -->
		<script src="https://cdn.ckeditor.com/ckeditor5/35.1.0/classic/ckeditor.js"></script>
		<h3>Tambah Karyawan</h3>

		<a href="/karyawan" class="btn btn-default"> Kembali</a>

		<br />
		<br />

		<form action="/karyawan/store" method="POST" enctype="multipart/form-data">
			{{ csrf_field() }}
			<div class="row mb-3">
				<div class="col-md-12">SAP</div>
				<div class="col-md-12">
					<input class="form-control" type="text" name="id_sap" required="required" placeholder="Masukkan SAP" value="" autofocus="on">
				</div>
			</div>
			<div class="row mb-3">
				<div class="col-md-12">Nama Karyawan</div>
				<div class="col-md-12">
					<input class="form-control" type="text" name="nama" required="required" placeholder="Masukkan Nama Karyawan" value="" autofocus="on">
				</div>
			</div>
			<div class="row mb-3">
				<div class="col-md-12">Tempat Lahir</div>
				<div class="col-md-12">
					<input class="form-control" type="text" name="tempat_lahir" required="required" placeholder="Masukkan Tempat Lahir" value="" autofocus="on">
				</div>
			</div>
			<div class="row mb-3">
				<div class="col-md-12">Tanggal Lahir</div>
				<div class="col-md-12">
					<input class="form-control" type="date" name="tanggal_lahir" required="required" placeholder="Masukkan Tanggal Lahir" value="" autofocus="on">
				</div>
			</div>
			<div class="row mb-3">
				<div class="col-md-12">Agama</div>
				<div class="col-md-12">
					<select class="option" name="agama" required="required">
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
				<div class="col-md-12">Pendidikan</div>
				<div class="col-md-12">
					<select class="option" name="pendidikan" required="required">
						<option value="sd">SD</option>
	                   	<option value="smp">SMP</option>
	                   	<option value="sma">SMA</option>
	                   	<option value="smk">SMK</option>
	                   	<option value="diploma1">Diploma 1</option>    
	                   	<option value="diploma">Diploma 2</option>
						<option value="diploma3">Diploma 3</option>
	                   	<option value="diploma4">Diploma 4</option>
	                   	<option value="strata1">Strata 1</option>    
	                   	<option value="strata2">Strata 2</option>
	                </select>
				</div>
			</div>
			<div class="row mb-3">
				<div class="col-md-12">Jurusan Pendidikan Terakhir</div>
				<div class="col-md-12">
					<input class="form-control" type="text" name="jurusan_pendidikan" required="required" placeholder="Masukkan Jurusan Pendidikan" value="" autofocus="on">
				</div>
			</div>
			<div class="row mb-3">
				<div class="col-md-12">Level Karyawan</div>
				<div class="col-md-12">
					<select class="option" name="level_karyawan" required="required">
						<option value="gm">General Manager</option>
	                   	<option value="hod">Head Of Department</option>
	                   	<option value="assthod">Assistant Head Department</option>
	                   	<option value="spv">Supervisor</option>
	                   	<option value="rnf">Rank n File</option>
					</select>
				</div>
			</div>
			<div class="row mb-3">
				<div class="col-md-12">Departemen</div>
				<div class="col-md-12">
					<select class="option" name="departemen" required="required">
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
				<div class="col-md-12">Posisi</div>
				<div class="col-md-12">
					<input class="form-control" type="text" name="posisi" required="required" placeholder="Masukkan Jurusan Pendidikan" value="" autofocus="on">
				</div>
			</div>
			<div class="row mb-3">
				<div class="col-md-12">Status Karyawan</div>
				<div class="col-md-12">
					<select class="option" name="status_karyawan" required="required">
						<option value="kontrak">Kontrak</option>
	                   <option value="permanen">Permanen</option>
					   </select>
				</div>
			</div>
			<div class="row mb-3">

				<input type="submit" value="Simpan Data" class="btn btn-success">

			</div>

		</form>
	</section>
</div>

@endsection