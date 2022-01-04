<html>
 <head>
     <link rel="stylesheet" href="style.css">
  <title>PHP Test</title>
 </head>
 <body>
 <main>
        <form action="http://localhost:3000/contact.php" method="get">
<input type="text" name="nom" placeholder="nom">
<input type="text" name="prenom"placeholder="prenom">
<input type="text" name="mail"placeholder="mail">
<input type="text"name="tel"placeholder="tel">
<input type="text"name="adresse"placeholder="adresse">
<button placeholder="annuler" type="reset">Annuler</button>
<button type="submit"name="submit">Envoyer</button>
        </form>
    </main>
<?php

$nom = $_GET["nom"];
$prenom = $_GET["prenom"];
$mail = $_GET["mail"];
$tel = $_GET["tel"];
$adresse = $_GET["adresse"];
$formdata = [$nom,$prenom,$mail,$tel,$adresse];
$Err = "";
    for($i=0;$i<=4;$i++){
        if (!($formdata[$i])) {
            $Err = "Champs Manquants";
            echo '<div class="alert">'.$Err.'</div>';
            break;
        }
    }
        if(!$Err)  {
            print_r($formdata);
        }

?>
</body>
</html>
