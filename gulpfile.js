const gulp = require('gulp');
const series = gulp.series;
const rename = require('gulp-rename');
const postcss = require('gulp-postcss');
const autoprefixer = require('autoprefixer');
const postcssImport = require('postcss-import');
const cssnext = require('cssnext');
const cssMqpacker = require('css-mqpacker');
const cssnano = require('cssnano');
const babel = require('gulp-babel');
const uglify = require('gulp-uglify');
const sourcemaps = require('gulp-sourcemaps');

const cssProcess = [
  autoprefixer,
  postcssImport,
  cssnext,
  cssMqpacker({
    sort: (a, b) => {
      a = a.match(/\d+/i);
      b = b.match(/\d+/i);
      return b - a;
    },
  }),
  cssnano
];

const css = () => {
  return gulp.src('./assets/css/style.css').
      pipe(sourcemaps.init()).
      pipe(postcss(cssProcess)).
      pipe(rename({
        suffix: '.min',
      })).
      pipe(sourcemaps.write('.')).
      pipe(gulp.dest('./assets/css/'));
};

const javaScriptCommon = () => {
  return gulp.src('./assets/js/common/common.js').
      pipe(sourcemaps.init()).
      pipe(babel({
        presets: ['@babel/preset-env'],
      })).
      pipe(uglify()).
      pipe(rename({
        suffix: '.min',
      })).
      pipe(sourcemaps.write('.')).
      pipe(gulp.dest('./assets/js/'));
};

const javaScriptSwiper = () => {
  return gulp.src('./assets/js/common/swiper-init.js').
      pipe(sourcemaps.init()).
      pipe(babel({
        presets: ['@babel/preset-env'],
      })).
      pipe(uglify()).
      pipe(rename({
        suffix: '.min',
      })).
      pipe(sourcemaps.write('.')).
      pipe(gulp.dest('./assets/js/'));
};

gulp.task('default', series(css, javaScriptCommon, javaScriptSwiper));

gulp.task('watch', function() {
  // При изменение файлов *.css в папке "assets/css" и подпапках запускаем
  // задачу css
  gulp.watch(['./assets/css/**/*.css', '!./assets/css/style.min.css'], css);
  // При изменение файлов *.js папке "assets/js" и подпапках запускаем задачу
  // javaScript
  gulp.watch('./assets/js/common/**/*.js', javaScriptCommon);
});

