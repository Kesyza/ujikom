<?php

namespace App\Http\Controllers;

use App\Models\Soal;
use App\Models\Ujian;
use Illuminate\Http\Request;

class UjianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ujian = Ujian::with('soall')->get();
        return view('admin.ujian.index', compact('ujian'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $soall = Soal::all();
        return view('admin.ujian.create', compact('soall'));
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
            'soal_id' => 'required',
            'waktu' => 'required',
            'jumlah_soal' => 'required',
            'nilai' => 'required',
            'status' => 'required',
        ]);

        $ujian = New Ujian;
        $ujian->soal_id = $request->soal_id;
        $ujian->waktu = $request->waktu;
        $ujian->jumlah_soal = $request->jumlah_soal;
        $ujian->nilai = $request->nilai;
        $ujian->status = $request->status;
        $ujian->save();
        return redirect()->route('ujian.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ujian  $ujian
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ujian  $ujian
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
     * @param  \App\Models\Ujian  $ujian
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ujian  $ujian
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ujian = Ujian::findOrFail($id);
        $ujian->delete();
        return redirect()->route('ujian.index');
    }
}
