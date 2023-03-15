# POC_inkfusion

Petite preuve de concept de fusion de plusieurs projets Ink en un seul fichier, réalisée en PHP.

- le script ajoute un choix au début pour sélectionner les histoires
- il remplace "-> END" par "MainMenu" pour revenir à la liste des histoires 
- La fusion nécessite que les variables et les Knots soient préfixés différemment dans chaque projet pour éviter les collisions
- Il est possible d'utiliser les variables d'un projet dans l'autre (si on connait le nom de la variable avec son prefixe)
- Les variables doivent être explicitement réinitialisées au début de chaque projet si on ne veut pas conserver la progression
- Les choix avec l'étoile (choix utilisables une seule fois) ne se réinitialisent pas lorsqu'on revient à la liste des histoires (solution à trouver ou alors on part du principe que c'est une contrainte à prendre en compte)