<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
	public $table = "tbl_group";
    public function saveGroup($data)
	{
       // $this->user_id = auth()->user()->id;
        //$this->title = $data['title'];
        $this->group_name = $data['name'];
        $this->save();
        return 1;
	}
	public function updateGroup($data)
{
        $group = $this->find($data['id']);
       // $group->user_id = auth()->user()->id;
       // $group->title = $data['title'];
        $group->group_name = $data['name'];
        $group->save();
        return 1;
}
}
