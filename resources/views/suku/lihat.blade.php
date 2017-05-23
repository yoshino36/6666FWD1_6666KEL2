@extends('master')
@section('container')
<div class="panel panel-warning">
	<div class="panel-heading">
		<strong><a href="{{url('suku')}}"><i style="color: #8a6d3b" class="fa text-default fa-chevron-left"></i></a>Detail Data suku</strong>
	</div>
	<table class="table">
			<tr>
				<td>Nama Suku</td>
				<td>:</td>
				<td>{{$suku->nama_suku}}</td>
			</tr>
			<tr>
				<td>Id suku</td>
				<td>:</td>
				<td>{{$suku->id_provinsi}}</td>
			</tr>
			<tr>
				<td class="col-xs-4">Dibuat Tanggal</td>
				<td class="col-xs-1">:</td>
				<td>{{$suku->created_at}}</td>
			</tr>
			<tr>
				<td class="col-xs-4">Diperbarui Tanggal</td>
				<td class="col-xs-1">:</td>
				<td>{{$suku->updated_at}}</td>
			</tr>
	</table>
</div>
@stop