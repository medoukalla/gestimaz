<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class orderFinished extends Notification
{
    use Queueable;


    public $user;
    public $order;
    public $serverName;
    public $status;
    public $currency = '$';

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct( $order )
    {
        $this->user = $order->user;
        $this->order = $order;
        $this->serverName = $order->server->name;
        $this->status = "Commande terminée";

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
                ->subject('Commande terminée')
                ->markdown('mail.orderFinished', [
                    'username'   => $this->user->name,
                    'useremail' => $this->user->email,
                    'reference'   => 'KX'.$this->order->id,
                    'date'  => $this->order->created_at,
                    'servername' => $this->serverName,
                    'mod_payment' => $this->order->payment->name,
                    'quantity'  => $this->order->quantity * 1000000 + $this->order->bonus,
                    'total' => $this->order->total,
                    'currency' => $this->currency,
                    'status' => $this->status,
                    'orders_route' => route('frontend.order.details', $this->order),
                    'new_order' => route('frontend.servers')
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
            'status' => 'success',
            'title'  => 'Commande terminée',
            'link'   => route('frontend.order.details', $this->order )
        ];
    }
}
