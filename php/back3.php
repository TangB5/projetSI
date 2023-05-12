<?php 
$bd= new PDO('mysql:host=localhost;dbname=archivage', 'root', '');
if(isset($_POST['envoyer'])){
    $type= $_POST['document'];
    $dossier= $_POST['dossier'];
    $armoire= $_POST['armoire'];
    $matricule= $_POST['matricule'];

    $sql= ('INSERT INTO `dossier`(`id_dossier`, /*`id_type`, */`id_armoire`, `matricule`) VALUES (:id_dossier, /*:id_type, */:id_armoire, :matricule)');
    $trans=$bd->prepare($sql);
    $trans->bindparam(':id_dossier', $dossier);
    //$trans->bindparam(':id_type', $type);
    $trans->bindparam(':id_armoire', $armoire);
    $trans->bindparam(':matricule', $matricule);
   
    $trans->execute();
}
?>