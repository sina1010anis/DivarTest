<?php


namespace App\Pattern\Fluent;


class ClassFluent extends userFluent
{
    public $name;
    public $email;
    public $pass;

    public function __construct($name , $email , $pass)
    {
        $this->name = $name;
        $this->email = $email;
        $this->pass = $pass;
    }

    public function setName()
    {
        $this->user['user'] = $this->name;
        return $this;
    }
    public function setEmail()
    {
        $this->user['email'] = $this->email;
        return $this;
    }
    public function setPassword()
    {
        $this->user['pass'] = $this->pass;
        return $this;
    }
}
