<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Table extends Component
{

    public Array $tableColsName;
    public Array $tableData;

    public function __construct($tableColsName, $tableData)
    {
        $this->tableColsName = $tableColsName;
        $this->tableData = $tableData;
    }

    public function render()
    {
        return view('components.table');
    }
}
