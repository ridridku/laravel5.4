
@extends('template')
@section('content')

@if(Session::has('success_message'))
	<div class="alert alert-info">
<button class="close" type="button" data-dismiss="alert" aria-hidden="true">&times;</button>
<i class="fa fa-info-circle"></i>{{Session::get('success_message')}}
  <strong>Success!</strong> 
</div>
@endif


{!!link_to('nasabah/create','tambah data',['class'=>'btn btn-danger btn-sm'])!!}



<br>
<!-- @foreach ($nasabah as $key)
	{{ $key }} <br>
@endforeach 
 -->
 <hr>
{!! Form::open(array('url'=>'nasabah/search')) !!}
{!! Form::text('keyword',null,['class'=>'form-control','placeholder'=>'Masukan Alamat Nasabah','size'=>'13']) !!}
{!! Form::submit('lakukan pencarian',['class'=>'btn btn-danger btn-sm']) !!}
{!! Form::close() !!}
<hr>
<table class="table table-bordered">

<tr>
<?php $i = 0 ?>
  
    <?php $i++ ?>
      


<th>No </th>
	<th>No Rekening</th>
	<th>Nama Lengkap</th>
	<th>Alamat</th>
	<th colspan='2'>Aksi</th>
</tr>
	@foreach($nasabah as $n)
<tr>
<td>{{$n -> rekening}}</td>
	<td>{{$n -> rekening}}</td>
	<td>{{$n -> nama_lengkap}}</td>
	<td>{{$n  -> alamat}}</td>
	<td>{!!link_to('nasabah/'.$n->id.'/edit','Edit',['class'=>'btn btn-default'])!!}</td>
<!-- cara hapus -->
	<td>	{!! Form::open(array('method'=>'delete','url'=>'nasabah/'.$n->id)) !!}
		{!! Form::hidden('_delete','DeLETE') !!}
		{!! Form::submit('DELETE',['class'=>'btn btn-danger btn-sm']) !!}
		{!! Form::close()!!}
	</td></tr>

@endforeach 
	
</tr>
</table>

<!-- menampilkan paging -->
{!! $nasabah->render()  !!}
@stop