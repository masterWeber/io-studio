const gulp = require('gulp');
const rename = require('gulp-rename');
const postcss = require('gulp-postcss');
const autoprefixer = require('autoprefixer');
const cssnext = require('cssnext');
const precss = require('precss');
const cssnano = require('cssnano');

const processors = [autoprefixer, cssnext, precss, cssnano];

gulp.task('default', () => {
  return gulp.src('./view/assets/css/common.blocks/style.css')
    .pipe(postcss(processors))
    .pipe(rename({
      suffix: '.min'
    }))
    .pipe(gulp.dest('./view/assets/css/'));
});
