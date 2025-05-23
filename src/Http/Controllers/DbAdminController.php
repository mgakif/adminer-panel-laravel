<?php

namespace Mgakif\AdminerPanel\Http\Controllers;

use Illuminate\Routing\Controller;

class DbAdminController extends Controller
{
    public function index()
    {
        return view('adminer-panel::index');
    }
}
