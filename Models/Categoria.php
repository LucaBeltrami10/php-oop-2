<?php

class Categoria
{
    public $categoria;
    public $descrizione;
    /**
     * Undocumented function
     *
     * @param [type] $_categoria / inserire cane o gatto
     */
    public function __construct($_categoria)
    {
        $this->categoria = $this->setCategoria($_categoria);
    }

    public function getCategoria()
    {
        return $this->categoria;
    }
    public  function setCategoria($__Categoria)
    {
        if ($__Categoria == 'cani') {
            $this->descrizione = 'Oggetto per cani';
        } else {
            $this->descrizione = 'Oggetto per gatti';
        }

        return ucfirst(strtolower($__Categoria));
    }
}
