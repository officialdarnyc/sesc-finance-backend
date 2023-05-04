<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    protected $fillable = ['reference', 'amount', 'dueDate', 'type', 'status', 'studentId'];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];
}
