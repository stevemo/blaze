<?php

namespace Stevemo\Blaze\Http\Livewire\Traits;

trait WithSorting
{
    public $sortField;

    public $sortDirection;

    public function sortBy(string $field): void
    {
        if ($this->sortField === $field) {
            $this->sortDirection = $this->sortDirection === 'asc' ? 'desc' : 'asc';
        } else {
            $this->sortDirection = 'asc';
        }

        $this->sortField = $field;
    }

    public function applySorting($query)
    {
        return $query->when($this->sortField, fn ($query, $field) => $query->orderBy($this->sortField, $this->sortDirection));
    }
}
