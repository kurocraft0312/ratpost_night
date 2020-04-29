const { src,dest,watch,parallel } = require('gulp');
const gulpPug = require('gulp-pug');
const gulpSass = require('gulp-sass'); 
const gulpImage = require('gulp-image');

function compressSass() {
    // コンパイルしたいファイル群
    return src("assets/scss/style.scss")
    // pipe()は関数合成
    .pipe(
        // コンパイル後のCSSを最適化
        sass({
            outputStyle: "compressed"
        })
    )
    // コンパイル後は、ディレクトリ外にCSSを吐き出し＆保存
    .pipe(dest(""));
}

function compressImage() {
    return src("assets/img/*")
    .pipe(image())
    .pipe(dest(""));
}

// 常に監視（タスク自動化）
function WatchOptimizeFiles() {
    return watch
}
exports.default = WatchOptimizeFiles;