<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Employee;

class Bank extends Model
{
    use HasFactory;

    protected $fillable = [
        'employee_id', 
        'account_type',
        'account_number',
        'current_balance',
        'branch_name',
        'account_name',
    ];   

    public function employee()
    {
        return $this->belongsTo('App\Employee');
    }
}
