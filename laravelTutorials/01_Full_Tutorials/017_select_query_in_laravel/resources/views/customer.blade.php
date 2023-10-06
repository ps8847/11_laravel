<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap Site</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</head>
<body class="bg-dark">
<form action="{{url("/")}}/customer" method="post">
	@csrf 
	<div class="container mt-4 card p-3 bg-white">
		<h3 class="text-center text-primary">
			Customer Registration
		</h3>
		<div class="row">
			<div class="form-group col-md-6 required">
				<label for="">Name</label>
				<input type="text" name="name" class="form-control" />
				<span class="text-danger">
					@error('name')
						{{$message}}
					@enderror
				</span>
			</div>
			<div class="form-group col-md-6 required">
				<label for="">Email</label>
				<input type="text" name="email" class="form-control" />
				<span class="text-danger">
					@error('email')
						{{$message}}
					@enderror
				</span>
			</div>
		</div>
		<div class="row">
			<div class="form-group col-md-6 required">
				<label for="">Password</label>
				<input type="password" name="password" class="form-control" />
				<span class="text-danger">
					@error('password')
						{{$message}}
					@enderror
				</span>
			</div>
			<div class="form-group col-md-6 required">
				<label for="">Confirm Password</label>
				<input type="password" name="confirm_password" class="form-control" />
				<span class="text-danger">
					@error('confirm_password')
						{{$message}}
					@enderror
				</span>
			</div>
		</div>
		<div class="row">
			<div class="form-group col-md-6 required">
				<label for="">Country</label>
				<input type="text" name="country" class="form-control" />
				<span class="text-danger">
					@error('country')
						{{$message}}
					@enderror
				</span>
			</div>
			<div class="form-group col-md-6 required">
				<label for="">State</label>
				<input type="text" name="state" class="form-control" />
				<span class="text-danger">
					@error('state')
						{{$message}}
					@enderror
				</span>
			</div>
		</div>
		<div class="row">
			<div class="form-group col-md-12 required">
				<label for="">Address</label>
				<textarea type="text" name="address" class="form-control" cols="10" rows="3"> </textarea>
				<span class="text-danger">
					@error('address')
						{{$message}}
					@enderror
				</span>
			</div>

		</div>

		<div class="row">
			<div class="form-group col-md-6 required">
				<label for="">Gender :</label> <br>
				<input type="radio" value="M" name="gender">Male
				<input type="radio" value="F" name="gender">Female
				<input type="radio" value="O" name="gender">Other
				<span class="text-danger">
					@error('gender')
						{{$message}}
					@enderror
				</span>
			</div>
			<div class="form-group col-md-6 required">
				<label for="">Date of Birth :</label> <br>
				<input type="date" class="form-control" name="dob">
				<span class="text-danger">
					@error('dob')
						{{$message}}
					@enderror
				</span>
			</div>

		</div>
		<br>
		<button class="btn btn-primary col-12">
			Submit
		</button>
	</div>
</form>

</body>
</html>