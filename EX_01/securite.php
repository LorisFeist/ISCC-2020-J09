<?php

session_start();

$lien="<a href='http://localhost/ISCC/ISCC-2020-J09/EX_01/connexion.php?page=connexion'>ici</a>";
$lien2="<a href='http://localhost/ISCC/ISCC-2020-J09/EX_01/mini-site-routing.php?page=1'>ici</a>";


if ($_SERVER["REQUEST_METHOD"] == "POST")
{
$login = $_POST['Login'];
$mdp = $_POST['Password'];

setcookie("cookie", $_SESSION['id'], time();

if(empty($login) and empty($mdp))
    {
        echo "<p>Aucunes données reçues.</p>";
    }
elseif($mdp !== "2020")
    {
        echo "<h1>Mauvais couple identifiant/mot de passe</h1>";
        echo "<p>Vous allez être redirigé vers la page de connexion.</p>";
        echo "<p>Cliquez $lien pour revenir sur la page de connexion.";
    }
    
else 
    {
        $_SESSION['id']=$_POST['Login'];
        echo "<p>Vous allez être redirigé vers la page d'accueil.</p>";
        echo "<p>Cliquez $lien2 pour revenir sur la page d'accueil.";
    }

}
?>