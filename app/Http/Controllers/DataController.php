<?php

namespace App\Http\Controllers;

use App\Models\Data;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Data::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('tambahpenduduk');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $databaru =new Data;
        // $databaru->email = $request->email;
        // $databaru->nik = $request->nik  ;
        // $databaru->tanggal_lahir = $request->tanggal_lahir;
        // $databaru->jenis_kelamin = $request->jenis_kelamin;


        $request->validate([
            'nama'=> 'required',
            'nik'=> 'required|size:16',
            'tanggal_lahir'=> 'required',
            'email'=> 'required',
            'jenis_kelamin'=> 'required'
        ]);



        Data::create([
            'nama' => $request->nama,
            'nik' => $request->nik,
            'tanggal_lahir' => $request->tanggal_lahir,
            'email' => $request->email,
            'jenis_kelamin' => $request->jenis_kelamin
        ]);

        return redirect('/create')->with('status', 'Data Penduduk Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Data  $data
     * @return \Illuminate\Http\Response
     */
    public function show(Data $data)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Data  $data
     * @return \Illuminate\Http\Response
     */
    public function edit(Data $data)
    {
        return view('editdata', ['data_penduduk'=> $data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Data  $data
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Data $data)
    {
        // $data = DB::table('data_penduduk');
        Data::where('id', $data->id)
            ->update([
                'nama' => $request->nama,
                'nik' => $request->nik,
                'tanggal_lahir' => $request->tanggal_lahir,
                'email' => $request->email,
                'jenis_kelamin' => $request->jenis_kelamin
            ]);
            return redirect('datapenduduk')->with('success', "Data berhasil diedit");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Data  $data
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // return $data;
        // Data::destroy($data->id);
        // return redirect('/data')->with('status', 'Data Penduduk Berhasil Dihapus');
        Data::where('id', $id)->delete();
        return redirect('datapenduduk')->with('success', "Data berhasil di hapus");
    }
}
