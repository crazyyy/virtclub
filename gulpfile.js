var gulp = require('gulp'),
    sass = require('gulp-ruby-sass'),
    autoprefixer = require('gulp-autoprefixer'),
    minifycss = require('gulp-minify-css'),
    jshint = require('gulp-jshint'),
    uglify = require('gulp-uglify'),
    imagemin = require('gulp-imagemin'),
    rename = require('gulp-rename'),
    concat = require('gulp-concat'),
    notify = require('gulp-notify'),
    cache = require('gulp-cache'),
    livereload = require('gulp-livereload'),
    compass = require('gulp-compass'),
    del = require('del');

gulp.task('styles', function() {
  return gulp.src('wp-virtclub/sass/*.sass')
    .pipe(sass({ style: 'expanded' }))
    .pipe(autoprefixer('last 3 version', 'safari 5', 'ie 8', 'ie 9', 'opera 12.1', 'ios 6', 'android 4'))
    .pipe(gulp.dest('wp-virtclub/css'))
    .pipe(rename({suffix: '.min'}))
    .pipe(minifycss())
    .pipe(gulp.dest('wp-virtclub/css'))
    .pipe(notify({ message: 'Styles task complete' }));
});

gulp.task('clean', function(cb) {
    del(['wp-virtclub/css'], cb)
});

gulp.task('default', ['clean'], function() {
    gulp.start('styles');
});

gulp.task('watch', function() {

  // Watch .scss files
  gulp.watch('wp-virtclub/sass/*.sass', ['styles']);


});



gulp.task('compass', function() {
  gulp.src('wp-virtclub/sass/*.sass')
  .pipe(compass({
    css: 'wp-virtcl/css',
    sass: 'wp-virtcl/sass',
    image: 'wp-virtcl/img'
  }))
  .on('error', function(err) {
    // Would like to catch the error here
  })
  .pipe(minifycss())
  .pipe(gulp.dest('wp-virtcl/temp'));
});