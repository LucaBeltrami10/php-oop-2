<?php
require_once '/Prodotto.php';

class Gioco extends Prodotto
{

    protected $nome;
    protected $lifeStage;
    protected $colore;

    public function __construct($_disponibilità, $_codiceProdotto, $_stock, $_categoria, $_nome, $_lifeStage, $_colore)
    {
        parent::__construct($_disponibilità, $_codiceProdotto, $_stock, $_categoria);

        $this->setDisponibilità($_nome);
        $this->setCodiceProdotto($_lifeStage);
        $this->setStock($_colore);
    }
}
