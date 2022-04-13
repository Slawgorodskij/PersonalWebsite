<?php

namespace App\Http\Controllers;

use App\Models\Sample;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function portfolio()
    {
        return view('portfolio', [
            'samples'=>Sample::orderBy('title')->paginate(10),
        ]);
    }
}
