<?php

namespace App\RequestHandlers\Account;

use App\Actions\Account\ListAccounts;
use Illuminate\Http\JsonResponse;

class ListAccountsHandler
{
    public function __invoke(ListAccounts $action)
    {
        $accounts = $action->execute();
        return new JsonResponse(['accountList' => $accounts], 200);
    }
}