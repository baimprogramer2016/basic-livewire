<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use App\Models\User;

class UserCreate extends Component
{
    public $email;
    public $name;
    public $password;

    public function render()
    {
        return view('livewire.user-create');
    }
    public function store()
    {
        $this->validate([
            'name' => 'required|string|min:3',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6'
        ]);

        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);

        $this->name = NULL;
        $this->email = NULL;
        $this->password = NULL;

        session()->flash('success', 'Data berhasil ditambahkan');

        $this->emit('rederTable');
    }
}
