
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Basic PHP Calculator</title>
        <meta charset="utf-8">
        <meta name="author" content="itshally">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    </head>
    
    <body>
        
        <div class="container-fluid d-flex justify-content-center">
            <form action="index.php" method="get">
                        <p>Inserire i dati, calcolare il prezzo e stampare la fattura </p>

                        <label>Cognome*(Inserire senza spazi) </label>
                        <input type="text" name="cognome" placeholder="Inserisci Cognome..." required >
                        <br>
                        <label>Nome*(Inserire senza spazi) </label>
                        <input type="text" name="nome" placeholder="Inserisci Nome..." required >
                        <br>
                        <label>Indirizzo </label>
                        <input type="text" name="indirizzo" placeholder="Inserisci indirizzo...">
                        <br>
                        <label>Partita IVA*(numerico e lunghezza 11 caratteri) </label>
                        <input type="number" name="partitaiva" placeholder="P.IVA" required >
                        <br>
                        <label>Imponibile (numerico e senza la virgola) </label>
                        <input type="number" name="imponibile" placeholder="Imponibile" required >
                        <br>
                        <label>Aliquota </label>
                        <select  name="aliquota" required >
                            <option selected>Seleziona aliquota</option>
                            <option name="aliquota" value="4">4</option>
                            <option name="aliquota" value="10">10</option>
                            <option name="aliquota" value="22">22</option>
                        </select>
                        <button type="submit" name="calculate" >Stampa fattura</button>
                       <br>
                       Fattura N.000001
                        <p>
                            <?php
                                include('side-script/calculate.php');
                            ?>
                        </p>                
                        
            </form>
         </div> 
    </body>
</html>