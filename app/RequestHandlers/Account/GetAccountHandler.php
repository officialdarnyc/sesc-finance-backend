<?php

namespace App\RequestHandlers\Account;

use App\Actions\Account\GetAccount;
use Illuminate\Http\JsonResponse;

class GetAccountHandler
{
    public function __invoke(GetAccount $action, $studentId)
    {
        $account = $action->execute($studentId);
        return new JsonResponse($account, 200);
    }
}