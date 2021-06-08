<?php


namespace App\Pattern\DependencyInjection;


class sendMessageDependency implements SendInterfaceDependencyInjecion
{

    public function sendFacebook()
    {
        return 'Ok Send App FaceBook'.'<br>';
    }

    public function sendTwitch()
    {
        return 'Ok Send App Twitch'.'<br>';
    }

    public function sendDiscord()
    {
        return 'Ok Send App Discord'.'<br>';
    }
}
