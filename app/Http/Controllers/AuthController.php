<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me(){
        return ([
            '3103113120',
            'Muhammad Hendra Bima Saputra',
            'Laki-laki',
            '+62 896-1918-4743',
            'XII RPL 4'
        ]);
    }
}
