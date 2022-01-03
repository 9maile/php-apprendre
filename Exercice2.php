<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice2</title>
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

    <title>Exercice2</title>
  </head>
  <h3>Décoder des messages</h3>
        <p>les messages à décoder</p>
        <?php
        $message1 = "0@sn9sirppa@#?ia'jgtvryko1";
        $message2 = "q8e?wsellecif@#?sel@#?setuotpazdsy0*b9+mw@x1vj";
        $message3 = "aopi?sgnirts@#?sedhtg+p9l!";
        ?>            
        <ul>
            <li>message 1 : <?php echo $message1; ?></li>
            <li>message 2 : <?php echo $message2; ?></li>
            <li>message 3 : <?php echo $message3; ?></li>
        </ul>
        <p>comment proceder?</p>
        <ol>
            <li>Calculer la longueur de la chaîne et la diviser par 2, tu obtiendras ainsi le "chiffre-clé".</li>
            <li>Récupère ensuite la <a href="https://www.php.net/manual/fr/function.substr.php">sous-chaîne</a> de la longueur du chiffre-clé en commençant à partir du 6ème caractère.</li>
            <li>Remplace les chaînes '@#?' par un espace.</li>
            <li>Pour finir, inverse la chaîne de caractères.</li>
        </ol>
        <?php
        /**
         * pour la division, un code à tester:
         * $number = 50;
         * $result = 50 / 2;
         * echo $result;
         */

        //Key's research
        $key=strlen($message1)/2;
        //substring's research
        $subString = substr($message1, 5, $key);
        //@#? replaced by space
        $messageWithSpaces = str_replace("@#?", " ",$subString);
        //string's reverse
        $decodeMessage1 = strrev($messageWithSpaces);


        
        
        $key=strlen($message2)/2;
        $subString = substr($message2, 5, $key);
        $messageWithSpaces = str_replace("@#?", " ",$subString);
        $decodeMessage2 = strrev($messageWithSpaces);

        
        
        $key=strlen($message3)/2;
        $subString = substr($message3, 5, $key);
        $messageWithSpaces = str_replace("@#?", " ",$subString);
        $decodeMessage3 = strrev($messageWithSpaces);

        
        ?>
        <p>résultats:</p>
        <p>message1: <?php echo $decodedMessage1 ?><br>
            message2: <?php echo $decodedMessage2 ?><br>
            message3: <?php echo $decodedMessage3 ?><br 
  <body>
      <?php include("./partial/navbar.php");?>
      <div class="container">
      <h1>La page est vide!</h1>
      </div>
    

   
    <script src="/js/bootstrap.bundle.min.js" ></script>

    
  </body>
</html>   

