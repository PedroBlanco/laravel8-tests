<?php

namespace App\Http\Livewire\Users;

use Livewire\Component;
use App\Models\User;
use App\Models\Role;

class Show extends Component
{
    public $users;

    public function mount (
        $users
        // , $roles
        )
    {
        $this->users = $users;
        // $this->roles = $roles;
    }

    public function render()
    {
        return view('livewire.users.show');
    }
}
