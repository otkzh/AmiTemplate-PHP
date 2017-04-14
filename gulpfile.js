var gulp = require('gulp');
var path = require('path');

//ベース
var browserSync = require('browser-sync');
var plumber = require('gulp-plumber');
var notify = require('gulp-notify');
var rename = require('gulp-rename');

//css/scss
var sass = require('gulp-sass');
var sassImage = require('gulp-sass-image');
var autoprefixer = require('gulp-autoprefixer');
var cssmin = require('gulp-cssmin');

//html phpはなし

//画像ファイル用
var imagemin = require('gulp-imagemin');
var pngquant = require('imagemin-pngquant');

//js/ts/modernizr
var typescript = require('gulp-typescript');
var webpack = require('gulp-webpack');
var webpacks = require("webpack");
var modernizr = require('gulp-modernizr');
var uglify = require('gulp-uglify');

//↓setting

var hostName = "192.168.33.50"; //browserSyncするローカルIPを記載

var dir = {
  "dev"  : "public", // 作業用フォルダ
  "dest" : "dest", //納品用データー格納フォルダ
  "str"  : "", // ディレクトリ構造※トップディレクトリ
}

//各種パス関連
var paths = {
  "html"  : "/**/*.{php,html,txt,text,xml,tsv}",
  "scss"  : "/**/sass/**/*.scss",
  "css"   : "/**/css/**/*.css",
  "ts"    : "/**/ts/**/*.ts",
  "js"    : "/**/js/**/*.js",
  "img"   : "/**/*.{png,jpg,gif,pdf,ico}",
  "font"  : "/**/*.{eot,svg,ttf,woff,woff2,otf}",
  "no"    : ("!**/_*","!**/_**"),
}

// browser-sync
gulp.task('browser-sync', function () {
  browserSync.init({
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

//イメージサイズを取得しscssに書き出し
gulp.task('sass-image', function () {
  return gulp.src([dir.dev + paths.img,"!**/*.{ico,pdf}",paths.no])
    .pipe(sassImage({
      targetFile: '_sass-image.scss',
      // template: 'your-sass-image-template.mustache',
      images_path: dir.dev + dir.str +'/img',
      css_path: dir.dev + dir.str + '/css',
      prefix: 'icon-',
      includeData:false,
      createPlaceholder:false
    }))
    .pipe(rename(function(path){
      //console.log(path);
      path.dirname = '/';
  }))
  .pipe(gulp.dest(dir.dev + dir.str + '/sass/_mixins'));
});


//scss - css圧縮
gulp.task('css', function () {
  return gulp.src(dir.dev + paths.scss)
    .pipe(plumber(plumberErrorHandler))
    .pipe(sass.sync().on('error', sass.logError))
    .pipe(autoprefixer({
      browsers: ['last 4 versions', 'android >= 4.1', 'IE 9'],
    }))
    .pipe(rename(function(path){
      path.dirname = '/'; 
      //console.log(path);
    }))
    .pipe(gulp.dest(dir.dev + dir.str + '/css'));
});

gulp.task('css-dest' , function () {
  return gulp.src([dir.dev + paths.css , paths.no] ,{base:dir.dev})
    .pipe(cssmin())
    .pipe(gulp.dest(dir.dest));
});

//php・html
gulp.task('html', function () {
  //
});

gulp.task('html-dest', ['html'], function () {
  return gulp.src([dir.dev + paths.html , paths.no],{base: dir.dev})
    .pipe(gulp.dest(dir.dest))
});

//画像 圧縮はgulp img-min：dir.dev内imgを圧縮->dest

gulp.task('img-dest', function () {
  return gulp.src([dir.dev + paths.img  , paths.no],{base: dir.dev})
    .pipe(gulp.dest(dir.dest));
});

gulp.task('img-min',function(){
  return gulp.src([dir.dest + paths.img , paths.no] , {base : dir.dest})
    .pipe(imagemin(
        [pngquant({quality: '40-70', speed: 1})]
    ))
    .pipe(gulp.dest(dir.dest));
});


//font周り 将来的にはsvgをiconfontにまとめるようする
gulp.task('font-dest', function () {
  return gulp.src(dir.dev + paths.font)
    .pipe(gulp.dest(dir.dest))
});


//js関連：typescript仕様
gulp.task('ts', function () {
  var option = typescript.createProject({
    module: 'commonjs',
    target: 'ES5',
    removeComments: true, // TypeScriptで記述したコメントをコンパイルしない
    noEmitOnError: false // チェックエラーが出てもコンパイルするかの設定
  });
  return gulp.src(paths.ts)
    .pipe(typescript(option))
    .pipe(gulp.dest(dir.base + "/ts/"));
});

gulp.task('webpack', function () {
  return webpack({
      entry: {
        common: './' + dir.dev + dir.str + '/ts/common.js',
        vendor: './' + dir.dev + dir.str + '/ts/vendor.js',
      },
      output: {
        filename: '[name].js',
      },
      module: {
        //ローダーモジュール
      },
      resolve: {
        alias: {
          Velocity: __dirname + '/node_modules/velocity-animate/velocity.min.js',
          Pjax: __dirname + '/public/ts/vendor/jquery.pjax.min.js',
        }
      }
    })
    .pipe(gulp.dest(dir.dev + dir.str + '/js/'));
});

gulp.task('modernizr', ['webpack'], function () {
  gulp.src(['public/js/**/*.js', '!**/modernizr.js', 'public/css/**/*.css'])
    .pipe(modernizr({
      options: [
        'setClasses',
        'addTest',
        'html5printshiv',
        'testProp',
        'fnBind',
      ]
    }))
    .pipe(gulp.dest(dir.dev + dir.str + "/js/"));
});

gulp.task('js', ['modernizr']),function () {};

gulp.task('js-dest', ['js'], function () {
  return gulp.src(dir.dev + paths.js)
    .pipe(uglify())
    .pipe(gulp.dest(dir.dest))
});

//納品ファイル書き出し用の記述
gulp.task('dest', ['img-dest', 'font-dest', 'js-dest', 'css-dest', 'html-dest']);


//gulp watchタスク
gulp.task('default', ['browser-sync'], function () {
  gulp.watch(dir.dev + paths.html).on("change", browserSync.reload);
  gulp.watch(dir.dev + paths.font).on("change", browserSync.reload);
  gulp.watch(dir.dev + paths.css).on("change", browserSync.reload);
  gulp.watch(dir.dev + paths.js).on("change", browserSync.reload);
  gulp.watch(dir.dev + paths.img, ['sass-image']);
  gulp.watch(dir.dev + paths.scss, ['css']);
  gulp.watch(dir.dev + path.ts, ['ts']);
  gulp.watch([dir.dev + '/**/ts/**/*.js', paths.no, '!**/modernizr.js'], ['js']);
});
