<div class="about-style-one-area default-padding overflow-hidden">
    <div class="container">
        <div class="row align-center">
            <div class="col-xl-6 col-lg-5">
                <div class="about-style-one-thumb">
                    <img src="{{ asset('storage/'. $about->image) }}" alt="{{ $about->title }}">
                    @if($about->shape)
                        <div class="animation-shape">
                            <img src="{{ asset('storage/'. $about->shape) }}" alt="{{ $about->title }}">
                        </div>
                    @endif
                </div>
            </div>
            <div class="col-xl-5 offset-xl-1 col-lg-6 offset-lg-1">
                <div class="about-style-one-info">
                    <h2 class="title">{{ $about->title }}</h2>
                    {!! $about->content !!}
                    <ul class="top-feature">
                        <li>
                            <div class="icon">
                                <img src="{{ asset('storage/'. $about->feature1_icon) }}" alt="{{ $about->title }}">
                            </div>
                            <div class="info">
                                <h4>{{ $about->feature1_title }}</h4>
                                <p>{{ $about->feature1_content }}</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <img src="{{ asset('storage/'. $about->feature2_icon) }}" alt="{{ $about->title }}">
                            </div>
                            <div class="info">
                                <h4>{{ $about->feature2_title }}</h4>
                                <p>{{ $about->feature2_content }}</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
