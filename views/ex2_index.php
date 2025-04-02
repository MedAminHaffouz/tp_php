<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php
     require '../classes/ex2/Session.php';
     $varSess=new Session();
      $varSess->updatevisits();
      if($varSess->showSessions()==1){
        echo "Bienvenu à notre plateforme";
      }
      else{
        echo "Merci pour votre fidélité,c’est votre ".$varSess->showSessions()." éme visite.";
      }
      if (isset($_GET['reset'])) {
        $varSess->destroy();  
        header("Location: ex2_index.php");
    }
    ?>
    <a href="?reset=true"><button>Reset Session</button></a>

</body>
</html>