<?php

    
if(isset($_POST['prenom']) and isset($_POST['nom']) and isset($_POST['email']) and isset($_POST['password']))
{
    if(!empty($_POST['prenom']) and !empty($_POST['nom']) and !empty($_POST['email']) and !empty($_POST['password']))
    {
        try
        {
            global $bdd;
            $bdd = new PDO('mysql:host=localhost;dbname=inscription;charset=utf8', 'root', '');
            
        }
        catch (Exception $e)
        {
                die('Erreur : ' . $e->getMessage());
        }
    $sql1="select * from utilisateur where email='".$_POST['email']."'";
    $reponse = $bdd->query($sql1);
    $donnees = $reponse->fetch();

        if(empty($donnees))
        {   
            $sql2="insert into utilisateur(prenom, nom, email, password) values('".$_POST['prenom']."','".$_POST['nom']."','".$_POST['email']."','".$_POST['password']."')";
            $bdd->exec($sql2);
            echo"<center>Utilisateur ".$_POST['nom']." est ajouté avec succés</center>";
        }
        else
        echo "<center>Utilisateur existe déja !!!</center>";
    } 
}
?>