<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // menu
    $menu = [
        [
            "type" => "divider",
            "nom" => "ACCUEIL",
            "lien" => "#",
            "icone" => "",
            "smenu" => [],
        ],
        [
            "type" => "lien",
            "nom" => "Dashboard",
            "lien" => "home",
            "icone" => "speedometer",
            "smenu" => [],
        ],
        [
            "type" => "divider",
            "nom" => "TRAITEMENTS",
            "lien" => "#",
            "icone" => "",
            "smenu" => [],
        ],
        [
            "type" => "lien",
            "nom" => "FACTURES",
            "lien" => "#",
            "icone" => "receipt",
            "smenu" => [
                ["titre" => "Liste des factures", "nom" => "Liste des factures", "lien" => "factures-liste", "parent" => "FACTURES", "groupe" => "TRAITEMENTS", "selected" => "true"],
                ["titre" => "Importer facture", "nom" => "Importer facture", "lien" => "factures-importer", "parent" => "FACTURES", "groupe" => "TRAITEMENTS", "selected" => "true"],
                ["titre" => "Gestion des importations", "nom" => "Gestion des importations", "lien" => "factures-gestion-import", "parent" => "FACTURES", "groupe" => "TRAITEMENTS", "selected" => "true"],
                ["titre" => "Gestion des rejets", "nom" => "Gestion des rejets", "lien" => "factures-gestion-rejet", "parent" => "FACTURES", "groupe" => "TRAITEMENTS", "selected" => "true"],
                
            ],
        ],
        [
            "type" => "lien",
            "nom" => "PAIEMENTS",
            "lien" => "#",
            "icone" => "cash-coin",
            "smenu" => [
                ["titre" => "Liste des paiements", "nom" => "Liste des paiements", "lien" => "paiements-liste", "parent" => "PAIEMENTS", "groupe" => "TRAITEMENTS", "selected" => "true"],
                ["titre" => "Importer paiement", "nom" => "Importer paiement", "lien" => "paiements-importer", "parent" => "PAIEMENTS", "groupe" => "TRAITEMENTS", "selected" => "true"],
                ["titre" => "Gestion des importations", "nom" => "Gestion des importations", "lien" => "paiements-gestion-import", "parent" => "PAIEMENTS", "groupe" => "TRAITEMENTS", "selected" => "true"],
                ["titre" => "Gestion des rejets", "nom" => "Gestion des rejets", "lien" => "paiements-gestion-rejet", "parent" => "PAIEMENTS", "groupe" => "TRAITEMENTS", "selected" => "true"],
            ],
        ],
        [
            "type" => "lien",
            "nom" => "VALIDATIONS",
            "lien" => "paiements-validation",
            "icone" => "check2-square",
            "smenu" => [],
        ],

        [
            "type" => "lien",
            "nom" => "EDITION",
            "lien" => "#",
            "icone" => "pencil-square",
            "smenu" => [
                ["titre" => "Editer paiements", "nom" => "Editer paiements", "lien" => "edition-paiements", "parent" => "EDITION", "groupe" => "TRAITEMENTS", "selected" => "true"],
                ["titre" => "Reéditer/Annuler", "nom" => "Rééditer ou annuler paiements", "lien" => "edition-paiements-2", "parent" => "EDITION", "groupe" => "TRAITEMENTS", "selected" => "true"],
                
            ],
        ],
        [
            "type" => "lien",
            "nom" => "REPORTING",
            "lien" => "#",
            "icone" => "clipboard-data",
            "smenu" => [
                ["titre" => "Etats basiques", "nom" => "Etats basiques", "lien" => "report-etat", "parent" => "REPORTING", "groupe" => "TRAITEMENTS", "selected" => "true"],
                ["titre" => "Etude analytique", "nom" => "Etude analytique", "lien" => "report-axe", "parent" => "REPORTING", "groupe" => "TRAITEMENTS", "selected" => "true"],
            ],
        ],
        [
            "type" => "divider",
            "nom" => "PARAMETRAGE",
            "lien" => "#",
            "icone" => "",
            "smenu" => [],
        ],
        [
            "type" => "lien",
            "nom" => "ELEMENTS",
            "lien" => "#",
            "icone" => "grid-fill",
            "smenu" => [
                ["titre" => "Société", "nom" => "Société", "lien" => "param-societe", "parent" => "ELEMENTS", "groupe" => "PARAMETRAGE", "selected" => "true"],
                ["titre" => "Banque", "nom" => "Banque", "lien" => "param-banque", "parent" => "ELEMENTS", "groupe" => "PARAMETRAGE", "selected" => "true"],
                ["titre" => "Compte", "nom" => "Compte", "lien" => "param-compte", "parent" => "ELEMENTS", "groupe" => "PARAMETRAGE", "selected" => "true"],
                ["titre" => "Flux", "nom" => "Flux", "lien" => "param-flux", "parent" => "ELEMENTS", "groupe" => "PARAMETRAGE", "selected" => "true"],
                ["titre" => "Budget", "nom" => "Budget", "lien" => "param-budget", "parent" => "ELEMENTS", "groupe" => "PARAMETRAGE", "selected" => "true"],
                ["titre" => "Axes analytiques", "nom" => "Axes analytiques", "lien" => "param-axes", "parent" => "ELEMENTS", "groupe" => "PARAMETRAGE", "selected" => "true"],

            ],
        ],
        [
            "type" => "lien",
            "nom" => "FICHIERS",
            "lien" => "#",
            "icone" => "file-earmark-zip-fill",
            "smenu" => [
                ["titre" => "Importation des factures", "nom" => "Importation des factures", "lien" => "param-file-facture", "parent" => "FICHIERS", "groupe" => "PARAMETRAGE", "selected" => "true"],
                ["titre" => "Importation des paiements", "nom" => "Importation des paiements", "lien" => "param-file-paiement", "parent" => "FICHIERS", "groupe" => "PARAMETRAGE", "selected" => "true"],
                ["titre" => "Action à l'importation", "nom" => "Action à l'importation", "lien" => "param-file-correspondance", "parent" => "FICHIERS", "groupe" => "PARAMETRAGE", "selected" => "true"],
                ["titre" => "Structure d'exportation", "nom" => "Structure d'exportation", "lien" => "param-file-exportation", "parent" => "FICHIERS", "groupe" => "PARAMETRAGE", "selected" => "true"],

            ],
        ]
    ];
    echo json_encode($menu, JSON_UNESCAPED_UNICODE);
    // var_dump($jsmenu);
    ?>
</body>

</html>