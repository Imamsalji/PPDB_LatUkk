<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\{Student,school,Mother,Father};

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
        return view('home');
    }
    public function data()
    {
        $datas = Student::paginate(8);
        return view('data.data',compact('datas'));
    }
    public function terima()
    {
        $text = 'diterima';
        $datas = Student::where('keterangan',1)->paginate(8);
        return view('data.data',compact('datas'));
    }
    public function proses()
    {
        $datas = Student::where('keterangan', NULL)->paginate(8);
        return view('data.data',compact('datas'));
    }
    public function tolak()
    {
        $datas = Student::where('keterangan',0)->paginate(8);
        return view('data.data',compact('datas'));
    }
    public function diterima($id)
    {
        Student::whereId($id)->update([
            'keterangan' => 1
            ]);
        return back();
    }
    public function ditolak($id)
    {
        Student::whereId($id)->update([
            'keterangan' => 0
            ]);
        return back();
    }

    
}
