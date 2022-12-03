<?php

namespace App\Http\Controllers;

use App\Models\Disc;
use Illuminate\Http\Request;

class DiscController extends Controller
{
    const NB_ITEMS_PAGE = 20;
    
    public function index()
    {
        $discs = Disc::orderBy('id', 'desc')->paginate(self::NB_ITEMS_PAGE);
        return view('front.disc.index', compact('discs'));
    }
}
