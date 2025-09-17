<?php

namespace App\Jobs;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class SendEmailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    
    protected $user;

    public function __construct($user)
    {
        $this->user = $user;
    }

    public function handle()
    {
        $users = User::all();
       
        $data = ['data' => 'Hi , Cron Job here'];
        foreach ($users as $user) {
            Mail::send('mail', $data, function ($message) use ($user) {
                $message->to($user->email)->subject('Muhammad Ramzan Jamshaid is sending  an email to you .Please Accept It');
            });
        }
        
    }
}
