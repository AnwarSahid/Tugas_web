<?php

namespace App\Http\Controllers;

use App\Models\Danaduest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class DanaguestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $danadesa = DB::table('danadesa')->get();
        return view('danaguest',['danadesa'=> $danadesa]);
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
     * @param  \App\Models\Danaduest  $danaduest
     * @return \Illuminate\Http\Response
     */
    public function show(Danaduest $danaduest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Danaduest  $danaduest
     * @return \Illuminate\Http\Response
     */
    public function edit(Danaduest $danaduest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Danaduest  $danaduest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Danaduest $danaduest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Danaduest  $danaduest
     * @return \Illuminate\Http\Response
     */
    public function destroy(Danaduest $danaduest)
    {
        //
    }
}
