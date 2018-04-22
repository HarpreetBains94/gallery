<div class='container'>
	@include('components.form.form_err_mess')
	<div class='row'>
		<div class='form-group col-sm-12 col-md-12 col-lg-6'>
			<label for="artist">Artist</label>
			<input list="artist" name="artist" class="form-control" placeholder="Artist" id="list">
			<datalist id="artist">
				@foreach ($artists as $artist)
					<option value="{{$artist->name}}">
				@endforeach
			</datalist>
		</div>
		<div class='form-group col-sm-12 col-md-6 col-lg-6'>
			{{Form::label('medium', 'Medium')}}
			{{Form::select('medium', array(""=>"" ,'painting' => 'Painting', 'photography' => 'Photography', 'sculpture' => 'Sculpture'), '', ['class' => 'form-control'])}}
		</div>
		<div class='form-group col-sm-12 col-md-6 col-lg-6'>
			{{Form::label('sale', 'Sale items only')}}
			{{Form::checkbox('sale', 'true', ['class' => 'form-control'])}}
		</div>
		<p>If you would like to be notified by email when items matching your criteria are added, please eneter your email below.</p>
		<div class='form-group col-sm-12 col-md-6 col-lg-6'>
			{{Form::label('email', 'Email')}}
			{{ Form::email('email', '' , array('class' => 'form-control')) }}
		</div>
	</div>
	<div class='row'>
		<div>
			{{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
		</div>
	</div>
</div>