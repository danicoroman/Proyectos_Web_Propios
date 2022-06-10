const { src, dest, watch, parallel } = require("gulp");

//CSS
const sass = require("gulp-sass")(require('sass'));
const plumber = require('gulp-plumber');

//Imágenes
const cache = require('gulp-cache');
const imagemin = require('gulp-imagemin');
const webp = require('gulp-webp');

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

function versionWebp(done) {
    const opciones = {
        quality: 50
    }
    src('src/img/**/*.{png,jpg}')
        .pipe(webp(opciones))
        .pipe(dest('build/img'));

    done();
}

function imagenes(done) {
    const opciones = {
        optimizationLevel: 3
    }
    src('src/img/**/*.{png,jpg}')
        .pipe(cache(imagemin(opciones)))
        .pipe(dest('build/img'));


    done();
}

exports.css = css;
exports.imagenes = imagenes;
exports.versionWebp = versionWebp;
exports.dev = parallel(imagenes, versionWebp, dev);