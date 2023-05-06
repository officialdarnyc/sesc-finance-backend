<?php

namespace App\Actions\Invoice;

use App\Models\Account;
use App\Models\Invoice;

class PayInvoice{
    public function execute($reference){

        //Pay An Invoice
        $invoice = Invoice::whereReference($reference)->first();
        $invoice->update([
            'status' => 'PAID',
        ]);

        // Check if the account still has unpaid invoices
        $invoices = Invoice::where('studentId', $invoice->studentId)->get();

        $outstanding = 0;
        foreach($invoices as $check){
            if($check->status == "OUTSTANDING"){
                $outstanding++;
            }
        }

        //Update account outstanding status 
        if ($outstanding > 0){
            Account::where('studentId', $invoice->studentId)
            ->first()
            ->update([
                "hasOutstandingBalance" => true
            ]);
        }else{
            Account::where('studentId', $invoice->studentId)
            ->first()
            ->update([
                "hasOutstandingBalance" => false
            ]);
        }
        
        return $invoice;
    }
}