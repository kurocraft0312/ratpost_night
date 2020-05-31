/******
ここでやりたいこと
・JSの結合＆吐き出し処理
・webpack-bundle-analyzerを使って含有ファイルの重い原因となっているファイルの特定
******/
module.exports = {
    mode: 'development',
    entry: '/src/index.js',
    output: {
        filename: 'dest/js/index.js',
    }
}