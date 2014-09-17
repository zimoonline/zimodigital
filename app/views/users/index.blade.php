@extends('layouts.master')

@section('container')

@include('layouts.nav-admin')
            
  
    <div class="col-md-6 col-md-offset-3" >
                
      <div class="page-header text-muted">
      All Users
      </div> 
        
          @foreach($users as $user)
          <div>
            <p>{{ $user->ime .' '.$user->prezime }}</p>

          </div>
          @endforeach
            {{ link_to_route('users.create', 'Add new user', null, ['class' => 'btn btn-default']) }}

    </div>
  

@stop