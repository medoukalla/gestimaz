<div wire:poll.5000ms >
    <div class="notofication tm-dropdown">
        <i class="fas fa-bell"></i>
        <span class="count">{{ $unread_notifications }}</span>
        <div class="tm-dropdown-menu">
            <ul class="list">
                @if ( $unread_notifications == 0 )
                    <li>
                        <a href="javascript:;" >
                            <i class="fas fa-bell"></i>
                            Vous n'avez aucune nouvelle notification pour le moment.
                        </a>
                    </li>
                @else
                
                    @foreach ($notifications as $key => $notif)
                        @if ( $key < 5)    
                            <li>
                                <a wire:click="make_as_read('{{ $notif->id }}')" style="cursor: pointer;" >
                                    <i class="fas fa-bell"></i>
                                    {{ $notif->data['title'] }}
                                </a>
                            </li>
                        @endif
                    @endforeach
                @endif
            </ul>
        </div>
    </div>

</div>
