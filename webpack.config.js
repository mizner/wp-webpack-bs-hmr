const webpack = require('webpack');
const {resolve} = require('path');
const merge = require('webpack-merge');
const config = require('./config');
const APP_DIR = resolve(__dirname, 'src');
const BUILD_DIR = resolve(__dirname, 'dist');


let webpackConfig = {
    context: APP_DIR,
    entry: config.entry,
    output: {
        filename: config.project + '.min.js',
        path: BUILD_DIR,
        publicPath: config.publicPath,
    },
    stats: false,
    plugins: [

    ],
};

webpackConfig.entry = require('./webpack/util/addHotMiddleware')(webpackConfig.entry);
webpackConfig = merge(webpackConfig, require('./webpack/webpack.config.watch'));

module.exports = webpackConfig;

