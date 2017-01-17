<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use \App\Product;
use \App\UnitConv;
use DB;

class ProductController extends Controller
{

    public $name = 'product';

    public function index()
    {
    	$data[$this->name] = Product::where('type_id',2)->paginate(20);

    	return view('admin.'.$this->name.'.all')->with($data);
    }
    public function create()
    {	
    	return view('admin.'.$this->name.'.add');
    }
    public function store()
    {
    	$data = new Product;
    	$data->name = Input::get('name');
    	$data->supplier = '';
    	$data->modal = Input::get('modal');
    	$data->images = '';//Input::get('images');
    	$data->units = Input::get('units');
    	$data->description = Input::get('description');
    	$data->type_id = 2;
    	$data->save();

    	return redirect()->route($this->name.'.index');
    }
    public function edit(Product $product)
    {
    	return view('admin.'.$this->name.'.edit')->with($product->toArray());
    }
    public function update(Product $product)
    {
    	$data = $product;
    	$data->name = Input::get('name');
    	$data->supplier = '';
    	$data->modal = Input::get('modal');
    	$data->images = '';//Input::get('images');
    	$data->units = Input::get('units');
    	$data->description = Input::get('description');
    	$data->type_id = 2;
    	$data->save();

    	return redirect()->route($this->name.'.index');
    }
    public function destroy(Product $product)
    {
    	$product->delete();

    	return redirect()->route($this->name.'.index');
    }
}
