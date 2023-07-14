<!-- page title area start -->
<section class="page-title-area pt-160 pb-160" data-overlay="8" data-background="{{ asset('img/page-title-bg.jpg') }}">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="page-title text-center">
                    <div class="border-title">
                        <h1>{{ $title }}</h1>
                    </div>
                    <h1>{{ $title }}</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item">
                                <a href="{{ route('frontend.index') }}">Page d'accueil</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">{{ $title }}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- page title area end -->