<?php
require_once __DIR__ . '/Prodotto.php';

class Cibo extends Prodotto
{

    public $nome;
    public $lifeStage;
    public $gusto;
    public $razza;

    /**
     * Undocumented function
     *
     * @param [type] $_disponibilit / disponibile? true o false?
     * @param [type] $_codiceProdotto / codice prodotto 7 cifre
     * @param [type] $_stock / numero prodotti disponibili
     * @param [type] $_categoria / classe categoria
     * @param [type] $_nome /nome prodotto
     * @param [type] $_lifeStage / adatto a animali di -- anni
     * @param [type] $_gusto / gusto del prodotto
     * @param [type] $_razza / destinato a razza
     */
    public function __construct($_imgProdotto, $_disponibilità, $_codiceProdotto, $_stock, $_categoria, $_nome, $_lifeStage, $_gusto, $_razza)
    {
        parent::__construct($_imgProdotto, $_disponibilità, $_codiceProdotto, $_stock, $_categoria);

        $this->nome = $this->setNome($_nome);
        $this->lifeStage = $this->setLifeStage($_lifeStage);
        $this->gusto = $this->setGusto($_gusto);
        $this->razza = $this->setRazza($_razza);
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

    public function getGusto()
    {
        return $this->gusto;
    }
    public  function setGusto($__gusto)
    {
        return ucfirst(strtolower($__gusto));
    }

    public function getRazza()
    {
        return $this->razza;
    }
    public  function setRazza($__razza)
    {
        return ucfirst(strtolower($__razza));
    }
}
