<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Balita;
use Illuminate\Http\Request;

class BalitaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $balita = Balita::get();
        return view('admin.balita.index', compact('balita'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $balita = Balita::create([
            'user_id' => $request->user_id,
            'nama_balita' => $request->nama_balita,
            'tl_balita' => $request->tl_balita,
            'jk' => $request->jk,
            'nama_ibu' => $request->nama_ibu,
            'nama_ayah' => $request->nama_ayah,
            'panjang_badan' => $request->panjang_badan,
            'berat_lahir' => $request->berat_lahir,
            'lingkar_kepala' => $request->lingkar_kepala
        ]);
        // dd($balita);
        return redirect()->back()->with('status', 'success')->with('balita', $balita);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Balita  $Balita
     * @return \Illuminate\Http\Response
     */
    public function show(Balita $Balita)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Balita  $Balita
     * @return \Illuminate\Http\Response
     */
    public function edit(Balita $Balita)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Balita  $Balita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Balita $Balita)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Balita  $Balita
     * @return \Illuminate\Http\Response
     */
    public function destroy(Balita $Balita)
    {
        $balita = Balita::findOrFail($Balita);
        $balita->delete();
        return redirect()->route('admin.balita')->with('success', 'Data berhasil dihapus!');
    }
}
