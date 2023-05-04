<?php

namespace App\Actions\Account;

use App\Models\Account;

class ListAccounts{
    public function execute(){

        // List All Accounts 

        return Account::all();
    }
}