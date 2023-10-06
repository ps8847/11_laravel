<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Prince</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</head>
<body>
	<nav class="navbar navbar-expand-sm navbar-light bg-primary">
		<div class="container-fluid">
			<a class="navbar-brand" href="#">Prince
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarID"
				aria-controls="navbarID" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarID">
				<div class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link" aria-current="page" href="{{url('/')}}">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" aria-current="page" href="{{url('/customer/create')}}">Add Customers</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" aria-current="page" href="{{url('/customer/view')}}">All Customers</a>
					</li>
					
				</div>
			</div>
		</div>
	</nav>

	@error('custom_name')
  		<p>{{$message}}</p>
	@enderror

	<h5 class="text-center">

	</h5>
<div class="container">
	<div class="row m-2">
		{{--<form action=""  class="col-5">
			<div class="form-group">
				<input type="search" name="search" id="" class="form-control" placeholder="search by name or email" value="{{ $search }}">
				<button class="btn btn-primary">Search</button>
			</div>
		</form>
		<a href="{{ url('/customer/view') }}">
			<button class="btn btn-primary">Reset</button>
		</a>--}}

		<div class="col-3">
			<a href="{{route('customer.create')}}">
				<button class="btn btn-primary d-inline-block float-right">Add</button>
			</a>
			<a href="{{url('/customer/trash')}}">
				<button class="btn btn-success d-inline-block float-right">Go to trash</button>
			</a>
		</div>

	</div>

	<div class="table-responsive justify-content-center mx-auto col-11 mt-5">
		<table class="table table-striped table-bordered table-hover table-dark mb-5">
		<thead>
			<tr>
				<td>Id</td>
				<th>Name</th>
				<th>Email</th>
				<th>Gender</th>
				<th>Dob</th>
				<th>state</th>
				<th>Address</th>
				<th>country</th>
				<th>status</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($customers as $item)
			<tr>
				<td>{{ $item ->customer_id }}</td>
				<td>{{$item ->user_name}}</td>
				<td>{{$item ->email}}</td>
		
				<td>
					@if($item->gender == 'M')
					Male
					@elseif($item->gender == 'F')
					Female
					@else
					Other 
					@endif
				</td>
				{{--<td>{{get_formatted_date($item->dob , 'd-M-Y')}}</td>--}}
				<td style="min-width: 150px;">{{get_formatted_date($item->dob , 'd-M-Y')}}</td>
				<td>{{$item ->state}}</td>
				<td>{{$item ->address}}</td>
				<td>{{$item ->country}}</td>
				{{--<td>{{$item ->status == 1 ? <span class="badge badge-success">Active</span> : <span class="badge badge-danger">InActive</span>}}</td>--}}
				<td>{{$item ->status == 1 ? 'Active' : 'InActive'}}</td>
				<td> 
					
					<a href="{{url('/customer/delete/')}}/{{$item->customer_id}}">
						<button class="btn btn-danger col-12 mb-1">Trash</button>
					</a>
					
					<a href="{{route('customer.edit' , ['id' => $item->customer_id])}}">
						<button class="btn btn-primary col-12">Edit</button>
					</a>
				</td>
				
			</tr>
			@endforeach
		</tbody>

	</table>
	{{--<div class="row">
		{{ $customers->links() }}
	</div>--}}
</div>
</body>
</html>