/* Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
L'e-commerce vende prodotti per animali.
I prodotti sono categorizzati, le categorie sono Cani o Gatti.
I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
Stampiamo delle card contenenti i dettagli dei prodotti, come immagine, titolo, prezzo, icona della categoria
ed il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia). ?> */

<?php

require_once __DIR__ . './Models/Prodotto.php';
require_once __DIR__ . './Models/Categoria.php';
require_once __DIR__ . './Models/Cibo.php';
require_once __DIR__ . './Models/Cuccia.php';
require_once __DIR__ . './Models/Gioco.php';


$CrocchetteUno = new Cibo('no', 'false', 1234567, 15, new Categoria('cani'), 'Monge Gusto Salmone', '1 anno', 'Salmone', 'tutte le razze');

var_dump($CrocchetteUno)

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-2</title>
</head>

<body>

</body>

</html>