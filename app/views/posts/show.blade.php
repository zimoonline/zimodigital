@extends('layouts.master')
@section('meta', $post->title)
@section('meta_img', asset('images/tn-' .$post->thumbnail))
@section('container')
    @include('layouts.nav')

    <img class="thumb-photo" style="background:url({{ asset('images/tn-'.$post->thumbnail) }}) no-repeat center; background-size: 100%;" />

        <div class="col-md-6 col-md-offset-3" >

                <h1>{{ $post->title }}</h1>
                <p>{{ $post->body }}</p>
                 <p>
                    <a class="btn btn-default center-block col-md-6" target="_blank" href="{{ Share::load(Request::url())->facebook() }}">
                        <i class="fa fa-thumbs-o-up fa-lg fb"> Share on Facebook</i>
                    </a>
                </p>
                <p>
                    <a class="btn btn-default center-block col-md-6" target="_blank" href="{{ Share::load(Request::url(), $post->title)->twitter() }}">
                        <i class="fa fa-twitter fa-lg"> Share on Twitter</i>
                    </a>
                </p>
                <br><br>
        </div>
        <div class="footer-track">
            {{ HTML::link('/contact', 'CONTACT US!') }}
        </div>
@stop





