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

//html phpはなし

//画像ファイル用
var imagemin = require('gulp-imagemin');
var pngquant = require('imagemin-pngquant');

//js/ts/modernizr
var typescript = require('gulp-typescript');
var webpack = require('gulp-webpack');
var webpacks = require("webpack");
var modernizr = require('gulp-modernizr');

//↓setting

var hostName = "192.168.33.50"; //browserSyncするローカルIPを記載

var dir = {
  "base": "public", // 作業用フォルダ
  "dest": "dest" //納品用データー格納フォルダ
}

//各種パス関連
var paths = {
  "scss": dir.base + "/sass/**/*.scss",
  "css": ["public/css/**/*.css", '!_**/*', '!**/_*'],
  "html": ["public/**/*.{php,html,txt,text,xml,tsv}", '!_**/*', '!**/_*'],
  "js": ["public/**/js/**/*.js", '!**/_*.js'],
  "ts": [dir.base + "/ts/**/*.ts", '!_**/*', '!**/_*'],
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

//gulp.task('bs-reload', function () {
//  browserSync.reload();
//});

//エラー表記
var plumberErrorHandler = {
  errorHandler: notify.onError({
    message: "Error: <%= error.message %>"
  })
};

//scss & compassコンパイル - css圧縮
gulp.task('css', function () {
  return gulp.src(paths.scss)
    .pipe(plumber(plumberErrorHandler))
    .pipe(compass({
      project: path.join(__dirname, 'public'),
      sass: "sass",
      image: "img",
      style: "expanded",
      comments: true,
      time: true
    }))
    .pipe(autoprefixer({
      browsers: ['last 2 versions', 'android >= 4.1', 'IE 9'],
    }))
    .pipe(gulp.dest("css"))
    .pipe(browserSync.stream());
});

gulp.task('css-dest', ['css'], function () {
  return gulp.src("public/css/**/*.css")
    .pipe(cssmin())
    .pipe(gulp.dest('dest/css'));
});

//php・html
gulp.task('html', function () {
  browserSync.reload();
});
gulp.task('html-dest', ['html'], function () {
  return gulp.src(paths.html)
    .pipe(gulp.dest(dir.dest))
});

//画像圧縮
gulp.task('img', function () {
  browserSync.reload();
});
gulp.task('img-dest', ['img'], function () {
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
gulp.task('font', function () {
  browserSync.reload();
});
gulp.task('font-dest', ['font'], function () {
  return gulp.src(paths.font)
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
        common: './public/ts/common.js',
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
    .pipe(gulp.dest(dir.base + '/js/'));
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
    .pipe(gulp.dest(dir.base + "/js/"))
    .pipe(browserSync.stream());
});

gulp.task('js', ['modernizr']),
  function () {

  }


gulp.task('js-dest', ['ts', 'modernizr'], function () {
  return gulp.src(paths.js)
    .pipe(gulp.dest(dir.dest))
});

gulp.task('js-dest', function () {
  return gulp.src(paths.js)
    .pipe(gulp.dest('dest'))
});

//納品ファイル書き出し用の記述
gulp.task('dest', ['img-dest', 'font-dest', 'js-dest', 'css-dest', 'html-dest']);

//gulp watchタスク
gulp.task('default', ['browser-sync'], function () {
  gulp.watch('public/**/*.scss', ['css']);
  gulp.watch(paths.html, ['html']);
  gulp.watch(paths.img, ['img']);
  gulp.watch(paths.font, ['font']);
  gulp.watch(['public/**/ts/**/*.ts', '!**/_*.ts'], ['ts']);
  gulp.watch(['public/**/ts/**/*.js', '!**/_*.js', '!**/modernizr.js'], ['modernizr']);
  //gulp.watch("./public/css/**/*.css").on("change", browserSync.reload);
});