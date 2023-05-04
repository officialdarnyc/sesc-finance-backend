<?php

namespace App\RequestHandlers\Account;

use App\Actions\Account\CreateAccount;
use App\Http\Requests\Account\CreateAccountRequest;
use Illuminate\Http\JsonResponse;

class CreateAccountHandler
{

    public function __invoke(CreateAccountRequest $request, CreateAccount $action)
    {
        $account = $action->execute($request->all());
        return new JsonResponse($account, 201);

        
    }
}
