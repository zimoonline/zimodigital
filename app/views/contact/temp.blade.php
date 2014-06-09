@extends('layouts.master')
@section('container')
<div class="col-md-6 col-md-offset-3" id="contact-form">

	<h1>You have succesfully sent message!</h1>
	<p>Thank you for you message. We will contact you back as soon as possible.</p>


	<ul class="list-inline intro-social-buttons">
	   <li>{{ HTML::linkRoute('contact.index', 'Back', array('class'=>'btn btn-default btn-lg network-name')) }}</li>
	</ul>

</div>
@stop