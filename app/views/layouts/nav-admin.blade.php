<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                {{ HTML::link('/admin/index', 'Main', array('class'=>'navbar-brand')) }}



            </div>

                    <div class="collapse navbar-collapse navbar-left" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li>
                                    <li>{{ link_to_route('posts.create', 'New Post') }}</li>
                                    <li>{{ link_to_route('web.create', 'New Web') }}</li>
                                    <li>{{ link_to_route('users.index', 'Users') }}</li>
                            </li>
                        </ul>

                    </div><!-- /.navbar-collapse -->

                    <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{ HTML::image( '/images/' . 'tn-' . $currentUser->thumbnail) }} {{ $currentUser->ime }} <span class="caret"></span></a>
                              <ul class="dropdown-menu" role="menu">
                                <li>{{ HTML::link('/', 'Main page', array('target' => '_blank')) }}</li>
                                <li>{{ link_to_route('profile_path', 'Profile', $currentUser->ime) }}</li>
                                <li>{{ HTML::link('logout', 'Logout') }}</li>
                              </ul>
                            </li>
                    </ul>


    </div>
        <!-- /.container -->
</nav>


