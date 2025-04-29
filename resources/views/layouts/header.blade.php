    <header class="site-header header-two">
    <nav class="navbar navbar-expand-lg navbar-light header-navigation stricky">
        <div class="container clearfix">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="logo-box clearfix">
                <a class="navbar-brand" href="{{route('home')}}">
                    <img src="{{asset('logo.png')}}" alt="Awesome Image" style="width: 13%;"/>
                </a>

                <button class="menu-toggler" data-target="#main-nav-bar">
                    <span class="fa fa-bars"></span>
                </button>
            </div><!-- /.logo-box -->

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="main-navigation" id="main-nav-bar">
                <ul class=" navigation-box">
                    <li class=" current">
                        <a href="{{route('home')}}">Home</a>
                    </li>
                    <li>
                        <a href="{{route('about')}}">About</a>
                    </li>
                    <li>
                        <a href="">Our Services</a>
                        <ul class="sub-menu">
                            <li><a href="{{ route('services') }}">Electricals & Electronics</a></li>
                            <li><a href="{{ route('service2') }}">Engineering</a></li>
                            <li><a href="{{ route('service3') }}">Motor Rewinding</a></li>
                        </ul><!-- /.sub-menu -->
                    </li>
                    {{-- <li>
                        <a href="{{route('our_clients')}}">Our Clients</a>
                    </li> --}}
                    <li><a href="{{route('contact')}}">Contact</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>


</header><!-- /.site-header -->
