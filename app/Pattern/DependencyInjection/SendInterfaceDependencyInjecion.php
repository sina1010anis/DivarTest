<?php


namespace App\Pattern\DependencyInjection;


interface SendInterfaceDependencyInjecion
{
    public function sendFacebook();
    public function sendTwitch();
    public function sendDiscord();
}
