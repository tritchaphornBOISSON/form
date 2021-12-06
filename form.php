<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulaire</title>
</head>
<body>

<form  action="thanks.php"  method="post">
    <div>
        <label  for="nom">Nom :</label>
        <input  type="text"  id="nom"  name="user_name">
    </div>
    <div>
        <label  for="prenom">Prénom :</label>
        <input  type="text"  id="prenom"  name="user_lastname">
    </div>
    <div>
        <label  for="email">Email :</label>
        <input  type="email"  id="email"  name="user_email">
    </div>
    <div>
        <label for="telephone">Telephone :</label>
        <input type="text" id="telephone" name="user_phone">
    </div>
    <div>
        <label for="sujet">Sujet :</label>
        <select id="sujet" name="user_subject">
            <option value="Retour produit">Retour produit</option>
            <option value="Demande un extra service">Demande un extra service</option>
            <option value="Object perdu">Objet perdu</option>
        </select>
    </div>
    <div>
        <label  for="message">Message :</label>
        <textarea  id="message"  name="user_message"></textarea>
    </div>
    <div  class="button">
        <button  type="submit">Envoyer</button>
    </div>
</form>


</body>
</html>

