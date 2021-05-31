<?php

namespace App\Http\Livewire\Users;

use Livewire\Component;
use App\Models\User;
use App\Models\Role;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Show extends Component
{
    use AuthorizesRequests;

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
        $this->authorize('show-users', $this->users);

        return view('livewire.users.show');
    }
}
