<?php
$bd= new PDO('mysql:host=localhost;dbname=archivage', 'root', '');
if(isset($_POST['login'])){
    $matricule= $_POST['matricule'];
    $fonction= $_POST['fonction'];

    if ($matricule == '0000') {
        header('Location:http://localhost/tests/projetSI/inscription.php');
    }
    else {
        $sql= ('SELECT matricule_p FROM personnel');
        $exe= $bd->query($sql);

        while ($donnee= $exe->fetch()) {

            if ($matricule= $donnee['matricule_p']) {
                header('Location:http://localhost/tests/projetSI/operation.php');
            }
            else {
                header('location:http://localhost/tests/projetSI/accueil.php');
            }
            }
    }
}
?>