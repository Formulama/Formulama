<!DOCTYPE html>
<head>
    <title>Formulama</title>
    <meta charset="UTF-8">
</head>
<body>
    <form action="informationsPersonnelles.php" method="post">
<!-- 
        <label for="nom"></label>
        <input id="idnom" name="nom" required placeholder="nom sur votre acte de naissance">

        <label for="prenom"></label>
        <input id="idinput" name="prenom" required placeholder="Prénoms">

        <label for="email"></label>
        <input type="email" id="idemail" name="email" required placeholder="Email">

        <label for="dateNaissance">Date de naissance:</label>
        <input type="date" id="idDate" name="dateNaissance">

        <input id="idNomUsage" name="dateNaissance"> -->




        <input id="nom" type="text" value="<?php echo $_POST['nom']?>" placeholder="Nom de votre acte de naissance" name="nom">
        <input id="nomUsage" type="text" value="" placeholder= "Nom de famille" name="nomUsage">
        <input id="prenom" type="text" value="" placeholder= "Prénom" name="prenom">
        <input id="dateNaissance" type="date" value="" placeholder= "Date de naissance" name="dateNaissance">
        <input id="communeNaissance" type="text" value="" placeholder= "Commune ou ville de naissance" name="communeNaissance">
        <input id="codePostalNaissance" type="text" value="" placeholder= "Code postal de la ville de naissance" name="codePostalNaissance">
        <input id="paysNaissance" type="text" value="" placeholder= "Pays de naissance" name="paysNaissance">
        <input id="numeroAdresse" type="text" value="" placeholder= "Numéro de votre adresse" name="numeroAdresse">
        <input id="typeVoieAdresse" type="text" value="" placeholder= "Type de voie" name="typeVoieAdresse">
        <input id="nomVoieAdresse" type="text" value="" placeholder= "Nom de la voie" name="nomVoieAdresse">
        <input id="codePostal" type="text" value="" placeholder= "Code postal" name="codePostal">
        <input id="commune" type="text" value="" placeholder= "Votre ville ou commune" name="commune">
        <input id="pays" type="text" value="" placeholder= "Votre Pays" name="pays">
        <input id="majeur" type="text" value="" placeholder= "" name="majeur">
        <input id="homme" type="text" value="" placeholder= "" name="homme" >
        <input id="femme" type="text" value="" placeholder= "" name="femme">
        <input id="perteIdentite" type="text" value="" placeholder= "" name="perteIdentite">
        <input id="pertePasseport" type="text" value="" placeholder= "" name="pertePasseport">
        <input id="cni" type="text" value="" placeholder= "" name="cni">
        <input id="cniDate" type="text" value="" placeholder= "" name="cniDate" >
        <input id="passeport" type="text" value="" placeholder= "" name="passeport">
        <input id="passeportDate" type="text" value="" placeholder= "" name="passeportDate">
        <input id="datePerte" type="text" value="" placeholder= "" name="datePerte">
        <input id="lieuPerte" type="text" value="" placeholder= "" name="lieuPerte">
        <input id="circonstancesPerte" type="text" value="" placeholder= "" name="circonstancesPerte">
        <input id="delivrePar" type="text" value="" placeholder= "" name="delivrePar">


        <input type="submit">
        <input type="reset">
    </form>
</body>