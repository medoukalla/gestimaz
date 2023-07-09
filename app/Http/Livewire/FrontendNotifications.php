<?php

namespace App\Http\Livewire;

use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class FrontendNotifications extends Component
{


    public function render()
    {
        return view('livewire.frontend-notifications',[
            'notifications' => Auth::user()->unreadNotifications,
            'unread_notifications' => Auth::user()->unreadNotifications->count(),
        ]);
    }


    public function make_as_read( $id ) {
        $notifications = Auth::user()->unreadNotifications;
        foreach ($notifications as $notification) {
            if( $notification->id == $id) {
                $notification->markAsRead();
                return redirect( $notification->data['link'] );
            }
        }
    }
}
