<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Danadesa;
use Illuminate\Support\Facades\DB;

class DanadesaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $danadesa = DB::table('danadesa')->get();
        return view('dana',['danadesa'=> $danadesa]);

        
        

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('tambahrincian1');
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



        Danadesa::create([
            'tanggal' => $request->tanggal,
            'pemasukan' => $request->pemasukan,
            'sumber' => $request->sumber,
            'pengeluaran' => $request->pengeluaran,
            'penggunaan' => $request->penggunaan,
            'total' => $request->total
        ]);

        return redirect('/rekapdana')->with('status', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Danadesa  $danadesa
     * @return \Illuminate\Http\Response
     */
    public function show(Danadesa $danadesa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Danadesa  $danadesa
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $desa = DB::table('danadesa')->get();
        return view('editdana',['danadesa'=> $desa]);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Danadesa  $danadesa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Danadesa $danadesa)
    {
        Danadesa::where('id', $danadesa->id)
            ->update([
                'tanggal' => $request->tanggal,
                'pemasukan' => $request->pemasukan,
                'sumber' => $request->sumber,
                'pengeluaran' => $request->pengeluaran,
                'penggunaan' => $request->penggunaan,
                'total' => $request->total
            ]);
            return redirect('danadesa')->with('success', "Data berhasil diedit");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Danadesa  $danadesa
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Danadesa::where('id', $id)->delete();
        return redirect('rekapdana')->with('status', "Data berhasil di hapus");
    }
}
