<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">

    <title>Page de test php</title>
  </head>
  <body>
      <?php include("./partial/navbar.php");?>
      <div class="container">
      <h1>Page de test</h1>

      <pre>
        Résultats php
        ==================================================================

          <?php  
          //make a Vigenère's table with 3 letters
          $alphabet = "ABC";
          $alphabetTab = str_split ($alphabet);
          $doubleAlphabetTab = array_merge($alphabetTab, $alphabetTab);
          $sizeAlphabet = count($alphabetTab);

          //for($i =0; $i<$sizeAlphabet; $i++){
            //for ($j = 0; $j <$sizeAlphabet; $j++){
           //   $tabVigenere[$i] [$j] = $doubleAlphaTab[$j+$i];
         //   }
         // }

         for($i =0; $i<$sizeAlphabet; $i++){
           for ($j = 0; $j <$sizeAlphabet; $j++){
               $line = $alphabetTab[$i];
               $column = $alphabetTab[$j];
               $tabVigenere[$line][$column] = $doubleAlphabetTab [$i+$j];        
           }
         }

          var_dump($tabVigenere);
          ?>



     </pre>
      </div>   
    <script src="/js/bootstrap.bundle.min.js" ></script>    
  </body>
</html>   

