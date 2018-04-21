<div class='container'>
	@include('components.form.form_err_mess')
	<div class='row'>
		<div class='form-group col-sm-12 col-md-6 col-lg-6'>
			{{Form::label('date', 'Date')}}
			{{ Form::text('date', $appointment->appointment_date , array('id' => 'datepicker', 'class' => 'form-control')) }}
		</div>
	</div>
	<div class='row'>
		<div>
			{{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
		</div>
	</div>
</div>