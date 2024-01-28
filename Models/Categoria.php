<?php

class Categoria
{
    protected $categoria;
    protected $descrizione;
    /**
     * Undocumented function
     *
     * @param [type] $_categoria / inserire cane o gatto
     */
    public function __construct($_categoria)
    {
        $this->categoria = $this->setCategoria($_categoria);
    }

    protected function getCategoria()
    {
        return $this->categoria;
    }
    protected  function setCategoria($__Categoria)
    {
        if ($__Categoria == 'cani') {
            $this->descrizione = 'Oggetto per cani';
        } else {
            $this->descrizione = 'Oggetto per gatti';
        }

        return ucfirst(strtolower($__Categoria));
    }
}
