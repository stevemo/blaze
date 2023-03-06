<?php

namespace Stevemo\Blaze\Http\Livewire\Traits;

trait WithEventNotification
{
    public function dispatchMessage($message)
    {
        $this->dispatchBrowserEvent('blaze::notify', $message);
    }
}
