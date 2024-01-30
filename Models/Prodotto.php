<?php

class Prodotto
{
    public $imgProdotto;
    public $disponibilità;
    public $codiceProdotto;
    public $stock;

    public $categoria;

    public function __construct(string $_imgProdotto, bool $_disponibilità, int $_codiceProdotto, int $_stock, $_categoria)
    {
        $this->imgProdotto = $_imgProdotto;
        $this->disponibilità = $this->setDisponibilità($_disponibilità);
        $this->codiceProdotto = $this->setCodiceProdotto($_codiceProdotto);
        $this->stock = $this->setStock($_stock);
        $this->categoria = $_categoria;
    }

    public function getDisponibilità()
    {
        return $this->disponibilità;
    }
    public  function setDisponibilità($_disponibilità)
    {
        return ucfirst(strtolower($_disponibilità));
    }

    public function getCodiceProdotto()
    {
        return $this->disponibilità;
    }
    public  function setCodiceProdotto($__CodiceProdotto)
    {
        return $__CodiceProdotto;
    }

    public function getStock()
    {
        return $this->stock;
    }
    public  function setStock($__Stock)
    {
        return $__Stock;
    }
}
