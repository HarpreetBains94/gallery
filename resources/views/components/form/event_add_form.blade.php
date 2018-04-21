	

@if(!isset($event))
	<div class='container'>
		@include('components.form.form_err_mess')
		<div class='row'>
			<div class='form-group col-sm-12 col-md-12 col-lg-6'>
				{{Form::label('title', 'Title')}}
				{{Form::text('title', '', ['class' => 'form-control'])}}
			</div>
			<div class='form-group col-sm-12 col-md-6 col-lg-6'>
				{{Form::label('price', 'Price')}}
				{{Form::number('price', '', ['class' => 'form-control'])}}
			</div>
			<div class='form-group col-sm-12 col-md-6 col-lg-6'>
				{{Form::label('description', 'Description')}}
				{{Form::textarea('description', '', ['class' => 'form-control'])}}
			</div>
			<div class='form-group col-sm-12 col-md-6 col-lg-6'>
				{{Form::label('date', 'Date')}}
				{{ Form::text('date', '' , array('id' => 'datepicker', 'class' => 'form-control')) }}
			</div>
		</div>
		<div class='row'>
			<div>
				{{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
			</div>
		</div>
	</div>
@endif

@if(isset($event))
	<div class='container'>
		@include('components.form.form_err_mess')
		<div class='row'>
			<div class='form-group col-sm-12 col-md-12 col-lg-6'>
				{{Form::label('title', 'Title')}}
				{{Form::text('title', $event->title, ['class' => 'form-control'])}}
			</div>
			<div class='form-group col-sm-12 col-md-6 col-lg-6'>
				{{Form::label('price', 'Price')}}
				{{Form::number('price', $event->price, ['class' => 'form-control'])}}
			</div>
			<div class='form-group col-sm-12 col-md-6 col-lg-6'>
				{{Form::label('description', 'Description')}}
				{{Form::textarea('description', $event->description, ['class' => 'form-control'])}}
			</div>
			<div class='form-group col-sm-12 col-md-6 col-lg-6'>
				{{Form::label('date', 'Date')}}
				{{ Form::text('date', $event->date , array('id' => 'datepicker', 'class' => 'form-control')) }}
			</div>
		</div>
		<div class='row'>
			<div>
				{{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
			</div>
		</div>
	</div>
@endif