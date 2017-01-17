<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use \App\User;

class UserController extends Controller
{

    public $name = 'user';

    public function index()
    {
    	$data[$this->name] = User::where('level',2)->paginate(20);

    	return view('admin.'.$this->name.'.all')->with($data);
    }
    public function destroy(User $user)
    {
    	$user->delete();

    	return redirect()->route($this->name.'.index');
    }
}
