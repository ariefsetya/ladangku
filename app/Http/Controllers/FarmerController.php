<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use \App\Farmer;
use \App\User;

class FarmerController extends Controller
{

    public $name = 'farmer';

    public function dashboard()
    {
        return view('admin.farmer.dashboard');
    }
    public function index()
    {
    	$data[$this->name] = Farmer::paginate(20);

    	return view('admin.'.$this->name.'.all')->with($data);
    }
    public function create()
    {
    	return view('admin.'.$this->name.'.add');
    }
    public function store()
    {
    	$save = new Farmer;
    	$save->name = Input::get('name');
    	$save->address = Input::get('address');
    	$save->nik = Input::get('nik');
    	$save->phone = Input::get('phone');
        $save->pin = Input::get('pin');
    	$save->user_id = 0;
    	$save->save();

        $user = new User;
        $user->email = $save->phone."@".$save->pin;
        $user->password = $save->pin;
        $user->name = $save->name;
        $user->level = 3;
        $user->save();

        $save->user_id = $user->id;
        $save->save();

    	return redirect()->route($this->name.'.index');
    }
    public function edit(Farmer $farmer)
    {
    	return view('admin.'.$this->name.'.edit')->with($farmer->toArray());
    }
    public function update(Farmer $farmer)
    {
    	$update = $farmer;
    	$update->name = Input::get('name');
    	$update->address = Input::get('address');
    	$update->nik = Input::get('nik');
    	$update->phone = Input::get('phone');
    	$update->pin = Input::get('pin');
    	$update->save();

        $user = User::find($update->user_id);
        $user->email = $save->phone."@".$save->pin;
        $user->password = $save->pin;
        $user->name = $save->name;
        $user->level = 3;
        $user->save();

    	return redirect()->route($this->name.'.index');
    }
    public function destroy(Farmer $farmer)
    {
    	$farmer->delete();

    	return redirect()->route($this->name.'.index');
    }
}
