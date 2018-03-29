var gulp        = require('gulp');
var browserSync = require('browser-sync').create();

/*// Static server
gulp.task('browser-sync1', function() {
    browserSync.init({
        server: {
            baseDir: "./"
        }
    });
});*/

// or...

gulp.task('browser-sync', function() {
    browserSync.init({
        proxy: "localhost",
        port: 8080
    });

	gulp.watch('**/*.js').on('change', browserSync.reload);
	gulp.watch('**/*.css').on('change', browserSync.reload);
    gulp.watch('**/*.php').on('change', browserSync.reload);

    cache.clearAll();
});

gulp.task('alarm', function() {
	console.log('Hello Zell');
});