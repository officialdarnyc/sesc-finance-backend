<?php

namespace App\Actions\Account;

use App\Models\Account;

class CreateAccount{
    public function execute(array $data){

        $account = Account::create([
            'studentId' => $data['studentId'],
            'hasOutstandingBalance' => false,

        ]);

        return $account;
    }
}