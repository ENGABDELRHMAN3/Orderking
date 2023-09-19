<?php

namespace App\Models\SuperAdmmin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tenants extends Model
{
    use HasFactory;
    protected $fillable = [
            'name',
            'ApiKey',
            'domain',
            'DB_DATABASE',
            'DB_USERNAME',
            'DB_PASSWORD',
        ];
}
