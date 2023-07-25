<!-- feature start -->
<section class="feature-area process-area gray-bg pt-120 pb-90">
    <div class="container">
        <div class="row">

            @foreach ( $projects as $project )
                
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="feature-single mb-30">
                        <div class="feature-thumb">
                            <img src="{{ asset('app').'/'.$project->image }}" alt="image_not_found">
                        </div>
                        <div class="feature-text">
                            <h2>{{ $project->title }}</h2>
                            <p>{{ $project->description }}.</p>
                        </div>
                    </div>
                </div>

            @endforeach

            
        </div>
        <div class="row">
            <div class="col-12">
                {{ $projects->links() }}
            </div>
        </div>
    </div>
</section>
<!-- feature end -->