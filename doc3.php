<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tor</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/menu1.css">
    <link rel="stylesheet" href="./css/style1.css">
</head>
<body>
<?php
      include './php/menu.php'
    ?>
    
    <br>
    <h1>Tor et son utilisation</h1>
    <p>Tor, pour « The Onion Router », est un outil de pointe pour protéger votre vie privée et votre anonymat sur Internet. Développé initialement à l’United States Naval Research Laboratory au milieu des années 1990 sous le programme du nom de « The Onion Routing », Tor en est la nouvelle génération, l’évolution directe du projet original.
    Il s’agit du logiciel le plus utilisé au monde pour accéder anonymement à Internet.Lorsque vous êtes correctement connecté à Tor, votre historique Web, vos publications en ligne, vos messages instantanés et toute autre forme de communication ne peuvent être rattachés à votre identité.</p>
    <h2>Comment fonctionne Tor?</h2>
    <p>Tor est un réseau composé de milliers de nœuds bénévoles, également appelés relais. Un relais est un ordinateur composant le réseau de Tor, listé dans le répertoire principal, qui reçoit les signaux Internet d’un autre relais et retransmet ce signal au suivant. Pour chaque demande de connexion (ex. un site Web), le chemin est généré de manière aléatoire. Aucun des relais ne conserve d’enregistrement de ces connexions, il n’existe donc aucun moyen pour un relais de connaître le trafic qu’il a transmis.
    Par exemple, lorsque vous vous connectez au réseau Tor en utilisant le navigateur Tor, toutes les données que vous envoyez et recevez passent par ce réseau, via une sélection aléatoire de nœuds. Tor chiffre toutes ces données plusieurs fois avant qu’elles ne quittent l’appareil que vous utilisez, y compris l’adresse IP du nœud suivant. Une couche de chiffrement est supprimée à chaque fois que les données atteignent un autre nœud jusqu’à ce qu’il atteigne le nœud de sortie final. L’ensemble de ce processus est appelé routage en oignon. Cela signifie que personne, pas même ceux qui exécutent les nœuds, ne peut consulter les données ni leur destination.
    Une passerelle est un relais caché, ce qui signifie qu’il ne figure pas dans le répertoire principal des relais Tor. Elles sont utiles aux personnes qui ne peuvent pas accéder à Tor via la configuration normale. Cette situation peut être due au fait que le réseau par lequel ils passent a recours à un proxy (une sorte d’intermédiaire entre l’ordinateur de l’utilisateur et la passerelle Internet) qui a été configuré pour bloquer le trafic Tor.
    Le dernier relais du parcours des données est appelé nœud de sortie. Le nœud de sortie est la seule partie du réseau qui se connecte réellement au serveur auquel l’utilisateur tente d’accéder et qui est, par conséquent, la seule information que voit le serveur. Ce dernier peut donc uniquement enregistrer l’adresse IP de ce relais.
    Toute personne qui intercepte des données ne pourra pas les rattacher à une personne. Au mieux, elle pourra identifier le nœud d’entrée ou de sortie, mais jamais les deux. C’est cette méthode qui rend impossible le suivi de l’activité de l’utilisateur et son historique de navigation. Croyez-le ou non, tous les relais et les passerelles sont gérés par des bénévoles – des personnes qui concèdent une partie de leur bande passante et des capacités de calcul de leur ordinateur pour étendre les capacités de Tor.</p>
    <h3>Comment commencer à utiliser Tor?</h3>
    <p>Le navigateur Tor est le moyen le plus simple et le plus populaire d’utiliser Tor. Il est basé sur Firefox et fonctionne comme une version simplifiée de n’importe quel autre navigateur Web. Le logiciel est de type « plug-and-play»; aucun réglage ou configuration spécifique n’est nécessaire pour commencer à naviguer de manière anonyme après l’installation initiale.Le navigateur Tor est le moyen le plus simple et le plus populaire d’utiliser Tor. Il est basé sur Firefox et fonctionne comme une version simplifiée de n’importe quel autre navigateur Web. Le logiciel est de type « plug-and-play»; aucun réglage ou configuration spécifique n’est nécessaire pour commencer à naviguer de manière anonyme après l’installation initiale.</p>
    <br>
    <br>
    <footer>
      <a href="https://www.facebook.com/jordan.leleu.3/"><i class="fa fa-facebook"></i>
      <a class="copyright">Copyright © 2022.Tous droits réservés</a>
      </footer>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>    
</body>
</html>