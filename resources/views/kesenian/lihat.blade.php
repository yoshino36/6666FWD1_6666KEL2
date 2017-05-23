@extends('master')
@section('container')
<div class="panel panel-warning">
	<div class="panel-heading">
		<strong><a href="{{url('kesenian')}}"><i style="color: #8a6d3b" class="fa text-default fa-chevron-left"></i></a>Detail Data kesenian</strong>
	</div>
	<table class="table">
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td>{{$kesenian->nama_kesenian}}</td>
			</tr>
			<tr>
				<td>keterangan</td>
				<td>:</td>
				<td>{{$kesenian->keterangan}}</td>
			</tr>
			<tr>
				<td>id_suku</td>
				<td>:</td>
				<td>{{$kesenian->id_suku1}}</td>
			</tr>
			<tr>
				<td class="col-xs-4">Dibuat Tanggal</td>
				<td class="col-xs-1">:</td>
				<td>{{$kesenian->created_at}}</td>
			</tr>
			<tr>
				<td class="col-xs-4">Diperbarui Tanggal</td>
				<td class="col-xs-1">:</td>
				<td>{{$kesenian->updated_at}}</td>
			</tr>
	</table>
</div>
@