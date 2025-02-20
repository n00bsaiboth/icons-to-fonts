const path = require('path');

module.exports = {
    'files': [
        './src/icons/*.svg'
    ],
    'fontName': 'iconfont',
    'classPrefix': 'iconfont-',
    'baseSelector': '.iconfont',
    'types': ['eot', 'woff2', 'woff', 'ttf', 'svg'],
    'fileName': '[fontname].[ext]',
    'dest': '../../../src/fonts/iconfont/',
    // 'dest': path.resolve(__dirname, 'src/fonts'),
};