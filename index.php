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


$crocchetteUno = new Cibo('no', 'true', 1234567, 15, new Categoria('cani'), 'Monge Gusto Salmone', '1 anno', 'Salmone', 'tutte le razze');
$crocchetteDue = new Cibo('no', 'true', 1234567, 15, new Categoria('gatti'), 'Monge Gusto Maiale', '3 anno', 'Maiale', 'tutte le razze');
$crocchetteTre = new Cibo('no', 'true', 1234567, 15, new Categoria('cani'), 'Monge Gusto Tacchino', '6 mesi', 'tacchino', 'Pastore Maremmano');
$giocoUno = new Gioco('no', 'true', 1234567, 15, new Categoria('cani'), 'Pallina Rossa', 'tutte le età', 'rosso');
$cucciaUno = new Cuccia('no', 'false', 1234567, 15, new Categoria('cani'), 'cuccia super comoda', 'velluto', 10, 40);

$prodotti = [$crocchetteUno, $crocchetteDue, $crocchetteTre, $giocoUno, $cucciaUno];

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