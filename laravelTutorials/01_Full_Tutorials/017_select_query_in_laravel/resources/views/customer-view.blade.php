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
<body>
<div class="container">
	<table class="table">
		<thead>
			<tr>
				<th>Name</th>
				<th>Email</th>
				<th>Gender</th>
				<th>Dob</th>
				<th>state</th>
				<th>country</th>
				<th>status</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($customers as $item)
			<tr>
				<td>{{$item ->name}}</td>
				<td>{{$item ->email}}</td>
				{{--<td>{{$item ->gender == 'M' ? 'Male' : 'Female'}}</td>
				--}}
				<td>
					@if($item->gender == 'M')
					Male
					@elseif($item->gender == 'F')
					Female
					@else
					Other 
					@endif
				</td>
				<td>{{$item ->dob}}</td>
				<td>{{$item ->state}}</td>
				<td>{{$item ->country}}</td>
				<td>{{$item ->status == 1 ? 'Active' : 'Inactive'}}</td>
				
			</tr>
			@endforeach
		</tbody>

	</table>
</div>
</body>
</html>