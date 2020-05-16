/****
Gulp使い方
// https://www.youtube.com/watch?v=TRnpXvg3NtA&list=PLC_Jqbgu7I6ag6Xie7_J2HZYtPpIZBvCW&index=11

①使うプラグインを宣言
const 定数名 = require('プラグイン名');

②処理をまとめる
function 関数名() {
    return src('コンパイルしたいファイル・ファイル群');2-1 src()で変化を加えるファイルを指定
    .pipe()：関数要素を結合する　2-2 ファイルを結合して同時に変化を加えたいものをつなぐ
    .dest():コンパイルしたファイルの吐き出し先　2-3　dest()でsrc()から変更したファイルの吐き出し先を指定する
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
gulp-sass
gulp-clean-css(除去)
gulp-image
gulp-rename(保留)
gulp-plumber(除去)
gulp-notify(除去)
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
const gulpSass = require('gulp-sass');
const gulpImage = require('gulp-image');
const browserSync = require('browser-sync').create();

// https://qiita.com/yuucu/items/a56d3d0f1313a9897f7e

// https://github.com/sass/dart-sass/blob/master/README.md#javascript-api
// https://sass-lang.com/documentation/js-api
// https://nju33.com/sass/@forward
// https://sass-lang.com/documentation/at-rules/use
// https://blog.rhyztech.net/sass_use_and_forward/

// Dart-sass:https://github.com/sass/dart-sass/blob/master/README.md#javascript-api
// Dart-sassの引数について（引数はnode-sassと同一）：https://github.com/sass/node-sass
// https://github.com/sass/dart-sass/issues/23 render()だとNoSuchMethodError: method not found: 'call'になるので、renderSync()で読み込み速度を改善してエラーに対処
DartSass.renderSync({
    file: 'src/scss/style.scss',//コンパイルするファイルの指定
    importer: function(url,prev,done) {
        //
        return url('style.css');
    },
    fiber: Fiber,
    // outputStyle: "compressed" // コメント・インデント・改行を削除＆圧縮して読み込む（EasySassの引数の内容を参考）
});
/*****
Sass
*****/
function compressSass() {
    // コンパイルしたいファイル群
    return src("src/scss/style.scss")
    // pipe()は関数合成＆コンパイル後のCSSを最適化(ここでsrcで読み込んだファイルにやりたいことを記載する)
    .pipe(gulpSass({outputStyle: "compressed"}))
    // コンパイル後は、ディレクトリ外にCSSを吐き出し＆保存
    .pipe(dest("dest/css/"));
}
// 成功
// exports.compressSass = compressSass;
/*****
Image
*****/
function compressImage() {
    return src("src/img/*")
    .pipe(gulpImage())
    .pipe(dest("dest/img/"));
}
//成功
// exports.compressImage = compressImage;
/*****
browserSync
*****/
function autoBuild() {
    // https://qiita.com/manpuku/items/ee530c4963d50b6f341f
    browserSync.init({
        files: ['*.php'],
        proxy: 'http://wpthemedev.local/'
        // server: {baseDir: ''}
    });
}

browserSync.reload();
// 成功
// exports.autobuild = autobuild;
// 常に監視（タスク自動化・同時に起動したいコマンドまとめ）
// https://gulpjs.com/docs/en/api/parallel
function WatchOptimizeFiles() {
    return watch(series(parallel(compressSass,compressImage),autoBuild));
}
// タスク群出力
exports.WatchOptimizeFiles = WatchOptimizeFiles;