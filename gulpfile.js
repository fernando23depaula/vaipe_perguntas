var gulp = require('gulp');
var sass = require('gulp-sass');
var rename = require('gulp-rename');
// var cssFormat = require('gulp-css-format');

/*
 * Variables
 */
// Sass Source
var scssFiles = 'src/sass/**/*.scss';

// CSS destination
var cssDest = 'css';

// Options for development
var sassDevOptions = {
  outputStyle: 'expanded'
}

// Options for production
var sassProdOptions = {
  outputStyle: 'compressed'
}

/*
 * Tasks
 */
// Task 'sassdev' - Run with command 'gulp sassdev'
gulp.task('sassdev', function() {
  return gulp.src(scssFiles)
    .pipe(sass(sassDevOptions).on('error', sass.logError))
    .pipe(gulp.dest(cssDest));
});

// Task 'sassprod' - Run with command 'gulp sassprod'
gulp.task('sassprod', function() {
  return gulp.src(scssFiles)
    .pipe(sass(sassProdOptions).on('error', sass.logError))
    .pipe(rename('style.min.css'))
    .pipe(gulp.dest(cssDest));
});

// gulp.task('css-format', function() {
//     gulp.src(cssDest)
//     .pipe(cssFormat({indent: 1, hasSpace: true}))
//     .pipe(gulp.dest(cssDest));
// });

// Task 'watch' - Run with command 'gulp watch'
gulp.task('watch', function() {
  gulp.watch(scssFiles, ['sassdev', 'sassprod']);
});


// Default task - Run with command 'gulp'
gulp.task('default', ['sassdev', 'sassprod','watch']);
