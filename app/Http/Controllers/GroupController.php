<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Group;
use DB;
class GroupController extends Controller
{
   public function create()
   {
	   return view('admin.group.create');
   }
   public function store(Request $request)
   {
	   $group = new Group();
        $data = $this->validate($request, [
            'name'=>'required',
        ]);
       
        $group->saveGroup($data);
        return redirect('/group')->with('success', 'New group has been created! Wait sometime to get resolved');
   }
   
    public function index()
    {   
		$group = DB::table('tbl_group')->get();
        return view('admin.group.index', compact('group'));
    }
	
	 public function edit($id)
    {
        $group = Group::where('id', $id)
                        ->first();

        return view('admin.group.edit', compact('group', 'id'));
    }
	public function update(Request $request, $id)
    {
        $group = new Group();
        $data = $this->validate($request, [
            
            'name'=> 'required'
        ]);
        $data['id'] = $id;
        $group->updateGroup($data);

        return redirect('/group')->with('success', 'New Group has been updated!!');
    }
	 public function destroy($id)
    {
        $group = Group::find($id);
        $group->delete();

        return redirect('/group')->with('success', 'Group has been deleted!!');
    }
}
