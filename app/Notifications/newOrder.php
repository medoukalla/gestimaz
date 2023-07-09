<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class newOrder extends Notification
{
    use Queueable;


    public $order;
    public $user;
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
        $this->order = $order;
        $this->user = $order->user;
        $this->serverName = $order->server->name;

        $this->status = 'Vérification du paiement';

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
        return ['database'];
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
                    ->line('The introduction to the notification.')
                    ->action('Notification Action', url('/'))
                    ->line('Thank you for using our application!');
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
            'title'  => 'Nouveau command',
            'link'   => route('voyager.orders.index'),
        ];
    }
}
