@extends('master')
@section('container')
<div class="panel panel-default">
	<div class="panel-heading">
		<strong>Data Komentar</strong>
		<a href="{{url('komentar/tambah')}}" class="btn btn-xs btn-primary pull-right">
			<i class="fa fa-plus"></i>Komentar
		</a>
		<div class="clearfix"></div>
	</div>
	<table class="table">
		<head>
			<tr>
				<th>No.</th>
				<th>Komentar</th>
				<th>Id Member</th>
				<th>Id Kesenian Kebudayaan</th>
				<th>Aksi</th>
			</tr>
		</head>
		<tbody>
			<?php $x=1; ?>
			@foreach($semuaKomentar as $komentar)
			<tr>
				<td>{{$x++}}</td>
				<td>{{$komentar->komentar1}}</td>
				<td>{{$komentar->id_member1}}</td>
				<td>{{$komentar->id_kesenian_kebudayaan1}}</td>
				
				<td>
					<div class="btn-group" role="group">
						<a href="{{url('komentar/edit/'.$komentar->id)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Ubah"><i class="fa fa-pencil"></i></a>
						<a href="{{url('komentar/'.$komentar->id)}}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>
						<a href="{{url('komentar/hapus/'.$komentar->id)}}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>
					</div>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@stop