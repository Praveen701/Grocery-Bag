<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Grocery;

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
        $data = Grocery::select('name','quantity','date','status','id');
        if($request->date){
            $data->where('date','=',$request->date);
        }
        $data=$data->paginate(20);
        return view('home',['data'=>$data]);
    }
}
