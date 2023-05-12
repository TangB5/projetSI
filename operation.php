<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="operation.css">
</head>
<body>
    <!-- voici le code html de notre page d acceuil -->
    <header>
        
         <b class="logo">FSA</b>

        <nav>
        <label for="nav-mob" class="nav-mob"> &#9776; </label> 
        <input type="checkbox" id="nav-mob">
         <ul> 
            <li><a href="accueil.php" >Accueil</a></li>
            <li><a href=""><div class="dropdown">
                Operations
                <div class="dropdown-content">
                  <a href="#">ajouter un item</a>
                  <a href="dossier.php">consulter</a>
                </div>
              </div>
          </a></li>
            </li>
            <li><a href="propos.html">A propos</a></li>
        </ul>
    </nav>
        </header>
    <section>
<h1>DEPARTEMENT MATHS/INFOS</h1>
<h2>ARCHIVAGE</h2>
<fieldset>
    <legend>VOS INFOS</legend>
    <div>
    <form action="dossier.php" method="post">
<label for="departement" value="departement">DEPARTEMENT :</label>
<input type="text" id="departement" required="required"><br /><br />

<label for="document" value="document">TYPE DOCUMENT :</label>
<input type="text" id="document" name="document" required="required"><br /><br />

<label for="dossier" value="dossier">ID DOSSIER :</label>
<input type="text" id="dossier" name="dossier" required="required"><br /><br />

<label for="earmoire" value="earmoire">ID ARMOIR :</label>
<input type="text" id="earmoire" name="armoire" required="required"><br /><br />

<label for="matricule" value="matricule">MATRICULE :</label>
<input type="text" id="matricule" name="matricule" required="required"><br /><br />


<div class="btn">
<input type="submit" value="ENVOYER" name="envoyer" class="btnENVOI">
<input type="reset" value="ANNULER" class="btnANNUL">
</div>

    </form>
</div>

</fieldset>

    </section>
    <footer>
        <p>&copy; 2023 - All right reserved</p>
    </footer>
</body>
</html>