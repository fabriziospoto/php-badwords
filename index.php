<!-- Creare una variabile con un paragrafo di testo.
Visualizzare a schermo il paragrafo con la relativa
lunghezza e sostituire la badword passata in GET con tre *. -->

<?php
// Creo variabile testo
$text = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt. Ut quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
// Creo variabile lunghezza con strlen
$lunghezza = strlen($text);

//Creo variabile GET per badword
$badword = $_GET['badword'];
//Sostituisco badword con asterischi
$replace = str_replace($badword, '***', $text);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>php-badwords</title>
    </head>
    <body>
        <!-- Stampo a schermo variabile testo normale, lunghezza e variabile testo con asterischi -->
        <p><?php echo $text?></p>
        <p><?php echo $lunghezza?></p>
        <p><?php echo $replace?></p>
    </body>
</html>
