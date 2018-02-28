@extends('layouts.master')
@section('add',route('publisher.create'))
@section('title','Publisher Create')
@section('content')
<div class="row justify-content-center">
	<div class="col-md-8" style="margin: 20px 0px; border: 1px solid">
		<div class="form">
		{!! Form::open(['route'=>'publisher.store','method'=>'POST']) !!}
			@include('layouts.form_input',["field"=>"publisher","olddata"=> null])
			<div class="form-group">
				{!! Form::submit('Add',['class'=>'btn btn-primary']) !!}
			</div>
		{!! Form::close() !!}
	</div>
	</div>
</div> 
@endsection