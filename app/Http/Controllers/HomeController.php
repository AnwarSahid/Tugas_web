<?php

namespace App\Http\Controllers;
use App\Models\Danadesa;
use App\Models\Danaswadaya;
use App\Models\Data;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // $danadesa = DB::table('danadesa')->get();
        // $danadesa = Danadesa::latest();
        // $danadesa = Danadesa::where('created_at', 1)->latest();
        // return view ('home',['danadesa'=> $danadesa]);


        $danadesa = DB::select('select total from danadesa ORDER BY id DESC LIMIT 1');
        $danaswadaya = DB::select('select total from danaswadaya ORDER BY iddw DESC LIMIT 1');
        // $data_penduduk = DB::select('select count(*) from data_penduduk');
        $data_penduduk = Data::count();
        return view('home',['danadesa'=>$danadesa, 
                            'danaswadaya'=>$danaswadaya, 
                            'data_penduduk'=>$data_penduduk]);
        
    }
}
