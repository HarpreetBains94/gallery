@if(isset($artist))
	<div class='container'>
		@include('components.form.form_err_mess')
		<div class='row'>
			<div class='form-group col-sm-12 col-md-12 col-lg-12'>
				{{Form::label('name', 'Name')}}
				{{Form::text('name', $artist[0]->name, ['class' => 'form-control'])}}
			</div>
			<div class='form-group col-sm-12 col-md-12 col-lg-12'>
				{{Form::label('image', 'Image')}}
				{{Form::file('image' ,['class' => 'form-control'])}}
			</div>
			<div class='form-group col-sm-12 col-md-12 col-lg-12'>
				{{Form::label('bio', 'Bio')}}
				{{Form::textarea('bio', $artist[0]->bio, ['class' => 'form-control'])}}
			</div>
		</div>
		<div class='row'>
			<div>
				{{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
			</div>
		</div>
	</div>
@endif
@if(!isset($artist))
	<div class='container'>
		@include('components.form.form_err_mess')
		<div class='row'>
			<div class='form-group col-sm-12 col-md-12 col-lg-12'>
				{{Form::label('name', 'Name')}}
				{{Form::text('name', '', ['class' => 'form-control', 'placeholder' => ''])}}
			</div>
			<div class='form-group col-sm-12 col-md-12 col-lg-12'>
				{{Form::label('image', 'Image')}}
				{{Form::file('image', ['class' => 'form-control'])}}
			</div>
			<div class='form-group col-sm-12 col-md-12 col-lg-12'>
				{{Form::label('bio', 'Bio')}}
				{{Form::textarea('bio', '', ['class' => 'form-control', 'placeholder' => ''])}}
			</div>
		</div>
		<div class='row'>
			<div>
				{{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
			</div>
		</div>
	</div>
@endif