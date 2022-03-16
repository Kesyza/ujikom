<?php

namespace App\Http\Controllers;

use App\Models\Soal;
use App\Models\PaketSoal;
use App\Models\MataPelajaran;
use Illuminate\Http\Request;

class SoalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $soall = Soal::with('mapel')->get();
        $soall = Soal::with('paket')->get();
        return view('admin.soal.index', compact('soall'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mapel = MataPelajaran::all();
        $paket = PaketSoal::all();
        return view('admin.soal.create', compact('mapel', 'paket'));
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
            'nama_mapel_id' => 'required',
            'pilih_paket_id' => 'required',
            'soal' => 'required',
            'opsi_A' => 'required',
            'opsi_B' => 'required',
            'opsi_C' => 'required',
            'opsi_D' => 'required',
            'jawaban' => 'required',
            'keterangan' => 'required',
        ]);

        $soall = New Soal;
        $soall->nama_mapel_id = $request->nama_mapel_id;
        $soall->pilih_paket_id = $request->pilih_paket_id;
        $soall->soal = $request->soal;
        $soall->opsi_A = $request->opsi_A;
        $soall->opsi_B = $request->opsi_B;
        $soall->opsi_C = $request->opsi_C;
        $soall->opsi_D = $request->opsi_D;
        $soall->jawaban = $request->jawaban;
        $soall->keterangan = $request->keterangan;
        $soall->save();
        return redirect()->route('soal.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Soal  $soal
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Soal  $soal
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
     * @param  \App\Models\Soal  $soal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Soal  $soal
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $soall = Soal::findOrFail($id);
        $soall->delete();
        return redirect()->route('soal.index');
    }
}
