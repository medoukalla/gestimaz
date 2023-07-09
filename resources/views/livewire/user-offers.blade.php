<div class="row g-5 g-xl-10 mb-5 mb-xl-10">


    @if ( $offers->count() > 0 )
        

    {{-- Offers List  --}}
    <div class="col-lg-6">

        <!--begin::List widget 23-->
        <div class="card card-flush h-xl-100">
            <!--begin::Header-->
            <div class="card-header pt-7">
                <!--begin::Title-->
                <h3 class="card-title align-items-start flex-column" style=" padding: 0px !important; ">
                    <span class="card-label fw-bold text-gray-800">Vos offres</span>
                </h3>
                <!--end::Title-->
            </div>
            <!--end::Header-->

            <!--begin::Body-->
            <div class="card-body card-scroll h-500px pt-5">
                <!--begin::Items-->
                <div class="">


                    <style>
                        div.offers {
                            cursor: pointer;
                            padding: 10px;
                            border-radius: 25px;
                        }

                        div.offer_complete {
                        }
                    </style>

                    @foreach($offers as $offer)


                        <div wire:click="show_offer('{{ $offer->id }}')"
                            class="d-flex flex-stack offers  @if( $the_offer->id == $offer->id ) fa-fade @endif
                                @if($offer->status == 'paye') bg-light-success offer_complete 
                                @elseif( $offer->status == 'annule' ) bg-light-danger offer_complete 
                                @elseif( $offer->status == 'encourse' ) bg-light-warning offer_complete 
                                @else bg-light-primary 
                                @endif ">

                            <!--begin::Section-->
                            <div class="d-flex align-items-center me-5">
                                <!--begin::Flag-->
                                @if ( is_null( $offer->user->avatar ) )
                                    <img src="{{ asset('app').'/users/default.png' }}" class="me-4 w-30px"
                                        style="border-radius: 4px" alt="">                                    
                                @else
                                    <img src="{{ asset('app').'/'.$offer->user->avatar }}" class="me-4 w-30px"
                                        style="border-radius: 4px" alt="">
                                @endif
                                
                                <!--begin::Content-->
                                <div class="me-5">
                                    <!--begin::Title-->
                                    <a href="{{ route('voyager.users.show', $offer->user) }}"
                                        class="text-gray-800 fw-bold text-hover-primary fs-6">{{
                                        $offer->user->name }}</a>
                                    <!--end::Title-->

                                    <!--begin::Desc-->
                                    <span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">{{
                                        $offer->user->email }}</span>
                                    <!--end::Desc-->
                                </div>
                                <!--end::Content-->
                            </div>
                            <!--end::Section-->

                            <!--begin::Wrapper-->
                            <div class="d-flex align-items-center">

                                <!--begin::Info-->
                                <div class="m-0">
                                    <!--begin::Label-->
                                    <span class="badge badge-light-info fs-base">
                                        <i class="ki-outline ki-arrow-up fs-5  ms-n1"></i>
                                        {{ $offer->quantity }} M
                                    </span>
                                    <!--end::Label-->

                                    <!--begin::Label-->
                                    <span class="badge badge-light-success fs-base">
                                        <i class="ki-outline ki-arrow-up fs-5 text-danger ms-n1"></i>
                                        ${{ $offer->quantity * $offer->server->price }}
                                    </span>
                                    <!--end::Label-->
                                </div>
                                <!--end::Info-->
                            </div>
                            <!--end::Wrapper-->
                        </div>


                        <div class="separator separator-dashed my-3"></div>
                    @endforeach


                </div>
                <!--end::Items-->
            </div>
            <!--end: Card Body-->
        </div>
        <!--end::List widget 23-->
    </div>
    {{-- End Offers List  --}}


    {{-- Middle Icon  --}}
    <div class="col-lg-1" style=" display: flex; justify-content: center; align-items: center; ">
        <i class="fas fa-arrow-right d-none d-lg-block" style="font-size: 60px;"></i>
        <i class="fas fa-arrow-down d-sm-block d-lg-none " style="font-size: 60px;"></i>
    </div>
    {{-- End Middle Icon  --}}


    {{-- Offer info  --}}
    <div class="col-lg-5 ">

        @php
            $offer = $the_offer;
        @endphp

        <!--begin::Chart Widget 33-->
        <div class="card card-flush h-xl-100 p-5"
            @if ( $offer->status == 'annule' ) style="background-color: #f1416c0d;border: 2px solid #F1416C;" 
            @elseif ( $offer->status == 'paye' ) style="background-color: #75cc6847;border: 2px solid #75cc68;"
            @endif
            >
            <!--begin::Header-->
            <div class="card-header pt-5 mb-6">

                <!--begin::Title-->
                <h3 class="card-title align-items-start flex-column">
                    <div class="d-flex align-items-center mb-2">
                        
                        <span class="fs-3 fw-semibold text-gray-400 align-self-start me-1">$</span>                        
                        <span class="fs-2hx fw-bold me-2 text-success lh-1 ls-n2">
                            {{ number_format((float) $offer->quantity * $offer->server->price , 2, '.', '') }} <small> </small>
                        </span>
                        
                    </div>

                    
                </h3>
                <!--end::Title-->

            </div>
            <!--end::Header-->

            <!--begin::Body-->
            <div class="card-body py-0 px-0">

                <div class="tab-content mt-n6">

                    <div class="table-responsive  mt-n6">

                        <table class="table align-middle gs-0 gy-4">
                            <!--begin::Table head-->
                            <thead>
                                <tr>
                                    <th class="min-w-100px"></th>
                                    <th class="min-w-100px text-end pe-0"></th>
                                    <th class="text-end min-w-50px"></th>
                                </tr>
                            </thead>
                            <!--end::Table head-->

                            <!--begin::Table body-->
                            <tbody>

                                <div class="action">

                                    @if ( $offer->status == 'annule' )

                                        <div class="alert alert-danger d-flex align-items-center p-5">

                                            <i class="fa-solid fa-ban fs-2hx text-danger me-4 d-none d-md-block"></i>

                                            <div class="d-flex flex-column">
                                                <span>Cette offre est déjà annulée</span>
                                            </div>

                                        </div>

                                    @elseif ( $offer->status == 'paye' )

                                        <div class="alert alert-success d-flex align-items-center p-5">

                                            <i class="fa-solid fa-check-double fs-2hx text-success me-4 d-none d-md-block"></i>

                                            <div class="d-flex flex-column">
                                                <span>Cette offre déjà complétée</span>
                                            </div>

                                        </div>

                                    @elseif ( $offer->status == 'encourse' )

                                        <div class="alert alert-info d-flex align-items-center p-5">

                                            <i class="fa-solid fa-spinner fa-spin fs-2hx text-info me-4 d-none d-md-block"></i>

                                            <div class="d-flex flex-column">
                                                <span>Cette offre en cours</span>
                                            </div>
                                            
                                        </div>
                                        

                                    @else

                                        <div class="alert alert-warning d-flex align-items-center p-5">

                                            <i class="fa-solid fa-check-double fs-2hx text-warning me-4 d-none d-md-block"></i>

                                            <div class="d-flex flex-column">
                                                <span>En attente que les administrateurs acceptent ou annulent cette commande</span>
                                            </div>

                                        </div>


                                    @endif
                                </div>

                                <tr>
                                    <td class="pe-0">
                                        <span class="text-gray-800 fw-bold fs-6 me-1">
                                            Nom
                                        </span>
                                    </td>
                                    <td class="pe-0 text-end">
                                        <span class="fw-bold fs-6 text-grey-800">
                                            {{ $offer->name }}
                                        </span>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="pe-0">
                                        <span class="text-gray-800 fw-bold fs-6 me-1">
                                            E-mail
                                        </span>
                                    </td>
                                    <td class="pe-0 text-end">
                                        <span class="fw-bold fs-6 text-grey-800">
                                            {{ $offer->email }}
                                        </span>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="pe-0">
                                        <span class="text-gray-800 fw-bold fs-6 me-1">
                                            Discorde
                                        </span>
                                    </td>
                                    <td class="pe-0 text-end">
                                        <span class="fw-bold fs-6 text-grey-800">
                                            {{ $offer->discord }}
                                        </span>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="pe-0">
                                        <span class="text-gray-800 fw-bold fs-6 me-1">
                                            ID de jeu
                                        </span>
                                    </td>
                                    <td class="pe-0 text-end">
                                        <span class="fw-bold fs-6 text-grey-800">
                                            {{ $offer->game_id }}
                                        </span>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="pe-0">
                                        <span class="text-gray-800 fw-bold fs-6 me-1">
                                            Nom du serveur
                                        </span>
                                    </td>
                                    <td class="pe-0 text-end">
                                        <span class="fw-bold fs-6 text-grey-800">
                                            {{ $offer->server->name }}
                                        </span>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="pe-0">
                                        <span class="text-gray-800 fw-bold fs-6 me-1">
                                            Map
                                        </span>
                                    </td>
                                    <td class="pe-0 text-end">
                                        <span class="fw-bold fs-6 text-grey-800">
                                            {{ $offer->server->map_id }}
                                        </span>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="pe-0">
                                        <span class="text-gray-800 fw-bold fs-6 me-1">
                                            Quantité
                                        </span>
                                    </td>
                                    <td class="pe-0 text-end">
                                        <span class="fw-bold fs-6 text-info">
                                            {{ $offer->quantity }} M
                                        </span>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="pe-0">
                                        <span class="text-gray-800 fw-bold fs-6 me-1">
                                            Mode de paiement
                                        </span>
                                    </td>
                                    <td class="pe-0 text-end">
                                        <span class="fw-bold fs-6 text-grey-800">
                                            {{ $offer->payment }}
                                        </span>
                                    </td>
                                </tr>


                                <tr>
                                    <td class="pe-0">
                                        <span class="text-gray-800 fw-bold fs-6 me-1">
                                            {{ $offer->payment }} info
                                        </span>
                                    </td>
                                    <td class="pe-0 text-end">
                                        <span class="fw-bold fs-6 text-grey-800">
                                            {{ $offer->payment_info }}
                                        </span>
                                    </td>
                                </tr>


                                <tr>
                                    <td class="pe-0">
                                        <span class="text-gray-800 fw-bold fs-6 me-1">
                                            Montant à obtenir
                                        </span>
                                    </td>
                                    <td class="pe-0 text-end">
                                        <span class="fw-bold fs-6 text-danger">
                                            ${{ number_format((float) $offer->quantity * $offer->server->price , 2, '.', '') }}  
                                            ( {{ number_format((float) $offer->quantity * $offer->server->price_mad , 2, '.', '') }}   DH)
                                        </span>
                                    </td>
                                </tr>


                                <tr>
                                    <td class="pe-0">
                                        <span class="text-gray-800 fw-bold fs-6 me-1">
                                            Statut de l'offre
                                        </span>
                                    </td>
                                    <td class="pe-0 text-end">
                                        <span class="fw-bold fs-6 @if( $offer->status == 'paye') text-success @elseif( $offer->status == 'annule' ) text-danger @elseif( $offer->status = 'encourse' ) text-primary @endif ">
                                            <b>
                                                @if( $offer->status == 'paye')
                                                    Offre terminée
                                                @elseif( $offer->status == 'encourse')
                                                    Offre en cours
                                                @elseif( $offer->status == 'annule')
                                                    Offre annulée
                                                @else 
                                                    Nouvelle offre
                                                @endif
                                            </b>
                                        </span>
                                    </td>
                                </tr>



                            </tbody>

                            
                            <!--end::Table body-->
                        </table>

                        
                        <!--end::Table-->
                    </div><!--begin::Tap pane-->

                    <!--end::Tap pane-->
                </div>
                <!--end::Tab Content-->
            </div>
            <!--end::Body-->
        </div>
        <!--end::Chart Widget 33-->
    </div>
    {{-- End Offer info  --}}


    @else 

        <div class="alert alert-dismissible bg-light-danger d-flex flex-center flex-column py-10 px-10 px-lg-20 mb-10">
            <button type="button" class="position-absolute top-0 end-0 m-2 btn btn-icon btn-icon-danger" data-bs-dismiss="alert">
                <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
            </button>

            <i class="ki-duotone ki-information-5 fs-5tx text-danger mb-5"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>

            <div class="text-center">
                <h1 class="fw-bold mb-5">Aucune offre!</h1>

                <div class="separator separator-dashed border-danger opacity-25 mb-5"></div>

                <div class="mb-9 text-dark">
                    Vous n'avez pas encore soumis d'offres <strong>le lien ci-dessous</strong>.<br/>
                    pour nous vendre votre jeton. nous sommes heureux de vous servir
                </div>

                <div class="d-flex flex-center flex-wrap">
                    <a href="{{ route('frontend.sell') }}" target="_blanck" class="btn btn-danger">
                        <i class="fa-solid fa-handshake fa-shake fs-4 me-2"></i> Vendre mes jetons</a>
                </div>
            </div>
        </div>


    @endif

</div>  