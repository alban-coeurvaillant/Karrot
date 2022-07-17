<?php

namespace App\Http\Controllers;

use App\Models\Content;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class FrontController extends Controller
{
    public function index()
    {
        return view('front.home');
    }

    public function content($slug)
    {
        $view = "front.content.{$slug}";
        if (!view()->exists($view))
            abort(Response::HTTP_NOT_FOUND);

        $content = Content::slug($slug)->firstOrNew();
        return view($view, compact('content'));
    }


}
