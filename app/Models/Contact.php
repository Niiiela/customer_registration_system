<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Enums\CustomerEnum;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'cell_phone',
        'email',
        'customer_id',
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
