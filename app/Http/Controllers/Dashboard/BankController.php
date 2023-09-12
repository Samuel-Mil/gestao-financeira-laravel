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
        $bank = Bank::find($id)->first();
        $bank->delete();
        return redirect()->route('list-banks');
    }

    public function edit(Request $request, $id){
        $bank = Bank::find($id)->first();
        return view("pages.dashboard.updateBank", ['bank'=> $bank]);
    }

    public function update(Request $request, $id){
        $data = $request->validate([
            'acc_number'  => 'numeric|required',
            'acc_holder'  => 'string|required',
            'acc_type'    => 'numeric|required',
            'acc_opening' => 'string|required',
            'acc_agency'  => 'string|required',
            'agency_id'   => 'string|required',
            'acc_status'  => 'numeric|required',
            'acc_contact' => 'string|required',
            'acc_notes'   => 'string|required'
        ]);

        $bank = Bank::find($id)->update([
            'number'       => $data['acc_number'],
            'holder_name'  => $data['acc_holder'],
            'type'         => $data['acc_type'],
            'opening_date' => date('Y-m-d H:i:s'),
            'agency'       => $data['acc_agency'],
            'agency_identification' => $data['agency_id'],
            'status'       => $data['acc_status'],
            'info_contact' => $data['acc_contact'],
            'notes'        => $data['acc_notes']
        ]);

        if($bank){
            return redirect()->back();
        }
    }
}
