<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use App\Models\Role;

class Users extends Component
{
    public $users, $roles;


    public function render()
    {
        $this->users = User::latest()->get();
        $this->roles = Role::latest()->get();

        // dd ( $this->roles );

        return view('livewire.users');
    }

    public function assignRole($user_id, $role_id)
    {
        // TODO: Comprobar rol del usuario ejecutor

        $temp_user = User::find($user_id);

        $temp_user->role_id = $role_id;

        $temp_user->save();
    }
}
