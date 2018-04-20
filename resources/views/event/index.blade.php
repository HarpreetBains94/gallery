@extends('layouts.app')

@section('content')
<div class="spacer"></div>
<h2 class="heading">Events</h2>
<div class="spacer"></div>
    <div class="container">
		<div class="row">
			<div class="[ col-xs-12  col-sm-12 ]">
				<ul class="event-list">
					
					<li>
						<time datetime="2014-07-20 0000">
							<span class="day">20</span>
							<span class="month">Mar</span>
							<span class="year">2018</span>
							<span class="time">12:00 AM</span>
						</time>
						<div class="info">
							<h2 class="title">Artist 1 Sale</h2>
							<p class="desc">All art by Artist 1 25% off</p>
							<ul>
								<li style="width:50%;"><a href="#website">View Details</a></li>
							</ul>
						</div>
					</li>
					<li>
						<time datetime="2014-07-20 0000">
							<span class="day">4</span>
							<span class="month">Apr</span>
							<span class="year">2018</span>
							<span class="time">12:00 AM</span>
						</time>
						<div class="info">
							<h2 class="title">Artist 2 meet and great</h2>
							<p class="desc">Come meet Artist 2 as they unveil their new line of sculptures</p>
							<ul>
								<li style="width:50%;"><a href="#website">View Details</a></li>
							</ul>
						</div>
					</li>
					<li>
						<time datetime="2014-07-20 0000">
							<span class="day">12</span>
							<span class="month">Jun</span>
							<span class="year">2018</span>
							<span class="time">12:00 AM</span>
						</time>
						<div class="info">
							<h2 class="title">Charity Silent Auction</h2>
							<p class="desc">All proceeds from the night  go towrds cancer research</p>
							<ul>
								<li style="width:50%;"><a href="#website">View Details</a></li>
							</ul>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
@endsection