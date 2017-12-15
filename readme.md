    _   ___  ___  _   _  ___  ___   ___
 _ | | / __|| _ \| | | ||_  )|   \ | _ \
| || || (__ |   /| |_| | / / | |) ||   /
 \__/  \___||_|_\ \___/ /___||___/ |_|_\

Voici donc le meilleur (et peut être le seul) générateur
de personnages de JDR en serveur CRUD.

Il permet grâce à son interface ultra travaillée (joke)
de créer des personnages utilisables par la suite.

Il intègre les fonctions d'ajout de races, classes, compétences, dons,
et permet d'ajouter du contenu personnalisé, vous pouvez donc ajouter 
par exemple des métiers, des phobies, des croyances, des objets etc ..
Libre à vous de créer.

Si jamais vous décidez, de votre doigt divin, d'éteindre la race des
Dragons en savon, ou d'abolir le culte de l'huile d'olive, la fonction
de suppression vous permet d'effacer tout contenu ajouté, à jamais .. 
Détruire pour mieux reconstruire.

Quelque chose manque à votre sort principal, ou préféreriez vous qu'il
change d'élément. Utilisez la fonction de changement pour modifier tout
contenu inapproprié.

Une fois votre ou vos personnages finis, vous pouvez les exporter,
soit en objet JSON (terme utilisé par le culte des divins créateurs),
soit au format PDF, afin de le transférer à votre MJ, pour qu'il vous
dise pour la 30ème fois de modifier son énième sort. Mais vous ne vous
mettez point en colère pour ça, puisque vous n'avez que quelques clics
à faire, fini de réécrire ou de raturer votre fiche.

En pratique :

Je suis full triste perso, mais bon, je m'y attendais un peu.

Le CRUD fonctionne, mais que sur les races (pas eu le temps de le mettre pour les autres).
Les menus de navigation fonctionnent (jusqu'à ce qu'on clique sur une fonctionnalité).
Le site est responsive (whouhou, merci Bootstrap).
Dans l'ajout d'une race, on peut choisir parmis les dons disponibles (mais on ne peut pas en rajouter pour l'instant).
On peut cliquer sur un don ajouté pour voir sa description, ses effets et son cout.
J'ai un problème avec l'update (il me dit que la méthode [update] n'existe pas, alors que je ne l'appelle pas).
L'importation/exportation (snif) sera pour plus tard, quand le reste fonctionnera.
J'ai mis un background à la première page, je ferai pareil avec le reste.
Les dons par race sont stockés en JSON dans une variable MediumText pour MySQL.
On ne peut pas créer de personnage pour l'instant (et j'aurais bien voulu le faire).

Récap : On peut créer une race, la supprimer, voir toutes les races, et peut être la modifier (je n'aurai pas le temps je pense).
