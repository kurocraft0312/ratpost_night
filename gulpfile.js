const { src,dest,watch,parallel } = require('gulp');
const DartSass = require('sass');
const Fiber = require('fibers');
const gulpPug = require('gulp-pug');
const gulpSass = require('gulp-sass');
const gulpImage = require('gulp-image');

// https://github.com/sass/dart-sass/blob/master/README.md#javascript-api
// https://sass-lang.com/documentation/js-api
// https://nju33.com/sass/@forward
// https://sass-lang.com/documentation/at-rules/use
// https://blog.rhyztech.net/sass_use_and_forward/
DartSass.render({
    file: '',
    importer: function(url,prev,done) {
        //
    },
    fiber: Fiber
    }, function(err, result) {
        //
});


function compressPug() {
    return src("")
}

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

// 常に監視（タスク自動化・同時に起動したいコマンドまとめ）
function WatchOptimizeFiles() {
    return watch()
}
exports.default = WatchOptimizeFiles;