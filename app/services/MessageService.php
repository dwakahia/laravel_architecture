<?php

namespace App\services;

use Illuminate\Support\Str;

class MessageService
{
    public function sendMessage($service, $message)
    {
        $messageService = Str::studly($service.'_service');
        if(class_exists($messageService))
            return app()->make($messageService)->send($message);
    }
}
