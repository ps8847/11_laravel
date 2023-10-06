<!doctype html>
<html lang="en">
  <head>
	<title>Title</title>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>

	<form action="{{url('/')}}/register" method="post">
		@csrf
		{{--<pre>
		@php
			print_r($errors->all())
		@endphp
		</pre>--}}
<div class="container">
	<h1 class="text-center">
		Register
	</h1>
	<div class="form-group">
	  <label for="">Name</label>
	  <input type="text" class="form-control" name="name" id="" aria-describedby="helpId" placeholder="" value="{{old('name')}}">
	  <small id="helpId" class="form-text text-muted"> @error('name') {{$message}} @enderror</small>
	</div>
	<div class="form-group">
	  <label for="">Email</label>
	  <input type="email" class="form-control" name="email" id="" aria-describedby="helpId" placeholder="" value="{{old('email')}}">
	  <small id="helpId" class="form-text text-muted">  @error('email') {{$message}} @enderror</small>
	</div>
	<div class="form-group">
	  <label for="">Password</label>
	  <input type="password" class="form-control" name="password" id="" aria-describedby="helpId" placeholder="">
	  <small id="helpId" class="form-text text-muted">  @error('password') {{$message}} @enderror</small>
	</div>
	<div class="form-group">
	  <label for="">Confirm password</label>
	  <input type="password" class="form-control" name="password_confirmation" id="" aria-describedby="helpId" placeholder="">
	  <small id="helpId" class="form-text text-muted">  @error('password_confirmation') {{$message}} @enderror</small>
	</div>
	<button class="btn btn-primary">
		Submit
	</button>
</div>
</form>
  </body>
</html>

