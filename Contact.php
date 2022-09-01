<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/menu1.css">
    <link rel="stylesheet" href="./css/style1.css">
    
</head>
<body>
<?php
  include './php/menu.php'
?>
<div class="contactez-nous">
<br>
<h1>Contactez-nous</h1>
<br>
<p>Un problème, une question ? N’hésitez pas à utiliser ce formulaire pour prendre contact avec nous !</p>
<form action="/page-traitement-donnees" method="post"class="Contact">
<div>
<br>
<div class="nom">
<label for="nom">Votre nom</label>
<br>
<input type="text" id="nom" name="nom" placeholder=""  required>
</div>
<div class="prenom">
<label for="email">Votre e-mail</label>
<br>
<input type="email" id="email" name="email" placeholder="monadresse@mail.com" required>
</div></select>
<div>
  <br>
<textarea id="message"class="textarea" name="message" placeholder="Bonjour, je vous contacte car...."style="height:330px"required></textarea>
</div>
<div>
  <br>
  <br>
<button type="submit">Envoyer mon message</button>
<footer>
      <a href="https://www.facebook.com/jordan.leleu.3/"><i class="fa fa-facebook"></i>
      <a class="copyright">Copyright © 2022.Tous droits réservés</a>
      </footer>
</div>
</form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script> 

</body>
</html>