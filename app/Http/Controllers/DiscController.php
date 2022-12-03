<?php

namespace App\Http\Controllers;

use App\Models\Disc;
use Illuminate\Http\Request;

class DiscController extends Controller
{
    public function index()
    {
        $discs = Disc::orderBy('id', 'desc')->get();
        return view('front.disc.index', compact('discs'));
    }
}
