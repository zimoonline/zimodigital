@extends('layouts.master')

@section('container')


<div class="container">

            {{ Form::open(array('route' => 'session.store', 'class' =>'form-signin')) }}
            <h2 class="form-signin-heading">Please sign in</h2>

                {{ Form::text('email', null, array('class' => 'form-control', 'placeholder' => 'Email'))}}
                {{ $errors->first('email', '<span class="error">:message</span>') }}

                {{ Form::password('password', array('class' => 'form-control', 'placeholder' => 'Password'))}}
                {{ $errors->first('email', '<span class="error">:message</span>') }}

                {{ Form::submit('Login', ['class' => 'btn btn-lg btn-primary btn-block']) }}


    {{ Form::close() }}
</div> <!-- /container -->



@stop