@extends('layout.main')

@if (Request::is('pemesanan'))

@section('title','SIMPM - Manajemen Data Pemesanan')

@section('container')

<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- DataTales Example -->
	<div class="card shadow mb-4">
		<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
			<h6 class="m-0 font-weight-bold text-primary float-left">Data Pemesanan</h6>
			{{-- <button type="button" class="btn  btn-sm btn-primary" data-toggle="modal" data-target="#tambahData" title="Tambah"> --}}
				<a href="/pemesanan/tambah" class="btn  btn-sm btn-primary">
                    Tambah Data
                </a>
			{{-- </button> --}}
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th width="20">No</th>
							<th width="120">Tanggal Masuk</th>
							<th width="300">Nama Customer</th>
							<th width="100">No. Registrasi</th>
							<th width="80">Aksi</th>
						</tr>
					</thead>

					<tbody>
						@foreach($pemesanan as $pemesanans)
						<tr>
							<td align="center">{{$loop->iteration}}</td>
							<td align="center">{{$pemesanans->tanggal_masuk}}</td>
							<td>{{$pemesanans->nama_customer}}</td>
                            <td align="center">{{$pemesanans->no_registrasi}}</td>

							<td align="center">
								<a href="/pemesanan/{{$pemesanans->id}}/deletePemesanan" class="btn btn-danger btn-circle btn-sm hapusPemesanan" title="Hapus">
									<i class="fas fa-trash"></i>
								</a>
								{{-- <button class="btn btn-primary btn-circle btn-sm" title="Edit" data-toggle="modal" data-target="#editData{{$pemesanans['id']}}"> --}}
                                <a href="/pemesanan/{{$pemesanans->id}}/editPemesanan" class="btn btn-primary btn-circle btn-sm" title="Edit">
                                    <i class="fas fa-edit"></i>
                                </a>
								{{-- </button> --}}
								{{-- <button class="btn btn-success btn-circle btn-sm" title="Detail" data-toggle="modal" data-target="#detailData{{$pemesanans['id']}}"> --}}
                                <a href="/pemesanan/{{$pemesanans->id}}/detailPemesanan" class="btn btn-success btn-circle btn-sm" title="Detail">
                                    <i class="fas fa-eye"></i>
                                </a>
								{{-- </button> --}}
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

@elseif (Request::is('pemesanan/tambah'))

@section('title','SIMPM - Tambah Data Pemesanan')
    
@section('container')

<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Card Content - Form -->
	<div class="card shadow mb-4">
		<ol class="breadcrumb" style="background-color: #F8F8FF">
			<li class="breadcrumb-item">
				<a href="/pemesanan" class="m-0 font-weight-bold text-primary float-left">Data Pemesanan</a>
			</li>
			<li class="breadcrumb-item active" aria-current="page">Tambah Data Pemesanan</li>
		</ol>
		<div class="card-body">
			<form action="addPemesanan" method="POST" class="needs-validation" novalidate>

				@csrf

				<h4 class="card-text font-weight-bold">Identitas</h4>
				<div class="form-row">
					<div class="form-group col-md-3">
						<label for="tanggal_masuk">Tanggal Masuk</label>
						<input type="date" name="tanggal_masuk" id="tanggal_masuk" class="form-control" required>
						<div class="invalid-feedback">Tanggal masuk tidak valid</div>
					</div>
					<div class="form-group col-md-2"></div>
					<div class="form-group col-md-3">
						<label for="no_registrasi">No. Registrasi</label>
						<input type="text" name="no_registrasi" id="no_registrasi" class="form-control" placeholder="Masukkan No. Registrasi" pattern="[0-9]+" required>
						<div class="invalid-feedback">No. Registrasi tidak valid</div>
					</div>
					{{-- <div class="form-group col-md-1"></div> --}}
					{{-- <div class="form-group col-md-3">
						<label for="bidang_id">Bidang Keahlian</label>
						<select class="form-control" name="bidang_id" id="bidang_id" required>
							<option value="" selected>Pilih Bidang Keahlian</option> --}}

							{{-- @foreach($ahli as $ahlis)

							<option value="{{ $ahlis->id }}">{{ $ahlis->bidang_keahlian }}</option>

							@endforeach --}}

						{{-- </select>
						<div class="invalid-feedback">Bidang keahlian tidak valid</div>
					</div> --}}
				</div>
				<div class="form-row">
					<div class="form-group col-md-4">
						<label for="nama_customer">Nama Customer</label>
						<input type="text" name="nama_customer" id="nama_customer" class="form-control" placeholder="Masukan nama customer" pattern="[a-zA-Z\s0-9]+" required>
						<div class="invalid-feedback">Nama customer tidak valid</div>
					</div>
					<div class="form-group col-md-1"></div>
					<div class="form-group col-md-3">
						<label for="no_hp">No. HP</label>
						<input type="text" name="no_hp" id="no_hp" class="form-control" placeholder="Masukan no. hp" pattern="[0-9]+">
						<div class="invalid-feedback">No. HP tidak valid</div>
					</div>
				</div>

				<div class="form-row">
					<div class="form-group col-md-12"><hr></div>
				</div>
				
                <h4 class="card-text font-weight-bold">Data Mobil</h4>
                <div class="form-row">
					<div class="form-group col-md-3">
						<label for="jenis_mobil">Jenis Mobil</label>
						<input type="text" name="jenis_mobil" id="jenis_mobil" class="form-control" placeholder="Masukan jenis mobil" required>
						<div class="invalid-feedback">Jenis mobil tidak valid</div>
					</div>
					<div class="form-group col-md-1"></div>
					<div class="form-group col-md-3">
						<label for="type_mobil">Tipe Mobil</label>
						<input type="text" name="type_mobil" id="type_mobil" class="form-control" placeholder="Masukan tipe mobil" required>
						<div class="invalid-feedback">Tipe mobil tidak valid</div>
					</div>
                    <div class="form-group col-md-1"></div>
                    <div class="from-group col-md-2">
                        <label for="tenor">Tenor</label>
						<input type="number" name="tenor" id="tenor" class="form-control" placeholder="Tenor (bulan)" required>
						<div class="invalid-feedback">Tenor tidak valid</div>
                    </div>
				</div>
                <div class="form-row">
					<div class="form-group col-md-3">
						<label for="nama_dealer">Nama Dealer</label>
						<input type="text" name="nama_dealer" id="nama_dealer" class="form-control" placeholder="Masukan nama dealer" required>
						<div class="invalid-feedback">Nama dealer tidak valid</div>
					</div>
					<div class="form-group col-md-1"></div>
					<div class="form-group col-md-3">
						<label for="nama_sales_dealer">Nama Sales Dealer</label>
						<input type="text" name="nama_sales_dealer" id="nama_sales_dealer" class="form-control" placeholder="Masukan nama sales dealer" required>
						<div class="invalid-feedback">Nama sales dealer tidak valid</div>
					</div>
                    <div class="form-group col-md-1"></div>
                    <div class="from-group col-md-3">
                        <label for="nama_sales_acc">Nama Sales Acc</label>
						<input type="text" name="nama_sales_acc" id="nama_sales_acc" class="form-control" placeholder="Masukan nama sales acc" required>
						<div class="invalid-feedback">Nama sales acc tidak valid</div>
                    </div>
				</div>
                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="new_used">Kondisi Mobil</label>
                        <select class="form-control" name="new_used" id="new_used" required>
							<option value="" selected>Kondisi Mobil</option>
							<option value="N">Baru</option>
                            <option value="S">Bekas</option>
						</select>
                    </div>
                </div>

                <div class="form-row">
					<div class="form-group col-md-12"><hr></div>
				</div>

                <h4 class="card-text font-weight-bold">Status Pemesanan</h4>
				<br>
                <div class="form-group row">
					<label for="status" class="col-sm-2 col-form-label">Status Pemesanan</label>
					<div class="col-sm-4">
						<select class="form-control" name="status" id="status" required>
							<option value="" selected>Status</option>
							<option value="APPROVE">APPROVE</option>
                            <option value="VALID">VALID</option>
                            <option value="IN PROCESS">IN PROCESS</option>
                            <option value="CANCEL">CANCEL</option>
                            <option value="REJECT">REJECT</option>
						</select>
						<div class="invalid-feedback">Status tidak valid</div>
					</div>
				</div>
				<div class="form-group row">
					<label for="time" class="col-sm-2 col-form-label">Waktu</label>
					<div class="col-sm-4">
						<input type="number" class="form-control" name="time" id="time" placeholder="Waktu berjalan (bulan)" required>
						<div class="invalid-feedback">Waktu tidak valid</div>
					</div>
				</div>
				<div class="form-group row">
					<label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
					<div class="col-sm-4">
						<textarea rows="3" class="form-control" name="keterangan" id="keterangan" placeholder="Masukkan keterangan" required></textarea>
						<div class="invalid-feedback">Keterangan tidak valid</div>
					</div>
				</div>

				<div class="form-group row">
					<label class="col-sm-2 col-form-label"></label>
					<div class="col-sm-4">
						<button type="submit" class="btn btn-primary">Tambah</button>
					</div>
				</div>

			</form>
		</div>
	</div>
</div>

@endif


@endsection