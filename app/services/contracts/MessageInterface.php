<?php

namespace App\services\contracts;

interface MessageInterface
{
    public function send(string $message);
}
