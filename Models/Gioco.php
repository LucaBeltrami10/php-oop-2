<?php
require_once __DIR__ . '/Prodotto.php';

class Gioco extends Prodotto
{

    public $nome;
    public $lifeStage;
    public $colore;

    public function __construct($_imgProdotto, $_disponibilità, $_codiceProdotto, $_stock, $_categoria, $_nome, $_lifeStage, $_colore)
    {
        parent::__construct($_imgProdotto, $_disponibilità, $_codiceProdotto, $_stock, $_categoria);

        $this->nome = $this->setNome($_nome);
        $this->lifeStage = $this->setLifeStage($_lifeStage);
        $this->colore = $this->setColore($_colore);
    }

    public function getsetNome()
    {
        return $this->nome;
    }
    public  function setNome($__nome)
    {
        return ucfirst(strtolower($__nome));
    }

    public function getLifeStage()
    {
        return $this->lifeStage;
    }
    public  function setLifeStage($__lifeStage)
    {
        return ucfirst(strtolower($__lifeStage));
    }

    public function getColore()
    {
        return $this->colore;
    }
    public  function setColore($__colore)
    {
        return ucfirst(strtolower($__colore));
    }
}
