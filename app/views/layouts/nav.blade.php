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



                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-right navbar-ex1-collapse">
                    <ul class="nav navbar-nav">
                        <li>{{ HTML::link('/about', 'About')}}
                        </li>
                        <li>{{ HTML::link('/posts', 'Blog') }}
                        </li>
                        <li>{{ HTML::link('contact', 'Contact')}}
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
    </div>
        <!-- /.container -->
</nav>


    