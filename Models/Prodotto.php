<?php

class Prodotto
{
    protected $disponibilità;
    protected $codiceProdotto;
    protected $stock;

    protected $categoria;

    public function __construct($_disponibilità, $_codiceProdotto, $_stock, $_categoria)
    {
        $this->setDisponibilità($_disponibilità);
        $this->setCodiceProdotto($_codiceProdotto);
        $this->setStock($_stock);
        $this->categoria = $_categoria;
    }

    protected function getDisponibilità()
    {
        return $this->disponibilità;
    }
    protected  function setDisponibilità($__disponibilità)
    {
        return ucfirst(strtolower($__disponibilità));
    }

    protected function getCodiceProdotto()
    {
        return $this->disponibilità;
    }
    protected  function setCodiceProdotto($__CodiceProdotto)
    {
        return ucfirst(strtolower($__CodiceProdotto));
    }

    protected function getStock()
    {
        return $this->stock;
    }
    protected  function setStock($__Stock)
    {
        return ucfirst(strtolower($__Stock));
    }
}
