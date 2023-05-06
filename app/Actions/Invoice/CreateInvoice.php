<?php

namespace App\Actions\Invoice;

use App\Models\Account;
use Illuminate\Support\Str;
use App\Models\Invoice;

class CreateInvoice{
    public function execute(array $data){

        $invoice = Invoice::create([

            'reference' => Str::random(7),
            'amount' => $data['amount'],
            'dueDate' => $data['dueDate'],
            'type' => $data['type'],
            'status' => 'OUTSTANDING',
            'studentId' => $data['account']['studentId'],
        ]);

      Account::where('studentId', $invoice->studentId)
                    ->first()
                    ->update([
                        "hasOutstandingBalance" => true
                    ]);

        return $invoice;
    }
}