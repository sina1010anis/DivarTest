<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        '/Search/News',
        '/View/Address/',
        '/View/Price/',
        '/Select/Filter/News',
        '/New/Pm',
        '/New/News/Lv1',
        '/New/News/Lv3',
        '/New/News/Lv1/Save',
        '/New/News/Lv3/Save',
        '/New/News/Lv4/Save',
        '/New/News/Lv2/Save',

    ];
}
