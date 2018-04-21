	<div class='container'>
		@include('components.form.form_err_mess')
		<div class='row'>
			<div class='form-group col-sm-12 col-md-12 col-lg-12'>
				{{Form::label('name', 'Name')}}
				{{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'John Doe'])}}
			</div>
			<div class='form-group col-sm-12 col-md-12 col-lg-12'>
				{{Form::label('email', 'email')}}
				{{Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'example@example.com'])}}
				{{ Form::hidden('art_id', $art[0]->id) }}
			</div>
		</div>
		<div class='row'>
			<div>
				{{Form::submit('Request Viewing Appointment', ['class' => 'btn btn-primary btn-lg'])}}
			</div>
		</div>
	</div>