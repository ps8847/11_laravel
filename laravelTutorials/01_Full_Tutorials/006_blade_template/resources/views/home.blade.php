<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>

	{{--*************************************

	Displaying data >>

	**************************************--}}

	{{--<h1>
		Welcome , {{$name}}
	</h1>--}}
	{{--<h1>
		Welcome , {{$name ?? "Guest"}}
	</h1>--}}
	{{--<h1>
		Welcome , {{time()}}
		Welcome , {{date('d-m-y')}}
	</h1>--}}

	{{-------------------------------- --}}

	{{--it will not let the demo to echo as expected --}}
	{{--<h1>
		Welcome , {{$name}}
	</h1>

	{{$demo}}--}}


	{{--it will show the demo's data as expected --}}
	{{--{!! $demo !!}--}}

	{{--********************************************************************************************* --}}

	{{--*************************************

	Blade Conditional Directives >>

	**************************************--}}

	{{--//to run this type on url >> http://127.0.0.1:8000/abcd--}}
	{{--@if($name != "")
	{{'name is not empty'}}
	@else 
	{{'name is empty'}}
	@endif--}}

	{{--@if($name == "")
	{{'name is empty'}}
	@elseif($name == 'prince')
	{{'name is prince'}}
	@else 
	{{'name is incorrect'}}
	@endif--}}

	{{--@unless ($name == 'prince')
	the name is not prince 
	@endunless--}}

	{{--<h1>
		@isset($name)
			Welcome , {{$name}}
		@endisset
	</h1>--}}


	{{--********************************************************************************************* --}}

	{{--*************************************

	looping Directives >>

	**************************************--}}

	{{--@for ($i = 1 ; $i < 10 ; $i++)
	<h2>
		{{$i}}
	</h2>
	@endfor--}}

	{{--@php
		$i = 1;
	@endphp

	@while ($i <= 10)
		<h2> {{$i}} </h2>
		
		@php
		$i++;
		@endphp
	@endwhile--}}

	{{--@php
		$arr = [1,2,3,4,5,6,7,89,90];
	@endphp--}}

	{{--@foreach ($arr as $item)
	<h2>{{ $item }}</h2>
	@endforeach--}}

	{{--<select>
		@foreach ($arr as $item)
		<option> {{$item}} </option>
		@endforeach
	</select>--}}

	{{--<select>
		@foreach ($arr as $key => $item)
		<option value="{{$key}}"> {{$item}} </option>
		@endforeach
	</select>--}}

	{{--@for ($i = 1; $i <= 10; $i++)
	@if($i == 5)
	@continue
	@break
	@endif
	{{$i}}
	@endfor--}}

	{{--heyy --}}

	
</body>
</html>