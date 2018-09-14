<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
	public $table = "tbl_currency";
    public function saveCurrency($data)
	{
       // $this->user_id = auth()->user()->id;
        //$this->title = $data['title'];
        $this->currency_name = $data['name'];
		$this->symbol = $data['symbol'];
        $this->save();
        return 1;
	}
	public function updateCurrency($data)
{
        $currency = $this->find($data['id']);
       // $group->user_id = auth()->user()->id;
       // $group->title = $data['title'];
        $currency->currency_name = $data['name'];
		$currency->symbol = $data['symbol'];
        $currency->save();
        return 1;
}
}
