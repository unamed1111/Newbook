<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Login</title>
	<link rel="stylesheet" href="">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<div class="container " style="justify-content: center; display: flex; ">
			<div class="col-md-6 card " >
				{!! Form::open(['url'=>'/login','method'=>'POST']) !!}

					<div class="labelto col-4 offset-4">
					 	<h2 class="text-danger"> Login </h2>
					</div>
					<div class="form-group">
						{!! Form::label('email','Email') !!}
						{!! Form::email('email',null,['placeholder'=>'Your Email','class'=>'form-control']) !!}
					</div>
					<div class="form-group">
						{!! Form::label('password','Password') !!}
						{!! Form::password('password',['placeholder'=>'Your Password','class'=>'form-control']) !!}
					</div>
					<div class="form-group col-2 float-right">
						{!! Form::submit('Login',['class'=>'btn btn-success']) !!}
					</div>


				{!! Form::close() !!}
			</div>
	</div>
</body>
</html>