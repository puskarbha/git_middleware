<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    public function index(Request $request)
    {
        //$request->session()->put(['Edwin'=>'master instructor']);
//        //Or can be done as
//        session(['bhim'=>'guide']);
//        return session('bhim');
       // return view('home');
       // $request->session()->forget('Edwin');//delete session with thlis key
//        $request->session()->flush();;

   // print_r($request->session()->all());

        //$request->session()->flash('message','Post has been created');;
        return $request->session()->get('message');

    }
}
