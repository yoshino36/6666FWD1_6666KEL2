<div class="form-group">
	<label class="col-sm-2 control-label" id="nama">Nama kesenian</label>
	<div class="col-sm-10">
		{!! Form::text('nama_kebudayaan',null,['class'=>'form-control','id'=>'nama_kesenian','placeholder'=>"Nama"]) !!}
	</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label" id="file_gambar">file gambar</label>
	<div class="col-sm-10">
		{!! Form::text('file_gambar',null,['class'=>'form-control','id'=>'file gambar','placeholder'=>"file gambar"]) !!}
	</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label" id="ket">Keterangan</label>
	<div class="col-sm-10">
		{!! Form::textarea('keterangan',null,['class'=>'form-control','placeholder'=>"keterangan"]) !!}
	</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label" id="id_p">Id Provinsi</label>
	<div class="col-sm-10">
		{!! Form::select('id_suku',$suku->listsuk('nama_suku','id_suku'),null,['class'=>'form-control','id'=>'id','placeholder'=>"[suku]"]) !!}
	</div>
</div>