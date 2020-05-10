/****Gulp使い方
// https://www.youtube.com/watch?v=TRnpXvg3NtA&list=PLC_Jqbgu7I6ag6Xie7_J2HZYtPpIZBvCW&index=11
①使うプラグインを宣言
const 定数名 = require('プラグイン名');

②処理をまとめる
function 関数名() {
    return src('コンパイルしたいファイル・ファイル群');
    .pipe()：関数要素を結合する
    .dest():コンパイルしたファイルの吐き出し先
}

③定義したいファイルにオプションを設定する(吐き出す際に可能な限り、一行で済むようにする処理)
    .watch():自動化処理を監視する
    .series():直列で処理したい内容
    .parallel():並列で処理したい内容

④exports.オプション名 = オプション名;でタスクの自動化内容を実行する
****/
/**
使っているプラグイン
sass
fibers
gulp-pug
gulp-sass
gulp-image
gulp-rename
browser-sync
**/
/**
設定内容
src：ファイルの吐き出し前
dest:ファイルの吐き出し先
**/
const { src,dest,watch,series,parallel } = require('gulp');
const DartSass = require('sass');
const Fiber = require('fibers');
const gulpPug = require('gulp-pug');
const gulpSass = require('gulp-sass');
const gulpImage = require('gulp-image');
const gulpRename = require('gulp-rename');
const browserSync = require('browser-sync');

// https://qiita.com/yuucu/items/a56d3d0f1313a9897f7e

// https://github.com/sass/dart-sass/blob/master/README.md#javascript-api
// https://sass-lang.com/documentation/js-api
// https://nju33.com/sass/@forward
// https://sass-lang.com/documentation/at-rules/use
// https://blog.rhyztech.net/sass_use_and_forward/

// Dart-sass:https://github.com/sass/dart-sass/blob/master/README.md#javascript-api
// Dart-sassの引数について（引数はnode-sassと同一）：https://github.com/sass/node-sass
DartSass.render({
    file: 'src/scss/style.scss',//コンパイルするファイルの指定
    importer: function(url,prev,done) {
        //
        return url('style.css');
    },
    fiber: Fiber,
    outputStyle: compressed // コメント・インデント・改行を削除＆圧縮して読み込む（EasySassの引数の内容を参考）
    // }, function(err, result) {
    //     return 
});

/*****************
compressPug・compressSass・compressImageという関数名は、watchメソッドで呼び出しやすくするために使う
*****************/

// https://qiita.com/s-katsumasa/items/0453736c5ab4d43cf265
// Pugは、出力先を分ける必要がありそうなので、テンプレートパーツは、パーツごとに処理を書き分ける

/*****
Pug(ファイルの拡張子を.html→.phpへ変換)【パーツ化されていないもの】
*****/
function compressPug() {
    //.pugのファイルをすべてスラッシュ配下に出力する
    return src("src/pug/*.pug")
    .pipe(gulpPug())
    .pipe(gulpRename({
        extname: ".php"
        }))
    .pipe(dest("/"));
    // .pipe(
    //     gulpPug({
    //         html: "/"
    //     })
    // )
}
/*****
Sass
*****/
function compressSass() {
    // コンパイルしたいファイル群
    return src("src/scss/style.scss")
    // pipe()は関数合成
    .pipe(
        // コンパイル後のCSSを最適化
        gulpSass({
            outputStyle: "compressed"
        })
    )
    // コンパイル後は、ディレクトリ外にCSSを吐き出し＆保存
    .pipe(dest("/"));
}
// Image
function compressImage() {
    return src("src/img/*")
    .pipe(
        image()
    )
    .pipe(dest(""));
}
// Rename
function rename()

// browserSync
function autobuild()

// 常に監視（タスク自動化・同時に起動したいコマンドまとめ）
function WatchOptimizeFiles() {
    return watch()
}
// タスク群出力
exports.default = WatchOptimizeFiles;