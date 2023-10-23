<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Bank;
use App\Models\Flow;
use App\Models\Invoice;
use App\Models\User;
use Illuminate\Http\Request;

class AnalysisController extends Controller
{
    public function index(){
        return view("pages.dashboard.analysis", [
            'usersCount'        => User::count(),
            'bankCount'         => Bank::count(),
            'banks'             => Bank::all(), 
            'transactionsCount' => Flow::count(),
            'transactions'      => Flow::with('outgoingAccount', 'entryAccount')->get(),
            'invoicesCount'     => Invoice::count(),
            'invoices'          => Invoice::all(),
            'amount'            => Flow::sum('amount'),
            'search'            => null
        ]);
    }

    
}
