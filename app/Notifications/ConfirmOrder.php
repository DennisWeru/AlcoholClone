<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class ConfirmOrder extends Notification
{
    use Queueable;
    protected $admin;
    protected $cart;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($admin,$cart)
    {
        $this->admin = $admin;
        $this->cart = $cart;
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
        $url = '/view/details/'.$this->cart->uniqid;
        return (new MailMessage)
                    ->greeting('Hello '.$this->admin->name)
                    ->line('An new order has been made. Click the button below to view details.')
                    ->action('View Details', url($url))
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
            //
        ];
    }
}
