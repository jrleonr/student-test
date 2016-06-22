@extends('layout')

@section('content')

<header class="Header" style="background-image:url('//www.unite-students.com{{$accommodation['images'][0]}}')">
	<div>
		<h1 class="Header__title">{{ $accommodation['title'] }}</h1>
		<h2 class="Header__subTitle">{{ $accommodation['subtitle'] }}</h2>
	</div>	
	
</header>

<div class="container">
<section class="Accommodation row">

	<article class="Accommodation__description col s8 ">
		{{ $accommodation['description'] }}
	</article>

	<div class="Accommodation__contact col s4">
		<div>
			<button>Contact now</button>
		</div>
	</div>
</section>

<section class="Room row">
	<aside class="Room__menu col s3">
		<h4 class="header">Room Types</h4>
		<div id="menu" class="collection">
			@foreach( $accommodation['rooms'] AS $key => $room)
        		<a href="#!" id="room-{{$key}}" class="collection-item ">{{ $room['title'] }}</a>
			@endforeach
      	</div>
	</aside>
	<section class="col s9 ">
		@foreach( $accommodation['rooms'] AS $room)
			<div class="row">
				<div id="room{{$key}}" class="Room__description col s12 ">
					<p>{{ $room['title'] }}</p>, 
					{{ $room['description'] }}	
				</div>
			</div>
		@endforeach
	</section>
	
</section>	

</div>



@stop
