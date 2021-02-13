<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\HtmlString;

class ContactUs extends Notification
{
    use Queueable;
    protected $admin;
    protected $contact;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($admin,$contact)
    {
        $this->admin = $admin;
        $this->contact = $contact;
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
                    ->greeting('Hello '.$this->admin->name)
                    ->line('A message from has just been sent')
                    ->line(new HtmlString('<b>Sender:<i><a href=mailto:'.$this->contact->email.'>'.$this->contact->name.'</a></i></b>
                    '))
                    ->line(new HtmlString('<b>Sender Email:<i><a href=mailto:'.$this->contact->email.'>'.$this->contact->email.'</a></i></b>
                    '))

                    ->line(new HtmlString('<b>Message:<p>'.$this->contact->message.'</p></b>
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
