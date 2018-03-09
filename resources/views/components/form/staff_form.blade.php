
<div class='container'>
	@include('components.form.form_err_mess')
	<div class='row'>
		<div class='form-group col-sm-12 col-md-6 col-lg-6'>
			{{Form::label('email', 'E-Mail Address')}}
			{{Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'example@example.com'])}}
		</div>
		<div class='form-group col-sm-12 col-md-6 col-lg-6'>
			{{Form::label('password', 'Password')}}
			{{Form::text('password', '', ['class' => 'form-control', 'placeholder' => 'Password'])}}
		</div>
	</div>
	<div class='row'>
		<div>
			{{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
		</div>
	</div>
</div>