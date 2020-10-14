<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Messages\NexmoMessage;
use Illuminate\Notifications\Notification;

class ApplicantPostedSuccessfully extends Notification
{
    use Queueable;

    public $message;

    public $name;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($message, $name)
    {
        $this->message = $message;

        $this->name = $name;
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
            ->subject('Posted Successfully')
            ->greeting('Hello '.$this->name.',')
            ->line($this->message);
    }

    // /**
    //  * Send Nexmo notification to applicant
    //  *
    //  * @param mixed $notifiable
    //  * @return Illuminate\Notifications\Messages\NexmoMessage;
    //  */
    // public function toNexmo($notifiable)
    // {
    //     return (new NexmoMessage())
    //         ->content($this->message);
    // }
}
