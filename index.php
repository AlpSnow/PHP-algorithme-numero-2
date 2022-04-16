<h4>1</h4>
<!-- Fonction personnalisée convertirMajRouge() permettant de transformer une chaîne de caractère passée en argument en majuscules et en rouge. -->


<?php

    $texte = "mon texte en paramètre";

    function convertirMajRouge($parametreFonctionExo1){
        return "<span style=\"color:red;\">".mb_strtoupper($parametreFonctionExo1)."</span>";
    }

    echo convertirMajRouge($texte);

// strtoupper($nomDeMonTexte);     -> on met le texte en majuscule   ; mb_strtoupper fait pareil avec 100% de l'alphabet (ex é ou ê)
// echo '<span style="color:red;">Mon texte</span>';     ->   écriture avec '
// echo "<span style=\"color:red;\">Mon texte</span>";   ->   écriture avec " et des échapées 

?>


<h4>2</h4>
<!-- Algorithme permettant d’afficher un tableau associatif (clé => valeur) puis de trier les clé par ordre alphabétique  -->

<style>
    table, td, th{
        background: #fff; 
        border: 1px solid black;
        border-collapse: collapse;
        text-align: center;
        height: 40px;
        table-layout: fixed;
        width: 135px;
        
    }
</style>
<!-- Le style a été directement incorporé ici afin de ne pas surcharger le dossier pour quelques lignes de code. Evidemment ce n'est pas dans les conventions et cela ne se fait pas habituellement. -->

<?php

    $tableauCapitales = ["France" => "Paris", "Allemagne" => "Berlin", "USA" => "Washington", "Italie" => "Rome"];

    function afficherTableauHTML($parametreFonctionExo2){
        ksort($parametreFonctionExo2);
        echo "<table>";
        // echo "<table style=\"background: #fff; border: 1px solid black;\">";
        // echo '<table style="background: #fff; border: 1px solid black;">';
        
        foreach($parametreFonctionExo2 as $pays => $capitale){
            echo "<tr> <td>" . strtoupper($pays). "</td> ";
            echo "<td>" . ($capitale). "</td> </tr> ";
        }
        
        echo "</table>";
    }




    afficherTableauHTML($tableauCapitales);

?>


<!-- ksort($parametreFonctionExo2);  : trier par ordre alphabétique via la clé
asort($parametreFonctionExo2);  : trier par ordre alphabétique via la valeur  -->



<h4>3</h4>
<!-- Lien hypertexte permettant d’accéder à n’importe quel site web. Le lien s’ouvre dans un nouvel onglet afin de garder la page actuelle sur le navigateur de l’utilisateur -->


<a href="https://elan-formation.eu/" target="_blank">Lien vers le site d'elan formation</a> <br>

<!-- autre version : -->
<a href="https://elan-formation.eu/" onclick="window.open(this.href); return false;">Lien vers le site d'elan formation</a>


<h4>4</h4>
<!-- Même algorithme que le numéro 2, en ajoutant une colonne supplémentaire dans le tableau HTML qui contiendra le lien hypertexte de la page Wikipédia en question (ici de la capitale) -->

<?php

    $tableauCapitalesEx4 = ["France" => "Paris", "Allemagne" => "Berlin", "USA" => "Washington", "Italie" => "Rome", "Espagne" => "Madrid"];



    function afficherTableauEx4($parametre){
        asort($parametre);
        echo "<table>";

    
        foreach($parametre as $pays => $capitale){
            echo "<tr> <td>" . mb_strtoupper($pays). "</td> ";
            echo "<td>" . ($capitale). "</td>";
            echo "<td><a target='_blank' href='https://fr.wikipedia.org/wiki/".$capitale."'>Lien vers page wikipédia</a></td></tr>";
        }
    
        echo "</table>";
    }


    afficherTableauEx4($tableauCapitalesEx4);
//le style est deja fait dans l'exercice 2
?>


<h4>5</h4>
<!-- Fonction personnalisée permettant de créer un formulaire de champs de texte en précisant le nom des champs associés -->

<?php

    $nomsInformationsPersonne = ["Nom", "Prénom", "Ville", "Téléphone"];

    function remplirChamp($parametre){
        foreach($parametre as $valeur):
            echo "<label for='$valeur'>" .$valeur. "<br>",
                     "<input type='text' name'$valeur' id='$valeur'> <br><br>",
                 "</label>";
        endforeach;
    }

    remplirChamp($nomsInformationsPersonne);
?>

<p>5 (autre version)</p>

<?php


    $nomsInput = ["Nom", "Prénom", "Ville", "Téléphone"];

    function afficherInputs($inputs){

        foreach($inputs as $input){
            echo "<p>",
                    "<label for='11$input'>", $input, "<br>",
                        "<input type='text' name='".mb_strtolower($input)."' id='11$input'>",
                    "</label>",
                "</p>";
        }
    }

    afficherInputs($nomsInput);
?>


<h4>6</h4>
<!-- Fonction personnalisée permettant de remplir une liste déroulante à partir d'un tableau de valeurs -->

<?php

    $listeElements = ["Monsieur", "Madame", "Mademoiselle"];

    function alimenterListeDeroulante($parametre){
        echo "<select>";
        foreach($parametre as $valeur){
            echo "<option value=''>" .$valeur. "</option>";
            }
        echo "</select>";
    }


    alimenterListeDeroulante($listeElements);


?>



<h4>7</h4>
<!-- Fonction personnalisée permettant de générer des cases à cocher. Il est précisé dans le tableau associatif si la case est cochée ou non -->

<?php

    $elements = ["key1" => "choix 1", "key2" => "choix 2", "key3" => "choix 3"];
    
    function genererCheckbox($parametre){
        foreach($parametre as $cle => $valeur):
            echo "<label for='lier$cle'>" .$valeur,
            "<input type='checkbox' name='' id='lier$cle'> </label> <br>";
        endforeach;
    }


    genererCheckbox($elements);


?>

<h4>8</h4>
<!-- Fonction personnalisée permettant d’afficher une image N fois à l’écran -->

<?php

    
  

    $urlmaSuperImage = "http://my.mobirise.com/data/userpic/764.jpg";

    function repeterImage($monURL, $nbFois){
        
        for ($index= 0; $index < $nbFois; $index++)
        echo "<img src='".$monURL."'/>";
    }

    repeterImage($urlmaSuperImage,4);

 
?>

<h4>9</h4>
<!-- Fonction personnalisée permettant d’afficher des boutons radio avec un tableau de valeurs en paramètre ("Monsieur", "Madame", "Mademoiselle") -->

<?php

    $civiliteDeLaPersonne = ["choix1" => "Monsieur", "choix2" => "Madame", "choix3" => "Mademoiselle"];

    function afficherRadio($parametre){
        foreach($parametre as $cle => $valeur):

            echo "<input type='radio' name='' id='input$cle'>",
            "<label for='input$cle'>" .$valeur. "</label> <br>";

        endforeach;    
    } 

    afficherRadio($civiliteDeLaPersonne);


?>

<h4>10</h4>
<!-- Création d’un formulaire complet à partir de fonctions personnalisées. Le formulaire comporte un bouton permettant de le soumettre à un traitement de validation -->

<?php 

    $informationDeLaPersonne = ["Nom", "Prénom", "Adresse e-mail", "ville", "sexe"];
    $intituleFormation = ["Développeur Logiciel", "Designer web", "Intégrateur", "Chef de projet"];


    function formulaireComplet($parametre, $parametre2){ 
        echo "<form>";
        foreach($parametre as $valeur){
            echo "<p>",
                    "<label for='22$valeur'>", $valeur, "<br>",
                        "<input type='text' name='".mb_strtolower($valeur)."' id='22$valeur'>",
                    "</label>",
                "</p>";
        }
        echo "<select>";
        foreach($parametre2 as $valeur){
            echo "<option value='".mb_strtolower($valeur)."'>" .$valeur. "</option>";
            }
        echo "</select> <br> <br>";
        echo "<input type='submit' name='' value='Valider vos informations' class='searchBtn'>"; 
        echo "</form>";
    }

    formulaireComplet($informationDeLaPersonne, $intituleFormation);
?>


<h4>11</h4>
<!-- Fonction personnalisée qui affiche une date en français (en toutes lettres) à partir d’une chaîne de caractère représentant une date -->


<?php

    $maDateAconvertir = "2018-02-23";

    function formaterDateFr($parametre){
        setlocale(LC_TIME, ["fr.UTF-8", "fra", "fr_FR"]);

        $dateConvertirFormat = strtotime($parametre);
        $dateFinalFr = strftime("%A %d %B %Y", $dateConvertirFormat);
        return $dateFinalFr;
    }


    echo formaterDateFr($maDateAconvertir);


?>


<h4>12</h4>
<!-- Algorithme permettant d’afficher les informations de plusieurs variables (de différents types) contenues dans un tableau -->

<?php

    $tableauValeurs = [true, "texte", 10, 25.369, ["valeur1", "valeur2"]];
    // un tableau dans un tableau s'appel un tableau multidimensionnels

    foreach($tableauValeurs as $valeurs){
        echo var_dump($valeurs). "<br>";
    }

    // Autre version pour afficher les valeurs d'un tableau avec différents formats : 
    // foreach($tableauValeurs as $value){
    //     echo gettype($value)," ",var_export($value)."<br>";
    // }
    // Pour obtenir chaque type d'un tableau : gettype($valeurs);

?>

<h4>13</h4>
<!-- POO (Programmation orientée objet) permettant d'instancier plusieurs voitures et d'afficher leurs informations. Les voitures peuvent démarrer, accélérer, ralentir, s’arrêter et couper leur contact -->

<?php

    class Voiture
    {
        private $_marque;
        private $_modele;
        private $_nbPortes;
        private $_vitesseActuelle = 0;
        private $_statut = false;


        public function __construct($marque, $modele, $nbPortes)
        {
            $this->_marque = $marque;
            $this->_modele = $modele;
            $this->_nbPortes = $nbPortes;
        }


        public function __toString()
        {
            return $this->_marque. " " .$this->_modele;
        }


        public function getInformationsVoiture()
        {
            return "Le véhicule : " .$this->__toString(). " possède " .$this->_nbPortes. 
                   " portes, sa vitesse actuelle est de " .$this->_vitesseActuelle. " km/h <br>"
                   .$this->getDemarrer(). "<br>"
                   .$this->getVitesseActuelle();   // inutile, uniquement pour voir que les deux possibilités fonctionnent
                   
        }

        public function getDemarrer()
        {
            return $this->_statut == true ? "le véhicule est démarré" : "le véhicule est a l'arrêt";
        }

        public function getVitesseActuelle()
        {
            return "Le véhicule roule à ".$this->_vitesseActuelle. " km/h";
        }
    
        public function setDemarrer()
        {
            if ($this->_statut == false){
                $this->_statut = true;
                return "Le véhicule " .$this->__toString(). " démarre";
            } else if ($this->_statut = true){
                return "Impossible de démarrer le véhicule " .$this->__toString(). " car le véhicule a déjà démarré";
            }
        }

        public function setAccelerer($vitesse)
        {
            if ($this->_statut == true){
            $this->_vitesseActuelle += $vitesse; 
            return "le véhicule accélère de " .$vitesse. " km/h , le véhicule roule a présent à " .$this->_vitesseActuelle. " km/h";
            } else return "Vous devez démarrer le véhicule pour accélèrer";
        }

        public function setRalentir($vitesse)
        {
            if ($this->_statut == true){
            $this->_vitesseActuelle -= $vitesse; 
            return "le véhicule freine et ralentit de " .$vitesse. " km/h , le véhicule roule a présent à " .$this->_vitesseActuelle. " km/h";
            } else return "Vous devez avoir une vitesse supérieur a 0 km/h pour décélérer";
        }

        public function setStopper()
        {
            $this->_statut = false; 
            $this->_vitesseActuelle = 0;
            return "le véhicule " .$this->__toString(). " est a présent a l'arrêt";
        }

    }


    $citroen = new voiture("citroën", "C3", 5);
    echo $citroen ."<br>";   //fonctionne grâce au __toString()
    echo $citroen->getInformationsVoiture();
    echo "<br>";
    echo $citroen->getDemarrer();
    echo "<br>";
    echo $citroen -> setDemarrer(). "<br>";
    echo $citroen -> setDemarrer();
    echo "<br>";
    echo "<br>";
    echo $citroen->getDemarrer();
    echo "<br>";
    echo "<br>";

    echo $citroen->setAccelerer(50). "<br>";
    echo $citroen->setAccelerer(50). "<br>";
    echo $citroen->setAccelerer(50). "<br>";
    echo "<br>";
    echo $citroen->setRalentir(120). "<br>";
    echo "<br>";
    echo $citroen->getInformationsVoiture();
    echo "<br>";
    echo $citroen->setStopper();
    echo "<br>";
    echo $citroen->getInformationsVoiture();


?>


<h4>14</h4>
<!-- POO (Programmation orientée objet) permettant d'instancier plusieurs voitures électriques. La classe Voiture électrique hérite (extends) de la classe Voiture faite précédemment et possède une propriété supplémentaire (autonomie) -->

<?php

    class VoitureElectrique extends Voiture
    {
        private $_autonomie;

        public function __construct($marque, $modele, $nbPortes, $autonomie)
        {
            parent::__construct($marque, $modele, $nbPortes);
            $this->_autonomie = $autonomie;
        }

        public function getInformationsVoiture()
        {
            $informations = parent::getInformationsVoiture();
            return $informations. "<br>".  //le point à la fin sert a concaténer
                   "L'autonomie de la batterie est de " .$this->_autonomie. " km";
        }

    }


   $tesla = new VoitureElectrique("Tesla", "model X", 5, 200);

   echo $tesla->getInformationsVoiture(). "<br>";
   echo "<br>";
   echo $tesla->setDemarrer(). "<br>";
   echo $tesla->getDemarrer(). "<br>";
   echo "<br>";
   

   echo $tesla->setAccelerer(100). "<br>";
   echo $tesla->setAccelerer(70). "<br>";
   echo "<br>";
   echo $tesla->setRalentir(40). "<br>";
   echo "<br>";
   echo $tesla->getInformationsVoiture();



?>



<h4>2 et 4 (autre version) :</h4>
<!-- le style est déjà fait dans l'algorithme 2  -->
<p>2</p>

<?php

    $capitales2et4 = array(
        "France"    => "Paris",
        "Allemagne" => "Berlin",
        "USA"       => "Washington",
        "Italie"    => "Rome",
        "Espagne"   => "Madrid",
        "Portugal"  => "Lisbonne",
        "Irlande"   => "Dublin"
    );
   


    function afficherTableauHTML2($parametre, $wikipedia = false){
    echo "<table>";

        echo "<tr>",
            "<th> Pays </th>",
            "<th> Capitale </th>",
            $wikipedia ? "<th> Lien wiki </th>" : "",
        "</tr>";

    foreach($parametre as $cle => $valeur){
        echo "<tr>";
            echo "<td>", mb_strtoupper($cle), "</td>";
            echo "<td>", $valeur, "</td>";
            echo $wikipedia ? "<td> <a target='_blank' href='https://fr.wikipedia.org/wiki/".$valeur."'> Lien wikipédia </a> </td>" : "";
        echo "</tr>";
    }
    echo "</table>";
    }

    ksort($capitales2et4);
    afficherTableauHTML2($capitales2et4);   //Ne pas mettre de 2eme paramètre signifique "vide" donc un booléen faux
?>

<!-- ksort($parametreFonctionExo2);  : trier par ordre alphabétique via la clé
asort($parametreFonctionExo2);  : trier par ordre alphabétique via la valeur  -->



<p>4</p>

<?php
    asort($capitales2et4);
    afficherTableauHTML2($capitales2et4, 1);
?>


<!-- pour le booléen, il vaut false lorsque la valeur est 0, false, null ainsi qu'une chaine de caractère vide. 
N'importe quelle autre valeur met le booléen en true ! ici par exemple : 1 -->



<!-- Raccourci génial = Ctrl + D + selectionner n'importe quoi       
-- > On pourra modifier la totalité des éléments qui possèdent le même nom  -->