<?php


namespace App\Validate\Form;


use Illuminate\Http\Request;

interface FormChecked
{
    public function checked(Request $request);
}
