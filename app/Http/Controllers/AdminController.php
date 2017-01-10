<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use \App\Farmer;

class AdminController extends Controller
{
    public function farmer_all()
    {
    	$data['farmer'] = Farmer::paginate(20);

    	return view('admin.farmer.all')->with($data);
    }
    public function farmer_add()
    {
    	return view('admin.farmer.add');
    }
    public function farmer_save()
    {
    	$save_farmer = new Farmer;
    	$save_farmer->name = Input::get('name');
    	$save_farmer->address = Input::get('address');
    	$save_farmer->nik = Input::get('nik');
    	$save_farmer->phone = Input::get('phone');
    	$save_farmer->pin = Input::get('pin');
    	$save_farmer->save();

    	return redirect()->route('allFarmer');
    }
    public function farmer_edit($id)
    {
    	$data['farmer'] = Farmer::find($id);

    	return view('admin.farmer.edit')->with($data);
    }
    public function farmer_update()
    {
    	$save_farmer = Farmer::find(Input::get('id'));
    	$save_farmer->name = Input::get('name');
    	$save_farmer->address = Input::get('address');
    	$save_farmer->nik = Input::get('nik');
    	$save_farmer->phone = Input::get('phone');
    	$save_farmer->pin = Input::get('pin');
    	$save_farmer->save();

    	return redirect()->route('allFarmer');
    }
    public function farmer_dalete($id)
    {
    	$farmer = Farmer::find($id);
    	$farmer->delete();

    	return redirect()->route('allFarmer');
    }
}
