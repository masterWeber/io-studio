const gulp = require('gulp');
const series = gulp.series;
const fs = require('fs');
const rename = require('gulp-rename');
const postcss = require('gulp-postcss');
const autoprefixer = require('autoprefixer');
const postcssImport = require('postcss-import');
const postcssPresetEnv = require('postcss-preset-env');
const sortMediaQueries = require('postcss-sort-media-queries');
const cssnano = require('cssnano');
const babel = require('gulp-babel');
const uglify = require('gulp-uglify');
const sourcemaps = require('gulp-sourcemaps');

const clear = (cb) => {
    fs.rmSync('./build', { recursive: true, force: true });
    cb();
};

const copy = () => {
    return gulp.src([
        './source/*',
        './source/.*',
        './source/app/**/*',
        './source/images/**/*',
        './source/assets/css/vendor/swiper/swiper.min.css',
        './source/assets/js/vendor/swiper/swiper.min.js',
        './source/assets/video/**/*',
    ], {
            base: "./source"
        })
        .pipe(gulp.dest("./build"));
};

const cssProcess = [
    autoprefixer,
    postcssImport,
    postcssPresetEnv({ autoprefixer: false }),
    sortMediaQueries({ sort: 'desktop-first' }),
    cssnano
];

const css = () => {
    return gulp.src('./source/assets/css/style.css')
        .pipe(sourcemaps.init())
        .pipe(postcss(cssProcess))
        .pipe(rename({
            suffix: '.min',
        }))
        .pipe(sourcemaps.write('.'))
        .pipe(gulp.dest('./build/assets/css/'));
};

const javaScriptCommon = () => {
    return gulp.src('./source/assets/js/common/common.js')
        .pipe(sourcemaps.init())
        .pipe(babel({
            presets: ['@babel/preset-env'],
        }))
        .pipe(uglify()).pipe(rename({
            suffix: '.min',
        }))
        .pipe(sourcemaps.write('.'))
        .pipe(gulp.dest('./build/assets/js/'));
};

const javaScriptSwiper = () => {
    return gulp.src('./source/assets/js/common/swiper-init.js')
        .pipe(sourcemaps.init())
        .pipe(babel({
            presets: ['@babel/preset-env'],
        }))
        .pipe(uglify()).pipe(rename({
            suffix: '.min',
        }))
        .pipe(sourcemaps.write('.'))
        .pipe(gulp.dest('./build/assets/js/'));
};

gulp.task('default', series(clear, copy, css, javaScriptCommon, javaScriptSwiper));

gulp.task('watch', () => {
    gulp.watch('./source/assets/css/**/*.css', css);
    gulp.watch('./source/assets/js/common/**/*.js', javaScriptCommon);
});

