<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\MyProduct;
use \App\Farmer;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $data['store'] = MyProduct::with(['product'])->where('harvest_status','panen')->orderBy('id','desc')->get();
        $data['petani'] = Farmer::with(['user'])->get();
        return view('guest.store')->with($data);
    }
    public function farmer($phone)
    {
        $data['farmer'] = Farmer::with(['user'])->where('phone',$phone)->first();
        $data['product'] = MyProduct::with('product')->where('id_farmer',$data['farmer']->user->id)->get();
        return view('guest.farmer')->with($data);
    }
}
