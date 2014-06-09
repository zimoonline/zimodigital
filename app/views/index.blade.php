@extends('layouts.master')

@section('container')

@include('layouts.nav')

    <div class="intro-header">

        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-message">
                        {{ HTML::image('img/zimo_logo.png',null, array('class' => 'logo'))}}
                        <h3>Place for your digital success</h3>
                        <hr class="intro-divider">
                        <ul class="list-inline intro-social-buttons">
                            <!-- <li><a href="https://twitter.com/SBootstrap" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
                            </li> -->
                            <li>{{ HTML::link('/contact', 'Contact us', array('class'=>'button-contact button-contact-big')) }}

                           <!--  <a href="#" class="btn btn-default btn-lg"><i class="fa fa-thumbs-o-up"></i> <span class="network-name">Contact us</span></a> -->
                            </li>
                            <!-- <li><a href="#" class="btn btn-default btn-lg"><i class="fa fa-linkedin fa-fw"></i> <span class="network-name">Linkedin</span></a> -->
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.intro-header -->

    <div class="content-section-a">

        <div class="container">

            <div class="row">
                <div class="col-lg-5 col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">Web Development:</h2>
                    <p class="lead">If you want to be recognizable, you have to have a modern, simple and beautiful web page, like this one. It's your window to the world, so you better be good at this. Guess what? We can help you with that!</p>
                    <ul class="list-inline intro-social-buttons">
                        <li>{{ HTML::link('/web', 'More info', array('class'=>'button-contact')) }}</li>
                    </ul>
                </div>
                <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                    <img class="img-responsive" src="img/golf.png" alt="">
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-a -->

    <div class="content-section-b">

        <div class="container">

            <div class="row">
                <div class="col-lg-5 col-lg-offset-1 col-sm-push-6  col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">Content Marketing</h2>                    
                    <p class="lead">In this cluttered world you have to stand up somehow. Google Ads? Maybe, but we prefered writing stories about your business, because people love to read about you and your work. If you have a good story, chances are that you will become more recognizable. So why don't you try?</p>
                     <ul class="list-inline intro-social-buttons">
                        <li>{{ HTML::link('/contact', 'Contact us', array('class'=>'button-contact')) }}</li>
                    </ul>
                </div>
                <div class="col-lg-5 col-sm-pull-6  col-sm-6">
                    <img class="img-responsive" src="img/content.jpg" alt="">
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-b -->

    <div class="content-section-b">

        <div class="container">

            <div class="row">

            <div class="col-lg-12">
                <h1 class="page-header">We did work with</h1>
            </div>
            <div class="col-lg-3 col-md-4">
                <a class="thumbnail" href="#">
                    <img class="img-responsive" src="img/tele2.png">
                </a>
            </div>
            <div class="col-lg-3 col-md-4">
                <a class="thumbnail" href="#">
                    <img class="img-responsive" src="img/erste.png">
                </a>
            </div>
            <div class="col-lg-3 col-md-4">
                <a class="thumbnail" href="#">
                    <img class="img-responsive" src="img/pepsi.png">
                </a>
            </div>
            <div class="col-lg-3 col-md-4">
                <a class="thumbnail" href="#">
                    <img class="img-responsive" src="img/vipnet_logo.png">
                </a>
            </div>
             <div class="col-lg-3 col-md-4">
                <a class="thumbnail" href="#">
                    <img class="img-responsive" src="img/golflogo.png">
                </a>
            </div>
             <div class="col-lg-3 col-md-4">
                <a class="thumbnail" href="#">
                    <img class="img-responsive" src="img/podravka.png">
                </a>
            </div>
            <div class="col-lg-3 col-md-4">
                <a class="thumbnail" href="#">
                    <img class="img-responsive" src="img/franck.png">
                </a>
            </div>
            <div class="col-lg-3 col-md-4">
                <a class="thumbnail" href="#">
                    <img class="img-responsive" src="img/iskon.png">
                </a>
            </div>
            <div class="col-lg-3 col-md-4">
                <a class="thumbnail" href="#">
                    <img class="img-responsive" src="img/dicaprio.png">
                </a>
            </div>
            <div class="col-lg-3 col-md-4">
                <a class="thumbnail" href="#">
                    <img class="img-responsive" src="img/marodi.png">
                </a>
            </div>
            <div class="col-lg-3 col-md-4">
                <a class="thumbnail" href="#">
                    <img class="img-responsive" src="img/parni.png">
                </a>
            </div>
            <div class="col-lg-3 col-md-4">
                <a class="thumbnail" href="#">
                    <img class="img-responsive" src="img/schiedel.png">
                </a>
            </div>

            
        </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-a -->




    <div class="banner">

        <div class="container">

            <div class="row">
                <div class="col-lg-6">
                    <h2>Let's be friends!</h2>
                </div>
                <div class="col-lg-6">
                    <ul class="list-inline banner-social-buttons">
                        <li><a href="https://facebook.com/zimodigital" target="_blank" class="button-contact button-contact-social"><i class="fa fa-facebook fa-fw"></i> <span class="network-name">Facebook</span></a>
                        </li>
                        <li><a href="https://twitter.com/zimodigital" target="_blank"class="button-contact button-contact-social"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
                        </li>
                        <li><a href="http://www.linkedin.com/company/zimo-digital" target="_blank" class="button-contact button-contact-social"><i class="fa fa-linkedin fa-fw"></i> <span class="network-name">Linkedin</span></a>
                        </li>
                    </ul>
                </div>

            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.banner -->

@stop

