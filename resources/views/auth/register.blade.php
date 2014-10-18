@extends('templates.master')




@section('content')

	@if ($errors->any())
		
		@foreach($errors->all() as $error)
			<li>{{ $error}}</li>
		@endforeach
		
	@endif

	{!! Form::open() !!}

	<div class="form-group">
		{!! Form::label('email', 'Email: ') !!}
		{!! Form::email('email', null, array('class' => 'form-control')) !!}
	</div>

	<div class="form-group">
		{!! Form::label('password', 'Password: ') !!}

		{!! Form::password('password', array('class'=>'form-control'))	!!}

	</div>


	<div class="form-group">
		{!! Form::label('password_confirmation', 'Confirm: ') !!}

		{!! Form::password('password_confirmation', array('class'=>'form-control')) !!}

	</div>

		{!! Form::submit('create account', array('class'=>'btn btn-success')) !!}
	{!! Form::close() !!}



@stop