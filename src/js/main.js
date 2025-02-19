"use strict";

import '../scss/style.scss';

require('../../iconfont.font');

const helloWebpack = (name) => {
    console.log(`Hello from ${name}!`);
}

helloWebpack('Webpack and Babel');