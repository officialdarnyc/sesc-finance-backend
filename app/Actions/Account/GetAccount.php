<?php

namespace App\Actions\Account;

use App\Models\Account;

class GetAccount{
    public function execute($studentId){

        // Get a student account 

        return Account::where('studentId',$studentId)->first();
    }
}