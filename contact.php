<html>
 <head>
     <link rel="stylesheet" href="style.css">
  <title>PHP Test</title>
 </head>
 <body>
 <main>
        <form action="http://localhost:3000/contact.php" method="post">
<input minlength="3"type="text" name="nom" placeholder="nom">
<input type="text" name="prenom"placeholder="prenom">
<input type="text" name="mail"placeholder="mail">
<input maxlenght="10" minlength="10"pattern="[0-9]{1-10}" type="tel"name="tel"placeholder="tel">
<input minlength="10" name="adresse"placeholder="adresse">
<button placeholder="annuler" type="reset">Annuler</button>
<button type="submit"name="submit">Envoyer</button>
        </form>
    </main>
<?php

$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
$mail = $_POST["mail"];
$point = strpos($email,".");
$aroba = strpos($email,"@");
$tel = $_POST["tel"];
$adresse = $_POST["adresse"];
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

                if($point==''){
                    echo "Votre email doit comporter un <b>point</b>";
                    
                }
                elseif($aroba==''){
                    echo "Votre email doit contenir un <b>'@'</b>";
                    
                }
                else {
                    echo "Votre email est valide";
                }

?>
</body>
</html>
