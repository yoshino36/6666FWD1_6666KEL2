@extends('master')
@section('container')
<div class="panel panel-default">
	<div class="panel-heading">
		<strong>Data Suku</strong>
		<a href="{{url('suku/tambah')}}" class="btn btn-xs btn-primary pull-right">
			<i class="fa fa-plus"></i>Suku
		</a>
		<div class="clearfix"></div>
	</div>
	<table class="table">
		<head>
			<tr>
				<th>No.</th>
				<th>Nama Suku</th>
				<th>Id_Pulau</th>
				<th>Aksi</th>
			</tr>
		</head>
		<tbody>
			<?php $x=1; ?>
			@foreach($semuaSuku as $suku)
			<tr>
				<td>{{$x++}}</td>
				<td>{{$suku->nama_suku or 'nama suku kosong'}}</td>
				<td>{{$suku->id_provinsi or 'nama suku kosong'}}</td>
				<td>
					<div class="btn-group" role="group">
						<a href="{{url('suku/edit/'.$suku->id)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Ubah"><i class="fa fa-pencil"></i></a>
						<a href="{{url('suku/'.$suku->id)}}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>
						<a href="{{url('suku/hapus/'.$suku->id)}}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>
					</div>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@stop