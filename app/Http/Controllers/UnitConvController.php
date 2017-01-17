<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use \App\UnitConv;

class UnitConvController extends Controller
{

    public $name = 'unitconv';

    public function index()
    {
    	$data[$this->name] = UnitConv::paginate(20);

    	return view('admin.'.$this->name.'.all')->with($data);
    }
    public function create()
    {	
    	return view('admin.'.$this->name.'.add');
    }
    public function store()
    {
    	$data = new UnitConv;
    	$data->from_unit = Input::get('from_unit');
    	$data->to_unit = Input::get('to_unit');
    	$data->from_amount = Input::get('from_amount');
    	$data->to_amount = Input::get('to_amount');
    	$data->save();

    	return redirect()->route($this->name.'.index');
    }
    public function edit(UnitConv $unitconv)
    {
    	return view('admin.'.$this->name.'.edit')->with($unitconv->toArray());
    }
    public function update(UnitConv $unitconv)
    {
    	$data = $unitconv;
    	$data->from_unit = Input::get('from_unit');
    	$data->to_unit = Input::get('to_unit');
    	$data->from_amount = Input::get('from_amount');
    	$data->to_amount = Input::get('to_amount');
    	$data->save();

    	return redirect()->route($this->name.'.index');
    }
    public function destroy(UnitConv $unitconv)
    {
    	$unitconv->delete();

    	return redirect()->route($this->name.'.index');
    }
}
