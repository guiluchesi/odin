'use strict';

let gulp        = require('gulp'),
    stylus      = require('gulp-stylus'),
    bootstrap   = require('bootstrap-styl'),
    concat      = require('gulp-concat'),
    uglify      = require('gulp-uglify'),
    imagemin    = require('gulp-imagemin'),
    clean       = require('gulp-clean'),
    plumber     = require('gulp-plumber'),
    browserSync = require('browser-sync').create();

let cssDest       = '../assets/css/',
    cssOrigin     = 'stylus/',
    imgDest       = '../assets/images/',
    imgOrigin     = 'images/',
    jsDest        = '../assets/js/',
    jsOrigin      = 'js/',
    fontsDest     = '../assets/fonts/',
    fontsOrigin   = 'js/';

gulp.task('serve', () =>
  browserSync.init({
    proxy: 'localhost:8888/odin',
    port: '8000'
  })
);

gulp.task('stylus', () =>
  gulp.src([cssOrigin + 'main.styl', 'node_modules/animate.css/animate.min.css'])
  .pipe(plumber())
  .pipe(stylus({
    use: bootstrap(),
    compress: true
  }))
  .pipe(concat('main.css'))
  .pipe(gulp.dest(cssDest))
  .pipe(browserSync.stream())
);

gulp.task('js', () =>
    gulp.src(jsOrigin)
    .pipe(plumber())
    .pipe(concat('main.js'))
    .pipe(gulp.dest(jsDest))
    .pipe(browserSync.stream())
);

gulp.task('img', () =>
    gulp.src(imgOrigin)
    .pipe(plumber())
    .pipe(imagemin())
    .pipe(gulp.dest(imgOrigin))
    .pipe(browserSync.stream())
);

gulp.task('fonts', () =>
    gulp.src(fontsOrigin)
    .pipe(plumber())
    .pipe(gulp.dest(fontsDest))
);

gulp.task('watch', () => {
  gulp.watch('stylus/**/*', ['stylus']);
  gulp.watch('images/**/*', ['img']);
  gulp.watch('js/**/*', ['js']);
  gulp.watch('../*.php').on('change', browserSync.reload);
});


gulp.task('build', ['stylus', 'img', 'js', 'fonts']);
gulp.task('default', ['build', 'serve', 'watch']);
