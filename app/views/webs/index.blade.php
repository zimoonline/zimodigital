@extends('layouts.master')

@section('container')

@include('layouts.nav-admin')
<div class="container">

           <div class="row">
             <div class="page-header text-muted">
                Some of our projects
            </div>

               @foreach($webs as $web)

               <div class="featurette" id="thumbs">
                   <img class="img-responsive img-responsive-web {{ $web->thumbpos ? 'pull-right' : 'pull-left' }}" src="{{ asset('/images/' . 'webs-' . $web->webthumbnail) }}">
                   <h2 class="featurette-heading">{{ $web->title}}:
<!--                       <span class="text-muted">Golf Park Dubrovnik</span>-->
                   </h2>
                   <p class="lead">{{ strip_tags($web->body)}}</p>

                   <p>Visit <strong>{{ HTML::link($web->link, 'this link', array('target' => 'blank')) }}</strong> for more info..</p>
                       @if(Auth::check())

                            {{ link_to_route('web.edit', 'Ažuriraj', $web->id, ['class' => 'btn btn-primary']) }}
                       @endif
               </div>

               <hr class="featurette-divider">

               @endforeach


        <ul class="list-inline intro-social-buttons">
            <li>{{ HTML::link('/contact', 'Contact us', array('class'=>'button-contact button-contact-big-webpage')) }}</li>
        </ul>


    </div>

    <script>
        $(document).ready(function() {
            $('#thumbs').on('change', function() {
                $('.img-responsive').removeClass('pull-left').addClass('pull-right');
            });
        });
    </script>

@stop