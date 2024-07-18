<div class="breadcrumb-area text-center shadow dark-hard bg-cover text-light" style="background-image: url({{ $background ?? asset('assets/img/2440x1578.png')}});">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h1>{{ $title }}</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        {{ $slot }}
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
