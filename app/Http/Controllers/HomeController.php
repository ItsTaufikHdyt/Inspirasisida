<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\prosedur;
use Storage;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $prosedur = prosedur::all();
        return view('index',compact('prosedur'));
    }

    public function showMore($id)
    {
        $prosedur = prosedur::find($id);
        return view('user.berita-terbaru.index',compact('prosedur'));
    }

    public function downloadProsedur($id){
        $prosedur = prosedur::find($id);
        return storage::download($prosedur->berkas);
    }
}
