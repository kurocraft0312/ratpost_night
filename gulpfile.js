/**
使っているプラグイン
sass
fibers
gulp-sass
del(destにsrcで消したファイルが残らないようにするため)
gulp-clean-css(除去)
gulp-image
gulp-rename(保留)
gulp-plumber(除去)
gulp-notify(除去)
browser-sync
**/
const { src,dest,watch,series,parallel } = require('gulp');
const DartSass = require('sass');
const Fiber = require('fibers');
const del = require('del');
const gulpSass = require('gulp-sass');
const gulpImage = require('gulp-image');
const browserSync = require('browser-sync').create();

DartSass.renderSync({
    file: "src/scss/style.scss",//コンパイルするファイルの指定
    importer: function(url,prev,done) {
        //
        return url("style.css");
    },
    fiber: Fiber,
});
/*****
del
******/
function delDir() {
    return del('dest/*')
}
/*****
Sass
*****/
function compressSass() {
    // コンパイルしたいファイル群
    return src("src/scss/style.scss")
    // pipe()は関数合成＆コンパイル後のCSSを最適化(ここでsrcで読み込んだファイルにやりたいことを記載する)
    .pipe(gulpSass({outputStyle: "compressed"}))
    // コンパイル後は、ディレクトリ外にCSSを吐き出し＆保存
    .pipe(dest("dest/css/"))
    .pipe(browserSync.reload({
        stream: true
    }));
}
/*****
Image
*****/
function compressImage() {
    return src("src/img/*")
    .pipe(gulpImage())
    .pipe(dest("dest/img/"))
    .pipe(browserSync.reload({
        stream: true
    }));
}
/*****
browserSync
*****/
function autoBuild() {
    // https://qiita.com/manpuku/items/ee530c4963d50b6f341f
    browserSync.init({
        //https://www.webprofessional.jp/wordpress-theme-automation-with-gulp/
        files: ["*.php"],//対象とするファイル
        proxy: "http://wpthemedev.local/",//開発環境のURLを指定
        // reloadDelay: 2000
    });
}

browserSync.reload();

function WatchOptimizeFiles() {
    return watch(["src/scss/*.scss" , "*.jpg" , "*.png"],series(delDir,parallel(compressSass,compressImage),autoBuild));
}
// タスク群出力(コンパイルする際、内容が再生成されないので原因を調査する)
exports.WatchOptimizeFiles = WatchOptimizeFiles;