// 1. module読み込み
const { src, dest, watch, series, parallel } = require("gulp");

//sass
const plumber = require("gulp-plumber");
const sass = require("gulp-sass")(require("sass"));
const notify = require("gulp-notify");
const postcss = require("gulp-postcss");
const autoprefixer = require("gulp-autoprefixer");
const cleanCSS = require("gulp-clean-css");
const rename = require("gulp-rename");
const sourcemaps = require("gulp-sourcemaps");
const mqpacker = require("css-mqpacker");

//画像圧縮
const imagemin = require("gulp-imagemin");
const imageminMozjpeg = require("imagemin-mozjpeg");
const imageminPngquant = require("imagemin-pngquant");
// const imageminSvgo = require("imagemin-svgo");

//ブラウザリロード
const browserSync = require("browser-sync");

//参照元パス
const srcPath = {
  css: "scss/**/*.scss",
  img: "images/**/*",
  js: "js/*.js",
  php: "*.php",
};

//出力先パス
const distPath = {
  css: "css/",
  img: "dist/images/",
};

//postcss-cssnext ブラウザ対応条件 prefix 自動付与
const browsers = [
  "last 2 versions",
  "> 5%",
  "ie = 11",
  "not ie <= 10",
  "ios >= 8",
  "and_chr >= 5",
  "Android >= 5",
];

// 2. 関数定義
//sassコンパイル
const cssSass = () => {
  return src(srcPath.css) //コンパイル元
    .pipe(
      plumber(
        //エラーが出ても処理を止めない
        {
          errorHandler: notify.onError("Error:<%= error.message %>"),
          //エラー出力設定
        }
      )
    )
    .pipe(sass({ outputStyle: "expanded" }))
    .pipe(postcss([mqpacker()])) // メディアクエリを圧縮
    .pipe(autoprefixer()) // ベンダープレフィックスを付与
    .pipe(dest(distPath.css)) //コンパイル先（style.css）
    .pipe(cleanCSS()) // CSS圧縮
    .pipe(
      rename({
        extname: ".min.css", //.min.cssの拡張子にする
      })
    )
    .pipe(dest(distPath.css)); //コンパイル先（style.min.css）
};

//画像圧縮（デフォルトの設定）
const imgImagemin = () => {
  return src(srcPath.img)
    .pipe(
      imagemin(
        [
          imageminMozjpeg({
            quality: 80,
          }),
          imageminPngquant(),
          // imageminSvgo({
          //   plugins: [
          //     {
          //       removeViewbox: false,
          //     },
          //   ],
          // }),
        ],
        {
          verbose: true,
        }
      )
    )
    .pipe(dest(distPath.img));
};

//ローカルサーバー立ち上げ、ファイル監視と自動リロード
const browserSyncFunc = () => {
  browserSync.init(browserSyncOption);
};
const browserSyncOption = {
  proxy: "localhost:8080", //環境によって変更する
  open: true,
  reloadOnRestart: true,
  notify: false,
};

//リロード
const browserSyncReload = (done) => {
  browserSync.reload();
  done();
};

// 3. タスク定義
const watchFiles = () => {
  watch(srcPath.css, series(cssSass, browserSyncReload));
  watch(srcPath.img, series(imgImagemin, browserSyncReload));
  watch(srcPath.php, series(browserSyncReload));
  watch(srcPath.js, series(browserSyncReload));
};
// exports.default = watchSassFiles;
// exports.default = series(watchSassFiles);
exports.default = series(
  series(cssSass, imgImagemin),
  parallel(watchFiles, browserSyncFunc)
);
