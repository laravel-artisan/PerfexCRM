<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Currency;
use DB;
class CurrencyController extends Controller
{
   public function create()
   {
	   return view('admin.currency.create');
   }
   public function store(Request $request)
   {
	   $currency = new Currency();
        $data = $this->validate($request, [
            'name'=>'required',
			'symbol'=>'required',
        ]);
       
        $currency->saveCurrency($data);
        return redirect('/currency')->with('success', 'New currency has been created! Wait sometime to get resolved');
   }
   
    public function index()
    {   
		$currency= DB::table('tbl_currency')->get();
        return view('admin.currency.index', compact('currency'));
    }
	
	 public function edit($id)
    {
        $currency = Currency::where('id', $id)
                        ->first();

        return view('admin.currency.edit', compact('currency', 'id'));
    }
	public function update(Request $request, $id)
    {
        $currency = new Currency();
        $data = $this->validate($request, [
            
          'name'=> 'required',
		 'symbol'=> 'required'
        ]);
        $data['id'] = $id;
        $currency->updateCurrency($data);

        return redirect('/currency')->with('success', 'New currency has been updated!!');
    }
	 public function destroy($id)
    {
        $currency = Currency::find($id);
        $currency->delete();

        return redirect('/currency')->with('success', 'Currency has been deleted!!');
    }
}
