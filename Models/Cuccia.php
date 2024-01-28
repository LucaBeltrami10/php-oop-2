<?php
require_once __DIR__ . '/Prodotto.php';

class Cuccia extends Prodotto
{

    protected $nome;
    protected $tessuto;
    protected $larghezza;
    protected $altezza;

    public function __construct($_disponibilità, $_codiceProdotto, $_stock, $_categoria, $_nome, $_tessuto, $_altezza, $_largezza)
    {
        parent::__construct($_disponibilità, $_codiceProdotto, $_stock, $_categoria);

        $this->nome = $this->setNome($_nome);
        $this->tessuto = $this->setTessuto($_tessuto);
        $this->larghezza = $this->setLarghezza($_largezza);
        $this->altezza = $this->setAltezza($_altezza);
    }

    protected function getsetNome()
    {
        return $this->nome;
    }
    protected  function setNome($__nome)
    {
        return ucfirst(strtolower($__nome));
    }

    protected function getTessuto()
    {
        return $this->tessuto;
    }
    protected  function setTessuto($__tessuto)
    {
        return ucfirst(strtolower($__tessuto));
    }

    protected function getLarghezza()
    {
        return $this->larghezza;
    }
    protected  function setLarghezza($__larghezza)
    {
        return $__larghezza;
    }

    protected function getAltezza()
    {
        return $this->altezza;
    }
    protected  function setAltezza($__altezza)
    {
        return $__altezza;
    }
}
