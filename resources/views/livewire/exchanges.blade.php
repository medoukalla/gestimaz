<div class="row">

    @foreach ($dataTypeContent as $item)


        <div class="col-xl-4">

            <!--begin::Mixed Widget 1-->
            <div class="card card-xl-stretch mb-xl-8">
                <!--begin::Body-->
                <div class="card-body p-0">
                    <!--begin::Header-->
                    <div
                        class="px-9 pt-7 card-rounded h-200px w-100 @if( $item->status == 'new' ) bg-primary @elseif( $item->status == 'progress' ) bg-warning @elseif( $item->status == 'completed' ) bg-success @elseif( $item->status == 'canceled') bg-danger @endif ">

                        <!--begin::Balance-->
                        <div class="d-flex text-center flex-column text-white pt-2">
                            <span class="fw-semibold fs-7">Numéro d'échange</b></span>
                            <span class="fw-bold fs-2x pt-1">ECH00{{ $item->id }}</span>
                        </div>
                        <!--end::Balance-->
                    </div>
                    <!--end::Header-->

                    <!--begin::Items-->
                    <div class="bg-body shadow-sm card-rounded mx-9 mb-9 px-6 py-9 position-relative z-index-1"
                        style="margin-top: -100px">

                        <!--begin::Item-->
                        <div class="d-flex align-items-center mb-6">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-45px w-40px me-5">
                                <span class="symbol-label bg-lighten">
                                    <i class="fa-solid fa-server" style="color: #ff4a2e;"></i>
                                </span>
                            </div>
                            <!--end::Symbol-->

                            <!--begin::Description-->
                            <div class="d-flex align-items-center flex-wrap w-100">
                                <!--begin::Title-->
                                <div class="mb-1 pe-3 flex-grow-1">
                                    <a href="{{ route('voyager.servers.show', $item->from_server) }}" target="_blanck"
                                        class="fs-5 text-gray-800 text-hover-primary fw-bold">
                                        {{ $item->exchange_from->name }}
                                    </a>
                                    <div class="text-gray-400 fw-semibold fs-7">Serveur à payer</div>
                                </div>
                                <!--end::Title-->

                                <!--begin::Label-->
                                <div class="d-flex align-items-center">
                                    <div class="fw-bold fs-5 text-gray-800 pe-1">${{ $item->exchange_from->price }}</div>

                                    <i class="ki-duotone ki-arrow-up fs-5 text-success ms-1"><span
                                            class="path1"></span><span class="path2"></span></i>
                                </div>
                                <!--end::Label-->
                            </div>
                            <!--end::Description-->
                        </div>
                        <!--end::Item-->


                        <!--begin::Item-->
                        <div class="d-flex align-items-center mb-6">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-45px w-40px me-5">
                                <span class="symbol-label bg-lighten">
                                    <i class="fa-solid fa-server" style="color: #2effc0;"></i>
                                </span>
                            </div>
                            <!--end::Symbol-->

                            <!--begin::Description-->
                            <div class="d-flex align-items-center flex-wrap w-100">
                                <!--begin::Title-->
                                <div class="mb-1 pe-3 flex-grow-1">
                                    <a href="{{ route('voyager.servers.show', $item->to_server) }}" target="_blanck"
                                        class="fs-5 text-gray-800 text-hover-primary fw-bold">{{ $item->exchange_to->name
                                        }}</a>
                                    <div class="text-gray-400 fw-semibold fs-7">Serveur à recevoir</div>
                                </div>
                                <!--end::Title-->

                                <!--begin::Label-->
                                <div class="d-flex align-items-center">
                                    <div class="fw-bold fs-5 text-gray-800 pe-1">${{ $item->exchange_to->price }}</div>

                                    <i class="ki-duotone ki-arrow-down fs-5 text-danger ms-1"><span
                                            class="path1"></span><span class="path2"></span></i>
                                </div>
                                <!--end::Label-->
                            </div>
                            <!--end::Description-->
                        </div>
                        <!--end::Item-->


                        <!--begin::Item-->
                        <div class="d-flex align-items-center mb-6">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-45px w-40px me-5">
                                <span class="symbol-label bg-lighten">
                                    <i class="fa-solid fa-scale-balanced" style="color: #5f4b05;"></i>
                                </span>
                            </div>
                            <!--end::Symbol-->

                            <!--begin::Description-->
                            <div class="d-flex align-items-center flex-wrap w-100">
                                <!--begin::Title-->
                                <div class="mb-1 pe-3 flex-grow-1">
                                    <a href="#" class="fs-5 text-danger text-hover-primary fw-bold">
                                        {{ $item->quantity }} <small>M</small>
                                    </a>
                                    <div class="text-gray-400 fw-semibold fs-7">La Quantité</div>
                                </div>
                                <!--end::Title-->

                                <!--begin::Label-->
                                <div class="d-flex align-items-center">
                                    <div class="fw-bold fs-5 text-success pe-1">
                                        {{ $item->quantity_get }} <small>M</small>
                                    </div>

                                    <i class="ki-duotone ki-arrow-down fs-5 text-danger ms-1"><span
                                            class="path1"></span><span class="path2"></span></i>
                                </div>
                                <!--end::Label-->
                            </div>
                            <!--end::Description-->
                        </div>
                        <!--end::Item-->


                        <div class="d-flex">
                            <button type="button" class="btn btn-light-primary w-100 h-50px" data-bs-toggle="modal"
                                data-bs-target="#exchange_model" wire:click="show_exchange({{ $item->id }})">
                                <i class="fa-solid fa-eye"></i> Afficher tous les détails
                            </button>
                        </div>


                    </div>
                    <!--end::Items-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::Mixed Widget 1-->
        </div>

    @endforeach



    <div wire:ignore.self class="modal fade @if( $changed == true ) show @endif" tabindex="-1" id="exchange_model">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">

    
                <div class="modal-body" >
                    <div class="col-12">

                        <!--begin::Mixed Widget 1-->
                        <div class="card card-xl-stretch mb-xl-8">
                            <!--begin::Body-->
                            <div class="card-body p-0">
                                <!--begin::Header-->
                                <div
                                    class="px-9 pt-7 card-rounded h-200px w-100 @if( $exchange->status == 'new' ) bg-primary @elseif( $exchange->status == 'progress' ) bg-warning @elseif( $exchange->status == 'completed' ) bg-success @elseif( $exchange->status == 'canceled') bg-danger @endif ">
            
                                    <!--begin::Balance-->
                                    <div class="d-flex text-center flex-column text-white pt-2">
                                        <span class="fw-semibold fs-7">Numéro d'échange</span>
                                        <span class="fw-bold fs-2x pt-1">ECH00{{ $exchange->id }}</span>
                                    </div>
                                    <!--end::Balance-->

                                </div>
                                <!--end::Header-->
            
                                <!--begin::Items-->
                                <div class="bg-body shadow-sm card-rounded mx-9 mb-9 px-6 py-9 position-relative z-index-1"
                                    style="margin-top: -100px">


                                    @if ( $exchange->status == 'new' )
                                        <div class="d-flex align-items-center mb-6">
                                            <!--begin::Alert-->
                                            <div class="alert alert-dismissible bg-light-primary border border-primary d-flex flex-column flex-sm-row p-5 mb-10 w-100">
                                                <i class="fa-solid fa-clock-rotate-left fs-2hx text-primary me-4 mb-5 mb-sm-0" style="padding-top: 20px;">
                                                    <span class="path1"></span><span class="path2"></span><span class="path3"></span>
                                                </i>
                                                <div class="d-flex flex-column pe-0 pe-sm-10">
                                                    <h5 class="mb-1">Confirmation!</h5>
                                                    <span>Cet échange est en attente de confirmation ( <b>Accepter</b> ou <b>Annuler</b> )</span>
                                                </div>
                                            </div>
                                        </div>
                                    @elseif ( $exchange->status == 'progress' )
                                        <div class="d-flex align-items-center mb-6">
                                            <!--begin::Alert-->
                                            <div class="alert alert-dismissible bg-light-warning border border-warning d-flex flex-column flex-sm-row p-5 mb-10 w-100">
                                                <i class="fa-solid fa-hourglass-half fs-2hx text-warning me-4 mb-5 mb-sm-0" style="padding-top: 20px;">
                                                    <span class="path1"></span><span class="path2"></span><span class="path3"></span>
                                                </i>
                                                <div class="d-flex flex-column pe-0 pe-sm-10">
                                                    <h5 class="mb-1">En cours</h5>
                                                    <span>Cet échange est accepté et il est en cours</span>
                                                </div>
                                            </div>
                                        </div>
                                    @elseif ( $exchange->status == 'completed' )
                                        <div class="d-flex align-items-center mb-6">
                                            <!--begin::Alert-->
                                            <div class="alert alert-dismissible bg-light-success border border-success d-flex flex-column flex-sm-row p-5 mb-10 w-100">
                                                <i class="fa-regular fa-thumbs-up fs-2hx text-success me-4 mb-5 mb-sm-0" style="padding-top: 20px;">
                                                    <span class="path1"></span><span class="path2"></span><span class="path3"></span>
                                                </i>
                                                <div class="d-flex flex-column pe-0 pe-sm-10">
                                                    <h5 class="mb-1">Completed</h5>
                                                    <span>Cet échange est accepté et complété avec succès.</span>
                                                </div>
                                            </div>
                                        </div>

                                    @elseif ( $exchange->status == 'canceled' )
                                        <div class="d-flex align-items-center mb-6">
                                            <!--begin::Alert-->
                                            <div class="alert alert-dismissible bg-light-danger border border-danger d-flex flex-column flex-sm-row p-5 mb-10 w-100">
                                                <i class="fa-solid fa-rectangle-xmark fs-2hx text-danger me-4 mb-5 mb-sm-0" style="padding-top: 9px;">
                                                    <span class="path1"></span><span class="path2"></span><span class="path3"></span>
                                                </i>
                                                <div class="d-flex flex-column pe-0 pe-sm-10">
                                                    <h5 class="mb-1">Echange Annulé</h5>
                                                    <span>Cet échange est annulé.</span>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                    

                                    <!--begin::Item-->
                                    <div class="d-flex align-items-center mb-6">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-45px w-40px me-5">
                                            <span class="symbol-label bg-lighten">
                                                <i class="fa-solid fa-map" style="color: #ff4a2e;"></i>
                                            </span>
                                        </div>
                                        <!--end::Symbol-->
            
                                        <!--begin::Description-->
                                        <div class="d-flex align-items-center flex-wrap w-100">
                                            <!--begin::Title-->
                                            <div class="mb-1 pe-3 flex-grow-1">
                                                <a href="{{ route('voyager.maps.show', $exchange->exchange_from) }}" target="_blanck" class="fs-5 text-gray-800 text-hover-primary fw-bold">
                                                    {{ $exchange->exchange_from->map->name }}
                                                </a>
                                                <div class="text-gray-400 fw-semibold fs-7">Map du serveur</div>
                                            </div>
                                            <!--end::Title-->
            
                                            <!--begin::Label-->
                                            <div class="d-flex align-items-center">
                                                <div class="fw-bold fs-5 text-gray-800 pe-1"></div>
                                            </div>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Description-->
                                    </div>
                                    <!--end::Item-->


                                    <!--begin::Item-->
                                    <div class="d-flex align-items-center mb-6">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-45px w-40px me-5">
                                            <span class="symbol-label bg-lighten">
                                                <i class="fa-solid fa-server" style="color: #ff4a2e;"></i>
                                            </span>
                                        </div>
                                        <!--end::Symbol-->
            
                                        <!--begin::Description-->
                                        <div class="d-flex align-items-center flex-wrap w-100">
                                            <!--begin::Title-->
                                            <div class="mb-1 pe-3 flex-grow-1">
                                                <a href="{{ route('voyager.servers.show', $exchange->from_server) }}" target="_blanck"
                                                    class="fs-5 text-gray-800 text-hover-primary fw-bold">
                                                    {{ $exchange->exchange_from->name }}
                                                </a>
                                                <div class="text-gray-400 fw-semibold fs-7">Serveur à payer</div>
                                            </div>
                                            <!--end::Title-->
            
                                            <!--begin::Label-->
                                            <div class="d-flex align-items-center">
                                                <div class="fw-bold fs-5 text-gray-800 pe-1">{{ $exchange->quantity }} <small>M</small></div>
                                            </div>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Description-->
                                    </div>
                                    <!--end::Item-->

            
                                    <!--begin::Item-->
                                    <div class="d-flex align-items-center mb-6">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-45px w-40px me-5">
                                            <span class="symbol-label bg-lighten">
                                                <i class="fa-solid fa-id-badge" style="color: #ff4a2e;"></i>
                                            </span>
                                        </div>
                                        <!--end::Symbol-->
            
                                        <!--begin::Description-->
                                        <div class="d-flex align-items-center flex-wrap w-100">
                                            <!--begin::Title-->
                                            <div class="mb-1 pe-3 flex-grow-1">
                                                <a href="#" target="_blanck" class="fs-5 text-gray-800 text-hover-primary fw-bold">
                                                    {{ $exchange->from_name }}
                                                </a>
                                                <div class="text-gray-400 fw-semibold fs-7">Personnage à payer</div>
                                            </div>
                                            <!--end::Title-->
            
                                            <!--begin::Label-->
                                            <div class="d-flex align-items-center">
                                                <div class="fw-bold fs-5 text-gray-800 pe-1"></div>
                                            </div>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Description-->
                                    </div>
                                    <!--end::Item-->

                                    

                                    <!--begin::Item-->
                                    <div class="d-flex align-items-center mb-6">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-45px w-40px me-5">
                                            <span class="symbol-label bg-lighten">
                                                <i class="fa-solid fa-map" style="color: #2effc0;"></i>
                                            </span>
                                        </div>
                                        <!--end::Symbol-->
            
                                        <!--begin::Description-->
                                        <div class="d-flex align-items-center flex-wrap w-100">
                                            <!--begin::Title-->
                                            <div class="mb-1 pe-3 flex-grow-1">
                                                <a href="{{ route('voyager.maps.show', $exchange->exchange_to) }}" target="_blanck" class="fs-5 text-gray-800 text-hover-primary fw-bold">
                                                    {{ $exchange->exchange_to->map->name }}
                                                </a>
                                                <div class="text-gray-400 fw-semibold fs-7">Map du serveur</div>
                                            </div>
                                            <!--end::Title-->
            
                                            <!--begin::Label-->
                                            <div class="d-flex align-items-center">
                                                <div class="fw-bold fs-5 text-gray-800 pe-1"></div>
                                            </div>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Description-->
                                    </div>
                                    <!--end::Item-->
            
                                    <!--begin::Item-->
                                    <div class="d-flex align-items-center mb-6">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-45px w-40px me-5">
                                            <span class="symbol-label bg-lighten">
                                                <i class="fa-solid fa-server" style="color: #2effc0;"></i>
                                            </span>
                                        </div>
                                        <!--end::Symbol-->
            
                                        <!--begin::Description-->
                                        <div class="d-flex align-items-center flex-wrap w-100">
                                            <!--begin::Title-->
                                            <div class="mb-1 pe-3 flex-grow-1">
                                                <a href="{{ route('voyager.servers.show', $exchange->to_server) }}" target="_blanck"
                                                    class="fs-5 text-gray-800 text-hover-primary fw-bold">{{ $exchange->exchange_to->name
                                                    }}</a>
                                                <div class="text-gray-400 fw-semibold fs-7">Serveur à recevoir</div>
                                            </div>
                                            <!--end::Title-->
            
                                            <!--begin::Label-->
                                            <div class="d-flex align-items-center">
                                                <div class="fw-bold fs-5 text-gray-800 pe-1">{{ $exchange->quantity_get }} <small>M</small></div>
                                                
                                            </div>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Description-->
                                    </div>
                                    <!--end::Item-->


                                    <!--begin::Item-->
                                    <div class="d-flex align-items-center mb-6">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-45px w-40px me-5">
                                            <span class="symbol-label bg-lighten">
                                                <i class="fa-solid fa-id-badge" style="color: #2effc0;"></i>
                                            </span>
                                        </div>
                                        <!--end::Symbol-->
            
                                        <!--begin::Description-->
                                        <div class="d-flex align-items-center flex-wrap w-100">
                                            <!--begin::Title-->
                                            <div class="mb-1 pe-3 flex-grow-1">
                                                <a href="#" target="_blanck" class="fs-5 text-gray-800 text-hover-primary fw-bold">
                                                    {{ $exchange->to_name }}
                                                </a>
                                                <div class="text-gray-400 fw-semibold fs-7">Personnage à recevoir</div>
                                            </div>
                                            <!--end::Title-->
            
                                            <!--begin::Label-->
                                            <div class="d-flex align-items-center">
                                                <div class="fw-bold fs-5 text-gray-800 pe-1"></div>
                                            </div>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Description-->
                                    </div>
                                    <!--end::Item-->
            
            
                                    <!--begin::Item-->
                                    <div class="d-flex align-items-center mb-6">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-45px w-40px me-5">
                                            <span class="symbol-label bg-lighten">
                                                <i class="fa-solid fa-scale-balanced" style="color: #5f4b05;"></i>
                                            </span>
                                        </div>
                                        <!--end::Symbol-->
            
                                        <!--begin::Description-->
                                        <div class="d-flex align-items-center flex-wrap w-100">
                                            <!--begin::Title-->
                                            <div class="mb-1 pe-3 flex-grow-1">
                                                <a href="#" class="fs-5 text-danger text-hover-primary fw-bold">
                                                    {{ $exchange->quantity }} <small>M</small>
                                                </a>
                                                <div class="text-gray-400 fw-semibold fs-7">La Quantité</div>
                                            </div>
                                            <!--end::Title-->
            
                                            <!--begin::Label-->
                                            <div class="d-flex align-items-center">
                                                <div class="fw-bold fs-5 text-success pe-1">
                                                    {{ $exchange->quantity_get }} <small>M</small>
                                                </div>
                                            </div>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Description-->
                                    </div>
                                    <!--end::Item-->
            
            
                                    <!--begin::Item-->
                                    <div class="d-flex align-items-center mb-9">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-45px w-40px me-5">
                                            <span class="symbol-label bg-lighten">
                                                <i class="fa-regular fa-circle-user"></i>
                                            </span>
                                        </div>
                                        <!--end::Symbol-->
            
                                        <!--begin::Description-->
                                        <div class="d-flex align-items-center flex-wrap w-100">
                                            <!--begin::Title-->
                                            <div class="mb-1 pe-3 flex-grow-1">
                                                <a href="{{ route('voyager.users.show', $exchange->user_id) }}" target="_blanck"
                                                    class="fs-5 text-gray-800 text-hover-primary fw-bold">{{ $exchange->user->name }}</a>
                                                <div class="text-gray-400 fw-semibold fs-7">Client</div>
                                            </div>
                                            <!--end::Title-->
                                            <!--begin::Label-->
                                            <div class="d-flex align-items-center">
                                                <div class="fw-bold fs-5 pe-1">
                                                    {{ $exchange->user->user_total_exchanges( $exchange->user_id ) }} <small>Échange</small>
                                                </div>
                                            </div>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Description-->
                                    </div>
                                    <!--end::Item-->
            
                                    @if ( $exchange->status == 'new' )
                                        <div class="d-flex">
                                            <button type="button" wire:click="accept_exchange( {{ $exchange->id }} )" class="btn btn-outline btn-outline-dashed btn-outline-success btn-active-light-success w-100 h-50px mb-5" >
                                                <i class="fa-solid fa-check"></i> Accepter cet échange
                                            </button>
                                        </div>

                                        <div class="d-flex">
                                            <button type="button" wire:click="cancel_exchange( {{ $exchange->id }} )" class="btn btn-outline btn-outline-dashed btn-outline-danger btn-active-light-danger w-100 h-50px mb-5">
                                                 <i class="fa-solid fa-times"></i> Annuler cet échange
                                             </button>
                                         </div>
                                    @elseif ( $exchange->status == 'progress' )
                                        <div class="d-flex">
                                            <button type="button" wire:click="finish_exchange( {{ $exchange->id }} )" class="btn btn-outline btn-outline-dashed btn-outline-success btn-active-light-success w-100 h-50px mb-5" >
                                                <i class="fa-regular fa-handshake"></i> Terminer cet échange
                                            </button>
                                        </div>

                                        <div class="d-flex">
                                            <button type="button" wire:click="cancel_exchange( {{ $exchange->id }} )" class="btn btn-outline btn-outline-dashed btn-outline-danger btn-active-light-danger w-100 h-50px mb-5">
                                                <i class="fa-solid fa-times"></i> Annuler cet échange
                                            </button>
                                        </div>

                                    @endif
                                    

                                    
            
            
                                </div>
                                <!--end::Items-->
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Mixed Widget 1-->
                    </div>
                </div>
    
                {{-- <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                </div> --}}
            </div>
        </div>
    </div>

</div>