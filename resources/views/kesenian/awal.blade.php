@extends('master')
@section('container')
<div class="panel panel-default">
	<div class="panel-heading">
		<strong>Data Kesenian</strong>
		<a href="{{url('kesenian/tambah')}}" class="btn btn-xs btn-primary pull-right">
			<i class="fa fa-plus"></i>Kesenian
		</a>
		<div class="clearfix"></div>
	</div>
	<table class="table">
		<head>
			<tr>
				<th>No.</th>
				<th>Nama Kesenian</th>
				<th>Keterangan</th>
				<th>Id_Suku</th>
				<th>Aksi</th>
			</tr>
		</head>
		<tbody>
			<?php $x=1; ?>
			@foreach($semuaKesenian as $kesenian)
			<tr>
				<td>{{$x++}}</td>
				<td>{{$kesenian->nama_kesenian or 'nama kesenian kosong'}}</td>
				<td>{{$kesenian->keterangan or 'keterangan kosong'}}</td>
				<td>{{$kesenian->id_suku1}}</td>
				<td>
					<div class="btn-group" role="group">
						<a href="{{url('kesenian/edit/'.$kesenian->id)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Ubah"><i class="fa fa-pencil"></i></a>
						<a href="{{url('kesenian/'.$kesenian->id)}}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>
						<a href="{{url('kesenian/hapus/'.$kesenian->id)}}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>
					</div>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@stop