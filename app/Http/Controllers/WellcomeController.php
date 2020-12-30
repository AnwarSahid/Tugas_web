<?php

namespace App\Http\Controllers;
use App\Models\Danadesa;
use App\Models\Danaswadaya;
use App\Models\Data;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class WellcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $danadesa = DB::select('select total from danadesa ORDER BY id DESC LIMIT 1');
        $danaswadaya = DB::select('select total from danaswadaya ORDER BY iddw DESC LIMIT 1');
        // $data_penduduk = DB::select('select count(*) from data_penduduk');
        $data_penduduk = Data::count();
        return view('welcome',['danadesa'=>$danadesa, 
                            'danaswadaya'=>$danaswadaya, 
                            'data_penduduk'=>$data_penduduk]);
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
