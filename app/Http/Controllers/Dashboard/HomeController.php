<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view("pages.dashboard.home");
    }
    
    public function show()
    {
        return view("pages.dashboard.showBankAccounts");
    }

    public function inOut(){
        return view("pages.dashboard.inOutTransations");
    }
}
