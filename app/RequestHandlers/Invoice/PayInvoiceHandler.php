<?php

namespace App\RequestHandlers\Invoice;

use App\Actions\Invoice\PayInvoice;
use Illuminate\Http\JsonResponse;

class PayInvoiceHandler
{

    public function __invoke(PayInvoice $action, $reference)
    {
        $invoice = $action->execute($reference);
        return new JsonResponse($invoice, 200);

        
    }
}
