@extends('layouts.master')
@section('add',route('book.create'))
@section('title','Book Create')
@section('content')
<div class="row justify-content-center">
	<div class="col-md-8" style="margin: 20px 0px; border: 1px solid">
		<div class="form">
		{!! Form::open(['route'=>'book.store','method'=>'POST']) !!}
			@include('layouts.form_input',["field"=>"title","olddata"=>null])
			@include('layouts.form_input',["field"=>"author","olddata"=>null])
			<div class="form-group">
				{!! Form::select('publisher', $data ,null, ['placeholder' => 'Pick a publisher...']) !!}
				@if($errors->has('publisher'))
					<span class="alert alert-danger"> {{$errors->first('publisher')}} </span> 
				@endif
			</div>
			<div class="form-group">
				{!! Form::submit('Save',['class'=>'btn btn-primary']) !!}
			</div>
		{!! Form::close() !!}
	</div>
	</div>
</div> 
@endsection