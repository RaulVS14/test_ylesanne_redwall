let gulp = require('gulp');

function build() {
    gulp.src(['./node_modules/bootstrap/dist/css/bootstrap.min.*']).pipe(gulp.dest('./assets/vendor/css/'));
    gulp.src(['./node_modules/bootstrap/dist/js/bootstrap.min.*']).pipe(gulp.dest('./assets/vendor/js/'));
}

exports.build = build;
