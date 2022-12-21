<?php

namespace App\Notifications;

use Carbon\Carbon;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class OrderPlacedNofication extends Notification implements ShouldQueue
{
    use Queueable;
    public $package;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($package)
    {
        $this->package = $package; 
        $this->delay(Carbon::now()->addSecond(10)); // Delay เผื่อ process
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
                    ->from(env('MAIL_FROM_ADDRESS'),'Admin')
                    ->subject($this->package['title'])
                    ->markdown("mail.template", [ 'package' => $this->package, ]);
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
