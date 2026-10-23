const express = require('express');
//(b) On a créer un stuff.js Controllers
const stuffCtrl = require('../Controllers/stuff');
//fin (b) 

const router = express.Router();
//(c) Remplacer fct qui renvoie directement JSON par un appel au contrôleur.
               //router.get('/', (req, res) => {
               //res.status(200).json([
     // (a) on déplace une partie du (6) de app.js
              //{
              //  _id: 'oeihfzeoi',
              //  title: 'Mon premier objet',
              //  description: 'Les infos de mon premier objet',
              //  imageUrl: '',
              //  price: 4900,
              //  userId: 'qsomihvqios'
              // }]);});
     //fin de (a)
     router.get('/', stuffCtrl.getAllStuff);
//fin de (c)
module.exports = router;