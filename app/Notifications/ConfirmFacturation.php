<?php

namespace App\Notifications;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class ConfirmFacturation extends Notification
{
    use Queueable;


    // code
    public $code;
    public $order;
    public $user;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($code, $order)
    {
        $this->code  = $code;
        $this->order = $order;
        $this->user  = User::where('id', $order->user_id)->first();
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
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
            ->subject('Confirmer vos informations de facturation')
            ->markdown('mail.ConfirmFacturationNotification', [
                'user_email' =>  $this->user->email,
                'code' => $this->code]
            );
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
            //
        ];
    }
}
