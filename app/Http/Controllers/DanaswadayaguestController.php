<?php

namespace App\Http\Controllers;

use App\Models\Danaswadayaguest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DanaswadayaguestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $danaswadaya = DB::table('danaswadaya')->get();
        return view('swadayaguest',['danaswadaya'=> $danaswadaya]);
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
     * @param  \App\Models\Danaswadayaguest  $danaswadayaguest
     * @return \Illuminate\Http\Response
     */
    public function show(Danaswadayaguest $danaswadayaguest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Danaswadayaguest  $danaswadayaguest
     * @return \Illuminate\Http\Response
     */
    public function edit(Danaswadayaguest $danaswadayaguest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Danaswadayaguest  $danaswadayaguest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Danaswadayaguest $danaswadayaguest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Danaswadayaguest  $danaswadayaguest
     * @return \Illuminate\Http\Response
     */
    public function destroy(Danaswadayaguest $danaswadayaguest)
    {
        //
    }
}
