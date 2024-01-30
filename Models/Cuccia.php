<?php
require_once __DIR__ . '/Prodotto.php';

class Cuccia extends Prodotto
{

    public $nome;
    public $tessuto;
    public $larghezza;
    public $altezza;

    public function __construct($_imgProdotto, $_disponibilità, $_codiceProdotto, $_stock, $_categoria, $_nome, $_tessuto, $_altezza, $_largezza)
    {
        parent::__construct($_imgProdotto, $_disponibilità, $_codiceProdotto, $_stock, $_categoria);

        $this->nome = $this->setNome($_nome);
        $this->tessuto = $this->setTessuto($_tessuto);
        $this->larghezza = $this->setLarghezza($_largezza);
        $this->altezza = $this->setAltezza($_altezza);
    }

    public function getsetNome()
    {
        return $this->nome;
    }
    public  function setNome($__nome)
    {
        return ucfirst(strtolower($__nome));
    }

    public function getTessuto()
    {
        return $this->tessuto;
    }
    public  function setTessuto($__tessuto)
    {
        return ucfirst(strtolower($__tessuto));
    }

    public function getLarghezza()
    {
        return $this->larghezza;
    }
    public  function setLarghezza($__larghezza)
    {
        return $__larghezza;
    }

    public function getAltezza()
    {
        return $this->altezza;
    }
    public  function setAltezza($__altezza)
    {
        return $__altezza;
    }
}
