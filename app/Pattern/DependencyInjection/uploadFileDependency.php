<?php


namespace App\Pattern\DependencyInjection;


class uploadFileDependency implements UploadInterfaceDependencyInjecion
{

    public function uploadFacebook()
    {
        return 'Ok Upload App Facebook'.'<br>';
    }

    public function uploadTwitch()
    {
        return 'Ok Upload App Twitch'.'<br>';
    }

    public function uploadDiscord()
    {
        return 'Ok Upload App Discord'.'<br>';
    }
}
