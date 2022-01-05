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
$point = strpos($mail,".");
$aroba = strpos($mail,"@");;
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
                if (strlen($prenom)<3){
                    echo "Le prenom doit comporter <b>au moins 3 caractères</b><br>";
                }
                if (strlen($nom)<3){
                    echo "Le nom doit comporter <b>au moins 3 caractères</b><br>";
                }  
                if (strlen($adresse)<10){
                    echo "Votre addresse doit comporter <b>au moins 10 caractères</b><br>";
                }
                if($point==false){
                    echo "Votre email doit comporter un <b>point</b>";                   
                }
                if($aroba==false){
                    echo "Votre email doit contenir un <b>'@'</b>";
                }
              

               
?>
</body>
</html>
