<?php

namespace App;

class Hello
{
    public bool $talk = true;
    
    public function talk(): string
    {
        if ($talk = true) {
            $message = "Hello World !";
        }
        return $message;
    }
}