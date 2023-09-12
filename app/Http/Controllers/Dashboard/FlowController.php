<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Bank;
use App\Models\Flow;
use Illuminate\Http\Request;

class FlowController extends Controller
{
    public function create(){
        $banks = Bank::all();
        return view("pages.dashboard.createFlow", ['banks'=>$banks]);
    }

    public function register(Request $request){
        $request->validate([
            'type'             => 'numeric|required',
            'amount'            => 'numeric|required',
            'entry_account'    => 'numeric|required',
            'outgoing_account' => 'numeric|required',
        ]);

        $flow = Flow::create($request->all());

        if ($flow){
            return redirect()->route("inOut");
        }
    }

    public function list(Request $request){
        $flows = Flow::with('outgoingAccount', 'entryAccount')->get();

        return view("pages.dashboard.inOutTransations", [
            'flows' => $flows,
        ]);

    }
}
