<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class UserEdit extends Component
{
    public $name;
    public $email;

    public $user_id;
    public function mount($user)
    {
        $this->user_id = $user->id;
        $this->name = $user->name;
        $this->email = $user->email;
    }
    public function render()
    {
        return view('livewire.user-edit');
    }

    public function update()
    {
        $this->validate([
            'name' => 'required|string|min:3',
            'email' => 'required|email|unique:users,email,' . $this->user_id,
        ]);

        User::where('id', $this->user_id)->update([
            'name' => $this->name,
            'email' => $this->email,
        ]);

        $this->name = NULL;
        $this->email = NULL;

        redirect()->route('user-index')->with('success', 'Data berhasil di update');
    }
}
