	<div class='container'>
		@include('components.form.form_err_mess')
		<div class='row'>
			<div class='form-group col-sm-12 col-md-6 col-lg-6'>
				{{Form::label('add_title', 'Advertisement Title')}}
				{{Form::text('add_title', '', ['class' => 'form-control', 'placeholder' => ''])}}
			</div>
			<div class='form-group col-sm-12 col-md-6 col-lg-6'>
				{{Form::label('add_text', 'Advertisemnt Text')}}
				{{Form::text('add_text', '', ['class' => 'form-control', 'placeholder' => ''])}}
			</div>
			<div class='form-group col-sm-12 col-md-6 col-lg-6'>
				{{Form::label('image', 'Image')}}
				{{Form::file('image', ['class' => 'form-control'])}}
			</div>
		</div>
		<div class='row'>
			<div>
				{{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
			</div>
		</div>
	</div>