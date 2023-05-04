<?php

namespace App\RequestHandlers\Invoice;

use App\Actions\Invoice\CreateInvoice;
use App\Http\Requests\Invoice\CreateInvoiceRequest;
use Illuminate\Http\JsonResponse;

class CreateInvoiceHandler
{

    public function __invoke(CreateInvoiceRequest $request, CreateInvoice $action)
    {
        $invoice = $action->execute($request->all());
        return new JsonResponse($invoice, 201);

        
    }
}
