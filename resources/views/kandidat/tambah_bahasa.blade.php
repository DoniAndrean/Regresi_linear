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

		<a href="/kandidat/tambah" class="btn btn-default"> Kembali</a>

		<br />
		<br />

		<form action="/kandidat/store" method="POST" enctype="multipart/form-data" style="background: #FFFFFF;border-radius:20px;" class="p-4">
			{{ csrf_field() }}
			<div class="row">
				<div class="col-md-12">
					<h4>Bahasa</h4>
				</div>
				<!-- #3 -->
				<div class="col-md-12 row">
					<div class="col-md-3">
						<div class="row mb-3">
							<div class="col-md-12">Bahasa Lain</div>
							<div class="col-md-12">
								<input class="form-control" type="text" name="bahasa_lain" required="required" placeholder="Masukkan Bahasa Lain" value="" autofocus="on">
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="row mb-3">
							<div class="col-md-12">Membaca</div>
							<div class="col-md-12">
								<select name="read" id="" class="form-control">
									<option value="cukup">Cukup</option>
									<option value="baik">Baik</option>
									<option value="fasih">Fasih</option>
								</select>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="row mb-3">
							<div class="col-md-12">Menulis</div>
							<div class="col-md-12">
								<select name="write" id="" class="form-control">
									<option value="cukup">Cukup</option>
									<option value="baik">Baik</option>
									<option value="fasih">Fasih</option>
								</select>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="row mb-3">
							<div class="col-md-12">Berbicara</div>
							<div class="col-md-12">
								<select name="speak" id="" class="form-control">
									<option value="cukup">Cukup</option>
									<option value="baik">Baik</option>
									<option value="fasih">Fasih</option>
								</select>
							</div>
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