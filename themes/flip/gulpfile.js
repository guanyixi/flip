var gulp = require('gulp');
var sass = require('gulp-sass');
var concat = require('gulp-concat');
var autoprefixer = require('gulp-autoprefixer');
var browserSync = require('browser-sync').create();
var streamqueue  = require('streamqueue');

// Script
gulp.task('scripts', function() {
    return streamqueue({ objectMode: true },
        gulp.src('./js/skip-link-focus-fix.js'),
        gulp.src('./js/slick.min.js'),
        gulp.src('./js/slider.js'),
        gulp.src('./js/custom.js')
    )
    .pipe(concat('all.js'))
    .pipe(gulp.dest('./assets/dist'))
    .pipe(browserSync.stream());
});

// Styles
gulp.task('styles', function(){
    return gulp.src([
    	'./sass/style.scss',
    ])
    .pipe(sass())
    .pipe(concat('style.css'))
    .pipe(autoprefixer())
    .pipe(gulp.dest('./css'))
    .pipe(browserSync.stream());
});

//watch all scss files in sass folder.
gulp.task('watch', function(){
    browserSync.init({
        port: 8080,
    });
    
    gulp.watch('sass/**/*.scss', ['styles']);
    gulp.watch('js/*.js', ['scripts']);

    // gulp.watch("./*.php").on("change", browserSync.reload);
    // gulp.watch("sass/**/*.scss").on("change", browserSync.reload);
    // gulp.watch("js/*.js").on("change", browserSync.reload);
});
 
gulp.task('default', ['watch']);