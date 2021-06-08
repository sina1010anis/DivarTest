<?php


namespace App\Http\Str\PrintJson;


class PrintJson
{
    public function JSON_P(){
        return function ($val){
          echo '<pre>';
          print_r($val);
          echo '</pre>';
        };
    }
}
