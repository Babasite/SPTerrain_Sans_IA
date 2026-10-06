//Relier .js à HTML : <script src="cours2.js"></script> juste avt "</body>"

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
//-----------------------------------------------------------------    