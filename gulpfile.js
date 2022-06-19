let gulp = require('gulp');

function build() {
    gulp.src(['./node_modules/bootstrap/dist/css/bootstrap.min.css']).pipe(gulp.dest('./assets/vendor/css/'));
}

exports.build = build;
