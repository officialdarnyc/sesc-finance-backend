<?php

namespace App\RequestHandlers\Invoice;

use App\Actions\Invoice\GetInvoiceByReference;
use Illuminate\Http\JsonResponse;

class GetInvoiceByReferenceHandler
{
    public function __invoke(GetInvoiceByReference $action, $reference)
    {
        $invoice = $action->execute($reference);
        return new JsonResponse($invoice, 200);
    }
}