<?php

namespace App\Models\SuperAdmmin;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

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



        /**
         * Get all of the users for the Tenants
         *
         * @return \Illuminate\Database\Eloquent\Relations\HasMany
         */
        public function users(): HasMany
        {
            return $this->hasMany(User::class, 'ApiKey', 'ApiKey');
        }
}
