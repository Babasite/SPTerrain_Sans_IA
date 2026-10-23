//Contrôleur contient réponse, tandis que Routes/stuff.js décidera qud appeler cette fct.
exports.getAllStuff = (req, res) => {
  res.status(200).json([
    {
      _id: 'oeihfzeoi',
      title: 'Mon premier objet',
      description: 'Les infos de mon premier objet',
      imageUrl: '',
      price: 4900,
      userId: 'qsomihvqios'
    }
  ]);
};