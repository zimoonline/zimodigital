@extends('layouts.master')

@section('container')
@include('layouts.nav-admin')
<div class="col-md-8 col-md-offset-2" id="contact-form">

<h1>Update post</h1>

	{{ Form::model($post, array('method' => 'PATCH', 'route' => array('posts.update', $post->slug))) }}

		<div class="form-group">
			{{ Form::text('title', null, array('class' => 'form-control', 'placeholder' => 'Title')) }}
		</div>

		<div class="form-group">
			{{ Form::file('thumbnail', array('class' => 'button')) }}
			<div class="picture">
			{{ HTML::image( '/images/' . 'tn-' . $post->thumbnail) }}

		</div>

		<div class="form-group">
			{{ Form::textarea('body', null, array('class' => 'form-control summernote')) }}
       </div>

		<div class="form-group">
			{{ Form::submit('Update', array('class' => 'btn btn-primary')) }}
			{{--{{ link_to(URL::previous(), 'View Post', ['class' => 'btn btn-default']) }}--}}
			{{ HTML::link('posts/' . $post->slug, 'View Post', ['class' => 'btn btn-default', 'target', '_blank']) }}
		</div>


	{{ Form::close() }}
</div>

{{ HTML::script('js/tinymce.min.js') }}
<script type="text/javascript">
    tinymce.init({
        selector: "textarea",
        plugins: [
            "advlist autolink lists link image charmap print preview anchor",
            "searchreplace visualblocks code fullscreen",
            "insertdatetime media table contextmenu paste"
        ],
        toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
        file_browser_callback : elFinderBrowser
    });
    function elFinderBrowser (field_name, url, type, win) {
        tinymce.activeEditor.windowManager.open({
            file: '/elfinder/elfinder.html',// use an absolute path!
            title: 'elFinder 2.0',
            width: 900,
            height: 450,
            resizable: 'yes',
            fontsize_formats: "14pt"
        }, {
            setUrl: function (url) {
                win.document.getElementById(field_name).value = url;
            }
        });
        return false;
    }
</script>
@stop