<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LatihanController extends Controller
{
    public function showMyname()
    {
        
        $myName = [
            "name" => "relita",
            "age" => "20",
            "address" => "Yogyakarta, Indonesia"
        ];

        return view('latihan.myname', [
            'data' => $myName
        ]);
    }
}
