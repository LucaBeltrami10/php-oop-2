<?php
require_once __DIR__ . '/Prodotto.php';

class Gioco extends Prodotto
{

    protected $nome;
    protected $lifeStage;
    protected $colore;

    public function __construct($_disponibilità, $_codiceProdotto, $_stock, $_categoria, $_nome, $_lifeStage, $_colore)
    {
        parent::__construct($_disponibilità, $_codiceProdotto, $_stock, $_categoria);

        $this->setNome($_nome);
        $this->setLifeStage($_lifeStage);
        $this->setColore($_colore);
    }

    protected function getsetNome()
    {
        return $this->nome;
    }
    protected  function setNome($__nome)
    {
        return ucfirst(strtolower($__nome));
    }

    protected function getLifeStage()
    {
        return $this->lifeStage;
    }
    protected  function setLifeStage($__lifeStage)
    {
        return ucfirst(strtolower($__lifeStage));
    }

    protected function getColore()
    {
        return $this->colore;
    }
    protected  function setColore($__colore)
    {
        return ucfirst(strtolower($__colore));
    }
}
