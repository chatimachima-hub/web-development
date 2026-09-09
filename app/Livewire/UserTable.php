<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class UserTable extends Component
{
    public function render()
    {
        $user = User::latest()->get(); // -> menggunakan elequent ORM

        return view('livewire.user-table', ['users' => $user]);
    }
}
