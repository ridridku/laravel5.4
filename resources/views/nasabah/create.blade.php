
@extends('template')
@section('content')

	{!! Html::ul($errors->all()) !!}
	{!! Form::open(array('url'=>'nasabah')) !!}


<table class="table table-bordered">
	<!-- cara 1 tampil -->
<!-- <tr><td>No Rekening</td><td>{!! Form::text('rekening','',['class'=>'form-control','readonly']) !!}</td></tr>
<tr><td>Alamat</td><td>{!! Form::text('nama_lengkap','',['class'=>'form-control']) !!}</td></tr>
<tr><td >Alamat</td><td>{!! Form::textarea('alamat','',['class'=>'form-control']) !!}</td></tr> -->

@include('nasabah.form')


<tr><td colspan="2">
	{!! Form::Submit('simpan data',['class'=>'btn btn-danger btn-sm']) !!}
	{!! link_to('nasabah','Kembali',['class'=>'btn btn-danger btn-sm']) !!}

</td></tr>
<table>

	{!! Form::close() !!}
@stop