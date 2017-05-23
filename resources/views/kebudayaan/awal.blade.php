@extends('master')
@section('container')
<div class="panel panel-default">
	<div class="panel-heading">
		<strong>Data Kebudayaan</strong>
		<a href="{{url('kebudayaan/tambah')}}" class="btn btn-xs btn-primary pull-right">
			<i class="fa fa-plus"></i>Kebudayaan
		</a>
		<div class="clearfix"></div>
	</div>
	<table class="table">
		<head>
			<tr>
				<th>No.</th>
				<th>Nama Kebudayaan</th>
				<th>Keterangan</th>
				<th>Id_Suku</th>
				<th>Aksi</th>
			</tr>
		</head>
		<tbody>
			<?php $x=1; ?>
			@foreach($semuaKebudayaan as $kebudayaan)
			<tr>
				<td>{{$x++}}</td>
				<td>{{$kebudayaan->nama_kebudayaan or 'nama kebudayaan kosong'}}</td>
				<td>{{$kebudayaan->keterangan or 'keterangan kosong'}}</td>
				<td>{{$kebudayaan->id_suku}}</td>
				<td>
					<div class="btn-group" role="group">
						<a href="{{url('kebudayaan/edit/'.$kebudayaan->id)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Ubah"><i class="fa fa-pencil"></i></a>
						<a href="{{url('kebudayaan/'.$kebudayaan->id)}}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>
						<a href="{{url('kebudayaan/hapus/'.$kebudayaan->id)}}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>
					</div>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@stop