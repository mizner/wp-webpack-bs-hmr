const webpack = require('webpack');
const BrowserSyncPlugin = require('browsersync-webpack-plugin');

const config = require('../config');

const target = config.devUrl;

module.exports = {
    output: {
        pathinfo: true,
        publicPath: config.proxyUrl + config.publicPath,
    },
    devtool: '#cheap-module-source-map',
    stats: false,
    plugins: [
        new webpack.optimize.OccurrenceOrderPlugin(),
        new webpack.HotModuleReplacementPlugin(),
        new webpack.NoEmitOnErrorsPlugin(),
        new BrowserSyncPlugin(
            {
                target,
                proxyUrl: config.proxyUrl,
                watch: config.watch,
                delay: 500,
            }
        ),
    ],
};
