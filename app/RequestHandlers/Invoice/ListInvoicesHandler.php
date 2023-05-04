<?php

namespace App\RequestHandlers\Invoice;

use App\Actions\Invoice\ListInvoices;
use Illuminate\Http\JsonResponse;

class ListInvoicesHandler
{
    public function __invoke(ListInvoices $action)
    {
        $invoices = $action->execute();
        return new JsonResponse(['invoiceList' => $invoices], 200);
    }
}