
<?php
// Initialiser la session
session_start();
 
// Vérifiez si l'utilisateur est connecté, sinon le redirige à la page de connexion
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>



<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Crossy Road</title>
  <link rel="stylesheet" href="../CSS/pierrito1.css">
  <link rel="icon" href="./favicon.ico">

  <script src="https://kit.fontawesome.com/622afd0c30.js"></script>

</head>
<body>
<div id="counter">0</div>
    
<div id="controls">
  <div>
    <button id="forward">
      <svg width="30" height="30" viewBox="0 0 10 10">
        <g transform="rotate(0, 5,5)">
          <path d="M5,4 L7,6 L3,6 L5,4" />
        </g>
      </svg>
    </button>
    <button id="left">
      <svg width="30" height="30" viewBox="0 0 10 10">
        <g transform="rotate(-90, 5,5)">
          <path d="M5,4 L7,6 L3,6 L5,4" />
        </g>
      </svg>
    </button>
    <button id="backward">
      <svg width="30" height="30" viewBox="0 0 10 10">
        <g transform="rotate(180, 5,5)">
          <path d="M5,4 L7,6 L3,6 L5,4" />
        </g>
      </svg>
    </button>
    <button id="right">
      <svg width="30" height="30" viewBox="0 0 10 10">
        <g transform="rotate(90, 5,5)">
          <path d="M5,4 L7,6 L3,6 L5,4" />
        </g>
      </svg>
    </button>
  </div>
</div>

<div id="end">
  <button id="retry">Retry</button>
</div>

  <script src='https://cdnjs.cloudflare.com/ajax/libs/three.js/99/three.min.js'></script>
  <script  src="../JAVASCRIPT/pierrito.js"></script>

</body>
</html>