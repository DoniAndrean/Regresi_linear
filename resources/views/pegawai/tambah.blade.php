@extends('layout.master')

@section('konten')
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0">Profil</h1>
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
		<h3>Tambah Berita</h3>

		<a href="/pegawai" class="btn btn-default"> Kembali</a>

		<br />
		<br />

		<form action="/pegawai/store" method="POST" enctype="multipart/form-data">
			{{ csrf_field() }}
			<div class="row mb-3">
				<div class="col-md-12">Nama Pegawai</div>
				<div class="col-md-12">
					<input class="form-control" type="text" name="nama_pegawai" required="required" placeholder="Masukkan Nama Pegawai" value="" autofocus="on">
				</div>
			</div>

			<div class="row mb-3">
				<div class="col-md-12">Alamat</div>
				<div class="col-md-12">

					<textarea class="form-control" name="alamat" id="editorx" rows="20" style="height:100px"></textarea>
					<script>
						ClassicEditor
							.create(document.querySelector('#editor'))
							.then(editor => {
								console.log(editor);
							})
							.catch(error => {
								console.error(error);
							});
					</script>
				</div>
			</div>
			<div class="row mb-3">

				<input type="submit" value="Simpan Data" class="btn btn-success">

			</div>

		</form>
	</section>
</div>

@endsection