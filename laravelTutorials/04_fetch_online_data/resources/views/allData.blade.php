<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>hyy</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</head>
<body>
	
	 <?php
	  $jsonn = $json

	//  function sorrtByName() {
	//	  usort($jsonn, function($a, $b) { //Sort the array using a user defined function
	//		return $a->title > $b->title ? -1 : 1; //Compare the scores
	//	}); 
	//  }
	function sbt(){
		$jsonn = usort($jsonn, function($a, $b) { //Sort the array using a user defined function
			return $a->title > $b->title ? -1 : 1; //Compare the scores
		}); 
		
	}
	 ?>
	 
	 <div class="row">
		<button class="btn btn-primary" onclick={{ sbt()}}>sort By title</button>
	 </div>
	<div class="table-responsive justify-content-center mx-auto col-11 mt-5">
		<table class="table table-striped table-bordered table-hover table-dark mb-5">
		<thead>
			<tr>

				<th>UserId</th>
				<th>Id</th>
				<th>Title</th>
				<th>Body</th>
				
			</tr>
		</thead>
		<tbody>

			@foreach ($jsonn as $item)
			<tr>
				<td>{{$item['userId']}}</td>
				<td>{{$item['id']}}</td>
				<td style="min-width: 150px;">{{$item['title']}}</td>
				<td>{{$item ['body']}}</td>
						
			</tr>
			@endforeach
		</tbody>

	</table>

</div>
</body>
</html>