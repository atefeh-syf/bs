<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Addvertise;

class addvertisesController extends Controller
{
    //
    public function index()
    {
        $addvertises = Addvertise::all();
        return view('welcome')->with(('addvertises'), $addvertises)->limit(1)->get();;
    }

    public function create()
    {
        return view('submitAdd');
    }

    public function store(Request $request)
    {
        $data = request()->validate([
           'name' => 'required',
           'title' => 'required',
           'description' => 'required',
           'phone' => 'required',
        ]);
        //dd($data.'<br>');
        user()->addvertises()->create([
            'name' =>$data['name'],
            'title' =>$data['title'],
            ]);
        //return redirect('/');

        //$addvertises = Addvertise::create($request->all());
        //dd($request->all());
    }
}
