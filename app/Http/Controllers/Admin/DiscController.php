<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Disc;
use Illuminate\Http\Request;

class DiscController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $discs = Disc::orderByDesc('id')->get();
        return view('admin.disc.index', compact('discs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        return $this->edit(new Disc(), ['method' => 'post', 'action' =>route('admin.disc.store')]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function store(Request $request)
    {
        return $this->update($request, new Disc());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Disc  $disc
     */
    public function edit(Disc $disc, $params = [])
    {
        if ($disc->exists)
            $params = ['method' => 'put', 'action' => route('admin.disc.update', $disc)];
        $params['disc'] = $disc;
        return view('admin.disc.edit', $params);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Disc  $disc
     */
    public function update(Request $request, Disc $disc)
    {
        $this->validate($request, [
            'title' => 'required',
        ]);

        $disc->fill($request->all());
        $disc->save();

        return redirect()->route('admin.disc.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Disc  $disc
     */
    public function destroy(Disc $disc)
    {
        $disc->delete();
        return redirect()->route('admin.disc.index');
    }
}
