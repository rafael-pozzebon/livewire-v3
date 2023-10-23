<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public int $count = 0;

    public string $name = '';
    public string $lastName = '';

    public function mount()
    {
        $this->count = 100;

        $this->fill([
            'name' => 'Rafael',
            'lastName' => 'Pozzebon',
        ]);
    }

    public function render()
    {
        return view('livewire.counter');
    }

    public function increment()
    {
        $this->count++;
    }
}

