<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="contact.css">
    <title>Formulaire</title>
  </head>
    <body>
<p>Bonjour votre formulaire a été envoyé avec succès! !</p>

<p><?php echo htmlspecialchars($_POST['nom']); ?> </p>
<p><?php echo htmlspecialchars($_POST['email']); ?> </p>
<p><?php echo htmlspecialchars($_POST['sujet']); ?> </p>
<p><?php echo htmlspecialchars($_POST['text']); ?> </p>

<p>Pour retourner au formulaire, <a href="contact.php">clique ici</a> pour revenir à la page.</p>
  </body>
</html>
