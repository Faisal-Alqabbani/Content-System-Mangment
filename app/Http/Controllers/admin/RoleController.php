<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    //
    private $role; 
    public function __construct(Role $role){
        $this->role = $role;
    }
    
    public function store(Request $request){    
        $this->role->findOrFail($request->role_id)->permissions()->sync($request->permission);
        return back(); 
 
    }

    public function getByRole(Request $data){
        // pluck will return only permission id 
        $permissions = $this->role->find($data->id)->permissions()->pluck('permission_id');
        return $permissions;
    }
}
