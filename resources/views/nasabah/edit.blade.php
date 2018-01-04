
@extends('template')
@section('content')

	{!! Html::ul($errors->all()) !!}
	{!! Form::model($nasabah,array('url'=>'nasabah/'.$nasabah->id,'method'=>'patch')) !!}


<table class="table table-bordered">
<!-- <tr><td>No Rekening</td><td>{!! Form::text('rekening',null,['class'=>'form-control']) !!}</td></tr>
<tr><td>Alamat</td><td>{!! Form::text('nama_lengkap',null,['class'=>'form-control']) !!}</td></tr>
<tr><td >Alamat</td><td>{!! Form::textarea('alamat',null,['class'=>'form-control']) !!}</td></tr> -->

@include('nasabah.form')
<tr><td colspan="2">
	{!! Form::Submit('simpan data',['class'=>'btn btn-danger btn-sm']) !!}
	{!! link_to('nasabah','Kembali',['class'=>'btn btn-danger btn-sm']) !!}

</td></tr>
<table>

	{!! Form::close() !!}
@stop