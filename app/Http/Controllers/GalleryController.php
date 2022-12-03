<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    const NB_ITEMS_PAGE = 20;
    
    public function __construct()
    {
        $this->middleware('gallery');
    }

    public function index()
    {
        $images = Image::orderBy('id', 'desc')->paginate(self::NB_ITEMS_PAGE);
        return view('front.gallery.index', compact('images'));
    }
}
