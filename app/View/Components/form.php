<?php

namespace App\View\Components;

use Illuminate\View\Component;

class form extends Component
{
    public string $action;
    public string $method;
    public Array $inputs;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(/* $action, $method, $inputs */)
    {
/*         $this->action = $action;
        $this->method = $method;
        $this->inputs = $inputs; */
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form');
    }
}
