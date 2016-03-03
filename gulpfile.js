var gulp = require('gulp');
var path = require('path');

//基礎
var browserSync = require('browser-sync');
var plumber = require('gulp-plumber');
var notify = require('gulp-notify');

//css/scss/compass用
var compass = require('gulp-compass');
var cssmin = require('gulp-cssmin');

//html php 整形
var prettify = require('gulp-prettify');

//画像ファイル用
var imagemin = require('gulp-imagemin');
var pngquant = require('imagemin-pngquant');

//↓setting

var hostName = "192.168.33.50"; //browserSyncするローカルIPか localHostNameを記載

var dir = {
  "base": "./public", // 作業用フォルダ
  "dest": "./dest" //納品用データー格納フォルダ
}

//各種パス関連
var paths = {
  "scss": dir.base + "/**/*.scss",
  "css": dir.base + "/**/*.css",
  "html": dir.base + "/**/*.{php,html}",
  "js": dir.base + "/**/*.{js,htc}",
  "img": dir.base + "/**/*.{png,jpg,gif,pdf}",
  "font": dir.base + "/**/*.{eot,svg,ttf,woff,woff2,otf}",
}

// browser-sync
gulp.task('browser-sync', function() {
  browserSync({
    proxy: hostName,
    //port: 4000
  });
});
gulp.task('bs-reload', function() {
  browserSync.reload();
});

//エラー表記
var plumberErrorHandler = {
  errorHandler: notify.onError({
    message: "Error: <%= error.message %>"
  })
};

//scss & compassコンパイル - css圧縮
gulp.task('compass', function() {
  return　 gulp.src(paths.scss)
    .pipe(plumber(plumberErrorHandler))
    .pipe(compass({
      config_file: dir.base + "/config.rb",
      css: dir.base + "/css",
      sass: dir.base + "/sass",
      image: dir.base + "/img",
      style: "expanded",
      comments: true,
      time: true
    }));
});
gulp.task('css',['compass'], function() {
  return gulp.src(dir.base + "/**/*.css")
    .pipe(cssmin())
    .pipe(gulp.dest(dir.dest));
});
gulp.task('css-reload', ['css'], function() {
  browserSync.reload();
});

//php・html 整形
gulp.task('html', function() {
  return gulp.src(paths.html)
    .pipe(prettify({
      indent_size: 0
    }))
    .pipe(gulp.dest(dir.dest))
});
gulp.task('html-reload', ['html'], function() {
  browserSync.reload();
});

//画像圧縮
gulp.task('img', function() {
  return gulp.src(paths.img)
    .pipe(gulp.dest(dir.base))
    .pipe(imagemin({
      progressive: true,
      svgoPlugins: [{
        removeViewBox: false
      }],
      use: [pngquant()]
    }))
    .pipe(gulp.dest(dir.dest))
});
gulp.task('img-reload', ['img'], function() {
  browserSync.reload();
});

//font周り 将来的にはsvgをiconfontにまとめるようする
gulp.task('font', function() {
  return gulp.src(paths.font)
    .pipe(gulp.dest(dir.dest))
});
gulp.task('font-reload', ['font'], function() {
  browserSync.reload();
});

//js関連　お好みで改造する。coffeeお好き？
gulp.task('js', function() {
  return gulp.src(paths.js)
    .pipe(gulp.dest(dir.dest))
});
gulp.task('js-reload', ['js'], function() {
  browserSync.reload();
});

//納品ファイル書き出し用の記述
gulp.task('dest', ['img', 'font', 'js', 'css', 'html']);

//gulp watchタスク
gulp.task('default', ['browser-sync'], function() {
  gulp.watch(paths.scss, ['css-reload']);
  gulp.watch(paths.html, ['html-reload']);
  gulp.watch(paths.img, ['img-reload']);
  gulp.watch(paths.font, ['font-reload']);
  gulp.watch(paths.js, ['js-reload']);
});
