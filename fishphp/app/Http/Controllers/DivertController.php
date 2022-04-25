<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DivertController extends Controller
{
    //
    public function divert()
    {
        return view(view:'auth/divert');
    }
}
