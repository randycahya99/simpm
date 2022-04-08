@extends('layout.main')

@section('title','SIMPM - Edit Data Pemesanan')

@section('container')

<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Card Content - Form -->
	<div class="card shadow mb-4">
		<ol class="breadcrumb" style="background-color: #F8F8FF">
			<li class="breadcrumb-item">
				<a href="/pemesanan" class="m-0 font-weight-bold text-primary float-left">Pemesanan</a>
			</li>
			<li class="breadcrumb-item active" aria-current="page">Edit Data Pemesanan</li>
		</ol>
		<div class="card-body">
			<form action="/updatePemesanan/{{$pemesanan->id}}" method="POST" class="needs-validation" novalidate>

				@csrf

				<h4 class="card-text font-weight-bold">Identitas</h4>
				<div class="form-row">
					<div class="form-group col-md-3">
						<label for="tanggal_masuk">Tanggal Masuk</label>
						<input type="date" name="tanggal_masuk" id="tanggal_masuk" class="form-control" value="{{$pemesanan['tanggal_masuk']}}" required>
						<div class="invalid-feedback">Tanggal masuk tidak valid</div>
					</div>
					<div class="form-group col-md-2"></div>
					<div class="form-group col-md-3">
						<label for="no_registrasi">No. Registrasi</label>
						<input type="text" name="no_registrasi" id="no_registrasi" class="form-control" value="{{$pemesanan['no_registrasi']}}" pattern="[0-9]+" readonly>
						<div class="invalid-feedback">No. Registrasi tidak valid</div>
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-4">
						<label for="nama_customer">Nama Customer</label>
						<input type="text" name="nama_customer" id="nama_customer" class="form-control" value="{{$pemesanan['nama_customer']}}" pattern="[a-zA-Z\s0-9]+" required>
						<div class="invalid-feedback">Nama customer tidak valid</div>
					</div>
					<div class="form-group col-md-1"></div>
					<div class="form-group col-md-3">
						<label for="no_hp">No. HP</label>
						<input type="text" name="no_hp" id="no_hp" class="form-control" value="{{$pemesanan['no_hp']}}" pattern="[0-9]+">
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
						<input type="text" name="jenis_mobil" id="jenis_mobil" class="form-control" value="{{$pemesanan['jenis_mobil']}}" required>
						<div class="invalid-feedback">Jenis mobil tidak valid</div>
					</div>
					<div class="form-group col-md-1"></div>
					<div class="form-group col-md-3">
						<label for="type_mobil">Tipe Mobil</label>
						<input type="text" name="type_mobil" id="type_mobil" class="form-control" value="{{$pemesanan['type_mobil']}}" required>
						<div class="invalid-feedback">Tipe mobil tidak valid</div>
					</div>
                    <div class="form-group col-md-1"></div>
                    <div class="from-group col-md-2">
                        <label for="tenor">Tenor</label>
						<input type="number" name="tenor" id="tenor" class="form-control" value="{{$pemesanan['tenor']}}" required>
						<div class="invalid-feedback">Tenor tidak valid</div>
                    </div>
				</div>
                <div class="form-row">
					<div class="form-group col-md-3">
						<label for="nama_dealer">Nama Dealer</label>
						<input type="text" name="nama_dealer" id="nama_dealer" class="form-control" value="{{$pemesanan['nama_dealer']}}" required>
						<div class="invalid-feedback">Nama dealer tidak valid</div>
					</div>
					<div class="form-group col-md-1"></div>
					<div class="form-group col-md-3">
						<label for="nama_sales_dealer">Nama Sales Dealer</label>
						<input type="text" name="nama_sales_dealer" id="nama_sales_dealer" class="form-control" value="{{$pemesanan['nama_sales_dealer']}}" required>
						<div class="invalid-feedback">Nama sales dealer tidak valid</div>
					</div>
                    <div class="form-group col-md-1"></div>
                    <div class="from-group col-md-3">
                        <label for="nama_sales_acc">Nama Sales Acc</label>
						<input type="text" name="nama_sales_acc" id="nama_sales_acc" class="form-control" value="{{$pemesanan['nama_sales_acc']}}" required>
						<div class="invalid-feedback">Nama sales acc tidak valid</div>
                    </div>
				</div>
                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="new_used">Status Mobil</label>
                        <select class="form-control" name="new_used" id="new_used" required>
							<option value="{{$pemesanan['new_used']}}" selected>
                                @if ($pemesanan['new_used'] == "N")
                                    Baru
                                @else
                                    Bekas
                                @endif
                            </option>
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
							<option value="{{$pemesanan['status']}}" selected>
                                @if ($pemesanan['status'] == "APPROVE")
                                    APPROVE
                                @elseif ($pemesanan['status'] == "VALID")
                                    VALID
                                @elseif ($pemesanan['status'] == "IN PROCESS")
                                    IN PROCESS
                                @elseif ($pemesanan['status'] == "CANCEL")
                                    CANCEL
                                @else
                                    REJECT
                                @endif
                            </option>
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
						<input type="number" class="form-control" name="time" id="time" value="{{$pemesanan['time']}}" required>
						<div class="invalid-feedback">Waktu tidak valid</div>
					</div>
				</div>
				<div class="form-group row">
					<label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
					<div class="col-sm-4">
						{{-- <textarea rows="3" class="form-control" name="keterangan" id="keterangan" value="{{$pemesanan['keterangan']}}" required></textarea> --}}
						<input type="text" name="keterangan" id="keterangan" class="form-control" value="{{$pemesanan['keterangan']}}" required>
                        <div class="invalid-feedback">Keterangan tidak valid</div>
					</div>
				</div>

				<div class="form-group row">
					<label class="col-sm-2 col-form-label"></label>
					<div class="col-sm-4">
						<button type="submit" class="btn btn-primary">Simpan Perubahan</button>
					</div>
				</div>

			</form>
		</div>
	</div>
</div>

@endsection