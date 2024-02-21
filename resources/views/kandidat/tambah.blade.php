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
			<h4>Personal Data</h4>
			<div class="row">
				<div class="col-md-6">
					<div class="row mb-3">
						<div class="col-md-4">Alamat</div>
						<div class="col-md-8">
							<input class="form-control" type="text" name="alamat" required="required" placeholder="Masukkan Data" value="" autofocus="on">
						</div>
					</div>
					<div class="row mb-3">
						<div class="col-md-4">No Telp</div>
						<div class="col-md-8">
							<input class="form-control" type="text" name="no_telp" required="required" placeholder="Masukkan No ID Badge" value="" autofocus="on">
						</div>
					</div>
					<div class="row mb-3">
						<div class="col-md-4">Email</div>
						<div class="col-md-8">
							<input class="form-control" type="text" name="email" required="required" placeholder="Masukkan Email" value="" autofocus="on">
						</div>
					</div>
					<div class="row mb-3">
						<div class="col-md-4">Bahasa Pertama</div>
						<div class="col-md-8">
							<input class="form-control" type="text" name="bahasa_pertama" required="required" placeholder="Masukkan NIK Karyawan" value="" autofocus="on">
						</div>
					</div>
					<div class="row mb-3">
						<div class="col-md-4">Bahasa Lain</div>
						<div class="col-md-8">
							<input class="form-control" type="text" name="bahasa_lain" required="required" placeholder="Masukkan NIK Karyawan" value="" autofocus="on">
						</div>
					</div>
					<div class="row mb-3">
						<div class="col-md-4">Riwayat Sekolah</div>
						<div class="col-md-8">
							<input class="form-control" type="text" name="riwayat_sekolah" required="required" placeholder="Masukkan NIK Karyawan" value="" autofocus="on">
						</div>
					</div>
					<div class="row mb-3">
						<div class="col-md-4">Pernah Pelatihan</div>
						<div class="col-md-8">
							<input class="form-control" type="text" name="pernah_pelatihan" required="required" placeholder="Masukkan NIK Karyawan" value="" autofocus="on">
						</div>
					</div>
					<div class="row mb-3">
						<div class="col-md-4">Kontak Darurat</div>
						<div class="col-md-8">
							<input class="form-control" type="text" name="kontak_darurat" required="required" placeholder="Masukkan NIK Karyawan" value="" autofocus="on">
						</div>
					</div>
					<div class="row mb-3">
						<div class="col-md-4">Izin Mengemudi</div>
						<div class="col-md-8">
							<input class="form-control" type="text" name="izin_mengemudi" required="required" placeholder="Masukkan NIK Karyawan" value="" autofocus="on">
						</div>
					</div>
					<div class="row mb-3">
						<div class="col-md-4">Bentuk Transportasi</div>
						<div class="col-md-8">
							<input class="form-control" type="text" name="bentuk_transportasi" required="required" placeholder="Masukkan NIK Karyawan" value="" autofocus="on">
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="row mb-3">
						<div class="col-md-4">Availibility</div>
						<div class="col-md-8">
							<input class="form-control" type="text" name="availibility" required="required" placeholder="Masukkan NIK Karyawan" value="" autofocus="on">
						</div>
					</div>
					<div class="row mb-3">
						<div class="col-md-4">Pengalaman Kerja</div>
						<div class="col-md-8">
							<input class="form-control" type="text" name="pengalaman_kerja" required="required" placeholder="Masukkan NIK Karyawan" value="" autofocus="on">
						</div>
					</div>
					<div class="row mb-3">
						<div class="col-md-4">Basic Gaji</div>
						<div class="col-md-8">
							<input class="form-control" type="text" name="basic_gaji" required="required" placeholder="Masukkan NIK Karyawan" value="" autofocus="on">
						</div>
					</div>
					<div class="row mb-3">
						<div class="col-md-4">Uang Saku</div>
						<div class="col-md-8">
							<input class="form-control" type="text" name="uang_saku" required="required" placeholder="Masukkan NIK Karyawan" value="" autofocus="on">
						</div>
					</div>
					<div class="row mb-3">
						<div class="col-md-4">Take Home Pay Salary</div>
						<div class="col-md-8">
							<input class="form-control" type="text" name="take_home_pay_salary" required="required" placeholder="Masukkan NIK Karyawan" value="" autofocus="on">
						</div>
					</div>
					<div class="row mb-3">
						<div class="col-md-4">Skill Tambahan</div>
						<div class="col-md-8">
							<textarea name="skill_tambahan" id="" cols="30" rows="5" class="form-control"></textarea>
						</div>
					</div>
					<div class="row mb-3">
						<div class="col-md-4">Harapan Di Pekerjaan Baru</div>
						<div class="col-md-8">
							<textarea name="harapan" id="" cols="30" rows="5" class="form-control"></textarea>
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