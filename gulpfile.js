var gulp = require('gulp');
var path = require('path');

//ベース
var browserSync = require('browser-sync');
var plumber = require('gulp-plumber');
var notify = require('gulp-notify');

//css/scss/compass用
var compass = require('gulp-compass');
var autoprefixer = require('gulp-autoprefixer');
var cssmin = require('gulp-cssmin');

//html phpは変更なし

//画像ファイル用
var imagemin = require('gulp-imagemin');
var pngquant = require('imagemin-pngquant');

//typescript 
var typescript = require('gulp-typescript');
var babel = require("gulp-babel");

//↓setting

var hostName = "192.168.33.50"; //browserSyncするローカルIPか localHostNameを記載

var dir = {
  "base": "public", // 作業用フォルダ
  "dest": "dest" //納品用データー格納フォルダ
}

//各種パス関連
var paths = {
  "scss": dir.base + "/**/*.scss",
  "css": dir.base + "/**/*.css",
  "html": dir.base + "/**/*.{php,html,txt,text}",
  "js": dir.base + "/**/*.{js,htc}",
  "ts": dir.base + "/**/*.ts",
  "es6": dir.base + "/**/*.es6",
  "img": dir.base + "/**/*.{png,jpg,gif,pdf}",
  "font": dir.base + "/**/*.{eot,svg,ttf,woff,woff2,otf}",
}

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

//エラー表記
var plumberErrorHandler = {
  errorHandler: notify.onError({
    message: "Error: <%= error.message %>"
  })
};

//scss & compassコンパイル - css圧縮
gulp.task('compass', function () {
  return gulp.src(paths.scss)
    .pipe(plumber(plumberErrorHandler))
    .pipe(compass({
      css: dir.base + "/css",
      sass: dir.base + "/sass",
      image: dir.base + "/img",
      style: "expanded",
      comments: true,
      time: true
    }))
    .pipe(autoprefixer({
      browsers: ['last 2 versions','android >= 4.1','IE 9'],
    }))
    .pipe(gulp.dest(dir.base + "/css"));
});
gulp.task('css-reload', ['compass'], function () {
  browserSync.reload();
});
gulp.task('css-dest', ['compass'], function () {
  return gulp.src(dir.base + "/**/*.css")
    .pipe(cssmin())
    .pipe(gulp.dest(dir.dest));
});

//php・html
gulp.task('html-reload', function () {
  browserSync.reload();
});
gulp.task('html-dest', function () {
  return gulp.src(paths.html)
    .pipe(gulp.dest(dir.dest))
});

//画像圧縮
gulp.task('img-reload', function () {
  browserSync.reload();
});
gulp.task('img-dest', function () {
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


//font周り 将来的にはsvgをiconfontにまとめるようする
gulp.task('font-reload', function () {
  browserSync.reload();
});
gulp.task('font-dest', function () {
  return gulp.src(paths.font)
    .pipe(gulp.dest(dir.dest))
});

//js関連：typescript仕様

gulp.task('js', function(){
  return gulp.src(dir.base + '/js/pjax/localsocket.js')
       .pipe(babel({
            presets: ['es2015']
        }))
        .pipe(gulp.dest(dir.base + '/js/pjax/babel/'));
});

gulp.task('ts', function() {
     var options =  {
       target: 'ES5',
       sortOutput: true,
       noImplicitAny: true,
       removeComments: true,
       out: 'js/common.js'
     };
     return gulp.src([paths.ts,'!_**/*.ts'])
       .pipe(typescript(options))
       .pipe(gulp.dest(dir.base));
});

gulp.task('js-reload', function () {
  browserSync.reload();
});

gulp.task('js-dest',['ts'], function () {
  return gulp.src(paths.js)
    .pipe(gulp.dest(dir.dest))
});

//納品ファイル書き出し用の記述
gulp.task('dest', ['img-dest', 'font-dest','ts', 'js-dest', 'css-dest', 'html-dest']);

//gulp watchタスク
gulp.task('default', ['browser-sync'], function () {
  gulp.watch(paths.scss, ['css-reload']);
  gulp.watch(paths.html, ['html-reload']);
  gulp.watch(paths.img, ['img-reload']);
  gulp.watch(paths.font, ['font-reload']);
  gulp.watch(paths.ts, ['ts']);
  gulp.watch(paths.js, ['js-reload']);
});