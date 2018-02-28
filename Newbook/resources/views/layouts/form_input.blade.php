<div class="form-group">
	{!! Form::label($field, ucfirst($field)) !!}
	{!! Form::text($field, old($field,$olddata) ,['class'=>'form-control','placeholder'=> ucfirst($field)]) !!}
	@if($errors->has($field))
		<div class="alert alert-danger">
			<ul>
				<li>  {{$errors->first($field)}}</li>
			</ul>
		</div>
	@endif
</div>
	
