<html>
 <head>
     <link rel="stylesheet" href="style.css">
  <title>PHP Test</title>
 </head>
 <body>
 <main>
        <form action="http://localhost:3000/contact.php" method="post">
<input type="text" name="nom" placeholder="nom">
<input type="text" name="prenom"placeholder="prenom">
<input type="text" name="mail"placeholder="mail">
<input type="tel"name="tel"placeholder="tel">
<input name="adresse"placeholder="adresse">
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
                    break;
                }
                }             
            
                if (strlen($prenom)<3){
                    $Err= "Le prenom doit comporter <b>au moins 3 caractères</b><br>";
                }
                if (strlen($nom)<3){
                    $Err= "Le nom doit comporter <b>au moins 3 caractères</b><br>";
                }  
                if (strlen($adresse)<10){
                    $Err= "Votre addresse doit comporter <b>au moins 10 caractères</b><br>";
                }
                if($point==false){
                    $Err= "Votre email doit comporter un <b>point</b>";                   
                }
                if($aroba==false){
                    $Err= "Votre email doit contenir un <b>'@'</b>";
                }
                if(!$Err)  {
                    print_r($formdata);
                }
              else{
                echo '<div class="alert">'.$Err.'</div>';
              }

             

               
?>
</body>
</html>
