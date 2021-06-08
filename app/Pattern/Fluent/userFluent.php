<?php


namespace App\Pattern\Fluent;


abstract class userFluent
{
    public $user = [];
    abstract public function setName();
    abstract public function setEmail();
    abstract public function setPassword();

    public function getUser(){
        return $this->user;
    }
}
