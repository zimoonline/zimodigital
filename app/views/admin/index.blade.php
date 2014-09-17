@extends('layouts.master')
@include('layouts.nav-admin')

@section('container')
    <div class="col-md-10 col-md-offset-1" >

          <div class="page-header text-muted">
          All posts
          </div>

              @foreach($posts as $post)

              <div class="post">

                <h4>{{ HTML::link('posts/' . $post->slug . '/edit', $post->title ) }} <br/> <span class="small">Posted by: {{ $post->user->ime .' '. $post->user->prezime }} </span>
                    <div class="pull-right">
                        {{--{{ HTML::link('posts/' . $post->slug . '/edit', 'Edit', ['class' => 'btn btn-default']) }}--}}
                        {{ HTML::link('posts/' . $post->slug, 'View', ['class' => 'btn btn-default', 'target' => '_blank']) }}
                        {{ HTML::link('posts/'. $post->slug . '/delete', 'Delete', ['class' => 'btn btn-default']) }}
                    </div>
                    <hr/>
                </h4>

             </div>
              @endforeach

          {{ $posts->links() }}

        </div>

@stop