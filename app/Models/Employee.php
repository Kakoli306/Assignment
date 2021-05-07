<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Due;

class Employee extends Model
{
    use HasFactory;
    protected $fillable = [
        'employee_id', 
        'employee_name',
        'grade',
        'address',
        'mobile',
        'bank_account',
    ];  

    public function due()
    {
        return $this->belongsTo('App\Due');
    }
}
