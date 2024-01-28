<?php
require_once __DIR__ . '/Prodotto.php';

class Cibo extends Prodotto
{

    protected $nome;
    protected $lifeStage;
    protected $gusto;
    protected $razza;

    public function __construct($_disponibilità, $_codiceProdotto, $_stock, $_categoria, $_nome, $_lifeStage, $_gusto, $_razza)
    {
        parent::__construct($_disponibilità, $_codiceProdotto, $_stock, $_categoria);

        $this->setNome($_nome);
        $this->setLifeStage($_lifeStage);
        $this->setGusto($_gusto);
        $this->setRazza($_razza);
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

    protected function getGusto()
    {
        return $this->gusto;
    }
    protected  function setGusto($__gusto)
    {
        return ucfirst(strtolower($__gusto));
    }

    protected function getRazza()
    {
        return $this->razza;
    }
    protected  function setRazza($__razza)
    {
        return ucfirst(strtolower($__razza));
    }
}
