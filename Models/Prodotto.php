<?php

class Prodotto
{
    protected $disponibilità;
    protected $codiceProdotto;
    protected $stock;

    protected $categoria;

    public function __construct($_disponibilità, $_codiceProdotto, $_stock, $_categoria)
    {
        $this->disponibilità = $this->setDisponibilità($_disponibilità);
        $this->codiceProdotto = $this->setCodiceProdotto($_codiceProdotto);
        $this->stock = $this->setStock($_stock);
        $this->categoria = $_categoria;
    }

    protected function getDisponibilità()
    {
        return $this->disponibilità;
    }
    protected  function setDisponibilità($_disponibilità)
    {
        return ucfirst(strtolower($_disponibilità));
    }

    protected function getCodiceProdotto()
    {
        return $this->disponibilità;
    }
    protected  function setCodiceProdotto($__CodiceProdotto)
    {
        return $__CodiceProdotto;
    }

    protected function getStock()
    {
        return $this->stock;
    }
    protected  function setStock($__Stock)
    {
        return $__Stock;
    }
}
