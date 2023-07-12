<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\HtmlString;

class NewsletterSent extends Notification
{
    use Queueable;
    protected $subscriber;
    protected $newsletter;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($subscriber,$newsletter)
    {
        $this->subscriber = $subscriber;
        $this->newsletter = $newsletter;
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
                    ->greeting('Hello '.$this->subscriber->name)
                    ->line('A newsletter from Terah Wines')
                    ->line(new HtmlString('<h1>'.$this->newsletter->title.'</h1>'))
                    ->line(new HtmlString('<p>'.$this->newsletter->message.'</p>
                    '))

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
