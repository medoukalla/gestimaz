<div wire:poll.10000ms >

    

            <!--begin::Tab panel-->
            <div class="tab-pane fade show active" id="kt_topbar_notifications_3" role="tabpanel">
                <!--begin::Items-->
                <div class="scroll-y mh-325px my-5 px-8">

                    @foreach ( $notifications as $notif)
                    <!--begin::Item-->
                    <div class="d-flex flex-stack py-4"  wire:click="make_as_read('{{ $notif->id }}')" style="cursor: pointer;" >
                        <!--begin::Section-->
                        <div class="d-flex align-items-center me-2">

                            <!--begin::Code-->
                            <a href="#">
                                <span class="w-25px badge badge-light-{{ $notif->data['status'] }} me-4">
                                    @if ( $notif->data['status'] == 'success' )
                                    <i class="fas fa-check"></i>
                                    @elseif ( $notif->data['status'] == 'danger' )
                                    <i class="fas fa-times"></i>
                                    @endif
                                </span>
                            </a>
                            <!--end::Code-->

                            <!--begin::Title-->
                            <a href="#"  class="text-gray-800 text-hover-primary fw-semibold">
                                {{ $notif->data['title'] }}
                            </a>
                            <!--end::Title-->
                        </div>
                        <!--end::Section-->

                        <!--begin::Label-->
                        <span class="badge badge-light fs-8">
                            {{ $notif->created_at->diffForHumans() }}
                        </span>
                        <!--end::Label-->
                    </div>
                    <!--end::Item-->
                    @endforeach


                </div>
                <!--end::Items-->

                <!--begin::View more-->
                <div class="py-3 text-center border-top">
                    <a class="btn btn-color-gray-600 btn-active-color-primary"  href="{{ route('voyager.notifications') }}">
                        Afficher toutes les notifications
                        <i class="ki-outline ki-arrow-right fs-5"></i>
                    </a>
                </div>
                <!--end::View more-->
            </div>
            <!--end::Tab panel-->

        


</div>