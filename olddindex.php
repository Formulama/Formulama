<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <title>Formulama</title>
    <!-- <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@300;400;500;600&family=DM+Serif+Display&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css"> -->
</head>
<body>

<div class="form-card">
    <div class="form-header">
        <h1>Formulama</h1>
        <p>Veuillez compléter toutes les informations requises.</p>
    </div>

    <form action="informationsPersonnelles.php" method="post" novalidate>

        <!-- ── Identité ── -->
        <div class="form-section">
            <div class="form-section-title">Identité</div>
            <div class="form-grid">

                <div class="form-group">
                    <label for="nom">Nom (acte de naissance)</label>
                    <input class="form-control" id="nom" type="text"
                           value="<?php echo htmlspecialchars($_POST['nom'] ?? ''); ?>"
                           placeholder="Ex : Dupont" name="nom" required>
                </div>

                <div class="form-group">
                    <label for="nomUsage">Nom d'usage</label>
                    <input class="form-control" id="nomUsage" type="text"
                           placeholder="Nom de famille" name="nomUsage">
                </div>

                <div class="form-group span-2">
                    <label for="prenom">Prénom(s)</label>
                    <input class="form-control" id="prenom" type="text"
                           placeholder="Ex : Stéphanie, Marie, Madelaine" name="prenom" required>
                </div>

                <div class="form-group">
                    <label for="dateNaissance">Date de naissance</label>
                    <input class="form-control" id="dateNaissance" type="date" name="dateNaissance">
                </div>

                <div class="form-group">
                    <label for="homme">Civilité</label>
                    <select class="form-control" id="homme" name="homme">
                        <option value="" disabled selected>Choisir…</option>
                        <option>Homme</option>
                        <option>Femme</option>
                    </select>
                </div>

            </div>
        </div>

        <!-- ── Naissance ── -->
        <div class="form-section">
            <div class="form-section-title">Lieu de naissance</div>
            <div class="form-grid">

                <div class="form-group">
                    <label for="communeNaissance">Commune / Ville</label>
                    <input class="form-control" id="communeNaissance" type="text"
                           placeholder="Ex : Paris" name="communeNaissance">
                </div>

                <div class="form-group">
                    <label for="codePostalNaissance">Code postal</label>
                    <input class="form-control" id="codePostalNaissance" type="text"
                           placeholder="Ex : 75001" name="codePostalNaissance" maxlength="10">
                </div>

                <div class="form-group span-2">
                    <label for="paysNaissance">Pays de naissance</label>
                    <input class="form-control" id="paysNaissance" type="text"
                           placeholder="Ex : France" name="paysNaissance">
                </div>

            </div>
        </div>

        <!-- ── Adresse ── -->
        <div class="form-section">
            <div class="form-section-title">Adresse actuelle</div>
            <div class="form-grid">

                <div class="form-group">
                    <label for="numeroAdresse">Numéro</label>
                    <input class="form-control" id="numeroAdresse" type="text"
                           placeholder="Ex : 12" name="numeroAdresse">
                </div>

                <div class="form-group">
                    <label for="typeVoieAdresse">Type de voie</label>
                    <select class="form-control" id="typeVoieAdresse" name="typeVoieAdresse">
                        <option value="" disabled selected>Choisir…</option>
                        <option>Rue</option>
                        <option>Avenue</option>
                        <option>Boulevard</option>
                        <option>Allée</option>
                        <option>Impasse</option>
                        <option>Place</option>
                        <option>Chemin</option>
                        <option>Route</option>
                    </select>
                </div>

                <div class="form-group span-2">
                    <label for="nomVoieAdresse">Nom de la voie</label>
                    <input class="form-control" id="nomVoieAdresse" type="text"
                           placeholder="Ex : de la République" name="nomVoieAdresse">
                </div>

                <div class="form-group">
                    <label for="codePostal">Code postal</label>
                    <input class="form-control" id="codePostal" type="text"
                           placeholder="Ex : 69002" name="codePostal" maxlength="10">
                </div>

                <div class="form-group">
                    <label for="commune">Ville / Commune</label>
                    <input class="form-control" id="commune" type="text"
                           placeholder="Ex : Lyon" name="commune">
                </div>

                <div class="form-group span-2">
                    <label for="pays">Pays</label>
                    <input class="form-control" id="pays" type="text"
                           placeholder="Ex : France" name="pays">
                </div>

            </div>
        </div>

        <!-- ── Documents d'identité ── -->
        <div class="form-section">
            <div class="form-section-title">Documents d'identité</div>
            <div class="form-grid">
                <div class="form-group span-2">                   
                <div class="form-group">
                    <label for="perteIdentite">Document perdu</label>
                    <select class="form-control" id="perteIdentite" name="perteIdentite">
                        <option value="" disabled selected>Choisir…</option>
                        <option>CNI</option>
                        <option>Passeport</option>
                    </select>
                </div>
            </div>

                <div class="form-group">
                    <label for="documentNumero">N° document</label>
                    <input class="form-control" id="documentNumero" type="text"
                           placeholder="Ex : 12AB34567" name="documentNumero">
                </div>

                <div class="form-group">
                    <label for="documentDate">Date de délivrance</label>
                    <input class="form-control" id="documentDate" type="date" name="documentDate">
                </div>
                

                
                <div class="form-group">
                    <label for="datePerte">Date de perte</label>
                    <input class="form-control" id="datePerte" type="date" name="datePerte">
                </div>
                
                <div class="form-group">
                    <label for="lieuPerte">Lieu de perte</label>
                    <input class="form-control" id="lieuPerte" type="text"
                    placeholder="Ex : Gare de Lyon" name="lieuPerte">
                </div>
                
                <div class="form-group span-2">
                    <label for="circonstancesPerte">Circonstances de la perte</label>
                    <textarea class="form-control" id="circonstancesPerte"
                    placeholder="Décrivez brièvement les circonstances…"
                    name="circonstancesPerte"></textarea>
                </div>
                
                <div class="form-group span-2">
                    <label for="delivrePar">Délivré par</label>
                    <input class="form-control" id="delivrePar" type="text"
                    placeholder="Ex : Préfecture du Rhône" name="delivrePar">
                </div>
                
            </div>
        </div>

//boutons
        <div class="form-actions">
            <button type="reset"  class="btn btn-secondary">Réinitialiser</button>
            <button type="submit" class="btn btn-primary">Envoyer le formulaire</button>
        </div>

    </form>
</div>

</body>
</html>