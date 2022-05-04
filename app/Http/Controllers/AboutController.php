<?php

namespace App\Http\Controllers;

use App\Models\Cert;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about()
    {
        return view('about', [
            'images' => Cert::all(),
        ]);
    }
}
