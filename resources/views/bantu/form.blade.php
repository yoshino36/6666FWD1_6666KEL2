<div class="form-group">
	<label class="col-sm-2 control-label" id="id_p">Id Provinsi</label>
	<div class="col-sm-10">
		{!! Form::select('id_kesenian',$kesenian->listkes('nama_kesenian','id_kesenian'),null,['class'=>'form-control','id'=>'id','placeholder'=>"[id_kesenian]"]) !!}
	</div>
</div>

<div class="form-group">
	<label class="col-sm-2 control-label" id="id_p">Id Provinsi</label>
	<div class="col-sm-10">
		{!! Form::select('id_kebudayaan',$kebudayaan->listkeb('nama_kebudayaan','id_kebudayaan'),null,['class'=>'form-control','id'=>'id','placeholder'=>"[id_kebudayaan]"]) !!}
	</div>
</div>