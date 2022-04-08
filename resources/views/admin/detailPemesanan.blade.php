@extends('layout.main')

@section('title','SIMPM - Detail Data Pemesanan')

@section('container')

<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- DataTales Example -->
	<div class="card shadow mb-4">
		<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
			<a href="/pemesanan" class="btn btn-secondary">
                Kembali
            </a>
		</div>
		<div class="card-body">

            {{-- <div class="form-group row">
                <div class="col-sm-1">
                    
                </div>
            </div> --}}

            <div class="container-fluid">
                <br><h4 class="card-text font-weight-bold">Identitas Customer</h4><br>
                <div class="container-fluid">
                    <div class="form-group row">
                        <p class=" col-sm-3 font-weight-bold">Nama Customer</p>
                        <div class="col-sm-9">
                            <p>: {{$pemesanan->nama_customer}}</p>
                        </div>
                        <p class=" col-sm-3 font-weight-bold">No. Registrasi</p>
                        <div class="col-sm-9">
                            <p>: {{$pemesanan->no_registrasi}}</p>
                        </div>
                        <p class=" col-sm-3 font-weight-bold">Tanggal Masuk</p>
                        <div class="col-sm-9">
                            <p>: {{$pemesanan->tanggal_masuk}}</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid">
            
                <br><h5 class="card-text font-weight-bold">Data Pemesanan</h5>
                <div class="container-fluid">
                    <div class="row">
                        <div class="table-responsive">
                            <table class="table table-bordered" style="text-align: center">
                                <tbody>
                                    <tr>
                                        <th width="30%" style="text-align: left">Jenis Mobil</th>
                                        <td width="70%" style="text-align: left">{{$pemesanan->jenis_mobil}}</td>
                                    </tr>
                                    <tr>
                                        <th width="30%" style="text-align: left">Tipe Mobil</th>
                                        <td width="70%" style="text-align: left">{{$pemesanan->type_mobil}}</td>
                                    </tr>
                                    <tr>
                                        <th width="30%" style="text-align: left">Tenor</th>
                                        <td width="70%" style="text-align: left">{{$pemesanan->tenor}} bulan</td>
                                    </tr>
                                    <tr>
                                        <th width="30%" style="text-align: left">Nama Dealer</th>
                                        <td width="70%" style="text-align: left">{{$pemesanan->nama_dealer}}</td>
                                    </tr>
                                    <tr>
                                        <th width="30%" style="text-align: left">Nama Sales Dealer</th>
                                        <td width="70%" style="text-align: left">{{$pemesanan->nama_sales_dealer}}</td>
                                    </tr>
                                    <tr>
                                        <th width="30%" style="text-align: left">Nama Sales Acc</th>
                                        <td width="70%" style="text-align: left">{{$pemesanan->nama_sales_acc}}</td>
                                    </tr>
                                    <tr>
                                        <th width="30%" style="text-align: left">Kondisi Mobil</th>
                                        <td width="70%" style="text-align: left">
                                            @if ($pemesanan->new_used == "N")
                                                Baru
                                            @elseif ($pemesanan->new_used == "S")
                                                Bekas
                                            @endif
                                            {{-- {{$pemesanan->new_used}} --}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th width="30%" style="text-align: left">Kode</th>
                                        <td width="70%" style="text-align: left">{{$pemesanan->kode_status}}</td>
                                    </tr>
                                    <tr>
                                        <th width="30%" style="text-align: left">Status</th>
                                        @if ($pemesanan['status'] == "APPROVE")
                                        
                                        <td width="70%" style="text-align: left; background-color: lightgreen; color: white">{{$pemesanan->status}}</td>
                                        
                                        @elseif ($pemesanan['status'] == "VALID")

                                        <td width="70%" style="text-align: left; background-color: green; color: white">{{$pemesanan->status}}</td>

                                        @elseif ($pemesanan['status'] == "IN PROCESS")

                                        <td width="70%" style="text-align: left; background-color: rgb(240, 240, 137); color: white">{{$pemesanan->status}}</td>
                                        
                                        @elseif ($pemesanan['status'] == "CANCEL")

                                        <td width="70%" style="text-align: left; background-color: yellow; color: white">{{$pemesanan->status}}</td>

                                        @elseif ($pemesanan['status'] == "REJECT")

                                        <td width="70%" style="text-align: left; background-color: red; color: white">{{$pemesanan->status}}</td>

                                        @endif
                                    </tr>
                                    <tr>
                                        <th width="30%" style="text-align: left">Waktu</th>
                                        <td width="70%" style="text-align: left">{{$pemesanan->time}}</td>
                                    </tr>
                                    <tr>
                                        <th width="30%" style="text-align: left">Keterangan</th>
                                        <td width="70%" style="text-align: left">{{$pemesanan->keterangan}}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>

</div>

@endsection