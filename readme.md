# TEST POO PHP NUMISCORNER

Cet exercice a pour but de tester les compétences du candidat au poste de développeur PHP sur un concept basique de programmation orientée objet (POO).

Il est demandé de créer une implémentation basée sur l’héritage (classe abstraite) avec une classe fille.

Nous imagineons pour ce faire avoir comme besoin la gestion basique de nos références en stock (sous forme  d’un entier), pour cette exemple le stockage de la donnée se fera dans un simple tableau php (array) mais avec l’implémentation en abstract nous pourrions envisager de remplacer ce tableau par une base de données, un stockage en fichier etc …. en conservant la logique de base.

Voici la liste des méthodes attendues :

- **add()** : Ajoute l’élément int passé en paramètre à l’ensemble  
*Attention l’ensemble ne contient que des entiers disctincts, en cas de doublon celui-ci ne doit pas apparaître*

- **remove()**: Supprime l’élément int passé en paramètre, si l’élément n’existe pas une exception NotInSetException doit être levée.

- **getSize()** : Retourne le nombre d’élément dans l’ensemble.

- **isEmpty()**: Retourne un booléen pour dire si l’ensemble est vide ou non.

De plus les méthodes add et remove de l’objet devront permettre le chaînage de méthode (Fluent interface).

Dans une approche TDD (développement dirigé par les tests), vous disposez d’un test unitaire phpUnit qui validera votre implémentation en lançant le script shell en console : sh run_test.sh.  
L’ensemble des 12 assertions doivent être validées.

## Aide

1. Machine équipée de php >= 8 et composer installé globalement
2. Clone repository
3. Composer install
4. Compléter les classes Set et ArraySet
5. Run les tests (sh run_test.sh)