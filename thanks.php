<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Merci</title>
</head>
<body>
    <P>Merci <?= $_POST['user_name'] . ' ' . $_POST['user_lastname'] ?> de nous avoir contacté à propos de <?= $_POST['user_subject'] ?>.
    <br>
    Un de nos conseiller vous contactera soit à l’adresse <?= $_POST['user_email'] ?> ou par téléphone au <?= $_POST['user_phone'] ?> dans les plus brefs délais pour traiter votre demande :
    <?= $_POST['user_message'] ?>
    </p>
</body>
</html>