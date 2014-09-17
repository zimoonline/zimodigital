@extends('layouts.master')

@section('container')
@include('layouts.nav-admin')

<div class="col-md-8 col-md-offset-2" id="contact-form">
	<h1>Create new post</h1>
	{{ Form::open(array('route' => 'posts.store', 'files' => 'true')) }}

		<div class="form-group">
			{{ Form::text('title', null, array('class' => 'form-control', 'placeholder' => 'Title')) }}
			{{ $errors->first('title', '<span class="error">:message</span>'); }}
		</div>

		<div class="form-group">
			{{ Form::file('thumbnail', array('class' => 'button')) }}
			{{ $errors->first('thumbnail', '<span class="error">:message</span>'); }}
		</div>

		<div class="form-group">
			{{ Form::textarea('body', null, array('class' => 'form-control')) }}
			{{ $errors->first('body', '<span class="error">:message</span>'); }}
       </div>

		<div class="form-group">
			{{ Form::submit('Create', ['class' => 'btn btn-primary']) }}
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
