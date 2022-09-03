<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Navbar extends Component
{
    /* public Array $tables; */

    public function __construct()
    {

    }

    public function render()
    {
        return view('components.navbar');
    }
}
