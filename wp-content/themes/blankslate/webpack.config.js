const path = require('path');
const miniCss = require('mini-css-extract-plugin');

module.exports = {
    mode: 'development',
    entry: './assets/js/index.js',
    output: {
        path: path.resolve(__dirname, 'assets/js/'),
        filename: 'index-min.js'
    },
    module: {
        rules: [
            {
                test: /\.(scss|css)$/,
                use: [
                    miniCss.loader,
                    {
                        loader: 'css-loader',
                        options: { url: false }
                    },
                    'sass-loader'
                ],
            },
        ],
    },
    plugins: [
        new miniCss({
            filename: '../main.css',
        }),
    ]
};
