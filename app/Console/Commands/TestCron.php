<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;
use App\Models\User;
use App\Jobs\SendEmailJob;

class TestCron extends Command
{
    protected $signature = 'test:cron';
    protected $description = 'Send test email using cron';

    public function handle()
    {
        $users = User::all();

        foreach ($users as $user) {
            // Har user ke liye job dispatch karo
            SendEmailJob::dispatch($user);
        }
}
}