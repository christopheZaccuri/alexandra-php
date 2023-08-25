const path = require('path');

module.exports = {
  entry: './script.js', // Chemin vers votre fichier JavaScript principal
  output: {
    path: path.resolve(__dirname, 'dist'), // Répertoire de sortie pour le bundle
    filename: 'bundle.js' // Nom du bundle généré
  },
};