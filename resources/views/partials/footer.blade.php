<footer class="bg-dark text-light" style="background-image: url({{ asset('assets/img/shape/8.png') }});">
    <div class="container">
        <div class="f-items default-padding">
            <div class="row">
                <!-- Single Itme -->
                <div class="col-lg-4 col-md-6 item">
                    <div class="footer-item about">
                        <img class="logo" src="{{ asset('storage/'. setting('site.logo-white'))}}" alt="Logo">
                        <p>{{ setting('site.description') }}</p>
                    </div>
                </div>
                <!-- Single Itme -->
                <div class="col-lg-4 col-md-6 item">
                    <div class="footer-item link">
                        <h4 class="widget-title">Explore</h4>
                        <ul>
                            <li><a href="{{ route('home') }}">Accueil</a></li>
                            <li><a href="{{ route('about') }}">À propos</a></li>
                            <li><a href="{{ route('services.index') }}">Services</a></li>
                            <li><a href="{{ route('productions.index') }}">Productions</a></li>
                            <li><a href="{{ route('blogs.index') }}">Blogs</a></li>
                            <li><a href="{{ route('contact') }}">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <!-- Single Itme -->
                <div class="col-lg-4 col-md-6 item">
                    <div class="footer-item contact">
                        <h4 class="widget-title">Contactez-nous</h4>
                        <ul>
                            <li>
                                <div class="icon">
                                    <i class="fas fa-home"></i>
                                </div>
                                <div class="content">
                                    <strong>Adresse:</strong>
                                    <a href="{{ setting('location') }}">{{ setting('contact.address') }}</a>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div class="content">
                                    <strong>Email:</strong>
                                    <a href="mailto:{{ setting('contact.email') }}">{{ setting('contact.email') }}</a>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="fas fa-phone"></i>
                                </div>
                                <div class="content">
                                    <strong>Téléphone:</strong>
                                    <a href="tel:{{ setting('contact.phone') }}">{{ setting('contact.phone') }}</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Start Footer Bottom -->
        <div class="footer-bottom text-center">
            <div class="row">
                <div class="col-lg-12">
                    <p>&copy; Copyright {{ date('Y') }}. Tous les droits sont réservés.
                </div>
            </div>
        </div>
        <!-- End Footer Bottom -->
    </div>
    <div class="shape-right-bottom">
        <img src="{{ asset('assets/img/shape/7.png') }}" alt="{{ setting('site.title') }}">
    </div>
</footer>
