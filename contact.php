<html>
 <head>
     <link rel="stylesheet" href="style.css">
  <title>PHP Test</title>
 </head>
 <body>
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
