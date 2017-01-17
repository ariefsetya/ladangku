<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use \App\User;

class AdminController extends Controller
{

    public $name = 'admin';

    public function dashboard()
    {
        return view('admin.admin.dashboard');
    }

    public function index()
    {
    	$data[$this->name] = User::where('level',1)->paginate(20);

    	return view('admin.'.$this->name.'.all')->with($data);
    }
    public function create()
    {
    	return view('admin.'.$this->name.'.add');
    }
    public function store()
    {
    	$save = new User;
    	$save->name = Input::get('name');
    	$save->email = Input::get('email');
    	$save->password = Input::get('password');
    	$save->level = 1;
    	$save->save();

    	return redirect()->route($this->name.'.index');
    }
    public function edit(User $admin)
    {
    	return view('admin.'.$this->name.'.edit')->with($admin->toArray());
    }
    public function update(User $admin)
    {
    	$update = $admin;
        $update->name = Input::get('name');
        $update->email = Input::get('email');
        $update->password = Input::get('password');
        $update->level = 1;
    	$update->save();

    	return redirect()->route($this->name.'.index');
    }
    public function destroy(User $admin)
    {
    	$admin->delete();

    	return redirect()->route($this->name.'.index');
    }
}
