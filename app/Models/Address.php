<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Enums\CustomerEnum;

class Address extends Model
{
    use HasFactory;

    protected $fillable = [
        'street',
        'number',
        'neighborhood',
        'city',
        'state',
        'zip_code',
        'customer_id',
    ];

    protected $casts = [
        'state' => CustomerEnum::class,
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
