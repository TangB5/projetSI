<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="inscription.css">
</head>
<body>
    <!-- voici le code html de notre page d acceuil -->
    <header>
        
         <b class="logo">FSA</b>

        <nav>
        <label for="nav-mob" class="nav-mob"> &#9776; </label> 
        <input type="checkbox" id="nav-mob">
         <ul> 
            <li><a href="#" class="active">inscription</a></li>
            <li><a href="dashboard.html">Dashboard</a></li>
            <!-- <li><a href="dossier.html">Dossier</a></li>
            <li><a href="operation.html">Operation</a></li>
            <li><a href="propos.html">A propos</a></li> -->
        </ul>
    </nav>
        </header>
    <section>
<h1>DEPARTEMENT MATHS/INFOS</h1>
<fieldset>
    <legend>VOS INFOS</legend>
    <div>
    <form action="php/back.php" method="post">
<label for="matricule" value="matricule">MATRICULE :</label>
<input type="text" id="matricule" name="matricule" required="required"><br /><br />

<label for="nom" value="nom">NOM :</label>
<input type="text" id="nom" name="nom" required="required"><br /><br />

<label for="prenom" value="prenom">PRENOM :</label>
<input type="text" id="prenom" name="prenom" required="required"><br /><br />

<label for="email" value="email">E-MAIL :</label>
<input type="email" id="email" name="email" required="required"><br /><br />

<label for="numero" value="numero">NUMERO :</label>
<input type="number" id="numero" name="numero" required="required"><br /><br />

<label for="fonction" value="fonction">FONCTION :</label>
<input type="fonctio" id="fonction" name="fonction" required="required"><br /><br />

DEPARTEMENT :<select name="fonction" id="">
    <option value="">
        MATHEMATIQUE
    </option>
    <option value="">
        INFORMATIQUE
    </option>
</select><br /><br />

<div class="btn">
<input type="submit" value="ENVOYER" name="envoyer" class="btnENVOI">

</div>

    </form>
</div>

</fieldset>

    </section>
    <footer>
        <p>&copy; 2023 - All right reserved</p>
        <!--thank you-->
    </footer>
</body>
</html>