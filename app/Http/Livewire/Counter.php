<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $captcha;

    public function updated()
    {
        ray($this->captcha);
    }


    public function render()
    {
        return view('livewire.counter');
    }
}
