@extends('master')
@section('container')
<div class="panel panel-warning">
	<div class="panel-heading">
		<strong><a href="{{url('admin')}}"><i style="color: #8a6d3b" class="fa text-default fa-chevron-left"></i></a>Detail Data admin</strong>
	</div>
	<table class="table">
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td>{{$admin->Nama}}</td>
			</tr>
			<tr>
				<td>No Hp</td>
				<td>:</td>
				<td>{{$admin->No_hp}}</td>
			</tr>
			<tr>
				<td class="col-xs-4">Dibuat Tanggal</td>
				<td class="col-xs-1">:</td>
				<td>{{$admin->created_at}}</td>
			</tr>
			<tr>
				<td class="col-xs-4">Diperbarui Tanggal</td>
				<td class="col-xs-1">:</td>
				<td>{{$admin->updated_at}}</td>
			</tr>
	</table>
</div>
@stop