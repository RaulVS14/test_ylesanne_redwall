let gulp = require('gulp');

function build() {
    gulp.src([
        './node_modules/bootstrap/dist/css/bootstrap.min.*',
        './node_modules/aos/dist/aos.css',
    ]).pipe(gulp.dest('./assets/vendor/css/'));
    gulp.src([
        './node_modules/bootstrap/dist/js/bootstrap.min.*',
        './node_modules/aos/dist/aos.js*',
    ]).pipe(gulp.dest('./assets/vendor/js/'));
}

exports.build = build;
