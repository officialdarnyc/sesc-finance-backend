<?php

namespace App\RequestHandlers\Invoice;

use App\Actions\Invoice\CancelInvoice;
use Illuminate\Http\JsonResponse;

class CancelInvoiceHandler
{

    public function __invoke(CancelInvoice $action, $reference)
    {
        $invoice = $action->execute($reference);
        return new JsonResponse($invoice, 200);

        
    }
}
