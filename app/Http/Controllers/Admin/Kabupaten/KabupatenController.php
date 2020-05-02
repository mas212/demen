<?php

namespace App\Http\Controllers\Admin\Kabupaten;

use Redirect;
use Models\Kabupaten;
use Models\Propinsi;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KabupatenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kabupaten      = Kabupaten::all();
        return view('',[
            'kabupaten' => $kabupaten
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $propinsi       = Propinsi::all();
        return view('',[
            'propinsi'  => $propinsi
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kabupaten      = Kabupaten::create($request->all());
        return redirect()->route();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $propinsi   = Propinsi::all();
        $kabupaten  = Kabupaten::findOrFail($id);
        return view('',[
            'propinsi'      => $propinsi,
            'kabupaten'     => $kabupaten
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $kabupaten  = Kabupaten::findOrFail($id);
        $kabupaten->update($request->all());
        return redirect()->route();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kabupaten  = Kabupaten::findOrFail($id);
        $kabupaten->delete();
        return redirect()->route();
    }
}
