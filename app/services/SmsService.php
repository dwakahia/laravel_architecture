<?php

namespace App\services;

use App\services\contracts\MessageInterface;
use SomeSmsProvider\Client; //any sms provider of your choice


class SmsService implements MessageInterface
{
    protected $smsProvider;

    public function __construct(Client $smsProvider)
    {
        $this->smsProvider = $smsProvider;
    }

    public function send(string $message)
    {
        return $this->smsProvider->send($message);
    }
}
