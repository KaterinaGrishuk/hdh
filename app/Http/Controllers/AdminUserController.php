<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminUserController extends Controller
{
    public function showUserTable(){
        return view('admin.user-table');
    }
}
