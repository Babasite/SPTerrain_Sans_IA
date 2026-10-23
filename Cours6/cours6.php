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
<p><u>Si script plante</u>:
</p>

