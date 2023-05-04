<?php

namespace App\Actions\Invoice;

use App\Models\Invoice;

class ListInvoices
{
    public function execute(){

        // List All Invoices 

        return Invoice::all();
    }
}