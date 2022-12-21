<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    use HasFactory;

    protected $table = 'employees';
    protected $primaryKey = 'emp_id';

    protected $fillable = [
        'first_name',
        'last_name',
        'contact_num',
        'company_email',
        'status',
        'position',
    ];

    public $timestamps = false;
}
