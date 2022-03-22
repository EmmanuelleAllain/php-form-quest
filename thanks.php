<?php

$data = array_map('trim', $_POST);

if (empty($_POST["user_name"])) {
    echo "Le nom est obligatoire <br>";
    die();
    }
if (empty($_POST["user_firstname"])) {
    echo "Le prénom est obligatoire <br>";
    die();
    }
if (empty($_POST["user_phone"])) {
    echo "Le numéro de téléphone est obligatoire <br>";
    die();
    }
if (empty($_POST["user_email"]) || !filter_var($_POST["user_email"], FILTER_VALIDATE_EMAIL)) {
    echo "L'adresse mail est obligatoire et doit respecter le format exemple@nomdedomaine.com <br>";
    die();
    }
if (empty($_POST["user_subject"])) {
    echo "L'objet de votre message est obligatoire<br>";
    die();
    }
if (empty($_POST["user_message"])) {
    echo "Le message est obligatoire <br>";
    die();
    }

echo "Merci " . htmlentities($_POST['user_firstname']) . " " . htmlentities($_POST['user_name']) . " de nous avoir contacté à propos de " . htmlentities($_POST['user_subject']) . ".<br>
Un de nos conseiller vous contactera soit à l’adresse " . htmlentities($_POST['user_email']) . " ou par téléphone au " . htmlentities($_POST['user_phone']) . " dans les plus brefs délais pour traiter votre demande :<br>"
. htmlentities($_POST['user_message']);

?>
