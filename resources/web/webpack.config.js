var webpack = require('webpack');

var webpackConfig = {
    output: {
        filename: "app.min.js"
    },
    target: "node",
    module: {
        loaders: [
            {
                loader: "babel-loader",
                test: /\.js$/,
                exclude: /node_modules/
            }
        ]
    }
};

module.exports = webpackConfig;