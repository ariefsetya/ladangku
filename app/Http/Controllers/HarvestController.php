<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Product;
use \App\MyProduct;
use \App\MaterialProduct;
use \App\ProductSold;
use Auth;

class HarvestController extends Controller
{

	public $name = 'harvest';

    public function myproduct()
    {
    	$data[$this->name] = MyProduct::with(['product'])->where('id_farmer',Auth::user()->id)->paginate(20);

    	return view($this->name.'.my-product')->with($data);
    }

    public function startplant()
    {
    	$data['product'] = Product::where('type_id',2)->get();
    	
    	return view($this->name.'.start-plant')->with($data);
    }
    public function nextstartplant(Request $r)
    {
    	$a = new MyProduct;
    	$a->id_farmer = Auth::user()->id;
    	$a->id_product = $r->input('id_product');
    	$a->plant_date = date_format(date_create($r->input('start_plant')),"Y-m-d");
    	$a->harvest_date_predict = date_format(date_create($r->input('harvest_date_predict')),"Y-m-d");
    	$a->modal = 0;
    	$a->price_per_units = 0;
    	$a->price_per_units = 0;
    	$a->harvest_date = null;
    	$a->harvest_status = 'masa penanaman';
    	$a->harvest_amount = 0;
    	$a->units = '';
    	$a->save();

    	return redirect()->route('harvest.select-material',[$a->id]);
    }

    public function selectmaterial($harvest)
    {
    	$data['harvest'] = MyProduct::find($harvest);
    	$data['material'] = Product::where('type_id',1)->get();

    	return view($this->name.'.select-material')->with($data);

    }

    public function nextselectmaterial(Request $r,$id)
    {
    	$total = 0;
    	for($i=0;$i<sizeof($r->input('id_material'));$i++) {
    		$total+=($r->input('total')[$i]!=""?$r->input('total')[$i]:0);

    		$s = new MaterialProduct;
    		$s->id_harvest = $id;
    		$s->id_product = $r->input('id_material')[$i];
    		$s->amount = $r->input('amount')[$i];
    		$s->units = $r->input('units')[$i];
    		$s->modal = $r->input('total')[$i];
    		$s->save();
    	}
    	
    	$x = MyProduct::find($id);
    	$x->modal = $total;
    	$x->save();

    	return redirect()->route('harvest.review-plant',[$id]);

    }
    public function reviewplant($id)
    {
    	
    	$data['harvest'] = MyProduct::with(['product'])->find($id);
    	$data['material'] = MaterialProduct::with(['product'])->where('id_harvest',$id)->get();

    	return view($this->name.'.review-plant')->with($data);
    }
    public function cancelplant($id)
    {
    	MaterialProduct::where('id_harvest',$id)->delete();
    	MyProduct::find($id)->delete();

    	$data['message'] = "Data telah dihapus.";
    	return view($this->name.'.next-review-plant')->with($data);
    }

    public function nextreviewplant($id)
    {
    	$data['harvest'] = MyProduct::find($id);
    	$data['message'] = "Data berhasil diinput. Selamat bertani.";
    	return view($this->name.'.next-review-plant')->with($data);
    }
    public function harvest()
    {
    	$data[$this->name] = MyProduct::with(['product'])->where('id_farmer',Auth::user()->id)->where('harvest_status','masa penanaman')->paginate(20);

    	return view($this->name.'.harvest')->with($data);
    }
    public function startharvest($id)
    {
    	$data['harvest'] = MyProduct::with(['product'])->find($id);
    	return view($this->name.'.next-harvest')->with($data);
    }
    public function submitharvest(Request $r,$id)
    {
    	$x = MyProduct::find($id);
    	if($r->input('harvest_status')=="panen"){
    		$x->price_per_units = $r->input('price_per_units');
    		$x->harvest_amount = $r->input('harvest_amount');
    		$x->units = $r->input('units');
    	}
    	$x->harvest_status = $r->input('harvest_status');
    	$x->harvest_date = date_format(date_create($r->input('harvest_date')),"Y-m-d");
    	$x->save();


    	return redirect()->route('harvest.my-product');
    }
    public function sellharvest()
    {
        $data['harvest'] = MyProduct::with(['product'])->where('id_farmer',Auth::user()->id)->where('harvest_status','panen')->orderBy('id','desc')->get();

        return view($this->name.'.sell-harvest')->with($data);
    }
    public function sellharvestid($id)
    {
        $data['harvest'] = MyProduct::with(['product'])->find($id);

        return view($this->name.'.sell-harvest-id')->with($data);
    }
    public function nextsellharvestid(Request $r,$id)
    {
        $d = MyProduct::find($id);
        $modal = $d->modal;
        // echo $modal;
        $per_units = $modal/$d->harvest_amount;
        // echo $per_units;

        $profit_satuan = $r->price_per_units-$per_units;
        // echo $profit_satuan;
        $profit = $profit_satuan*$r->input('amount');
        // echo $profit;
        // die();
        $s = new ProductSold;
        $s->id_farmer = Auth::user()->id;
        $s->id_product = $r->input('id_product');
        $s->id_harvest = $id; 
        $s->id_customer = 0;
        $s->amount = $r->input('amount');
        $s->units = $r->input('units');
        $s->price = $r->input('price');
        $s->profit = $profit;
        $s->save();

        return redirect()->route('harvest.sell-harvest');
    }
}
