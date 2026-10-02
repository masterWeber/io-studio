module.exports = {
    plugins: [
        require('autoprefixer'),
        require('postcss-import'),
        require('postcss-preset-env')({ autoprefixer: false }),
        require('postcss-sort-media-queries')({ sort: 'desktop-first' }),
        require('cssnano'),
    ],
};
