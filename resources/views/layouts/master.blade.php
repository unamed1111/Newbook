<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>@yield('title')</title>
	<link rel="stylesheet" href="">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/1.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand offset-1" href="#">ADMIN</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item ">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#">{{Auth::user()->name}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/logout">Loggout</a>
                </li>
            </ul>
        </div>
</nav>
    <div class="container-fluid hihi">
    	<div class="row justify-content-between">
    		<div class="col-md-2 sidebar">
    					<ul class="list-group ">
    						<li class="list-group-item"><a href="{{ route('book.index') }}">Book Editer</a></li>
    						<li class="list-group-item"><a href="{{ route('publisher.index') }}">Publisher Editer</a></li>
    					</ul>
    		</div>
    		<div class="col-md-9 content">
    			<div class="row text ">
    				<div class="col-md-4 offset-2">
    					<h2>@yield('title')</h2>
    				</div>
    				<div class="col-md-3 offset-3">
    					<button class="btn btn-success"><a href="@yield('add')" style=" color: black; text-decoration: none;">Add</a></button>
    				</div>
    			</div>
    			@yield('content')
    		</div>
    	</div>
    </div>
	<div class="footer bg-dark">
		<div class="row">
			<div class="col-md-4 text-center text-white">
				<h2>Edit from Adim</h2>
			</div>
			<div class="col-md-8 text-center text-white">
				<p>Email: unamed11111@gmail.com</p>
				<p>Telephone: 01645344996</p>
				<p>Address: 111, Đông Ngạc, Bắc Từ Liêm, Hà Nội</p>
			</div>
		</div>
	</div>
</body>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>