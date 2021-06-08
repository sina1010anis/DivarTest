<?php


namespace App\Pattern\DependencyInjection;


interface UploadInterfaceDependencyInjecion
{
    public function uploadFacebook();
    public function uploadTwitch();
    public function uploadDiscord();
}
