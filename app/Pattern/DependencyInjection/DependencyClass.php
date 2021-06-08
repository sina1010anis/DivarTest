<?php


namespace App\Pattern\DependencyInjection;


class DependencyClass
{
    public $send ;
    public $upload ;

    public function __construct()
    {
        $send  =new sendMessageDependency();
        $upload  =new uploadFileDependency();
        $this->send = $send;
        $this->upload = $upload;
    }

    public function send()
    {
        echo $this->send->sendDiscord();
        echo $this->send->sendFacebook();
        echo $this->send->sendTwitch();
    }
    public function upload()
    {
        echo $this->upload->uploadDiscord();
        echo $this->upload->uploadFacebook();
        echo $this->upload->uploadTwitch();
    }
}
