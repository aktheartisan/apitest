<?php

namespace App\Http\Controllers;

use App\Models\form;

use Illuminate\Http\Request;

class api extends Controller
{

    public function home()
    {
        return view('home');
    }

    public function fmst(Request $a)
    {

        $data = $a->only(["name", "age", "fname"]);

        form::create($data);
    }
}
