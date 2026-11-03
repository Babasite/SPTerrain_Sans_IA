<!Doctype html>
<html lang="fr">
<head>
     <meta charset="UTF-8">
        <title="PHP"></title>
        <link href="cours6.css" rel="stylesheet">
</head>
<body>
    <header></header>
    <main>
        <h1 id="debut">PHP</h1>
        <p>Un fichier PHP peut contenir du HTML, du CSS, du JavaScript et du PHP.<br>
                Je peux donc faire juste un <mark>.php</mark> (et écrire comme j'aurais fait ds un .html)
                sous réserve d'avoir installé php sur ordi avt<br> et
                lancé mon serveur PHP dans le <u>terminal</u> de VS Code <br>
<strong>export PATH="$PATH:/c/Users/basti/OneDrive/Bureau/DevenirDev/php-8.5.11-nts-Win32-vs17-x64"</strong><br>
                <em>Rm</em>: Cette commande est nécessaire à chaque nouvelle session
                 tant que PHP n'a pas été ajouté définitivement au PATH.<br>
                puis <strong>cd Cours6 </strong> puis <strong>php -S localhost:8000</strong>. 
        </p>
        <p>
                <em>Rm</em>: Adresse à entrer ds <u>navigateur</u> est 
                <strong>http://localhost:8000/cours6.php</strong> <br>
                (car un fichier .php peut remplacer fichier .html, mais remplace pas 
                le serveur nécessaire pour exécuter PHP).
        </p>
        <h2>PHP et mySQL
        <span class="sql">
        <a href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql"
target="_blank">Cours PHP et mySQL </a>
        </span>
        </h2>
        <p>PHP est en "<mark>open source</mark>" (comme Python et R).<br>
           Site statique (juste avec HTML et CSS)<br>
           Site dynamique (html et css +PHP et mySQL): S'adapte aux besoins de chaque visiteur
            (se personnalise avec propre photo ect).<br>
            SGBD (mySQL): Pr enregistrer des données de manière organisée,
             afin de ns aider à les retrouver facilement plus tard 
             (enregistrer liste membres, messages postés...).<br>
            Installer <strong>XAMPP</strong> sur ordi (environnement de développement PHP le plus
             populaire)<br>
             On a VSCode mais existe <strong>PHPStorm</strong> (payant mais plus complet)
        </p>
        <h3>Balises PHP</h3>
        <p><mark>&lt;?php</mark> et <mark>?&gt;</mark> 
                (comme "script" ds Javascript <u>mais doit être exécuté par un serveur et non 
                        plus par le navigateur (ça marche pas si je le met ds mon .html</u>) <br>
        -> Je dois donc installer "PHP" 
        <a href="https://www.php.net/downloads.php?os=windows"target="_blank">ici</a>
        pr que ça s'affiche ds mon .html 
        (si j'ai pas installé XAMPP).<br>
        <em>Rm</em>: Il existe d'autres balises pour utiliser du PHP  
( &lt;? ?&gt; , &lt;% %&gt; , &lt;?= ?&gt; ) mais elles sont moins correctes.<br>
</p>
<p>Instruction <mark>echo</mark>(""); (on peut également utiliser "print" ms moins utilisée)<br>
On utilise ici aussi des "antislash  <mark>\</mark> " pr les guillemets (ou autres signes) qui 
seraient pas reconnues ds un txte en code.<br>
<mark>//</mark> (pour un commentaire (juste au début, comme pr .js)) 
ou <mark>/*</mark>  (puis refermer par */) si le commentaire fait plsrs lignes.</p>
<p>
Enregistrez la page avec l'extension .php (cours6.php).<br>
Aujourd'hui nous sommes le ... 
<span class="php">
        <?php echo date('d/m/Y h:i:s'); ?> 
</span>
(Fonctionnerait pas en .html 🤷‍♂️)  
</p>
 <h3>PHP est configurable (php.ini)</h3>
 <h4>Les erreurs (pr les voir en tant que developpeur)</h4>
<p>Qd un script PHP plante, son comportement par défaut est de n'afficher qu'une page blanche 
(une page de navigateur sans contenu).<br>
 Configuration de PHP se fait dans un fichier appelé <mark>php.ini</mark>.<br>
 <em>Rm</em>: Pas mettre ce fichier n'importe où</p>
 <p>
 <em>Terminal</em> : Ouvrir un <u>2eme terminal</u> avec <mark>+ en haut à droite du terminal</mark> 
 (Pr pas fermer mon PHP actuellement en cours d'exécution ds le 1er)<br>
 <mark>export PATH="$PATH:/c/Users/basti/OneDrive/Bureau/DevenirDev/php-8.5.11-nts-Win32-vs17-x64"</mark>
 (je pourrait le rendre permanent pr pas avoir à le refaire chaque fois)<br>
 <mark>php -v</mark> (pr vérifier que php bien reconnu)<br>
 <mark>php --ini</mark><br>
 <mark>php -r "echo PHP_BINARY;"</mark> (car pas de fichier encore créé. 
 Affiche le chemin exact de l'exécutable PHP utilisé)</p>
 <p>
 Puis <strong>installer php.ini</strong> ...<br>
 <em>Explorateur ordi</em> : C:\Users\basti\OneDrive\Bureau\DevenirDev\php-8.5.11-nts-Win32-vs17-x64 
 (pr aller ds dossier "php-8.5.11-nts-Win32-vs17-x64") <br>
 <mark>copier</mark> le fichier "<u>php.ini-development</u>" à l'intérieur, en coller un nx que j'appelle 
 "<u>php.ini</u>".<br> (attention car le .ini sera masqué automatiquement
  et je verrai que "php" comme nom de fichier).<br>
<em>Rm</em>: J'aurais pu renommer directement l'original pour avoir le bon nom ms une copie 
permet repartir des réglages d'origine si besoin plus tard)</p>
<div class="enligne">
        <p>
<div class="important">
  <em>Terminal</em> : php --ini<br>
  cd ~/ApprendreDvmt/Cours6<br>
  php -S localhost:8000<br>
</div>
</p>
<p>
  <em>Rm</em>: Mon serveur PHP fonctionne maintenant ds le terminal 2. Je peux fermer le 
  terminal 1<br> 
(fermer l'icone "losange gris" qui correspond au terminal 1 (à droite du terminal) avc la poubelle).
</p>
</div>
 <p>
Commande <strong>phpinfo()</strong> (ds fichier .php). 
<a href="info.php" target="_blanck">
Essayer ici sur un nx .php (info.php) car perturbe la couleur de mon fond.</a><br>
On peut le modifier en modifiant fichier qu'on a créé "php.ini".<br>
(Rappel chemin: C:\Users\basti\OneDrive\Bureau\DevenirDev\php-8.5.11-nts-Win32-vs17-x64)<br>
<em>Rm</em>: On ouvre le fichier sur VSCode et on peut le modifier.<br>
(Si besoin: Pr activer l'affichage, on change la propriété "display_errors" à "On" et<br> on filtre 
le type d'erreurs avec "error_reporting" (on choisira "E_ALL" pour voir ttes les erreurs).)
</p>
<h3>Variables</h3>
<p>Information stockée juste le tps de générer la page web (st ensuite supprimées de la mémoire).<br>
Contituée de 2 éléments : Un <u>nom</u> et une <u>valeur</u>. 
(on l'appelle par son nom et ns répond par sa valeur)
</p>
<table>
        <tr>
                <th>Valeur</th>
                <th>Type</th>
                <th>Exemple</th>
        </tr>
        <tr>
                <td>Chaîne de caractères</td>
                <td>string</td>
                <td><mark>$nom=</mark>'Bastien'<mark>;</mark> (apostrophes ' ou ")</td>
        </tr>
         <tr>
                <td>Nombres entiers</td>
                <td>int</td>
                <td>3</td>
        </tr>
         <tr>
                <td>Nombres décimaux</td>
                <td>float</td>
                <td>14<mark>.</mark>738 (on met un pt, pas virgule)</td>
        </tr>
         <tr>
                <td>Booléens</td>
                <td>bool</td>
                <td>true</td>
        </tr>
        <tr>
                <td>Rien</td>
                <td>NULL</td>
                <td>NULL</td>
        </tr>
</table>
<p> Pr l'afficher, utiliser "echo". <u><em>Ex</em></u>:
<span class="important">
&lt;?php $prenom = 
"Bastien";<mark>echo</mark> $prenom;?&gt;
</span>
 (quand il s'agit d'une variable, 
on ne met pas de guillemets autour)</p> 
<p><u>Concaténer</u> (assembler) variables: <mark>"{$nom}"</mark> ou <mark>''.$nom.''</mark> .</p>
<p><u>Calcul</u>: le <strong>modulo</strong> (<mark>%</mark>) -> Sert à garder le "reste" du calcul 
(=10 % 3 -> prend la valeur 1 car il reste 1).<br>
Pr les opérations plus complexes, on utilisera des "fonctions".</p>
<p><u>Conditions</u>: if... else (<mark>!==</mark> (est différent de)), <mark>elseif</mark> 
"sinon si", booléens (plus rapide à écrire, juste un =, si variable vaut false -> 
<mark>!</mark> avt)</p>
<div class="important">
&lt;?php $isEnabled = true;<br>
<mark>if</mark> ($isEnabled === true) {<br>
<strong>echo</strong> "Vous êtes autorisé(e) à accéder au site ✅";}<br>
<mark>else</mark> {<br>
<strong>echo</strong> "Accès refusé ❌ ";} ?>
</div>
<p>conditions multiples (plusieurs conditions à la fois): Et (&&), Ou (||)</p>
<div class="important">
&lt;?php<br>
$isEnabled = true;<br>
$isOwner = false;<br>
$isAdmin = true;<br>
if (($isEnabled <mark>&&</mark> $isOwner) <mark>||</mark> $isAdmin) {<br>
    echo 'Accès à la recette validé ✅';<br>
} else {<br>
    echo 'Accès à la recette interdit ! ❌';}?&gt;
</div>
<p>"switch" (avec "case" et "break") qd on a une "série" de conditions à analyser.<br>
"ternaire" (conditions très condensées).</p>
<p><u>Boucles</u>: Pr "répéter automatiquement" ces instructions (ds { }). 
Sur le même principe qu'une condition  if… else<br>
<strong>While</strong> ("tant que", sinon boucle infinie), <strong>For</strong> 
(donne même résultat que "while", pr nbre de boucles exactes à effectuer (dc si on le sais d' 
avance))<br>
<div class="important">
&lt;?php<br>
$lines = 1;<br>
while ($lines <= 100) <mark>{</mark><br>
echo 'Je ne dois pas regarder les mouches voler quand j\'apprends le PHP.&lt;br /&gt;';<br>
$lines<mark>++</mark>; // $lines = $lines + 1}?&gt; 
<mark>(incrémentation: ajouter +1 à la variable)</mark>
</div>
<div class="important">
for <mark>(</mark>$lines = 0<mark>;</mark> $lines <= 2; $lines++) {<br>
echo $users[$lines]['full_name'] . ' ' . $users[$lines]['email'] . '&lt;br /&gt;';}<br>
<br>
<br>
</div>
</p>
<p>
<u>Les tableaux</u>:Type de structure pr stocker et parcourir une liste d'éléments.<br>
Tableau "<strong>associatif</strong>" (on remplace les "chiffres"), 
pr découper une donnée en plusieurs sous-éléments. <br>
<div class="important">
&lt;?php<br>
$user1 = <mark>[</mark>'Bastien', 'email', 'S3cr3t', 44];<br>
echo $user1[<mark>0</mark>]; // "Bastien" <br>
<mark>(ces chiffres sont les "indices" <br>
<em>Rm</em>: On peut laisser les crochets vides)</mark><br>
echo $user1[1]; // "email"<br>
echo $user1[3]; // 44<br>
?&gt;
</div>
<div class="important">
&lt;?php<br>
$recipe = [<br>
'title' <mark>=></mark> 'Cassoulet', <mark>(associé à)</mark><br>
'recipe' => 'Etape 1 : des flageolets, Etape 2 : ...',<br>
'author' => 'john.doe@exemple.com',<br>
'enabled' => true,];<br>
?&gt;<br>
<br>
</div>
<div class="important">
&lt;?php <mark>(On peut le faire case par case)</mark><br>
$recipe['title'] = 'Cassoulet';<br>
$recipe['recipe'] = 'Etape 1 : des flageolets, Etape 2 : ...';<br>
$recipe['author'] = 'john.doe@exemple.com';<br>
$recipe['enable'] = true;<br>
?&gt;<br>
<br>
<br>
</div>
</p>
<p>Pour explorer ensuite un tb: boucle  for, boucle  foreach, fonction print_r (pr déboggage)
<div class="enligne">
<div class="important">
&lt;?php<br>
$recipes = [<br>
['Cassoulet','[...]','bastien.spt@exemple.com',true,],<br>
['Couscous','[...]','bastien.spt@exemple.com',false,],];<br>
<mark>for</mark> ($lines = 0; $lines <= 1; $lines++) {<br>
echo $recipes[$lines][0];} <mark>(ou...)</mark><br>
<mark>foreach</mark> ($recipes as $recipe) {<br>
    echo $recipe[0];} // Affichera Cassoulet, puis Couscous<br>
&gt;?php <mark>(ou...)</mark><br>
echo '&lt;pre&gt;';<br>
<mark>print_r</mark>($recipes);<br>
echo '&lt;/pre&gt;';<br>
?&gt;
</div>
<div>
Faire des recherches dans des tableaux<br>
<div class="important">
&lt;?php<br>
$recipe = [<br>
    'title' => 'Salade Romaine',<br>
    'recipe' => 'Etape 1 : Lavez la salade ; Etape 2 : euh ...',<br>
    'author' => 'laurene.castor@exemple.com',];<br>
<mark>if</mark> (<mark>array_key_exists</mark>('title', $recipe))<br>
{echo 'La clé "title" se trouve dans la recette !'<mark>;</mark>}<br>
if (array_key_exists('commentaires', $recipe))<br>
{echo 'La clé "commentaires" se trouve dans la recette !';}<br>
?&gt;
</div>
</p>
<strong>array_key_exists</strong> pr vérifier si une clé existe dans le tableau.<br>
<strong>in_array</strong> pr vérifier si une valeur existe dans le tableau.<br>
<strong>array_search</strong> pr récupérer la clé d'une valeur dans le tableau.</p>
</div>
</div>
<p><u>Fonctions PHP</u>: Svt existe déjà. Sinon, la créer.<br> 
 Comme les boucles, les fcts permettent d'éviter d'avoir à répéter du code <br>
(ms intelligentes (= comme des "robots"), 
 donc pr faire de l' "<mark>automatisation</mark>").<br>
Contiennent svt elles mêmes  "boucles" et "conditions".</p>
<div class="enligne">
<div class="important">
&lt;?php<br>
$recipe = [<br>
    'title' => 'Escalope milanaise',<br>
    'recipe' => '',<br>
    'author' => 'mathieu.nebra@exemple.com',<br>
    'is_enabled' => true,];<br>
<mark>allowRecipe</mark>($recipe); // retourne le booléen true<br>
?&gt;
</div>
<div>
On appelle la fct puis on la récupère ds une variable.<br>
<div class="important">
&lt;?php<br>
$isAllowed = <mark>allowRecipe(</mark>[<br>
    'title' => 'Escalope milanaise'<mark>,</mark><br>
    'recipe' => '',<br>
    'author' => 'mathieu.nebra@exemple.com',<br>
    'is_enabled' => true,]<mark>);</mark><br>
<mark>if ($isAllowed) {</mark><br>
    echo 'La recette doit être affichée !';<br>
} else {<br>
    echo 'La recette doit être cachée !';}
</div>
</div>
<div class="important">
<mark>str_replace</mark> pr rechercher et remplacer des mots dans une variable <br>
(pr rechercher et remplacer une chaîne de caractères);<br>
<mark>strlen</mark> pr calculer la longueur d'une chaîne de caractères ;<br>
<mark>sprintf</mark> pr formater une chaîne de caractères.<br>
<mark>move_uploaded_file</mark> pr envoyer un fichier sur un serveur ;<br>
<mark>imagecreate</mark> pr créer des images miniatures (aussi appelées "thumbnails") ;<br>
<mark>mail</mark> pr envoyer un mail avec PHP (très pratique pour faire une newsletter) ;<br>
De nombreuses options pour modifier des images, y écrire du texte, 
tracer des lignes, des rectangles, etc. ;<br>
<mark>crypt</mark> pr chiffrer des mots de passe ;<br>
<mark>date</mark> pr renvoyer l'heure, la date, etc.<br>
...<br>
Dans la plupart des cas, faudra indiquer des paramètres à la fct, 
pr qu'elle sache sur quoi travailler.
</div>
</div>
<p>En écrire une soi-même</p>
<div class="important">
&lt;?php<br>
<mark>function isValidRecipe(array $recipe</mark>) : bool<mark>{</mark><br>
    if (array_key_exists('is_enabled', $recipe)) {<br>
        $isEnabled = $recipe['is_enabled'];<br>
    } else {<br>
        $isEnabled = false;}<br>
    return $isEnabled;}
</div>
<p><u>Si script plante</u>:<br>
<mark>Parse error</mark> (instruction mal formulée)<br>
<mark>Undefined function</mark> (fct non reconnue)<br>
<mark>Wrong parameter count</mark> (si nombre incorrect de paramètres pour une fct)
</p>
<p><u>Organisation</u>:<br>
Une page PHP peut inclure une autre page (ou un morceau de page) grâce à l'instruction 
<mark>require_once</mark> (sera remplacée par le contenu de la page demandée).<br>
Permet placer menus de son site dans un fichier <mark>header.php</mark> 
(que l'on inclura dans toutes les pages). </p>
<h3> URL (Faire transiter informations de page en page)</h3>
<div class="enligne">
<img src="url.png" id="url"><br>
<p>URL = Adresse web.
Commence généralement par http:// .<br>
Qd on fait un lien vers une page, possible d'ajouter paramètres:<br> 
bonjour.php<mark>?</mark>nom=Spt<mark>&</mark>prenom=Bastien (qui seront transmis à la page).<br>
Page de réception recoit ces paramètres dans un "array"(tableau) nommé <mark>$_GET</mark><br> 
(pr transmettre des valeurs à une page).<br>
<mark>isset()</mark> permet vérifier si une variable est définie ou non.<br>
<mark>filter_var()</mark> , <mark>trim()</mark> ou <mark>empty()</mark> 
peuvent être utilisées pour validation des champs.</p> 
</div>
<p><u>Formulaires</u>: Les données rentrées par visiteurs sont exploitables (pas comme html)<br>
Attention car visiteurs peuvent agir via nos formulaire ! (On ne doit pas plus faire confiance 
aux formulaires (données via <mark>$_POST</mark>) qu'aux URL (données via $_GET)) <br>
Les <strong>sécuriser</strong>: Pr éviter faille <mark>XSS</mark>, suffit appliquer fct 
<mark>htmlspecialchars</mark> ou <mark>strip_tags</mark> sur ts les textes envoyés par visiteurs.<br>
Ajouter attribut <mark>enctype="multipart/form-data"</mark> à la balise  <mark>&lt;form&gt;</mark>.<br>
Informations sur les fichiers envoyés ds un array <mark>$_FILES</mark>.</p>
<p><u>Protégez le "contenu d'une page" par un MP</u> :<br></p>
<div class="enligne">
<div>
<mark>login.php</mark> (contient le formulaire)
<div class="important">
&lt;?php<br>
$postData = $_POST; <strong>// Validation du formulaire</strong><br>
if (isset($postData['email']) &&  isset($postData['password'])) {<br>
    if (!filter_var($postData['email'], FILTER_VALIDATE_EMAIL)) {<br>
        $errorMessage = 'Il faut un email valide pour soumettre le formulaire.';<br>
    } else {<br>
        foreach ($users as $user) {<br>
            if (<br>
                $user['email'] === $postData['email'] &&<br>
                $user['password'] === $postData['password']<br>
            ) {<br>
                $loggedUser = [<br>
                    'email' => $user['email'],<br>
                ];}}<br>
        if (!isset($loggedUser)) {<br>
            $errorMessage = sprintf(<br>
                'Les informations envoyées ne permettent pas de vous identifier : (%s/%s)',<br>
                $postData['email'],<br>
                strip_tags($postData['password'])<br>
            );}}}<br>
?&gt;<br>
<strong>&lt;!--Si utilisateur/trice est non identifié(e), on affiche le formulaire--&gt;</strong><br>
&lt;?php if (!isset($loggedUser)) : ?&gt;<br>
    &lt;form action="index.php" method="POST"&gt; <br>
<strong>&lt;!-- si message d'erreur on l'affiche --&gt;</strong><br>
        &lt;?php if (isset($errorMessage)) : ?&gt;<br>
            &lt;div class="alert alert-danger" role="alert"&gt;<br>
                &lt;?php echo $errorMessage; ?&gt;<br>
            &lt;/div&gt;<br>
        &lt;?php endif; ?&gt;<br>
        &lt;div class="mb-3"&gt;<br>
            &lt;label for="email" class="form-label"&gt;Email&lt;/label&gt;<br>
&lt;input type="email" class="form-control" <br>
id="email" name="email" aria-describedby="email-help" 
placeholder="you@exemple.com"&lt;<br>
&lt;div id="email-help" class="form-text">L'email utilisé lors de la création de 
compte.&lt;/div&gt;<br>
&lt;/div&gt;<br>
&lt;div class="mb-3"&gt;<br>
&lt;label for="password" class="form-label"&gt;Mot de passe&lt;/label&gt;<br>
&lt;input type="password" class="form-control" id="password" name="password"&gt;<br>
&lt;/div&gt;<br>
&lt;button type="submit" class="btn btn-primary">Envoyer&lt;/button&gt;<br>
&lt;/form&gt;<br>
<strong>&lt;!-- Si utilisateur/trice bien connectée on affiche un message de succès --&gt;</strong><br>
&lt;?php else : ?&gt;<br>
&lt;div class="alert alert-success" role="alert"&gt;<br>
Bonjour &lt;?php echo $loggedUser['email']; ?&gt; et bienvenue sur le site !<br>
&lt;/div&gt;<br>
&lt;?php endif; ?&gt;
</div> 
</div>
<div>
<mark>index.php</mark> (2eme fichier qui doit inclure un formulaire de connexion<br>
 et une condition sur l'affichage du 1er formulaire (login.php))
<div class="important">
<strong>&lt;!-- inclusion des variables et fonctions --&gt;</strong><br>
&lt;?php<br>
require_once(__DIR__ . '/variables.php');<br>
require_once(__DIR__ . '/functions.php');<br>
?&gt;<br>
&lt;!DOCTYPE html&gt;<br>
&lt;html&gt;<br>
&lt;head&gt;<br>
&lt;meta charset="UTF-8"&gt;<br>
&lt;meta http-equiv="X-UA-Compatible" content="IE=edge"&gt;<br>
&lt;meta name="viewport" content="width=device-width, initial-scale=1.0"&gt;<br>
&lt;title&gt;Site de recettes - Page d'accueil&lt;/title&gt;<br>
&lt;link<br>
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"<br>
            rel="stylesheet"<br>
&gt;<br>
&lt;/head&gt;<br>
&lt;body class="d-flex flex-column min-vh-100"&gt;<br>
&lt;div class="container"&gt;<br>
<strong>&lt;!-- inclusion de l'entête du site --&gt;</strong><br>
&lt;?php require_once(__DIR__ . '/header.php'); ?&gt;<br>
&lt;h1&gt;Site de recettes&lt;/h1&gt;<br>
        &lt;!-- Formulaire de connexion --&gt;<br>
&lt;?php require_once(__DIR__ . '/login.php'); ?&gt;<br>
        &lt;?php if (isset($loggedUser)) : ?&gt;<br>
        &lt;?php foreach (getRecipes($recipes) as $recipe) : ?&gt;<br>
        &lt;article&gt;<br>
&lt;h3&gt;&lt;?php echo $recipe['title']; ?&gt;&lt;/h3&gt;<br>
&lt;div&gt;&lt;?php echo $recipe['recipe']; ?&gt;&lt;/div&gt;<br>
&lt;i&gt;&lt;?php echo displayAuthor($recipe['author'], $users); ?&gt;&lt;/i&gt;<br>
&lt;/article&gt;<br>
&lt;?php endforeach ?&gt;<br>
&lt;?php endif; ?&gt;<br>
&lt;/div&gt;<br>
<strong>&lt;!-- inclusion du bas de page du site --&gt;</strong><br>
&lt;?php require_once(__DIR__ . '/footer.php'); ?&gt;<br>
&lt;/body&gt;<br>
&lt;/html&gt;
</div>
</div>
</div>
<p><u>Cookies (conserver données)</u>:<br>
Faire des "sessions": Besoin d'un numéro d'identifiant (= "ID de session" = PHPSESSID)<br>
Une fois session générée, on y créer variables de session pour nos besoins (ex: $_SESSION['nom']).<br>
Il faut appeler session_start() sur chacune des pages AVANT d'écrire le moindre code HTML ou PHP 
(avant même la balise  <!DOCTYPE>). 
Si on oublie de lancer session_start(), on ne peut pas accéder à la variable superglobale 
$_SESSION.</p>
<p>Les cookies retiennent des informations ms ne sont pas dangereux pr un ordinateur.<br>
Fct PHP <mark>setcookie</mark> (Placer un cookie) avc 3 paramètres:<br> 
nom du cookie (ex: LOGGED_USER), valeur du cookie (ex: utilisateur@exemple.com), 
date d'expiration du cookie (sous forme de "timestamp" (ex: 1090521508) avec time()).</p>
<p>Sécurisez un cookie avec propriétés <mark>httpOnly</mark> et <mark>secure</mark></p>
<h3>BDD</h3>
<p>Pr <u>enregistrer</u> les données de façon organisée et hiérarchisée.</p>
<h4>SGBD avec MySQL</h4>
<p>On créé des "tables" mais on utilisera un "outil" pr s'y retrouver.</p>
<h5>Langage SQL (utilisé pr tte les SGBD)</h5>
<div class="important">
<mark>SELECT</mark> id, auteur, message, datemsg <mark>FROM</mark> livreor 
<mark>ORDER BY</mark> datemsg <mark>DESC</mark>
</div>
<h5>phpMyAdmin</h5>
<p>Outil pr manipuler la base de donnée mysql avec php<br>
Permet de visualiser rapidement l'état de la BDD et de la modifier 
(sans avoir à écrire de requêtes SQL).<br>
On crée généralement un champ nommé id (sert à numéroter entrées d'une table). 
Ce champ doit avoir un index PRIMARY (on dit qu'on crée une clé primaire) <br>
et l'option AUTO_INCREMENT qui permet de laisser MySQL gérer la numérotation.<br>
MySQL gère différents types de données pour ses champs, à la manière de PHP. 
On trouve des types adaptés au stockage de nombres, de textes, de dates, etc.<br>
phpMyAdmin possède un outil d'importation et d'exportation des tables qui permettra 
notamment d'envoyer BDD sur Internet ou d'en conserver une copie.
</p>
<p>Pour se connecter à une base de données MySQL, utiliser une extension PHP 
appelée <mark>PDO</mark> ("PHP Data Objects"). Donc activer l'extension.<br>
Utiliser mots-clés ds l'ordre: WHERE, ORDER BY, LIMIT, sinon MySQL ne comprendra pas requête.<br>
<em>Rm</em>: On ne concatène JAMAIS une requête SQL pour passer des variables (risque de créer 
des injections SQL !). </p>
<p>INSERT INTO (ajout d'une entrée), UPDATE (modification d'une ou plusieurs entrées),
DELETE (suppression d'une ou plusieurs entrées).<br>
Comme pr sélection données, requêtes préparées pour personnaliser requêtes en fct de variables.<br>
Qd on utilise UPDATE  ou DELETE , filtrer avec un WHERE, 
sinon toute la table sera affectée par l'opération.</p>
<p>Les BDD permettent d'associer plusieurs tables entre elles.<br>
Une table peut contenir les id d'une autre table (permet de faire liaison entre les deux).
Pr rassembler informations au moment requête, on effectue des jointures.<br>
On réalise des jointures entre les tables à l'aide du mot-clé JOIN.<br>
On distingue les jointures internes (retournent des données uniquement si correspondance entre 
les deux tables), et les jointures externes (retournent ttes les données, même si pas de 
correspondance).</p>
<p> MySQL permet d'exécuter certaines fonctions lui-même, sans avoir à passer par PHP;<br>
fcts SQL -> 2 catégories :<br>
Les fctions <mark>scalaires</mark>: Agissent sur chaque entrée. 
(ex: Transformer en majuscules la valeur de chacune des entrées d'un champ).<br>
Les fctions <mark>d'agrégat</mark>: Des calculs sont faits sur ensemble de la table pr 
retourner une valeur (ex: Calculer moyenne des prix retourne une valeur : le prix moyen).<br>
On peut donner un autre nom aux chps modifiés par les fcts, en créant des "alias" 
à l'aide du mot-clé <mark>AS</mark>.<br>
Qd on utilise une fct d'agrégat, possible de regrouper des données avec <mark>GROUP BY</mark>.<br>
Après un groupement de données, on peut filtrer résultat avec <mark>HAVING</mark> 
(pas le confondre avec "WHERE" qui filtre avant le groupement des données).
</p>
<h2>Architecture MVC (Modèle Vue Contrôleur) en PHP (pr mieux organiser code)
        <span class="sql">
        <a href="https://openclassrooms.com/fr/courses/4670706-adoptez-une-architecture-mvc-en-php"
target="_blank">Cours ici</a>
        </span>
</h2>
<p></p>
<h2>POO (programmation orientée objet)
        <span class="sql">
        <a href="https://openclassrooms.com/fr/courses/1665806-programmez-en-oriente-objet-en-php"
target="_blank">Cours ici</a>
        </span>
</h2>
<h2>Symfony (framework PHP)
        <span class="sql">
        <a href="https://openclassrooms.com/fr/courses/8264046-construisez-un-site-web-a-l-aide-du-framework-symfony-7"
target="_blank">Cours ici</a>
        </span>
</h2>