<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Formulaire</title>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <form action="thanks.php" method="post">
            <div>
                <label for="name">Nom :</label>
                <input type="text" required id="name" name="user_name">
            </div>
            <div>
                <label for="firstname">Prénom :</label>
                <input type="text" required id="firstname" name="user_firstname">
            </div>
            <div>
                <label for="phone">Numéro de téléphone :</label>
                <input type="tel" required id="phone" name="user_phone" pattern="[0-9]{2} [0-9]{2} [0-9]{2} [0-9]{2} [0-9]{2}" placeholder="00 00 00 00 00">
            </div>
            <div>
                <label for="email">Mail :</label>
                <input type="email" required id="email" name="user_email">
            </div>
            <div>
                <label for="subject">Votre demande concerne :</label>
                <select id="subject" required name="user_subject">
                    <option value="subscription">Votre abonnement</option>
                    <option value="bill">Un problème de facturation</option>
                    <option value="other">Autre chose</option>
                </select>
            </div>
            <div>
                <label for="message">Votre message : </label>
                <textarea id="message" required name="user_message"></textarea>
            </div>
            <div>
                <button type="submit">Envoyer votre message</button>
            </div>
        </form>
        <p><?php ?></p>
    </body>
</html>