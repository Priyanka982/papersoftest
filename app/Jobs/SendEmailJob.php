<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class SendEmailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $user;
    /**
     * Create a new job instance.
     */
    public function __construct($user)
    {
        $this->user = $user;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $data = $this->user;
        $data = array_merge($data,['subject' => 'Welcome abord']);
        Mail::send('email.registermail', ['data' => $data], function($message) use ($data)    
        {        
            
        $message->to($data['email'], $data['name'])->subject($data['subject']);        
        $message->from('info@demo.com','Priyanka');

        });
        
    }

}
