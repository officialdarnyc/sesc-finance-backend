<?php

namespace App\Actions\Invoice;

use App\Models\Invoice;

class GetInvoiceByReference
{
    public function execute($reference){

        // List All Invoices 

        return Invoice::whereReference($reference)->first();
    }
}