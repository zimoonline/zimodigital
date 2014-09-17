@extends('layouts.master')
@section('container')

@include('layouts.nav-admin')


    <div class="col-md-6 col-md-offset-3" >

    <h1>New Profile</h1>

    @if($errors->any())
            {{ Flash::error('Fill out all forms including picture') }}
    @endif


    {{ Form::open(['method' => 'POST', 'route' => 'users.store', 'files' => 'true']) }}

             <div class="col-md-6">
                <div class="form-group">
                    {{ Form::file('thumbnail-profile', array('class' => 'button')) }}
                </div>
             </div>
             <div class="col-md-6">
                <!-- Email Form Input -->
                <div class="form-group">
                    {{ Form::text('email', null, array('class' => 'form-control', 'placeholder' => 'Email')) }}
                </div>

                <!-- Password Form Input -->
                <div class="form-group">
                    {{ Form::password('password', array('class' => 'form-control', 'placeholder' => 'Password')) }}
                </div>

                <div class="form-group">
                    {{ Form::text('ime', null, array('class' => 'form-control', 'placeholder' => 'Ime')) }}
                </div>

                <div class="form-group">
                    {{ Form::text('prezime', null, array('class' => 'form-control', 'placeholder' => 'Prezime')) }}
                </div>

                <div class="form-group">
                        {{ Form::submit('Create user', array('class' => 'btn btn-primary')) }}
                </div>
            </div>

     {{ Form::close() }}

    </div>


@stop





