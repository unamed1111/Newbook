@extends('layouts.master')
@section('add',route('book.create'))
@section('title','Book Edit')
@section('content')
<div class="row justify-content-center">
	<div class="col-md-8" style="margin: 20px 0px; border: 1px solid">
		<div class="form">
		{!! Form::open(['route'=>['book.update',$data->id],'method'=>'PUT']) !!}
			@include('layouts.form_input',["field"=>"title","olddata"=>$data->title])
			@include('layouts.form_input',["field"=>"author","olddata"=>$data->author])
			<div class="form-group">
				{!! Form::select('publisher',$publisher ,$data->publisher_id) !!}
			</div>
			<div class="form-group">
				{!! Form::submit('Save',['class'=>'btn btn-primary']) !!}
			</div>
		{!! Form::close() !!}
	</div>
	</div>
</div> 
@endsection