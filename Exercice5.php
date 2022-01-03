<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice5</title>
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

    <title>Exercice5!</title>
  </head>
  <body>
      <?php include("./partial/navbar.php");?>
      <div class="container">
        <h1>Exercice5</h1>

        <?php
        if (!empty($_POST)) {
          if($_POST["message"]) {
            $message = strip_tags($_POST["message"]);
          }
          if($_POST["key"]){
            $key = strip_tags($_POST["key"]);
          }
          if($_POST["encodedMessage"]){
            $encodedMessage = $_POST["encodedMessage"]; 
          }  
          if ((!$key && $message)|| (!key &&$encodageMessage));  {
            $errorMessage= "vous devez rentrer la clef;"
          }    elseif (!$message && ! $encodedMessage $$ $key) {
               $errorMessage= "action non definie";
          }    elseif $message &&  $encodedMessage $$ $key {
                $errorMessage= "trop d'informations";
          }   
          if (!$errorMessage) {
            
          }  
        }
        ?>
      <h3>Système d'encodage de vigenère</h3>
      <p>Vous pouvez entrer un message ou un code et la clef, ATTENTION en majuscule</p>
     
      <div class="alert alert-dismissible alert-danger">
  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
  <h4 class="alert-heading"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Avertissement!</font></font></h4>
  <p class="mb-0"><?php echo $errorMessage ? ></p>
</div>
          
      <form method="POST">
          <div class= "form-group">
          <label for="message">LE MESSAGE</label>
          <textarea name="message" class="form-control border border-3"rows="2"></textarea>
          </div>
          <div class= "form-group">
          <label for="col-form label"for="key">LA CLEF</label>
          <input type="text" class="form-control border border-3" name="key">
          </div>
          <div class= "form-group">
          <label for="encodedMessage">LE CODE</label>
          <textarea name="encodedMessage" class="form-control border border-3"rows="2"></textarea>
          </div>
           <a ref="/Exercice5.php" class="btn btn-primary mt-3 mb-3">ANNULER</a>
            <input type="submit" class="btn btn-primary mt-3 mb-3" value="vigenèriser>
        </form>
      </div>
    <script src="/js/bootstrap.bundle.min.js" ></script>   
  </body>
</html>   

