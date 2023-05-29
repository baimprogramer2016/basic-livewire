<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class UserTable extends Component
{
    protected $listeners = ['rederTable' => 'render'];

    public function render()
    {
        return view('livewire.user-table', [
            'data_users' => User::orderBy('id', 'desc')->get(),
        ]);
    }

    public function delete($id)
    {
        $user =  User::find($id);
        $user->delete();

        session()->flash('succes', 'Data berhasil di hapus');
    }
}
