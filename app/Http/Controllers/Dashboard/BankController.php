<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Bank;
use Illuminate\Http\Request;

class BankController extends Controller
{
    public function list(){
        $banks = Bank::all();

        return view("pages.dashboard.listBanks", ['banks'=>$banks]);
    }

    public function delete(Request $request, $id){
        $bank = Bank::find($id);
        $bank->delete();
        return redirect()->route('list-banks');
    }

    public function edit(Request $request, $id){
        $bank = Bank::find($id)->first();
        return view("pages.dashboard.updateBank", ['bank'=> $bank]);
    }

    public function update(Request $request, $id){
        $bank = Bank::find($id);
        $bank->update($request->all());

        if($bank){
            return redirect()->route('list-banks');
        }
    }
}
