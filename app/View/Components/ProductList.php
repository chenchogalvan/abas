<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ProductList extends Component
{

    public $Codigo;
    public $Descripcion;
    public $Imagen;
    public $Precio;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($Codigo, $Descripcion, $Imagen, $Precio)
    {
        $this->Codigo;
        $this->Descripcion;
        $this->Imagen;
        $this->Precio;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.product-list');
    }
}
