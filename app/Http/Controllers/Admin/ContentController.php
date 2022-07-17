<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Content;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Str;
use Symfony\Component\Finder\SplFileInfo;

class ContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $files = File::files(join('/', [config('view.paths')[0], config('karrot.content_view_path')]));
        $contentModels = Content::all();
        $contents = array_map(function(SplFileInfo $file) use ($contentModels) {
            $slug = Str::before($file->getFilename(), '.');
            return $contentModels->first(function($c) use ($slug) {
                return $c->slug == $slug;
            }) ?: new Content(['slug' => $slug]);
        }, $files);
        
        
        return view('admin.content.index', compact('contents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  string $slug
     */
    public function edit(string $slug, $params = [])
    {
        if (!view()->exists(join('/', [config('karrot.content_view_path'), $slug])))
            abort(Response::HTTP_NOT_FOUND);
        
        $content = Content::where('slug', $slug)->firstOrNew();
        $content->slug = $slug;
        $params['content'] = $content;
        return view('admin.content.edit', $params);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string $slug
     */
    public function update(Request $request, string $slug)
    {
        $content = Content::where('slug', $slug)->firstOrNew();
        $content->slug = $slug;
        $content->fill($request->all());
        $content->save();

        return redirect()->route('admin.content.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Content  $content
     */
    public function destroy(Content $content)
    {
        //
    }
}
