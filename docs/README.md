# Premiers pas en PHP


## 1. Découpe ton code

Lorsque tu développes un site, la plupart des pages comportent des éléments similaires.
C'est par exemple le cas du **header** et du **footer**. Ils sont présents sur presque toutes les pages du site.
Afin de les réutiliser dans les pages où tu en as besoin, nous allons les mettre dans des fichiers indépendants et les appeler dans notre code PHP grâce à la [fonction include()](https://www.php.net/manual/fr/function.include.php).

- Crée un nouveau fichier `_header.php` et places-y la totalité de ta balise `<header>` actuellement présente dans le fichier `index.php`.
- Pour y faire référence dans le fichier `index.php` que tu viens de modifier, ajoute cette ligne à la place&nbsp;:
```php
<?php include("_header.php"); ?>
```
- Fait de même pour la balise `<footer>` dans un fichier `_footer.php` et remplace-la par :
```php
<?php include("_footer.php"); ?>
```

Bravo, tu viens d'inclure des fichiers extérieurs dans ton code. Tu peux maintenant les réutiliser dans n'importe quel fichier PHP !

## 2. Nouveau fichier

Maintenant que tu commences à mieux appréhender PHP, tu vas voir comment récupérer les informations d'un formulaire, et plus précisément celles du formulaire de contact déjà présent dans le fichier `index.php`.  
Ce formulaire contient un bouton *Submit* et lorsque l'on presse ce bouton, les valeurs saisies dans les champs sont envoyées où tu l'as défini. C'est ce qu'on appelle soumettre un formulaire. 

Dans un premier temps, crée un nouveau fichier et nomme-le `form.php`. C'est ce fichier qui sera appelé après la soumission de ton formulaire. Insères-y le code qui suit :

```php
<!DOCTYPE html>
<html lang="en" data-theme="light">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Wild Template</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@1/css/pico.min.css">
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body>
        <?php include("_header.php") ?>

        <main class="container">
            <h1>Hello {Firstname} {Lastname} from {Campus}</h1>
            <h2>This is your message</h2>
            <p>{Message}</p>
        </main>

        <?php include("_footer.php") ?>
    </body>
</html>
```

À présent, si tu accèdes au fichier `/form.php` avec ton navigateur, tu arrives sur une page comme celle-ci&nbsp;: 

![](images/form.png)
{: .text-center }

Ta mission sera de remplacer les éléments entourés par des accolades *{mot_à_remplacer}* par du code PHP qui récupère les informations du formulaire.

Allons-y pas à pas.

## 3. Prépare ton formulaire

Comme tu peux le voir dans cette [documentation](https://developer.mozilla.org/fr/docs/Web/HTML/Element/Form), la balise `<form>` peut contenir différents attributs.
Celui qui nous intéresse se nomme `action=""`. Il définit la cible où le formulaire est soumis.
S'il est absent, la soumission renvoie vers la page en cours (ce qui est le cas jusqu'à maintenant).  
Dans le fichier `index.php`, ajoute l'attribut `action` à la balise `<form>` afin que ton formulaire soit renvoyé vers le fichier `form.php` lorsque tu le soumettras.

<details markdown=block>
<summary markdown=span>
    Voir la solution
</summary>

```html
<form action="form.php">
    <!-- ... -->
</form>
```
</details>

## 4. Récupère les informations

Maintenant que le formulaire est soumis vers la page `form.php`, on va pouvoir récupérer les informations.  

Tu l'as sans doute remarqué, lorsque tu soumets le formulaire et que tu es redirigé, de nouveaux éléments apparaissent dans l'URL. Ce sont des paramètres. Ils correspondent exactement aux noms (*firstname*, *lastname*, *campus* et *message*) des champs du formulaire donnés grâce à l'attribut `name=""` placé sur chacun des champs `<input>` ou `<textarea>`. 

```html
<input id="firstname" name="firstname" type="text">
<input id="lastname" name="lastname" type="text">
<input id="campus" name="campus" type="text">
<textarea id="message" name="message"></textarea>
```
 
En PHP, les valeurs présentes dans l'URL se récupèrent grâce à la variable `$_GET`.  
`$_GET` est un tableau qui contient chacune des valeurs des paramètres présents dans l'URL. Pour les afficher, tu dois aller chercher la clé correspondante au nom de ton champ de formulaire.
Par exemple pour le champ campus, tu récupéreras la valeur avec&nbsp;:
```php
$_GET['campus'];
```
Pour l'afficher tu pourras utiliser la [fonction echo()](https://www.php.net/manual/fr/function.echo.php).
Ce qui donne pour ce même champ :
```php
<?php echo $_GET['campus']; ?>
```

Maintenant, à toi d'essayer d'afficher les valeurs de chaque champ à la place des marquages délimités par les accolades (*{Firstname}*, *{Lastname}*, etc.).  
Si tout s'est bien passé, la saisie de l'utilisateur devrait apparaître dans le texte de la page `form.php`.

<details markdown=block>
<summary markdown=span>
    Voir la solution
</summary>

```php
<main class="container">
    <h1>Hello <?php echo $_GET['firstname']; ?> <?php echo $_GET['lastname']; ?> from <?php echo $_GET['campus']; ?></h1>
    <h2>This is your message</h2>
    <p><?php echo $_GET['message']; ?></p>
</main>
```
</details>

## 5. Regarde la source

Si tu fais "clic droit" sur la page dans ton navigateur et que tu cliques sur "afficher la source", tout le code HTML de ta page apparaît.  

Que constates-tu en parcourant tout le code source ? 

Il n'y a plus aucun code PHP. Aucune trace des `include()` ou de tes `$_GET['campus']`. C'est normal, le code que reçoit ton navigateur, c'est bien du HTML pur ! Toutes les instructions PHP ont étés interprétées côté serveur pour générer le HTML correspondant.

## 🎁 Bonus : joue avec les dates
Si tu as remarqué, le site sur lequel tu travailles comporte deux article" datés en haut sous la forme (Mois Jour, Année).  
Avec PHP, tu vas pouvoir rendre cette date dynamique et la définir à la date du jour. Pour cela, tu vas utiliser la [fonction date()](https://www.php.net/manual/fr/function.date.php) qui te retourne une date au format texte.
Essaie maintenant de remplacer les deux dates par la date du jour au même format que la précédente.

<details markdown=block>
<summary markdown=span>
    Voir la solution
</summary>

```php
<p>
    <small>@tac</small>
    <small><?php echo date('M j, Y') ?></small>
</p>
```
</details>

## Conclusion

Félicitations ! Tu as fait tes premiers pas en PHP ! C'est un langage très répandu et dont l'étude permet de couvrir un maximum de concepts utilisés dans le développement web.  
En tant que développeur web il est important d'en avoir quelques notions, peu importe l'orientation que tu prendras ensuite.
