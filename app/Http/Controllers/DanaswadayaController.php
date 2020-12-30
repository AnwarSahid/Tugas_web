<?php

namespace App\Http\Controllers;

use App\Models\Danaswadaya;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DanaswadayaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    

        $danaswadaya = DB::table('danaswadaya')->get();
        return view('danaswadaya',['danaswadaya'=> $danaswadaya]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('tambahrincian2');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'tanggal'=> 'required',
            'pemasukan'=> 'required',
            'sumber'=> 'required',
            'pengeluaran'=> 'required',
            'penggunaan'=> 'required',
            'total'=> 'required'
        ]);



        Danaswadaya::create([
            'tanggal' => $request->tanggal,
            'pemasukan' => $request->pemasukan,
            'sumber' => $request->sumber,
            'pengeluaran' => $request->pengeluaran,
            'penggunaan' => $request->penggunaan,
            'total' => $request->total
        ]);

        return redirect('/danaswadaya')->with('status', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Danaswadaya  $danaswadaya
     * @return \Illuminate\Http\Response
     */
    public function show(Danaswadaya $danaswadaya)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Danaswadaya  $danaswadaya
     * @return \Illuminate\Http\Response
     */
    public function edit(Danaswadaya $danaswadaya)
    {
        
    }

    
    public function update(Request $request, Danaswadaya $danaswadaya)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Danaswadaya  $danaswadaya
     * @return \Illuminate\Http\Response
     */
    public function destroy ($danaswadaya)
    {
        Danaswadaya::where('iddw', $danaswadaya)->delete();
        return redirect('danaswadaya')->with('status', "Data berhasil di hapus");

        
    }
}
