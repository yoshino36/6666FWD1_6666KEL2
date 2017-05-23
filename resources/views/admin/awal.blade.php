@extends('master')
@section('container')
<div class="panel panel-default">
	<div class="panel-heading">
		<strong>Data Admin</strong>
		<a href="{{url('admin/tambah')}}" class="btn btn-xs btn-primary pull-right">
			<i class="fa fa-plus"></i>Admin
		</a>
		<div class="clearfix"></div>
	</div>
	<table class="table">
		<head>
			<tr>
				<th>No.</th>
				<th>Nama</th>
				<th>No Hp</th>
				<th>Id User</th>
				<th>Aksi</th>
			</tr>
		</head>
		<tbody>
			<?php $x=1; ?>
			@foreach($semuaAdmin as $admin)
			<tr>
				<td>{{$x++}}</td>
				<td>{{$admin->Nama or 'nama kosong'}}</td>
				<td>{{$admin->No_hp or 'no hp kosong'}}</td>
				<td>{{$admin->id_user1}}</td>
				
				<td>
					<div class="btn-group" role="group">
						<a href="{{url('admin/edit/'.$admin->id)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Ubah"><i class="fa fa-pencil"></i></a>
						<a href="{{url('admin/'.$admin->id)}}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>
						<a href="{{url('admin/hapus/'.$admin->id)}}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>
					</div>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@stop