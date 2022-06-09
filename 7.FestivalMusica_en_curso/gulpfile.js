const { src, dest, watch } = require("gulp");
const sass = require("gulp-sass")(require('sass'));
const plumber = require('gulp-plumber');

function css(done) {
    //Identificar el archivo SASS-src
    //Compilarlo-
    //Almacenarla en el disco duro-dest
    src('src/scss/**/*.scss').pipe(plumber()).pipe(sass()).pipe(dest('build/css'))


    done(); //Callback que avisa a gulp cuando lleguemos al final
}

function dev(done) {
    watch('src/scss/**/*.scss', css);

    done();
}

exports.css = css;
exports.dev = dev;