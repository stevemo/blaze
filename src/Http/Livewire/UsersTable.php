<?php

namespace Stevemo\Blaze\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Foundation\Auth\User;
use Stevemo\Blaze\Http\Livewire\Traits\WithSorting;

class UsersTable extends Component
{
    use WithSorting;
    use WithPagination;

    protected $queryString = ['sortField', 'sortDirection'];

    public function getUsersProperty()
    {
        $query = User::query();

        return $this->applySorting($query)->paginate();
    }

    public function render()
    {
        return view('blaze::livewire.users-table', [
            'users' => $this->users
        ]);
    }
}
