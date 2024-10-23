<?php

namespace App\Notifications;
use App\Student;
use App\User;
use App\Admin;
use Auth;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class TaskCompleted2 extends Notification
{
    use Queueable;
     
   public $admin;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    // public function __construct(User $user)
    // {
    //     $this->user = $user;
    // }
    public function __construct()
    {
        // $this->user = $user;
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
    // public function toMail($notifiable)
    // {
    //     return (new MailMessage)
    //                 ->line('The introduction to the notification.')
    //                 ->action('Notification Action', url('/'))
    //                 ->line('Thank you for using our application!');
    // }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    { 
        $id = Student::latest()->first()->id;
        $students = Student::findorfail($id);
        $aname = Auth::user()->name;
        return [
            'data' => '2nd Installment of '.$students->firstname.'(' .$students->roll. ') paid by '.$aname 
        ];
    }
}
