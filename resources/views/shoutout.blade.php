<h1>shoutout to: {{$text}}</h1>

@if($text=="dorothy")
	<h1>Gwapa</h1>
@else
	<h1>Gwapo</h1>
@endif


@foreach($colors as $color)
	@if($color =="blue")
		{{ $color }} - it is the color of the sky
	
	@else
		{{ $color}}
	@endif
	<br/>
@endforeach

<br/>
<br/>


@foreach($colors as $color => $description)
	{{ $color }} - {{ $description }}
	<br/>
@endforeach
