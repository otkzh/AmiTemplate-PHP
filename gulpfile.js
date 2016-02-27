var gulp = require('gulp');
var path = require('path');
var compass = require('gulp-compass');
var cssmin = require('gulp-cssmin');
var browserSync = require('browser-sync');
var plumber = require('gulp-plumber');
var notify = require('gulp-notify');
var prettify = require('gulp-prettify');
var imagemin = require('gulp-imagemin');
var pngquant  = require ('imagemin-pngquant');

//↓setting

var hostName = "192.168.33.50";//browserSyncするローカルIPか localHostNameを記載

var dir = {
	"base": "./public", // 作業用フォルダ
  "dest": "./dest" //納品用データー格納フォルダ
}

//各種パス関連
var paths = {
	"scss": dir.base + "/**/*.scss",
	"css"	: dir.base + "/**/*.css",
	"php"	: dir.base + "/**/*.{php,html}",
	"js"	: dir.base + "/**/*.{js,htc}",
  "img"	: dir.base + "/**/*.{png,jpg,gif,pdf}",
  "font"	: dir.base + "/**/*.{eot,svg,ttf,woff,woff2,otf}",
}

//エラー表記
var plumberErrorHandler = {
	errorHandler: notify.onError({
		message: "Error: <%= error.message %>"
	})
};

//css圧縮 / scss/compassコンパイル
gulp.task('compass', function () {
  gulp.src(paths.scss)
  .pipe(plumber(plumberErrorHandler))
  .pipe(compass({
    config_file : dir.base + "/config.rb",
    css         : dir.base + "/css",
    sass        : dir.base + "/sass",
    image       : dir.base + "/img",
    style       : "expanded",
    comments    : true,
    time        : true
  }))
  .pipe(cssmin())
  .pipe(gulp.dest(dir.dest + "/css"));
});

//cssの圧縮
gulp.task('css', function () {
    gulp.src(dir.base + "/**/*.css")
    .pipe(cssmin())
    .pipe(gulp.dest(dir.dest));
});

//php・html 整形
gulp.task('html', function () {
  gulp.src(paths.php)
  .pipe(prettify({
    indent_size: 2,
//    indent_inner_html: true,
    unformatted: ['pre', 'code','a'],
  }))
  .pipe(gulp.dest(dir.base))
  .pipe(prettify({indent_size: 0}))
  .pipe(gulp.dest(dir.dest))
});

//画像圧縮
gulp.task('img', function () {
  gulp.src(paths.img)
  .pipe(gulp.dest(dir.base))
  .pipe(imagemin({
    progressive: true,
    svgoPlugins: [{removeViewBox: false}],
    use: [pngquant()]
  }))
  .pipe(gulp.dest(dir.dest))
});

//font周り 将来的にはsvgをiconfontにまとめるようする
gulp.task('font', function () {
  gulp.src(paths.font)
  .pipe(gulp.dest(dir.dest))
});

//js関連　お好みで改造する。coffeeお好き？
gulp.task('js', function () {
  gulp.src(paths.js)
  .pipe(gulp.dest(dir.dest))
});


// browser-sync
gulp.task('browser-sync', function () {
	browserSync({
		proxy: hostName,
		port: 4000
	});
});

gulp.task('bs-reload', function () {
	browserSync.reload();
});

//納品ファイル書き出し用の記述
gulp.task('dest',['img','font','js','compass','css','html']);

//gulp
gulp.task('default', ['browser-sync'], function () {
	gulp.watch(paths.php ,['html'], function () {
    browserSync.reload();
  });
});
