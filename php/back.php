<?php
$bd= new PDO('mysql:host=localhost;dbname=archivage', 'root', '');
if(isset($_POST['envoyer'])){
    $matricule= $_POST['matricule'];
    $nom= $_POST['nom'];
    $prenom= $_POST['prenom'];
    $email= $_POST['email'];
    $numero= $_POST['numero'];
    $fonction= $_POST['fonction'];


    $requete = ('INSERT INTO `personnel`(`matricule_p`, `nom`, `prenom`, `email`, `numero`, `fonction`) VALUES (:matricule, :nom, :prenom, :email, :numero, :fonction)');
    $transmission= $bd->prepare($requete);
    $transmission->bindparam(':matricule', $matricule);
    $transmission->bindparam(':nom', $nom);
    $transmission->bindparam(':prenom', $prenom);
    $transmission->bindparam(':numero', $numero);
    $transmission->bindparam(':email', $email);
    $transmission->bindparam(':fonction', $fonction);

    $transmission->execute();

    echo '<h1 style="color: blue;"><center>Effectué</center></h1>';
}
?>