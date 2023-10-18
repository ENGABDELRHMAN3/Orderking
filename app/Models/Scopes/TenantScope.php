<?php

namespace App\Models\Scopes;

use App\Models\SuperAdmmin\Tenants;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;
use Illuminate\Support\Facades\Request;

class TenantScope implements Scope
{
   
    public function apply(Builder $builder, Model $model): void
    {
        //
        $host= request()->getHost();
          $tanant = Tenants::where('domain' ,$host)->firstOrFail();


          $builder->where(function ($query) use ($tanant) {
            $query->Where('ApiKey', $tanant->ApiKey)
            ->orWhere('SuperAdmin', 1);

        });
            }
}
