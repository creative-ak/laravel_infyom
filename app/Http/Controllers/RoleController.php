<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Flash;

class RoleController extends Controller
{
    public function create(Request $request){
    	
    	return view('role.create');
    }

    public function store(Request $request){

    	Role::create(['name' => $request->role]);

        Flash::success('Role saved successfully.');
        
    	return redirect(url('/home'));
    }
}
