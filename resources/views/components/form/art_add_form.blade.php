
<div class='container'>
	@include('components.form.form_err_mess')
	<div class='row'>
		<div class='form-group col-sm-12 col-md-6 col-lg-6'>
			{{Form::label('title', 'Art Title')}}
			{{Form::text('title', '', ['class' => 'form-control', 'placeholder' => ''])}}
		</div>
		<div class='form-group col-sm-12 col-md-6 col-lg-6'>
			{{Form::label('artist', 'Artist')}}
			{{Form::select('artist', $artists, '', ['class' => 'form-control'])}}
		</div>
		<div class='form-group col-sm-12 col-md-6 col-lg-6'>
			{{Form::label('price', 'Price')}}
			{{Form::number('price', '', ['class' => 'form-control', 'placeholder' => ''])}}
		</div>
		<div class='form-group col-sm-12 col-md-6 col-lg-6'>
			{{Form::label('dimensions', 'Dimensions')}}
			{{Form::text('dimensions', '', ['class' => 'form-control', 'placeholder' => ''])}}
		</div>
		<div class='form-group col-sm-12 col-md-6 col-lg-6'>
			{{Form::label('image', 'Image')}}
			{{Form::file('image', ['class' => 'form-control'])}}
		</div>
		<div class='form-group col-sm-12 col-md-6 col-lg-6'>
			{{Form::label('date', 'Date')}}
			{{ Form::text('date', '', array('id' => 'datepicker', 'class' => 'form-control')) }}
		</div>
		<div class='form-group col-sm-12 col-md-6 col-lg-6'>
			{{Form::label('description', 'Description')}}
			{{Form::textarea('description', '', ['class' => 'form-control', 'placeholder' => ''])}}
		</div>
		<div class='form-group col-sm-12 col-md-6 col-lg-6'>
			{{Form::label('medium', 'Medium')}}
			{{Form::select('medium', array('painting' => 'Painting', 'photography' => 'Photography', 'sculpture' => 'Sculpture'), '', ['class' => 'form-control', 'placeholder' => ''])}}
		</div>
	</div>
	<div class='row'>
		<div>
			{{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
		</div>
	</div>
</div>