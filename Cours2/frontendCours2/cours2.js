//Relier .js à HTML : <script src="cours2.js"></script> juste avt "</body>"

//Si on a des "librairies", les importer en 1eres.
import Chart from "chart.js/auto";

//Ok donc on va dire qu'un léopard apporte 10 entrées si ils sont 3 
//mais qu'un léopard apporte 4 entrée si ils sont juste 2 .
//Si on reste sur 10 entrées par léopard de plus apres 3, 
// Combien j'aurais d'entrées si j'ai 5 léopards ? (réponse 50)
const nombreLeopards = 5
let nombreEntrees
if (nombreLeopards === 2) {
    nombreEntrees = nombreLeopards * 4
}
else if (nombreLeopards >= 3) {
    nombreEntrees = nombreLeopards * 10
}
console.log(nombreEntrees) // 50

//----------------------------------------------------------------Bouton ()
// Modifier balise avec "id" (Ex: <p> donne <p id="titreDOM"></p>)
const titreDOM = document.getElementById("titreDOM");
//Déclaration "const"(changera pas)= variable 
//Cherche dans mon HTML l'élément qui possède id="titreDOM" et garde-le dans une variable
//  appelée titreDOM.
//
let nombreClics = 0;
titreDOM.addEventListener("click", function () {
    nombreClics++;
    // 1er clic
    if (nombreClics === 1) {
        const message = document.createElement("p");
        message.id = "messageDOM";
        message.textContent = '"Une fenêtre","la console". Maintenant sur HTML !!!!';
        message.style.fontSize = "4em";
        message.style.position = "absolute";
        message.style.left = "500px";
        message.style.top = (titreDOM.offsetTop-120) + "px";
        titreDOM.after(message);}
    // 2e clic
    if (nombreClics === 2) {
        const message = document.getElementById("messageDOM");
        message.textContent = ' J\'ai changé balise <p>:\n<p id="titreDOM"</p> ' ;
        message.style.whiteSpace = "pre-line";
        message.style.color = "blue";}
    // 3e clic
    if (nombreClics === 3) {
    const message = document.getElementById("messageDOM");
    // On retire la 2eme phrase
    message.remove();
    // On crée l'image
    const feu = document.createElement("img");
     // On indique le GIF à afficher
    feu.src = "ImagesCours2/FeuArtifice.gif";
    feu.alt = "Feu d'artifice";
    feu.style.width = "300px";
    // Le GIF ne déplace pas le reste de la page
    feu.style.position = "absolute";
    feu.style.left = "500px";
    feu.style.top = (titreDOM.offsetTop-120) + "px";
    // On ajoute le GIF
    titreDOM.after(feu);}});
//-----------------------------------------------------------------  Pour travailler sur .json 
// Récupérer les données du fichier JSON : 

//Dire au .html que mon JS est un "module" en y remplacant <script src="cours2.js"></script>
//par <script type="module" src="cours2.js"></script> ,puis ds .js : 
const reponse = await fetch("cours2.json");
// Mon 1er "fetch". Il va chercher mon fichier cours2.json
const donnees = await reponse.json();
// Transforme la réponse JSON en données utilisables par JavaScript
console.log(donnees);
// Affiche les données récupérées dans la console

// Récupérer bouton JSON
const boutonJSON = document.getElementById("boutonJSON");
boutonJSON.addEventListener("click", async function () {
    // Je vais chercher le fichier JSON
    const reponse = await fetch("cours2.json");
    // Je transforme le JSON pour que JS puisse le lire
    const donnees = await reponse.json();
    // Je crée un texte
    const texte = document.createElement("p");
    // Le texte vient du fichier JSON !
    texte.textContent = donnees.message;
    // Pour modifier le CSS de mon .json via .js (ms le CSS est bien ds .css, 
    // c'est juste pr transmettre)
    texte.classList.add("texteJSON");
    // Je l'affiche sur ma page
    boutonJSON.parentElement.appendChild(texte);
});

// Mon 2eme "fetch". Il va chercher mon "API" météo (et plus "fichier" cours2.json)
// Rm: Ici, plus de bouton, on regarde les résultats sur la Console.
const reponseMeteo = await fetch(
    "https://api.open-meteo.com/v1/forecast?latitude=48.559&longitude=3.299&current=temperature_2m,weather_code"
);
const donneesMeteo = await reponseMeteo.json();
console.log(donneesMeteo);
const temperature = donneesMeteo.current.temperature_2m;
console.log(temperature);
const codeMeteo = donneesMeteo.current.weather_code;
console.log(codeMeteo);
//Puis on transforme ce codeMeteo en symbole météo.
let symboleMeteo;
if (codeMeteo === 0) {
    symboleMeteo = "☀️";
}
else if (codeMeteo <= 3) {
    symboleMeteo = "☁️";
}
// console.log(symboleMeteo); (pour vérifier. Puis je complete...)
else if (codeMeteo >= 71 && codeMeteo <= 77) {
    symboleMeteo = "❄️";
}
else {
    symboleMeteo = "🌧️";
}
console.log(symboleMeteo); // Ensuite on créé un boutonMétéo sur html pour la voir
//  (c'est avec un "id=" dc pour en changer le css, suffira de l'appeler avec un "#". )
const meteo = document.getElementById("meteo");
const resultatMeteo = document.querySelector(".resultatMeteo");
resultatMeteo.textContent = symboleMeteo + " " + temperature + " °C";
// Faire un graphique avec librairie "Chart"
const graphique = document.getElementById("monGraphique");
new Chart(graphique, {type: "bar",data: {
    labels: ["Lundi", "Mardi", "Mercredi"],datasets: [{data: [10, 20, 15]}]}
    });
