<?php

namespace App\Livewire;

use Livewire\Component;

class UserTable extends Component
{
    public function render()
    {
        $user = \App\Models\User::latest()->get(); // -> menggunakan elequent ORM
        return view('livewire.user-table', ['users' => $user]);
    }
}
