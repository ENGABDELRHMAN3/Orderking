<?php

namespace App\Livewire;

use App\Models\SuperAdmmin\Tenants;
use Livewire\Component;

class SupeerAdmin extends Component
{
    public function render()
    { 
        $tenants = Tenants::all();
        return view('livewire.supeer-admin',compact('tenants'));
    }
}
 