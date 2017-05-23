@extends('master')
@section('container')
<div class="panel panel-default">
	<div class="panel-heading">
		<strong>Data Provinsi</strong>
		<a href="{{url('provinsi/tambah')}}" class="btn btn-xs btn-primary pull-right">
			<i class="fa fa-plus"></i>Provinsi
		</a>
		<div class="clearfix"></div>
	</div>
	<table class="table">
		<head>
			<tr>
				<th>No.</th>
				<th>Nama</th>
				<th>Aksi</th>
			</tr>
		</head>
		<tbody>
			<?php $x=1; ?>
			@foreach($semuaProvinsi as $provinsi)
			<tr>
				<td>{{$x++}}</td>
				<td>{{$provinsi->nama_provinsi or 'nama provinsi kosong'}}</td>
				<td>
					<div class="btn-group" role="group">
						<a href="{{url('provinsi/edit/'.$provinsi->id)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Ubah"><i class="fa fa-pencil"></i></a>
						<a href="{{url('provinsi/'.$provinsi->id)}}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>
						<a href="{{url('provinsi/hapus/'.$provinsi->id)}}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>
					</div>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@stop