<div class="call-to-action-area overflow-hidden default-padding-top bg-gray" style="background-image: url({{ asset('assets/img/shape/24.png') }});">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h5 class="sub-title">Nos partenaires</h5>
                <h2 class="title">Ils nous font confiance</h2>
                <div class="brand">
                    <div class="brand-style-one-carousel swiper">
                        <div class="swiper-wrapper">
                            @foreach($partners as $partner)
                                <div class="swiper-slide">
                                    <div class="justify-content-center">
                                        @if($partner->url)
                                            <a href="{{ $partner->url }}">
                                                <img src="{{ asset('storage/'. $partner->logo) }}" alt="{{ $partner->name }}" height="120px">
                                            </a>
                                        @else
                                            <img src="{{ asset('storage/'. $partner->logo) }}" alt="{{ $partner->name }}" height="120px">
                                        @endif
                                    </div>
                                    <h5 class="sub-title">{{ $partner->name }}</h5>
                                    <p>{{ $partner->overview }}</p>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
