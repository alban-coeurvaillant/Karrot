<?php

namespace App\Http\Controllers;

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
        $view = "front.{$slug}";
        if (!view()->exists($view))
            abort(Response::HTTP_NOT_FOUND);

        return view($view);
    }


}
