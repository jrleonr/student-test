@extends('layout')

@section('content')

<header class="Header" style="background-image:url('//www.unite-students.com{{$accommodation['images'][0]}}')">
	<div>
		<h1 class="Header__title">{{ $accommodation['title'] }}</h1>
		<h2 class="Header__subTitle">{{ $accommodation['subtitle'] }}</h2>
	</div>	
	
</header>

<section class="Accommodation">


	<article class="Accommodation__description">
		{{ $accommodation['description'] }}
	</article>

	<div class="Accommodation__contact">
		<div>
			<button>Contact now</button>
		</div>
	</div>
</section>

<section class="Room">
	<aside class="Room__menu">
		<ul>
			@foreach( $accommodation['rooms'] AS $room)
				<li>{{ $room['title'] }}</li>	
			@endforeach
		</ul>
	</aside>
	<section class="Room__description">
		@foreach( $accommodation['rooms'] AS $room)
			{{ $room['title'] }}, {{ $room['description'] }}	
		@endforeach
	</section>
	
</section>	




@stop
