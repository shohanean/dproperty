<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Charts\DashboardChart;

class DashboardController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        if (auth()->user()->role != 1) {
            return redirect('add/property');
        } else {
            return view('dashboard')->with([
              'users' => User::count(),
              'roles' => Role::count(),
              'permissions' => Permission::count()
            ]);
        }

    }
}
