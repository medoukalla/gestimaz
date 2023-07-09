<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class orderCanceled extends Notification
{
    use Queueable;


    public $user;
    public $order;
    public $serverName;
    public $currency = '$';

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct( $order )
    {
        $this->order = $order;
        $this->user  = $order->user;

        $this->serverName = $order->server->name;

        // set currency
        if ( $order->payment->name == 'cih' ) {
            $this->currency = 'MAD';
        }
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail', 'database'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                ->subject('Commande annulée')
                ->markdown('mail.orderCancelled', [
                    'username'   => $this->user->name,
                    'useremail' => $this->user->email,
                    'reference'   => "KX".$this->order->id,
                    'date'  => $this->order->created_at,
                    'servername' => $this->serverName,
                    'mod_payment' => $this->order->payment->name,
                    'quantity'  => $this->order->quantity * 1000000 + $this->order->bonus,
                    'total' => $this->order->total,
                    'currency' => $this->currency
                ]);
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            'status' => 'danger',
            'title'  => 'Commande annulée',
            'link'   => route('frontend.servers')
        ];
    }
}
