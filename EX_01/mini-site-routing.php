<!DOCTYPE html>
<html lang="fr">
<html>
<meta charset="utf-8">

<head>
<ul>
      <li> <a href="http://localhost/ISCC/ISCC-2020-J09/EX_01/mini-site-routing.php?page=1">Accueil</a></li>
      <li> <a href="http://localhost/ISCC/ISCC-2020-J09/EX_01/mini-site-routing.php?page=2">Page2</a></li>
      <li> <a href="http://localhost/ISCC/ISCC-2020-J09/EX_01/mini-site-routing.php?page=3">Page3</a></li> 
      <li> <a href="http://localhost/ISCC/ISCC-2020-J09/EX_01/connexion.php?page=connexion">Connexion</a></li> 
      <li> <a href="http://localhost/ISCC/ISCC-2020-J09/EX_01/admin.php?page=admin">Admin</a></li> 
      <br>
    </ul>
</head>

<body>
 <title>mini-site-routing</title> 

<?php

if($_GET["page"]== "1")
    {
        echo "<h1>Accueil</h1>";
    }

if($_GET["page"]== "2")
    {
        echo "<h1>Page 2</h1>";
    }

if($_GET["page"]== "3")
    {
        echo "<h1>Page 3</h1>";
    }
if($_GET["page"]== "connexion")
    {
        echo "<h1>Connexion</h1>";
        include ('connexion.php');
    }

?>

</body>

<footer>
<?php
session_start();
if(isset($_SESSION["id"]))
    {
        echo '<p>Login : ' .$_SESSION["id"]. '</p>';
    }
elseif(!isset($_COOKIE["id"]))
    {
        $_SESSION['id'] = $_POST['login'];
        $_SESSION['mdp'] = $_POST['password'];
    }
else
    {
        header('http://localhost/ISCC/ISCC-2020-J09/EX_01/connexion.php?page=connexion');
    }

?>
</footer>

</html>