<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Grocery;

class GroceryController extends Controller
{
    //
    public function add()
    {
        return view('Grocery/add');
    }
    public function store(Request $request)
    {
        $validate = Validator::make($request->all(),[
            'name' => 'required|max:255',
            'quantity' => 'required',
            'status' => 'required',
            'date' => 'required',
            
        ]);
        if ($validate->fails()) {
            return back()->withInput()->withErrors($validate);
        }

        $data = new Grocery;
        $data->name = $request->name;
        $data->quantity = $request->quantity;
        $data->status =$request->status;
        $data->date = $request->date;
        $data->save();
        $request->session()->flash('status', 'Added Succesfully');
        return redirect('/home');

    }
    public function edit($id)
    {
        $data = Grocery::find($id);
        return view('Grocery/edit',['data'=>$data]);
    }
    public function update(Request $request,$id)
    {
        $validate = Validator::make($request->all(),[
            'name' => 'required|max:255',
            'quantity' => 'required',
            'status' => 'required',
            'date' => 'required',
        ]);
        if ($validate->fails()) {
            return back()->withInput()->withErrors($validate);
        }

        $data=Grocery::find($request->id);
        $data->name = $request->name;
        $data->quantity = $request->quantity;
        $data->status =$request->status;
        $data->date = $request->date;
        $data->save();

     return redirect('/home')->with('updated','Successfull Updated');
       
    }
    public function destroy($id)
    {
        $data = Grocery::find($id);
        if($data){
            $data->delete();
        }
        return redirect('home');
    }
}
