@extends('layouts.master')

@section('container')

@include('layouts.nav')
            
  
    <div class="col-md-6 col-md-offset-3" >
                
      <div class="page-header text-muted">
      Blog Posts
      </div> 
        
          @foreach($posts as $post)
          <div class="post">
            <h2 id="naslov">{{ HTML::link("posts/" . $post->slug, $post->title) }}</h2>

            <p>{{ Str::limit("$post->body", 200, '...')}}</p>
          <!-- <small class="text-muted">{{ HTML::link("posts/$post->id", 'Read more') }}<a href="#" class="text-muted"></a></small> -->
          </div>
          @endforeach
      
      {{ $posts->links() }}

    </div>
  

@stop