<?php


namespace App\Validate\Form;


use Illuminate\Http\Request;

class FormLogin implements FormChecked
{

    public function checked(Request $request)
    {
        $v = $request->validate([
            'email' => 'required',
            'password' => 'required|min:5|max:20'
        ]);
    }
}
