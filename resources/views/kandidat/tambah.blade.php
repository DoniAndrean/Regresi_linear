@extends('layout.master')

@section('konten')
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0">Employee Application Form</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="/">Home</a></li>
						<li class="breadcrumb-item"><a href="/karyawan">Karyawan</a></li>
						<li class="breadcrumb-item active">Tambah</li>
					</ol>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>

	<!-- Main content -->
	<section class="content">
		<!-- /.content-header -->
		<script src="https://cdn.ckeditor.com/ckeditor5/35.1.0/classic/ckeditor.js"></script>

		<a href="/karyawan" class="btn btn-default"> Kembali</a>

		<br />
		<br />

		<form action="/karyawan/store" method="POST" enctype="multipart/form-data" style="background: #FFFFFF;border-radius:20px;" class="p-4">
			{{ csrf_field() }}
			<div class="row">
				<div class="col-md-6">
					<div class="row mb-3">
						<div class="col-md-4">Date / Day Interview</div>
						<div class="col-md-8">
							<input class="form-control" type="text" name="id_sap" required="required" placeholder="Masukkan Data" value="" autofocus="on">
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="row mb-3">
						<div class="col-md-4">Position Applied</div>
						<div class="col-md-8">
							<input class="form-control" type="text" name="id_sap" required="required" placeholder="Masukkan SAP" value="" autofocus="on">
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="row mb-3">
						<div class="col-md-4">Vacancy Source</div>
						<div class="col-md-8">
							<input class="form-control" type="text" name="id_sap" required="required" placeholder="Masukkan SAP" value="" autofocus="on">
						</div>
					</div>
				</div>
			</div>
			<h4>Personal Data</h4>
			<div class="row">
				<div class="col-md-6">
					<div class="row mb-3">
						<div class="col-md-4">Fullname</div>
						<div class="col-md-8">
							<input class="form-control" type="text" name="id_sap" required="required" placeholder="Masukkan SAP" value="" autofocus="on">
						</div>
					</div>
					<div class="row mb-3">
						<div class="col-md-4">Place Birth</div>
						<div class="col-md-8">
							<input class="form-control" type="number" name="id_badge" required="required" placeholder="Masukkan No ID Badge" value="" autofocus="on">
						</div>
					</div>
					<div class="row mb-3">
						<div class="col-md-4">Marital Status</div>
						<div class="col-md-8">
							<input class="form-control" type="date" name="join_date" required="required" placeholder="" value="" autofocus="on">
						</div>
					</div>
					<div class="row mb-3">
						<div class="col-md-4">Weight</div>
						<div class="col-md-8">
							<input class="form-control" type="number" name="id_nik" required="required" placeholder="Masukkan NIK Karyawan" value="" autofocus="on">
						</div>
					</div>

				</div>
				<div class="col-md-6">
					<div class="row mb-3">
						<div class="col-md-4">Age</div>
						<div class="col-md-8">
							<input class="form-control" type="text" name="posisi" required="required" placeholder="Masukkan Posisi" value="" autofocus="on">
						</div>
					</div>
					<div class="row mb-3">
						<div class="col-md-4">Date Birth</div>
						<div class="col-md-8">
							<select class="option form-control" name="status_karyawan" required="required">
								<option value="">--Pilih Status Karyawan--</option>
								<option value="Kontrakk">Kontrak</option>
							</select>
						</div>
					</div>
					<div class="row mb-3">
						<div class="col-md-4">Sex</div>
						<div class="col-md-8">
							<input class="form-control" type="email" name="email_pribdi" required="required" placeholder="Masukkan Email" value="" autofocus="on">
						</div>
					</div>
					<div class="row mb-3">
						<div class="col-md-4">Height</div>
						<div class="col-md-8">
							<input class="form-control" type="email" name="email_kantor" required="required" placeholder="Masukkan Email" value="" autofocus="on">
						</div>
					</div>
				</div>
			</div>
			<h4>Contact Information</h4>
			<div class="row">
				<div class="col-md-6">
					<div class="row mb-3">
						<div class="col-md-4">Address</div>
						<div class="col-md-8">
							<input class="form-control" type="text" name="id_sap" required="required" placeholder="Masukkan SAP" value="" autofocus="on">
						</div>
					</div>
					<div class="row mb-3">
						<div class="col-md-4">Telephone Number</div>
						<div class="col-md-8">
							<input class="form-control" type="number" name="id_badge" required="required" placeholder="Masukkan No ID Badge" value="" autofocus="on">
						</div>
					</div>
					<div class="row mb-3">
						<div class="col-md-4">Marital Status</div>
						<div class="col-md-8">
							<input class="form-control" type="date" name="join_date" required="required" placeholder="" value="" autofocus="on">
						</div>
					</div>
					<div class="row mb-3">
						<div class="col-md-4">Weight</div>
						<div class="col-md-8">
							<input class="form-control" type="number" name="id_nik" required="required" placeholder="Masukkan NIK Karyawan" value="" autofocus="on">
						</div>
					</div>

				</div>
				<div class="col-md-6">
					<div class="row mb-3">
						<div class="col-md-4">Email Address</div>
						<div class="col-md-8">
							<input class="form-control" type="text" name="posisi" required="required" placeholder="Masukkan Posisi" value="" autofocus="on">
						</div>
					</div>
					<div class="row mb-3">
						<div class="col-md-4">Date Birth</div>
						<div class="col-md-8">
							<select class="option form-control" name="status_karyawan" required="required">
								<option value="">--Pilih Status Karyawan--</option>
								<option value="Kontrakk">Kontrak</option>
							</select>
						</div>
					</div>
					<div class="row mb-3">
						<div class="col-md-4">Sex</div>
						<div class="col-md-8">
							<input class="form-control" type="email" name="email_pribdi" required="required" placeholder="Masukkan Email" value="" autofocus="on">
						</div>
					</div>
					<div class="row mb-3">
						<div class="col-md-4">Height</div>
						<div class="col-md-8">
							<input class="form-control" type="email" name="email_kantor" required="required" placeholder="Masukkan Email" value="" autofocus="on">
						</div>
					</div>
				</div>
			</div>
			<!-- Submit -->
			<div class="row mb-3">
				<input type="submit" value="Simpan Data" class="btn btn-success">

			</div>

		</form>
	</section>
</div>

@endsection