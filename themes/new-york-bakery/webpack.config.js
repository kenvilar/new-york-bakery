let debug = process.env.NODE_ENV !== "production";
let webpack = require( 'webpack' );

module.exports = {
	context : __dirname,
	devtool : debug ? "inline-sourcemap" : false,
	entry   : "./assets/js/custom.js",
	output  : {
		path     : __dirname + "/assets/js",
		filename : "custom.min.js"
	},
	plugins : debug ? [] : [
		new webpack.optimize.OccurrenceOrderPlugin(),
		new webpack.optimize.UglifyJsPlugin( { mangle : false, sourcemap : false } ),
	],
};
