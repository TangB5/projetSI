
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="dossier.css">
</head>
<body>
    

    <header>
        
        <b class="logo">FSA</b>

       <nav>
       <label for="nav-mob" class="nav-mob"> &#9776; </label> 
       <input type="checkbox" id="nav-mob">
        <ul> 
           <li><a href="accueil.php" >Accueil</a></li>
           <li><a href="" class="active"><div class="dropdown">
            Operations
            <div class="dropdown-content">
              <a href="operation.php">ajouter un item</a>
              <a href="dossier.php" class="active">consulter</a>
            </div>
          </div>
      </a></li>
           <li><a href="propos.html">A propos</a></li>
       </ul>
   </nav>
   </header>
    <section> <h1>departement maths/info</h1> 
    <h2>dossiers</h2>

    

    <div class="lable">
    <div>
        <label for="niveau">Filiere/Niveau</label>
        <input type="number" id="niveau">
     </div>  
    <div>  <label for="annee"> Annee academique</label>
        <input type="number" id="annee">
    </div> 
    <div><label for="type_doc">Type de document</label>
        <input type="text" id="type_doc"> 
    </div>   
       
        
    </div>
        

    <div class="boxes">
       

        <div class="box">
            <div class="sousbox">
                <a href="document.html"><img src="doss.jpg" alt="error"></a>      
                <p>dossiers</p>
            </div>
            <div class="sousbox">
                <a href="document.html"><img src="doss.jpg" alt="error"></a>
                <p>dossiers</p>
            </div>
            <div class="sousbox">
                <a href="document.html"><img src="doss.jpg" alt="error"></a>
                <p>dossiers</p>
            </div>
            <div class="sousbox">
                <a href="document.html"><img src="doss.jpg" alt="error"></a>
                <p>dossiers</p>
            </div>
            
        </div>



        <div class="box">
            <div class="sousbox">
                <a href="document.html"><img src="doss.jpg" alt="error"></a>
                <p>dossiers</p>
            </div>
            <div class="sousbox">
                <a href="document.html"><img src="doss.jpg" alt="error"></a>
                <p>dossiers</p>
            </div>
            <div class="sousbox">
                <a href="document.html"><img src="doss.jpg" alt="error"></a>
                <p>dossiers</p>
            </div>
            <div class="sousbox">
                <a href="document.html"><img src="doss.jpg" alt="error"></a>
                <p>dossiers</p>
            </div>
        </div>





        <div class="box">
            <div class="sousbox">
                <a href="document.html"><img src="doss.jpg" alt="error"></a>
                <p>dossiers</p>
            </div>
            <div class="sousbox">
                <a href="document.html"><img src="doss.jpg" alt="error"></a>
                <p>dossiers</p>
            </div>
            <div class="sousbox">
                <a href="document.html"><img src="doss.jpg" alt="error"></a>
                <p>dossiers</p>
            </div>
            <div class="sousbox">
                <a href="document.html"><img src="doss.jpg" alt="error"></a>
                <p>dossiers</p>
            </div>
        </div>
        <div class="box">
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
   
                    $trans->execute();?>

                    <div class="sousbox">
                        <a href="document.html"><img src="doss.jpg" alt="error"></a>
                        <p><?php echo 'dossier'.$dossier; ?></p>
                   </div>
                <?php
                }
                ?>
        </div>
              
    </div>
</section>
   
    
    <footer>
        <p>&copy; 2023 - All right reserved</p>
    </footer>
</body>
</html>