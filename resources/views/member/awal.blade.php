@extends('master')
@section('container')
<div class="panel panel-default">
	<div class="panel-heading">
		<strong>Data Member</strong>
		<a href="{{url('member/tambah')}}" class="btn btn-xs btn-primary pull-right">
			<i class="fa fa-plus"></i>Member
		</a>
		<div class="clearfix"></div>
	</div>
	<table class="table">
		<head>
			<tr>
				<th>No.</th>
				<th>Nama</th>
				<th>Email</th>
				<th>No Hp</th>
				<th>Id User</th>
				<th>Aksi</th>
			</tr>
		</head>
		<tbody>
			<?php $x=1; ?>
			@foreach($semuaMember as $member)
			<tr>
				<td>{{$x++}}</td>
				<td>{{$member->Nama or 'nama kosong'}}</td>
				<td>{{$member->email or 'email kosong'}}</td>
				<td>{{$member->No_hp or 'no hp kosong'}}</td>
				<td>{{$member->id_user1}}</td>
				
				<td>
					<div class="btn-group" role="group">
						<a href="{{url('member/edit/'.$member->id)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Ubah"><i class="fa fa-pencil"></i></a>
						<a href="{{url('member/'.$member->id)}}" class="btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="Lihat"><i class="fa fa-eye"></i></a>
						<a href="{{url('member/hapus/'.$member->id)}}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-remove"></i></a>
					</div>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@stop