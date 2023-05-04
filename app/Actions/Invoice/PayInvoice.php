<?php

namespace App\Actions\Invoice;
use App\Models\Invoice;

class PayInvoice{
    public function execute($reference){

        $invoice = Invoice::whereReference($reference)->first();
        $invoice->update([
            'status' => 'PAID',
        ]);

        return $invoice;
    }
}