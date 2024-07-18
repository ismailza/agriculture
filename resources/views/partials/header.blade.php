<div class="top-bar-area top-bar-style-one bg-dark text-light">
    <div class="container">
        <div class="row align-center">
            <div class="col-lg-8">
                <ul class="item-flex">
                    <li>
                        <i class="fas fa-clock"></i> {{ setting('contact.opening_hours') }}
                    </li>
                    <li>
                        <a href="tel:{{ setting('contact.phone') }}"><i class="fas fa-phone-alt"></i> {{ setting('contact.phone') }}</a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-4 text-end">
                <div class="social">
                    <ul>
                        @if(setting('social-links.facebook_url'))
                        <li><a href="{{ setting('social-links.facebook_url') }}"><i class="fab fa-facebook-f"></i></a></li>
                        @endif
                        @if(setting('social-links.instagram_url'))
                        <li><a href="{{ setting('social-links.instagram_url') }}"><i class="fab fa-twitter"></i></a></li>
                        @endif
                        @if(setting('social-links.linkedin_url'))
                        <li><a href="{{ setting('social-links.linkedin_url') }}"><i class="fab fa-linkedin-in"></i></a></li>
                        @endif
                        @if(setting('social-links.youtube_url'))
                        <li><a href="{{ setting('social-links.youtube_url') }}"><i class="fab fa-youtube"></i></a></li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<header>
    <!-- Start Navigation -->
    <nav class="navbar mobile-sidenav inc-shape navbar-sticky navbar-default validnavs dark">
        <div class="container d-flex justify-content-between align-items-center">
            <div class="navbar-brand-left">
                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="/">
                        <img src="{{ asset('assets/img/logo-mix.png') }}" class="logo" alt="Logo">
                    </a>
                </div>
                <!-- End Header Navigation -->
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-menu">

                <img src="{{ asset('storage/'. setting('site.logo')) }}" alt="Logo">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                    <i class="fa fa-times"></i>
                </button>

                <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                    <li>
                        <a href="{{ route('home') }}" class="dropdown-toggle" data-toggle="dropdown" >Accueil</a>
                    </li>
                    <li>
                        <a href="{{ route('about') }}" class="dropdown-toggle" data-toggle="dropdown" >À propos</a>
                    </li>
                    <li>
                        <a href="{{ route('services.index') }}" class="dropdown-toggle" data-toggle="dropdown" >Services</a>
                    </li>
                    <li>
                        <a href="{{ route('productions.index') }}" class="dropdown-toggle" data-toggle="dropdown" >Productions</a>
                    </li>
                    <li>
                        <a href="{{ route('blogs.index') }}" class="dropdown-toggle" data-toggle="dropdown" >Blogs</a>
                    </li>
                    <li>
                        <a href="{{ route('contact') }}" class="dropdown-toggle" data-toggle="dropdown" >Contact</a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
            <!-- Main Nav -->
        </div>
        <!-- Overlay screen for menu -->
        <div class="overlay-screen"></div>
        <!-- End Overlay screen for menu -->
    </nav>
    <!-- End Navigation -->
</header>
