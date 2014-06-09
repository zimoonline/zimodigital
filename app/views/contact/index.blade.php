@extends('layouts.master')

@section('container')
@include('layouts.nav')


	<div class="col-md-6 col-md-offset-3" id="contact-form">

	<h1 id="ask">Ask us anything!</h1>

		{{ Form::open(array('route' => 'contact.store')) }}
			<div class="form-group proba">
				{{ Form::text('subject', null, array('class' => 'form-control network-name-form form-control-kockica', 'placeholder' => 'Subject (Required)'))}}
				{{ $errors->first('subject', '<span class="error">:message</span>'); }}
			</div>
			<div class="form-group proba">
				{{ Form::text('email', null, array('class' => 'form-control network-name-form form-control-kockica', 'placeholder' => 'Email (Required)'))}}
				{{ $errors->first('email', '<span class="error">:message</span>'); }}
			</div>
			<div class="form-group proba">
				{{ Form::text('phone', null, array('class' => 'form-control network-name-form form-control-kockica', 'placeholder' => 'Phone number'))}}
				{{ $errors->first('phone'); }}
			</div>
			<div class="form-group proba">
				{{ Form::textarea('poruka', null, array('class' => 'form-control network-name-form form-control-kockica', 'placeholder' => 'Message (Required)'))}}
				{{ $errors->first('poruka', '<span class="error">:message</span>'); }}
			</div>
			<div class="form-group">
				{{ Form::submit('Send', ['class' => 'btn btn-primary gumb']) }}
			</div>

		{{ Form::close() }}

	</div>
<br>

@stop