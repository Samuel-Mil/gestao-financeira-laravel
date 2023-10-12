<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Invoice;
use App\Models\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class InvoicesController extends Controller
{
    public function index(){
        return view('pages.dashboard.registerInvoice');
    }

    public function create(Request $request){
        $data = $request->validate([
            'numero_fatura'       => 'required|unique:invoices',
            'data_fatura'         => 'required|date',
            'data_vencimento'     => 'required|date',
            'nome_emitente'       => 'required|string',
            'endereco_emitente'   => 'required|string',
            'cpf_cnpj_emitente'   => 'required|string',
            'nome_cliente'        => 'required|string',
            'endereco_cliente'    => 'required|string',
            'cpf_cnpj_cliente'    => 'required|string',
            'descricao_item'      => 'required|string',
            'quantidade'          => 'required|numeric',
            'preco_unitario'      => 'required|numeric',
            'subtotal'            => 'required|numeric',
            'impostos'            => 'required|numeric',
            'desconto'            => 'nullable|numeric',
            'total'               => 'required|numeric',
            'metodo_pagamento'    => 'required|string',
            'condicoes_pagamento' => 'required|string',
            'numero_pedido'       => 'nullable|string',
            'notas'               => 'nullable|string',
            'status'              => 'required|in:pendente,pago,atrasado',
        ]);

        $invoice = Invoice::create($request->all());

        if($invoice){
            return redirect()->route('register-invoice');
        }
    }

    public function track(){
        $invoices = Invoice::get();

        return view("pages.dashboard.trackInvoices", [
            'invoices' => $invoices,
        ]);
    }

    public function manage(){
        $invoices = Invoice::all();
        return view('pages.dashboard.manageInvoices', [
            'invoices' => $invoices
        ]);
    }

    public function delete(Request $request, $id){
        $invoice = Invoice::find($id)->delete();

        if($invoice){
            return redirect()->route('list-invoices');
        }
    }

    public function import(){
        $pdfs = Pdf::all();
        return view('pages.dashboard.importInvoice', ['pdfs'=> $pdfs]);
    }

    public function saveImport(Request $request){
        // Valide o arquivo enviado
        $request->validate([
            'name' => 'required|string',
            'pdf' => 'required|mimes:pdf', 
        ]);

        

        if ($request->hasFile('pdf')) {
            $pdf = $request->file('pdf');
            $fileName = $request->name . '.' . $pdf->getClientOriginalExtension();
            $pdf->storeAs('pdf', $fileName, 'local');
            Pdf::create([
                'name' => $fileName
            ]);
            return back()->with('success', 'Arquivo PDF enviado com sucesso.');
        }

        return back()->with('error', 'Ocorreu um erro ao fazer upload do arquivo.');
    }

    public function download($id){
        $pdf = Pdf::find($id);

        if (!$pdf) {
            return back()->with('error', 'PDF não encontrado.');
        }

        $pdfPath = storage_path('app/pdf/' . $pdf['name']);

        if (file_exists($pdfPath)) {
            return response()->file($pdfPath, ['Content-Disposition' => 'attachment']);
        }

        return back()->with('error', 'Arquivo PDF não encontrado.');
    }

    public function edit(Request $request, $id){
        $invoice = Invoice::where('id', $id)->first();
        return view('pages.dashboard.updateInvoice', ['invoice'=>$invoice]);
    }

    public function update(Request $request, $id){
        

        $invoice = Invoice::find($id)->update($request->all());


        if($invoice){
            return redirect()->route('list-invoices');
        }
    }
}
