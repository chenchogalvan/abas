<?php

namespace App\View\Components;

use Illuminate\View\Component;

class precientes extends Component
{

    public $codigo;
    public $imagen;
    public $descripcion;
    public $precio;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($codigo="", $imagen="", $descripcion="", $precio="")
    {
        $this->codigo = $codigo;
        $this->imagen = $imagen;
        $this->descripcion = $descripcion;
        $this->precio = $precio;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.precientes');
    }
}
