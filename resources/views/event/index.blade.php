@extends('layouts.app')

@section('content')
<div class="spacer"></div>
<h2 class="heading">Events</h2>
<div class="spacer"></div>

    <div class="container">
		<div class="row">
			<div class="[ col-xs-12  col-sm-12 ]">
				<ul class="event-list">
					@if(!empty($events))
						@foreach ($events as $event)
							<li>
								<time datetime="2014-07-20 0000">
									<span class="day">{{Carbon\Carbon::createFromFormat('Y-m-d', $event->date)->day}}</span>
									<span class="month">{{substr(date("F", mktime(0, 0, 0, Carbon\Carbon::createFromFormat('Y-m-d', $event->date)->month, 1)), 0, 3)}}</span>
									<span class="year">{{Carbon\Carbon::createFromFormat('Y-m-d', $event->date)->year}}</span>
								</time>
								<div class="info">
									<h2 class="title">{{$event->title}}</h2>
									<ul>
										<li style="width:50%;"><a href='/events/{{$event->id}}'>View Details</a></li>
									</ul>
								</div>
							</li>
						@endforeach
					@endif
				</ul>
			</div>
		</div>
	</div>
@endsection