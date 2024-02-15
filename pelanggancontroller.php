<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelanggan;

class pelanggancontroller extends Controller
{
    public function index(Request $request){
        $keyword = $request->keyword;
        $pelanggan = Pelanggan::where('pelangganID','LIKE', '%'.$keyword.'%')->paginate(5);
        return view('pelanggan.index', compact('pelanggan'));
    }

    public function add(){
        return view('pelanggan.add');
    }

    public function store(Request $request){
        Pelanggan::create($request->except(['_token', 'submit']));
        return redirect('/pelanggan');
    }

    public function edit($pelangganID){
        $pelanggan = Pelanggan::where('pelangganID',$pelangganID)->first();
        return view('pelanggan.edit', compact('pelanggan'));
    }

    public function update(Request $request,$pelangganID){
        $pelanggan = Pelanggan::where('pelangganID',$pelangganID);
        $pelanggan->update($request->except('_token', 'submit','_method'));
        return redirect('/pelanggan');
    }

    public function delete($pelangganID){
        Pelanggan::where('pelangganID', $pelangganID)->delete();
        return redirect('/pelanggan');
    }
}

