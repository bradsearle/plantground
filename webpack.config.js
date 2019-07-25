// webpack.config.js

module.exports = {
  mode: 'production',
  entry: {
    app: './src/js/app.js'
  },
  output: {
    filename: '[name].js',
    path: __dirname + '/assets/js'
  }
};
