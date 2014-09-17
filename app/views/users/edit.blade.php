@extends('layouts.master')
@section('container')

@include('layouts.nav-admin')
    <div class="col-md-6 col-md-offset-3" >
    <h1>Your Profile {{ $currentUser->ime }}</h1>

    {{ Form::model($user, array('method' => 'POST', 'route' => array('profile_path', $user->ime))) }}
            <div class="col-md-6">
                <div class="form-group">
                    <div class="picture">
                           {{ HTML::image( '/images/' . $currentUser->thumbnail) }}
                    </div> <br>
                    {{ Form::file('thumbnail', array('class' => 'button')) }}
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    {{ Form::text('ime', null, array('class' => 'form-control', 'placeholder' => 'Ime')) }}
                </div>

                <div class="form-group">
                    {{ Form::text('prezime', null, array('class' => 'form-control', 'placeholder' => 'Prezime')) }}
                </div>

                <div class="form-group">
                        {{ Form::submit('Update', array('class' => 'btn btn-primary')) }}
                </div>
            </div>

     {{ Form::close() }}

    </div>


@stop





