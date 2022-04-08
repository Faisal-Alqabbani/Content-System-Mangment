<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Permission;
use Illuminate\Http\Request;

class PermissinController extends Controller
{
    //
    private $permissions;
    public function __construct(Permission $permissions){
        $this->permissions = $permissions;
    }

    public function index(){
       $permissions = $this->permissions->all(); 
       return view('admin.permissions.index', compact('permissions'));
    }
}
