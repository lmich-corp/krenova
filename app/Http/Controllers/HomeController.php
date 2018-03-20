<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Article;
use App\Panduan;
use App\Daftarpemenang;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nav=[
            'active','','','',''
        ];
        return view('content.beranda.index')->with(['navbar'=>$nav]);
    }
    public function artikel()
    {
        $articles = Article::all();
        $nav=[
            '','','','',''
        ];
        return view('content.artikel.index')->with(['navbar'=>$nav,'articles'=>$articles]);
    }
    public function showArtikel($id){
        $article = Article::find($id);
        return view('content.artikel.show')->with('article',$article);
    }
    public function panduan(){
        $nav=[
            '','','','',''
        ];
        $panduans = Panduan::where('status','tampil')->get();
        return view('content.panduan.index')->with(['navbar'=>$nav,'panduans'=>$panduans]);
    }
    public function direktori(){
        $nav=[
            '','','active','',''
        ];
        $locationsPeta=[
            [
                'nama'=>'Semarang',
                'latitude'=>-7.00514500,
                'longitude'=>110.43812500,
            ],
            [
                'nama'=>'Semarang',
                'latitude'=>-7.04472300,
                'longitude'=>110.46195900,
            ],
            
        ];
        return view('content.direktori.index')->with(['locationsPeta'=>$locationsPeta,'navbar'=>$nav]);
    }
    public function polling(){
        $nav=[
            '','','','active',''
        ];
        return view('content.polling.index')->with(['navbar'=>$nav]);
    }
    public function tentang(){
        $nav=[
            '','','','active',''
        ];
        return view('content.tentang.index')->with(['navbar'=>$nav]);
    }
    public function pendaftaran(){
        $nav=[
            '','','','active',''
        ];
        return view('content.pendaftaran.index')->with(['navbar'=>$nav]);
    }
    public function daftarpemenang(){
        $nav=[
            '','','','',''
        ];
        $daftars=Daftarpemenang::where('status','tampil')->get();
        return view('content.daftarpemenang.index')->with(['navbar'=>$nav,'daftars'=>$daftars]);
    }
    public function rekap(){
        $nav=[
            '','','','',''
        ];
        return view('content.rekap.index')->with(['navbar'=>$nav]);
    }
    public function pollingdetail(){
        $nav=[
            '','','','active',''
        ];
        return view('content.polling.detail')->with(['navbar'=>$nav]);
    }
    public function pollingLogin(){
        $nav=[
            '','','','active',''
        ];
        return view('content.polling.login')->with(['navbar'=>$nav]);   
    }
}
