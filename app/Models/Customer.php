<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Enums\CustomerEnum;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'full_name',
        'date_birth',
        'cpf',
        'rg',
        'issuing_authority',
        'state',
        'sex',
        'civil_status',
        'status',
    ];

    protected $casts = [
        'date_birth' => 'date',
        'issuing_authority' => CustomerEnum::class,
        'state' => CustomerEnum::class,
        'sex' => CustomerEnum::class,
        'civil_status' => CustomerEnum::class,
        'status' => CustomerEnum::class,
    ];

    public function contacts()
    {
        return $this->hasMany(Contact::class);
    }

    public function addresses()
    {
        return $this->hasMany(Address::class);
    }
}
