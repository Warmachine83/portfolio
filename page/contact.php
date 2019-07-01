<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="../CSS/contact.css">
</head>
<body>
  <div class="container">
  <h1>Formulaire de contact</h1>
  <form action="mail.php" method="post">
    <label for="fname">Nom & prénom</label>
    <input type="text" id="fname" name="firstname" placeholder="Votre nom et prénom">

    <label for="sujet">Sujet</label>
    <input type="text" id="sujet" name="sujet" placeholder="L'objet de votre message">

    <label for="emailAddress">Email</label>
    <input id="emailAddress" type="email" name="email" placeholder="Votre email">


    <label for="subject">Message</label>
    <textarea id="subject" name="subject" placeholder="Votre message" style="height:200px"></textarea>

    <input type="submit" value="Envoyer">
  </form>
  <p>Voir les <a href="competence.php">compétences</a> </p>
<p>Retourner au <a href="../index.html">menu.</a> </p>

</div>
</body>
</html>
