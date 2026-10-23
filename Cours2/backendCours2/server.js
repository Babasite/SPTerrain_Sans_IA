//On veut récupérer "module http de Node.js" pr pouvoir créer un "serveur HTTP"
const http = require('http');
//Qd on a créé app.js avec Express
const app = require('./app');
//On créer un serveur (pr ne pas utiliser Vite en backend)
  //const server = http.createServer((req, res) => {
  //res.end('Voilà la réponse du serveur avec nodemon cette fois !');
  //});
//Qd on a créé app.js, pr transmettre requêtes à Express , on remplace par
const server = http.createServer(app);  
//Port sur lequel on veut "écouter" avec ce serveur
server.listen(process.env.PORT || 3000);