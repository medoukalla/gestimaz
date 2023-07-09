<x-head title="{{ setting('titles.sell') }}" />
<x-header />

<link rel="stylesheet" href="{{ asset('css/vendre-system.css') }}">


<!-- Breadcrumb Area Start -->
<section class="breadcrumb-area bc-tournaments">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h4 class="title">Vendre Kamas</h4>
        <ul class="breadcrumb-list">
          <li>
            <a href="index.html">
              <i class="fas fa-home"></i>
              Home
            </a>
          </li>
          <li>
            <span><i class="fas fa-chevron-right"></i> </span>
          </li>
          <li>
            <a href="tournaments.html">Vendre</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>
<!-- Breadcrumb Area End -->



<!-- Tournaments Area Start -->
<section class="tournaments">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8 col-md-10">
        <div class="section-heading">
          <h5 class="subtitle">Do you want sell kamas?</h5>
          <h2 class="title" style="color: #00b8df">Sell your kamas!</h2>
          <p class="text">
            Lorem ipsum dolor sit, amet consectetur adipisicing elit.
            Blanditiis quia id tenetur minima deleniti molestiae suscipit
            fugit enim rem? Molestias.
          </p>
        </div>
      </div>
    </div>

      @livewire('vendre')

  </div>
</section>
    
<!-- Tournaments Area End -->


<x-footer />