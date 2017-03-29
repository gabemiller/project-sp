var webpack = require('webpack');

var webpackConfig = {
	output:{
		filename : '[name].min.js'
	},

	devtool: 'sourcemap',

	resolve: {
		extensions: ['', '.js']
	},

	module: {
		loaders: [
			{
				loader: "babel-loader",
				test: /\.js$/,
				query: {
					presets: ['es2015']
				}
			}
		]
	},

	plugins: [
		new webpack.optimize.CommonsChunkPlugin({
			name: ['app','vendor']
		}),
		new webpack.optimize.UglifyJsPlugin({
			compress: {
				warnings: false
			}
		}),
		new webpack.ProvidePlugin({
			$: "jquery",
			jQuery: "jquery",
			"window.$": "jquery",
			"window.jQuery": "jquery"
		})
	]
};

module.exports = webpackConfig;