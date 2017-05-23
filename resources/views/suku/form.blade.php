<div class="form-group">
	<label class="col-sm-2 control-label" id="nama">Nama Suku</label>
	<div class="col-sm-10">
		{!! Form::text('nama_suku',null,['class'=>'form-control','placeholder'=>"Nama Suku"]) !!}
	</div>
</div>

<div class="form-group">
	<label class="col-sm-2 control-label" id="nama">Foto Suku</label>
	<div class="col-sm-10">
		{!! Form::text('file_gambar',null,['class'=>'form-control','placeholder'=>"file_gambar"]) !!}
	</div>
</div>

<div class="form-group">
	<label class="col-sm-2 control-label" id="id_p">Id Provinsi</label>
	<div class="col-sm-10">
		{!! Form::select('id_provinsi',$provinsi->listpro('nama_provinsi','id_provinsi'),null,['class'=>'form-control','id'=>'id','placeholder'=>"[Provinsi]"]) !!}
	</div>
</div>