<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Table extends Component
{

    public $tableName;

    public function __construct()
    {
        //
    }

    public function render()
    {
        return view('components.table');
    }
}
