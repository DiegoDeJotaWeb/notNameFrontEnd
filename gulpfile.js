var gulp        = require('gulp');
var browserSync = require('browser-sync').create();
var sass        = require('gulp-sass');


//compilar o sass

gulp.task('sass', function(){
    return gulp.src(['node_modules/bootstrap/scss/bootstrap.scss', 'src/sass/*.sass'])
    .pipe(sass())
    .pipe(gulp.dest('src/css'))
    .pipe(browserSync.stream());
    
});


//mover js para src /js

gulp.task('js', function(){
    return gulp.src(['node_modules/bootstrap/dist/js/bootstrap.min.js', 'node_modules/jquery/dist/jquery.min.js', 'node_modules/popper.js/dist/umd/popper.min.js'])
    .pipe(gulp.dest("src/js"))
    .pipe(browserSync.stream());
    
});



//servidor para olhar os html/sass

gulp.task('serve', ['sass'], function(){
        browserSync.init({ server:"./src"});
gulp.watch(['node_modules/bootstrap/scss/bootstrap.scss', 'src/sass/*.sass'], ['sass']);
gulp.watch("[src/*.php]").on('change', browserSync.reload);
gulp.watch("[src/*.html]").on('change', browserSync.reload);
});

gulp.task('default', ['js', 'serve']);