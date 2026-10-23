//Récupère Express, crée application Express (avec express(), rend app disponible
//pr que server.js puisse l’utiliser.
const express = require('express');
//(8)
const mongoose = require('mongoose');
//fin (8)
const app = express();
//(9) Connexion à la base de données MongoDB
mongoose.connect(process.env.MONGODB_URI)
  .then(() => console.log('Connexion à MongoDB réussie !'))
  .catch((error) => console.log('Connexion à MongoDB échouée !', error));
//fin (9)
//(5) Permet Express de lire du JSON envoyé ds le corps d’une requête,
//par exemple quand le front-end enverra un nouvel objet au back-end.
app.use(express.json());
//fin (5)
//(3) Ce bloc autorise front-end à communiquer avec back-end
app.use((req, res, next) => {
  res.setHeader('Access-Control-Allow-Origin', '*');
  res.setHeader(
    'Access-Control-Allow-Headers',
    'Origin, X-Requested-With, Content, Accept, Content-Type, Authorization'
  );
  res.setHeader(
    'Access-Control-Allow-Methods',
    'GET, POST, PUT, DELETE, PATCH, OPTIONS'
  );
  next();
});
//fin (3)
//(2) app.use(...) dit à Express : « quand une requête arrive, exécute cette fonction ».
   //app.use((req, res) => {
//res.json(...) renvoie une réponse au navigateur sous forme de JSON.
   //res.json({ message: 'Votre requête a bien été reçue !' });
   //});
//fin (2)
//(4) Avec '/api/stuff', maintenant cette réponse correspond à une route précise.
    //app.use('/api/stuff', (req, res) => {
    //res.status(200).json({
    //message: 'Requête reçue !'
    //});
    //});
//fin (4)
//(6) Notre API renvoyait un simple message.
//  Maintenant, elle renvoie un tableau contenant un objet, comme le ferait une vraie API.
   //app.use('/api/stuff', (req, res) => {
   //const stuff = [
   // {
   // _id: 'oeihfzeoi',
   //title: 'Mon premier objet',
   //description: 'Les infos de mon premier objet',
   //imageUrl: '',
   //price: 4900,
   //userId: 'qsomihvqios'
   //}
   //];
   //res.status(200).json(stuff);
   //});
//fin (6)
//(7) On vient de créer rtes ds stuff.js et déplacer le (6)
const stuffRoutes = require('./Routes/stuff');
app.use('/api/stuff', stuffRoutes);

module.exports = app;