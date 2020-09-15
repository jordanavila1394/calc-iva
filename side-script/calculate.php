<?php
    if(isset($_GET['calculate'])){

        $cognome = $_GET['cognome'];
        echo "Cognome ".$cognome."</br>";
        $nome = $_GET['nome'];
        echo "Nome ".$nome."</br>";
        $indirizzo = $_GET['indirizzo'];
        echo "Indirizzo ".$indirizzo."</br>";
        $partitaiva = $_GET['partitaiva'];
        echo "Partitaiva ".$partitaiva."</br>";
        if (strlen($partitaiva) <11)
        {
            echo "<p style='color:red;'> Partitaiva deve averi minimo 11 caratteri <p><br>";
        }
        $imponibile = $_GET['imponibile'];
        echo "Imponibile ".$imponibile. " € </br>";
        $aliquota = $_GET['aliquota'];
        echo "aliquota ".$aliquota." %</br>";
        $temp=($imponibile*$aliquota)/100;
        $prezzoFinale = 0;
        $prezzoFinale = $imponibile + $temp;
        echo "Prezzo finale ".$prezzoFinale." €</br>";
    }
?>