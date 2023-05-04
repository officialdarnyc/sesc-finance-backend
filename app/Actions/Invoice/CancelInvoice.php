<?php

namespace App\Actions\Invoice;

use App\Models\Invoice;

class CancelInvoice
{

    public function execute($reference)
    {

        $invoice = Invoice::whereReference($reference)->first();

        if($invoice->status == 'OUTSTANDING') {
            $invoice->update([
                'status' => 'CANCELLED',
            ]);
        } else {
            $invoice = "You can't delete an invoice unless it is outstanding!";
        }
        return $invoice;
    }
}
