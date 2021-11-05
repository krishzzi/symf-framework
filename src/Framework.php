<?php

namespace Aloraytech\Framework;

class Framework
{

    private string $text="";

    public function __construct()
    {
        $this->text = "Welcome in Tinkle Framework";
    }

    public function get()
    {
        return $this->text;
    }


}