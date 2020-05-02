<?php

namespace App\Http\Controllers\Propinsi;

use Redirect;
use App\Models\Propinsi;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PropinsiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $propinsi       = Propinsi::sort()->get();
        return('',[
            'propinsi'  => $propinsi
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama'      => ['required']
        ]);

        $propinsi       = Propinsi::create($request->all());
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
        $propinsi           = Propinsi::findOrFail($id);
        return view('',[
            'propinsi'      => $propinsi
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
        $this->validate($request, [
            'nama'      => ['required']
        ]);

        $propinsi           = Propinsi::findOrFail($id);
        $propinsi->update($request->all());
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
        $propinsi           = Propinsi::findOrFail($id);
        $propinsi->delete();
        return redirect()->back();
    }
}
