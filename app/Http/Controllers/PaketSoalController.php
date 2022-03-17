<?php

namespace App\Http\Controllers;

use App\Models\PaketSoal;
use Illuminate\Http\Request;

class PaketSoalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paket = PaketSoal::all();
        return view('admin.paket.index', compact('paket'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.paket.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'pilih_paket' => 'required',
        ]);

        $paket = New PaketSoal;
        $paket->pilih_paket = $request->pilih_paket;
        $paket->save();
        return redirect()->route('paket.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PaketSoal  $paketSoal
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PaketSoal  $paketSoal
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PaketSoal  $paketSoal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PaketSoal  $paketSoal
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $paket = PaketSoal::findOrFail($id);
        $paket->delete();
        return redirect()->route('paket.index');
    }
}
