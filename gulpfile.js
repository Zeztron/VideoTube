const gulp = require("gulp");
const php = require("gulp-connect-php");
const browerSync = require("browser-sync").create();

gulp.task("php", () => {
    php.server({
        base: "./",
        port: 80,
        keepalive:true
    })
});

gulp.task("browserSync", ['php'], () => {
    browerSync.init({
        proxy: "localhost:80",
        baseDir: "./",
        open: true,
        notify: false,
        browser: "google chrome"
    });
});

gulp.task("watch", ['browserSync'], () => {
    gulp.watch("./*.php", browerSync.reload);
    gulp.watch("./includes/*.php", browerSync.reload);
    gulp.watch("./includes/classes/*.php", browerSync.reload);
    gulp.watch("./assets/css/*.css", browerSync.reload);
    gulp.watch("./assets/**/*.js", browerSync.reload);
});