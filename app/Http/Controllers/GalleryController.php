<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function __construct()
    {
        $this->middleware('gallery');
    }

    public function index()
    {
        $images = Image::orderBy('id', 'desc')->get();
        return view('front.gallery.index', compact('images'));
    }
}
