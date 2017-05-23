@extends('master')
@section('container')
<div class="panel panel-warning">
	<div class="panel-heading">
		<strong><a href="{{url('bantu')}}"><i style="color: #8a6d3b" class="fa text-default fa-chevron-left"></i></a>Detail Data bantu</strong>
	</div>
	<table class="table">
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td>{{$bantu->nama_provinsi}}</td>
			</tr>
			<tr>
				<td class="col-xs-4">Dibuat Tanggal</td>
				<td class="col-xs-1">:</td>
				<td>{{$bantu->created_at}}</td>
			</tr>
			<tr>
				<td class="col-xs-4">Diperbarui Tanggal</td>
				<td class="col-xs-1">:</td>
				<td>{{$bantu->updated_at}}</td>
			</tr>
	</table>
</div>
@stop