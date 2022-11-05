<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Image;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function __construct()
    {
        $this->middleware('gallery');
    }
    
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $images = Image::all();
        return view('admin.gallery.index', compact('images'));
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        return $this->edit(new Image(), ['method' => 'post', 'action' =>route('admin.gallery.store')]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function store(Request $request)
    {
        return $this->update($request, new Image());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Image  $image
     */
    public function edit(Image $image, $params = [])
    {
        if ($image->exists)
            $params = ['method' => 'put', 'action' => route('admin.gallery.update', $image)];
        $params['image'] = $image;
        return view('admin.gallery.edit', $params);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Image  $image
     */
    public function update(Request $request, Image $image)
    {
        $this->validate($request, [
            'file' => 'required|image',
        ]);

        $image->fill($request->all());
        $image->save();

        return redirect()->route('admin.gallery.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Image  $image
     */
    public function destroy(Image $image)
    {
        $image->delete();
        return redirect()->route('admin.gallery.index');
    }
}
