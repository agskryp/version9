'use strict';
 
var gulp = require('gulp');
var sass = require('gulp-sass');
  
sass.compiler = require('node-sass');
  
gulp.task('sass', function () {
  return gulp.src('./sass/**/*.scss')
    .pipe(sass.sync({outputStyle: 'compressed'}).on('error', sass.logError))
    .pipe(gulp.dest('./'));
});

gulp.task('watch', function() {
  gulp.watch('./old-sass/**/*.scss', gulp.series('sass'));
  gulp.watch('./sass/**/*.scss', gulp.series('sass'));
});
