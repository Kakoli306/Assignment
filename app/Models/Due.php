<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Employee;

class Due extends Model
{
    use HasFactory;

    protected $fillable = [
        'employee_id', 
        'new_amount',
        
    ];   

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}
