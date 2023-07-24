@php
    $projects = \App\Models\Project::get_projects();
@endphp
<!-- project start -->
<section class="project-area pos-rel pt-120 pb-120">
    <div class="container-fluid">
        <div class="section-title text-center mb-100">
            <div class="border-title">
                <h1>Projects</h1>
            </div>
            <h5>Nos projets</h5>
            <h2>PROJET QUE NOUS COMPLETONS<span>.</span></h2>
        </div>
        <div class="project-active owl-carousel">

            @foreach ( $projects as $project )
                <div class="single-project">
                    <div class="project-thumb">
                        <img src="{{ asset('app').'/'.$project->image }}" alt="image_not_found">
                    </div>
                    <div class="project-text">
                        <div class="project-tag">
                            <h4><a href="#">{{ $project->title }}</a></h4>
                        </div>
                        <div class="project-text-box">
                            <p>{{ $project->description }}</p>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</section>
<!-- project end -->