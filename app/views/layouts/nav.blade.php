<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                {{ HTML::link('/', 'Home', array('class'=>'navbar-brand')) }}


                
            </div>

                @if(Auth::check())

                    <div class="collapse navbar-collapse navbar-left" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">New <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li>{{ link_to_route('posts.create', 'New Post') }}</li>
                                    <li>{{ link_to_route('web.create', 'New Web') }}</li>
                                </ul>
                            </li>
                        </ul>

                    </div><!-- /.navbar-collapse -->
                    <ul class="nav navbar-nav navbar-right">
                        <li>{{ HTML::link('logout', 'Logout') }}</li>
                    </ul>
                @endif

            @if(Auth::guest())
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-right navbar-ex1-collapse">
                    <ul class="nav navbar-nav">
                        <li>{{ HTML::link('/about', 'About')}}
                        </li>
                        <li>{{ HTML::linkRoute('posts.index', 'Blog') }}
                        </li>
                        <li>{{ HTML::link('contact', 'Contact')}}
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            @endif
    </div>
        <!-- /.container -->
</nav>


    