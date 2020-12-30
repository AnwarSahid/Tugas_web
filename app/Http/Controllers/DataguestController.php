<?php

namespace App\Http\Controllers;

use App\Models\Dataguest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataguestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_penduduk = DB::table('data_penduduk')->get();
        return view('dataguest',['data_penduduk'=> $data_penduduk]);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dataguest  $dataguest
     * @return \Illuminate\Http\Response
     */
    public function show(Dataguest $dataguest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dataguest  $dataguest
     * @return \Illuminate\Http\Response
     */
    public function edit(Dataguest $dataguest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dataguest  $dataguest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dataguest $dataguest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dataguest  $dataguest
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dataguest $dataguest)
    {
        //
    }
}
