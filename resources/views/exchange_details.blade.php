<x-head title="{{ setting('titles.exchange') }}" />
<x-header />


<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"
    integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="{{ asset('css/echange-de-kamas.css') }}">



<!-- Breadcrumb Area Start -->
<section class="breadcrumb-area bc-tournaments">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h4 class="title">Exchnager Kamas</h4>
                <ul class="breadcrumb-list">
                    <li>
                        <a href="{{ route('frontend.index') }}">
                            <i class="fas fa-home"></i>
                            Home
                        </a>
                    </li>
                    <li>
                        <span><i class="fas fa-chevron-right"></i> </span>
                    </li>
                    <li>
                        <a href="tournaments.html">Exchanger</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Area End -->



<!-- Exchange system -->
<div class="container exchanger-kamas">
    
<div class="alert alert-dismissible bg-light-danger d-flex flex-center flex-column py-10 px-10 px-lg-20 mb-10">
    <i class="fa-solid fa-skull-crossbones fs-5tx text-danger mb-5 mt-5"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>

    <div class="text-center">
        <h1 class="fw-bold mb-5">ATTENTION AUX FAUX COMPTES !!</h1>
        <h3 class="fw-bold mb-5">Code de votre échange : <b><u>ECH00{{ $exchange->id }}</u></b></h3>

        <div class="separator separator-dashed border-danger opacity-25 mb-5"></div>

        <div class="mb-9 text-dark">
            <b><u>1</u></b> - Connectez-vous sur <strong>{{ $exchange->exchange_from->name }}</strong>, rendez-vous à (4/-19), attendez notre livreur qui va vous contacter avec le code d'échange, livrez-lui <strong>( <u>{{ $exchange->quantity. ' M' }}</u> kama )</strong>. S'il n'est pas sur la MAP, patientez.
        </div>

        <div class="mb-9 text-dark">
            <b><u>2</u></b> - Ensuite, connectez-vous sur <strong>{{ $exchange->exchange_to->name }}</strong>, et attendez le livreur à (5/-17). Il vous remettra <strong>( <u>{{ $exchange->quantity_get. ' M' }}</u> kama )</strong> . S'il n'est pas sur la MAP, patientez.
        </div>  


        <div class="mb-9 text-dark">
            <h5 class="fw-bold mb-5">
                IMPORTANT : Attendez que le livreur vous communique le code de votre échange et vérifiez qu'il est correct avant de valider votre échange sur ( {{ $exchange->exchange_from->name }} ).    
            </h5>
        </div>  

        <div class="d-flex flex-center flex-wrap">
            <a href="{{ route('voyager.myexchanges') }}" class="btn btn-danger m-2">OK j'ai compris</a>
        </div>
    </div>
</div>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
.flex-center {
    justify-content: center;
    align-items: center;
}
.bg-light-danger {
    background-color: #ffeaf0 !important;
}
.mb-10 {
    margin-bottom: 2.5rem !important;
}
.flex-column {
    flex-direction: column !important;
}
.d-flex {
    display: flex !important;
}
.text-gray-700 {
    color: #4b5675 !important;
}
.btn.btn-icon:not(.btn-outline):not(.btn-dashed):not(.border-hover):not(.border-active):not(.btn-flush) {
    border: 0;
}
.btn:not(.btn-shadow):not(.shadow):not(.shadow-sm):not(.shadow-lg):not(.shadow-xs) {
    box-shadow: none;
}

element.style {
}
.btn.btn-icon:not(.btn-outline):not(.btn-dashed):not(.border-hover):not(.border-active):not(.btn-flush) {
    border: 0;
}
.btn:not(.btn-shadow):not(.shadow):not(.shadow-sm):not(.shadow-lg):not(.shadow-xs) {
    box-shadow: none;
}
.btn.btn-icon {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    padding: 0;
    height: calc(1.5em + 1.55rem + 2px);
    width: calc(1.5em + 1.55rem + 2px);
    line-height: 1;
}
.btn {
    --bs-btn-color: #071437;
    outline: none !important;
}
.fs-5tx {
    font-size: 5.75rem !important;
}
.text-dark {
    color: #071437 !important;
}
.text-center {
    text-align: center !important;
}
.fw-bold {
    font-weight: 600 !important;
}
.mb-5 {
    margin-bottom: 1.25rem !important;
}
.mt-5 {
    margin-top: 1.25rem !important;
}
.separator.separator-dashed {
    border-bottom-style: dashed;
    border-bottom-color: #dbdfe9;
}

.separator {
    display: block;
    height: 0;
    border-bottom: 1px solid #dbdfe9;
}
.opacity-25 {
    opacity: 0.25 !important;
}
.mb-5 {
    margin-bottom: 1.25rem !important;
}
.mb-9 {
    margin-bottom: 2.25rem !important;
}
.fw-bold {
    font-weight: 600 !important;
}
.me-1 {
    margin-right: 0.25rem !important;
}
a {
    transition: color 0.2s ease;
}
.btn:not(.btn-shadow):not(.shadow):not(.shadow-sm):not(.shadow-lg):not(.shadow-xs) {
    box-shadow: none;
}
.btn.btn-outline.btn-outline-danger {
    color: var(--bs-danger);
    border-color: var(--bs-danger);
    background-color: transparent;
}


</style>

</div>

<x-footer />
