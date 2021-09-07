# Café.com - projet fil rouge CDA 20229

Projet fil rouge réalisé en groupe a l'AFPA d'amiens. Site e-commerce spécialisé dans la vente de café aux particuliers et professionnels. 

## Prérequis : 

* PHP 
* MySQL
* Composer
* Symfony
* Symfony CLI

## Instalation : 

* Ajoutez votre .env.local (copie du .env) 
* Parametrez la connexion à votre base de donnée personnelle (MySQL)
* Si la Database n'existe pas créez là via : 
``` php bin/console doctrine:database:create```

* Mettre a jour la db en fonction des entités via : 
``` php bin/console doctrine:migration:migrate ```

## Démarage : 

Toujours en phase de développement, lancez l'application avec la commande : ```symfony serve``` 

## Fabriqué avec : 

* **PhpStorm** : Editeur de texte. 

## Contribuer : 

### Strégie de gestion des branches : 
        
**S’assurer de bien avoir les derniers changements :** 
* ``` git checkout main ```
* ``` git pull origin main ```


**Créer une nouvelle branche (ex. pour la feature avis clients ) :** 
* ``` git checkout -b “feature/avis-clients” ```
* ``` git branch ``` → pour s’assurer que vous êtes bien sur la nouvelle branche. 

**Commit son travail :** 
* ``` git add . ```
* ``` git commit -m “votre message” ```

**Push sur sa branche :** 
* ``` git push origin feature/avis-clients```

**Créer la pull request :**
* aller sur github (lien après push) et cliquer sur “create pull request”
* valider la request en groupe 

**Retourner sur la branche main :** 
* ``` git checkout main ```

**Récupérer les derniers changements depuis le repo :** 
* ``` git pull origin main ```

**Supprimer la vieille branche :** 
* ``` git branch -d feature/avis-clients ```

### Convention de nommage des commits : 

**Syntaxe générale**
```<type>(<portée>): <sujet>```

**Type**
* ```build``` : changements qui affectent le système de build ou des dépendances externes (npm, make…)
* ```feat``` : ajout d’une nouvelle fonctionnalité
* ```fix``` : correction d’un bug
* ```perf``` : amélioration des performances
* ```refactor``` : modification qui n’apporte ni nouvelle fonctionalité ni d’amélioration de performances
* ```style``` : changement qui n’apporte aucune alteration fonctionnelle ou sémantique (indentation, mise en forme, ajout d’espace, renommante d’une variable…)
* ```docs``` : rédaction ou mise à jour de documentation
* ```test``` : ajout ou modification de tests

## Auteurs :

* Benjamin Vuagnoux [@VuagnouxBenjamin](https://github.com/VuagnouxBenjamin)
* Marius Lemaire [@lemairemarius](https://github.com/lemairemarius)
* Boukraa Gauthier [@gauth80](https://github.com/gauth80)
* Fournet Matthieu [@fournetmatthieu](https://github.com/fournetmatthieu)

