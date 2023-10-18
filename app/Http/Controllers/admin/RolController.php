<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RolController extends Controller
{
    public function index()
    {

        $pagina = 'roles';
        return view('frontend.admin.roles.list', compact('pagina'));
    }
}
